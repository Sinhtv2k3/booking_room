<?php
include 'layout/header.php';
include 'layout/sidebar.php';
// include 'layout/nav.php';
if (isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'phong':
            include 'pages/room/phong.php';
            break;
        case 'qlks';
            include 'pages/hotel/qlks.php';
            break;
        case 'lphong';
            include 'pages/room/room_type/lphong.php';
            break;
        case 'qlnv';
            include 'pages/nhan_vien/qlnv.php';
            break;
        case 'qldphong';
            include 'pages/booking/qldphong.php';
            break;
        case 'qlkh';
            include 'pages/user/qlkh.php';
            break;
    }
} else {
    include 'layout/nav.php';
}
include 'layout/footer.php';
?>