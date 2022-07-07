<div class="row mb">
    <div class="boxtrai mr">
        <div class="row">
            <?php
            extract($onesp);
            ?>
            <div class="boxtitle">Sản phẩm chi tiết</div>
            <div class="row boxcontent">
                <?php
                $img = $img_path . $img;
                echo '<div class="row mb" style="text-align: center;">
                    <img src="' . $img . ' "  style="width : 50%">
                    </div>';
                echo $mota;
                echo '
                <form style="text-align:center;" action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $name . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="price" value="' . $price . '">
                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                </form>';
                ?>
            </div>
        </div>
        <div class="row">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
                    $(document).ready(function() {
                            $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?= $id ?> });
                    });
                </script>
            <div class="row" id="binhluan">
                
            </div>
        </div>
        <div class="row">
            <div class="boxtitle">Sản phẩm cùng loại</div>
            <div class="row boxcontent">
                <?php
                foreach ($sp_cung_loais as $sp_cung_loai) {
                    extract($sp_cung_loai);
                    $linksp = "index.php?act=sanphamct&idsp=". $id;
                    echo '
                            <li><a href="' . $linksp . '">' . $name . '</a></li>
                        ';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "boxright.php";
        ?>
    </div>
</div>