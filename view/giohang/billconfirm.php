<main class="catalog mb boxcenter" style="margin-top: 20px;">
    <div class="boxleft">
        <div class="header_admin" style="margin-bottom: 20px; background-color: #0078ff !important; color: #fff; border:1px solid #ccc;">
            <h2 style="text-align: center; padding-top: 7px;">CẢM ƠN QUÝ KHÁCH ĐÃ ĐẶT HÀNG</h2>
        </div>

        <?php
            if(isset($listbill) && (is_array($listbill))) {
                // extract($listbill);
            }
        ?>


        <div class="header_admin" style="border-radius: 5px 5px 0px 0px !important">
            <h2 style="text-align: center; padding-top: 7px;">THÔNG TIN ĐƠN HÀNG</h2>
        </div>

        <div class="mb" style="border: 1px solid #ccc; border-radius:0px 0px 5px 5px; padding: 20px; text-align: center;">
            <li>Mã đơn hàng: DAM-<?= $id ?></li>
            <li>Ngày đặt hàng: <?= $listbill['name'] ?></li>
            <li>Tổng đơn hàng: <?= $listbill['bill_email'] ?></li>
            <li>Phương thức thanh toán: DAM-<?= $listbill['bill_pttt'] ?></li>
        </div>

        <div class="header_admin" style="border-radius: 5px 5px 0px 0px !important">
            <h2 style="text-align: center; padding-top: 7px;">THÔNG TIN ĐẶT HÀNG</h2>
        </div>

        <div class="mb" style="border: 1px solid #ccc; border-radius:0px 0px 5px 5px; padding: 20px; text-align: center;">
            <div class="group__dathang3">
                <span>Người đặt hàng</span>
                <div><?= $listbill['bill_name'] ?></div>
            </div>
            <div class="group__dathang3">
                <span>Địa chỉ</span>
                <div><?= $listbill['bill_address'] ?></div>
            </div>
            <div class="group__dathang3">
                <span>Email</span>
                <div><?= $listbill['bill_email'] ?></div>
            </div>
            <div class="group__dathang3">
                <span>Điện thoại</span>
                <div><?= $listbill['bill_tel'] ?></div>
            </div>
        </div>

        <div class="header_admin" style="border-radius: 5px 5px 0px 0px !important">
            <h2 style="text-align: center; padding-top: 7px;">CHI TIẾT GIỎ HÀNG</h2>
        </div>

        <div class="mb" style="border: 1px solid #ccc; border-radius:0px 0px 5px 5px; padding: 20px; text-align: center;">
            <table class="table">
                <?php
                    bill_chi_tiet($billct);
                ?>
            </table>
        </div>

    </div>
            </div>
</main>