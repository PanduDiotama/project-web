<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_pesertavalo";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Gagal terkoneksi ke database");
}
$nim = "";
$nama = "";
$nick_name = "";
$nama_tim = "";
$prodi = "";
$sukses = "";
$gagal = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete') {
    $id = $_GET['id'];
    $sql1 = "DELETE FROM users WHERE id_peserta='$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses = "Data Berhasil Dihapus";
    } else {
        $gagal = "Data Gagal Dihapus";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PESERTA VALORANT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f9f9f9;
        }

        h2, h3 {
            margin: 0;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        a {
            text-decoration: none;
            color: #fff;
        }

        button {
            background-color: #003366;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #002244;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #003366;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        header .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            margin-right: auto;
        }

        header ul {
            display: flex;
            gap: 15px;
            margin-left: 20px;
            margin-right: 20px;
        }

        header ul li {
            padding: 5px 0;
        }

        header ul li a {
            color: #fff;
            font-weight: bold;
        }

        header ul li a:hover {
            color: #ffcd05;
        }

        footer {
            background-color: #003366;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            header ul {
                flex-direction: column;
                align-items: flex-start;
                gap: 0;
            }
        }

        .card {
            margin-top: 80px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            background-color: #003366;
            text-align: center; 
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #003366;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        .btn {
            margin-top: 20px;
            display: block; 
            float: right;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">GG FEST</div>
        <ul>
            <li><a href="phoenix.php">Log out</a></li>
        </ul>
    </header>

    <div class="card">
        <h5 class="card-header">Data Peserta Valorant</h5>
        <div class="card-body">
            <table>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nick Name</th>
                        <th scope="col">Nama Tim</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql2 = "SELECT * FROM users ORDER BY id_peserta ASC";
                    $q2 = mysqli_query($koneksi, $sql2);
                    $urut = 1;
                    while ($r2 = mysqli_fetch_array($q2)) {
                        $id = $r2['id_peserta'];
                        $nim = $r2['nim'];
                        $nama = $r2['nama'];
                        $nick_name = $r2['nick_name'];
                        $nama_tim = $r2['nama_tim'];
                        $prodi = $r2['prodi'];
                        
                        ?>
                        <tr>
                            <th scope="row"><?php echo $urut++; ?></th>
                            <td scope="row"><?php echo $nim; ?></td>
                            <td scope="row"><?php echo $nama; ?></td>
                            <td scope="row"><?php echo $nick_name; ?></td>
                            <td scope="row"><?php echo $nama_tim; ?></td>
                            <td scope="row"><?php echo $prodi; ?></td>
                            <td scope="row">
                                <a href="viewvalo.php?op=delete&id=<?php echo $id; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</a>
                                <a href="valorant.php?op=edit&id=<?php echo $id; ?>" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <a href="valorant.php" class="btn btn-primary">Back</a>
        </div>
    </div>

    <?php include "layout/footer.html"; ?>
</body>

</html>