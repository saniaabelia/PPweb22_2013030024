<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar</title>
</head>
<body>
<h2>Daftar Data</h2>
<a href="add.php">TAMBAH</a> <a href="laporan.php">LIHAT</a>
<br>
<?php
	$sql = "SELECT  I.*, IG.id as ig_id, IG.nama as ig_nama, S.id as s_id, S.nama as s_nama 
			FROM item I 
			JOIN item_grp IG ON I.item_grp_id=IG.id
            JOIN satuan S ON I.satuan_id=S.id "; 
	$res = $koneksi->query($sql);
	//menampilakn jumlahhasil query
	$jml_data = $res->num_rows;
	echo "Ditemukan $jml_data data"; 
	echo "<table border='1' width='100%'>";
	echo "	<thead>
				<tr>
					<td width='5%'>No.</td>
					<td width='5%'>Act</td>
					<td width='10%'>ID</td>
					<td width='15%'>Nama</td>
					<td width='20%'>Jenis</td>
					<td width='20%'>Satuan</td>
                    <td width='20%'>Harga</td> 
					<td width='20%'>suplayer</td>
				</tr>
			</thead
			<tbody>";
	$i = 0;
	while($rows = $res->fetch_array(MYSQLI_BOTH)){
		$i++;
		echo "<tr>
				<td align='center'>$i</td> 
				<td align='center'>
					<a href='detil.php?id=".$rows['id']."'>EDIT</a> 
				</td>
				<td>".$rows['id']."</td>
				<td>".$rows['nama']."</td>
				<td>".$rows['ig_nama']."</td>
				<td>".$rows['s_nama']."</td>
				<td>".$rows['hpp']."</td> 
				<td>".$rows['suplayer']."</td>

			</tr>"; 
	}
	echo "	</tbody>
		</table>"
?> 
</body>
</html>