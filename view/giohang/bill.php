<main class="catalog mb boxcenter" style="margin-top: 20px;">
    <div class="boxleft" style="width:100%;">
        <form action="index.php?act=billconfirm" method="post">
            <div class="header_admin" style="margin-bottom: 20px;">
                <h2>THÔNG TIN ĐẶT HÀNG</h2>
            </div>

            <?php
                if(isset($_SESSION['minhh'])) {
                    $name = $_SESSION['minhh']['user'];
                    $address = $_SESSION['minhh']['address'];
                    $email = $_SESSION['minhh']['email'];
                    $tel = $_SESSION['minhh']['tel'];
                } else {
                    $name = "";
                    $address = "";
                    $email = "";
                    $tel = "";
                }
            ?>

            <div class="mb" style="border: 1px solid #ccc; border-radius:5px; padding: 30px;">
                <div class="group__dathang">
                    <span>Người đặt hàng</span>
                    <input type="text" name="name" value="<?= $name ?>" class="form-control">
                </div>
                <div class="group__dathang">
                    <span>Địa chỉ</span>
                    <input type="text" name="address" value="<?= $address ?>" class="form-control">
                </div>
                <div class="group__dathang">
                    <span>Email</span>
                    <input type="email" name="email" value="<?= $email ?>" class="form-control">
                </div>
                <div class="group__dathang">
                    <span>Điện thoại</span>
                    <input type="text" name="tel" value="<?= $tel ?>" class="form-control">
                </div>
            </div>

            <div class="header_admin" style="margin-bottom: 20px;">
                <h2>PHƯƠNG THỨC THANH TOÁN</h2>
            </div>
            <div class="mb" style="border: 1px solid #ccc; border-radius:5px; padding: 20px;">
                <div class="group__dathang2">
                    <input type="radio" value="1" name="pttt">
                    <img width="50px" src="../../tranvietanh_duanmau/img/cod.png" alt="">
                    <span>Thanh toán khi nhận hàng</span>
                </div>
                <div class="group__dathang2">
                    <input type="radio" value="2" name="pttt">
                    <img width="50px" src="../../tranvietanh_duanmau/img/atm.png" alt="">
                    <span>Thanh toán ATM</span>
                </div>
                <div class="group__dathang2">
                    <input type="radio" value="3" name="pttt">
                    <img width="50px" src="../../tranvietanh_duanmau/img/ol.png" alt="">
                    <span>Thanh toán online</span>
                </div>
            </div>

            <div class="header_admin" style="margin-bottom: 20px;">
                <h2>THÔNG TIN GIỎ HÀNG</h2>
            </div>

            <div class="mb" style="border: 1px solid #ccc; border-radius:5px; padding: 20px;">
                <table class="table">
                    <?php
                        viewcart(0);
                    ?>
                </table>
            </div>

            <a style="margin-right: 10px;"><button type="submit" name="dongydathang" class="btn btn-success">ĐỒNG Ý ĐẶT HÀNG</button></a>
        </form>
        </div>
    </div>
</main>