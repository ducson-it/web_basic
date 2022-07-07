<?php

function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm)
{
    $sql = "INSERT INTO sanpham (name,price,img,mota,iddm ) VALUES ('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham where id=" . $_GET['id'];
    pdo_execute($sql);
}

function loadall_sanpham($kyw, $iddm)
{
    $sql = "SELECT * FROM sanpham  where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }

    if ($iddm > 0) {
        $sql .= " and iddm='" . $iddm . "'";
    }
    $sql .= " ORDER BY name DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_home()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id DESC limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_top10()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY luotxem DESC limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($id)
{
    $sql = "SELECT * FROM sanpham WHERE id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function load_sanpham_cungloai($id, $iddm)
{
    $sql = "SELECT * FROM sanpham WHERE iddm = '$iddm' AND id <>" . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "SELECT * FROM danhmuc WHERE id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $tendanhmuc;
    } else {
        return "";
    }
}

function update_sanpham($id, $tensp, $giasp, $hinh, $mota, $iddm)
{
    if ($hinh != "") {
        $sql = " UPDATE sanpham SET name = '$tensp', price = '$giasp', img = '$hinh', mota = '$mota', iddm = '$iddm' WHERE id = '$id' ";
    } else {
        $sql = " UPDATE sanpham SET name = '$tensp', price = '$giasp', mota = '$mota', iddm = '$iddm' WHERE id = '$id' ";
    }
    pdo_execute($sql);
}
