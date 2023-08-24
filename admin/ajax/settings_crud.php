<?php 

require('../pages/db_config.php');
require('../pages/extra.php');
adminLogin();

if(isset($_POST['get_general'])){
    $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
    $values = [1];
    $res = select($q,$values,"i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}

if(isset($_POST['upd_general'])){
    $frm_data = filteration($_POST);

    $q = "UPDATE `settings` SET `sr_no` = ?, `site_title` = ?, `site_about` = ? WHERE `settings`.`sr_no` = ?";
    $values = [1,$frm_data['site_title'],$frm_data['site_about'],1];
    $res = update($q,$values,'issi');
    echo $res;
}

?>