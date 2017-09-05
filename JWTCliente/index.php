<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="  crossorigin="anonymous"></script>       
        <title>JWT Cliente</title>
        
       <script type="text/javascript">
            $(document).ready(function(){
                $( "#logar" ).click(function() {
                    var usuario = $('#login').val();
                    var senha = $("#senha").val();
                    var dados = {"usuario":usuario, "password":senha};
                    $.ajax({
                        url: '../../jwt/index.php/login',
                        type: 'post',
                        data:JSON.stringify(dados),
                        headers: {
                        "jwt-token": "Berear XXXXXXX"},
                        dataType: 'json',
                        success: function (data) {
                           console.info(data.access_token);
                            localStorage.setItem("token", data.access_token);
                            window.location = 'categorias.php';
                        },
                        
                    });
                });
            });
        </script>     
    </head>
    <body>
        <br>
        <form>
        <div class="col-md-12">
            <div class="form-group row">
                <label for="example-text-input" class="col-1 col-form-label">Login</label>
                <div class="col-8">
                  <input name="login" class="form-control" type="text" value="joao" id="login">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-1 col-form-label">Senha</label>
                <div class="col-8">
                  <input name="senha" class="form-control" type="password" value="123" id="senha">
                </div>
            </div>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-success" id="logar">Logar</button>
        </div>
            
        <?php
        // put your code here
        ?>
    </body>
</html>
