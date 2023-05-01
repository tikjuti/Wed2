<link rel="stylesheet" href="public/css/reset.css">
<div class="au_main">
    <div class="title">
        <?php if (isset($statusCreate)) {  ?>
            <a href="?action=create&controller=authorization">
                <button class="bnt-create-authorize">Thêm</button>
            </a>
        <?php } else echo "Nothing"  ?>
    </div>
    <div class="author_group">
        <table>
            <thead>
                <tr>
                    <th style="width: 5%;">Mã</th>
                    <th style="width: 20%;">Tên quyền</th>
                    <th style="width: 25%;">Sửa</th>
                    <th style="width: 25%;">Xóa</th>
                </tr>
            </thead>
            <tbody class="auth_table_body">
                <?php foreach ($result as $each) { ?>
                    <tr>
                        <td><?php echo $each['MaPQ'] ?></td>
                        <td><?php echo $each['Quyen'] ?></td>
                        <td>
                            <?php if ($each['Quyen'] == 'Admin' || $each['Quyen'] == 'Khách hàng')
                                echo "Nothing";
                            else {
                                if (isset($statusEdit)) {
                                    echo '<a href="?action=edit&controller=authorization&ma=' . $each['MaPQ'] . '">';
                                    echo '<button class="bnt-edit-authorize">Sửa</button>';
                                    echo '</a>';
                                } else echo "Nothing";
                            }
                            ?>
                        </td>
                        <td>
                            <?php if ($each['Quyen'] == 'Admin' || $each['Quyen'] == 'Khách hàng')
                                echo "Nothing";
                            else {
                                if (isset($statusDelete)) {
                                    echo '<button class="btn-delete-authorize" value="' . $each['MaPQ'] . '">Xóa</button>';
                                } else echo "Nothing";
                            }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script src="../../public/js/authorize.js"></script>