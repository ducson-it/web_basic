<?php
if (is_array($sanpham)) {
    extract($sanpham);
}

$hinhpath = "../uploads/" . $img;

if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' width='200' >";
} else {
    $hinh = "no photo";
}
?>
<div class="row">
    <div class="row formtitle">
        <h1>Cập nhật loại hàng</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">

            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" value="<?= $name ?>">
            </div>
            <div class="row mb10">
                Gía <br>
                <input type="text" name="giasp" value="<?= $price ?>">
            </div>
            <div class="row mb10">
                Hình ảnh <br>
                <input type="file" name="hinh">
                <?= $hinh ?>
            </div>
            <div class="row mb10">
                Mô tả <br>
                <textarea cols="30" rows="10" name="mota"><?= $mota ?></textarea>
            </div>
           <div class="row mb10">
               Danh mục <br>
           <select name="iddm">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    if ($iddm==$id) {
                        echo '<option value="' . $id . '" selected>' . $tendanhmuc . '</option>';
                    } else {
                        echo '<option value="' . $id . '">' . $tendanhmuc . '</option>';
                    }
                }
                ?>
            </select>
           </div>
            <div class="row">
                <input type="hidden" name="id" value="<?= $sanpham['id'] ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"> <input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao)) {
                echo $thongbao;
            }
            ?>
        </form>
    </div>
</div>