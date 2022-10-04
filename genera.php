<?php
$nome = $_POST["nomeospite"]; 
$numero = $_POST["numeroprenotazione"]; 
$data = $_POST["data"]; 
$adulti = intval($_POST["adulti"]); 
$bambini = intval($_POST["bambini"]); 
$pulizie = $_POST["pulizie"]; 
$notti = intval($_POST["notti"]); 
$costosoggiorno = floatval($_POST["costosoggiorno"]); 
$appartamento = $_POST["appartamento"];
$deposito = floatval($_POST["deposito"]); 


$tassa = floatval($adulti * $notti * 2);
$amount = floatval($tassa + 40.00);
$amountlessdeposit = $costosoggiorno-$deposito;

$indirizzo = 'Via al Castèl Pénede n. 59, 38069 Nago-Torbole (TN) - Italy, +39 331 1234215';
$contatti = 'info@ispirazionevacanza.com - www.ispirazionevacanza.com';
$image = 'image002.png';
$nomeapp = 'Appartamento Al Forte';

if ($appartamento == 'Casa Donegani') {
	$indirizzo = 'Via della Provvidenza n. 13, 38062 Arco (TN) - Italy, +39 331 1234215';
	$contatti = 'doneganiapartments@gmail.com - www.casadonegani.com';
	$image = 'image001.png';
	$nomeapp = 'Casa Donegani';
	}

if ($pulizie == 'Si') {	
	$totale = ($costosoggiorno + $tassa - $deposito);
	}
else{ 
	$totale = ($costosoggiorno + $tassa -$deposito + 40.00);
	}

$deposito = number_format($deposito,2, ',', '.');
$costosoggiorno = number_format($costosoggiorno,2, ',', '.');
$tassa = number_format($tassa,2, ',', '.');	
$amount = number_format($amount,2, ',', '.');	
$totale = number_format($totale,2, ',', '.');
$amountlessdeposit = number_format($amountlessdeposit,2, ',', '.');
?>

<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 15">
<title>Booking Receipt</title>
<link rel=Stylesheet href=stylesheet.css>
<script src="./html2canvas.min.js" defer></script>
</head>
<body link="#00A3D6" vlink="#00A3D6">

