<main class="catalog catalog__slider_b mb boxcenter">
    <div class="boxleft" style="width:100%;">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="../../duan1_web/img/anh0.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../../duan1_web/img/anh1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../duan1_web/img/anh2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../duan1_web/img/anh3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../duan1_web/img/anh4.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../../duan1_web/img/anh5.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <!-- <div class="banner__main_home">
            <div style="width: 993px;">
                <img src="../../duan1_web/img/s2.webp" style="width:100%;" alt="">
            </div>
        </div> -->
        <style>
                .spgoiy {
    text-align: center;
    margin: 40px 0;
    border: 1px solid #ccc;
    padding: 10px 0;
    padding-top: 15px;
    border-radius: 5px;
    background: linear-gradient( -90deg, rgb(242 20 20), rgb(248 120 43 / 97%) ) !important;
}
    .item__prd {
        background: linear-gradient( -100deg, #958b8b, rgb(93 89 87) ) !important;
}.box_items .item_name {
    font-size: 15px;
    font-weight: bold;
}
        </style>
        <div class="spgoiy">
            <h2>TẤT CẢ SẢN PHẨM</h2>
        </div>
        <div class="items" style="grid-template-columns: repeat(5, 10fr); gap:5px;">
            <?php
            foreach ($load_sanpham as $sp) {
                extract($sp);
            ?>
                <div class="box_items">
                    <div class="box_items_img">
                        <div style="position: relative;">
                            <img style="padding: 10px;" src="upload/<?= $img ?>" alt="">
                            <div class="bg__banner_logo" style="position: absolute; top: 0;">
                                <img src="../../duan1_web/img/salew.webp" height="100px" alt="">
                            </div>
                        </div>
                        <div class="add" href="">
                            <h2><a class="a__click" href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a></h2>
                            <h3><?= number_format($price, 0, ',', '.'); ?> VNĐ</h3>
                            
                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <input type="hidden" name="name" value="<?= $name ?>">
                                <input type="hidden" name="price" value="<?= $price ?>">
                                <input type="hidden" name="img" value="<?= $img ?>">
                                <!-- <a class="add_cart" href="index.php?act=addTocart"></a> -->
                                <input type="submit" name="addtocart" class="add_cart" value="Thêm vào giỏ hàng">
                            </form>
                        </div>
                    </div>
                    <a class="item__prd item_name" href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a>
                    <p class="price"><?= number_format($price, 0, ',', '.'); ?> VNĐ</p>
                </div>
            <?php
            }
            ?>
        </div>
        <!-- <div class="banner__main_home">
            <div style="width: 993px;">
                <img src="../../duan1_web/img/fpts.webp" style="width:100%;" alt="">
            </div>
        </div> -->
        <div class="spgoiy">
            <h2>TRÁI CÂY TƯƠI</h2>
        </div>
        <div class="items" style="grid-template-columns: repeat(5, 1fr); gap:5px;">
            <?php
            foreach ($loadall_laptop_theoten as $sp) {
                extract($sp);
            ?>
                <div class="box_items">
                    <div class="box_items_img">
                        <div style="position: relative;">
                            <img style="padding: 10px;" src="upload/<?= $img ?>" alt="">
                            <div class="bg__banner_logo" style="position: absolute; top: 0;">
                                <img src="../../duan1_web/img/salew.webp" height="100px" alt="">
                            </div>
                        </div>
                        <div class="add" href="">
                            <h2><a class="a__click" href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a></h2>
                            <h3><?= number_format($price, 0, ',', '.'); ?> VNĐ</h3>
                            
                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <input type="hidden" name="name" value="<?= $name ?>">
                                <input type="hidden" name="price" value="<?= $price ?>">
                                <input type="hidden" name="img" value="<?= $img ?>">
                                <!-- <a class="add_cart" href="index.php?act=addTocart"></a> -->
                                <input type="submit" name="addtocart" class="add_cart" value="Thêm vào giỏ hàng">
                            </form>
                        </div>
                    </div>
                    <a class="item__prd item_name" href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a>
                    <p class="price"><?= number_format($price, 0, ',', '.'); ?> VNĐ</p>
                </div>
            <?php
            }
            ?>
        </div>
        
        <div class="spgoiy">
            <h2>THỊT HEO</h2>
        </div>
        <div class="items" style="grid-template-columns: repeat(5, 1fr); gap:5px;">
            <?php
            foreach ($loadall_pc_theoten as $sp) {
                extract($sp);
            ?>
                <div class="box_items">
                    <div class="box_items_img">
                        <div style="position: relative;">
                            <img style="padding: 10px;" src="upload/<?= $img ?>" alt="">
                            <div class="bg__banner_logo" style="position: absolute; top: 0;">
                                <img src="../../duan1_web/img/salew.webp" height="100px" alt="">
                            </div>
                        </div>
                        <div class="add" href="">
                            <h2><a class="a__click" href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a></h2>
                            <h3><?= number_format($price, 0, ',', '.'); ?> VNĐ</h3>
                            
                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <input type="hidden" name="name" value="<?= $name ?>">
                                <input type="hidden" name="price" value="<?= $price ?>">
                                <input type="hidden" name="img" value="<?= $img ?>">
                                <!-- <a class="add_cart" href="index.php?act=addTocart"></a> -->
                                <input type="submit" name="addtocart" class="add_cart" value="Thêm vào giỏ hàng">
                            </form>
                        </div>
                    </div>
                    <a class="item__prd item_name" href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a>
                    <p class="price"><?= number_format($price, 0, ',', '.'); ?> VNĐ</p>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</main>
<!-- BANNER 2 -->