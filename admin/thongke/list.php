<div class="row">
    <div class="row formtitle mb">
        <h1>Thống kê</h1>
    </div>
    <div class="row formcontent">
        <!-- <form action="index.php?act=listbill" method="post">
            <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
            <input type="submit" name="listok" placeholder="GO">
        </form> -->
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Số lượng</th>
                    <th>Gía cao nhất</th>
                    <th>Gía thấp nhất</th>
                    <th>Gía trung bình</th>
                </tr>
                <?php
                foreach ($listthongke as $tk) {
                    extract($tk);                 
                    echo'
                            <tr>
                                <td>'.$madm.'</td>
                                <td>'.$tendm.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$maxprice.'</td>
                                <td>'.$minprice.'</td>
                                <td>'.$avgprice.'</td>
                            </tr>
                                ';
                }
                ?>


            </table>
        </div>
        <div class="row mb10">
            <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
        </div>
    </div>
</div>