<?php include "/var/www/html/db/dbcon.php";

if(!$_POST['i_id']||!$_POST['i_pass']||!$_POST['i_name']||!$_POST['i_nick']||!$_POST['i_phone']||!$_POST['i_mail']){
  echo("<script>window.alert('Enter all informations');
  history.go(-1);</script>");exit;}

if($_POST['i_pass']!=$_POST['i_pass_confirm']){
  echo("<script>window.alert('Password does not match');
  history.go(-1);</script>");exit;}

$sql_query = "select id from tb_members where id='".$_POST['i_id']."'";
$sql_result = mysql_query($sql_query, $connect_db);
$exist_id = mysql_num_rows($sql_result);

if($exist_id){
  echo("<script>window.alert('ID alredy exists');
  history.go(-1);</script>");exit;
  mysql_close();}

else{
  $day = date("Y-m-d (H:i)");

  $sql_query = "insert into tb_members(id, pass, name, nick, phone, mail, regist_day) values ('".$_POST['i_id']."','".$_POST['i_pass']."','".$_POST['i_name']."','".$_POST['i_nick']."','".$_POST['i_phone']."','".$_POST['i_mail']."','$day')";

  mysql_query($sql_query, $connect_db);}

mysql_close();

echo"<script>window.alert('registered. Please login.');
location.href='/member/login.php';</script>";

?>
