<table class="table-edit">
    <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Ảnh sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Loại sản phẩm</th>
        <th>Nhà cung cấp</th>
        <th>Màn hình</th>
        <th>Camera</th>
        <th>Dung lượng</th>
        <th>Chip</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result1)) {
        $data = $row;
        // echo $data['MaLoaiSP'];
    ?>
        <tr>
            <td><?php echo $row['MaSP'] ?></td>
            <td><?php echo $row['TenSP'] ?></td>
            <td>
                <img height="100px" src="../../public/image/<?php echo $row['AnhSP'] ?>" alt="ảnh">
            </td>
            <td><?php echo $row['GiaSP'] ?></td>
            <td>
                <?php echo $row['TenLoaiSP'] ?>
            </td>
            <td><?php echo $row['TenNCC'] ?></td>
            <td><?php echo $row['ManHinh'] ?></td>
            <td><?php echo $row['Camera'] ?></td>
            <td><?php echo $row['DungLuong'] ?></td>
            <td><?php echo $row['Chip'] ?></td>
        </tr>
    <?php } ?>
</table>

<form id="form-edit-product" action="?action=update&controller=product" enctype="multipart/form-data" method="POST">
    <input type="hidden" name="masp" id="masp" value="<?php echo $data['MaSP'] ?>">

    Tên sản phẩm
    <input type="text" name="ten" id="txtTenSP" value="<?php echo $data['TenSP'] ?>">
    <br>
    Đổi ảnh mới
    <input type="file" name="photo_new" id="photo_new">
    <br>
    Hoặc giữ ảnh cũ :
    <img src="../../public/image/<?php echo $data['AnhSP'] ?>" alt="ảnh cũ" height="100">
    <input type="hidden" name="photo_old" id="photo_old" value="<?php echo $data['AnhSP'] ?>">
    <br>
    Số lượng
    <input type="number" name="soLuong" id="txtSoLuong" value="<?php echo $data['SoLuongSP'] ?>">
    <br>
    Giá sản phẩm
    <input type="number" name="gia" id="txtGiaSP" value="<?php echo $data['GiaSP'] ?>">
    <br>
    Loại sản phẩm
    <select name="maloai" id="maloai">
        <?php
        while ($row1 = mysqli_fetch_array($result2)) {
        ?>
            <option value="<?php echo $row1["MaLoaiSP"] ?>" <?php echo $row1['MaLoaiSP'] == $data['MaLoaiSP'] ? 'selected' : null ?>>
                <?php echo $row1["TenLoaiSP"] ?>
            </option>

        <?php
        }
        ?>
    </select>
    <br>
    Nhà cung cấp
    <select name="maNCC" id="maNCC">
        <?php
        while ($row2 = mysqli_fetch_array($result3)) {
        ?>
            <option value="<?php echo $row2["MaNCC"] ?>" <?php echo $row2['MaNCC'] == $data['MaNCC'] ? 'selected' : null ?>>
                <?php echo $row2["TenNCC"] ?>
            </option>
        <?php
        }
        ?>
    </select>
    <br>
    Màn hình
    <input type="text" name="manHinh" id="txtManHinh" value="<?php echo $data['ManHinh'] ?>">
    <br>
    Camera
    <input type="text" name="camera" id="txtCamera" value="<?php echo $data['Camera'] ?>">
    <br>
    Dung lượng
    <input type="text" name="dungLuong" id="txtDungLuong" value="<?php echo $data['DungLuong'] ?>">
    <br>
    Chip
    <input type="text" name="chip" id="txtChip" value="<?php echo $data['Chip'] ?>">
    <br>

    <button class="edit-product">Sửa</button>
</form>
<script src=" ../../public/js/product_admin.js"></script>