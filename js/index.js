(function () {
    "use strict";

    window.onload = function () {
        var consentcheck = document.getElementById("consent-check");
        consentcheck.onclick = enablesubmit;
        var submitconsent = document.getElementById("submit-consent");

        function enablesubmit() {
            submitconsent.disabled = !consentcheck.checked;
        }
    };
})();
