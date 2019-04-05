<script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
  </script>
<div class="container">
<div class="row">
    <div class="col-md-6">
        <form method="POST" action="<?php echo base_url(); ?>/pakar/Gejala/updategejala/<?php echo $id; ?>">
            <h3>Form Ubah Data Gejala</h3></br>
            <div class="form-group">
                <label>Gejala</label>
                <input type="text" class="form-control" name="gejala"  value="<?php echo $gejala['gejala']; ?>"  required>
            </div>

            <div class="form-group">
                <label>Klasifikasi</label>
                <input type="text" class="form-control" name="klasifikasi"   value="<?php echo $gejala['klasifikasi']; ?>" required>
            </div>

            <div class="form-group">
                <label>Bobot</label>
                <input type="text" class="form-control" name="Bobot"   value="<?php echo $gejala['Bobot']; ?>" required>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
    </div>
</div>
</div>
