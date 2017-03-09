(function () {
    "use strict";

    window.onload = function () {
        // == elements =========================================================
        // == article ==
        var articleWell = document.getElementById('article-well');
        var wellPosition = findPosition(articleWell);

        var article = document.getElementById('article');
        article.onclick = promptForResponse;
        var articlePosition = findPosition(article);

        // == response ==
        var response = document.getElementById('response');
        var responseXwell, responseYwell, responseXimage, responseYimage;

        var positive = document.getElementById('positive');
        positive.onclick = recordPositiveResponse;

        var negative = document.getElementById('negative');
        negative.onclick = recordNegativeResponse;

        var closeResponse = document.getElementById("close-response");
        closeResponse.onclick = hideResponse;

        // == form ==
        var radios = document.querySelectorAll('input[type="radio"]');
        radios.forEach(function (item) {
            item.onchange = enableContinue;
        });

        var continuebutton = document.getElementById('continue');

        // === function definitions ============================================
        function findPosition(obj){
            var curleft = 0;
            var curtop = 0;

            if (obj.offsetParent) {
                do {
                    curleft += obj.offsetLeft;
                    curtop += obj.offsetTop;
                } while (obj = obj.offsetParent);

                return {X:curleft, Y:curtop};
            }
        }

        function enableContinue() {
            continuebutton.disabled = false;
        }

        function promptForResponse(e) {
            //move response
            responseXwell = e.pageX - wellPosition.X;
            responseYwell = e.pageY - wellPosition.Y;
            responseXimage = e.pageX - articlePosition.X;
            responseYimage = e.pageY - articlePosition.Y;
            response.style.top = responseYwell + 50 + "px";
            response.style.left = responseXwell + 10 + "px";

            //make response visible
            response.classList.remove('hidden');

            //store response
            responseXimage = e.pageX - articlePosition.X;
            responseYimage = e.pageY - articlePosition.Y;
            //TODO
        }

        function recordPositiveResponse() {
            hideResponse();
        }

        function recordNegativeResponse() {
            hideResponse();
        }

        function hideResponse() {
            response.classList.add('hidden');
        }
    };
})();
