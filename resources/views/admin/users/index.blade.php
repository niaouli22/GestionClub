@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tableau de bord</div>

                <div class="card-body">
                    <a href="{{url('/membres')}}">Voir la liste des membres</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Identité</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rôles</th>
                            @can('edit-users')
                            <th scope="col">Actions</th>
                                @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                            <td>
                                @can('edit-users')
                                    <a href="{{ route('admin.users.edit', $user->id) }}"><button type="button" class="btn btn-primary">Modifier</button></a>
                                @endcan
                                @can('delete-users')
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="float-left">
                                @csrf
                                {{ method_field('DELETE')}}
                                    <button type="button" class="btn btn-warning">Supprimer</button>
                                </form>
                                    @endcan
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
