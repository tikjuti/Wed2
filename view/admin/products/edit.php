<form action="?action=update" method="post">
    <input type="hidden" name="ma" value="<?php echo $each['maSP'] ?>">
    Tên sản phẩm
    <input type="text" name="ten" value="<?php echo $each['tenSP'] ?>">
    <br>
    Ảnh sản phẩm
    <input type="text" name="anh" value="<?php echo $each['anhSP'] ?>">
    <br>
    Giá sản phẩm
    <input type="number" name="gia" value="<?php echo $each['giaSP'] ?>">
    <br>
    <button>Sửa</button>
</form>