<div id="donhang" style="">
<?php 
    $result = getOrderByUser($_SESSION["makh"]);
    
        if (mysqli_num_rows($result) < 1) {
        echo "<h1>Bạn chưa mua đơn hàng nào</h1>";}

    while ($row = mysqli_fetch_assoc($result)) {
        $order_id = $row['MaHD'];
        $order_fullname = $row['TenNguoiNhan'];
        $order_address = $row['DiaChiNhan'];
        $order_numberphone = $row['SDT'];
        $order_date = $row['NgayLap'];
        $order_total = $row['TongTien'];
        $order_status = $row['TinhTrang'];
?>

    <h6>Mã đơn hàng: <?php echo $order_id;?></h6>
    <table>
        <thead class="">
            <tr>
                <th>
                    Hình Ảnh
                </th>
                <th>
                    Tên Sản Phẩm
                </th>
                <th>
                    Giá
                </th>
                <th>
                    Kích Thước
                </th>
                <th>
                    Số Lượng
                </th>
                <th>
                    Tổng
                </th>
            </tr>
        </thead>
        <?php 
            $result1 = getDetailOrder($order_id);
            // var_dump($resul/t1) ;
            while ($row1 = mysqli_fetch_assoc($result1)) {
                $detail_image = $row1["AnhSP"];
                $detail_title = $row1['TenSP'];
                $detail_price = $row1['GiaSP'];
                $detail_quantity = $row1['SoLuong'];
                $detail_subtotal = $row1['Gia'];
        ?>

        <tbody class="">
            <tr>
                <td> 
                    <?php 
                    // echo $detail_image
                    ?>
                </td>
                <td><?php echo $detail_title?>
                </td>
                <td><?php echo $detail_price?>
                </td>
                <td>123
                </td>
                <td><?php echo $detail_quantity?>
                </td>
                <td><?php echo $detail_subtotal?>
                </td>
            </tr>
        </tbody>

        <?php } ?>
    </table>
    <div>
        <h6>Tên Khách Hàng : <span><?php echo $order_fullname?></span> </h6>
        <h6>Địa Chỉ Nhận Hàng: <span><?php echo $order_address?></span></h6>
        <h6>Số Điện Thoại : <span><?php echo $order_numberphone?></span></h6>
        <h6>Ngày Đặt Hàng : <span><?php echo $order_date?></span></h6>
        <h6>Tổng Tiền : <span><?php echo $order_total?></span> đ</h6>
        <h6>Trạng Thái : <span><?php echo $order_status?></span> </h6>
    </div>

</div>

<?php 
}
?>