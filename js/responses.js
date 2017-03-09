(function () {
    "use strict";

    window.onload = function () {
        $('.collapse').on('shown.bs.collapse', function(){
            $(this).parent().find(".fa-plus-square").removeClass("fa-plus-square").addClass("fa-minus-square");
        }).on('hidden.bs.collapse', function(){
            $(this).parent().find(".fa-minus-square").removeClass("fa-minus-square").addClass("fa-plus-square");
        });
        // // == elements =========================================================
        // var toggleIcons = document.querySelectorAll('.panel-title i');
        // toggleIcons.forEach(function (item) {
        //     item.onclick = toggleIcon;
        // });
        //
        // var collapsibles = document.querySelectorAll('.panel-collapse');
        // collapsibles.forEach(function (item) {
        //     item.onchange = toggleHeaderIcon;
        // });
        //
        // // == function definitions =============================================
        // function toggleIcon() {
        //     if (this.classList.contains("fa-plus-square")) {
        //         this.classList.remove("fa-plus-square");
        //         this.classList.add("fa-minus-square");
        //     } else {
        //         this.classList.remove("fa-minus-square");
        //         this.classList.add("fa-plus-square");
        //     }
        // }
        // function toggleHeaderIcon() {
        //     alert('toggled!');
        // }
    };
})();
