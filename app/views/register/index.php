<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $data['title-page'] ?> | Pengaduan Masyarakat</title>

    <!-- Custom fonts for this template-->
    <link href="<?= BASE_URL ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= BASE_URL ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5" >
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row d-flex justify-content-center">
                    
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Pengaduan Masyarakat!</h1>
                            </div>
                            <form action="<?= BASE_URL ?>auth/tryRegister/" method="post" class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="" class="font-weight-bold" style="font-size: 13px;">Nama Lengkap <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-user" maxlength="50" required
                                             placeholder="Masukan Nama Lengkap..." name="nama_lengkap">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="" class="font-weight-bold" style="font-size: 13px;">NIK <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-user" minlength="16" maxlength="16" required
                                             placeholder="Masukan NIK..." name="nik">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="" class="font-weight-bold" style="font-size: 13px;">Tempat Tinggal <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-user"maxlength="50" required
                                             placeholder="Masukan Tempat Tinggal..." name="tempat_tinggal">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="" class="font-weight-bold" style="font-size: 13px;">Tanggal Lahir <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control form-control-user" required
                                             placeholder="Masukan Tanggal Lahir..." name="tanggal_lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="" class="font-weight-bold" style="font-size: 13px;">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control form-control-user" maxlength="50" required
                                             placeholder="Masukan Email Address..." name="email_address">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="" class="font-weight-bold" style="font-size: 13px;">Nomor Hp <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-user" maxlength="15" minlength="10" required onkeypress="return justNumber(event)" autocomplete="off"
                                             placeholder="Masukan Nomor Hp..." name="no_hp"> 
                                    </div>
                                </div>
                                <div class="forn-group mb-4">
                                <label for="" class="font-weight-bold" style="font-size: 13px;">Password <span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password minimal 8 - 12 karakter...">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= BASE_URL ?>auth/login/">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= BASE_URL ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASE_URL ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= BASE_URL ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= BASE_URL ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>