<?php
/**
 * Created by PhpStorm.
 * User: David Ortiz
 * Date: 1/4/2019
 * Time: 8:14 AM
 */



	$enlace = mysqli_connect("127.0.0.1", "root", "", "megacenter");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//mysqli_close($enlace);

 ?>