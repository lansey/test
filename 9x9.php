<?
  $j = 1;
  for($i=1;$i<10;($j++<9)?$i:($j=($i++)*0+1)) {
      echo $i."x".$j." = ".sprintf("%4d\n", ($i*$j));
  }
?>
