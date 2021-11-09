<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*echo "<h2> PHP qiziq!</h2><br>";
    echo "Salom dunyo!<br>";
    echo "Men PHP ni mukammal o'rganaman<br>";
    echo "Bu ", "parametrni";*/

   /* $txt1 = "PHP ni o'rganamiz";
    $txt2 = 'inlab.uz';
    $x = 10 ;
    $y = 10;
    $raqam = array("a", "salom", "Shahzod");
    var_dump($raqam[1]);
    echo "<h2>" . $txt1 . "<h2>";
    echo "PHP ni o'rganish uchun sayt: " . $txt2 . "<br>";
    echo $x + $y;
*/
//echo strlen("Salom dunyo !");
 //echo strrev("hello");

/*define("soha", "dasturchi");

echo soha;*/
/*$sonlar = "15";

echo str_shuffle($sonlar);*/
/*$sonlar = "                 Salom das";

echo trim($sonlar);
*/
/*$x = 11;
$y = 3;
$yechim = $x%$y;
echo "$yechim";
$x = 15;
echo "Son: " .++$x. "\n";
echo "Son: " .++$x. "\n";
$login = "Uztoker";
$parol = "parol";
if($login=="Uztoker" and $parol=="parol"){
  header('location: http://kun.uz');

}
else{
  echo "parol yoki login noto'g'ri";

}
  $string = '<h1> Salom Dunyo!</h1>';
$string .= '<h2> Salom Dunyo 2!</h2>';
echo "$string";
  */
  /*$a = array("1" => "apple", "0" => "banana");
  $b = array("1" => "apple", "0" => "banana");
  var_dump($a === $b);
  $c = array("1" => "apple", "0" => "banana");
  $d = array("apple", "banana");
  var_dump($c==$d);
  $s = 0;
for ($i=1; $i < 12; $i++){
  if($i%2 == 0) {

    $s += $i;

  }
}
echo $s;
$value = 99;
switch ($value){
    case 1:
      echo 'Dushanba';
      break;
    case 2:
      echo 'Seshanba';
      break;
    case 3:
      echo 'Chorshanba';
      break;
    case 4:
      echo 'Payshanba';
      break;
    case 5:
      echo 'JUMA';
      break;
    case 6:
      echo 'Shanba';
      break;
    case 7:
      echo 'Yakshanba';
      break;
      default:
      echo 'Bu xafta kuni mavjud emas!';*/

/*for($i=1; $i<=8; $i++){
    if($i%2==0){
      echo "A".$i."  "."White<br>";
    }
    else 
      echo "A".$i."  "."black<br>";*/
