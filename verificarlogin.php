<?php
// pegar os dados da tela
$email = $_POST["email"];
$senha = $_POST["senha"];

/*
echo"E-mail: ".$email;
echo"<br>Senha".$senha;
*/

// abrir a conexão com banco de dados
  // mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO)
  $con = mysqli_connect("localhost","root","","aulaprojeto");

  //montar a instrução de seleção para ir ao banco

  $sql ="select * from usuario where email = '".$email."' and senha = '".$senha."'";

  // executar a intrução
  //if(mysqli_query($con,$sql)){
    $rs = mysqli_query($con,$sql); 
    if(mysqli_num_rows($rs)==1){

      echo "<script>";
      echo "location.href='ADM/painel.php'";  
      echo"</script>"; 

    }else{
    $msg = base64_encode("Usuário/Senha inválido");
    
      
    
    //echo "Encontrei";
   // redirecionar para a pagina painel, que esta dentro da past ADM
    
      
    
              //echo"Não encontrei!"; 
      echo "<script>";
      echo "location.href='logar.php?m=".$msg."'";  
      echo "</script>"; 
    }
    ?>