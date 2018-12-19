$(document).ready(function(){
    var id = location.search.substr(4);
    getProductById(id);
    showComments(id);
});

function getProductById(id){
    $.ajax({
        url : "productById.php",
        type: "get",
        dataType: "json",
        data :{id:id},
        success: function(data){
            $('#product').append('<section></section>');
                var name = data.product['nameProduct'];
                var img = "<img src='assets/img_produit/"+ data.product['picture'] + "' alt='image smoothie' >";
                var description = data.product['description'];
                var receipe = data.product['details'];
                $('#productDetails').append('<h1>'+ name + '</h1>'+ img + '<p>' + description + '</p>' + '<p>' + receipe + '</p><button><i class="fas fa-heart"></i></button>');
                          
            }
        })
    }

    function showComments(id){
        $.ajax({
            url : "showComments.php",
            type: "get",
            dataType: "json",
            data :{id:id},
            success: function(data){
                    //console.log(data.showComments);
                    for(var i= 0; i < data.showComments.length; i++){
                var pseudo = data.showComments[i]['pseudo'];
                var content = data.showComments[i]['content'];
                
                
                    $('#comments').append('<h3>'+ pseudo + '</h3><p>' + content + '</p>');
                }     
    
                }
                
            })
    }