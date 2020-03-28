<!-- Page de confirmation  --> 
@extends('pages_site/fond')
@section('entete')
@stop
@section('titre')
  Page de confirmation
@stop
@section('titre_contenu')
Page de confirmation
@stop
@section('contenu')

<h3>{{$confirmation}}</h3>

<a href="{{ url('/membres') }}">Retourner à la liste des membres</a>
@stop
@section('pied_page')
LicenceProServicetique 2020
@stop