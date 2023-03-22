<h1>
    Danh sách sản phẩm.
</h1>

<a href="?action=create&controller=product">
    Thêm sản phẩm
</a>
<table>
    <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Ảnh sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($result as $each) { ?>
        <tr>
            <td><?php echo $each['maSP'] ?></td>
            <td><?php echo $each['tenSP'] ?></td>
            <td><?php echo $each['anhSP'] ?></td>
            <td><?php echo $each['giaSP'] ?></td>
            <td>
                <a href="?action=edit&ma=<?php echo $each['maSP'] ?>">
                    Sửa
                </a>
            </td>
            <td>
                <a href="?action=delete&ma=<?php echo $each['maSP'] ?>">
                    Xóa
                </a>
            </td>
        </tr>
    <?php } ?>
</table>