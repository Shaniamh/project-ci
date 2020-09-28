<html>
<head>
	<meta charset="UTF-8">
	<title>Hasil</title>
</head>
<body>
	<?php echo form_open('mahasiswa/search') ?>
		<input type="text" name="keyword" placeholder="search">
		<input type="submit" name="search_submit" value="Cari">
	<?php echo form_close() ?>
 
	<table>
 
			<?php foreach($mahasiswa as $mhs) { ?>
				<tr>
					<td><?php echo $mhs->nama ?></td>
				</tr>
			<?php } ?>
 
 
	</table>
</body>
</html>