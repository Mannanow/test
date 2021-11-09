<?php
session_start();


if($_GET){

  //Bu yerda bazadan login va parolni olib kelish kodi bo'ladi
  //Hozircha ixtiyoriy login va parol yozib turaman
  $baza_login = "admin";
  $baza_password = "Aa#aa";

  $user_id = htmlspecialchars($_GET['user_id']);
  $login = htmlspecialchars($_GET['login']);
  $password = htmlspecialchars($_GET['password']);


  //OR, NOT, WHERE, Delay, FROM , SELECT, DROP 

  $login = str_replace("OR", " ", $login);
  //abcz
  $login = preg_replace("/[^a-zA-Z]/", "", $login);

  //$password = preg_replace("/[^a-zA-Z0-9]/", "", $password);

  //kamida 1ta katta harf
  //kamida 1ta kichik harf
  //kamida 1ta belgi
  //kamida 1ta raqam

  function tekshir1($password){
    $array = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

    for ($i=0; $i < strlen($password); $i++) { 

      if(in_array($password[$i],$array)){
        return 1;
      }
    }
  }

  function tekshir2($password){
    $array = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];

    for ($i=0; $i < strlen($password); $i++) { 
      if(in_array($password[$i],$array)){
        return 1;
      }
    }
  }

  function tekshir3($password){
    $array = ["!","~","#","%","^","&","*","?","\$"];

    for ($i=0; $i < strlen($password); $i++) { 
      if(in_array($password[$i],$array)){
        return 1;
      }
    }
  }

  if(tekshir1($password) && tekshir2($password) && tekshir3($password)){
    echo "Sen shartdan o'tding<br>";
    $_SESSION['admin'] = "Adminsiz";
    echo '<a href="tekshir.php" target="_blank" >tekshirish</a>';


  }else{
    echo "Parolda kichik harf, katta harf bo'lishi kerak";
  }

  exit();
  

  if(empty($user_id)){ 
    echo "sen user_id ni yozmading<br>";
    header("Location: form.php");
  }

  if($password == $baza_password){
    echo "Parol to'g'ri <br>";
  }else{
    echo "Parol noto'g'ri<br>";
  }
  if($login == $baza_login){
    echo "Login to'g'ri <br>";
  }else{
    echo "Login noto'g'ri<br>";
  }




  echo "Sen asosiy sahifadasan <br> user_id: $user_id <br> parol: $password <br> login: $login";
}else{
  echo "Sen login parol yozmagansan";
}



?>