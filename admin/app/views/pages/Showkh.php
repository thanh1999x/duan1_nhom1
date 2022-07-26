<?php
//model
$dskhoahoc = $data['khoa']->getkhAll();
?>
<div class="title-list">
    <p>Quản lý Khóa học</p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Danh sách Khóa học đang có</div>
    <table border="1">
        <tr>
            <th>Mã khóa học</th>
            <th>Tên khóa học</th>
            <th>Mô tả</th>
            <th>Ảnh khóa học</th>
            <th>Số lượt xem</th>
            <th>Mã lớp</th>
            <th>Mã môn học</th>
            <th colspan="2">Lựa chọn</th>
        </tr>
            <?php foreach ($dskhoahoc as $l) : ?>
                <tr>
                    <td><?= $l['id_khoahoc'] ?></td>
                    <td><?= $l['ten_khoahoc'] ?></td>
                    <td><?= $l['mo_ta'] ?></td>
                    <td>
                    <img src="/DUAN1_NHOM1_QTT/admin/public/images/<?=$l['anh_khoahoc']?>" width="123" alt="">
                </td>
                    <td><?= $l['so_luot_xem'] ?></td>
                    <td><?= $l['id_lop'] ?></td>
                    <td><?= $l['id_mon'] ?></td>
                    </td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Khoahoc/edit/<?=$l['id_khoahoc']?>" id="edit">Sửa</a></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Khoahoc/delete/<?=$l['id_khoahoc']?>" id="delete">Xóa</a></td>
                </tr>
            <?php endforeach ?>
    </table>
</div>
<div class="option-list">
    <a href="/DUAN1_NHOM1_QTT/admin/Khoahoc">Thêm mới</a>
</div>