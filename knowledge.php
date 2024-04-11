<?php if(str_contains($_SERVER['HTTP_USER_AGENT'],'Firefox')) {
       echo'Вы используете Firefox браузер.';
}
      elseif (str_contains($_SERVER['HTTP_USER_AGENT'],'Chrome')) {
        echo'Вы используете Google Chrome браузер.';
 }

else  {
    echo'Вы используете необычный браузер.';
}

?>
<br>
<?php

function getArray() {
    return array(1, 2, 3);
}

$secondElement = getArray()[1];
echo $secondElement;

?>
<br>

<?php

$array = array("foo", "bar", "hallo", "world");
var_dump($array);

?>
<br>
<?php
  $price = 15;

  if($price >= 15 && $price <= 20)
      echo $d = 'Это число находится между 15 и 20';
?>
