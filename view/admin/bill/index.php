<link rel="stylesheet" href="public/css/index.css">
<div class="au_main">
    <div class="author_group">
        <table>
            <thead>
                <tr>
                    <!-- <th style="width: 5%;">Mã</th> -->
                    <th>Mã hóa đơn</th>
                    <th>Tên khách hàng</th>
                    <th>Tên nhân viên</th>
                    <th>Ngày lập</th>
                    <th>Tên người nhận</th>
                    <th>Tình trạng</th>
                    <th>Chi tiết</th>
                </tr>
            </thead>
            <tbody class="auth_table_body">
                <?php foreach ($result as $each) { ?>
                    <tr>
                        <td><?php echo $each['MaHD'] ?></td>
                        <td><?php echo $each['TenKH'] ?></td>
                        <td><?php echo $each['TenNV'] ?></td>
                        <td><?php echo $each['NgayLap'] ?></td>
                        <td><?php echo $each['TenNguoiNhan'] ?></td>
                        <td><?php echo $each['TinhTrang'] ?></td>
                        <td>
                            <a href="?action=billdetail&controller=bill&ma=<?php echo $each['MaHD'] ?>">
                                <button>Chi tiết</button>
                            </a>
                        </td>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>