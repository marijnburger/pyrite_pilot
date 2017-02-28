(function () {
    "use strict";

    window.onload = function () {
        var radios = document.querySelectorAll('input[type="radio"]');
        radios.forEach(function (item) {
            item.onchange = enablecontinue;
        });

        var continuebutton = document.getElementById("continue");
        continuebutton.onclick = processresponse;

        function enablecontinue() {
            continuebutton.disabled = false;
        }

        function processresponse () {
            this.disabled
        }
    };
})();
