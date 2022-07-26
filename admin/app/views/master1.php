<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/6da5ba8330.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../admin/public/css/master1s.css">
    <link rel="stylesheet" href="../public/css/DsStyle.css">
    <link rel="stylesheet" href="../../public/css/EditStyle.css">


</head>
<body>
    <header>
        <?php 
        require_once 'blocks/header.php';
        ?>
    </header>
        <section>
        <div class="menu">
            <div class="account-menu">

            </div>
            <div class="menu-list">
            <ul>
                <li>
                    <a href="/DUAN1_NHOM1_QTT/admin/Home"><span id="icon-content"><i class="fa-solid fa-house-chimney"></i></span >Trang chủ<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                </li>
                <li>
                    <a href="/DUAN1_NHOM1_QTT/admin/Mon_hoc"><span id="icon-content"><i class="fa-solid fa-folder-closed"></i></span >Môn học<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                </li>
                <li>
                    <a href="/DUAN1_NHOM1_QTT/admin/Lop_hoc"><span id="icon-content"><i class="fa-solid fa-address-card"></i></span >Lớp học<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                </li>
                <li>
                    <a href="/DUAN1_NHOM1_QTT/admin/Khoahoc"><span id="icon-content"><i class="fa-solid fa-address-card"></i></span >Khóa học<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                </li>
                <li>
                   <a href=""><span id="icon-content"><i class="fa-solid fa-table-list"></i></span >Bài giảng<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                </li>
                <li>
                    <a href=""><span id="icon-content"><i class="fa-solid fa-user"></i></span >Người dùng<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                </li>
                <li>
                    <a href=""><span id="icon-content"><i class="fa-regular fa-circle-question"></i></span >Bộ câu hỏi<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                </li>
                <li>
                    <a href=""><span id="icon-content"><i class="fa-solid fa-circle-check"></i></span >Bộ đáp án<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                </li>
                <li>
                    <a href=""><span id="icon-content"><i class="fa-solid fa-database"></i></span >Kho đề<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                </li>
                <li>
                    <a href=""><span id="icon-content"><i class="fa-solid fa-chart-line"></i></span >Thống kê<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                </li>
            </ul>
            </div>
        </div>
        <div class="content">
        <?php
        require_once "pages/".$data['page'].".php";
        ?>
        </div>
        </section>
        <script src="../admin/public/js/master.js"></script>
</body>
</html>