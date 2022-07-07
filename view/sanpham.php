<div class="row mb">
    <div class="boxtrai mr">
        <div class="row">

            <div class="boxtitle"><b> Sản phẩm <?= $tendm  ?></b> </div>
            <div class="row boxcontent">
                <?php
                $i = 0;
                foreach ($dssp as $sp) {
                    extract($sp);
                    $hinh = $img_path . $img;
                    if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                        $mr = '';
                    } else {
                        $mr = 'mr';
                    }
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;

                    echo '
                             <div class="boxsp ' . $mr . '">
                             <div class="img"> <img src="' . $hinh . '" alt=""> </div>
                             <p>$' . $price . '</p>
                             <a href="' . $linksp . '">' . $name . '</a>
                             </div>
                             ';
                    $i += 1;
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