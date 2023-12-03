<?php
 
$ch1 = "igen";  $ch2 = "nem";

if ((isset($_POST["igen"])) && ($_POST["igen"]=='igen')) { 

  $ch1 = " checked ";

  echo  "<br> Külföldi állampolgár vagy Külföldi állandó lakícmmel rendelkezik?: IGEN";

} 

if ((isset($_POST["nem"])) && ($_POST["nem"]=='nem')) { 

  $ch2 = " checked ";

  echo  "<br> Külföldi állampolgár vagy Külföldi állandó lakícmmel rendelkezik?: NEM";
}  


print "<table cellspacing='0' style='border:solid 1px;padding:10px;'>

<tr style='border:solid 1px;padding:10px;text-align:center'>
<th class='firstname' style='border:solid 1px;padding:10px;text-align:center'>Vezetéknév</th>
<th class='lastname' style='border: solid 1px;padding:10px;text-align:center'>Keresztnév</th>
<th class='telefon' style='border: solid 1px;padding:10px;text-align:center'>Telefonszám</th>
<th class='radio' style='border: solid 1px;padding:10px;text-align:center'>Teljes vagyon volumene</th>
<th class='munkaber' style='border: solid 1px;padding:10px;text-align:center'> Munkabér</th>
<th class='egyeb' style='border: solid 1px;padding:10px;text-align:center'> Egyéb</th>
<th class='card' style='border: solid 1px;padding:10px;text-align:center'> Bankkártya</th>
<th class='utalas' style='border: solid 1px;padding:10px;text-align:center'> Utalás</th>
<th class='terheles' style='border: solid 1px;padding:10px;text-align:center'> Terhelés</th>
<th class='jovairas' style='border: solid 1px;padding:10px;text-align:center'> Jóváírás</th>
<th class='kulfold' style='border: solid 1px;padding:10px;text-align:center'> Külföldi utalás</th>
<th class='kp' style='border: solid 1px;padding:10px;text-align:center'> Készpénz</th>
</tr>
<tr style='border: solid 1px;padding:10px;text-align:center'>
<td style='border: solid 1px;padding:10px;text-align:center'>".$_POST['firstname']."</td>
<td style='border: solid 1px;padding:10px;text-align:center'>".$_POST['lastname']."</td>
<td style='border: solid 1px;padding:10px;text-align:center'>".$_POST["telefon"]."</td>
<td style='border: solid 1px;padding:10px;text-align:center'>".$_POST["radio"]."</td>
<td style='border: solid 1px;padding:10px;text-align:center'>".$_POST["munkaber"]."</td>
<td style='border: solid 1px;padding:10px;text-align:center'>".$_POST["egyeb"]."</td>
<td style='border: solid 1px;padding:10px;text-align:center'>".$_POST["card"]."</td>
<td style='border: solid 1px;padding:10px;text-align:center'>".$_POST["utalas"]."</td>
<td style='border: solid 1px;padding:10px;text-align:center'>".$_POST["terheles"]."</td>
<td style='border: solid 1px;padding:10px;text-align:center'>".$_POST["jovairas"]."</td>
<td style='border: solid 1px;padding:10px;text-align:center'>".$_POST["kulfold"]."</td>
<td style='border: solid 1px;padding:10px;text-align:center'>".$_POST["kp"]."</td>
</tr>
</table>";