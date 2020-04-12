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
                            <th scope="col">Identité</th>
                            <th scope="col">Email</th>
                            <th scope="col">Approbation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($les_utilisateurs as $utilisateur)
                        <tr>
                        @if ($utilisateur->accord == 0)

                            <th>{{ $utilisateur->name }}</th>
                            <td>{{ $utilisateur->email }}</td>
                            <td><a class="btn btn-danger" href="/accord/{{ $utilisateur->id }}">Accepter</a></td>

                        @endif
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
