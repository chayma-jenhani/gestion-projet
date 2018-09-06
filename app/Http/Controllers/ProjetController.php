<?php 

namespace App\Http\Controllers;

use App\Employe;
use App\Projet;
use App\Tache;
use App\Fichier;
use App\Client;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;

class ProjetController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $p= Projet::all();
      return view('projet.view', ['tab' => $p]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(Request $request)
  {
      $emp=Employe::all();
      return view('projet.ajout',['emp'=>$emp]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $responsableId=Employe::where('nom',($request->input('responsable')))->value('id');


          $projet = new Projet();
          $projet->titre = ($request->input('titre'));
          $projet->description = ($request->input('description'));
          $projet->created_at = Date::now();
          $projet->updated_at = Date::now();
          $projet->delai = ($request->input('delai'));
          $projet->devis_id=1;
          $projet->responsable_id=$responsableId;
          $projet->client_id=1;
          

          $projet->save();

          $files = $request->file('file');

           if(!empty($files)){
          foreach($files as $file){
          
            $fichier=new Fichier();
             $fichier->nom=$file->getClientOriginalName();
               $fichier->type=$file->getClientOriginalExtension();
               $fichier->projet_id=$projet->id;
               $fichier->chemin=$file->store('file');
               $fichier->save();
               
          }
        }
        
           return redirect('projet');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
       $p=Projet::all()->find($id);
      $tache=Tache::all()->where('projet_id',$id);
      return view('projet.affiche',['p'=>$p],['tache'=>$tache]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Request $request,$id)
  {
      $emp=Employe::all();
          $projet =Projet::find($id);
          return view('projet.edit', ['projet' => $projet],['emp'=>$emp]);
      
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id,Request $request)
  {
      $projet = Projet::find($id);
          $projet->titre = ($request->input('titre'));
          $projet->description = ($request->input('description'));
          
          $projet->delai = ($request->input('delai'));
          $projet->updated_at=Date::now();
          //$projet->devis = ($request->input('email'));
          //$projet->responsable = ($request->input('statut'));
          $projet->save();

           $files = $request->file('file');

           if(!empty($files)){
          foreach($files as $file){
          
            $fichier=new Fichier();
             $fichier->nom=$file->getClientOriginalName();
               $fichier->type=$file->getClientOriginalExtension();
               $fichier->projet_id=$projet->id;
               $fichier->chemin=$file->store('file');
               $fichier->save();
               
          }
        }
          
          return redirect('projet');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      $p=Projet::find($id);
      $p->delete();
      return redirect('projet');
  }
  
}

?>