<?php

namespace App\Http\Controllers;

use App\Classe;
use App\Lesson;
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

    public function show_class($classe){
        $matieres= Matiere::where('classe_id', '=', $classe)->get();
        return view('general.matiere.liste', compact('classe', 'matieres' ));
    }
    public function show_matiere($matiere){
        $lessons= Lesson::where('matiere_id', '=', $matiere)->get();
     return view('general.matiere.matiere_show', compact( 'matiere' ,'lessons'));
    }

    public function show_lesson(Lesson $lesson){
     return view('general.lesson.lesson_show', compact('lesson'));
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
        $classes = Classe::All();   
        return view ('general.matiere.addmatiere', compact('classes'));
    }

    public function addmatiere(Request $request)
    {
      
        $this->validate($request, [
            'matiere' => 'required|string',
            'classe_id' => 'required|int'
        ]);
            Matiere::create([
                'matiere'=>$request->matiere,
                'classe_id'=>$request->classe_id
            ]);
        return back()->with('success', 'matière crée avec success');
    }

    public function getlesson()
    {
        $classes = Classe::All();
        return view ('general.lesson.addlesson', compact('classes'));
    }

    public function getMatieres($classeid=0){
        //rafraichir les matieres en fonction de la classe selectionnée
        $empData['data'] = Matiere::select('id','matiere')->where('classe_id', $classeid)->get();
        return response()->json($empData);
    }

    public function addlesson(Request $request)
    {
        $this->validate($request, [
            'matiere_id' => 'required|string',
            'classe_id' => 'required|string',
            'chapitre' => 'required|string',
            'titre' => 'required|string',
            // 'intro' => 'string',
            // 'grandUn' => 'string',
            // 'grandUnPetitUn' => 'string',
            // 'grandUnPetitUnTexteUn' => 'string',
            // 'grandUnPetitDeux' => 'string',
            // 'grandUnPetitDeuxTexteDeux' => 'string',
            // 'grandUnPetitTrois' => 'string',
            // 'grandUnPetitTroisTexteTrois' => 'string',
            // 'grandDeux' => 'string',
            // 'grandDeuxPetitUn' => 'string',
            // 'grandDeuxPetitUnTexteUn' => 'string',
            // 'grandDeuxPetitDeux' => 'string',
            // 'grandDeuxPetitDeuxTexteDeux' => 'string',
            // 'grandDeuxPetitTrois' => 'string',
            // 'grandDeuxPetitTroisTexteTrois' => 'string',
            // 'grandTrois' => 'string',
            // 'grandTroisPetitUn' => 'string',
            // 'grandTroisPetitUnTexteUn' => 'string',
            // 'grandTroisPetitDeux' => 'string',
            // 'grandTroisPetitDeuxTexteDeux' => 'string',
            // 'grandTroisPetitTrois' => 'string',
            // 'grandTroisPetitTroisTexteTrois' => 'string'
        ]);
        Lesson::create([
            'matiere_id' => $request->matiere_id,
            'classe_id' => $request->classe_id,
            'chapitre' => $request->chapitre,
            'titre' => $request->titre,
            'intro' => $request->intro,
            'grandUn' => $request->grandUn,
            'grandUnPetitUn' => $request->grandUnPetitUn,
            'grandUnPetitUnTexteUn' => $request->grandUnPetitUnTexteUn,
            'grandUnPetitDeux' => $request->grandUnPetitDeux,
            'grandUnPetitDeuxTexteDeux' => $request->grandUnPetitDeuxTexteDeux,
            'grandUnPetitTrois' => $request->grandUnPetitTrois,
            'grandUnPetitTroisTexteTrois' => $request->grandUnPetitTroisTexteTrois,
            'grandDeux' => $request->grandDeux,
            'grandDeuxPetitUn' => $request->grandDeuxPetitUn,
            'grandDeuxPetitUnTexteUn' => $request->grandDeuxPetitUnTexteUn,
            'grandDeuxPetitDeux' => $request->grandDeuxPetitDeux,
            'grandDeuxPetitDeuxTexteDeux' => $request->grandDeuxPetitDeuxTexteDeux,
            'grandDeuxPetitTrois' => $request->grandDeuxPetitTrois,
            'grandDeuxPetitTroisTexteTrois' => $request->grandDeuxPetitTroisTexteTrois,
            'grandTrois' => $request->grandTrois,
            'grandTroisPetitUn' => $request->grandTroisPetitUn,
            'grandTroisPetitUnTexteUn' => $request->grandTroisPetitUnTexteUn,
            'grandTroisPetitDeux' => $request->grandTroisPetitDeux,
            'grandTroisPetitDeuxTexteDeux' => $request->grandTroisPetitDeuxTexteDeux,
            'grandTroisPetitTrois' => $request->grandTroisPetitTrois,
            'grandTroisPetitTroisTexteTrois' => $request->grandTroisPetitTroisTexteTrois
          ]);
        return back()->with('success', 'léçon crée avec success');
    }
    
    public function lessonliste() 
    {
        $matieres = Matiere::All();
        return view('general.lesson.lessongroupe', compact('matieres'));
    }
    
    public function recuperationCours()
    {
        $lessons = Lesson::All();
        $mats=Lesson::where('id',7)->get();
        return view('general.lesson.reculesson', compact('lessons', 'mats'));
    }

}
