$(function () {
    $(".delete-form").on("submit", function () {
        return confirm("Êtes-vous certain de vouloir supprimer cette entité ?");
    });
});
