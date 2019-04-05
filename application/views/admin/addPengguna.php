
<div class="container">
<div class="row">
    <div class="col-md-6">
        <form method="POST" action="<?php echo base_url(); ?>/administrator/Index/tambahPengguna" onsubmit="return cekData();">
            <h3>Form Tambah Data Pengguna</h3></br>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Pengguna" required>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat" required>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label></br>
                    <label><input type="radio" class="form-control" name="jenis_kelamin" value="Laki-laki" >Laki-laki</label>
                    <label><input type="radio" class="form-control" name="jenis_kelamin" value="Perempuan" >Perempuan</label>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Masukan Username" required>
            </div>

            <div class="form-group"  >
                <label>Password</label>
                <input type="password"  class="form-control" name="password" id="password" placeholder="Masukan Password"  required>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password"  class="form-control" id="cpassword" placeholder="Konfirmasi Password"   required>
            </div>

            <div class="form-group">
                <label>Level</label>
                <select  class="form-control" name="level">
                <option value="0">0</option>
                <option value="1">1</option>
              </select>
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </div>
</div>
</div>
<script>
function cekData(){
    password = $('#password').val();
    cpassword = $('#cpassword').val();

    if(password==cpassword) return true;
    else {

        alert("Pastikan Konfimasi Password benar");
        return false;
    }
}

</script>
