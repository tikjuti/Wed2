<div class="au_main">
    <div class="author_group">
        <table>
            <thead>
                <tr>
                    <!-- <th style="width: 5%;">Mã</th> -->
                    <th>Mã hóa đơn</th>
                    <th>Ngày lập</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>
                    <th>Tình trạng</th>
                </tr>
            </thead>
            <?php
            $tongtien = 0;
            foreach ($result as $each) {
                $thanhtien = $each['Gia'] * $each['SoLuong'];
                $tongtien += $thanhtien;
            ?>
                <tbody class="auth_table_body">
                    <?php foreach ($result as $each) { ?>
                        <tr>
                            <td><?php echo $each['MaHD'] ?></td>
                            <td><?php echo $each['NgayLap'] ?></td>
                            <td><?php echo $each['TenSP'] ?></td>
                            <td><?php echo $each['SoLuong'] ?></td>
                            <td><?php echo number_format($each['Gia'], 0, ',', '.') . 'VND' ?></td>
                            <td><?php echo number_format($thanhtien, 0, ',', '.') . 'VND' ?></td>
                            <td><?php echo $each['TinhTrang'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            <?php } ?>
        </table>
        <p class="info-receive_total">Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.') . 'VND' ?> </p>
        <div class="info-receive">Thông tin nhận hàng</div>
        <div class="info-receive_item">Tên người nhận: <?php echo $each['TenNguoiNhan'] ?></div>
        <div class="info-receive_item">Địa chỉ nhận : <?php echo $each['DiaChiNhan'] ?></div>
        <div class="info-receive_item">Số điện thoại : <?php echo $each['SDT'] ?></div>
    </div>
</div>
<script src="../../public/js/bill.js"></script>