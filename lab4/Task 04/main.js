$(document).ready(function () {
    // Toggle the answer when a question is clicked
    $(".faq-question").click(function () {
        $(this).next(".faq-answer").slideToggle(300);
    });
});
