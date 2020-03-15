@extends('pages_site/fond')
@section('entete')
@stop
@section('titre')
Liste des membres
@stop
@section('titre_contenu')
Liste des membres
@stop
@section('contenu')
@foreach ($les_membres as $membre)
<h3>
{{ $membre->prenom }} {{ $membre->nom }}
</h3>
<div class='h2'>
{{ $membre->adresse }}
</div>
@endforeach
@stop
@section('pied_page')
LicenceProServicetique 2020
@stop