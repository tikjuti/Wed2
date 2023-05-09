<div class="col p-2" id="content-left">
    <nav class="category">
        <ul class="category_list" id="category_list">
            <?php
            if (isset($_SESSION['arrTenCN'])) {
                $arrTenCN = $_SESSION['arrTenCN'];
                foreach ($arrTenCN as $each) {
                    $tmp = preg_split("/\./", $each);
                    $tenctl = '';
                    switch ($tmp[0]) {
                        case 'Sản phẩm':
                            $tenctl = 'product';
                            break;
                        case 'Hóa đơn':
                            $tenctl = 'bill';
                            break;
                        case 'Thống kê':
                            $tenctl = 'statistic';
                            break;
                        case 'Nhân viên':
                            $tenctl = 'staff';
                            break;
                        case 'Khách hàng':
                            $tenctl = 'customer';
                            break;
                        case 'Phân quyền':
                            $tenctl = 'authorization';
                            break;
                        case 'Tài khoản':
                            $tenctl = 'account';
                            break;
                        case 'Nhập hàng':
                            $tenctl = 'import';
                            break;
                        case 'Nhà cung cấp':
                            $tenctl = 'supplier';
                            break;
                    }
            ?>
                    <a href="?controller=<?php echo $tenctl ?>" class=" category_iteam_link">
                        <li class="category_iteam">
                            <i class="category_iteam_link_icon1  <?php echo $tmp[1] ?>"></i>
                            <span class="category_iteam_info"><?php echo $tmp[0] ?></span>
                        </li>
                    </a>
            <?php }
            } ?>
        </ul>
    </nav>
</div>

<script src="../../public/js/index.js"></script>