//1chi masala yechimi
   /* $A = 4;
    $B = 8;
    if ($A == $B){
      echo "0";
    } else {
      if($A > $B){
        echo "$A";

      }
      else {
        echo "$B</br>";
      }
    }


//2chi masala yechimi
$n = 1;
$m = 8;
$p = 7;
if ($n+$m>$n+$p){
  echo "$n $m";
}

elseif($n+$p>$m+$p) {
  echo "$n  $p";
}
else {
  echo "$m  $p";
}
// 3chi masala 

$a = 8;
 switch($a)
 {
    case 1:
    echo "Yanvar: 31 kun";
    break;
    case 2:
    echo "Fevral: 28 kun";
    break;
    case 3:
    echo "Mart: 31 kun";
    break;
    case 4:
    echo "Aprel: 30 kun";
    break;
    case 5:
    echo "May: 31 kun";
    break;
    case 6:
    echo "Iyun: 30 kun";
    break;
    case 7:
    echo "Iyul: 31 kun";
    break;
    case 8:
    echo "Avgust: 31 kun";
    break;
    case 9:
    echo "Sentabr: 30 kun";
    break;
    case 10:
    echo "Oktabr: 31 kun";
    break;
    case 11:
    echo "Noyabr: 30 kun";
    break;
    case 12:
    echo "Dekabr: 31 kun";
    break;
    default:
    echo "Bunday oy mavjud emas!";
    break;
 }


*/
/*
//4chi masala yechimi
$son = 548
$number1 = floor($son/100);
$number2 = floor($son/10)-10*$number1;
$number3 =  ;
switch($number1 ){
case 1:
  echo "bir yuz ";
  break;
  case 2:
    echo "ikki yuz ";
    break;
    case 3:
      echo "uch yuz ";
      break;
      case 4:
        echo "to'rt yuz ";
        break;
        case 5:
          echo "besh yuz ";
          break;
          case 6:
            echo "olti yuz ";
            break;
            case 7:
              echo "yetti yuz ";
              break;
              case 8:
                echo "sakkiz yuz ";
                break;
                case 9:
                  echo "to'qqiz yuz ";
                  break;}

  switch($number2 ){
case 1:
  echo "o'n ";
  break;
case 2:
  echo "yigirma ";
  break;
case 3:
  echo "o'ttiz ";
  break;
case 4:
  echo "qirq ";
  break;
case 5:
  echo "ellik ";
  break;
case 6:
  echo "oltmish ";
  break;
case 7:
  echo "yetmish ";
  break;
case 8:
  echo "sakson ";
  break;
case 9:
  echo "to'qson ";
  break; }

  switch($number3 ){
    case 1:
      echo "bir";
      break;
    case 2:
      echo "ikki";
      break;
    case 3:
      echo "uch";
      break;
    case 4:
      echo "to'rt";
      break;
    case 5:
      echo "besh";
      break;
    case 6:
      echo "olti";
      break;
    case 7:
      echo "yetti";
      break;
    case 8:
      echo "sakkiz";
      break;
    case 9:
      echo "to'qqiz";
      break; }  

//5- masala yechimi
$a = 2;
$b = 8;
if($a<$b){
  echo ($a+$b)*($b-$a+1)/2;
}*/
/*
function Speed($value, $limit) {

  if($value>= $limit) {
    echo "Jarima to'la!";

  }
  else {
    echo "Jarimagacha tezlik: ". ($limit - $value);

  
  }
}
$result = Speed(65,90); 
echo $result;
*/
/*
function Summa($a, $b){

  $
}
function Summa($a, $b) {
  $s = 0;
  for ($i=$a; $i <= $b; $i++) { 
    $s += $i;
  }
  return $s;
}
*/













//homework 1

/*function narxkonfet(int $a, int $b){
  $b = 10000;
  $s = $a*$b;
  echo "Konfet narxi: ". $s."<br>";

}
narxkonfet("1","1");
narxkonfet("2","1");
narxkonfet("3","1");
narxkonfet("4","1");
narxkonfet("5","1");
narxkonfet("6","1");
narxkonfet("7","1");
narxkonfet("8","1");
narxkonfet("9","1");
narxkonfet("10","1");
*/








//homework 2
/*

 function kvadratfunksiya(int $n){
  $s = $n*$n;
  echo "natija: ". $s;


 }
 kvadratfunksiya(12);




*/
//homework 3
/*
$k = 1;
while($k <=10){
  echo ("Berilgan son: $k <br>");
  $k++;
  $n = 2**$k;
  
  echo "natija: $n <br>";
}
*/
/*
function Result($n){
$s = 0;
$i = 2;
while($i<=$n){
  $i *= 2;
  $s++;
}
echo $s;
}
Result(1024);
*/

// homework 4
/*function Result($n) {
  for ($i=0; $i < $n; $i++){
    $array[$i] = $s;
    $s += 2;


  }

    foreach ($array as $key => $value){

      echo "Massiv indeksi: " . $key . "Massiv qiymati: "
      . $value . "<br>";
    }

}
Result(10);*/


/*
$phone['Apple']['Iphone']['iphone7'] = "2000$";
$phone["Redmi"] = "1000$";
$phone["Samsung"] = "1500$";
//print_r($phone);
var_dump($phone);*/








