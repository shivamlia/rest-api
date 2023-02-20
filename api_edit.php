<?php
require_once('koneksi.php');
$data = json_decode(file_get_contents("php://input"));

if ($data->id!=null) {
	$id 					= $data->id;
	$kategori_kelas 		= $data->kategori_kelas;
	$kelas 					= $data->kelas;
	$peserta 				= $data->peserta;
	$akses_kelas_peserta 	= $data->akses_kelas_peserta;

	$sql = $conn->prepare("UPDATE backend SET kategori kelas=?, kelas=?, peserta=?, akses kelas peserta=? WHERE id=?")
	//pada bind parameter ssdd itu artinya tipe data yang dikitimkan s= string, d= double, i= interfer .
	$sql->bind_param('ssddd', $kategori_kelas, $kelas, $peserta, $akses_kelas_peserta, $id);
	$sql->execute();
	 if ($sql) {
	 	echo json_encode(array('RESPONSE' => 'SUCCESS'));
	 }else{
	 	echo json_encode(array('RESPONSE' => 'FAILED'));
	 }
}else {
	echo "GAGAL";
}
?>