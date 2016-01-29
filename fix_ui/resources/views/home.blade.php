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
                      <label class="control-label" for="lunch">Jenis Surat</label>
                    <div class="form-group">
                      <select id="surat" name="tpl" class="form-control selectpicker" data-live-search="true" title="Pilih Jenis Surat" >
                        <option value="cuti_besar.docx">Cuti Besar</option>
                        <option value="cuti_haji.docx">Cuti Haji</option>
                        <option value="cuti_umroh.docx">Cuti Umroh</option>
                        <option value="cuti_alasan_penting.docx">Cuti Alasan Penting</option>
                        <option value="cuti_tahunan.docx">Cuti Tahunan</option>
                        <option value="ijin_belajar.docx">Ijin Belajar</option>
                        <option value="ijin_cuti_bersalin_naban.docx">Ijin Cuti Bersalin Naban</option>
                        <option value="ijin_cuti_bersalin.docx">Ijin Cuti Bersalin</option>
                        <option value="ijin_cuti_sakit.docx">Ijin Cuti Sakit</option>
                        <option value="pengajuan_taspen.docx">Pengajuan Taspen</option>
                        <option value="pensiun_janda.docx">Pensiun Janda</option>
                        <option value="permohonan_pensiun.docx">Permohonan Pensiun</option>
                        <option value="plt(penunjukkan).docx">PLT(Penunjukkan)</option>
                        <option value="rekomendasi.docx">Rekomendasi KA Dinas</option>
                        <option value="seleksi_masuk_perguruan_tinggi.docx">Seleksi Masuk Perguruan Tinggi</option>
                        <option value="SPMJ.docx">SPMJ(Surat Pernyataan Telah Menduduki Jabatan</option>
                        <option value="SPMT.docx">SPMT(Surat Pernyataan Melakukan Tugas</option>
                        <option value="SPPD.docx">SPPD(Surat Perintah Perjalanan Dinas)</option>
                        <option value="keterangan_anak_yatim.docx">Keterangan Anak Yatim</option>
                        <option value="keterangan_tidak_dihukum.docx">Keterangan Sedang Tidak Menjalani Hukuman</option>
                        <option value="laporan_kematian.docx">Laporan Kematian</option>
                        <option value="pembatalan_permohonan_cuti.docx">Pembatalan Permohonan Cuti Besar</option>
                        <option value="surat_tugas.docx">Surat Perintah Tugas</option>
                      </select>
                    </div>
                       <div class="form-group" >
                       <label class="control-label" for="kepada">Kepada</label>
                            <input name="kepada" id="kepada" type="text" class="form-control"/>
                      </div>


                      <div class="form-group" id="grpid">
                      <label class="control-label" for="grp_id">Jumlah Identitas</label><br>
                        <select id="jml_id" name="jml_id" class="form-control selectpicker">
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
                       <label class="control-label" for="NIP">Masukkan NIP</label>
                            <input name="NIP1" id="NIP1" type="text" class="form-control"/>
                      </div>
                      <div class="form-group" id="grpnip2">
                       <label class="control-label" for="NIP2">Masukkan NIP 2</label>
                            <input name="NIP2" id="NIP2" type="text" class="form-control" />
                      </div>
                      <div class="form-group" id="grpnip3">
                       <label class="control-label" for="NIP3">Masukkan NIP 3</label>
                            <input name="NIP3" id="NIP3" type="text" class="form-control"/>
                      </div>
                      <div class="form-group" id="grpnip4">
                       <label class="control-label" for="NIP4">Masukkan NIP 4</label>
                            <input name="NIP4" id="NIP3" type="text" class="form-control"/>
                      </div>
                      <div class="form-group" id="grpnip5">
                       <label class="control-label" for="NIP5">Masukkan NIP 5</label>
                            <input name="NIP5" id="NIP5" type="text" class="form-control"/>
                      </div>
                      <div class="form-group" id="grpnip6">
                       <label class="control-label" for="NIP6">Masukkan NIP 6</label>
                            <input name="NIP6" id="NIP6" type="text" class="form-control"/>
                      </div>
                      <div class="form-group" id="grpnip7">
                       <label class="control-label" for="NIP7">Masukkan NIP 7</label>
                            <input name="NIP7" id="NIP7" type="text" class="form-control"/>
                      </div>
                      <div class="form-group" id="grpnip8">
                       <label class="control-label" for="NIP8">Masukkan NIP 8</label>
                            <input name="NIP8" id="NIP8" type="text" class="form-control"/>
                      </div>
                      <div class="form-group" id="grpnip9">
                       <label class="control-label" for="NIP9">Masukkan NIP 9</label>
                            <input name="NIP9" id="NIP9" type="text" class="form-control"/>
                      </div>
                      <div class="form-group" id="grpnip10">
                       <label class="control-label" for="NIP10">Masukkan NIP 10</label>
                            <input name="NIP10" id="NIP10" type="text" class="form-control"/>
                      </div>


                        <td>&nbsp;</td>
                        <input type="submit" name="btn_result" value="Cetak" class="btn btn-primary" />
                        <!--        
                        <input type="submit" name="btn_template" value="See template" />
                        <input type="submit" name="btn_script" value="See PHP script" /> 
                        -->
                       
                  </form>
                    <div class="col-xs-7">
                        <h4>Petunjuk Penggunaan</h4>
                        <ol>
                          <li>Pilih jenis surat yang akan dibuat</li>
                          <li>Masukkan penerima surat</li>
                          <li>Masukkan NIP</li>
                          <li>Klik Cetak</li>
                        </ol>
                        <p>Setelah Anda memilih cetak maka file akan otomatis terunduh melalui browser yang Anda gunakan saat ini.</p>                            
                        
                      
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

<script>
    for(i=2; i<=10; i++){
      $('#grpnip'+i).hide();
    }
    $('#grpid').hide();
    $('#surat').on('change', function() {
    if($(this).val() == "ijin_belajar.docx" || $(this).val() == "cuti_besar.docx" || $(this).val() == "pengajuan_taspen.docx" || $(this).val() == "permohonan_pensiun.docx" || $(this).val() == "cuti_haji.docx") {
      $('#grpid').show();
    } 
    else{
      $('#grpid').hide();
      for(i=2; i<=10; i++){
                                $('#grpnip'+i).hide();
                              }

                            }
                        });

                        $('#jml_id').on('change', function() {
                            if($(this).val() == "1" ) {
                                $('#grpnip').show();

                              for(i=2; i<=10; i++){
                                //document.getElementById('NIP'+i).value = "";
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
@show