//homework
/*$arr = [65,1,4,9,6,10];
for ($i = 0; $i < count($arr); $i = $i+2) {   
  echo $arr[$i]."<br>";
  $array = $arr[$i];
 
$largest = max($array);
echo $largest;

}   */

//2
/*
$array = array(3,5,23,9,2,98);

  
function moveElement($array, max($array), min($array)) {
  $p1 = array_splice($array, max($array), max($array));
  $p2 = array_splice($array, max($array), max($array));
  $array = array_merge($p2,$p1,$array);
}
*/

//21.09.2021
/*
$n = 5;
$array = [];
for($i = 0; $i < $n; $i++){
  $array[$i] = rand(10, 100);
  echo $i. " - kiritilgan son: " . $array[$i] . "<br>";



}
$result = [];

for($i = 1; $i<=$n; $i++){
  if ($i % 2 != 0)
  {
    $result[$i] = $array[$i];
  }

}

print_r($result);
print_r(max($result));*/
/*
$n = rand(10,20) ;
$a = [];

for ($i = 1; $i <=$n; $i++){
  $a[$i] = rand(10, 50);


}
$b = [];
for ($i = 1; $i<=$n; $i++){
  if($i%2 == 0){
    $b[$i] = $a[$i];
  }

}
print_r($b);
print_r(max($b));
*/
/*
$n = 10;
$natural_toq = [];
$natural_toq = range(1,$n,2);
print_r($natural_toq);

$n = 10;
$daraja = [];
$s = 1;
for ($i = 0; $i<$n; $i++ ){
 // $s = 2**$i;
  //$daraja = $s;
  //print_r($daraja. "<br>");
   $daraja = pow(2,$i);
   print_r($daraja. "<br>");


  

}  
$a = [];
$a = list(range(20));
print_r($a);*/






//homework
/*
$n = 3;
$butun_son = [];
for($i = 1; $i <= $n; $i++){
  $butun_son[$i] = rand(-10, 10);
  print_r($butun_son[$i]. "<br>");
}
$toq_son = [];
for($i = 1; $i<= $n; $i++){
if($butun_son[$i]>0){
$toq_son[$i] = $i;
echo ("musbat son: ");
print_r($toq_son[$i]. "<br>");

}
else {
  $toq_son[$i] = $i;
  echo ("manfiy son: ");
print_r($toq_son[$i]. "<br>");
}
}*/


// 2ta juft son
/*
$n = 2;
$butun_sonn = [];
for ($i = 1 ; $i<= $n; $i++) {
  $butun_sonn[$i] = rand(1,10);
  $a = [];
  $b = [];
  $a[$i] = $butun_sonn[$i];
  $b[$i] = $butun_sonn[$i];
  if($a[$i]>$b[$i]){
    print_r($a[$i]."<br>");
    if($b>$a){
      print_r($b[$i]."<br>");
    }
  }
}


$k = 12;
$n = 10;
for ($i = 1 ; $i<=$n; $i++){
echo $k."<br>";
} 
 */

 //for sikli
 /*
$a = 1;
$b = 10;
$yigindi = 0;
for ($i = $a; $i<=$b; $i++){
  ($yigindi =$yigindi  + $i);
}
echo "javob:   ".$yigindi . "  <br>";
*/


