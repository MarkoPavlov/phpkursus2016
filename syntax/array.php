 <?php

$drinks[]="Piim";
$drinks[]="Kohv";
$drinks[]="Viin";
$drinks[]="Gin";
$drinks[]="Tee";


#echo $drinks[0];

#kogu massiivi väljastus
#echo "<p>";
#print_r($drinks);

#eraldi elementide väärtuste väljastamine
echo "<p>";
echo "Mulle meeldib $drinks[2] 
ja isale meeldib ".$drinks[rand(3 , 4)]." kokku on külmikus jooke " . sizeof($drinks) . ".";

#siin loetelu jookidest
echo"<hr>";
echo "<ul>";
for ($i = 0; $i <sizeof($drinks); $i++)
{
    echo "<li>$drinks[$i]";
    echo "- " .rand(1,10) . "£";
    echo "</li>";
}
sort($drinks);
echo "<ul>";

#siin vee võimalus
echo "<hr>";
$rand1 = rand(0, sizeof ($drinks)-1);
$rand2 = rand(0, sizeof ($drinks)-1);
echo "Kellegile meeldib $drinks[$rand1] aga kindlasti ei meeldi $drinks[$rand2]";

echo "<hr>";
foreach ($drinks as $key => $val)
{ $counter++;
echo "$counter) Massiivi element indeksiga $key väärtus on $val<br>";
}
?> 