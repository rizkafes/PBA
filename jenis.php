<?php
function Jenis($jenis){
include("koneksi.php");
include ("proses.php");
// cari di database
$sql = "SELECT * from tb_katadasar where tipe_katadasar ='$jenis'"; 
$this->db->like('$kata',$keyword)->or_like($jenis, $keyword);
        $res  =   $this->db->get('tb_katadasar');
        return $res->result_array();
        echo $kata;
        echo $jenis;
}
?>
