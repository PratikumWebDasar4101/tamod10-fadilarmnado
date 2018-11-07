<?php
class proses{
 public function __construct()
{
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "jurnal8";
  $this->conn = new mysqli($server,$user,$pass,$db);
  if ($this->conn->connect_error) {
    die("connect gagal" . $this->conn->connect_error);
  }
}

public function dashboard()
{
  $sql = "SELECT * FROM mahasiswa";
  $result = $this->conn->query($sql);
  $hasil = array();

  while ($row = $result->FETCH_ASSOC()) {
      $hasil[] = $row;
    }
return $hasil;
}

public function newdata()
{
  $sql = mysqli_query($conn, "INSERT INTO mahasiswa(nama_depan, nama_belakang, nim, kelas, hobi, genre_film, tempat_wisata, tgl_lahir, email)
								VALUES ('$namadep','$namabel','$nim','$kelas1','$hobi','$genre_film','$tempat_wisata','$tgl_lahir','$email')");
	if ($sql === TRUE) {
    foreach ($data as $row) {
      $sql = $row;
    }
		header("location: dashboard.php");
	}else{
		echo "gagal" . $conn->error;
	}
}


}
 ?>
