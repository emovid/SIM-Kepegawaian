<!DOCTYPE html>
<html>
<head>
  <title>SIM-Kepegawaian</title>

  <meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/bootstrap-select.css">

  <script>
$('#surat').on('change',function(){
     var selection = $(this).val();
    switch(selection){
    case "4":
    $("#NIP2").show()
   break;
    default:
    $("#NIP2").hide()
    }
});
</script>

  <style>
    body {
      padding-top: 70px;
    }
  </style>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="dist/js/bootstrap-select.js"></script>
</head>
<body>

 <form role="form" id="form1" method="post" action="demo_merge.php" class="col-md-4 well">
      <label class="control-label" for="surat">Jenis Surat:</label>
    <div class="form-group">
      <select id="surat" name="tpl" class="selectpicker" data-live-search="true" title="Pilih Jenis Surat" >
       <option value="cuti_besar.docx">Cuti Besar</option>
        <option value="demo2.docx">Cuti Haji</option>
        <option value="cuti_umroh.docx">Cuti Umroh</option>
        <option value="cuti_alasan_penting.docx">Cuti Alasan Penting</option>
        <option value="cuti_tahunan.docx">Cuti Tahunan</option>
        <option value="ijin_belajar.docx">Ijin Belajar</option>
        <option value="ijin_cuti_bersalin_naban.docx">Ijin Cuti Bersalin Naban</option>
        <option value="ijin_cuti_bersalin.docx">Ijin Cuti Bersalin</option>
        <option value="7">Ijin Cuti Sakit Walikota</option>
        <option value="ijin_cuti_sakit.docx">Ijin Cuti Sakit</option>
        <option value="9">Keuangan Bulanan</option>
        <option value="10">Koperasi Lina</option>
        <option value="pengajuan_taspen.docx">Pengajuan Taspen</option>
        <option value="pensiun_janda.docx">Pensiun Janda</option>
        <option value="permohonan_pensiun.docx">Permohonan Pensiun</option>
        <option value="plt(penunjukkan).docx">PLT(Penunjukkan)</option>
        <option value="rekomendasi.docx">Rekomendasi KA Dinas</option>
        <option value="18">Seleksi Masuk Perguruan Tinggi</option>
        <option value="19">SPMJ(Surat Pernyataan Telah Menduduki Jabatan</option>
        <option value="20">SPMT(Surat Pernyataan Melakukan Tugas</option>
        <option value="21">SPPD(Surat Perintah Perjalanan Dinas)</option>
        <option value="22">Edaran</option>
        <option value="23">Pemberitahuan</option>
        <option value="24">Tugas 1</option>
        <option value="25">Tugas 2</option>
        <option value="26">Undangan</option>
      </select>
    </div>

<div class="form-group" >
 <label class="control-label" for="nomor_surat">Nomor Surat:</label>
      <input name="nomor_surat" id="nomor_surat" type="text" class="form-control"/>
</div>

      
    <div class="form-group" id="grpid">
    <label class="control-label" for="grp_id">Jumlah Identitas</label>
      <select id="jml_id" name="jml_id" class="selectpicker" data-live-search="true" title="Jumlah identitas" >
       <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
    </div>

<div class="form-group" >
 <label class="control-label" for="NIP">Masukkan NIP:</label>
      <input name="NIP1" id="NIP1" type="text" class="form-control"/>
</div>
<div class="form-group" id="grpnip2">
 <label class="control-label" for="NIP2">Masukkan NIP 2:</label>
      <input name="NIP2" id="NIP2" type="text" class="form-control"/>
</div>
<div class="form-group" id="grpnip3">
 <label class="control-label" for="NIP3">Masukkan NIP 3:</label>
      <input name="NIP3" id="NIP3" type="text" class="form-control"/>
</div>
<div class="form-group" id="grpnip4">
 <label class="control-label" for="NIP4">Masukkan NIP 4:</label>
      <input name="NIP4" id="NIP3" type="text" class="form-control"/>
</div>
<div class="form-group" id="grpnip5">
 <label class="control-label" for="NIP5">Masukkan NIP 5:</label>
      <input name="NIP5" id="NIP5" type="text" class="form-control"/>
</div>
<div class="form-group" id="grpnip6">
 <label class="control-label" for="NIP6">Masukkan NIP 6:</label>
      <input name="NIP6" id="NIP6" type="text" class="form-control"/>
</div>
<div class="form-group" id="grpnip7">
 <label class="control-label" for="NIP7">Masukkan NIP 7:</label>
      <input name="NIP7" id="NIP7" type="text" class="form-control"/>
</div>
<div class="form-group" id="grpnip8">
 <label class="control-label" for="NIP8">Masukkan NIP 8:</label>
      <input name="NIP8" id="NIP8" type="text" class="form-control"/>
</div>
<div class="form-group" id="grpnip9">
 <label class="control-label" for="NIP9">Masukkan NIP 9:</label>
      <input name="NIP9" id="NIP9" type="text" class="form-control"/>
</div>
<div class="form-group" id="grpnip10">
 <label class="control-label" for="NIP10">Masukkan NIP 10:</label>
      <input name="NIP10" id="NIP10" type="text" class="form-control"/>
</div>

<script>
        

for(i=2; i<=10; i++){
        $('#grpnip'+i).hide();
      }


        $('#grpid').hide();
        $('#surat').on('change', function() {
    if($(this).val() == "ijin_belajar.docx" || $(this).val() == "cuti_besar.docx" || $(this).val() == "pengajuan_taspen.docx" || $(this).val() == "permohonan_pensiun.docx") {
        $('#grpid').show();
    } 

    else{
        $('#grpid').hide();
    }
});

$('#jml_id').on('change', function() {
    if($(this).val() == "1" ) {
        $('#grpnip').show();
    
for(i=2; i<=10; i++){
        $('#grpnip'+i).hide();
      }
    }

    else if($(this).val() == "2" ) {
        $('#grpnip2').show();
    for(i=3; i<=10; i++){
        $('#grpnip'+i).hide();
      }
 
    }

else if($(this).val() == "3" ) {
        for(i=2; i<=3; i++){
        $('#grpnip'+i).show();
        
      }
      for(i=4; i<=10; i++){
        $('#grpnip'+i).hide();
      }

    }
else if($(this).val() == "4" ) {
        for(i=2; i<=4; i++){
        $('#grpnip'+i).show();
      
      }
      for(i=5; i<=10; i++){
        $('#grpnip'+i).hide();
      }
    }
else if($(this).val() == "5" ) {
        for(i=2; i<=5; i++){
        $('#grpnip'+i).show();
      
      }
      for(i=6; i<=10; i++){
        $('#grpnip'+i).hide();
      }
    }
else if($(this).val() == "6" ) {
        for(i=2; i<=6; i++){
        $('#grpnip'+i).show();
      }
      for(i=7; i<=10; i++){
        $('#grpnip'+i).hide();
      }
    }
    else if($(this).val() == "7" ) {
        for(i=2; i<=7; i++){
        $('#grpnip'+i).show();
      }
      for(i=8; i<=10; i++){
        $('#grpnip'+i).hide();
      }
    }
else if($(this).val() == "8" ) {
        for(i=2; i<=8; i++){
        $('#grpnip'+i).show();
      }
      for(i=9; i<=10; i++){
        $('#grpnip'+i).hide();
      }

    }
else if($(this).val() == "9" ) {
        for(i=2; i<=9; i++){
        $('#grpnip'+i).show();
      }
      $('#grpnip10').hide();
    }
else if($(this).val() == "10" ) {
        for(i=2; i<=10; i++){
        $('#grpnip'+i).show();
      }
    }



  });
    

    </script>


      <td>&nbsp;</td>
        <input type="submit" name="btn_result" value="Cetak" class="btn btn-success" />
        <!--        
        <input type="submit" name="btn_template" value="See template" />
        <input type="submit" name="btn_script" value="See PHP script" /> 
        -->
    
    

  </form>





  

</body>

<script type="text/javascript">
  // enable the option for savegin as a file, the PHP script will test if it is running on localhost anyway.
  if (window.location.hostname=='localhost') document.getElementById('save_as_file').style.display='table-row';
</script>
</html>
