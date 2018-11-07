<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>dashboard</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="dashboard.php">Beranda</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active">
				<a class="nav-link" href="newdata.php">new data <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="profile.php">Profil</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="index.php">logout</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0" action="dashboard.php" method="get">
			<input class="form-control mr-sm-2" type="hidden" name="search" value="carimhs" placeholder="Search">
			<input class="form-control mr-sm-2" type="text" name="data" placeholder="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">cari</button>
		</form>
	</div>
</nav>
	<form>
		<center>
		<table border="1">
			<?php
				include_once 'proses.php';
				if (isset($_GET['search']) && $_GET['search'] == 'carimhs' && isset($_GET['data'])) {
					$data = $_GET['data'];
					$sql = "SELECT * from mahasiswa where nim like '%$data%'";
				}else {
					$sql = "SELECT * FROM mahasiswa where 3";
				}

			?>
			<tr>
	        <th>Nama Depan</th>
	        <th>Nama Belakang</th>
	        <th>NIM</th>
	        <th>Kelas</th>
	        <th>Hobi</th>
	        <th>Genre Film</th>
	        <th>Tempat Wisata</th>
	        <th>Tanggal Lahir</th>
	        <th>Email</th>
					<th>Action</th>
			</tr>
		<?php
			$db = new proses;
			$data = $db->dashboard();
			foreach ($data as $row) {

		?>
            <tr>
							<td><?= $row['nama_depan'] ?></td>
							<td><?= $row['nama_belakang'] ?></td>
							<td><?= $row['nim'] ?></td>
							<td><?= $row['kelas'] ?></td>
							<td><?= $row['hobi'] ?></td>
							<td><?= $row['genre_film'] ?></td>
							<td><?= $row['tempat_wisata'] ?></td>
							<td><?= $row['tgl_lahir'] ?></td>
							<td><?=  $row['email'] ?></td>
							<td><a href="update.php?nim=<?php echo $row['nim']; ?>">Edit</a> || <a href="hapus.php?nim=<?php echo $row['nim']; ?>">Hapus</a> </td>
            </tr>
		<?php
			}
		?>
		</table>
		</center>
	</form>
</body>
</html>
