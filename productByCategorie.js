$(document).ready(function(){
    var id = location.search.substr(4);
    getProductByCategorie(id);
});


function getProductByCategorie(id){
    $.ajax({
        url : "productByCategorie.php",
        type: "get",
        dataType: "json",
        data :{id:id},
        success: function(data){
                console.log(data.productByCategorie);
                if(data.productByCategorie){
                for (var i=0; i<data.productByCategorie.length; i++){
            var name = data.productByCategorie[i]['nameProduct'];
            var libelle = data.productByCategorie[i]['libelle'];
            var img = "<img src='assets/img_produit/" + data.productByCategorie[i]['picture'] + "' alt='image smoothie' >";
            var description = data.productByCategorie[i]['description'];
            
            
            $('#productByCategorie').html('<section><h1> Nos smoothie de la catégorie '+ libelle + '</h1></section>');

            $('section').append("<article>"+ img + "<h2>" + name + "</h2><p>" + description + "</p><a class='link' href='singleProduct.php?id="+data.productByCategorie[i]['id']+"'>"+"Voir le produit </a> </article>");
            }
            }else{
                $('#productDetails').html("<section><h1>Il n'y a pas encore de produits dans cette catégorie...</h1></section>");
            }
        }
        })
    }