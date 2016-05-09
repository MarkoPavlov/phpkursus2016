<?php
function getname ($name)
{
    $names = "koer   123
kass   4244
kukk   3456
kana   4567";
    
    $rows = explode("\n", $names);
   # print_r($rows);
   
   foreach($rows as $key => $val)
   {
     $temp = explode("   ", $val);
     $surenames [$temp[0]] = $temp[1];
   }
    print_r($surenames);
    
    
    return $count;
}
getname();
?>