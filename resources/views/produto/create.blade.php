@extends('index')
@section('content')
<h1>{{$valor}}</h1>
@if ($errors->any())
    <ul class="alert alert-warning">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul> @endif
{!! Form::open(['url' => 'produtos/store']) !!}
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('descricao', 'Descrição:') !!}
    {!! Form::textarea('descricao', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Criar Produto', ['class'=>'btn btn-success']) !!}
</div>


{!! Form::close() !!}
    @stop