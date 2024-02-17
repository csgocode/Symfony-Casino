$(document).ready(function() {
    $('.copy-text').click(function() {
        var $input = $("#referral");
        $input.attr("disabled", false);
        $input.select();
        document.execCommand("copy");
        $input.attr("disabled", true);
    });
});
