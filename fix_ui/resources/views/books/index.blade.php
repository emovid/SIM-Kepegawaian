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
                    
                    <td><a class="btn btn-primary" data-toggle="modal" data-placement="bottom" title="Lihat Data" data-id ="book->id" data-target="#modalshow<?php echo $book->id;?>" href="#"><span class="glyphicon glyphicon-user"></a></td>
                    <div class="modal fade" id="modalshow<?php echo $book->id;?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <span style="..."><b>Detil Pegawai</b></span>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $book->id;?>" name="id">
                                    <div class="panel panel-group">
                                        <div class="panel-body">
                                            <div class="row col-md-10">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-6"><div class="pull-right">&nbsp;</div></label>
                                                        <div class="col-sm-6"></div>
                                                    </div>
                                                </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    NIP : 
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $book->nip}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Nomor Kartu Pegawai : 
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $book->no_karpeg}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Nama : 
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $book->nama}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Jenis Kelamin : 
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $book->jenis_kelamin}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Agama : 
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $book->agama}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Tempat Lahir : 
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $book->tempat_lahir}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Tanggal Lahir :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{substr($book->tanggal_lahir,0,11)}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    TMT CPNS :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{substr($book->tmt_cpns,0,11)}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    TMT PNS : 
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{substr($book->tmt_pns,0,11)}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    TMT Pangkat Terakhir : 
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ substr($book->tmt_pangkat_terakhir,0,11)}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Pangkat : 
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $book->pangkat}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Golongan : 
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $book->golongan}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Jabatan : 
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $book->jabatan}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Unit Kerja : 
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $book->unit_kerja}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Instansi : 
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $book->Instansi}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Jenjang Pendidikan Terakhir :
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $book->pendidikan_terakhir}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Tahun Lulus : 
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $book->pendidikan_tahun_lulus}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Nama Instansi Pendidikan : 
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $book->pendidikan_univ}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-sm-6">
                                                                <div class="pull-right">
                                                                    Lokasi Intansi Pendidikan : 
                                                                </div>
                                                            </label>
                                                            <div class="col-sm-6">{{ $book->pendidikan_tempat}}</div>
                                                        </div>
                                                    </div>
                                       
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-6">
                                                            <div class="pull-right">
                                                                Jurusan : 
                                                            </div>
                                                        </label>
                                                        <div class="col-sm-6">{{ $book->pendidikan_jurusan}}</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-6">
                                                            <div class="pull-right">
                                                                Status : 
                                                            </div>
                                                        </label>
                                                        <div class="col-sm-6">{{ $book->status}}</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-6">
                                                            <div class="pull-right">
                                                            
                                                            </div>
                                                        </label>
                                                    
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-warning" href="{{ url('getData/employees/'.$book->id.'/edit')}}">Ganti</a>
                                    <a class="btn btn-danger" href="{{ action('HomeController@delete', $book->id) }}">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>                    
<!--                    <td><a class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></a></td>-->
                    <!-- <td><a class="btn btn-primary" href="{{ url('getData/employees', $book->id)}}"><span class="glyphicon glyphicon-user"></a></td> -->
                    <td><a class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit Data" href="{{ url('getData/employees/'.$book->id.'/edit')}}"><span class="glyphicon glyphicon-pencil"></a></td>
                    <td><a class="btn btn-danger" data-toggle="modal" data-placement="bottom" title="Hapus Data" href="#" data-target="#modaldelete"><span class="glyphicon glyphicon-trash"></a></td>
                    <div class="modal fade" id="modaldelete" tabindex="-1" role="dialog">
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
                                    <h5>Anda yakin ingin menghapus?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
                                    <a class="btn btn-danger" href="{{ action('HomeController@delete', $book->id) }}">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
@stop
<script type="text/javascript">
    $('#modalshow').on('show.bs.modal', function(e) {

    //get data-id attribute of the clicked element
    var id = $(e.relatedTarget).data('id');

    //populate the textbox
    $(e.currentTarget).find('input[name="id"]').val(id);
});
</script>
