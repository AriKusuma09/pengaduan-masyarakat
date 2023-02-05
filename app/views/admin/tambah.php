

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    


                    <!-- Content Row -->
                    <div class="row">

                        
                        <div class="mx-auto shadow p-5 mb-4" style="width: 700px;">

                            <div class="bg-primary text-white text-center pl-2 pr-2 pt-3 pb-2 mb-4">
                                <h3 class="font-weight-bold">Tambah Admin</h3>
                            </div>
                            <form action="<?= BASE_URL ?>admin/TambahAdmin/" method="post">

                                <div class="form-group">
                                    <label for="">Username Admin</label>
                                    <input type="text" name="username" class="form-control" placeholder="Masukan Username Admin..." style="width: 100%;" maxlength="50">
                                </div>
                                <div class="form-group">
                                    <label for="">Email Admin</label>
                                    <input type="email" name="email" class="form-control" placeholder="Masukan Email Admin..." style="width: 100%;" maxlength="50">
                                </div>
                                <div class="form-group">
                                    <label for="">Password Admin</label>
                                    <input type="password" name="password" class="form-control" placeholder="Masukan Password Admin..." style="width: 100%;" maxlength="20">
                                </div>
                                
    
                                <div class="text-right">
                                    <button class="btn btn-primary" type="submit">Buat Admin Baru!</button>
                                </div>

                            </form>
                        </div>
                        
                        
                    </div>

                </div>
                <!-- /.container-fluid -->

            