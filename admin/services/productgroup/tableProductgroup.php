<?php
include('../Connect_Data.php');
error_reporting(0);
$connect = new Connect_Data();
$connect->connectData();
$connect->sql = "SELECT
producttype.protype_name,
productgroup.progroup_id,
productgroup.progroup_name,
productgroup.progroup_image,
productgroup.progroup_status 
FROM productgroup
INNER JOIN producttype ON productgroup.protype_id = producttype.protype_id";
$connect->queryData();
while ($rsconnect = $connect->fetch_AssocData()) {
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

    if ($rsconnect['progroup_status'] == 1) {
        $progroup_status = '<span class="badge bg-label-success">ใช้งาน</span>';
    } else {
        $progroup_status = '<span class="badge bg-label-danger">ไม่ใช้งาน</span>';
    }
    echo '<tr>
    <td class="text-center">' . $progroup_id . '</td>
    <td class="text-center">' . $rsconnect['progroup_name'] . '</td>
    <td class="text-center">' . $rsconnect['protype_name'] . '</td>
    <td class="text-center">' . $progroup_status . '</td>
    <td class="text-center">
        <a  href="data.php?id='.$rsconnect['progroup_id'].'"><button class="border-warning text-warning"><i class="bx bx-edit-alt me-1"></i></button></a>
        <button class="border-danger text-danger"  onclick="updateEmployStatus('.$rsconnect['progroup_id'].')"><i class="bx bx-trash me-1"></i></button>
    </td>
    </tr>';
}
