<html>
<head>
	<title>Dropdown</title>
</head>
 
<p>
<form>
pilih kecamatan : 
<select name="kec">
	<option>ambarawa</option>
<option>pagelaran</option>	
<option>pringsewu</option>
<option>gadingrejo</option>
<option>talangpadang</option>
<option>pugung</option>


<form>
pilih kabupaten : 
<select name="kab">
	<option>tanggamus</option>
<option>pesawaran</option>	
<option>pringsewu</option>
<option>mesuji</option>
<option>tulang bawang</option>
<option>metro</option>


	<?php
	mysql_connect("localhost", "root", "");
	mysql_select_db("akademik");
	$sql = mysql_query("SELECT * FROM akademik ORDER BY kecamaan ASC");
	if(mysql_num_rows($sql) != 0){
		while($row = mysql_fetch_assoc($sql)){
			echo "<option>".$row["kecamatan"]."</option>";
		}
	}
	?>
</select>
<input type="submit" name="submit" value="OK" />
</form>
</form>
</p>
 
</html>