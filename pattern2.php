<?php 
  function triangle_pattern($len){
$string="*";
$pyramid_str="";
$mid_point=ceil($len/2);
for($i=1;$i<=$mid_point;$i++){
    for($j = 1; $j <= $i; ++$j) {
           $pyramid_str.=$string." ";
    }
    $pyramid_str.="\r<br>";
}
  
for($i=$mid_point;$i>=1;$i--){
    for($j = 1; $j < $i; ++$j) {
           $pyramid_str.=$string." ";
    }
    $pyramid_str.="\r<br>";   
}
  
return $pyramid_str;
}
echo triangle_pattern(9);
  ?>