<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Tache;
use App\Employe;
use App\Projet;
use App\Categorie;
use App\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       if (Auth::user()->role==='employe'){

      $empId=Employe::where('nom',Auth::user()->nom)->value('id');
      $tachesEmp=Tache::where('employe_id',$empId);

        return view('homeEmploye',['tab' => $tachesEmp]);}

         if (Auth::user()->role==='responsable'){
             $resId=Employe::where('nom',Auth::user()->nom)->value('id');
      $projets=Projet::where('responsable_id',$empId);
        return view('homeResponsable',['projets' => $projets]);
         }
        
        else{

            $nbprojet=Projet::all()->count();
            $nbcat=Categorie::all()->count();
            $nbclient=Client::all()->count();
            $nbemp=Employe::all()->count();

            $nbtaches=Tache::all()->count();
            if ($nbtaches==0){$nbtaches=1;}
            $act=(Tache::where('statut','active')->count()/$nbtaches)*100;
            $enprog=(Tache::where('statut',' en progression')->count()/$nbtaches)*100;
            $enpause=(Tache::where('statut','en pause')->count()/$nbtaches)*100;
            $termine=(Tache::where('statut','terminé')->count()/$nbtaches)*100;
             return view('home',['act' => $act ,'enprog' => $enprog,
                'enpause' => $enpause,
                'termine' => $termine,'nbemp' => $nbemp,
            'nbclient' => $nbclient,'nbcat' => $nbcat,'nbprojet' => $nbprojet]);
        }
       
    }
   
}
