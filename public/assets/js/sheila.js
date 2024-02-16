document.addEventListener('DOMContentLoaded', () => {
    const bird = document.getElementById('bird');
    let birdLeft = 220;
    let birdBottom = 100;
    let gravity = 2;
    let isGameOver = false;
    let gap = 430;

    function startGame() {
        birdBottom -= gravity;
        bird.style.bottom = birdBottom + 'px';
        bird.style.left = birdLeft + 'px';
    }
    let gameTimerId = setInterval(startGame, 20);

    function control(e) {
        if (e.keyCode === 32) {
            jump();
        }
    }

    function jump() {
        if (birdBottom < 500) birdBottom += 50;
        bird.style.bottom = birdBottom + 'px';
    }
    document.addEventListener('keyup', control);

    function generatePipe() {
        let pipeLeft = 500;
        let randomHeight = Math.random() * 60;
        let pipeBottom = randomHeight;
        const pipe = document.createElement('div');
        const pipeTop = document.createElement('div');
        if (!isGameOver) {
            pipe.classList.add('pipe');
            pipeTop.classList.add('pipeTop');
        }
        gameContainer.appendChild(pipe);
        gameContainer.appendChild(pipeTop);
        pipe.style.left = pipeLeft + 'px';
        pipeTop.style.left = pipeLeft + 'px';
        pipe.style.bottom = pipeBottom + 'px';
        pipeTop.style.bottom = pipeBottom + gap + 'px';

        function movePipe() {
            pipeLeft -= 2;
            pipe.style.left = pipeLeft + 'px';
            pipeTop.style.left = pipeLeft + 'px';

            if (pipeLeft === -60) {
                clearInterval(pipeTimerId);
                gameContainer.removeChild(pipe);
                gameContainer.removeChild(pipeTop);
            }
            if (
                pipeLeft > 200 && pipeLeft < 280 && birdLeft === 220 &&
                (birdBottom < pipeBottom + 153 || birdBottom > pipeBottom + gap - 200) ||
                birdBottom === 0 
            ) {
                gameOver();
                clearInterval(pipeTimerId);
            }
        }
        let pipeTimerId = setInterval(movePipe, 20);
        if (!isGameOver) setTimeout(generatePipe, 3000);
    }

    generatePipe();

    function gameOver() {
        clearInterval(gameTimerId);
        isGameOver = true;
        document.removeEventListener('keyup', control);
        alert('Game Over!');
    }
});
