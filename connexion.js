$(document).ready(function(){
    $(".form-signin").on("submit", userConnexion);
});

function userConnexion(e){
    e.preventDefault();
    $(".alert-danger").remove();
    var email = $("#email").val();
    var password = $("#password").val();
    if(email.trim().length > 0 && password.trim().length > 0){
        var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(regex.test(email) == false){
            $('<div class="alert alert-danger" role="alert">Veuillez saisir un email correct</div>').insertAfter("h1"); 
        } else {
            $.ajax({
                url: 'connexion.php',
                method: 'post',
                dataType: 'json',
                data: {email: email, password: password},
                success: function(data){
                    if(data.reponse){
                        document.location.href="index.php"
                    } else {
                        $('<div class="alert alert-danger" role="alert">Identifiants incorrects</div>').insertAfter("h1"); 
                    }
                }
            });
        }
    } else {
        $('<div class="alert alert-danger" role="alert">Merci de remplir tous les champs</div>').insertAfter("h1"); 
    }
}