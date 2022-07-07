<div class="row">
    <div class="row formtitle mb">
        <h1>Danh sách tài khoản</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=listbill" method="post">
            <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
            <input type="submit" name="listok" placeholder="GO">
        </form>
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã đơn hàng</th>
                    <th>Khách hàng</th>
                    <th>Số lượng hàng</th>
                    <th>Gía trị đơn hàng</th>
                    <th>Tình trạng  đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Thao tác</th>
                </tr>
                <?php
                foreach ($listbill as $bill) {
                    extract($bill);
                    $kh = $bill_name
                    .'
                    <br>'.$bill_email.'</br>
                    <br>'.$bill_address.'</br>
                    <br>'.$bill_tel.'</br>
                    ';
                    
                    $ttdh = get_ttdh($bill_status);
                    $countsp = loadall_cart_count($id);
                    
                    echo '
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>DAM-' . $id . '</td>
                                <td>' . $kh . '</td>
                                <td>' . $countsp . '</td>
                                <td><strong>' . $total . '</strong>VNĐ</td>
                                <td>'.$ttdh.'</td>
                                <td>'.$ngaydathang.'</td>
                                <td><a href=#"><input type="button" value="xóa"></a> <a href="#"><input type="button" value="sửa"></a> </td>
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