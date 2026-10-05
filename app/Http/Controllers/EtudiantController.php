<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        $etudiants = Etudiant::paginate(4);
        return view('etudiant.liste', compact('etudiants'));
    }

    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    }

    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
            'sexe' => 'required|in:masculin,feminin',
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->sexe = $request->sexe;
        $etudiant->save();

        return redirect('/ajouter')->with('status', 'Un étudiant à été ajouté avec succès');
    }

    public function update_etudiant(int $id)
    {
        $etudiants = Etudiant::findOrFail($id);
        return view('etudiant.update', compact('etudiants'));
    }

    public function update_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
            'sexe' => 'required|in:masculin,feminin',
        ]);

        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->sexe = $request->sexe;

        $etudiant->update();

        return redirect('/');
    }

    public function delete_etudiant(int $id)
    {
        $etudiant = Etudiant::findOrFail($id);

        $etudiant->delete();

        return redirect('/')->with('status', 'Etudiant supprimé avec succès');
    }
}
