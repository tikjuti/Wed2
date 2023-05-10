<div class="au_main">
    <div class="title">
        <?php if (isset($statusCart)) {  ?>
            <a href="?action=cart&controller=import">
                <button class="bnt-create-authorize"><i class="fa-solid fa-cart-shopping"></i></button>
            </a>
        <?php } else echo "Nothing"  ?>
        <?php if (isset($statusImport)) {  ?>
            <a href="?action=invoices&controller=import">
                <button class="bnt-create-authorize invoices-import">Phiếu nhập</button>
            </a>
        <?php } else echo "<span class='invoices-import'>Nothing</span>"  ?>
    </div>
    <div class="author_group">
        <table>
            <thead>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Nhà cung cấp</th>
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
                        <td>
                            <select id="mancc" class="item-ma-ncc">
                                <?php foreach ($result1 as $each1) { ?>
                                    <option value="<?php echo $each1['MaNCC'] ?>"><?php echo $each1['TenNCC'] ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td><?php echo $each['SoLuongSP'] ?></td>
                        <td><?php echo number_format($each['GiaSP'], 0, ',', '.') . 'VND' ?></td>
                        <td>
                            <?php if (isset($statusCreate)) {  ?>
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