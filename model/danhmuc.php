<?php

function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO danhmuc (tendanhmuc) VALUES ('$tenloai')";
    pdo_execute($sql);
}

function delete_danhmuc($id)
{
    $sql = "DELETE FROM danhmuc where id=" . $_GET['id'];
    pdo_execute($sql);
}

function loadall_danhmuc()
{
    $sql = "SELECT * FROM danhmuc ORDER BY tendanhmuc DESC";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadone_danhmuc($id)
{
    $sql = "SELECT * FROM danhmuc WHERE id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id, $tenloai) 
{
    $sql = "UPDATE danhmuc SET tendanhmuc = '$tenloai' WHERE id='$id'";
    pdo_execute($sql);
}
