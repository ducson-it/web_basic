<?php
    if (is_array($dm)) {
        extract($dm);
    }
?>
<div class="row">
            <div class="row formtitle">
                <h1>Cập nhật loại hàng</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        Mã loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại <br>
                        <input type="text" name="tenloai" value="<?= (isset($tendanhmuc) && $tendanhmuc != '') ? $tendanhmuc : ''?>">
                    </div>
                    <div class="row">
                        <input type="hidden" name="id" value="<?= (isset($id) && $id > 0) ? $id : ''?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listdm"> <input type="button" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>