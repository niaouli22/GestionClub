<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
// Obligatoire pour avoir accès au modèle
use App\Membre;
class ControleurMembrescss extends Controller
{
public function index() {
$les_membres = Membre::all();
return view('pages_site/membrescss', compact('les_membres'));
}
}
