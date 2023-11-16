<?php
include '../../models/admin/promotion.php';

function add()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_promotion'])) {
        $errors_promotion = [];

        // Kiểm tra và lấy giá trị trường name
        if (empty($_POST['name'])) {
            $errors_promotion['name'] = "Vui lòng nhập tên";
        } else {
            $name = $_POST['name'];
        }

        // Kiểm tra và lấy giá trị trường start_date  
        if (empty($_POST['start_date'])) {
            $errors_promotion['start_date'] = "Vui lòng chọn ngày bắt đầu";
        } else {
            $start_date = $_POST['start_date'];
        }

        // Kiểm tra và lấy giá trị trường end_date
        if (empty($_POST['end_date'])) {
            $errors_promotion['end_date'] = "Vui lòng chọn ngày kết thúc";
        } else {
            $end_date = $_POST['end_date'];
        }

        // Kiểm tra và lấy giá trị trường discount
        if (empty($_POST['discount'])) {
            $errors_promotion['discount'] = "Vui lòng nhập giá trị chiết khấu";
        } else {
            $discount = $_POST['discount'];
        }

        // Kiểm tra và lấy giá trị trường description
        if (empty($_POST['description'])) {
            $errors_promotion['description'] = "Vui lòng nhập mô tả";
        } else {
            $description = $_POST['description'];
        }
        if (isset($_POST['status'])) {
            $status = $_POST['status'];
        } else {
            $errors_promotion['status'] = "Trường này không để trống";
        }
        var_dump($name);
        var_dump($start_date);
        var_dump($end_date);
        var_dump($discount);
        var_dump($description);

        $_SESSION['errors_promotion'] = $errors_promotion;
        var_dump($errors_promotion);
        if (count($errors_promotion) === 0) {

            insert_promotion($name, $description, $start_date, $end_date, $discount, $status);
            echo '<meta http-equiv="refresh" content="0;URL=\'index.php?act=promotion\'" />';
            exit();
        } else {
            echo "Vui lòng kiểm tra lại";
        }
    }
}
