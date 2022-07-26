<?php
//model
$id = $data['id'];
$khoa = $data['khoa']->getkh($id);
$lophoc =$this->model("LopModel");
$dslophoc =$lophoc->getLopAll();
$mon=$this->model("MonModel");
$dsmonhoc=$mon->getMonAll();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ten_kh = $_POST['ten_kh'];
    $mo_ta = $_POST['mo_ta'];
    $anh = $_FILES['anh']['name'];
    if($_FILES['anh']['size'] >0){
        $anh=$_FILES['anh']['name'];
        move_uploaded_file($_FILES['anh']['tmp_name'],'../admin/public/images/'.$anh );
        
    }
    $luotxem= $_POST['luot_xem'];
    $malop= $_POST['malop'];
    $mamon= $_POST['mamon'];

    //model
    $data['khoa']->Editkh($ten_kh,$mo_ta,$anh,$luotxem,$malop,$mamon,$id);
    header('location:/DUAN1_NHOM1_QTT/admin/Khoahoc/List');
}
?>

<div class="title"> 
        <h1>Sửa Khóa học</h1>
    </div>
    <div class="form">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="product_id">
                <input type="hidden" name="ma_kh" value="<?=$khoa['id_khoahoc']  ?>">
            </div>
            <div class="product_name">
                <label for="">Tên Khóa học</label>
                <input type="text" name="ten_kh" placeholder="Tên sản phẩm" value="<?=$khoa['ten_khoahoc'] ?>">
            </div>
            <div class="images">
                <label for="">Mô Tả</label>
                <input id="image" type="text" name="mo_ta" value="<?=$khoa['mo_ta']?>">
                <br>
            </div>
            <div class="images">
                <label for="">Ảnh khóa học</label>
                <input id="image" type="file" name="anh" id="">
                <br>
                <img src="../images/<?=$khoa['hinh'] ?>" width="120" alt="">
                <input type="hidden" name="anh" value="<?=$khoa['anh_khoahoc'] ?>">
            </div>
            <br>
            <div class="hi1">
                <label for="">Số lượt xem</label>
                <input type="number" name="luot_xem" value="<?=$khoa['so_luot_xem']?>">
            </div>
            <label for="">Mã Lớp</label>
            <select name="malop" id="">
                    <?php foreach ($dslophoc as $dm) : ?>
                        <option value="<?=$dm['id_lop'] ?>">
                            <?=$dm['ten_lop'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <br>
                <br>
                <label for="">Mã Môn</label>
                <select name="mamon" id="">
                    <?php foreach ($dsmonhoc as $dm) : ?>
                        <option value="<?=$dm['id_mon'] ?>">
                            <?=$dm['ten_mon'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <br>
                <br>
                <button type="submit">Lưu lại</button>
                <button type="reset" id="reset">Nhập lại</button>
                <a href="/DUAN1_NHOM1_QTT/admin/Khoahoc/List" id="list">Danh sách</a>
            </div>
        </form>
    </div>
</body>
