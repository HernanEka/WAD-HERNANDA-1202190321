<?php

	$koneksi = mysqli_connect('localhost','root','','modul3');

	if (!$koneksi) {
		echo "<script>
				alert('Koneksi gagal')
				</script>";
	}

?>