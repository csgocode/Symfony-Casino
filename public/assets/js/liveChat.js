$(function() {
    var src = 'https://casinoroyal.ladesk.com/scripts/track.js';
    var s = $('<script></script>').attr({
        id: 'la_x2s6df8d',
        src: src,
        defer: true
    }).on('load readystatechange', function() {
        if (!this.readyState || this.readyState === 'complete' || this.readyState === 'loaded') {
            LiveAgent.createButton('77y70llb', this);
        }
    });

    $('script').last().after(s);
});
