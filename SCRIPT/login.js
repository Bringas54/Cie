$("#formLogin").submit(function(e) {
        e.preventDefault();
        let email = $("#email").val();
        let password = $("#password").val();
        
        if($.trim(email).length > 0 && $.trim(password).length > 0){
            $.ajax({
                type: "POST",
                URL: "PHP/Val.php",
                data:$("#formLogin").serialize(),
                success:function(data){
                    if(data>0){
                        $("body").load("home.php").hide().fadeIn(1000);
                    }
                    else{
                        $("#error").show();
                    }
                }
            })
        }
        else{
            return false();
        }
    });