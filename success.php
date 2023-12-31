<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="css/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../../duan1_web/js/main.js"></script>
    <style>
        #totalProduct{
            color: #fff;
            background-color:red;
            font-size: 12px;
            padding: 5px;
            border-radius: 50%;
        }
        header {
           background: linear-gradient( -100deg, #fd7154, rgb(247 46 46) ) !important;
        }
        .search__menu{
            background: linear-gradient(-100deg, #f70101, rgb(251 30 30)) !important;
        }
        .header__menu_nav a {
        text-decoration: none;
        color: white !important;
        text-transform: uppercase;
        display: block !important;
        padding: 16px 20px;
}
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- BIGIN HEADER -->
        <header>
            <div class="boxcenter">
                <div class="mb header header__menu_nav roayy search__menu">
                    <div style="display:flex; width:100%; background-color: red;" >
                        <img src="../../duan1_web/img/logo-d4438e0bbf0ee4be0ab667eb391c2bad.png" alt="">
                    </div>
                    <div class="box_search">
                        <form action="index.php?act=viewsearch" method="POST">
                            <input type="text" class="input__search_header" name="tukhoa" id="" placeholder="Sale 50% cho khách hàng đầu tiên">
                            <input type="submit" class="submit__search" name="submit" value="Tìm kiếm">
                        </form>
                    </div>
                    <div class="contact__ios" style="position: absolute; right: 120px; top: 10px; border-radius: 20px;" >
                    <form action="index.php?act=dangky" method="POST">
                        <label class="switch" style="margin-top:-300px;">
                        <input type="submit" name="submit" value="Hội viên" style="border-radius:50%; margin-top: -100px; width:75px; height:75px; color: white;background-color:red;border: 0.1875em solid white;font-weight: bold; font-size:15px;font-family:Georgia">
                        </label>
                        <div style="width:100%; color: blue; font-size: 25px; display:flex; justify-content: center; align-items: center; padding: 10px;">
                <?= (isset($successDangky) && $successDangky != "") ? $successDangky : "" ?>
            </div>
            </form>
                    </div>                    
                </div>
                <div class="header__menu_nav hd_navmenu" style="margin-top: 40px; background-color: gray; width: 100%; padding-left:20px;">
                    <ul>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="../../duan1_web/">Trang chủ</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="index.php?act=gioithieu">Giới Thiệu</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="index.php">Danh mục</a>
                            <div class="dropdown_content">
                                <?php
                                    foreach($load_danhmuc as $danhmucmenu) {
                                        extract($danhmucmenu)
                                        ?>
                                            <a href="index.php?act=danhmuc&iddm=<?= $id ?>"><?= $name ?></a>
                                        <?php
                                    }
                                ?>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="index.php?act=sanpham">Sản Phẩm</a>
                            <div class="dropdown_content menu__product">
                                <?php
                                    foreach($load_sanpham as $sanphammenu) {
                                        extract($sanphammenu)
                                        ?>
                                            <a href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a>
                                        <?php
                                    }
                                ?>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="">Hỏi Đáp</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="index.php?act=lienhe">Liên Hệ</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="index.php?act=addtocart">Giỏ Hàng</a>
        
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <a href="index.php" style="color: red; font-size: 50px">Chúc mừng bạn đã đặt hàng thành công!</a>
        <script>
            const changeColorButton = document.querySelector("input[name='changeColor']");
            const boxContent = document.querySelector("#spbanchay");
            const body = document.body;
            changeColorButton.addEventListener("click", function() {
                if(body.classList.contains('activeOK')) {
                    body.classList.remove('activeOK')
                    boxContent.classList.remove('colorBox')
                } else {
                    body.classList.add('activeOK')
                    boxContent.classList.add('colorBox')
                }
            });
        </script>
        <!-- END HEADER -->