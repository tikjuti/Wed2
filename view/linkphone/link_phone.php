<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
</head>

<body>
    <?php
    // $i = 1;
    foreach ($code as $item) {
        $i = 1;
        $array = getnamecodeproduct($item['MaLoaiSP']);
        ?>

        <div class="container name mt-3 mb-2 d-flex justify-content-between ">
            <h4 class="p-3 mb-0 mt-1">Điện thoại
                <?php echo ($item['TenLoaiSP']) ?>
            </h4>
            <a href="index.php?control=dienthoai&id=<?php echo ($item['MaLoaiSP']) ?>" class="a-midle">
                Xem thêm
            </a>
        </div>
        <div class="container pr-0 pl-0 bg-white container-product">
            <div class="container-fluid pr-0 pl-0 mb-4 mt-2 compoment ">

                <div class="d-flex">
                    <?php foreach ($array as $name) {
                        if ($i < 5) { ?>
                            <div class="card" style="width: 18rem;">
                                <a href="index.php?control=sanphamdienthoai&id=<?php echo ($name['MaSP']) ?>" style="width:100%">
                                    <div>
                                        <img class="card-img-top p-2"
                                            src="https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-vang-thumb-600x600.jpg"
                                            alt="Card image cap">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#">
                                            <?php echo $name['TenSP'] ?>
                                        </a></h5>
                                    <div class="card-text"><span>6.7"</span><span>
                                            <?php echo $name['ManHinh'] ?>
                                        </span></div>
                                    <div class="card-text mt-3 mb-2">
                                        <div class="btn btn-primary btn-memory">
                                            <?php echo $name['DungLuong'] ?>
                                        </div>

                                    </div>
                                    <p class="card-text product">
                                        <?php echo $name['GiaSP'] ?>
                                    </p>
                                    <a href="index.php?control=sanphamdienthoai&id=<?php echo ($name['MaSP']) ?>"
                                        class="btn btn-primary d-flex justify-content-center">Mua ngay</a>
                                </div>
                            </div>
                            <?php
                            $i++;
                        } else {
                            $i++;
                        }
                    }
                    ?>
                </div>
            </div>

        </div>
        <?php
        // $i = 1;
    }
    ?>
</body>

</html>