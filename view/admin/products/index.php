<link rel="stylesheet" href="../../public/css/reset.css">
<h1>
    Danh sách sản phẩm.
</h1>

<a href="?action=create&controller=product">
    Thêm sản phẩm
</a>
<table class="table-product">
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
            <td><?php echo $each['MaSP'] ?></td>
            <td><?php echo $each['TenSP'] ?></td>
            <td><?php echo $each['AnhSP'] ?></td>
            <td><?php echo $each['GiaSP'] ?></td>
            <td>
                <a href="?action=edit&ma=<?php echo $each['MaSP'] ?>">
                    <button>Sửa</button>
                </a>
            </td>
            <td>
                <a href="?action=delete&ma=<?php echo $each['MaSP'] ?>">
                    <button>Xóa</button>
                </a>
            </td>
        </tr>
    <?php } ?>
</table>