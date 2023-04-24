<link rel="stylesheet" href="public/css/reset.css">
<div class="au_main">
    <div class="title">
        <span>Authorization</span>
        <?php
        // include '../../model/connect.php';
        // include '../../model/function_employee.php';
        // $accountFeatures = json_decode($features_arr[4],true);
        // if($accountFeatures["ADD AUTHORITY"]==1) {
        //   echo '
        //     <a href="./authorize.php?page=authorization">
        //         <button>Add group</button>
        //     </a>
        //   ';
        // }
        ?>
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
                            <a href="?action=edit&ma=<?php echo $each['MaPQ'] ?>">
                                <button class="bnt-edit-authorize">Sửa</button>
                            </a>
                        </td>
                        <td>
                            <button class="btn-delete-authorize" value="<?php echo $each['MaPQ'] ?>">Xóa</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>