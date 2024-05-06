<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <style>
        .table-dep {
            border-collapse: collapse;
        }
        .table-dep th, .table-dep td{
            padding:3px;
        }
        .bg-red {
            background: red;
        }
    </style>
</head>
<body>
    <?php
    $sv1 = array(
        'sv_ma'         => 'SV001',
        'sv_hoten'      => 'Đình Vinh',
        'sv_diem_lt'    => 8,
        'sv_diem_th'    => 9
    );

    $sv2 = [
        'sv_ma'         => 'SV002',
        'sv_hoten'      => 'Nguyễn A',
        'sv_diem_lt'    => 6,
        'sv_diem_th'    => 5
    ];
    
    $sv3 = [
        'sv_ma'         => 'SV003',
        'sv_hoten'      => 'Nguyễn B',
        'sv_diem_lt'    => 10,
        'sv_diem_th'    => 9
    ];
    
    $arr_danhsach_sinhvien = array(
            $sv1,
            $sv2,
            $sv3

    );
    
    ?>

    <table border = "1" class="table-dep">
        <thead>
        <tr>
            <th>Mã SV</th>
            <th>Họ tên SV</th>
            <th>Điển LT</th>
            <th>Điểm TH</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($arr_danhsach_sinhvien as $sv): ?>
           <tr>
            <td><?= $sv['sv_ma'] ?> </td>
            <td><?= $sv['sv_hoten'] ?> </td>
            <td><?= $sv['sv_diem_lt'] ?> </td>
            <td><?= $sv['sv_diem_th'] ?> </td>
            
        </tr>
        <?php endforeach; ?>
        </tbody>

    </table>
</body>
</html>