<?php
include '../../controllers/admin/handlerRoomTypeImages.php';
if (isset($_GET['id']) && $_GET['id'] !== "") {
     $id = $_GET['id'];
     delete_room_type_images($id);
     echo '<meta http-equiv="refresh" content="0;URL=\'index.php?act=room_type_img\'" />';
} else {
     echo '<meta http-equiv="refresh" content="0;URL=\'index.php?act=room_type_img\'" />';
}
