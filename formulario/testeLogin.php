<?php

// print_r($_REQUEST);

if(isset($_POST['emviar']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

   include_once('config.php');

   $email = $_POST['email'];
   $senha = $_POST['senha'];

   
    // print_r($email);
    // print_r($senha);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha =  '$senha'";

    $result = $conecxao->query($sql);


    if(mysqli_num_rows($result) < 1)
    {
        print_r("sim");
    }
    else{
        print_r("nao");
    }

    // print_r($sql);
       
    // print_r($result);
}
else
{
    header("Location: home.php");
}

//     if(mysqli_num_rows( $result) < 1) {
        
//           print_r("nao ");
//     }else{
//         print_r("esiste");
//     }
   
// }else {
  
//  header("Location: home.php");
 
// }


//     if(mysqli_num_rows( $result) < 1) {
        
//        print_r("nao ");
//     }
//     else
//     {
//        print_r("esiste");
//     }

// }
// else {
  
//     header("Location: home.php");
// }

?>