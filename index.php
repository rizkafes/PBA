
<title>Stemmer Indonesia</title>
<link href="tema/tema.css" rel="stylesheet" type="text/css" />
 
<!-- Tema Untuk font -->
<style type="text/css">
.temaFont {
font-size: 13px;
color: #003366;
font-family: Verdana, Arial, Helvetica, sans-serif;
font-weight: bold;
text-decoration: none;
letter-spacing: 2pt;
}
</style>
 
<!-- validasi data kosong -->
<script language=javascript>
function validasi(){
if (document.forms[0].text.value==""){
alert("Kalimat Masih Kosong ...")
document.forms[0].text.focus();
return false;
}
}
</script>
 
<body background="gambar/bgtengah.jpg">
<p align="center">&nbsp;</p>
<p align="center"><span>
</span></p>
 
<!-- membuat form dengan metode post -->
<form name="formBocahIlang" method="post" action="" onSubmit="return validasi()">
<table width="400" border="0" align="center" cellspacing="1" bgcolor="lightsteelblue">
<tr valign="middle">
<td height="21" align="left" bgcolor="#FFFFFF" colspan="2">&nbsp;SEGMENTATION DAN STEMMING </td>
</tr>
 
<tr valign="middle">
<td width="200" background="gambar/bgtr.gif" bgcolor="#FFFFFF" height="21" align="left">&nbsp;</td>
<td background="gambar/bgtr.gif" bgcolor="#FFFFFF" height="21" align="left">&nbsp;Teks</td>
</tr>
 
<tr valign="middle" bgcolor="#FAFAFA">
<td height="21" align="left">&nbsp;Kata / &nbsp;Kalimat:</td>
<td height="21" align="left">
<textarea name="text" name="kata" id="kata" cols="50" rows="5"></textarea></td>
</tr>
 
<tr valign="middle" bgcolor="#FAFAFA">
<td height="21" align="left">&nbsp;&nbsp;</td>
<td height="21" align="left">
<input type="submit" value="Proses" style=" border: 1px solid #666666; background-color:#EEEEEE;"/>
&nbsp;
<input type="reset" value="Ulangi" style=" border: 1px solid #666666; background-color:#EEEEEE;"/>
</td>
</tr>
</table>
<p><table width="400" border="0" bgcolor="LightSteelBlue" cellspacing="1" align="center" cellpadding="5">
<br>
<!-- Judul Atas -->
<tr>
<td width="407" background="gambar/bgtr.gif" bgcolor="#EBEBEB">&nbsp;&nbsp;<a>Segmentation => Stemming</a></td>
</tr>
<tr>
<td bgcolor="#FAFAFA"><br>

<?php

include("koneksi.php");
include ("proses.php");

$kon = new database;
$kon->database();
if (!empty($_POST['text'])){
$teks = strtolower($_POST['text']);
echo "$teks";
echo "<br><br>";
 
$tokenKarakter=array('?','?',' ','/',',','?','.',':',';',',','!','[',']','{','}','(',')','-','_','+','=','<','>','\'','"','\\','@','#','$','%','^','&','*','`','~','0','1','2','3','4','5','6','7','8','9','â?','?','?');
$teks= str_replace($tokenKarakter,' ',$teks);
$tok = strtok($teks, "\n\t");
 
while ($tok !== false) {
$teks = $tok;
$tok = strtok(" \n\t");
}
 
$split = explode(' ',$teks);
foreach($split as $key=>$kata){
$pemisah = ('=>');
 

echo '&nbsp;',$key.'&nbsp;->&nbsp;'.$kata.'&nbsp;&nbsp;',''.$pemisah.'&nbsp;';
echo proses(trim($kata)).'&nbsp;&nbsp;<p>';


}
}






?>

</p>
</form>
<p>
</body>


