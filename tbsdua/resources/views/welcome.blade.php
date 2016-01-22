<!DOCTYPE html>
<html>
<head>
  <title>SIM-Kepegawaian</title>

  <meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/bootstrap-select.css">

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
      <label class="control-label" for="lunch">Jenis Surat:</label>
    <div class="form-group">
      <select id="lunch" name="tpl" class="selectpicker" data-live-search="true" title="Pilih Jenis Surat" >
       <option value="demo1.docx">Cuti Besar</option>
        <option value="demo2.docx">Cuti Haji Umroh</option>
        <option value="demo3.docx">Cuti Tahunan Penting</option>
        <option value="demo_ms_word.docx">Ijin Belajar</option>
        <option value="5">Ijin Cuti Bersalin Naban</option>
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


<div class="form-group">
 <label class="control-label" for="NIP">Masukkan NIP:</label>
      <input name="NIP" id="NIP" type="text" class="form-control"/>
</div>




      <td>&nbsp;</td>
        <input type="submit" name="btn_result" value="Merge" class="btn btn-success" />
        <!--        
        <input type="submit" name="btn_template" value="See template" />
        <input type="submit" name="btn_script" value="See PHP script" /> 
        -->
    
    

  </form>





  

<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
</body>

<script type="text/javascript">
  // enable the option for savegin as a file, the PHP script will test if it is running on localhost anyway.
  if (window.location.hostname=='localhost') document.getElementById('save_as_file').style.display='table-row';
</script>
</html>
