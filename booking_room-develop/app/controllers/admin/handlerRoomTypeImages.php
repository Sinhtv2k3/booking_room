<?php
include '../../models/admin/room-type.php';

function add()
{
    $errors_addRoomTypeImage = array();
    $isDone = false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_add_room_type_img'])) {
        $file_names = array();


        if (isset($_FILES['path'])) {
            $target_dir = '../../../../public/assets/uploads/';

            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }

            $files = $_FILES['path'];
            $file_count = count($files['name']);
            $file_types = ['jpg', 'png', 'gif', 'jpeg'];
            if (empty($_POST['name_img'])) {
                $errors_addRoomTypeImage['name_img'] = "Trường này không để trống";
            } else {
                $name_img = $_POST['name_img'];
            }

            if (empty($_POST['room_name'])) {
                $errors_addRoomTypeImage['room_name'] = "Trường này không để trống";
            } else {
                $room_name = $_POST['room_name'];
                // Lấy ID tương ứng với giá trị được chọn
                // $room_type = get_room_id_by_name($room_name);
                $room_type_id = getRoomTypeIdByName($room_name);
                var_dump($room_type_id);

                if ($room_name === false) {
                    $errors_addRoomTypeImage['room_name'] = "Giá trị không hợp lệ";
                }
            }
            if (isset($_POST['status'])) {
                $status = $_POST['status'];
            } else {
                $errors_addRoomTypeImage['status'] = "Trường này không để trống";
            }

            for ($i = 0; $i < $file_count; $i++) {
                $file_name = $files['name'][$i];
                $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);

                if ($files['error'][$i] !== UPLOAD_ERR_OK) {
                    $errors_addRoomTypeImage['path'] = 'Lỗi trong quá trình tải file';
                } elseif ($files['size'][$i] > 5000000) {
                    $errors_addRoomTypeImage['path'] = 'Kích thước file quá lớn';
                } elseif (!in_array($file_extension, $file_types)) {
                    $errors_addRoomTypeImage['path'] = 'Định dạng file không hợp lệ';
                } else {
                    move_uploaded_file($files['tmp_name'][$i], $target_dir . $file_name);
                    $file_names[] = $file_name;
                    var_dump($errors_addRoomTypeImage);
                    if (count($errors_addRoomTypeImage) === 0) {
                        $_SESSION['errors_addRoomTypeImage'] = $errors_addRoomTypeImage;
                        insert_room_type_images($name_img, $file_name, $room_type_id, $status);
                        $isDone = true;
                    } else {
                        echo "Vui lòng kiểm tra lại";
                    }
                }
            }
            var_dump($_POST['room_name']);
            var_dump($_POST['name_img']);
            var_dump($_POST['status']);
            var_dump(getRoomTypeIdByName($_POST['room_name']));

            if ($isDone === true) {
                echo '<meta http-equiv="refresh" content="0;URL=\'index.php?act=room_type_img\'" />';
                exit();
            }
        }

        // function insert_multiple_room_type_images($file_names, $room_type_id, $status)
        // {

        //     foreach ($file_names as $file_name) {
        //         insert_room_type_image($file_name, $room_type_id, $status);
        //     }
        // }
        // var_dump($file_names);


        // if (count($errors_addRoomTypeImage) === 0) {
        //     insert_multiple_room_type_images($file_names, $room_type_id, $status);

        //     echo '<meta http-equiv="refresh" content="0;URL=\'index.php?act=room_type_img\'" />';
        //     exit();
        // } else {
        //     echo "Vui lòng kiểm tra lại";
        // }
    }
}

function edit()
{
    $errors_editRoomTypeImage = array();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_edit_room_type_img'])) {


        $oldImage = $_POST['old_image'];
        $file_name = '';

        if ($_FILES['path']['error'] === 4) {
            $file_name = $oldImage; // Gán giá trị của $oldImage cho $file_name
        } else {
            $target_dir = '../../../../public/assets/uploads/';
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            $file = $_FILES['path'];
            $file_name = $file['name'];
            $file_type = ['jpg', 'png', 'gif', 'jpeg'];
            $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);

            // Kiểm tra các điều kiện về tệp tin mới được tải lên
            if ($file['error'] !== UPLOAD_ERR_OK) {
                $errors_editRoomTypeImage['path'] = 'Lỗi trong quá trình tải file';
            } elseif ($file['size'] > 5000000) {
                $errors_editRoomTypeImage['path'] = 'Kích thước file quá lớn';
            } elseif (!in_array($file_extension, $file_type)) {
                $errors_editRoomTypeImage['path'] = 'Định dạng file không hợp lệ';
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
        if (isset($_POST['name_img'])) {
            $name_img = $_POST['name_img'];
        } else {
            $errors_editRoomTypeImage['name_img'] = "Trường này không để trống";
        }
        // if (empty($_POST['new_room_type'])) {
        //     $errors_editRoomTypeImage['new_room_type'] = "Trường này không để trống";
        // } else {
        //     $room_name = $_POST['new_room_type'];
        //     // Lấy ID tương ứng với giá trị được chọn
        //     // $room_type = get_room_id_by_name($room_name);
        //     $room_type_id = getRoomTypeIdByName($_POST['new_room_type']);
        //     var_dump($room_type_id);
        //     // $room_type_id = $room_type['id'];

        //     if ($room_type_id === false) {
        //         $errors_editRoomTypeImage['room_name'] = "Giá trị không hợp lệ";
        //     }
        // }

        if (isset($_POST['roomTypeId'])) {
            $selectedRoomTypeId = $_POST['roomTypeId'];
        }
        $room_type_id = (($_POST['new_room_type']) !== '0') ? getRoomTypeIdByName($_POST['new_room_type']) : $selectedRoomTypeId;

        if (isset($_POST['status'])) {
            $status = $_POST['status'];
        } else {
            $errors_editRoomTypeImage['status'] = "Trường này không để trống";
        }
        $id = $_POST['id'];
        $_SESSION['errors_editRoomTypeImage'] = $errors_editRoomTypeImage;
        $old_room_type_id = $room_type_id;
        if (count($errors_editRoomTypeImage) === 0) {

            update_room_type_images($name_img, $file_name, $room_type_id, $status, $id);

            echo '<meta http-equiv="refresh" content="0;URL=\'index.php?act=room_type_img\'" />';
            exit();
        } else {
            echo "Vui lòng kiểm tra lại";
        }
    }
}
