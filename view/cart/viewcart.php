<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">Giỏ hàng</div>
            <div class="row boxcontent cart">
                <table>
                    <?php
                        viewcart(1);
                    ?>
                    <!-- <tr>
                    <td><img src="" height="80px"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><input type="button" value="Xóa"></td>
                </tr> -->
                </table>
                <?php
                        echo 
                        '<a href="index.php?act=delcart"><input type="button" value="Xóa tất cả"></a>
                        <a href="index.php?act=bill"><input type="button" value="Đồng ý đặt hàng"></a>';
                        ;
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include $_SERVER['DOCUMENT_ROOT']."/WEB_MAU/view/boxright.php";
        ?>
    </div>
</div>