@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                @can('add_role')
                    <button type="button" class="btn btn-success">Nova Role</button>
                @endcan
                <br>
                <br>
                    @can('show_role')
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Papel</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <th scope="row">{{$role->id}}</th>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->description}}</td>
                                    <td><button type="button" class="btn btn-primary">Permissões</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <h1>Sem permissão para visualizar esta tabela!</h1>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
