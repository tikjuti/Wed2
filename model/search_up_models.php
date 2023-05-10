<?php
require("Connect.php");
$page = $_POST['page'];
$codepage = (($page - 1) * 4);
$sql = "SELECT * FROM sanpham,loaisanpham WHERE loaisanpham.MaLoaiSP=sanpham.MaLoaiSP AND MaSP !=0";
if (isset($_POST['min_price']) && isset($_POST['max_price'])) {
	$min_price = $_POST['min_price'];
	$max_price = $_POST['max_price'];
	$sql .= " AND `GiaSP` BETWEEN '$min_price' AND '$max_price'";
}
if (isset($_POST['category']) && $_POST['category'] != "") {
	$sql .= " AND TenLoaiSP IN ('" . implode("','", $_POST['category']) . "')";
}
if (isset($_POST['screen']) && $_POST['screen'] != "") {
	$sql .= " AND ManHinh IN ('" . implode("','", $_POST['screen']) . "')";
}
if (isset($_POST['camera']) && $_POST['camera'] != "") {
	$sql .= " AND Camera IN ('" . implode("','", $_POST['camera']) . "')";
}
if (isset($_POST['memory']) && $_POST['memory'] != "") {
	$sql .= " AND DungLuong IN ('" . implode(',', $_POST['memory']) . "')";
}
if (isset($_POST['chip']) && $_POST['chip'] != "") {
	$sql .= " AND Chip IN ('" . implode(',', $_POST['chip']) . "')";
}

if (isset($_POST['sorting']) && $_POST['sorting'] != "") {
	$sorting = implode("','", $_POST['sorting']);
	if ($sorting == 'newest' || $sorting == '') {
		$sql .= " ORDER BY MaSP DESC";
	} else if ($sorting == 'low') {
		$sql .= " ORDER BY GiaSP ASC";
	} else if ($sorting == 'high') {
		$sql .= " ORDER BY GiaSP DESC";
	}
} else {
	$sql .= " ORDER BY MaSP DESC";
}
$sql .= " LIMIT 4 OFFSET $codepage";
$products = (new Connnect())->select($sql);
$count = mysqli_num_rows($products);
$productHTML = '';
if ($count == 0) {
	echo "Không có sản phẩm";
} else {
	?>
	<?php
	foreach ($products as $item) {
		?>
		<div class="card-product" style="width:25%;" style=" margin: 0rem">
			<a href="index.php?list=sanphamdienthoai&id=<?php echo $item['MaSP'] ?>" style="width:100%">
				<div>
					<img class="card-img-top p-2" src="public/image/<?php echo $a = $item['AnhSP'] ?>" alt="Card image cap">
					<?php echo $item['AnhSP'] ?>
				</div>
			</a>
			<div class="card-body">
				<h5 class="card-title"><a href="#">
						<?php echo $item['TenSP'] ?>
					</a></h5>
				<div class="card-text"><span>
						<?php echo $item['ManHinh'] ?>
					</span></div>
				<div class="card-text mt-3 mb-2">
					<div class="btn btn-primary btn-memory">
						<?php echo $item['DungLuong'] ?>
					</div>
				</div>
				<p class="card-text price-drop mb-0"></p>
				<p class="card-text product">
					<?php echo $item['GiaSP'] ?>
				</p>
				<a href="index.php?control=sanphamdienthoai&id=<?php echo $item['MaSP'] ?>"
					class="btn btn-primary d-flex justify-content-center">Mua ngay</a>
			</div>
		</div>

		<?php
	}
}
return $productHTML;

?>