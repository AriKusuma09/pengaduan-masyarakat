

                <!-- Begin Page Content -->
                <div class="container">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
                        <a href="<?= BASE_URL ?>kategori/tambah/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Tambah Kategori</a>
                    </div>

                    


                    <!-- Content Row -->
                    <div class="row container">
                        
                        <table class="table">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Kategori</th>
                                    <th scope="col">Aksi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data['kategori'] as $key => $kategori) : ?>

                                <tr class="text-center font-weight-bold">
                                    <th scope="row"><?= $key+1; ?></th>
                                    <td><?= $kategori['nama_kategori']; ?></td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="<?= BASE_URL ?>kategori/edit/ <?= $kategori['id_kategori'] ?>" class="text-primary mx-4">Edit </a>
                                            <form action="<?= BASE_URL ?>kategori/delete/ <?= $kategori['id_kategori'] ?>" method="post" >
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

            