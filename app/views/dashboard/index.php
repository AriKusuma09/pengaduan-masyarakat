

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard </h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    


                    <!-- Content Row -->
                    <div class="row">

                        
                        <div class="text-center d-flex justify-content-center align-items-center mx-auto flex-column" style="height: 50vh;">
                            <h2>Selamat Datang di Layanan Pengaduan Masyarakat</h2>
                            <?php if(isset($_SESSION['isLogged'])) : ?>
                                <a href="<?= BASE_URL ?>pengaduan/" class="btn btn-primary mt-3">Buat Laporan!</a>
                            <?php else : ?>
                                <a href="<?= BASE_URL ?>login/" class="btn btn-primary mt-3">Login!</a>
                            <?php endif; ?>
                        </div>
                        
                        
                    </div>

                </div>
                <!-- /.container-fluid -->

            