<?php 

// $img_logo = file_get_contents('http://localhost/pelayanan/assets/gambar/image001.png'); 
// $img_garis = file_get_contents('http://localhost/pelayanan/assets/gambar/image002.png'); 

// Encode the image string data into base64 
// $url_logos = base64_encode($img_logo);
// $url_gariss = base64_encode($img_garis);
// ini untuk mencoba melihat data image jika dijadikan string base64
// echo $url_logos;
// echo "<br><br>";
// echo $url_gariss;

$url_logo = "data:image/png;base64,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";

$url_garis = "data:image/png;base64,R0lGODlhdgIHAHcAMSH+GlNvZnR3YXJlOiBNaWNyb3NvZnQgT2ZmaWNlACH5BAEAAAAALAMAAABvAgYAgAAAAAAAAAJajI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKheApvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7PZ5CY/L5/S6/VMAADs";
?>

<!DOCTYPE html>
<html>

<body>

<style type="text/css">
	@page{margin: 2cm, 2.5cm, 2cm, 2.5cm}
	#font11{font-size: 11pt;}
	#font12{font-size: 12pt;}
	#font14{font-size: 14pt;}
	#tbl{border-collapse: collapse; border: none; padding: 0; margin: 0; border-spacing: 0;}

</style>
	<!-- <img style="position: absolute; margin-top: 10px; margin-left: 10px;" width=69 height=99 src="<?php echo $url_logo; ?>"> -->

	<table style="width: 100%;" id="tbl">
   	<tr id="font14">
   		<td style="text-align: center;">
		<strong>KUASA LAHAN</strong>
   		</td>
   	</tr>
   	</table>
		<br>
	<br>
	<br>

	<table>
		<tr>
			<td>Yang bertanda tangan dibawah ini :</td>
		</tr>
	</table>

	<br>
	<table style="width: 100%" id="tbl">
		<tr>
			<td style="width: 1%">1.</td>
			<td style="width: 10%;">Nama</td>
			<td style="width: 1%;"> : </td>
			<td style="width: 88%;"><?php echo $data_pemberi_kuasa_lahan->nama_penduduk ?></td></tr>
		<tr>
			<td></td>
			<td>Tempat/Tanggal Lahir</td>
			<td> : </td>
			<td><?php echo $data_pemberi_kuasa_lahan->tempat_lahir ?>, <?php echo $data_pemberi_kuasa_lahan->tgl_lahir ?></td>
		</tr><tr>
			<td></td>

			<td>Jenis Kelamin</td>
			<td> : </td>
			<td><?php echo $data_pemberi_kuasa_lahan->jenis_kelamin ?></td>
		</tr><tr>
			<td></td>

			<td>Kewarganegaraan</td>
			<td> : </td>
			<td><?php echo $data_pemberi_kuasa_lahan->kewarganegaraan ?></td>
		</tr><tr>
			<td></td>

			<td>Agama</td>
			<td> : </td>
			<td><?php echo $data_pemberi_kuasa_lahan->agama ?></td>
		</tr><tr>
			<td></td>

			<td>Pekerjaan</td>
			<td> : </td>
			<td><?php echo $data_pemberi_kuasa_lahan->pekerjaan ?></td>
		</tr><tr>
			<td></td>

			<td>Alamat</td>
			<td> : </td>
			<td><?php echo $data_pemberi_kuasa_lahan->fullalamat ?></td>
		</tr>
	</table>

	<br>

	<table id="tbl" style="text-align: center; width: 100%"">
		<tr><td><strong><ul>DISEBUT PIHAK I/PEMBERI KUASA</ul></strong></td></tr>
	</table>

	<br>


	<table style="width: 100%" id="tbl" >
		<tr>
			<td style="width: 1%">2.</td>
			<td style="width: 10%;">Nama</td>
			<td style="width: 1%;"> : </td>
			<td style="width: 88%;"><?php echo $data_penerima_kuasa_lahan->nama_penduduk ?></td></tr>
		<tr>
			<td></td>

			<td>Tempat/Tanggal Lahir</td>
			<td> : </td>
			<td><?php echo $data_penerima_kuasa_lahan->tempat_lahir ?>, <?php echo $data_penerima_kuasa_lahan->tgl_lahir ?></td>
		</tr><tr>
			<td></td>

			<td>Jenis Kelamin</td>
			<td> : </td>
			<td><?php echo $data_penerima_kuasa_lahan->jenis_kelamin ?></td>
		</tr><tr>
			<td></td>

			<td>Kewarganegaraan</td>
			<td> : </td>
			<td><?php echo $data_penerima_kuasa_lahan->kewarganegaraan ?></td>
		</tr><tr>
			<td></td>

			<td>Agama</td>
			<td> : </td>
			<td><?php echo $data_penerima_kuasa_lahan->agama ?></td>
		</tr><tr>
			<td></td>

			<td>Pekerjaan</td>
			<td> : </td>
			<td><?php echo $data_penerima_kuasa_lahan->pekerjaan ?></td>
		</tr><tr>
			<td></td>

			<td>Alamat</td>
			<td> : </td>
			<td><?php echo $data_penerima_kuasa_lahan->fullalamat ?></td>
		</tr>
	</table>

	<br>
	<table id="tbl" style="text-align: center; width: 100%">
		<tr><td><strong><ul>DISEBUT PIHAK II/PENERIMA KUASA</ul></strong></td></tr>
	</table>
	<br>

	<br>
	<table id="tbl">
		<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pihak I (satu) memberikan kuasa kepada Pihak II (dua) untuk <?= $data_penerima_kuasa_lahan->keterangan_kuasa ?>. Atas nama <?= $data_penerima_kuasa_lahan->nama_penduduk ?> yang terletak di <?php echo $data_penerima_kuasa_lahan->fullalamat ?>.</td></tr>
	</table>
	<br>

	<table id="tbl">
		<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian surat kuasa ini kami buat dengan sebenarnya dalam keadaan sehat dan tampa adanya paksaan dari siapapun serta pihak manapun agar dapat dipergunakan sebagaimana mestinya.</td></tr>
	</table>
	<br>

	<table style="width: 100%;">
   	<tr>
   		<td style="width: 50%;"></td>

   		<td style="width: 50%; text-align: center;">
			Bulusari.............
			<br>
			Bulusari, <?= $data_penerima_kuasa_lahan->tanggal ?>
   		</td>
   	</tr>
   </table>
   <br>

   <table style="width: 100%;">
   	<tr>
   		<td style="width: 50%; text-align: center;">
   			PIHAK II/PENERIMA KUASA
   			<br>
			<br>
			<br>
			<br>
			<br>
   			<?php echo $data_penerima_kuasa_lahan->nama_penduduk ?>      
   		</td>

   		<td style="width: 50%; text-align: center;">
			PIHAK I / PEMBERI KUASA
			<br>
			<table style="width: 100%;">
			<tr>
				<td style="width: 10%">1.</td>
				<td><?php echo $data_pemberi_kuasa_lahan->nama_penduduk ?></td>
				<td style="width: 40%">..............</td>\
			</tr>
				<?php
	        	$no = 2;
	        	foreach ($data_kuasa_lahan_pengikut as $value) {
	        	?>
				<tr>
					<td style="width: 10%"><?php echo $no++ ?></td>
					<td style="width: 50%"><?php echo $value->nama_saksi ?></td>
					<td style="width: 40%">..............</td>
				</tr>
    			<?php } ?>

			</table>
   		</td>
   	</tr>
   </table>
   <br>
   <br>
   <br>
   <table id="tbl" style="text-align: center; width: 100%">
   	<tr>
   		<td style="text-align: center;">Mengetahui</td>
   	</tr>
   	<tr>
   		<td style="text-align: center;">Kepala Desa Bulusari
   		<br>
   	</tr>
   	<tr>
   		
   		<td><br><strong>SUGIONO</strong></td>
   	</tr>
   </table>
	<style type="text/css">
		#tablepengikut {table-layout: auto; border: 1px solid black; border-collapse: collapse; text-align: center; border-spacing: 0;}
	</style>

</body>
</html>

