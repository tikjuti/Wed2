<div class="au_main">
    <div class="author_group">
        <table>
            <thead>
                <tr>
                    <th>Mã phiếu nhập</th>
                    <th>Mã sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                </tr>
            </thead>
            <tbody class="auth_table_body">
                <?php foreach ($result as $each) { ?>
                    <tr>
                        <td><?php echo $each['MaPN'] ?></td>
                        <td><?php echo $each['MaSP'] ?></td>
                        <td><?php echo $each['SoLuong'] ?></td>
                        <td><?php echo number_format($each['TongTien'], 0, ',', '.') . 'VND' ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script src=" ../../public/js/cartimport.js"></script>