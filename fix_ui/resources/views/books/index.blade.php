@extends('getData')

@section('content.nav')
<ul class="nav nav-tabs">
                    <li>
                      <a href="{{ url('/home') }}">Buat</a>
                    </li>
                    <li class="active">
                      <a href="{{ url('/getData') }}">Data</a>
                    </li>
                  </ul>
                  <br>
@stop

@section('content.getData')

<div class="col-xs-12"><a href="{{ url('getData/employees/create') }}" class="btn btn-primary">Tambah Pegawai</a>
  <div class="form-group" style="float:right">
  {!! Form::open(['url'=>'getData/search', 'class'=>'form-group']) !!}  
    
    <div class="col-xs-9">{!! Form::text('kata_kunci',null,['class'=>'form-control','placeholder'=>'Keywords']) !!}</div>
<!--    <button class="btn btn-round glyphicon glyphicon-search" type="submit"></button>-->
    <button type="submit" class="btn btn-default"><span class="fa fa-search"></span></button>
  {!! Form::close() !!}
  </div>
</div>





<div>
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
                    
                    <td><a class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Lihat Data" href="{{ url('getData/employees', $book->id)}}"><span class="glyphicon glyphicon-user"></a></td>
<!--                    <td><a class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></a></td>-->
<<<<<<< HEAD
                    <td><a class="btn btn-warning" href="{{ url('getData/employees/'.$book->id.'/edit')}}"><span class="glyphicon glyphicon-pencil"></a></td>
                    <td><a class="btn btn-danger" data-toggle="modal" href="#" data-target="#modal"><span class="glyphicon glyphicon-trash"></a></td>
                    </tr>   
                        <div class="modal fade" id="modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <span style="..."><b>Perhatian</b></span>
                                    </div>
                                    
                                    <div class="modal-body">
                                        <input type="hidden" value="<?php echo $book->id;?>" name="id">
                                        <h5>Yakin ingin menghapus?</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Tidak</button>
                                        <a class="btn btn-danger" href="{{ action('HomeController@delete', $book->id) }}">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
=======
                    <td><a class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit Data" href="{{ url('getData/employees/'.$book->id.'/edit')}}"><span class="glyphicon glyphicon-pencil"></a></td>
                    <td><a class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus Data" href="{{ action('HomeController@delete', $book->id) }}"><span class="glyphicon glyphicon-trash"></a></td>
                </tr>
>>>>>>> origin/master
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
@stop