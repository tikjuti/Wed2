<form id="form-create-product" action="?action=store&controller=product" enctype="multipart/form-data" method="POST">
   Tên sản phẩm
   <input type="text" name="ten" id="txtTenSP">
   <div id="name-error" class="error-message"></div>
   <br>
   Ảnh sản phẩm
   <input type="file" name="anh" id="txtAnhSP">
   <br>
   Loại sản phẩm
   <select name="maloai" id="maloai">
      <?php
      while ($row = mysqli_fetch_array($result)) {
      ?>
         <option value="<?php echo $row["MaLoaiSP"] ?>"><?php echo $row["TenLoaiSP"] ?></option>
      <?php
      }
      ?>
   </select>
   <br>
   Nhà cung cấp
   <select name="maNCC" id="maNCC">
      <?php
      while ($row = mysqli_fetch_array($result1)) {
      ?>
         <option value="<?php echo $row["MaNCC"] ?>"><?php echo $row["TenNCC"] ?></option>
      <?php
      }
      ?>
   </select>
   <br>
   Số lượng
   <input type="number" name="soLuong" id="txtSoLuong">
   <br>
   Giá sản phẩm
   <input type="number" name="gia" id="txtGiaSP">
   <br>
   Màn hình
   <input type="text" name="manHinh" id="txtManHinh">
   <br>
   Camera
   <input type="text" name="camera" id="txtCamera">
   <br>
   Dung lượng
   <input type="text" name="dungLuong" id="txtDungLuong">
   <br>
   Chip
   <input type="text" name="chip" id="txtChip">
   <br>
   <button type="submit" class="add-product">Thêm</button>
</form>


<script src="../../public/js/product_admin.js"></script>