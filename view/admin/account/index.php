<div class="au_main">
    <div class="title">
        <?php if (isset($statusCreate)) {  ?>
            <a href="?action=create&controller=account">
                <button class="bnt-create-authorize">Thêm</button>
            </a>
        <?php } else echo "Nothing"  ?>
    </div>
    <div class="author_group">
        <table>
            <thead>
                <tr>
                    <th>Mã tài khoản</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Quyền</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody class="auth_table_body">
                <?php foreach ($result as $each) { ?>
                    <tr>
                        <td><?php echo $each['MaTK'] ?></td>
                        <td><?php echo $each['Username'] ?></td>
                        <td><?php echo $each['Password'] ?></td>
                        <td><?php echo $each['Quyen'] ?></td>
                        <td>
                            <?php if (isset($statusEdit)) {  ?>
                                <a href="?action=edit&controller=account&ma=<?php echo $each['MaTK'] ?>">
                                    <button class="btn-edit-account">Sửa</button>
                                </a>
                            <?php } else echo 'Nothing' ?>
                        </td>
                        <td>
                            <?php if (isset($statusDelete)) { ?>
                                <button class="btn-delete-account" value="<?php echo $each['MaTK'] ?>">Xóa</button>
                            <?php } else echo 'Nothing' ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script src="../../public/js/account.js"></script>