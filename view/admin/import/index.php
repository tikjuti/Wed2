<div class="au_main">
    <div class="title">
        <?php if (true) {  ?>
            <a href="?action=cart&controller=import">
                <button class="bnt-create-authorize"><i class="fa-solid fa-cart-shopping"></i></button>
            </a>
        <?php } else echo "Nothing"  ?>
        <?php if (true) {  ?>
            <a href="?action=invoices&controller=import">
                <button class="bnt-create-authorize invoices-import">Phiếu nhập</button>
            </a>
        <?php } else echo "Nothing"  ?>
    </div>
    <div class="author_group">
        <table>
            <thead>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Thêm vào giỏ</th>
                </tr>
            </thead>
            <tbody class="auth_table_body">
                <?php foreach ($result as $each) { ?>
                    <tr>
                        <td><?php echo $each['MaSP'] ?></td>
                        <td><?php echo $each['TenSP'] ?></td>
                        <td><?php echo $each['SoLuongSP'] ?></td>
                        <td><?php echo $each['GiaSP'] ?></td>
                        <td>
                            <?php if (true) {  ?>
                                <button style="background-color: blue;" class="btn-add-cartimport" value="<?php echo $each['MaSP'] ?>">Thêm</button>
                            <?php } else echo 'Nothing' ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script src=" ../../public/js/cartimport.js"></script>