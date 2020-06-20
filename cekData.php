<?php
//include "dbcon.php";
//$awal = "C09";
//$sqlCek = mysqli_query($conn,"SELECT kode_spkc from prosesqc where R_reject = '' AND kode_spkc like'".$awal."%' ORDER BY kode_spkc DESC limit 1");

//while($rows=mysqli_fetch_array($sqlCek)){
//	$kodeTmp = $rows['kode_spkc'];
//}
//if (empty($kodeTmp)) {
//    $kodeL = $awal."001";
    
//} else {
//    $tmpKode = substr($kodeTmp,3);
//    $sumK = $tmpKode + 1;
//    $kodeL = $awal.$sumK;
    
//}
//$cekKode = mysqli_query($conn, "SELECT * FROM proses_konveksi where kode_hanca = '".$kodeL."'");
//while($data =  mysqli_fetch_array($cekKode)){
//    $kode = $data['kode_hanca'];
    
//}
//if (empty($kode)){
//    $digit1 = $kodeL;
//	$data['hasil'] = $digit1;
    
//} else {
//    $trim = substr($kode,3);
//    $sumD = $trim + 1;
//    $jadi = $awal.$sumD;
//    $digit2 = $jadi;
//	$data['hasil'] = $awal.$digit2;
    
//}
	
//	echo $kodeL."</br>";
//	echo $digit1." & ".$digit2;

?>
<form method="POST" action="email-script.php">
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" />
    <input type="submit" value="Ok" />
</form>