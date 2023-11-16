<?php
include '../../controllers/admin/handlerRoomType.php';
if (isset($_GET['id']) && $_GET['id'] !== "") {
     $id = $_GET['id'];
     delete_room_type($id);
     echo '<meta http-equiv="refresh" content="0;URL=\'index.php?act=room_type\'" />';
} else {
     echo '<meta http-equiv="refresh" content="0;URL=\'index.php?act=room_type\'" />';
}
