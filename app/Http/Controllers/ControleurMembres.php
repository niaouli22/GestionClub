<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
//Pour accéder à l'authentification
use Illuminate\Support\Facades\Auth;
// Obligatoire pour avoir accès au modèle
use App\Membre;
use App\Biographie;

class ControleurMembres extends Controller
{
    // des variables
    protected $les_membres;
    protected $les_biographies;
    protected $soumissions;
    public function __construct( Membre $membres, Biographie $biographies, Request $requetes) {
        $this->les_membres = $membres;
        $this->les_biographies = $biographies;
        $this->soumissions = $requetes;
    }
    
    public function index(){
        $les_membres = $this->les_membres->all();
        return view('pages_site/consultation_edition', compact('les_membres'));
    } 
    
    public function afficher($numero) {
        $un_membre = membre::findOrFail($numero);
        return view('pages_site/membre', compact('un_membre'));
    } 
    public function creer() {
        return view('pages_site/creation');
    } 
    
    public function enregistrer(Request $request) {
        $membre = new membre();
        $membre->nom = $request->nom;
        $membre->adresse = $request->adresse;
        $membre->prenom = $request->prenom;
        $membre->save();
        // Enregistrement lors de l'ajout d'une description en fonction de l'id membre
        $une_biographie = new biographie();
        $une_biographie->description = $request->description;
        $une_biographie->id_membre = $membre->id;
        $une_biographie->save();
        // Ajout d'une page de confirmation lorsqu'un membre est créé
        $confirmation = "Membre créé";
        return view('pages_site/confirmation', compact('confirmation'));
    } 
    
    public function editer($numero) {
        // Autorisation d'édition si l'utilisateur est authentifié
        if (Auth::check()){
            $un_membre = $this->les_membres->find($numero);
            // Utilisation de condition pour rediriger la page de modification vers l'erreur 404 
            // dans le cas où le numéro ne correspond pas un membre existant
            if ($un_membre = $un_membre){
                // Editer le champ description
                $une_biographie = $this->les_biographies->where('id_membre', $un_membre->id)->first();
                if ($une_biographie = $une_biographie){
                $un_membre->description = $une_biographie->description;
                }
                else {
                $un_membre->description = "";
                }
                return view('pages_site/edition', compact('un_membre'));
            }
            else{
                return Redirect('errors/404');
            }
        }
        // Interdire l'accès quand on saisi dans l'URL existant ex: /modifier/2 lorsqu'on n'est pas authentifié
        else {
            $confirmation = "Vous n'avez pas les droits";
            return view('pages_site/confirmation', compact('confirmation'));
        }
    } 
    
    public function miseAJour($numero) {
        $un_membre = $this->les_membres->find($numero);
        $la_soumission = $this->soumissions;
        $un_membre->nom =$la_soumission->nom;
        $un_membre->prenom =$la_soumission->prenom;
        $un_membre->adresse =$la_soumission->adresse;
        $un_membre->save();
        // Enregistrer le champ description
        $une_biographie = $this->les_biographies->where('id_membre', $un_membre->id)->first();
        if ($une_biographie == null) {
            $une_biographie = new biographie();
            $une_biographie->description = $la_soumission->description;
            $une_biographie->id_membre = $la_soumission->id;
        }
        else
        {
            $une_biographie->description = $la_soumission->description;
        }
        // Modification d'un membre lorsque le mail de l'utilisateur authentifié correspond au membre a modifier 
        if ($une_biographie->adresse != Auth::user()->email) {
            $confirmation = "La modification n'a pas pu être réalisée";
            return view('pages_site/confirmation', compact('confirmation'));
        }
        else{
            $une_biographie->save();
            // Ajout d'une page de confirmation lorsqu'un membre est modifié
            $confirmation = "Membre modifié";
            return view('pages_site/confirmation', compact('confirmation'));
        }
    }

    public function identite() {
        if (Auth::check()){
            $utilisateur = Auth::user();
            $id = Auth::id();
            return view('pages_site/identite',compact('utilisateur','id'));
        }
        else {
            echo "<h1>Accès non autorisé</h1>";
        }
    }
    
    public function acces_protege() {
        $infos_utilisateur = Auth::user();
        $utilisateur = $infos_utilisateur->name;
        echo "<h1>Utilisateur authentifié : ".$utilisateur."</h1>";
    }
}