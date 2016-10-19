<div> Test Get Servers from db.</div>
	<?php
	mysql_connect("127.0.0.1", "user", "passwd") or die (mysql_error ());
	mysql_select_db("gpanel") or die(mysql_error());
	$strSQL = "SELECT * FROM raw_server";
	$rs = mysql_query($strSQL);
	while($row = mysql_fetch_array($rs)) 
    {
    ?>

	   
	  <div>NAME : <b><?php echo $row['name'];?></b> SLOTS : <b><?php echo $row['slots'];?></b> GAME : <b><?php echo $row['game'];?></b></div>

    <?php
    }
	mysql_close();
	?>