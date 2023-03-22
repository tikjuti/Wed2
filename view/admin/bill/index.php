<link rel="stylesheet" href="../../../public/css/index.css">
<table class="table-bill">
    <tr>
        <th>Mã hóa đơn</th>
        <th>Mã khách hàng</th>
        <th>Mã nhân viên</th>
        <th>Ngày lập</th>
        <th>Tên người nhận</th>
        <th>Tình trạng</th>
        <th>Chi tiết</th>
    </tr>
    <?php foreach ($result as $each) { ?>
        <tr>
            <td><?php echo $each['MaHD'] ?></td>
            <td><?php echo $each['MaKH'] ?></td>
            <td><?php echo $each['MaNV'] ?></td>
            <td><?php echo $each['NgayLap'] ?></td>
            <td><?php echo $each['TenNguoiNhan'] ?></td>
            <td><?php echo $each['TinhTrang'] ?></td>
            <td>
                <a href="?action=billdetail&controller=bill&ma=<?php echo $each['MaHD'] ?>">
                    Chi tiết
                </a>
            </td>
        </tr>
    <?php } ?>
</table>