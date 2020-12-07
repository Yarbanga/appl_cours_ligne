<?php

namespace App\Http\Controllers;

use App\Classe;
use App\Matiere;
use Illuminate\Http\Request;


class GeneralController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function classeliste()
    {
        $classes = Classe::All();

        return view ('general.classe.classeliste', compact('classes'));
    }


    public function getclasse()
    {
        return view ('general.classe.classecre');
    }

    public function addclasse(Request $request)
    {
        $classes = Classe::All();

        $this->validate($request, [

            'classe' => 'required|string'
        ]);

        Classe::create([
            
            'classe' => $request->classe
          ]);
          
        return redirect()->route('classeliste')->with('success', 'nouvelle classe ajouter');

    }


    public function getmatiere()
    {
        return view ('general.matiere.addmatiere');
    }

    public function addmatiere(Request $request)
    {
        

        $this->validate($request, [

            'matiere' => 'required|string'
        ]);

        Matiere::create([
            
            'matiere' => $request->matiere
          ]);
          
        return back()->with('success', 'matière crée avec success');

    }


    public function getlesson()
    {
        $matieres = Matiere::All();
        $classes = Classe::All();

        return view ('general.lesson.addlesson', compact('matieres', 'classes'));
    }

    public function addlesson(Request $request)
    {
        

        $this->validate($request, [

            'nom' => 'required|string'
        ]);

        Matiere::create([
            
            'nom' => $request->nom
          ]);
          
        return back()->with('success', 'matière crée avec success');

    }
    

}
