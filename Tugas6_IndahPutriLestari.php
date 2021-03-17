<html>
<?php
	//function tambah
	function tambah($bil1,$bil2){
		$hasil = $bil1 + $bil2;
		return $hasil;
	}
	//function kurang
	function kurang($bil1,$bil2){
		$hasil = $bil1 - $bil2;
		return $hasil;
	}
	//function kali
	function kali($bil1,$bil2){
		$hasil = $bil1 * $bil2;
		return $hasil;
	}
	//function bagi
	function bagi($bil1,$bil2){
		$hasil = $bil1 / $bil2;
		return $hasil;
	}
?>
<head>
	<title>Implementasi Tugas 5 dengan desain</title>
	<!-- Include style.css -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="desain-form">
		<h2>Kalkulator</h2>
		<form method="post">
			<label>Bilangan 1</label> 
			<input type="text" class="input" name="bil1" placeholder="Bilangan 1"><br>
			<label>Bilangan 2</label>
			<input type="text" class="input" name="bil2" placeholder="Bilangan 2"><br>
		<div class="kotak-kirim">
			<input type="submit" class="btn" name="btnsubmit" value="kirim">
		</div>
	</form>
	</div>
	
	<?php 
		if (isset($_POST['btnsubmit'])) {
			$bil1 = $_POST['bil1'];
			$bil2 = $_POST['bil2'];
			//menampilkan data
			echo "<div class='desain-form'>";
			echo "Bilangan 1 : ".$bil1."<br>";
			echo "Bilangan 2 : ".$bil2."<br>";
			echo "=============================== <br>";
			echo "Hasil Penjumlahan Adalah ".tambah($bil1,$bil2)."<br>";
			echo "Hasil Pengurangan Adalah ".kurang($bil1,$bil2)."<br>";
			echo "Hasil Perkalian Adalah ".kali($bil1,$bil2)."<br>";
			echo "Hasil Pembagian Adalah ".bagi($bil1,$bil2)."<br>";
			echo "</div>";
		}
	?>		
	</div>
</body>
</html>