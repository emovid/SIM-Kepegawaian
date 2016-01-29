<h4><b>Nomor Identitas</b></h4>
<hr/>
<div class="panel panel-group">
<div class="col-xs-12">
  <div class="col-xs-6">
    <div class="form-group">
    {!! Form::label('NIP', 'NIP') !!}
    {!! Form::text('nip', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-6">
    <div class="form-group">
    {!! Form::label('No Karpeg', 'No Karpeg') !!}
    {!! Form::text('no_karpeg', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
</div>
</div>

<h4><b>Data Pribadi</b></h4>
<hr/>
<div class="panel panel-group">

<div class="col-xs-12">
  <div class="col-xs-9">
    <div class="form-group">
    {!! Form::label('Nama', 'Nama') !!}
    {!! Form::text('nama', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-3">
    <div class="form-group">
      {!! Form::label('Jenis Kelamin', 'Jenis Kelamin') !!}
<?php
      
    if(isset($book->jenis_kelamin)) {
       $jenis_kelamin=$book->jenis_kelamin;
      }
    else{$jenis_kelamin='Pria';}
      
    $pilihan='Wanita';

    if($jenis_kelamin=='Wanita' || $jenis_kelamin=='WANITA'){
        $pilihan='Pria';
    }
?>
      {!! Form::select('jenis_kelamin', [$jenis_kelamin => $jenis_kelamin, $pilihan => $pilihan], null, ['class'=>'form-control']) !!}
    </div>
  </div>
</div>
<div class="col-xs-12">
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('Agama', 'Agama') !!}
    
<?php
      
    if(isset($book->agama)) {
       $agama=$book->agama;
      }
    else{$agama='ISLAM';}

    $pilihan1='KATHOLIK';
    $pilihan2='KRISTEN';
    $pilihan3='HINDU';
    $pilihan4='BUDHA';
    

    switch ($agama) {
    case "KATHOLIK":
    $pilihan1='ISLAM';
    $pilihan2='KRISTEN';
    $pilihan3='HINDU';
    $pilihan4='BUDHA';
    break;
    case "HINDU":
    $pilihan1='ISLAM';
    $pilihan2='KRISTEN';
    $pilihan3='KATHOLIK';
    $pilihan4='BUDHA';
    break;
    case "BUDHA":
    $pilihan1='ISLAM';
    $pilihan2='KRISTEN';
    $pilihan3='KATHOLIK';
    $pilihan4='BUDHA';
    break;
    case "KRISTEN":
    $pilihan1='ISLAM';
    $pilihan2='HINDU';
    $pilihan3='KATHOLIK';
    $pilihan4='BUDHA';
    break;
  }
    

?>

    {!! Form::select('agama', [$agama => $agama, 
                              $pilihan1 => $pilihan1,
                              $pilihan2 => $pilihan2,
                              $pilihan3 => $pilihan3,
                              $pilihan4 => $pilihan4], null, ['class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('Tempat Lahir', 'Tempat Lahir') !!}
    {!! Form::text('tempat_lahir', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('Tanggal Lahir', 'Tanggal Lahir') !!}
    {!! Form::text('tanggal_lahir', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
</div>
</div>  

<h4><b>Tanggal Mulai Tugas</b></h4>
<hr/>
<div class="panel panel-group">
<div class="col-xs-12">
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('TMT CPNS', 'TMT CPNS') !!}
    {!! Form::text('tmt_cpns', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('TMT PNS', 'TMT PNS') !!}
    {!! Form::text('tmt_pns', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('TMT Pangkat Terakhir', 'TMT Pangkat Terakhir') !!}
    {!! Form::text('tmt_pangkat_terakhir', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
</div>

<h4><b>Jabatan & Kedudukan</b></h4>
<hr/>
<div class="panel panel-group">

<div class="col-xs-12">
  <div class="col-xs-6">
    <div class="form-group">
    {!! Form::label('Jabatan', 'Jabatan') !!}
    {!! Form::text('jabatan', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-6">
    <div class="form-group">
    {!! Form::label('Golongan', 'Golongan') !!}

    <?php
      
    if(isset($book->golongan)) {
       $golongan=$book->golongan;
      }
    else{$golongan='I/a';}

    $pilihan =array('Pilih Golongan','I/a','I/b','I/c','I/d','I/e','II/a','II/b','II/c','II/d','II/e','III/a','III/b','III/c','III/d','III/e','IV/a','IV/b','IV/c','IV/d','IV/e');

foreach($pilihan as $opsi){
  if($opsi == $golongan){
    $pilihan[0]=$opsi;
  }
}
     
    
?>

{!! Form::select('golongan', [
                              $pilihan[0] => $pilihan[0], 
                              $pilihan[1] => $pilihan[1],
                              $pilihan[2] => $pilihan[2],
                              $pilihan[3] => $pilihan[3],
                              $pilihan[4] => $pilihan[4],

                              $pilihan[5] => $pilihan[5], 
                              $pilihan[6] => $pilihan[6],
                              $pilihan[7] => $pilihan[7],
                              $pilihan[8] => $pilihan[8],
                              $pilihan[9] => $pilihan[9],


                              $pilihan[10] => $pilihan[10], 
                              $pilihan[11] => $pilihan[11],
                              $pilihan[12] => $pilihan[12],
                              $pilihan[13] => $pilihan[13],
                              $pilihan[14] => $pilihan[14],

                              $pilihan[15] => $pilihan[15], 
                              $pilihan[16] => $pilihan[16],
                              $pilihan[17] => $pilihan[17],
                              $pilihan[18] => $pilihan[18],
                              $pilihan[19] => $pilihan[19],
                              $pilihan[20] => $pilihan[20]
                              
                              ], null,['class'=>'form-control']) !!}
    </div>
  </div>
</div>
<div class="col-xs-12">
  <div class="col-xs-6">
    <div class="form-group">
    {!! Form::label('Unit Kerja', 'Unit Kerja') !!}
    {!! Form::text('unit_kerja', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-6">
    <div class="form-group">
    {!! Form::label('Instansi', 'Instansi') !!}
    {!! Form::text('instansi', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
</div>
  
<h4><b>Pendidikan</b></h4>
<hr/>
<div class="panel panel-group">
  
<div class="col-xs-12">
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('Pendidikan Terakhir', 'Jenjang Pendidikan Terakhir') !!}
    {!! Form::text('pendidikan_terakhir', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('Pendidikan Tahun Lulus', 'Tahun Lulus') !!}
    {!! Form::text('pendidikan_tahun_lulus', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('Pendidikan Universitas', 'Nama Instansi Pendidikan') !!}
    {!! Form::text('pendidikan_univ', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
</div>
  
<div class="col-xs-12">
  <div class="col-xs-7">
    <div class="form-group">
    {!! Form::label('Pendidikan Tempat', 'Lokasi Instansi Pendidikan') !!}
    {!! Form::text('pendidikan_tempat', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-5">
    <div class="form-group">
    {!! Form::label('Pendidikan Jurusan', 'Jurusan') !!}
    {!! Form::text('pendidikan_jurusan', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
</div>
</div>

<h4><b>Status Pernikahan</b></h4>
<hr/>
<div class="panel panel-group">
  <div class="col-xs-12">
    <div class="col-xs-3">
    <div class="form-group">
        {!! Form::label('Status', 'Status') !!}
        {!! Form::text('status', null, ['class'=> 'form-control']) !!}
    </div>
    </div>
  </div>
</div>


<div class="col-xs-12">
   <a class="btn btn-primary" href="{{ url('getData')}}">Kembali</a>
    <div style="float:right">
    {!! Form::submit($submitTextButton, array('class' => 'btn btn-warning')) !!}
    </div>
</div>
 

