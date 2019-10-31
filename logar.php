<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="../projeto/bootstrap/dist/css/bootstrap.css">
</head>
<body>
     <div class="container">
    <h3 class="pageheader"> Logar no Sitema </h3>
    <br>
    <fieldset>
       <legend>:::SISTEMA:::</legend>
        <form action="verificarlogin.php" method="POST" class="formgroup">
            E-mail.: <input type="text" name="email"
            placeholder="Digite o E-mail" class="form control"/> 
            <br><br>
             Senha.: <input type="password" name="senha"
            placeholder="Digite a Senha" class="form control"/>
            <br><br>
            <input type="submit" value="Entar no Sistema" class="btn btn-primary"/>
            </form>
            <?php
              
              if(isset($_GET["m"])){
               echo base64_decode($_GET["m"]);
              }
               ?>
         </fieldset>
         </div> 

</body>
</html>