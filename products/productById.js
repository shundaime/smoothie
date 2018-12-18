$(document).ready(function(){
    var id = location.search.substr(4);
    getProductById(id);
});

function getProductById(id){
    $.ajax({
        url : "productById.php",
        type: "get",
        dataType: "json",
        data :{id:id},
        success: function(data){
            $('#product').html('<section></section>');
                var name = data.product['nameProduct'];
                var img = "<img src='"+ product['picture'] + "' alt='image smoothie' >";
                var description = data.product['description'];
                var receipe = data.product['details'];
                $('#product').append('<h3>'+name+'</h3>')
                $('#product').append(img)
                $('#product').append('<p>'+description+'</p>')
                $('#product').append('<p>'+receipe+'</p>')
            }
        })
    }