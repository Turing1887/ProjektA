<?php

include ('GameBoard.html');


function roll_the_dice(){
  $rand1 = mt_rand(1,6);
  $rand2 = mt_rand(1,6);
  $rand3 = mt_rand(1,6);

  echo "<section><p>$rand1</p>";
  echo "<p>$rand2</p>";
  echo "<p>$rand3</p></section>";

}


?>
