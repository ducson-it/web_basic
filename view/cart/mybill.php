<div class="row mb">
    <div class="boxtrai mr">

        <div class="row mb">
            <div class="boxtitle">
                Đơn hàng của bạn
            </div>
            <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th>Mã Đơn hàng</th>
                        <th>Ngày đặt</th>
                        <th>Số lượng mặt hàng</th>
                        <th>Tổng giá trị đơn hàng</th>
                        <th>Tình trạng đơn hàng</th>
                    </tr>
                    <?php
                    if (is_array($listbill)) {
                        foreach ($listbill as $bill) {
                            extract($bill);
                            echo '<pre>';
                            var_dump($bill);
                            echo '</pre>';
                            $ttdh = get_ttdh($bill_status);
                            $countsp =  loadall_cart_count($id);
                            echo '<tr>
                                <td>DAM-'.$id.'</td>
                                <td>'.$ngaydathang.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$total.'</td>
                                <td>'.$ttdh.'</td>
                            </tr>';
                        }
                    }
                    ?>
                </table>
            </div>
        </div>

    </div>

    <div class="boxphai">
        <?php
        include $_SERVER['DOCUMENT_ROOT'] . "/WEB_MAU/view/boxright.php";
        ?>
    </div>
</div>