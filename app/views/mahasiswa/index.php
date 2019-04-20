<div class="container mt-3">
    <div class="row">
        <div class="col-lg-10">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10">
        
            <h3>Daftar Mahasiswa</h3>

           
                <table class="table table-borderless">
                    <thead>
                        <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">NIM</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">JURUSAN</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($data['mhs'] as $mhs) : ?>
                        <tr>
                        <th scope="row"><?=$mhs['id']?></th>
                        <td><?=  $mhs['nama'];?></td>
                        <td><?=  $mhs['nim']; ?></td>
                        <td><?=  $mhs['email']; ?></td>
                        <td><?=  $mhs['jurusan']; ?></td>
                        </tr>  
                        <?php endforeach;?>
                    </tbody>
                </table>
            
          
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data Mahasiswa
            </button>
            <br><br>
            <h3>Nama Mahasiswa</h3>

             <ul class="list-group mt-4 mb-4">
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama'];?>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'];?>" class="badge badge-danger float-right ml-2" onclick="return confirm('Yakin Hapus Data?');">Hapus</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'];?>" class="badge badge-success float-right ml-2 tampilModalUbah " data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id'];?>">Edit</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'];?>" class="badge badge-primary float-right ml-2">Detail</a>
                    </li>
                    <?php endforeach;?>
            </ul>
                            
        </div> 

    </div>

</div>

        <!-- Modal -->
        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <form action="<?= BASEURL;?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Pertambangan">Teknik Pertambangan</option>
                            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                            <option value="Ilmu Politik">Ilmu Politik</option>
                        </select>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
            </div>
        </div>
        </div>