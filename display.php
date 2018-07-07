<?php
mysql_connect("localhost","root","");
mysql_select_db("rrhh");

$res=mysql_query("select * from documentacionemp");
echo "<table>";
echo "<tr>";

while($row=mysql_fetch_array($res))
{
    echo "<td>";
    echo '<img src="data:image/jpg;base64,'.base64_encode($row['Imagen'] ).'" height="200" width="200"/>';
    echo "<br>";
    ?>
    <?php
    echo "</td>";



}
echo "</tr>";

echo "</table>";


if(isset($_POST["display"]))
{



}