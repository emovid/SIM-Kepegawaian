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
    {!! Form::text('jenis_kelamin', null, ['class'=> 'form-control']) !!}
    </div>
  </div>
</div>
<div class="col-xs-12">
  <div class="col-xs-4">
    <div class="form-group">
    {!! Form::label('Agama', 'Agama') !!}
    {!! Form::text('agama', null, ['class'=> 'form-control']) !!}
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
    {!! Form::text('golongan', null, ['class'=> 'form-control']) !!}
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
 

