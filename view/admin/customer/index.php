<!-- <link rel="stylesheet" href="public/css/index.css"> -->
<div class="au_main">
    <div class="author_group">
        <table>
            <thead>
                <tr>
                    <th>Tên khách hàng</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>SĐT</th>
                    <th>Ngày sinh</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody class="auth_table_body">
                <?php foreach ($result as $each) { ?>
                    <tr>
                        <td><?php echo $each['TenKH'] ?></td>
                        <td><?php echo $each['Username'] ?></td>
                        <td><?php echo $each['Password'] ?></td>
                        <td><?php echo $each['SDTKH'] ?></td>
                        <td><?php echo $each['NgaySinh'] ?></td>
                        <td><?php echo $each['EmailKH'] ?></td>
                        <td><?php echo $each['DiaChi'] ?></td>
                        <td>
                            <?php if (isset($statusEdit)) {  ?>
                                <a href="?action=edit&controller=customer&ma=<?php echo $each['MaKH'] ?>">
                                    <button class="bnt-edit-authorize">Sửa</button>
                                </a>
                            <?php } else echo 'Nothing' ?>
                        </td>
                        <td>
                            <?php if (isset($statusDelete)) { ?>
                                <button class="delete-customer-btn" value="<?php echo $each['MaKH'] ?>">Xóa</button>
                            <?php } else echo 'Nothing' ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script src="../../public/js/customer.js"></script>