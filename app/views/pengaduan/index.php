



    <section class="body-bg">
        <div class="container body-pengaduan d-flex justify-content-center align-items-center">
            <div class="laporan-form shadow-lg">
                <div class="text-center bg-primary text-white pt-3 pr-3 pb-2 pl-2 mb-4">
                    <h2>Sampaikan Laporan Anda!</h2>
                </div>
                <form action="<?= BASE_URL ?>pengaduan/aduLaporan/" method="post" >
                    <div class="form-group">
                        <label class="text-dark" for="">Judul Laporan <span class="text-danger">*</span></label>
                        <input type="text" name="judulLaporan" maxlength="50" required class="form-control" placeholder="Masukan judul laporan..." style="width: 100%;">
                    </div>
                    <div class="form-group">
                        <label class="text-dark" for="">Isi Laporan <span class="text-danger">*</span></label>
                        <textarea required name="isiLaporan" id="" cols="30" rows="10" class="form-control" placeholder="Masukan isi laporan..."></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-dark" for="">Nama Pelapor <span class="text-danger">*</span></label>
                        <?php if(isset($_SESSION['logged'])) : ?>
                            <input value="<?= $_SESSION['user']['nama_lengkap']; ?>" type="text" name="namaPelapor" maxlength="50" required class="form-control" placeholder="Masukan nama pelapor..." style="width: 100%;">
                        <?php else : ?>
                            <input type="text" name="namaPelapor" maxlength="50" required class="form-control" placeholder="Masukan nama pelapor..." style="width: 100%;">
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label class="text-dark" for="">Nomor Telepon Pelapor <span class="text-danger">*</span></label>
                        <?php if(isset($_SESSION['logged'])) : ?>
                            <input value="<?= $_SESSION['user']['no_hp'] ?>" type="text" name="nomorTelepon" maxlength="15" required class="form-control" placeholder="Masukan nomor telepon..." style="width: 100%;">
                        <?php else : ?>
                            <input type="text" name="nomorTelepon" maxlength="15" required class="form-control" placeholder="Masukan nomor telepon..." style="width: 100%;">
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label class="text-dark" for="">Tanggal Kejadian <span class="text-danger">*</span></label>
                        <input type="date" name="tglKejadian" required class="form-control" placeholder="" style="width: 100%;">
                    </div>
                    <div class="form-group">
                        <label class="text-dark" for="">Lokasi Kejadian <span class="text-danger">*</span></label>
                        <input type="text" name="lokasiLaporan" maxlength="50" required class="form-control" placeholder="Masukan lokasi kejadian..." style="width: 100%;">
                    </div>
                    <div class="form-group">
                        <label class="text-dark" for="">Pilih Instansi Tujuan <span class="text-danger">*</span></label>
                        <select name="instansiLaporan" class="form-control" required>
                            <?php foreach($data['instansi'] as $instansi) : ?>
                                <option value="<?= $instansi['id_instansi'] ?>"><?= $instansi['nama_instansi']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group mb-5">
                        <label class="text-dark" for="">Pilih Kategori Laporan <span class="text-danger">*</span></label>
                        <select name="kategoriLaporan" id="" class="form-control" required>
                            <?php foreach($data['kategori'] as $kategori) : ?>
                                <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">Kirim Laporan!</button>
                    </div>
                </form>
            </div>
        </div>
    </section>



    