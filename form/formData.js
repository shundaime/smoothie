        $(".info").on("submit", formData);

    function formData(e){
        
        e.preventDefault();
        
        var email = $("#mail").val();
        var name = $("#name").val();
        var firstName = $("#firstName").val();
        var address = $("#address").val();
        var zip = $("#zip").val();
        var city = $("#city").val();
        var pseudo = $("#pseudo").val();
        var password = $("#mdp").val();

        if(email.trim().length > 0){
        	var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(regex.test(email) == false){
            	$('#mail').addClass('is-invalid'); 
           } else {
               $('#mail').removeClass('is-invalid');
            	$.ajax({
            url: 'form.php',
            method: 'post',
            dataType: 'json',
            data: {
                email: email,   
                name: name,
                firstName: firstName,
                address: address,
                zip: zip,
                city: city,
                pseudo:pseudo,
                password:password
            },
            success: function(data){
                if(data.reponse){
                    $('.info').html('<div class="alert alert-success" role="alert">Vous êtes enregistré !<br>Bienvenue !</div>');
                } else {
                    $('<div class="alert alert-danger" role="alert">Merci de remplir tous les champs</div>').insertAfter("h1"); 
                }
            }
        });
            }
        }
    }

