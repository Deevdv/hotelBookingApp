<?php 

require('../pages/db_config.php');
require('../pages/extra.php');
adminLogin();


if(isset($_POST['add_feature'])){
    $frm_data = filteration($_POST);

$q = "INSERT INTO `features`(`name`) VALUES (?)";
$values = [$frm_data['name']];
        $res = insert($q,$values,'s');
        echo $res;
}

if(isset($_POST['get_members'])){
    $res = selectAll('team_details');

    while($row = mysqli_fetch_assoc($res)){

        $path = ABOUT_IMG_PATH;
        echo <<<data
            <div class="col-md-2 mb-3">
            <div class="card text-white bg-dark">
                <img src="$path$row[picture]" class="card-img">
                <div class="card-img-overlay text-end">
                    <button type="button" onclick="rem_member($row[sr_no])" class="btn btn-danger btn-sm shadow-none">
                        <i class="bi bi-trash p-1"></i>Delete
                    </button>
                    </div>
                  <p class="card-text text-center px-3 py-2"><small>$row[name]</small></p>
                </div>
              </div>
        data;
        // var_dump($res);
    }
}

if(isset($_POST['rem_member'])){
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_member']];

    $pre_q = "SELECT * FROM `team_details` WHERE `sr_no`=?";
    $res = select($pre_q,$values,'i');
    $img = mysqli_fetch_assoc($res);

    if(deleteImage($img['picture'], ABOUT_FOLDER)){
        $q = "DELETE FROM `team_details` WHERE `sr_no`=?";
        $res = delete($q,$values,'ss');
        echo $res;

    }
    else{
        echo 0;
    }

}
?>