<table id="main" border=0 cellpadding=0 cellspacing=0 width=2095 style='border-collapse:
 collapse;table-layout:fixed;width:1572pt'>
 <col width=33 style='mso-width-source:userset;mso-width-alt:1206;width:87pt'>
 <col width=118 style='mso-width-source:userset;mso-width-alt:4315;width:89pt'>
 <col width=87 style='mso-width-source:userset;mso-width-alt:3181;width:65pt'>
 <col width=229 style='mso-width-source:userset;mso-width-alt:8374;width:172pt'>
 <col width=137 style='mso-width-source:userset;mso-width-alt:5010;width:103pt'>
 <col width=123 style='mso-width-source:userset;mso-width-alt:4498;width:92pt'>
 <col width=132 style='mso-width-source:userset;mso-width-alt:4827;width:99pt'>
 <col width=84 style='mso-width-source:userset;mso-width-alt:3072;width:63pt'>
 <col width=64 span=18 style='mso-width-source:userset;mso-width-alt:2340;
 width:48pt'>
 <tr height=18 style='mso-height-source:userset;height:50pt'>
  <td height=18 width=33 style='height:13.5pt;width:25pt'></td>
  <td class=xl65 width=118 style='width:89pt'></td>
  <td class=xl65 width=87 style='width:65pt'></td>
  <td class=xl65 width=229 style='width:172pt'></td>
  <td class=xl65 width=137 style='width:103pt'></td>
  <td class=xl65 width=123 style='width:92pt'></td>
  <td class=xl65 width=132 style='width:99pt'></td>
  <td class=xl65 width=84 style='width:63pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
  <td class=xl65 width=64 style='width:48pt'></td>
 </tr>
 <tr height=108 style='mso-height-source:userset;height:81.0pt'>
  <td height=108 style='height:81.0pt'></td>
  <td colspan=2 height=108 width=205 style='height:81.0pt;width:154pt'
  align=left valign=top><span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:7px;margin-top:5px;width:99px;
  height:99px'><img width=99 height=99 src=<?php echo $image; ?> v:shapes="image1.png"></span><![endif]><span
  style='mso-ignore:vglayout2'>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td colspan=2 height=108 class=xl99 width=205 style='height:81.0pt; width:154pt'></td>
   </tr>
  </table>
  </span></td>
  <td colspan=4 class=xl101>Booking Receipt</td>
  <td class=xl66></td>
  <td class=xl66></td>
  <td class=xl66></td>
  <td class=xl66></td>
 </tr>
 <tr height=51 style='mso-height-source:userset;height:38.25pt'>
  <td height=51 style='height:38.25pt'></td>
  <td colspan=4 class=xl103><?php echo $appartamento; ?></td>
  <td class=xl67>Date:&nbsp;</td>
  <td class=xl68><font class="font26"><?php echo $data; ?></font></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65><button class="button" onclick="window.print();">Stampa ricevuta</button></td>
  <td class=xl65></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td height=37 style='height:27.75pt'></td>
  <td colspan=4 class=xl105><span style='mso-spacerun:yes'></span>Your Stay In
  Our Enchantment</td>
  <td class=xl69></td>
  <td class=xl70></td>
  <td class=xl71></td>
  <td class=xl71></td>
  <td class=xl71><a href="index.html" class="button">Ricompila il form</a></td>
  <td class=xl71></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td height=37 style='height:27.75pt'></td>
  <td colspan=3 class=xl106><font class="font25">Guest: </font><font class="font26"><?php echo $nome; ?></font></td>
  <td colspan=3 class=xl107><font class="font25">Booking Number: <span
  style='mso-spacerun:yes'>  </span></font><font class="font26"><span
  style='mso-spacerun:yes'> </span><?php echo $numero; ?></font></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65><button class="button" onclick="capture()">Screenshot</button></td>
  <td class=xl65></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td height=37 style='height:27.75pt'></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl72></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl73></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65><button class="button" onclick="window.location.reload();">Ricarica</button></td>
  <td class=xl65></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td height=37 style='height:27.75pt'></td>
  <td colspan=3 class=xl109>Description</td>
  <td class=xl74>Quantity</td>
  <td class=xl74>Unit price</td>
  <td class=xl74>Amount</td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 style='height:19.5pt'></td>
  <td colspan=3 class=xl112></td>
  <td class=xl76></td>
  <td class=xl77></td>
  <td class=xl77></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 style='height:19.5pt'></td>
  <td colspan=3 class=xl111>Your stay at <?php echo $nomeapp; ?></td>
  <td class=xl78>1</td>
  <td class=xl79>€ <?php echo $costosoggiorno; ?></td>
  <td class=xl79>€ <?php echo $costosoggiorno; ?></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 style='height:19.5pt'></td>
  <td colspan=3 class=xl112></td>
  <td class=xl76></td>
  <td class=xl77></td>
  <td class=xl77></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 style='height:19.5pt'></td>
  <td colspan=3 class=xl111>Deposit already paid</td>
  <td class=xl78>1</td>
  <td class=xl79>€ <?php echo $deposito; ?></td>
  <td class=xl79>€ <?php echo $deposito; ?></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 style='height:19.5pt'></td>
  <td colspan=3 class=xl112></td>
  <td class=xl76></td>
  <td class=xl77></td>
  <td class=xl77></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 style='height:19.5pt'></td>
  <td class=xl80></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 style='height:19.5pt'></td>
  <td class=xl82 colspan=3 style='mso-ignore:colspan'>Payment: Credit Card or
  Cash</td>
  <td class=xl81></td>
  <td class=xl84>Amount due:<span style='mso-spacerun:yes'> </span></td>
  <td class=xl77>€ <?php echo $amountlessdeposit; ?></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 style='height:19.5pt'></td>
  <td class=xl85></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl86></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td height=37 style='height:27.75pt'></td>
  <td colspan=3 class=xl109>Description</td>
  <td class=xl74>Quantity</td>
  <td class=xl74>Unit price</td>
  <td class=xl74>Amount</td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 style='height:19.5pt'></td>
  <td colspan=3 class=xl112></td>
  <td class=xl76></td>
  <td class=xl77></td>
  <td class=xl77></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td height=37 style='height:27.75pt'></td>
  <td colspan=3 class=xl111>Tourist Tax</td>
  <td class=xl87 width=137 style='width:103pt'><?php echo $adulti; ?> people x <?php echo $notti; ?> nights <br>
    (over 14 years old)</td>
  <td class=xl79>€ 2,00</td>
  <td class=xl79>€ <?php echo $tassa; ?></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 style='height:19.5pt'></td>
  <td colspan=3 class=xl112></td>
  <td class=xl76></td>
  <td class=xl77></td>
  <td class=xl77></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 style='height:19.5pt'></td>
  <td colspan=3 class=xl111>Cleaning Service</td>
  <td class=xl78>1</td>
  <td class=xl79>
				<?php
				if ($pulizie == 'Si') {
					echo "€ 00,00";
				}
				else{ echo "€ 40,00"; }
					
				?></td>
  <td class=xl79>
				<?php
				if ($pulizie == 'Si') {
					echo "€ 00,00";
				}
				else{ echo "€ 40,00"; }
					
				?></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 style='height:19.5pt'></td>
  <td colspan=3 class=xl112></td>
  <td class=xl76></td>
  <td class=xl77></td>
  <td class=xl77></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 style='height:15.0pt'></td>
  <td class=xl65></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl88>€ <?php
				if ($pulizie == 'Si') {
					echo $tassa;
				}
				else{ echo $amount; }
					
				?></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 style='height:19.5pt'></td>
  <td class=xl82 colspan=2 style='mso-ignore:colspan'>Payment: Only Cash</td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl84>Amount:<span style='mso-spacerun:yes'> </span></td>
  <td class=xl77>€ <?php
				if ($pulizie == 'Si') {
					echo $tassa;
				}
				else{ echo $amount; }
					
				?></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 colspan=2 style='height:15.75pt;mso-ignore:colspan'></td>
  <td class=xl89></td>
  <td class=xl89></td>
  <td class=xl89></td>
  <td class=xl90></td>
  <td class=xl91>=</td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 style='height:19.5pt'></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl81></td>
  <td class=xl84>Total:<span style='mso-spacerun:yes'> </span></td>
  <td class=xl77>€ <?php echo $totale; ?></td>
  <td class=xl75></td>
  <td class=xl75></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
   <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 colspan=2 style='height:15.75pt;mso-ignore:colspan'></td>
  <td class=xl89></td>
  <td class=xl89></td>
  <td class=xl89></td>
  <td class=xl90></td>
  <td class=xl91></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 style='height:15.75pt'></td>
  <td colspan=6 class=xl113>Hoping to have you soon again as our guests, we thank you very much for having chosen us!</td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 style='height:15.75pt'></td>
  <td colspan=6 class=xl114><span style='mso-spacerun:yes'></span>
  <?php echo $indirizzo; ?></td>
  <td class=xl65></td>
  <td class=xl92></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 style='height:15.75pt'></td>
  <td colspan=6 class=xl114><span style='mso-spacerun:yes'></span>
  <?php echo $contatti; ?></td>
  <td class=xl65></td>
  <td class=xl92></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
  <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 colspan=2 style='height:15.75pt;mso-ignore:colspan'></td>
  <td class=xl89></td>
  <td class=xl89></td>
  <td class=xl89></td>
  <td class=xl90></td>
  <td class=xl91></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
  <td class=xl65></td>
 </tr>
</table>
	
    <div>
        <img id="result">
    </div>

    <script src="./html2canvas.min.js"></script>
    <script>
        function capture() {
            html2canvas(document.getElementById("main"), {
                letterRendering: 1,
                allowTaint: true,
                useCORS: true,
            })
                .then(function (canvas) {
                    document.getElementById("result").src = canvas.toDataURL("image/png", 0.5);
                })
                .catch((e) => {
                    alert(e);
                });
        }
    </script>
</body>
</html>