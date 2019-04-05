<div class="container">
<div class="row">
    <div class="col-md-6">
        <form method="POST" action="<?php echo base_url(); ?>pakar/Gejala/add/">
            <h3>Form Tambah Data Gejala</h3></br>
            <?php foreach ($data as $gejala) ?>
            <div class="form-group">
                <label>ID Gejala</label>
                <input type="text" class="form-control" name="id_gejala" placeholder="Masukan ID Gejala" placeholder="Masukan ID Gejala" required>
            </div>

            <div class="form-group">
                <label>ID Kriteria</label>
              <input type="text" class="form-control" name="fk_id_kriteria"  value="<?php echo $gejala['fk_id_kriteria']; ?>"  readonly>
            </div>

            <div class="form-group">
                <label>Gejala</label>
                <input type="text" class="form-control" name="gejala" placeholder="Masukan Gejala" required>
            </div>

            <div class="form-group">
                <label>Klasifikasi</label>
                <input type="text" class="form-control" name="klasifikasi"  placeholder="Masukan Klasifikasi" required>
            </div>

            <div class="form-group">
                <label>Bobot</label>
                <input type="text" class="form-control" name="Bobot" placeholder="Masukan Bobot" required>
            </div>


            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
    </div>
</div>
</div>
