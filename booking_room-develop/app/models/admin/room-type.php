<?php
include '../../../config.php';
function select_room_type_all($sortDescending)
{
    $sql = "SELECT * FROM room_type ORDER BY id " . ($sortDescending ? "DESC" : "ASC");;
    $result = pdo_query($sql);
    return $result;
}
function insert_room_type($name, $price, $bed_type, $isSmoking, $description, $thumb_nail, $status)
{
    $sql = "INSERT INTO room_type(name,price,bed_type,isSmoking,description,thumb_nail, status) VALUES(?,?,
    ?,?,?,?,?)";
    pdo_execute($sql, $name, $price, $bed_type, $isSmoking, $description, $thumb_nail, $status);
}
function delete_room_type($id)
{
    $sql = "DELETE FROM room_type WHERE id = ?";
    pdo_execute($sql, $id);
}
function delete_room_type_images($id)
{
    $sql = "DELETE FROM room_type_images WHERE id = ?";
    pdo_execute($sql, $id);
}
function get_info_room_type($id)
{
    $sql = "SELECT * FROM room_type WHERE id = ?";
    return pdo_query_one($sql, $id);
}
function update_room_type($name, $price, $bed_type, $isSmoking, $description, $thumb_nail, $status, $id)
{
    $sql = "UPDATE room_type SET name = ?,price = ?,bed_type = ?,isSmoking = ?,description =?, thumb_nail = ?, status = ?  WHERE id = ?";
    return pdo_execute($sql, $name, $price, $bed_type, $isSmoking, $description, $thumb_nail, $status, $id);
}
function get_room_id_by_name($name)
{
    $sql = "SELECT * FROM room_type WHERE name = ?";
    return pdo_query_one($sql, $name);
}
function get_room_type_image_id_by_name($name)
{
    $sql = "SELECT * FROM room_type_images WHERE name = ?";
    return pdo_query_one($sql, $name);
}
function getRoomTypeImages()
{
    $conn = pdo_get_connnection();
    $sql = "SELECT * FROM room_type_images";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    return $result;
}
function getRoomTypeWithImages()
{
    $conn = pdo_get_connnection();
    $sql = "SELECT room_type.* FROM room_type_images
            JOIN room_type ON room_type_images.room_type_id = room_type.id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    return $result;
}
function getRoomTypeIdByName($roomTypeName)
{
    $conn = pdo_get_connnection();
    $sql = "SELECT id FROM room_type WHERE name = :roomTypeName";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':roomTypeName', $roomTypeName, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch();

    if ($result === false) {
        return false;
    }

    return $result['id'];
}

function insert_room_type_images($name_img, $path, $room_type_id, $status)
{
    $sql = "INSERT INTO room_type_images(name_img,path,room_type_id,status) VALUES(?,?,?,?)";
    pdo_execute($sql, $name_img, $path, $room_type_id, $status);
}
function update_room_type_images($name_img, $path, $room_type_id, $status, $id)
{
    $sql = "UPDATE room_type_images SET name_img = ?,path = ?,room_type_id = ?, status = ?  WHERE id = ?";
    return pdo_execute($sql, $name_img, $path, $room_type_id, $status, $id);
}
function get_info_room_type_image($id)
{
    $sql = "SELECT * FROM room_type_images WHERE id = ?";
    return pdo_query_one($sql, $id);
}
