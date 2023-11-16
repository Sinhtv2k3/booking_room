<?php
include '../../../config.php';

function select_all_promotion()
{
}
function insert_promotion($ten, $mo_ta, $ngay_bat_dau, $ngay_ket_thuc, $giam_gia, $status)
{
    $sql = "INSERT INTO tb_khuyen_mai(ten,mo_ta,ngay_bat_dau,ngay_ket_thuc,giam_gia,status) VALUES(?,?,?,?,?,?)";
    pdo_execute($sql, $ten, $mo_ta, $ngay_bat_dau, $ngay_ket_thuc, $giam_gia, $status);
}
function update_promotion($ten, $mo_ta, $ngay_bat_dau, $ngay_ket_thuc, $giam_gia, $status, $id)
{
    $sql = "UPDATE tb_khuyen_mai SET ten = ?,mo_ta = ?,ngay_bat_dau = ?,ngay_ket_thuc = ?,giam_gia =?, status = ?  WHERE id = ?";
    return pdo_execute($sql, $ten, $mo_ta, $ngay_bat_dau, $ngay_ket_thuc, $giam_gia, $status, $id);
}
function get_info_promotion($id)
{
    $sql = "SELECT * FROM tb_khuyen_mai WHERE id = ?";
    return pdo_query_one($sql, $id);
}

function delete_promotion($id)
{
    $sql = "DELETE FROM tb_khuyen_mai WHERE id = ?";
    pdo_execute($sql, $id);
}
function get_room_id_by_name($ten)
{
    $sql = "SELECT * FROM tb_khuyen_mai WHERE ten = ?";
    return pdo_query_one($sql, $ten);
}
