@extends('app')

@section('content')

    <div class="container">
        <h3>Novo cliente</h3>

        {!! Form::open(['route' => 'clients.store', 'class'=>'form']) !!}
        {{ method_field("POST") }}
        <div class="form-group">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cpf', 'CPF:') !!}
            {!! Form::text('cpf', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


    </div>

@endsection