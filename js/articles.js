(function () {
    "use strict";

    window.onload = function () {
        // elements ============================================================
        var articleimg = document.getElementById('article');
        var articleloading = true;
        articleimg.setAttribute("src", "data/loading.gif");
        articleimg.setAttribute("class", "loading");

        var progress = document.getElementById('progress');

        var radios = document.querySelectorAll('input[type="radio"]');
        radios.forEach(function (item) {
            item.onchange = enablecontinue;
        });

        var continuebutton = document.getElementById('continue');
        continuebutton.onclick = processresponse;

        // onload script =======================================================
        switchToLoadingGif()
        var responderID = btoa(new Date().toString());
        var articlepaths = ["data/article0.png", "data/article1.png", "data/article2.png",
                            "data/article3.png", "data/article4.png", "data/article5.png",
                            "data/article6.png", "data/article7.png", "data/article8.png",
                            "data/article9.png"];
        var counter = 0;
        var starttime = new Date();
        var endtime;
        var duration;
        switchToImg(articlepaths[counter]);

        // function definitions ================================================
        function switchToLoadingGif() {
            articleimg.setAttribute("class", "loading");
            articleimg.setAttribute("src", "data/loading.gif");
        }

        function switchToImg($path) {
            articleimg.setAttribute("class", "screenshot");
            articleimg.setAttribute("src", $path);
        }

        function enablecontinue() {
            continuebutton.disabled = false;
        }

        function processresponse () {
            endtime = new Date();
            switchToLoadingGif();
            continuebutton.disabled = true;

            duration = ((endtime - starttime) / 1000).toString();
            var responsevalue;
            radios.forEach(function (item) {
                if (item.checked) {
                    responsevalue = item.value;
                    item.checked = false;
                }
            });
            var request = new XMLHttpRequest();
            var vars = "command=response&responderID=" + encodeURIComponent(responderID)
                        + "&responsevalue=" + encodeURIComponent(responsevalue)
                        + "&duration=" + encodeURIComponent(duration);
                        + "&counter=" + encodeURIComponent(counter);
            request.open("POST", "php/filecontroller.php", true);
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            request.send(vars);
            if (counter == articlepaths.length - 1) {
                counter--;
                window.location.href = "reaction.php";
            } else {
                counter++;
                switchToImg(articlepaths[counter]);
                $("html, body").animate({ scrollTop: 0 }, "slow");
                progress.setAttribute("aria-valuenow", (counter + 1) * 10);
                progress.setAttribute("style", "width:" + ((counter + 1) * 10) + "%");
                starttime = new Date();
            }
        }
    };
})();
