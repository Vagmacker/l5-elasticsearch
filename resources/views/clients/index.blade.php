@extends('app')

@section('content')
    <div class="container">
        <h3>Clientes</h3>

        <a href="{{route('clients.create')}}" class="btn btn-primary">Novo cliente</a>
        <br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>nome</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach([] as $client)
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection