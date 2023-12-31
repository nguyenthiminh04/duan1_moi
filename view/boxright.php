<div class="boxright" style="width:30%">
    <?php
        if(!isset($_SESSION['minhh'])) {
            ?>
                <div class="mb" >
                    <div class="box_title">TÀI KHOẢN</div>
                    <div class="box_content form_account" style="padding: 15px !important;">
                        <div style="text-align: center; color:red;">
                            <?= (isset($success) && $success != "") ? $success : "" ?>
                        </div>
                        <form action="index.php?act=dangnhap" method="POST">
                            <h4>Tên đăng nhập</h4><br>
                            <input type="text" name="user" value="<?= isset($user) ? $user : "" ?>" id="">
                            <h4>Mật khẩu</h4><br>
                            <input type="password" name="pass" value="<?= isset($pass) ? $pass : "" ?>" id=""><br>
                            <input style="margin-right: 6px;" type="checkbox" name="" id="">Ghi nhớ tài khoản?
                            <br><input style="margin-top: 10px; background-color: #0078ff; color:#fff;" type="submit" name="dangnhap" value="Đăng nhập">
                        </form>
                        <li style="margin-top: 14px;" class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                        <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                    </div>
                </div>
            <?php
        } else {
            ?>
                <div class="mb" style="padding: 15px; text-align: center; width: 100%; font-size: 20px; border:1px solid #000; border-radius: 10px;">
                    <div style= "display:flex; justify-content: center; align-items: center;" class="box_dangnhapsuccess">
                    <?php
                        if(is_array($_SESSION['minhh'])) {
                            extract($_SESSION['minhh']);
                        }
                    ?>
                        Xin chào: <h4 style="color: gray"> <?= $user ?></h4>
                    </div>
                    
                    <li style="margin-top: 14px; font-size: 18px" class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                    <li  style=" font-size: 16px" class="form_li"><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                    <li  style=" font-size: 18px" class="form_li"><a href="index.php?act=doimatkhau">Đổi mật khẩu</a></li>
                    <?php
                        // phần này check nếu tài khoản có role == 0 thì đó là tài khoản admin và cho <li class="form_li"><a href="admin/index.php">Đăng nhập admin</a></li>
                        if($role == 1) {
                            ?>
                                <li style=" font-size: 18px" class="form_li"><a href="admin/index.php">Đăng nhập admin</a></li>
                            <?php
                        }
                    ?>
                    <div>
                        <a onclick="return confirm('Bạn có chắc chắn muốn đăng xuất hay không?')" style="text-decoration: none; margin-top:20px;" class="btn btn-danger" href="index.php?act=dangxuat">Đăng xuất</a>
                    </div>
                </div>
            <?php
        }
    ?>
    <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
    </div>
</div>