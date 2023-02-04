

                <!-- Begin Page Content -->
                <div class="container">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Instansi</h1>
                        <a href="<?= BASE_URL ?>instansi/tambah/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Tambah Instansi</a>
                    </div>

                    


                    <!-- Content Row -->
                    <div class="row container">
                        
                        <table class="table">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Instansi</th>
                                    <th scope="col">Aksi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach($data['instansi'] as $key => $instansi) : ?>
                                    <tr class="text-center font-weight-bold">
                                        <th scope="row"><?= $key+1; ?></th>
                                        <td><?= $instansi['nama_instansi']; ?></td>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <a href="<?= BASE_URL ?>instansi/edit/ <?= $instansi['id_instansi'] ?>" class="text-primary mx-4">Edit </a>
                                                <form action="<?= BASE_URL ?>instansi/delete/ <?= $instansi['id_instansi'] ?>" method="post" >
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
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

            