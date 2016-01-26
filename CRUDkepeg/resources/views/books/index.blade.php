@extends('template')
<div class="col-md-1"></div>
<div class="col-md-8">

<div>
            {!! Form::open(['url'=>'search', 'class'=>'navbar-form']) !!}
            <div class="input-group">
                {!! Form::text('kata_kunci',null,['class'=>'form-control','placeholder'=>'kata_kunci']) !!}
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
            {!! Form::close() !!}
        <a href="{{ url('/employees/create') }}" class="btn btn-success">Tambah Pegawai</a>

        </div>

@section('content')
    @if ($employeList->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>NIP</th>
                   <!-- <th>No Karpeg</th> -->
                    <th>Nama</th>
                  <!--  <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>TMT CPNS</th>
                    <th>TMT PNS</th>
                    <th>TMT Pangkat Terakhir</th>
                    <th>Golongan</th>
                    <th>Jabatan</th>
                    <th>Unit Kerja</th>
                    <th>Instansi</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Pendidikan Tahun Lulus</th>
                    <th>Pendidikan Univ</th>
                    <th>Pendidikan Tempat</th>
                    <th>Pendidikan Jurusan</th>
                    <th>Status</th>   -->
                    <th colspan="3" align="center"></th>
                </tr>
            </thead>

            <tbody>
                <?php $i=0; ?>
                @foreach ($employeList as $book)
                    <?php $i++; ?>
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->nip }}</td>
       <!--             <td>{{ $book->no_karpeg }}</td> -->
                    <td>{{ $book->nama }}</td>
          <!--          <td>{{ $book->jenis_kelamin }}</td>
                    <td>{{ $book->agama }}</td>
                    <td>{{ $book->tempat_lahir }}</td>
                    <td>{{ $book->tanggal_lahir }}</td>
                    <td>{{ $book->tmt_cpns }}</td>
                    <td>{{ $book->tmt_pns }}</td>
                    <td>{{ $book->tmt_pangkat_terakhir }}</td>
                    <td>{{ $book->golongan }}</td>
                    <td>{{ $book->jabatan }}</td>
                    <td>{{ $book->unit_kerja }}</td>
                    <td>{{ $book->instansi}}</td>
                    <td>{{ $book->pendidikan_terakhir }}</td>
                    <td>{{ $book->pendidikan_tahun_lulus }}</td>
                    <td>{{ $book->pendidikan_univ }}</td>
                    <td>{{ $book->pendidikan_tempat }}</td>
                    <td>{{ $book->pendidikan_jurusan }}</td>
                    <td>{{ $book->status }}</td>   -->
                    
                    <td><a class="btn btn-primary" href="{{ url('/employees', $book->id)}}"><span class="glyphicon glyphicon-user"></a></td>
                    <!--<td><a class="btn btn-primary" href="{{ action('BookController@show', [$book->id])}}">Read</a></td>-->
                    <!--<td><a class="btn btn-primary" href="/books/{{$book->id}}">Read</a></td>-->
                    <td><a class="btn btn-warning" href="{{ url('/employees/'.$book->id.'/edit')}}"><span class="glyphicon glyphicon-pencil"></a></td>
                    <td><a class="btn btn-danger" href="{{ action('BookController@delete', $book->id) }}"><span class="glyphicon glyphicon-trash"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <center>
        {!!$employeList->render()!!}
     </center>
    @else
        There are no book in the book list
    @endif
</div>
<div class="col-md-2"></div>
@stop