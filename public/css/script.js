$(document).ready(function() {
    $(".menu-button").on("click", function() {
        console.log("CLICKEADO!!!");
        $(".menu-dropdown").toggle();
    });
    
    // Opcional: Ocultar el menú desplegable al hacer clic fuera de él.
    $(document).on("click", function(event) {
        if (!$(event.target).closest(".menu-container").length) {
            $(".menu-dropdown").hide();
        }
    });
});

