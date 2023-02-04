

                <!-- Begin Page Content -->
                <div class="container">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Petugas</h1>
                        <a href="<?= BASE_URL ?>petugas/tambah/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Tambah Petugas</a>
                    </div>

                    


                    <!-- Content Row -->
                    <div class="row container">
                        
                        <table class="table">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th scope="col">No.</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Instansi</th>
                                    <th scope="col">Aksi</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                

                                <?php foreach($data['petugas'] as $key => $petugas ) : ?>
                                
                                    <tr class="text-center font-weight-bold">
                                        <th scope="row"><?= $key+1; ?></th>
                                        <td><?= $petugas['username_petugas']; ?></td>
                                        <td><?= $petugas['email_petugas']; ?></td>
                                        <td><?= $petugas['nama_instansi']; ?></td>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <a href="" class="text-primary mx-4">Edit </a>
                                                <form action="" method="post" >
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>   
                                
                                <?php endforeach; ?>
                             
                            </tbody>
                        </table>

                    </div>

                </div>
                <!-- /.container-fluid -->

            