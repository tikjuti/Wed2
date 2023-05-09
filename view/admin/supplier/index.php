<div class="au_main">
    <div class="title">
        <?php if (isset($statusCreate)) {  ?>
            <a href="?action=create&controller=supplier">
                <button class="bnt-create-authorize">Thêm</button>
            </a>
        <?php } else echo "Nothing"  ?>
    </div>
    <div class="author_group">
        <table>
            <thead>
                <tr>
                    <th>Mã nhà cung cấp</th>
                    <th>Tên nhà cung cấp</th>
                    <th>SDT</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody class="auth_table_body">
                <?php foreach ($result as $each) { ?>
                    <tr>
                        <td><?php echo $each['MaNCC'] ?></td>
                        <td><?php echo $each['TenNCC'] ?></td>
                        <td><?php echo $each['SDT'] ?></td>
                        <td><?php echo $each['DiaChi'] ?></td>
                        <td><?php echo $each['Email'] ?></td>
                        <td>
                            <?php if (isset($statusEdit)) {  ?>
                                <a href="?action=edit&controller=supplier&ma=<?php echo $each['MaNCC'] ?>">
                                    <button class="btn-edit-account">Sửa</button>
                                </a>
                            <?php } else echo 'Nothing' ?>
                        </td>
                        <td>
                            <?php if (isset($statusDelete)) { ?>
                                <button class="btn-delete-supplier" value="<?php echo $each['MaNCC'] ?>">Xóa</button>
                            <?php } else echo 'Nothing' ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script src="../../public/js/supplier.js"></script>