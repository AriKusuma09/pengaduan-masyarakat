<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title-page']; ?> | Pengaduan Masyarakat</title>

    <link href="<?= BASE_URL ?>assets/css/style.css" rel="stylesheet">

    <link href="<?= BASE_URL ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= BASE_URL ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    

</head>
<body class="body">
    
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container py-1 font-weight-bold">
            <a class="navbar-brand" href="<?= BASE_URL ?>">Pengaduan Masyarakat</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse ml-2" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= BASE_URL ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>pengaduan/">Buat Laporan</a>
                    </li>
                </ul>
                
                <?php if(isset($_SESSION['logged'])) : ?>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                <?php if(isset($_SESSION['user']['nama_lengkap'])) : ?>
                                    <?= $_SESSION['user']['nama_lengkap'] ?>
                                <?php elseif (isset($_SESSION['petugas']['username_petugas'])) : ?>
                                    <?= $_SESSION['petugas']['username_petugas'] ?>
                                <?php elseif (isset($_SESSION['admin']['username_admin'])) : ?>
                                    <?= $_SESSION['admin']['username_admin'] ?>    
                                <?php endif; ?> 
                            </a>
                            <div class="dropdown-menu">
                                <?php if(isset($_SESSION['petugas']['id_petugas'])) : ?>
                                    <a class="dropdown-item font-weight-bold" href="<?= BASE_URL ?>dashboard/">Dashboard</a>
                                <?php endif; ?>
                                <?php if(isset($_SESSION['admin']['id_admin'])) : ?>
                                    <a class="dropdown-item font-weight-bold" href="<?= BASE_URL ?>dashboard/">Dashboard</a>
                                <?php endif; ?>
                                <?php if(isset($_SESSION['user']['id_masyarakat'])) : ?>
                                    <a class="dropdown-item font-weight-bold" href="<?= BASE_URL ?>user/edit/">Profile</a>
                                <?php endif; ?>
                                <a class="dropdown-item font-weight-bold" href="#" data-toggle="modal" data-target="#ModalLogout">Log Out</a>
                            </div>
                        </li>
                    </ul>
                <?php else : ?>
                    <a href="<?= BASE_URL ?>auth/login/" class="btn btn-outline-light my-2 my-sm-0 mx-1">Masuk</a>
                    <a href="<?= BASE_URL ?>auth/register/" class="btn btn-light my-2 my-sm-0 mx-1">Daftar</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>