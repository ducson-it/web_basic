<div class="row mb">
    <div class="boxtrai mr">
        <div class="row">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <img src="./img/download.jpg" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="./img/download.jpg" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="./img/background-banner-xanh-tim-than-va-vang-dep.jpg" style="width:100%">
                    </div>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
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
                    <form style="text-align:center;" action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="' . $id . '">
                        <input type="hidden" name="name" value="' . $name . '">
                        <input type="hidden" name="img" value="' . $img . '">
                        <input type="hidden" name="price" value="' . $price . '">
                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                    </form>
                    </div>
                    ';
                $i += 1;
            }
            ?>
            <!-- <div class="boxsp mr">
                <div class="img"> <img src="img/q18den_1623672139.jpg.jpg" alt=""> </div>
                <p>$10</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsp mr">
                <div class="img"> <img src="img/q18den_1623672139.jpg.jpg" alt=""> </div>

                <p>$10</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsp">
                <div class="img"> <img src="img/q18den_1623672139.jpg.jpg" alt=""> </div>

                <p>$10</p>
                <a href="#">Đồng hồ</a>
            </div>
        </div>
        <div class="row">
            <div class="boxsp mr">
                <div class="img"> <img src="img/q18den_1623672139.jpg.jpg" alt=""> </div>
                <p>$10</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsp mr">
                <div class="img"> <img src="img/q18den_1623672139.jpg.jpg" alt=""> </div>

                <p>$10</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsp">
                <div class="img"> <img src="img/q18den_1623672139.jpg.jpg" alt=""> </div>

                <p>$10</p>
                <a href="#">Đồng hồ</a>
            </div>
        </div>
        <div class="row">
            <div class="boxsp mr">
                <div class="img"> <img src="img/q18den_1623672139.jpg.jpg" alt=""> </div>
                <p>$10</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsp mr">
                <div class="img"> <img src="img/q18den_1623672139.jpg.jpg" alt=""> </div>

                <p>$10</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsp">
                <div class="img"> <img src="img/q18den_1623672139.jpg.jpg" alt=""> </div>

                <p>$10</p>
                <a href="#">Đồng hồ</a>
            </div> -->
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "boxright.php";
        ?>
    </div>
</div>