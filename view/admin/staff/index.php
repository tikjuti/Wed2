<div class="au_main">
    <div class="title">
        <?php if (isset($statusCreate)) {  ?>
            <a href="?action=create&controller=staff">
                <button class="btn-create-staff">Thêm</button>
            </a>
        <?php } else echo "Nothing"  ?>
    </div>
    <div class="author_group">
        <table>
            <thead>
                <tr>
                    <th>Mã nhân viên</th>
                    <th>Tên nhân viên</th>
                    <th>SDT</th>
                    <th>Ngày sinh</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Mã TK</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody class="auth_table_body">
                <?php foreach ($result as $each) { ?>
                    <tr>
                        <td><?php echo $each['MaNV'] ?></td>
                        <td><?php echo $each['TenNV'] ?></td>
                        <td><?php echo $each['SDTNV'] ?></td>
                        <td><?php echo $each['NgaySinh'] ?></td>
                        <td><?php echo $each['EmailNV'] ?></td>
                        <td><?php echo $each['DiaChiNV'] ?></td>
                        <td><?php echo $each['MaTK'] ?></td>
                        <td><?php echo $each['Username'] ?></td>
                        <td><?php echo $each['Password'] ?></td>
                        <td>
                            <?php if (isset($statusEdit)) {  ?>
                                <a href="?action=edit&controller=staff&ma=<?php echo $each['MaNV'] ?>">
                                    <button style="background-color: blue;" class="btn-edit-staff">Sửa</button>
                                </a>
                            <?php } else echo 'Nothing' ?>
                        </td>
                        <td>
                            <?php if (isset($statusDelete)) { ?>
                                <button class="btn-delete-staff" value="<?php echo $each['MaNV'] ?>">Xóa</button>
                            <?php } else echo 'Nothing' ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script src="../../public/js/staff.js"></script>