/*
$n = 3;
$s = 1;
$formula = 1;
for ($i = 1; $i<=$n; $i++){
  $s = $s*($i/10);

}
echo $s;
*/
//homework 1.2
/*
$n = -1;
$m = -3;
$p = -1;
if($n>0 && $m>0 && $p>0){
  echo "3 ta musbat son bor ";  
}
elseif ($n>0 && $m>0 && $p<0){
  echo "2 ta musbat qiymatga egaa";
  
}
elseif ($n>0 && $m< 0 && $p>0){
  echo "2 ta musbat qiymatga ega";
}
elseif ($n<0 && $m> 0 && $p>0){
  echo "2 ta musbat qiymatga egaaaa";
}


elseif ($n<0 && $m< 0 && $p>0){
  echo "1 ta musbat qiymatga egaaaa";
}
elseif ($n<0 && $m> 0 && $p<0){
  echo "1 ta musbat qiymatga egaaaa";
}
elseif ($n>0 && $m< 0 && $p>0){
  echo "1 ta musbat qiymatga egaaaa";
}
elseif ($n>0 && $m< 0 && $p<0){
  echo "1 ta musbat qiymatga egaaaa";
}
else 
  echo "Musbat qiymatlar yoq !";
*/
// 1.2
/*
$n = -1;
$m = -3;
$p = -1;
if($n>0 && $m>0 && $p>0){
  echo "3 ta musbat son bor ";  
}
elseif ($n>0 && $m>0 && $p<0){
  echo "2 ta musbat qiymatga ega". "<br>";
  echo "1 ta manfiy qiymatga ega". "<br>";

  
}
elseif ($n>0 && $m< 0 && $p>0){
  echo "2 ta musbat qiymatga ega". "<br>";
  echo "1 ta manfiy qiymatga ega". "<br>";
}
elseif ($n<0 && $m> 0 && $p>0){
  echo "2 ta musbat qiymatga ega". "<br>";
  echo "1 ta manfiy qiymatga ega". "<br>";
}


elseif ($n<0 && $m< 0 && $p>0){
  echo "1 ta musbat qiymatga ega". "<br>";
  echo "2 ta manfiy qiymatga ega". "<br>";
}
elseif ($n<0 && $m> 0 && $p<0){
  echo "1 ta musbat qiymatga ega". "<br>";
  echo "2 ta manfiy qiymatga ega". "<br>";
}
elseif ($n>0 && $m< 0 && $p>0){
  echo "1 ta musbat qiymatga ega". "<br>";
  echo "2 ta manfiy qiymatga ega". "<br>";
}
elseif ($n>0 && $m< 0 && $p<0){
  echo "1 ta musbat qiymatga ega". "<br>";
  echo "2 ta manfiy qiymatga ega". "<br>";
}
else 
echo "musbat qiymatga ega emas". "<br>". "3 ta manfiy qiymatga ega";
*/

//homework3
/*
$n = 1;
$m = 0;
if($n > $m){
  echo "$n";
}
else 
  echo "$m";
*/
//HW-4
/*
$n = 23;
$m = 567;
if($n > $m){
  echo "$n". "<br>". "1-";
}
else 
  echo "$m". "<br>". "2-" ;
*/
// HW-5
/*
$n = 2321;
$m = 567;
if($n > $m){
  echo "$n". "<br>". "$m";
}
else 
  echo "$m". "<br>". "$n" ;
*/
// HW-6
/*
$A = 7;
$B = 20;
if ($A > $B){
  $C = abs($A) + abs($B);
  $B = $C;
  echo "A = $A". "<br>". "B = $B";
}
else {
  echo " A = $A". "<br>". "B = $B";

}
*/
// HW-2.1
/*
$K = 4;
switch ($K){
  case "1":
    echo "Yomon";
    break;
  case "2":
    echo "Qoniqarsiz";
    break;
  case "3":
    echo "Qoniqarli";
    break;
  case "4":
    echo "Yaxshi";
    break;
  case "5":
    echo "A'lo";
  break;
default:
echo "xatolik bor";
}
*/
//HW-2.2
/*
$K = 12;
switch ($K){
  case "1":
    echo "Qish";
    break;
  case "2":
    echo "Qish";
    break;
  case "3":
    echo "Bahor";
    break;
  case "4":
    echo "Bahor";
    break;
  case "5":
    echo "Bahor";
  break;
  case "6":
echo "Yoz";
break;
  case "7":
    echo "Yoz";
    break;
  case "8":
    echo 'Yoz';
    break;
  case "9";
    echo "Kuz";
    break;
  case  "10":
    echo "Kuz";
    break;
  case "11":
    echo "Kuz";
    break;
  case "12":
    echo " Qish";
    break;

  default :
  echo "Bunday fasl mavjud emas";
  break;
}
*/

