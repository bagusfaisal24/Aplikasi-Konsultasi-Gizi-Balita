<!DOCTYPE html>
<html>
<head>
    <title></title>
   <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/textext.core.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/textext.plugin.tags.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/textext.plugin.autocomplete.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/textext.plugin.focus.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/textext.plugin.prompt.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/textext.plugin.arrow.css" type="text/css" />
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>/assets/js/textext.core.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url() ?>/assets/js/textext.plugin.tags.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url() ?>/assets/js/textext.plugin.autocomplete.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url() ?>/assets/js/textext.plugin.suggestions.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url() ?>/assets/js/textext.plugin.filter.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url() ?>/assets/js/textext.plugin.focus.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url() ?>/assets/js/textext.plugin.prompt.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url() ?>/assets/js/textext.plugin.ajax.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url() ?>/assets/js/textext.plugin.arrow.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-md-6">
        <form method="POST" action="<?php echo base_url(); ?>/pakar/Kasus/addKasus/" 
            onsubmit="return cekData();">
            <h3>Form Tambah Data Kasus</h3></br>
           
          <label>ID Antropometri</label>
            <input type="text" id="textarea" name="fk_id_master" />

            <!-- <textarea id="textarea" class="example" name="fk_id_master" rows="3" cols="30"/></textarea> -->

             <script type="text/javascript">
                $('#textarea')
                    .textext({
                        plugins : 'tags autocomplete'
                    })
                    .bind('getSuggestions', function(e, data)
                    { 

                      var list = [
                      <?php 
                            foreach ($kodeantro as $value) {
                               
                                if($value!=$kodeantro[count($kodeantro)-1])
                                echo "'".$value['id_master']."',";
                                else 
                                echo "'".$value['id_master']."'";
                                
                            }
                             ?>
                             ],
                            textext = $(e.target).textext()[0],
                            query = (data ? data.query : '') || ''
                            ;
            
                        $(this).trigger(
                            'setSuggestions',
                            { result : textext.itemManager().filter(list, query) }
                        );
                    })
                    ;
            </script> 

            <label>ID Gejala</label>
            <input type="text" id="gejala" name="fk_id_gejala" />
            
            <!-- <textarea id="gejala" class="example" name="fk_id_gejala" rows="3" cols="30"></textarea> -->
                       
             <script type="text/javascript">
                $('#gejala')
                    .textext({
                        plugins : 'tags autocomplete'
                    })
                    .bind('getSuggestions', function(e, data)
                    { 

                      var list = [
                      <?php 
                            foreach ($kodegejala as $value) {
                                if($value!=$kodegejala[count($kodegejala)-1])
                                echo "'".$value['id_gejala']."',";
                                else 
                                echo "'".$value['id_gejala']."'";
                                
                            }
                             ?>
                             ],
                            textext = $(e.target).textext()[0],
                            query = (data ? data.query : '') || ''
                            ;
            
                        $(this).trigger(
                            'setSuggestions',
                            { result : textext.itemManager().filter(list, query) }
                        );
                    })
                    ;
            </script>


            <div class="form-group">
                <label>Status Gizi</label>
                <select class="form-control" name="status_gizi">
                    <option value="Gizi Lebih">Gizi Lebih</option>
                    <option value="Gizi Baik">Gizi Baik</option>
                    <option value="Gizi Kurang">Gizi Kurang</option>
                    <option value="Gizi Buruk">Gizi Buruk</option>
                </select>
            </div>

            <div class="form-group">
                <label>Rekomendasi</label>
                <input type="text" class="form-control" name="rekomendasi" placeholder="Masukan Rekomendasi Nutrisi" required>
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        </form>
    </div>
</div>
</div>
</body>

<!-- <script>
    
function cekData(){
    id_master = $('#textarea').val();
    gejala = $('#gejala').val();
    
    if(id_master=="" && gejala=="") {
        alert("Form tidak boleh kosong");
         return false;
    }else{
        return true;    
    }
}
</script> -->

</html>
