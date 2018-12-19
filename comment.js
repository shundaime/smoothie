$(document).ready(function(){
    $('#add').on('click', getComment);
});

function getComment(e, id){
    e.preventDefault();
    var id = location.search.substr(4);
    var pseudo = $('#pseudo').val();
    var comment = $('#commentaire').val();
    $.ajax({
        url : "comment.php",
        type: "post",
        dataType: "json",
        data :{
            id:id,
            pseudo:pseudo,
            comment:comment
        },
        success: function(data){          
            }
        })
    }
