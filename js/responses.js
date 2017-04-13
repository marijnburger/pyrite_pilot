(function () {
    "use strict";

    window.onload = function () {
        // == elements =========================================================
        var nextButtons = document.querySelectorAll('.panel-collapse button');
        nextButtons.forEach(function (item) {
            item.onclick = nextResponse;
        });

        var lastButton = document.getElementById('last-next');
        lastButton.onclick = endSurvey;

        var progress = document.getElementById('progress');
        var portionOf100 = 100 / (nextButtons.length * 2);
        var counter = nextButtons.length + 1;

        // == function definitions =============================================
        function nextResponse() {
            var collapse = this.parentNode.parentNode;
            collapse.classList.remove('in');
            var collapseParent = collapse.parentNode
            var nextCollapsePanel = collapseParent.nextElementSibling;
            var nextCollapse = nextCollapsePanel.querySelectorAll('.panel-collapse');
            nextCollapse[0].classList.add('in');

            var width = Math.round(portionOf100 * counter);
            progress.setAttribute("aria-valuenow", width);
            progress.style.width = width + "%";
            progress.innerHTML = width + "% completed";
            counter++;
        }

        function endSurvey() {
            var collapse = this.parentNode.parentNode;
            collapse.classList.remove('in');
        }
    };
})();
