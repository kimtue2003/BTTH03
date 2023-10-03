<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thể loại nhạc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-danger">
                <img src="./img./logo.png" class="img-thumbnail">
                <div class="sidebar mt-4">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                            <a class="nav-link active" href="./trangchu.php">Trang Chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./dsbh.php">Danh Sách Bài Hát Yêu Thích </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Thể Loại Nhạc</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Nhạc Việt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Top 100 Việt Nam</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Nhạc Kpop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Top 100 Châu Á</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-9 bg-light">
                <div class="d-flex">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mt-2">
                            <i class="bi bi-list fa-3x" style="font-size: 40px;"></i>
                            <span class="m-0" style="font-weight: bold; font-size: 42px;">Trang Chủ</span>
                        </div>
                        <from class="m-4">
                            <input type=text placeholder="tìm kiếm">
                            <span class="border border-info-subtle">
                                <button class="text-primary">Tìm</button>
                            </span>
                        </from>
                    </div>
                </div>
                <div>
                   <a href="./themtheloai.php" class="btn btn-primary">
                    <span><i class="bi bi-person-fill-add"></i></span>
                       Thêm Thể Loại Nhạc
                   </a>
                </div>
                <div class="mt-2">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên Thể Loại</th>
                            <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once 'ketnoi.php';
                            $list_sql = "SELECT * FROM THELOAI ORDER BY tenTheLoai";
                            $result = mysqli_query($conn, $list_sql);
                            while ($r = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                 <td><?php echo $r['id']; ?></td>
                                 <td><?php echo $r['tenTheLoai']; ?></td>
                                 <td>
                                     <a href="Infor.php?sid=<?php echo $r['id']; ?>" style="color:orangered"><i class="bi bi-eye-fill ms-2 function"></i></a>
                                     <a href="edittl.php?sid=<?php echo $r['id']; ?>" style="color:yellow"><i class="bi bi-pencil-square function"></i></a>
                                     <a onclick="return confirm('Bạn có muốn thể loại nhac này không?')" href="deletetl.php?sid=<?php echo $r['id']; ?>" style="color:blue"><i class="bi bi-trash-fill function"></i></a>
                                 </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>   
    </div>
</body>
</html>