
<?php



$db = mysqli_connect("localhost", "root", "", "lvcuong");
mysqli_query($db,"SET NAMES 'UTF8'");

if(!$db)
{
    echo "Connect Failed!". mysqli_connect_error($db);
}
?>
