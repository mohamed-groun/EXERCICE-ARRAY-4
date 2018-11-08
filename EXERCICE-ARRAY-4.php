<?php
$cart1 = array("as " => '<img src="cartes/as.png"  width="150" height="219" /> ');
$cart2 = array("deux " => '<img src="cartes/deux.png" />');
$cart3 = array("troi " => '<img src="cartes/trois.png" />');
$cart4 = array("quatre " => '<img src="cartes/quatre.png" />');
$cart5 = array("cinq" => '<img src="cartes/cinq.png" />');
$cart6 = array("six " => '<img src="cartes/six.png" />');
$cart7 = array("sept " => '<img src="cartes/sept.png" />');
$cart8 = array("dame" => '<img src="cartes/dame.png" />');
$cart9 = array("valet " => '<img src="cartes/valet.png" />');
$cart10 = array("Roi " => '<img src="cartes/roi.png" />',);
$cart = array(1 => $cart1, 2 => $cart2, 3 => $cart3, 4 => $cart4, 5 => $cart5, 6 => $cart6, 7 => $cart7, 8 => $cart8, 9 => $cart9, 10 => $cart10);

$s1=0;
$s2=0;
?>
 <?php
for ($i = 1; $i <= 5; $i++) {
    $Cartjoueur1=(array_rand($cart, 1));
    $Cartjoueur2= (array_rand($cart, 1));
    if ($Cartjoueur1> $Cartjoueur2) {
        $s1++;

    }
    elseif ($Cartjoueur1< $Cartjoueur2) {
        $s2++;

    }

    foreach($cart[$Cartjoueur1] as $key=>$value){
    foreach($cart[$Cartjoueur2] as $key1=>$value1){
        ?>
        <table border="0"  align="center">
    <tr>
        <td> <?php echo $key ;?></td>
        <td><?php echo $key1; ?></td>


    </tr>
    <tr>
        <td><?php echo $value ;?></td>
        <td><?php echo $value1 ;?></td>
    </tr>

        <?php echo " <br> <tr><td> joueur lowel $s1 , joueur thani $s2</td> </tr> <br>" ; ?>
        </table>

<br>

  <?php






} }}
echo ($s1==$s2) ? "egalité" : ($s1>$s2) ? "joueur lowl rba7" : "joueur thani rba7" ;





