
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

  <!-- BEGIN syntax highlighter -->
  <script type="text/javascript" src="sh/shCore.js"></script>
  <script type="text/javascript" src="sh/shBrushJScript.js"></script>
  <link type="text/css" rel="stylesheet" href="sh/shCore.css"/>
  <link type="text/css" rel="stylesheet" href="sh/shThemeDefault.css"/>
  <script type="text/javascript">
    SyntaxHighlighter.all();
  </script>
  <!-- END syntax highlighter -->

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.searchabledropdown-1.0.8.min.js"></script>
  
  
  <script type="text/javascript">
    $(document).ready(function() {
      $("select").searchable();
    });
  
  
    // demo functions
    $(document).ready(function() {
      $("#value").html($("#surat :selected").text() + " (VALUE: " + $("#surat").val() + ")");
      $("select").change(function(){
        $("#value").html(this.options[this.selectedIndex].text + " (VALUE: " + this.value + ")");
      });
    });
  
    function modifySelect() {
      $("select").get(0).selectedIndex = 5;
    }
  
    function appendSelectOption(str) {
      $("select").append("<option value=\"" + str + "\">" + str + "</option>");
    }
  
    function applyOptions() {       
      $("select").searchable({
        maxListSize: $("#maxListSize").val(),
        maxMultiMatch: $("#maxMultiMatch").val(),
        latency: $("#latency").val(),
        exactMatch: $("#exactMatch").get(0).checked,
        wildcards: $("#wildcards").get(0).checked,
        ignoreCase: $("#ignoreCase").get(0).checked
      });
  
      alert(
        "OPTIONS\n---------------------------\n" + 
        "maxListSize: " + $("#maxListSize").val() + "\n" +
        "maxMultiMatch: " + $("#maxMultiMatch").val() + "\n" +
        "exactMatch: " + $("#exactMatch").get(0).checked + "\n"+
        "wildcards: " + $("#wildcards").get(0).checked + "\n" +
        "ignoreCase: " + $("#ignoreCase").get(0).checked + "\n" +
        "latency: " + $("#latency").val()
      );
    }
  </script>
  <style type="text/css">
    body {
      font-family: sans-serif;
      font-size: 13px;
    }
    
    h1 {
      font-size: 20px;
    }
    
    h2 {
      font-size: 16px;
      margin: 50px 0 8px 0;
    }
    
    h3 {
      font-size: 14px;
    }
  </style>
</head>

<body>


<!-- main-body is used for insertion in the TBS menu -->
<div id="main-body">

<form id="form1" method="post" action="demo_merge.php">
  <table border="0" cellspacing="4" cellpadding="0">
    <tr>
      <td>Jenis Surat :</td>
      <td><select name="surat">
        <option value="1">Cuti Besar</option>
        <option value="2">Cuti Haji Umroh</option>
        <option value="3">Cuti Tahunan Penting</option>
        <option value="4">Ijin Belajar</option>
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
      </select></td>
    </tr>

    <tr>
      <td scope="col">Masukkan NIP :</td>
      <td scope="col"><input name="NIP" type="text" size="10" /> <i>(will be displayed in the merged result)</i></td>
    </tr>
    <tr>
      <td>Choose a template :</td>
      <td><select name="tpl">
        <!--
        <option value="demo_oo_text.odt">OpenOffice Writer Document (.odt)</option>
        <option value="demo_oo_spreadsheet.ods">OpenOffice Calc Spreadsheet (.ods)</option>
        <option value="demo_oo_presentation.odp">OpenOffice Impress Presentation (.odp)</option>
        -->
        <option value="demo1.docx">Demo1(.docx)</option>
        <option value="demo2.docx">Demo2(.docx)</option>
        <option value="demo3.docx">Demo3(.docx)</option>
        <option value="demo_oo_graph.odg">OpenOffice Draw Graphic (.odg)</option>
        <option value="demo_oo_formula.odf">OpenOffice Math Formula (.odf)</option>
        <option value="demo_ms_word.docx">Ms Word Document (.docx)</option>
        <option value="demo_ms_excel.xlsx">Ms Excel SpreadSheet (.xlsx)</option>
        <option value="demo_ms_powerpoint.pptx">Ms PowerPoint Presentation (.pptx)</option>
      </select></td>
    </tr>
    <tr>
    <!--
      <td>Debug :</td>
      <td><select name="debug">
        <option value="" selected="selected">No</option>
        <option value="info">General Information</option>
        <option value="current">During merge</option>
        <option value="show">After merge</option>
      </select></td>
    </tr>
    <tr id="save_as_file" style="display:none;">
      <td>Save locally with suffix :</td>
      <td><input name="save_as" type="text" size="10" /> <i>(leave empty for direct download)</i></td>
    </tr>
    -->
    <tr>
      <td>&nbsp;</td>
      <td>
        <input type="submit" name="btn_result" value="Merge" />
        <!--        
        <input type="submit" name="btn_template" value="See template" />
        <input type="submit" name="btn_script" value="See PHP script" /> 
        -->
      </td>
    </tr>
  </table>
</form>



<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">_uacct = "UA-157533-3"; urchinTracker(); </script>

</body>
<script type="text/javascript">
    // enable the option for savegin as a file, the PHP script will test if it is running on localhost anyway.
    if (window.location.hostname=='localhost') document.getElementById('save_as_file').style.display='table-row';
</script>
</div>
</html>

