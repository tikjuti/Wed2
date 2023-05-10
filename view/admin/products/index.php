<!-- <link rel="stylesheet" href="../../public/css/index.css"> -->
<h1>DANH SÁCH SẢN PHẨM</h1>

<?php if (isset($statusCreate)) {  ?>
    <a href="?action=create&controller=product">
        <button class="btn-add-index">
            Thêm sản phẩm
        </button>
    </a>
<?php } else echo "Nothing"  ?>

<form id="filter-price" class="filter" method="GET">
    <label>Lọc theo:</label>
    <select class="select-filter" id="id-filter">
        <option value="0">--Lọc theo--</option>
        <option value="?action=characters&controller=product&kytu=asc">Ký tự A-Z</option>
        <option value="?action=characters&controller=product&kytu=desc">Ký tự Z-A</option>
        <option value="?action=price&controller=product&gia=asc">Giá tăng dần</option>
        <option value="?action=price&controller=product&gia=desc">Giá giảm dần</option>
    </select><br>
    <label>Giá từ:</label>
    <input type="number" name="min_price" id="min"><br>
    <input type="hidden" name="controller" value="product"><br>
    <label>Giá đến:</label>
    <input type="number" name="max_price" id="max"><br>
    <input type="hidden" name="action" value="pricerange">
    <input id="btn-filter" type="submit" value="Lọc">
</form>


<table class="table-product-index">
    <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Ảnh sản phẩm</th>
        <th>Chi tiết</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($result as $each) { ?>
        <tr>
            <td><?php echo $each['MaSP'] ?></td>
            <td><?php echo $each['TenSP'] ?></td>
            <td><?php echo $each['GiaSP'] ?></td>
            <td>
                <img height="100px" src="../../public/image/<?php echo $each['AnhSP'] ?>" alt="ảnh">
            </td>
            <td>
                <?php if (isset($statusEdit)) {  ?>
                    <a href="?action=edit&controller=product&ma=<?php echo $each['MaSP'] ?>">
                        <button class="btn-detail">
                            Chi tiết
                        </button>
                    </a>
                <?php } else echo "Nothing"  ?>
            </td>
            <td>
                <?php if (isset($statusDelete)) {  ?>
                    <button class="btn-delete-product" value="<?php echo $each['MaSP'] ?>">
                        Xóa
                    </button>
                <?php } else echo "Nothing"  ?>
            </td>
        </tr>
    <?php } ?>
</table>

<!-- Phân trang -->

<?php require 'pagination.php' ?>

<script src="../../public/js/product_admin.js"></script>