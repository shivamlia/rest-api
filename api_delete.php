<?PHP
require_once('koneksi.php');
$data = json_decode(file_get_contents("php://input"));

if ($data->id!=null){
	$id=$data->id;
		$sql = $conn->prepare("DELETE FROM  backend WHERE id=?");
		$sql-> bind_param ('i', $id);
		$sql->execute();

		if ($sql) {
	 	echo json_encode(array('RESPONSE' => 'SUCCESS'));
	 }else{
	 	echo json_encode(array('RESPONSE' => 'FAILED'));
	 }
}else {
	echo "gagal";
}
?>