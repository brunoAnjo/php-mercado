<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/default.css"
        <title></title>
    </head>
    <script language="Javascript">
        function validaForm(){
            if(document.form.Login.value === ""){
                alert("Digite seu Login");
                document.form.Login.focus();
                return false;
            }
            if(document.form.Senha.value === ""){
                alert("Digite sua senha");
                document.form.Senha.focus();
                return false;
            }
        }
    </script>
    <body>
        <div id="container">
            <div class="">
                <div class="">
                    
                    <fieldset class="area">
                        
                        <legend lang="">Login</legend>
                          <form name="form" action="i.php" onsubmit="return validaForm()" method="POST">
                              <h1 class="logo"></h1>
                                <nav class="login">
                                Login:
                                <input type="text" name="Login"/><br><br>
                                Senha:
                                <input type="text" name="Senha"/>
                                </nav>
                                <button type="submit" class="butao" >Logar</button>
                            </form>
                        </fieldset>
                </div>
            </div>
        </div>
    </body>
</html>
