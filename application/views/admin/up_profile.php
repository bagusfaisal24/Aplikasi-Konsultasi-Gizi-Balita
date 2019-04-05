
<div class="container">
<div class="row">
    <div class="col-md-6">
        <form method="POST" action="<?php echo base_url(); ?>/administrator/Index/updateProfile" onsubmit="return cekData();">
            <h3>Form Ubah Data Profil</h3></br>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $gejala['nama']; ?>" required>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $gejala['alamat']; ?>" required>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo $gejala['username']; ?>" required>
            </div>

            <div class="form-group"  >
                <label>Password Baru</label>
                <input type="password"  class="form-control" name="password" id="password" value="<?php echo $gejala['password']; ?>"  hidden>
            </div>


            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
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
