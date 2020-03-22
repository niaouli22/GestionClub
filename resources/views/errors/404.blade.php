<!-- Refonte de la page par defaut de l'erreur 404 --> 
@extends('pages_site/fond')
@section('entete')
@stop
@section('titre')
Page introuvable
@stop
@section('titre_contenu')
Page introuvable
@stop
@section('contenu')
<a href="{{ url('/membres') }}">Revenir à la liste des membres</a>
@stop
@section('pied_page')
LicenceProServicetique 2020
@stop
