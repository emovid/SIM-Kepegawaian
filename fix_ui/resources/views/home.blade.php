@extends('layouts.app')

@section('head.style')
<link rel="stylesheet" href="css/bootstrap-select.css">
@show

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <ul class="nav nav-tabs">
                    <li class="active">
                      <a href="{{ url('/home') }}">Buat</a>
                    </li>
                    <li>
                      <a href="{{ url('/getData') }}">Data</a>
                    </li>
                  </ul>
                  <br>
                    
                     <form role="form" id="form1" method="post" action="demo_merge.php" class="col-md-5 well">
                      <label class="control-label" for="lunch">Jenis Surat:</label>
                    <div class="form-group">
                        
                      <select id="lunch" name="tpl" class="form-control selectpicker" data-live-search="true" title="Pilih Jenis Surat" >
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
                        <input type="submit" name="btn_result" value="Merge" class="btn btn-primary" />
                        <!--        
                        <input type="submit" name="btn_template" value="See template" />
                        <input type="submit" name="btn_script" value="See PHP script" /> 
                        -->



                  </form>
                    <div class="col-xs-7">
                        <h4>Keterangan</h4>
                        <ol>
                          <li>Pilih jenis surat yang akan dibuat</li>
                          <li>Masukkan Nomor Surat</li>
                          <li>Masukkan NIP</li>
                          <li>Masukkan data lain yang diperlukan</li>
                          <li>Klik Merge</li>
                        </ol>
                        <p>Setelah Anda memilih Merge maka file akan otomatis terunduh melalui browser yang Anda gunakan saat ini.</p>                            
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('body.script')
<script src="js/bootstrap-select.js"></script>
<script>
$(document).ready(function() {
    $('.selectpicker').selectpicker({
        style: 'btn-info',
        size: 4
    });
    
})
</script>
@show