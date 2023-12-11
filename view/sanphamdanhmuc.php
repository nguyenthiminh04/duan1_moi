<main class="catalog mb boxcenter">
    <div class="boxleft" style="width:100%;">
        <div style="margin:25px; font-size:25px;border:2px solid #000; padding: 10px;">
            Danh Mục: <?php echo $list_sanphamdanhmuc; ?>
        </div>
        <div class="items" style="grid-template-columns: repeat(5, 9fr); gap:5px;">
            <?php
                foreach($dssp as $sp) {
                    extract($sp);
                    ?>
                        <div class="box_items">
                        <style>
                                 .item__prd {
                                        background: linear-gradient( -100deg, #958b8b, rgb(93 89 87) ) !important;
                                }
                                .box_items .item_name {
                                    font-size: 15px;
                                    font-weight: bold;
                                }
                            </style>
                            <div class="box_items_img">
                                <img style=" padding: 10px;" src="upload/<?= $img ?>" alt="">
                                <div class="bg__banner_logo" style="position: absolute; top: 0;">
                                <img src="../../duan1_web/img/salew.webp" height="100px" alt="">
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