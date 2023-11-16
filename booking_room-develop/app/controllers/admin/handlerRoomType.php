<?php
include '../../models/admin/room-type.php';

function add()
{
    $errors_addRoomType = array();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_add_room_type'])) {

        if (empty($_POST['name'])) {
            $errors_addRoomType['name'] = "Trường này không để trống";
        } else {
            $name = $_POST['name'];
        }

        if (empty($_POST['price'])) {
            $errors_addRoomType['price'] = "Trường này không để trống";
        } else {
            $price = $_POST['price'];
        }

        if (empty($_POST['bed_type'])) {
            $errors_addRoomType['bed_type'] = "Trường này không để trống";
        } else {
            $bed_type = $_POST['bed_type'];
        }
        if (isset($_POST['isSmoking'])) {
            $isSmoking = $_POST['isSmoking'];
        } else {
            $errors_addRoomType['isSmoking'] = "Trường này không để trống";
        }

        if (empty($_POST['description'])) {
            $errors_addRoomType['description'] = "Trường này không để trống";
        } else {
            $description = $_POST['description'];
        }
        $file_name = '';
        if (isset($_FILES['thumb_nail'])) {
            $target_dir = '../../../../public/assets/uploads/';
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            $file = $_FILES['thumb_nail'];
            $file_name = $file['name'];
            $file_type = ['jpg', 'png', 'gif', 'jpeg'];
            $file_extention = pathinfo($file_name, PATHINFO_EXTENSION);
            if ($file['error'] !== UPLOAD_ERR_OK) {
                $errors_addRoomType['thumb_nail'] = 'Lỗi trong quá trình tải file ';
            } elseif ($file['size'] > 5000000) {
                $errors_addRoomType['thumb_nail'] = 'Kích thước file quá lớn';
            } elseif (!in_array($file_extention, $file_type)) {
                $errors_addRoomType['thumb_nail'] = 'Định dạng file không hợp lệ';
            } else {
                move_uploaded_file($file['tmp_name'], $target_dir . $file_name);
            }
        }
        if (isset($_POST['status'])) {
            $status = $_POST['status'];
        } else {
            $errors_addRoomType['status'] = "Trường này không để trống";
        }
        var_dump($name, $price, $bed_type, $isSmoking, $description, $file_name, $status);
        $result = select_room_type_all(false);
        var_dump($result);
        $_SESSION['errors_addRoomType'] = $errors_addRoomType;
        if (count($errors_addRoomType) === 0) {

            insert_room_type($name, $price, $bed_type, $isSmoking, $description, $file_name, $status);
            echo '<meta http-equiv="refresh" content="0;URL=\'index.php?act=room_type\'" />';
            exit();
        } else {
            echo "Vui lòng kiểm tra lại";
        }
    }
}
function edit()
{
    $errors_editRoomType = array();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_edit_room_type'])) {

        if (empty($_POST['name'])) {
            $errors_editRoomType['name'] = "Trường này không để trống";
        } else {
            $name = $_POST['name'];
        }

        if (empty($_POST['price'])) {
            $errors_editRoomType['price'] = "Trường này không để trống";
        } else {
            $price = $_POST['price'];
        }

        if (empty($_POST['bed_type'])) {
            $errors_editRoomType['bed_type'] = "Trường này không để trống";
        } else {
            $bed_type = $_POST['bed_type'];
        }
        if (isset($_POST['isSmoking'])) {
            $isSmoking = $_POST['isSmoking'];
        } else {
            $errors_editRoomType['isSmoking'] = "Trường này không để trống";
        }

        if (empty($_POST['description'])) {
            $errors_editRoomType['description'] = "Trường này không để trống";
        } else {
            $description = $_POST['description'];
        }
        if (isset($_POST['status'])) {
            $status = $_POST['status'];
        } else {
            $errors_editRoomType['status'] = "Trường này không để trống";
        }
        $id = $_POST['id'];
        $oldImage = $_POST['old_image'];
        $file_name = '';

        if ($_FILES['thumb_nail']['error'] === 4) {
            $file_name = $oldImage; // Gán giá trị của $oldImage cho $file_name
        } else {
            $target_dir = '../../../../public/assets/uploads/';
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            $file = $_FILES['thumb_nail'];
            $file_name = $file['name'];
            $file_type = ['jpg', 'png', 'gif', 'jpeg'];
            $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);

            // Kiểm tra các điều kiện về tệp tin mới được tải lên
            if ($file['error'] !== UPLOAD_ERR_OK) {
                $errors_editCustomer['thumb_nail'] = 'Lỗi trong quá trình tải file';
            } elseif ($file['size'] > 5000000) {
                $errors_editCustomer['thumb_nail'] = 'Kích thước file quá lớn';
            } elseif (!in_array($file_extension, $file_type)) {
                $errors_editCustomer['thumb_nail'] = 'Định dạng file không hợp lệ';
            } else {
                $new_file_path = $target_dir . $file_name;

                // Xóa tệp tin ảnh cũ
                if (!empty($oldImage)) {
                    $old_file_path = $target_dir . $oldImage;
                    if (file_exists($old_file_path)) {
                        unlink($old_file_path);
                    }
                }

                move_uploaded_file($file['tmp_name'], $new_file_path);
            }
        }

        $_SESSION['errors_editRoomType'] = $errors_editRoomType;
        if (count($errors_editRoomType) === 0) {

            update_room_type($name, $price, $bed_type, $isSmoking, $description, $file_name, $status, $id);
            echo '<meta http-equiv="refresh" content="0;URL=\'index.php?act=room_type\'" />';
            exit();
        } else {
            echo "Vui lòng kiểm tra lại";
        }
    }
}
