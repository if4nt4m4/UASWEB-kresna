<?php
include "koneksi.php";
$db = new database();
?>
<!DOCTYPE html>
<html>
<head>
    <title> PENDAFTARAN -Selamat Datang- </title>
	<link rel="icon" type="png/jpg" href="gambar/icon.png" sizes="16x16">
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: navy;
			color: #fff;
			padding: 20px;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		h1 {
			margin: 0;
		}

		nav {
			background-color: black;
			color: #fff;
			padding: 10px;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			display: flex;
		}

		nav ul li {
			margin-right: 20px;
		}

		nav ul li a {
			color:white;
			text-decoration: none;
			padding: 10px;
			border-radius: 5px;
			transition: background-color 0.3s ease-in-out;
		}

		nav ul li a:hover {
			background-color: skyblue;
		}

		.search-container {
			display: flex;
			align-items: center;
			position: relative;
		}

		.search-container input[type="text"] {
			padding: 10px;
			border-radius: 5px;
			border: none;
			width: 200px;
		}

		.search-container button {
			background-color: #fff;
			color: #333;
			padding: 10px;
			border-radius: 5px;
			border: none;
			position: absolute;
			right: 0;
		}

        section {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
            align-items: center;
            flex-direction: column;
			margin: 20px;
		}

        .container{
            width: 400px;
            height: 500px;
            border: 1px solid #ccc;
            background-color: #000080;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .container label{
            color: #f2f2f2;
        }

        .container input[type="submit"]{
            background-color: #f2f2f2;
            color: black;
        }
        .container input:hover{
            background-color: skyblue;
        }

		.card {
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			border-radius: 5px;
			padding: 20px;
			margin-bottom: 20px;
			width: calc(33% - 20px);
		}

		.card h2 {
			margin-top: 0;
		}

		.card p {
			margin: 0;
		}
        input[type=submit] {
            width: 130px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: navy;
            background-position: 10px 10px; 
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
            margin: center;
            color: #fff;
			transition: background-color 0.3s ease-in-out;
        }

	</style>
</head>
<body>
	<header>
		<h1>Politeknik Negeri Madiun</h1>
		<nav>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="viewdata.php">Mahasiswa</a></li>
				<li><a href="pendaftaran.php">pendaftaran</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
			<div class="search-container">
                <form action="viewdata.php" method="get">
                    <input type="text" placeholder="Cari..." name="cari">
                    <button type="submit" value="cari">Cari</button>
                </form>
			</div>
		</nav>
	</header>

    <section>
    <center><h1>Formulir Pendaftaran</h1></center><br>
    <?php 
      if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
      }
      ?><br>
        <div class="container">
            <form method="POST" action="proses_pendaftaran.php">
                <label for="noUjian">No. Ujian:</label>
                <input type="text" id="noUjian" name="noUjian" required><br><br>
                
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required><br><br>
                
                <label for="tempat">Tempat Lahir:</label>
                <input type="text" id="tempat" name="tempat" required><br><br>
                
                <label for="tgllahir">Tanggal Lahir:</label>
                <input type="text" id="tgl" name="tgllahir" placeholder="yyyy/mm/dd" required><br><br>
                
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" required></textarea><br><br>
                
                <label for="noHp">No. HP:</label>
                <input type="tel" id="noHp" name="noHp" placeholder="0000-0000-0000" required><br><br>
                
                <label for="jurusan">Jurusan:</label>
                <input type="text" id="jurusan" name="jurusan" required><br><br>
                
                <label for="prodi">Prodi:</label>
                <input type="text" id="prodi" name="prodi" required><br><br>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="nama@gmail.com" required><br><br>
                
                <center><input type="submit" value="Daftar" name="daftar"></center>
            </form>
        </div>
	</section>

</body>
</html>
