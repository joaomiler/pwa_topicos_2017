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
        <title>Categorias</title>
        
       <script type="text/javascript">
            $(document).ready(function(){
                    var token = localStorage.getItem("token")
                    $.ajax({
                        url: '../../jwt/index.php/categoria',
                        type: 'get',
                        data:'',
                        headers: {
                        "jwt-token": "Bearer "+token},
                        dataType: 'json',
                        success: function (data) {
                            $.each(data, function (index, data) {
                                $("#myTable").find('tbody').append($('<tr><td>'+data.id+'<td><td>'+data.Descricao+'</td></tr>'));
                            });
//                           console.info(data);
                         },
                        
                    });
                });
        </script>     
    </head>
    <body>
        <br>
        <div class="col-md-12">
            <table id="myTable">
                <thead>
                <th>ID</th>
                <th>Descrição</th>
                </thead>
                <tbody>
                  
                </tbody>
            </table>
        </div>
       
    </body>
</html>
