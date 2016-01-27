@extends('getData')

@section('content.getData')
<h1>Tambah Data Pegawai</h1>
<hr/>
{!! Form::open(['url' => 'employees']) !!}
    <!-- include is used for render partial view errors/form_error.blade.php and books/form.blade.php -->
    @include('errors.form_error')
    @include('books.form', ['submitTextButton' => 'Tambah'])
  
 {!! Form::close() !!}

@stop