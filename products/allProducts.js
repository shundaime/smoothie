'use strict';

$(document).ready(function(){
    allProducts();
});




function allProducts(){
    console.log("toto");
    $.ajax({
        url : "products.php",
        type: "get",
        dataType: "json",
        success: function(data){
            console.log(data.allProducts);
            var name = "";
            var img = "";
            var description = "";
            $('#allProducts').html('<section></section>');
            for(var i = 0; i<data.allProducts.length; i++){
                name = data.allProducts[i]['nameProduct'];
                img = "<img src='"+ data.allProducts[i]['picture'] + "' alt='image smoothie' >";
                description = data.allProducts[i]['description'];

                    $('section').append("<article>"+ img + "<h2>"+name+"</h2><p>"+ description + "</p> <a href='#'> Voir le produit </a> </article>");
            }
        }      

    });

}


