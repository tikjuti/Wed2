<div class="au_main">
    <?php if (isset($_SESSION['cartimport'])) { ?>
        <div class="title">
            <?php if (true) {  ?>
                <button style="width: 120px; background-color:blue;" class="bnt-create-authorize btn-pay-cartimport">Thanh toán</button>
            <?php } else echo "Nothing"  ?>
        </div>
        <div class="author_group">
            <table>
                <thead>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Nhà cung cấp</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Tổng tiền</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody class="auth_table_body">
                    <?php
                    // unset($_SESSION['cartimport']);
                    $cart = $_SESSION['cartimport'];
                    // echo json_encode($cart);
                    // die();
                    $tongtien = 0;
                    foreach ($cart as $cart1) {
                        foreach ($cart1 as $ma => $each) {
                            $thanhtien = ($each['GiaSP'] * $each['quantity']);
                            // echo json_encode($each);
                            // die();
                            $tongtien += $thanhtien;
                    ?>
                            <input type="hidden" class="inp-ma-ncc" value="<?php echo $each['MaNCC'] ?>">
                            <input type="hidden" class="inp-thanh-tien" value="<?php echo $thanhtien ?>">
                            <tr>
                                <td><?php echo $each['MaSP'] ?></td>
                                <td><?php echo $each['TenSP'] ?></td>
                                <td><?php echo $each['AnhSP'] ?></td>
                                <td><?php echo $each['TenNCC'] ?></td>
                                <td><input class="change-quanty-cartimport" data-ma="<?php echo $each['MaSP'] ?>" style="width: 50px" type="number" min=1 value="<?php echo $each['quantity'] ?>"></td>
                                <td><?php echo number_format($each['GiaSP'], 0, ',', '.') . 'VND' ?></td>
                                <td><?php echo number_format($thanhtien, 0, ',', '.') . 'VND' ?></td>
                                <td>
                                    <?php if (true) {  ?>
                                        <button class="btn-delete-productcart" value="<?php echo $ma . '.' . $each['MaNCC'] ?>">Xóa</button>
                                    <?php } else echo 'Nothing' ?>
                                </td>
                            </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
            <input type="hidden" name="totalPriceImport" value="<?php echo $tongtien ?>">
            <p style="margin-top: 20px; font-size: 1.4rem;">Tổng thanh toán: <?php echo number_format($tongtien, 0, ',', '.') . 'VND' ?></p>
        </div>
    <?php } else echo "Bạn chưa chọn gì!" ?>
</div>

<script src="../../public/js/cartimport.js"></script>