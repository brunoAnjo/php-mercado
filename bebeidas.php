<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Latest compiled and minified JavaScript -->
        <link rel="stylesheet" href="https://getbootstrap.com/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <script language="Javascript">
        function validaForm(){
            if(document.form.login.value === ""){
                alert("Digite seu Login");
                document.form.login.focus();
                return false;
            }
            if(document.form.senha.value === ""){
                alert("Digite sua Senha");
                document.form.senha.focus();
                return false;
            }
        }
    </script>
    <body>
        
       <nav id="menus" class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar"
                             aria-expanded="false" aria-controls="navbar" aria-label="Toggle navegation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li>
                            <a class="nav-link" href="index.php">Inicial</a></li>
                        <li class="nav-item active"><a class="nav-link" href="bebeidas.php">Bebidas</a></li>
                        <li><a class="nav-link" href="comidas.php">Comidas</a></li>
                        <li><a class="nav-link" href="legumes.php">Legumes</a></li>
                        <li><a class="nav-link" href="diversos.php">Diversificados</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                    <form name="form" class="form-inline my-2 my-lg-0" onsubmit="return validaForm()" method="POST" action="php/login.php">
                        Login<input class="form-control mr-sm-2" type="text" name="login">
                        Senha<input class="form-control mr-sm-2" type="password" name="senha">
                        <input class="btn btn-outline-sucess my-2 my-sm-o" type="submit" name="butão" value="Login">
                        <input class="btn btn-outline-sucess my-2 my-sm-o" type="button" name="butão" value="Cadastro">
                    </form>
                </div>
        </nav>
        
        <header>  
            <br>
            <div class="jumbotron">
                <br>
                <h1>Bem Vindo</h1>
                <p>Seja Bem Vindo ao seu MERCANTIL VIRTUAL, aqui garantimos total satisfação e praticidade nas suas compras.
                    Você poderá acompanhar os <br>produtos que temos disponiveis em tempo real, e a entrega do seu pedido será direcionado ate sua residencia.
                    </p>
            </div>
            <h2>Bebidas</h2>
           <main role="main" class="container">
            <section>
                    <h3>Carnes</h3>
                    <div class="row row-offcanvas row-offcanvas-right">
                        
                        <div id="carnes" class="row">
                            
                            <div class="col-6 col-lg-3">
                            <img src="img/carnes/bananinha.jpg">
                            <p>Bananinha Preço R$ 15,00 KG</p>
                            <p><a class="btn btn-secondary" href="#" role="button"> Comprar </a></p>
                            </div>
                            
                                <div class="col-6 col-lg-3">
                                <img src="img/carnes/carne4.png">
                                <p>Picanha <b>PREÇO</b> R$ 12,00 KG</p>
                            <p><a class="btn btn-secondary" href="#" role="button"> Comprar </a></p>
                                </div>
                                
                                 <div class="col-6 col-lg-3">
                                <img src="img/carnes/porco.jpg">
                                <p>Porco <b>PREÇO</b> R$ 12,00 KG</p>
                            <p><a class="btn btn-secondary" href="#" role="button"> Comprar </a></p>
                                </div> 
                                
                                <div class="col-6 col-lg-3">
                                <img src="img/carnes/BOI.jpg">
                                <p>Boi <b>PREÇO</b> R$ 12,00 KG</p>
                            <p><a class="btn btn-secondary" href="#" role="button"> Comprar </a></p>
                                </div>
                            
                                 
                    </div>
                    </div>
            </section>
            
            
           </main> 
        </header>
        
        <!-- Rodape -->
        <footer class="rodape">
                <section class="infor">
                    <ul>
                        <li><a href="hdh.html">Quem Somos</a></li>
                        <li><a href="hdh.html">Nossa Loja</a></li>
                        <li><a href="hdh.html">Contato</a></li>
                        <li><a href="hdh.html"></a></li>
                        <li><a href="hdh.html"></a></li>
                        <li><a href="hdh.html"></a></li>
                    </ul>
                    
               </section>
                
                <section class="tireduvidas">
                    <ul>
                        <li><a href="">Quem somos</a></li>
                        <li><a href="">Nossa Lojas</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
               </section>
            <section class="tireduvidas">
                    <ul>
                        <li><a href="hdh.html">Quem Somos</a></li>
                        <li><a href="hdh.html">Nossa Loja</a></li>
                        <li><a href="hdh.html">Contato</a></li>
                        <li><a href="hdh.html"></a></li>
                        <li><a href="hdh.html"></a></li>
                        <li><a href="hdh.html"></a></li>
                    </ul>
                    
               </section>
        </footer>
        
        <!--Bootstrap JavaScript-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
        <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    </body>
</html>
