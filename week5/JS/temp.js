$(document).ready(function () {
    $(".topItem").mouseenter(function () {

        $(this).next().css("display", "block");
    });
    $(".level1").mouseleave(function () {
        // I don't care this divider has children divider (class: level2) or not,
        // if it has level2 divider, when my mouse left, I hide this divider.
        $(this).children("div").hide();
    });
});