<?php
require_once('db.php');
?>

<table>
		<form method="GET" action="prosesedit.php">
		<tr>
			<td> Nama </td>
			<td> : </td>
			<td> <input type="text" name="nama" placeholder="<?php echo $row["nama"];?>"></td>
		</tr>

		<tr>
			<td> NIM </td>
			<td> : </td>
			<td> <input type="text" name="nim" placeholder="<?php echo $row["nim"];?>"></td>
		</tr>

		<tr>
			<td> Kelas </td>
			<td> : </td>
			<td> <input type="date" name="tgl_lahir" placeholder="<?php echo $row["kelas"];?>"></td>
		</tr>

		<tr>
			<td> Jenis Kelamin </td>
			<td> : </td>
			<td> <input type="date" name="tgl_lahir" placeholder="<?php echo $row["jenis_kelamin"];?>"> </td>
		</tr>

		<tr>
			<td> Hobi </td>
			<td> : </td>
			<td> <input type="date" name="tgl_lahir" placeholder="<?php echo $row["hobi"];?>"> </td>
		</tr>

		<tr>
			<td> Fakultas </td>
			<td> : </td>
			<td> <input type="date" name="tgl_lahir" placeholder="<?php echo $row["fakultas"];?>"> </td>
		</tr>

		<tr>
			<td> Alamat </td>
			<td> : </td>
			<td> <input type="date" name="tgl_lahir" placeholder="<?php echo $row["alamat"];?>"> </td>
		</tr>

		<tr>
			<td> </td>
			<td> </td>
			<td> <input type="submit" name="simpan" value="Simpan"></td>
		</tr>
		</form>
	</table>