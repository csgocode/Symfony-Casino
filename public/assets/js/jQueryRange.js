(function($) {
    "use strict";

    // Verifica si el navegador soporta el atributo "multiple" para inputs de tipo rango
    var supportsMultiple = HTMLInputElement && "valueLow" in HTMLInputElement.prototype;

    var multirange = function($input) {
        if (supportsMultiple || $input.hasClass("multirange")) {
            return;
        }

        var value = $input.attr("value");
        var values = value === null ? [] : value.split(",");
        var min = +($input.attr("min") || 0);
        var max = +($input.attr("max") || 100);
        var $ghost = $input.clone();
        var dragMiddle = $input.data("drag-middle") !== undefined;
        var $middle = $input.clone();

        $input.addClass("multirange original");
        $ghost.addClass("multirange ghost");

        $input.val(values[0] || min + (max - min) / 2);
        $ghost.val(values[1] || min + (max - min) / 2);

        $input.after($ghost);

        var update = function(mode) {
            var lowValue = Math.min($input.val(), $ghost.val());
            var highValue = Math.max($input.val(), $ghost.val());

            $ghost.css("--low", 100 * ((lowValue - min) / (max - min)) + 1 + "%");
            $ghost.css("--high", 100 * ((highValue - min) / (max - min)) - 1 + "%");

            if (dragMiddle && mode !== 1) {
                var w = highValue - lowValue;
                if (w > 1) w -= 0.5;
                $middle.css("--size", (100 * w / (max - min)) + "%");
                $middle.val(min + (highValue + lowValue - 2 * min - w) * (max - min) / (2 * (max - min - w)));
            }

            if ($input.val() > $ghost.val()) {
                $input.addClass("switched");
                $ghost.addClass("switched");
            } else {
                $input.removeClass("switched");
                $ghost.removeClass("switched");
            }
        };

        $ghost.on("mousedown", function(evt) {
            var clickValue = min + (max - min) * evt.offsetX / $(this).width();
            var middleValue = ($input.val() + $ghost.val()) / 2;
            if (($input.val() == $ghost.val()) == (clickValue > middleValue)) {
                $input.val($ghost.val());
            }
        });

        $input.on("input", update);
        $ghost.on("input", update);

        if (dragMiddle) {
            $middle.addClass("multirange middle");
            $input.after($middle);
            $middle.on("input", function() {
                var w = $input.val() - $ghost.val();
                var m = min + w / 2 + ($middle.val() - min) * (max - min - w) / (max - min);
                $input.val(m - w / 2);
                $ghost.val($input.val() + w);
                update(1);
            });
        }

        update();
    };

    $.fn.multirange = function() {
        this.each(function() {
            multirange($(this));
        });
    };

    $(function() {
        $("input[type=range][multiple]:not(.multirange)").multirange();
    });

})(jQuery);
