<div class="container mt-5">

    <div class="row">
        <div class="col-6">
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
        
        </div> 

    </div>

</div>