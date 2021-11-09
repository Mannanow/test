



<?php
session_start();
if(isset($_SESSION['admin'])){
    echo $_SESSION['admin'];
}
else {
    echo "yo'q";
    echo time();
    setcookie("user", "Farxod");
    echo "cokie yaratildi";
}


?>