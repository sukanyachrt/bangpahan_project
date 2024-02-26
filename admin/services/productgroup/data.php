<?php
header('Content-Type: application/json');
include('../connect_data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$data = isset($_GET['v']) ? $_GET['v'] : '';
$result = array();

if ($data == "updateProductgroupStatus") {
    $connect->sql = "UPDATE productgroup SET progroup_status = '0' 
     WHERE progroup_id ='" . $_GET['id'] . "'";
    $connect->queryData();
    echo json_encode(["result" => $connect->affected_rows()]);
} else if ($data == "maxIdProduct") {
    $connect->sql = "SELECT	MAX( progroup_id ) AS maxid FROM	product";
    $connect->queryData();

    $rsconnect = $connect->fetch_AssocData();
    $maxid = $rsconnect['maxid'] + 1;
    if ($maxid <= 9) {
        $progroup_id = "0000" . $maxid;
    } else if ($maxid >= 10 && $maxid <= 99) {
        $progroup_id = "000" . $maxid;
    } else if ($maxid >= 100 && $maxid <= 999) {
        $progroup_id = "00" . $maxid;
    } else if ($maxid >= 1000 && $maxid <= 9999) {
        $progroup_id = "0" . $maxid;
    } else {
        $progroup_id = $maxid;
    }
    $result = ["maxid" => $progroup_id];
    echo json_encode($result);
} else if ($data == "dataprogroup_id") {
    $connect->sql = "SELECT
	producttype.protype_name, 
	productgroup.progroup_id, 
	productgroup.progroup_name, 
	productgroup.progroup_image, 
	productgroup.progroup_status, 
	productgroup.protype_id
FROM
	productgroup
	INNER JOIN
	producttype
	ON 
		productgroup.protype_id = producttype.protype_id
    WHERE progroup_id='" . $_GET['id'] . "'";
    $connect->queryData();
    $row = $connect->num_rows();
    if ($row > 0) {

        $rsconnect = $connect->fetch_AssocData();
        if ($rsconnect['progroup_id'] <= 9) {
            $progroup_id = "0000" . $rsconnect['progroup_id'];
        } else if ($rsconnect['progroup_id'] >= 10 && $rsconnect['progroup_id'] <= 99) {
            $progroup_id = "000" . $rsconnect['progroup_id'];
        } else if ($rsconnect['progroup_id'] >= 100 && $rsconnect['progroup_id'] <= 999) {
            $progroup_id = "00" . $rsconnect['progroup_id'];
        } else if ($rsconnect['progroup_id'] >= 1000 && $rsconnect['progroup_id'] <= 9999) {
            $progroup_id = "0" . $rsconnect['progroup_id'];
        } else {
            $progroup_id = $rsconnect['progroup_id'];
        }
        $rsconnect['progroup_id'] = $progroup_id;
        $rsconnect['progroup_imageLocation'] =  "../../../assets/img/menu/" . $rsconnect['progroup_image'];
        array_push($result, ["status" => "ok", "data" => $rsconnect]);
    } else {
        array_push($result, ["status" => "no"]);
    }

    echo json_encode($result[0]);
} else if ($data == "updateProductgroup") {


    #update
    $progroup_image = '';
    if ($_FILES["progroup_image"]["error"] > 0) {
        $progroup_image = "";
    } else {
        $progroup_image = $_FILES['progroup_image']['name'];
        $location = "../../../assets/img/menu/" . $progroup_image;
        $uploadOk = 1;

        if ($uploadOk == 0) {
        } else {
            /* Upload file */
            if (move_uploaded_file($_FILES['progroup_image']['tmp_name'], $location)) {
            } else {
            }
        }
    }
    $post = $_POST;
    if ($post['progroup_imageHidden'] != "") {
        $progroup_image = $post['progroup_imageHidden'];
    }
    $connect->sql = "UPDATE `productgroup` SET 
    `protype_id`='" . $post['protype_id'] . "',
    `progroup_name`='" . $post['progroup_name'] . "',
    `progroup_image`='" . $progroup_image . "',
    `progroup_status`='" . $post['progroup_status'] . "'
    WHERE progroup_id='" . $_GET['id'] . "'";
    $connect->queryData();
    echo json_encode(["result" => $connect->affected_rows()]);
} else if ($data == "inserteproductgroup") {
    $post = $_POST;
    $progroup_image = "";
    if ($_FILES["progroup_image"]["error"] > 0) {
        $progroup_image = "";
    } else {
        $progroup_image = $_FILES['progroup_image']['name'];
        $location = "../../../assets/img/menu/" . $progroup_image;
        $uploadOk = 1;

        if ($uploadOk == 0) {
        } else {
            /* Upload file */
            if (move_uploaded_file($_FILES['progroup_image']['tmp_name'], $location)) {
            } else {
            }
        }
    }
    $connect->sql = "INSERT INTO `productgroup` VALUES 
    (null,
    '" . $post['protype_id'] . "',
    '" . $post['progroup_name'] . "',
    '" . $post['progroup_status'] . "',
    '" . $progroup_image . "')";
    $connect->queryData();


    echo json_encode(["result" => $connect->affected_rows()]);
}
