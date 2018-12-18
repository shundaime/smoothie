$(document).ready(function(){
    getProductById();
});

function getProductById(){
    $.ajax({
        url : "productById.php",
        type: "get",
        dataType: "json",
        success: function(data){
            var name = "";
            var img = "";
            var description = "";
            $('#product').html('<section></section>');
            for(var i = 0; i<data.product.length; i++){
                name = data.product[i]['nameProduct'];
                img = "<img src='"+ product[i]['picture'] + "' alt='image smoothie' >";
                description = data.product[i]['description'];
        }
    }
})
}