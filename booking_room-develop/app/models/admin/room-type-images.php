<?php
include '../../../config.php';


function select_room_type_images_all($sortDescending)
{
    $sql = "SELECT * FROM room_type_images ORDER BY id " . ($sortDescending ? "DESC" : "ASC");;
    $result = pdo_query($sql);
    return $result;
}
function insert_room_type_images($path, $room_type_id, $status)
{
    $sql = "INSERT INTO room_type_images(path,room_type_id,status) VALUES(?,?,?)";
    pdo_execute($sql, $path, $room_type_id, $status);
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
function getRoomTypeWithImagesByName($name)
{
    $conn = pdo_get_connnection();
    $sql = "SELECT room_type.* FROM room_type_images
            JOIN room_type ON room_type_images.room_type_id = room_type.id
            WHERE room_type.name = :name";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll();

    return $result;
}
