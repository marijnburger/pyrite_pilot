(function () {
    "use strict";

    window.onload = function () {
        var consentcheck = document.getElementById("consent-check");
        if (consentcheck != null) { //handles pilot/demo scenarios where no consent form is provided
            consentcheck.onclick = enablesubmit;
        }
        var submitconsent = document.getElementById("submit-consent");

        function enablesubmit() {
            submitconsent.disabled = !consentcheck.checked;
        }
    };
})();
