<div class="au_main">
    <div class="author_group">
        <table>
            <thead>
                <tr>
                    <th>Mã phiếu nhập</th>
                    <th>Mã nhà cung cấp</th>
                    <th>Ngày nhập</th>
                    <th>Mã nhân viên</th>
                    <th>Tổng tiền</th>
                    <th>Chi tiết</th>
                </tr>
            </thead>
            <tbody class="auth_table_body">
                <?php foreach ($result as $each) { ?>
                    <tr>
                        <td><?php echo $each['MaPN'] ?></td>
                        <td><?php echo $each['MaNCC'] ?></td>
                        <td><?php echo $each['NgayNhap'] ?></td>
                        <td><?php echo $each['MaNV'] ?></td>
                        <td><?php echo number_format($each['TongTien'], 0, ',', '.') . 'VND' ?></td>
                        <td>
                            <?php if (true) {  ?>
                                <a href="?action=detailinvoices&controller=import&ma=<?php echo $each['MaPN'] ?>">
                                    <button style="width:80px;" class="bnt-create-authorize">Chi tiết</i></button>
                                </a>
                            <?php } else echo "Nothing"  ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script src=" ../../public/js/cartimport.js"></script>