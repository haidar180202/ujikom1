<?php
//Jika download plugin mpdf tanpa composer (versi lama)
define('_MPDF_PATH','mpdf/');
include(_MPDF_PATH . "mpdf.php");
$mpdf=new mPDF('utf-8', 'A4', 11, 'Georgia');
 
//Jika download plugin mpdf dengan composer (versi baru)
//require_once __DIR__ . '/vendor/autoload.php';
//$mpdf = new \Mpdf\Mpdf();
 
//Menggabungkan dengan file koneksi yang telah kita buat
include '../koneksi.php';
 
$nama_dokumen='hasil-ekspor';
ob_start();
?>
 
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">
</head>
<body>
	<div>
		<h2>Eksport PDF</h2>
 
		<table border="1">
	    	<thead>
	    		<tr>
	    			<td>Nik</td>
	    			<td>Nama</td>
	    			<td>Jenis Kelamin</td>
	    			<td>Jurusan</td>
	    			<td>Email</td>
                    <td>Status</td>
                    
	    		</tr>
	    	</thead>
	    	<tbody>
				<?php
			        $no = 1;
			        $query = "SELECT * FROM pendaftaran WHERE status='ditolak' ORDER BY nama ASC";
			        $dewan1 = $db1->prepare($query);
			        $dewan1->execute();
			        $res1 = $dewan1->get_result();
 
			        if ($res1->num_rows > 0) {
				        while ($row = $res1->fetch_assoc()) {
				            $nik = $row['nik'];
				            $nama = $row['nama'];
				            $jenis_kelamin = $row['jenis_kelamin'];
				            $jurusan = $row['jurusan'];
                            $email = $row['email'];
                            $status = $row['status'];
 
							echo "<tr>";
								echo "<td>".$nik."</td>";
								echo "<td>".$nama."</td>";
								echo "<td>".$jenis_kelamin."</td>";
								echo "<td>".$jurusan."</td>";
                                echo "<td>".$email."</td>";
								echo "<td>".$status."</td>";
							echo "</tr>";
			    	} } else { 
			    		echo "<tr>";
			    			echo "<td colspan='5'>Tidak ada data ditemukan</td>";
			    		echo "</tr>";
			     	}
			    ?>
	    	</tbody>
	    </table>
 
	    <p>www.dewankomputer.com</p>
    </div>
 
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
 
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output("".$nama_dokumen.".pdf" ,'D');
$db1->close();
?>