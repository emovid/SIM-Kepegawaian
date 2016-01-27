@extends('getData')

@section('content.getData')
<h1>Perbarui Data Pegawai</h1>
<hr/>
<!--{!! Form::open(['method' => 'PATCH', 'url' => 'books/' . $book->id]) !!}-->
{!! Form::model($book, ['method' => 'PATCH', 'action' => ['HomeController@update', $book->id] ]) !!}

    @include('errors.form_error')
    @include('books.form', ['submitTextButton' => 'Perbarui'])
    
{!! Form::close() !!}

@stop