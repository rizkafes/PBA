<?php
 
class database {
var $koneksi ;
var $selectDb;
 
function database()
{
$this->koneksi = mysql_connect("localhost","root","");
$this->selectDb = mysql_select_db("tb_katadasar" , $this->koneksi);
if ( !$this->selectDb )
{
echo "gagal";
}
}
}
 
?>