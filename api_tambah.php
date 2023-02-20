<?php
	 require_once('koneksi.php');
	 if (isset($_POST['kategori_kelas']) && isset($_POST['kelas']) && isset($_POST['peserta']) && isset($_POST['akses_kelas _peserta'])){
	 	$kategori_kelas = $_POST['kategori_kelas'];
	 	$kelas = $_POST['kelas'];
	 	$sql = $conn->prepare("INSERT INTO backend(kategori_kelas, kelas, peserta, akses_kelas_peserta) VALUES (?, ?, ?, ?)");
	 	$peserta = $_POST['peserta'];
	 	$akses_kelas_peserta = $_POST['akses_kelas_peserta'];
	 	$sql->bind_param('ssdd', $kategori_kelas, $kelas, $peserta, $akses_kelas_peserta);
	 	$sql->execute();
	 	if ($sql) {
	 		// echo json_encode(array('RESPONSE' -> 'FAILED'));
	 		echo json_encode(array('RESPONSE' => 'SUCCESS'));
	 		//headr("localhost:../backend/tampil.php");
	 	} else {
	 		echo "GAGAL";
	 	}
	 }
?>