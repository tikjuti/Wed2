<?php

require '../../model/Connect.php';

switch ($action) {
    case '':
        $sql = "select NgayLap as 'ngay', sum(TongTien) as 'doanhthu'
            from hoadon
            where DATE(NgayLap) >= CURDATE() - INTERVAL 1 WEEK and TinhTrang = 1
            group by NgayLap";
        $result = (new Connnect())->select($sql);
        break;
    case 'revenue':
        $sql = "select NgayLap as 'ngay', sum(TongTien) as 'doanhthu'
            from hoadon
            where DATE(NgayLap) >= CURDATE() - INTERVAL 1 WEEK and TinhTrang = 1
            group by NgayLap";
        $result = (new Connnect())->select($sql);
        break;
    case 'sellproduct':
        $sql = "select sanpham.MaSP as 'masanpham', sanpham.TenSP as 'tensanpham',  NgayLap as 'ngay', ifnull(sum(SoLuong),0) as 'sosanpham'
            from sanpham
            left join cthoadon on sanpham.MaSP = cthoadon.MaSP
            left join hoadon on cthoadon.MaHD = hoadon.MaHD
            where DATE(NgayLap) >= CURDATE() - INTERVAL 1 WEEK and TinhTrang = 1
            group by sanpham.MaSP, NgayLap";
        $result = (new Connnect())->select($sql);
        break;
    case 'bestselling':
        $sql = "select sanpham.MaSP as 'masanpham', sanpham.TenSP as 'tensanpham',  NgayLap as 'ngay', ifnull(sum(SoLuong),0) as 'sosanpham'
            from sanpham
            left join cthoadon on sanpham.MaSP = cthoadon.MaSP
            left join hoadon on cthoadon.MaHD = hoadon.MaHD
            where DATE(NgayLap) >= CURDATE() - INTERVAL 1 WEEK and TinhTrang = 1
            group by sanpham.MaSP, NgayLap
            order by sosanpham,tensanpham desc";
        $result = (new Connnect())->select($sql);
        break;
    case 'filter':
        $sql = "select NgayLap as 'ngay', sum(TongTien) as 'doanhthu'
            from hoadon
            where NgayLap >= '$datestart' and NgayLap <= '$dateend' and TinhTrang = 1
            group by NgayLap";
        $result = (new Connnect())->select($sql);
        break;
    case 'filter1':
        $sql = "select sanpham.MaSP as 'masanpham', sanpham.TenSP as 'tensanpham',  NgayLap as 'ngay', ifnull(sum(SoLuong),0) as 'sosanpham'
            from sanpham
            left join cthoadon on sanpham.MaSP = cthoadon.MaSP
            left join hoadon on cthoadon.MaHD = hoadon.MaHD
            where NgayLap >= '$datestart' and NgayLap <= '$dateend' and TinhTrang = 1
            group by sanpham.MaSP, NgayLap";
        $result = (new Connnect())->select($sql);
        break;
    case 'filter2':
        $sql = "select sanpham.MaSP as 'masanpham', sanpham.TenSP as 'tensanpham',  NgayLap as 'ngay', ifnull(sum(SoLuong),0) as 'sosanpham'
            from sanpham
            left join cthoadon on sanpham.MaSP = cthoadon.MaSP
            left join hoadon on cthoadon.MaHD = hoadon.MaHD
            where NgayLap >= '$datestart' and NgayLap <= '$dateend' and TinhTrang = 1
            group by sanpham.MaSP, NgayLap
            order by sosanpham,tensanpham desc";
        $result = (new Connnect())->select($sql);
        break;
}
