<?php
mysql_connect("localhost","root","");
mysql_select_db("test");

$image = addslashes(file_get_contents($_FILES['logo']['tmp_name']));
mysql_query("insert into table1 values('','$image')");

if(isset($_POST["logo"]))
{


}