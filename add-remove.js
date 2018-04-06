jQuery( document ).ready( function( $ ) {
    // $() will work as an alias for jQuery() inside of this function
    $(".bootstrap").on("click", ".add", function(){ 
        var copy = $("template").html();
        //var remove = $("template.remove").html();
        $(".card-body").append(copy);
        $(this).parent().html('<button class="btn btn-danger remove" type="button">Remove Button</button>');

    });
    //here it will remove the current value of the remove button which has been pressed
    $(".bootstrap").on("click", ".remove", function(){ 
        $(this).parents(".input-group").remove();
    });
} );