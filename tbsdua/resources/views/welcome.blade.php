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
        <option value="demo3.docx">Cuti Tahunan Penting</option>
        <option value="4">Ijin Belajar</option>
        <option value="demo1.docx">Ijin Cuti Bersalin Naban</option>
        <option value="6">Ijin Cuti Bersalin</option>
        <option value="7">Ijin Cuti Sakit Walikota</option>
        <option value="8">Ijin Cuti Sakit</option>
        <option value="9">Keuangan Bulanan</option>
        <option value="10">Koperasi Lina</option>
        <option value="11">Pengajuan Taspen</option>
        <option value="12">Pensiun Janda</option>
        <option value="13">Pensiun, Sakit, Walikota</option>
        <option value="14">Permohonan Ijin Belajar</option>
        <option value="15">Permohonan Pensiun</option>
        <option value="16">PLT(Penunjukkan)</option>
        <option value="17">Rekomendasi KA Dinas</option>
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
        
for( i=2; i<=10; i++ ){
        $('#grpnip'+ i).hide();
}
        $('#surat').on('change', function() {
    if($(this).val() == "demo3.docx" || $(this).val() == "demo1.docx" ) {
       for( i=2; i<=10; i++ ){
        $('#grpnip'+ i).show();
}


    } 
    else{
      for( i=2; i<=10; i++ ){
        $('#grpnip'+ i).hide();
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
