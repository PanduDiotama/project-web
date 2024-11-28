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

if (isset($_GET['op'])){
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'edit'){
    $id = $_GET['id'];
    $sql1 = "SELECT * FROM users WHERE id_peserta='$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    $r1 = mysqli_fetch_array($q1);
    $nim = $r1 ["nim"];
    $nama = $r1 ["nama"];
    $nick_name = $r1 ["nick_name"];
    $nama_tim = $r1 ["nama_tim"];
    $prodi = $r1 ["prodi"];

    if ($nim == '') {
        $gagal = "Data tidak ditemukan";
    }
}

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $nick_name = $_POST['nick_name'];
    $nama_tim = $_POST['nama_tim'];
    $prodi = $_POST['prodi'];

    if ($nim && $nama && $nick_name && $nama_tim && $prodi) {
        if ($op == 'edit') {
            $sql1 = "UPDATE users SET nim='$nim', nama='$nama', nick_name='$nick_name', nama_tim='$nama_tim', prodi='$prodi' WHERE id_peserta='$id'";
            $q1 = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data Berhasil Diedit";
            } else {
                $gagal = "Data Gagal Diedit";
            }
        } else {
            $checkNIM = "SELECT * FROM users WHERE nim='$nim'";
            $result = mysqli_query($koneksi, $checkNIM);

            if (mysqli_num_rows($result) > 0) {
                $gagal = "NIM sudah terdaftar";
            } else {
                $sql1 = "INSERT INTO users (nim, nama, nick_name, nama_tim, prodi) VALUES ('$nim', '$nama', '$nick_name', '$nama_tim', '$prodi')";
                $q1 = mysqli_query($koneksi, $sql1);
                if ($q1) {
                    $sukses = "Registrasi Berhasil";
                } else {
                    $gagal = "Registrasi Gagal";
                }
            }
        }
    } else {
        $gagal = "Silahkan Isi Semua Kolom dengan Benar";
    }
}
    


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRASI VALORANT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" rel="stylesheet" href="phoenix.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial bold', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f9f9f9;
        }

        h2,
        h3 {
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

        .register-container {
            margin-top: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
            background-color: #ffffff;
        }

        .register-container h2 {
            font-size:40px;
            color: #003366;
            margin-bottom: 50px;
        }

        .register-form {
            max-width: 400px;
            width: 100%;
            background-color: #f5f5f5;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .register-form label {
            font-size: 14px;
            margin-bottom: 5px;
            color: #333;
            display: block;
        }

        .register-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        .register-form button {
            width: 100%;
            padding: 10px;
            background-color: #003366;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .register-form button:hover {
            background-color: #002 244;
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

            .register-container {
                margin-top: 80px;
            }

            .register-form {
                width: 100%;
                padding: 20px;
            }
        }

        .alert {
            justify-content: center;
            display: flex;
        }

        .btn {
            margin-top: 20px;
            float: right;
        }

        .btn-secondary {
            background-color: #ff4a52;
            padding-right: 10px;
            float: left;
        }
    </style>
</head>
<body>
    <?php include "layout/headerforum.html" ?>

    <div class="register-container">
        <h2>REGISTRASI TURNAMEN VALORANT</h2>
        <?php if ($gagal) {
            ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $gagal; ?>
            </div>
        <?php
        }
        ?>

        <?php if ($sukses) {
            ?>
            <div class="alert alert-success" role="alert">
                <?php echo $sukses; ?>
            </div>
        <?php
        }
        ?>
        <form class="register-form" method="POST">
            <label for="nim">NIM:</label>
            <input type="text" name="nim" id="nim" value="<?php echo $nim; ?>">

            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>">

            <label for="nick_name">NickName Valorant:</label>
            <input type="text" name="nick_name" id="nick_name" value="<?php echo $nick_name; ?>">

            <label for="nama_tim">Nama Tim:</label>
            <input type="text" name="nama_tim" id="nama_tim" value="<?php echo $nama_tim; ?>">

            <label for="prodi">Program Studi:</label>
            <input type="text" name="prodi" id="prodi" value="<?php echo $prodi; ?>">

            <button type="submit" name="submit" id="submit">Daftar</button>
            <a href="viewvalo.php" class="btn btn-primary">View</a>
            <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <?php include "layout/footer.html"; ?>
</body>
</html>