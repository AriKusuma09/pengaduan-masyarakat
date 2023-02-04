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
                                <h1 class="h4 text-gray-900 mb-4">Login Pengaduan Masyarakat!</h1>
                            </div>
                            <form action="<?= BASE_URL ?>auth/tryLogin/" method="post" class="user">
                                <div class="forn-group mb-4">
                                    <label for="" class="font-weight-bold" style="font-size: 13px;">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" name="email_address" class="form-control form-control-user" placeholder="Masukan Email Address...">
                                </div>

                                <div class="forn-group mb-4">
                                    <label for="" class="font-weight-bold" style="font-size: 13px;">Password <span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control form-control-user" placeholder="Masukan Password...">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= BASE_URL ?>auth/register/">Don't have an account? Register!</a>
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