// HW-2.3
/*
$K = 2;
switch ($K){
  case "1":
    echo "31 kun mavjud";
    break;
  case "2":
    echo "28 kun mavjud";
    break;
  case "3":
    echo "31 kun mavjud";
    break;
  case "4":
    echo "30 kun mavjud";
    break;
  case "5":
    echo "31 kun mavjud";
  break;
  case "6":
echo "30 kun mavjud";
break;
  case "7":
    echo "31 kun mavjud";
    break;
  case "8":
    echo '31 kun mavjud';
    break;
  case "9";
    echo "30 kun mavjud";
    break;
  case  "10":
    echo "31 kun mavjud";
    break;
  case "11":
    echo "30 kun mavjud";
    break;
  case "12":
    echo " 31 kun mavjud";
    break;

  default :
  echo "Bunday Oy mavjud emas";
  break;
}
*/
//HW-2.4
/*
$A =2;
$B = 3;
$ammallar = 87;
switch ($ammallar) {
  case "1":
    echo "$A + $B = ". ($A + $B);
    break;
  case "2":
    echo "$A - $B = ". ($A - $B);
    break;
  case "3":
    echo "$A / $B = ". ($A/$B);
    break;
    case "4":
      echo "$A * $B = ". ($A*$B);
      break;
  default:
  echo "Bunday amal kiritilmagan !";
  break;
    }
    */
    //HW-3.1
    /*
    $k = 35;
    $n = 10;
    $c = [];
    for($i = 1; $i<=$n; $i++){
    
      $k = $k+ 0*$i;
      print_r($k. "<br>");

    }
    */
    /*
  $n = 5;
  $array = [];
  $son = 2;
  for ($i = 0; $i<$n; $i++){
    $array = pow(2, $i);
  } 
  print_r($array);*/



/*
  function had($son, $marta) {
    $result = 0;
    
    for($i=$son; $i<$marta; $i++){
      $result +=$son;

    }
    
    return $result;
  }
  echo had(3,3);*/


/*
  $n = 15;
  $a = 1; 
  $b = 2;
  // n=3 - 3
  // n=4 - 6
  $array = [0,1];
  for($i = 2; $i<$n; $i++){
    $array[] = $array[$i-1]+ $array[$i-2];

  }
 print_r($array). "<br>";*/

/*
$array = [1,34,5,24,6,14];
$new_array = [];
for ($i = 5; $i>=0; $i--) {
  $new_array[] = $array[$i];
}
print_r($new_array);

$r = "salom dunyo dasturi";
$t = explode(" ", $r);
echo $t */



//28.09.2021
/*
$telefonlar = array(
  array(
  "nom" => "Iphone",
  "turi" =>"telefon",
  "brendi" =>'Apple'
  )
  );
var_dump($telefonlar)."<br>";
echo $telefonlar[0]   ["nom"];


$kurslar = array("HTML", "CSS", "PHP");
echo "Massiv o'lchami: ". sizeof($kurslar). "<br>";

echo is_array($kurslar) ? 'Massiv' : 'Massiv emas'."<br>";

echo is_array($messenjer) ? 'Massiv' : 'Massiv emas'."<br>";


echo in_array($top, $kurslar) ? 'Massiv ichida' : 'Massiv ichida emas'."<br>";

 $kurslar = array("HTML", "CSS", "PHP", "Bootstrap", "Js", "Python");
echo "Random kurs: ". $kurslar[array_rand($kurslar)]."<br>";

$kurslar = array("HTML", "CSS", "PHP", "Bootstrap", "Js", "Python");
ksort($kurslar);
 print_r($kurslar). "<br>";




 //asort
 //ksort()
 //shuffle()
//explode(delimeter, string)
$matn = "salom dunyo";
$res = explode(" ", $matn);
print_r($res);*/
echo '<a href = "form.php" target = "_blank" > Formalarga o\'tish</a>';

?>
</body>
</html>




