<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
class MonControleur extends Controller
{
// returning a simple page using view
public function retourneNouvellePage() {
return view('nouvellepage');
}
public function retournePageExemple() {
$nom = 'Picard';
$prenom = 'Jean-Luc';
return view('pages_site/exemple',compact('nom','prenom'));
}}