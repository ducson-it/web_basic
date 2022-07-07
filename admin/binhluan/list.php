<div class="row">
    <div class="row formtitle mb">
        <h1>Danh sách tài khoản</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Nội dung bình luận</th>
                    <th>User</th>
                    <th>Product</th>
                    <th>Ngày bình luận</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $suabl = "index.php?act=suabl&id=" . $id;
                    $xoabl = "index.php?act=xoabl&id=" . $id;
                    
                    echo '
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>' . $id . '</td>
                                <td>' . $noidung . '</td>
                                <td>' . $iduser . '</td>
                                <td>' . $idpro . '</td>
                                <td>' . $ngaybinhluan . '</td>
                                <td><a href="' . $xoabl . '"><input type="button" value="xóa"></a> <a href="' . $suabl . '"><input type="button" value="sửa"></a> </td>
                            </tr>
                                ';
                }
                ?>


            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp"> <input type="button" value="Thêm sản phẩm"></a>
        </div>
        <?=
        isset($thongbao) ? $thongbao : '';
        ?>
    </div>
</div>