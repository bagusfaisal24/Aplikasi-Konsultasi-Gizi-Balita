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
        <form method="POST" action="<?php echo base_url(); ?>/pakar/Antropometri/update/<?php echo $id; ?>">
            <h3>Form Ubah Data Anthropometri</h3></br>
            <div class="form-group">
                <label>Nama Balita</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" value="<?php echo $antro['nama']; ?>"  required>
            </div>

            <div class="form-group">
                <label>Tinggi Badan (Cm)</label>
                <input type="text" class="form-control" name="tinggi_badan" onkeypress="hanyaAngka()"  placeholder="Masukan Tinggi Badan" value="<?php echo $antro['tinggi_badan']; ?>" required>
            </div>

            <div class="form-group">
                <label>Berat Badan (Cm)</label>
                <input type="text" class="form-control" name="berat_badan" placeholder="Masukan Berat Badan" value="<?php echo $antro['berat_badan']; ?>" required>
            </div>

            <div class="form-group">
                <label>Umur (Bln)</label>
                <input type="text" class="form-control" name="umur" placeholder="Masukan Umur" value="<?php echo $antro['umur']; ?>"required>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label></br>
                    <label><input type="radio" class="form-control" name="jenis_kelamin" value="Laki-laki" <?php if($antro['jenis_kelamin']=='Laki-laki'){echo "checked";}?>>Laki-laki</label>
                    <label><input type="radio" class="form-control" name="jenis_kelamin" value="Perempuan" <?php if($antro['jenis_kelamin']=='Perempuan'){echo "checked";}?>>Perempuan</label>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
    </div>
</div>
</div>
<!-- <script>
function cekData(){
    password = $('#password').val();
    cpassword = $('#cpassword').val();

    if(password==cpassword) return true;
    else {

        alert("Pastikan Konfimasi Password benar");
        return false;
    }
}

</script> -->
