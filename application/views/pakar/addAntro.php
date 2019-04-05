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
        <form method="POST" action="<?php echo base_url(); ?>/pakar/Antropometri/addantro/" onsubmit="return klik();">
              <h3>Form Tambah Data Anthropometri</h3></br>
            <div class="form-group">
              <label>Nama Balita</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" placeholder="Masukan Nama Balita" required>
            </div>

            <div class="form-group">
                <label>Tinggi Badan (Cm)</label>
                <input type="number" step="any" class="form-control" name="tinggi_badan" onkeypress="hanyaAngka()"  placeholder="Masukan Tinggi Badan" required>
            </div>

            <div class="form-group">
                <label>Berat Badan (Cm)</label>
                <input type="number" step="any" class="form-control" name="berat_badan" placeholder="Masukan Berat Badan" required>
            </div>

            <div class="form-group">
                <label>Umur (Bln)</label>
                <input type="number" id="umur" class="form-control" name="umur" placeholder="Masukan Umur"  required>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label></br>
                    <label><input type="radio" class="form-control" name="jenis_kelamin" value="Laki-laki" >Laki-laki</label>
                    <label><input type="radio" class="form-control" name="jenis_kelamin" value="Perempuan" >Perempuan</label>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
    </div>
</div>
</div>
<script>
function klik(){
    umur = $('#umur').val();
  if(umur<6){
    alert("UMUR tidak boleh kurang dari 6 bulan");
    return false;
  }else if( umur>72 ){
    alert("UMUR tidak boleh kurang dari 72 bulan");
    return false;
  }else{
    return true;
  }
}
</script>
