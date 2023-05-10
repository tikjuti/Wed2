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
                    <th>Xử lý</th>
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
                            <?php if (isset($statusDetail)) {
                                echo '<a href="?action=billdetail&controller=bill&ma=' . $each['MaHD'] . '">';
                                echo '<button style="width:100px;">Chi tiết</button>';
                                echo '</a>';
                            } else echo  'Nothing';
                            ?>
                        </td>
                        <td>
                            <?php if (isset($statusProcess)) {
                                if ($each['TinhTrang'] == 0)
                                    echo '<button style="background-color:blue;" class="btn-process-bill" value="' . $each['MaHD'] . '">Xử lý</button>';
                                else
                                    echo 'Đã xử lý';
                            } else    echo 'Nothing';
                            ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script src="../../public/js/bill.js"></script>