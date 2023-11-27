<main class="catalog mb boxcenter" style="margin-top: 20px;">
    <div class="boxleft" style="width:100%;">
        <div class="header_admin" style="margin-bottom: 20px;">
            <h1>GIỎ HÀNG</h1>
        </div>
        <?php
            if(isset($_SESSION['mycart']) && (count($_SESSION['mycart']) > 0)) {
        ?>
            <table class="table table-striped table-hover">
                
                <?php
                    // unset($_SESSION['mycart']);
                    viewcart(1);
                ?>
            </table>


            <div class="mb" style="display: flex; justify-content: space-between;">
                <div></div>
                <div>
                    <a href="index.php?act=bill" style="margin-right: 10px;" class="btn btn-success">TIẾN HÀNH ĐẶT HÀNG</a>
                    <a href="index.php?act=xoagiohang" class="btn btn-danger">XÓA GIỎ HÀNG</a>
                </div>
            </div>
        <?php
            } else {
                ?>
                    <div style="border:1px solid #ccc; width: 100%; height: 500px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                        <div>
                            <h2>Giỏ hàng của bạn đang trống</h2>
                        </div>
                        <div>
                            <a class="btn btn-success" href="index.php?act=sanpham">MUA HÀNG</a>
                        </div>
                    </div>
                <?php
            }
        ?>
        </div>
    </div>
</main>