<!DOCTYPE html>
<html>
<head>
	<title>halaman admin</title>
</head>
<body>
	<h2>Halaman Admin</h2>
	
	<br/>

	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

	<br/>
	<br/>
	
	
<div style="border:0; padding:10px; width:760px; height:auto;">
<form method="POST" name="frmpost" action="input.php">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font color="blue" size="5">Pendaftaran Vaksinasi Covid19</font></td>
        </tr> 
        <tr height="46">
            <td> </td>
            <td>nik</td>
            <td><input type="number" name="nik" size="35" maxlength="25" /></td>
        </tr>
		
        <tr height="46">
            <td> </td>
            <td>nama</td>
            <td><input type="text" name="nama" size="35" maxlength="50" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>tgl_lahir</td>
            <td><input type="text" name="tgl_lahir" size="35" maxlength="30" /></td>
        </tr>
        
        
		<tr height=46">
		<td> </td>
            <td>jenis_kelamin</td>
         <td>   <input type="radio" name="jenis_kelamin" value="laki-laki"><label for="laki">laki-laki</label>
			<input type="radio" name="jenis_kelamin" value="perempuan"><label for="perempuan">perempuan</label>
		</td>
		</tr>
        <tr height="46">
            <td> </td>
            <td>Alamat</td>
            <td><input type="text" name="alamat" size="35" maxlength="100" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>No.Telp</td>
            <td><input type="number" name="telepon" size="35" maxlength="15" /></td>
        </tr>
		 <tr height="46">
            <td> </td>
            <td>provinsi</td>
            <td><select name="provinsi">
                    <option value="-">- provinsi -
                    <option value="lampung">lampung
                    <option value="riau">riau
                    <option value="jambi">jambi
                    <option value="bengkulu">bengkulu
                </select></td>
        </tr>
		
		
<font size="5px"> 
<?php
echo "tanggal ";
echo date('d-F-Y');
echo "<br>jam ";
echo date('h:i:s A');
?>
</FONT>
		 <tr height="46">
            <td> </td>
            <td>kab/kota</td>
            <td><select name="kab/kota">
                    <option value="-">- kab/kota -
                    <option value="bandar lampung">bandar lampung
                    <option value="pringsewu">pringsewu
                    <option value="bengkalis">bengkalis
                    <option value="pelalawan">pelalawan
					<option value="bungo">bungo
                    <option value="kerinci">kerinci
                    <option value="kaur">kaur
                    <option value="lebong">lebong
                </select></td>
        </tr>
		
		<tr height="46">
            <td> </td>
            <td>kecamatan</td>
            <td><select name="kecamatan">
                    <option value="-">- kecamatan -
                    <option value="kedaton">kedaton
                    <option value="kemiling">kemiling
                    <option value="pagelaran">pagelaran
                    <option value="ambarawa">ambarawa
					<option value="damai">damai
                    <option value="pedekik">pedekik
                    <option value="bunut">bunut
                    <option value="kuala kampar">kuala kampar
					<option value="jujuhan">jujuhan
                    <option value="pelepat">pelepat
                    <option value="siulak">siulak
                    <option value="kayu aro">kayu aro
					<option value="pasar baru">pasar baru
                    <option value="pasar lama">pasar lama
                    <option value="selupu rejang">selupu rejang
                    <option value="curup">curup
                </select></td>
        </tr>
		
		<tr height="46">
            <td> </td>
            <td>faskes</td>
            <td><select name="faskes">
                    <option value="-">- faskes -
                    <option value="faskes I">faskes I
                    <option value="faskes II">faskes II
                    <option value="FKRTL">FKRTL
                </select></td>
        </tr>
		
		<tr height="46">
            <td> </td>
            <td>nama faskes</td>
            <td><select name="nama faskes">
                    <option value="-">- nama faskes -
                    <option value="klinik">klinik
                    <option value="puskesmas">puskesmas
                    <option value="RSUD">RSUD
                </select></td>
        </tr
		
        <tr height="46">
            <td> </td>
            <td> </td>
            <td><input type="submit" name="Submit" value="Submit">   
                <input type="reset" name="reset" value="Cancel"></td>
        </tr>
    </table>
</form>
</div>
	
	<a href="logout.php">LOGOUT</a>


</body>




</html>