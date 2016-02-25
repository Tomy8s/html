<?php
$fna = $_POST['fname'];
$sna = $_POST['sname'];
$pen = $_POST['penis'] == 'yes';
$nna = $_POST['nname'];
$una = $_POST['uname'];
$pas = $_POST['pword'];
$ema = $_POST['email'];
$dob = $_POST['dob'];
$loc = $_POST['loc'];
$tim = intval($_POST['tz']);

print_r($_POST);

mysqli_connect();
mysql_query('INSERT INTO `site`.`user_info`(`First_name`) VALUES (`$fna`);');
mysql_query('INSERT INTO `site`.`user_info`(`Surname`) VALUES (`$sna`);');
mysql_query('INSERT INTO `site`.`user_info`(`Penis`) VALUES (`$pen`);');
mysql_query('INSERT INTO `site`.`user_info`(`Nickname`) VALUES (`$nna`);');
mysql_query('INSERT INTO `site`.`user_info`(`Username`) VALUES (`$una`);');
mysql_query('INSERT INTO `site`.`user_info`(`Pword`) VALUES (`$pas`);');
mysql_query('INSERT INTO `site`.`user_info`(`Email`) VALUES (`$ema`);');
mysql_query('INSERT INTO `site`.`user_info`(`Date_of_birth`) VALUES (`$dob`);');
mysql_query('INSERT INTO `site`.`user_info`(`Location`) VALUES (`$loc`);');
mysql_query('INSERT INTO `site`.`user_info`(`Time_zone`) VALUES (`$tim`);');
?>