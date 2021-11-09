<?php
<!DOCTYPE html>
<html>
<body>

<?php
$namesurname = array("ismlar"=>[
  [
    "ism"=>"Kamron","familiya"=>"Xamraqulov"
  ],
    
    [
    "ism"=>"Kamron","familiya"=>"Bahtiyorov"
  ],
    
  [
    "ism"=>"Sherzod","familiya"=>"Rahmonqulov"
  ],
    
  [
    "ism"=>"Arslonbek","familiya"=>"Azimov"
  ],
    
  [
    "ism"=>"Shohrux","familiya"=>"Aralov"
  ],
]

);

$ism = "Kamron";
$familiya = array();

for($i = 0; $i <= count($namesurname["ismlar"]); $i++){

  if($namesurname["ismlar"][$i]["ism"] == $ism){
    
    $familiya[] = $namesurname["ismlar"][$i]["familiya"];
        
    }
//        echo $namesurname["ismlar"][$i]["familiya"]. "<br>";
}

// echo $namesurname["ismlar"][$i]["ism"];
sort($familiya);
foreach($familiya as $i){
  echo $ism." ";
    echo $i."<br>";
}


?>

</body>
</html>
?>