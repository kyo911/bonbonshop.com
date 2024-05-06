<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
</head>
<body>
    <h1>Giới thiệu</h1>
    <?php
    /* từ khóa echo */
        echo 'Đây là trang <b style="color: blue;">Giới thiệu</b>';
    
    /*hàm */
        print('<br/>Hello tôi là trang giới thiệu');

    //tạo biến
    $kh_ma = 'KH0001';
    $kh_hoten = 'Đình Vinh';
    $kh_tuoi = 33;
    $kh_gioitinh = 'Nam';
    $kh_sdt = '0767988848';
    ?>

    <style>
        .hoten {color: red; font-size: 30px;}
        .tuoi {border: 1px solid red; padding: 5px;}

    </style>


    <ul>
        <li>Mã KH: <?php echo $kh_ma ?></li>
        <li>Họ tên: <span class="hoten"><?= $kh_hoten ?></span></li>
        <li>Tuổi: <span class = "tuoi"><?= $kh_tuoi ?></span></li>
        <li>Giới tính: <?= $kh_gioitinh ?></li>
        <li>Số Điện Thoại: <span class = "hoten"><?= $kh_sdt ?></span></li>
        
    </ul>
</body>
</html>