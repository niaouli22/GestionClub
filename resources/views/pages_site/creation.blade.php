@extends('pages_site/fond')
@section('entete')
@stop
@section('titre')
Club des Usagers de l'Espace galactique
@stop
@section('titre_contenu')
Création d'un nouveau membre
@stop
@section('contenu')
<div class="formgroup">
    {!! Form::open(['url' => 'creation/membre']) !!}
    <div class="formgroup">
        {!! Form::label('nom', 'Nom') !!}
        {!! Form::text('nom', null, ['class' => 'formcontrol', 'required'])!!}
    </div>
    <div class="formgroup">
        {!! Form::label('prenom', 'Prénom') !!}
        {!! Form::text('prenom', null, ['class' => 'formcontrol', 'required'])!!}
    </div>
    <div class="formgroup">
        {!! Form::label('adresse', 'Adresse électronique') !!}
        {!! Form::text('adresse', null, ['class' => 'formcontrol', 'required|email'])!!}
    </div>
    <!-- Ajout du champ description pour la biographie -->
    <div class="formgroup">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', null, ['class' => 'formcontrol', 'required'])!!}
    </div>
    <p>
    </p>
    {!! Form::submit("Creation membre") !!}
    {!! Form::close() !!}
</div>
@stop
@section('pied_page')
LicenceProServicetique 2020
@stop