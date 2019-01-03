<?php
session_start();

if(isset($_SESSION['logado']) &&  $_SESSION['logado'] == 'SIM'):
    header("Location: home.php");
endif;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exemplo Login com AJAX</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style type="text/css">
    #login-alert{
        display: none;
    }

    .margin-top-pq{
        margin-top: 10px;
    }

    .margin-top-md{
        margin-top: 25px;
    }

    .margin-bottom-md{
        margin-bottom: 25px;
    }

    .padding-top-md{
        padding-top: 30px;
    }
    </style>
</head>
<body>
    
    <div class="container">    
        <div id="loginbox" class="mainbox col-md-7 col-md-offset-3 col-sm-8 col-sm-offset-2 margin-top-md">                    
            <div class="panel panel-primary" >
                <div class="panel-heading">
                    <div class="panel-title">Login - DevEverSOM SOM TESTANDO</div>
                </div>     

                <div class="panel-body padding-top-md" >
                    <div id="login-alert" class="alert alert-danger col-sm-12">
                        <span class="glyphicon glyphicon-exclamation-sign"></span>
                        <span id="mensagem"></span>
                    </div>      
                    <form id="login-form" class="form-horizontal" role="form" action="login.php" method="post">             
                        <div class="input-group margin-bottom-md">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="Informe seu E-mail">                                        
                        </div>
                            
                        <div class="input-group margin-bottom-md">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" id="senha" name="senha" required placeholder="Informe sua Senha">
                        </div>
                                
                        <div class="form-group margin-top-pq">
                            <div class="col-sm-12 controls">
                                <button type="button" class="btn btn-primary" name="btn-login" id="btn-login">
                                  Entrar
                                </button>
                            </div>
                        </div> 

                    </form>     
                </div>  

            </div>  
        </div>
    </div>  
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <script src="js/custom.js"></script>   
    <script type="text/javascript">
        $(window).ajaxComplete(function () {console.log('Ajax Complete'); });
$(window).ajaxError(function (data, textStatus, jqXHR) {console.log('Ajax Error');
    console.log('data: ' + data);
    console.log('textStatus: ' + textStatus);
        console.log('jqXHR: ' + jqXHR); });

        $(window).ajaxSend(function () {console.log('Ajax Send'); });
$(window).ajaxStart(function () {console.log('Ajax Start'); });
$(window).ajaxStop(function () {console.log('Ajax Stop'); });
$(window).ajaxSuccess(function () {console.log('Ajax Success'); });
    </script>
</body>
</html>