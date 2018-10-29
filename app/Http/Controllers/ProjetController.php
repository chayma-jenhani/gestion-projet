<?php 

namespace App\Http\Controllers;
use Auth;
use App\Employe;
use App\Projet;
use App\Tache;
use App\Fichier;
use App\Client;
use App\Devis;
use App\Categorie;
use App\Projet_employe;
use App\Projet_categorie;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;

class ProjetController extends Controller 
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
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()

  {   
    if (Auth::user()->role==='responsable'){
             $resId=Employe::where('nom',Auth::user()->nom)->value('id');
      $p=Projet::where('responsable_id',$resId);}
else{
      $p= Projet::all();}
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
      $categories=Categorie::all();
      $clients=Client::all();
      $devis=Devis::all();
      return view('projet.ajout',['emp'=>$emp,'cat'=>$categories,
        'cl'=> $clients,'devis'=>$devis]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $this->validate($request,[
                'titre'=>'required|unique:projets',
         'delai'=>'required',

            ]);


          $projet = new Projet();
          $projet->titre = ($request->input('titre'));
          $projet->description = ($request->input('description'));
          $projet->created_at = Date::now();
          $projet->updated_at = Date::now();
          $projet->delai = ($request->input('delai'));
          $projet->devis_id=Devis::where('nom',($request->input('devis')))->value('id');;
          $projet->responsable_id=Employe::where('nom',($request->input('responsable')))->value('id');
          $projet->client_id=Client::where('nom',($request->input('client')))->value('id');    

          $projet->save();

          $fichiers = $request->file('fichiers');
          $employes=$request->input('employes');
          $categories=$request->input('categories');
if (is_array($employes) || is_object($employes)){
           foreach($employes as $employe){
            $p_emp=new Projet_employe();
            $p_emp->projet_id=$projet->id;
            $p_emp->employe_id=Employe::where('nom',($employe))->value('id');

              $p_emp->save();
           }
}
if (is_array($categories) || is_object($categories)){
            foreach($categories as $categorie){
            $p_cat=new Projet_categorie();
            $p_cat->projet_id=$projet->id;
            $p_cat->categorie_id=Categorie::where('nom',($categorie))->value('id');
            $p_cat->save();
           }
         }

           if(!empty($fichiers)){
          foreach($fichiers as $f){
             $fichier=new Fichier();
              $fichier->nom=$f->getClientOriginalName();
               $fichier->chemin='storage/app/fichiers/'. $f->getClientOriginalName();
               $fichier->type=$f->getClientOriginalExtension();
               $fichier->projet_id=$projet->id;
               $fichier->save();
               $f->storeAs('fichiers', $fichier->nom);
               
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
      return view('projet.affiche',['p'=>$p,'tache'=>$tache,'idprojet'=>$id]);
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
          $devis=Devis::all();
          return view('projet.edit', ['projet' => $projet],['emp'=>$emp],
            ['devis'=>$devis]);
      
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id,Request $request)
  {
    $this->validate($request,[
                'titre'=>'required|unique:projets',
         'delai'=>'required',

            ]);
      $projet = Projet::find($id);
          $projet->titre = ($request->input('titre'));
          $projet->description = ($request->input('description'));
          $projet->delai = ($request->input('delai'));
            $projet->updated_at=Date::now();
            
           $projet->devis_id=Devis::where('nom',($request->input('devis')))->value('id');;
          $projet->responsable_id=Employe::where('nom',($request->input('responsable')))->value('id');;
          $projet->client_id=Client::where('nom',($request->input('client')))->value('id');;    

          $projet->save();

          $files = $request->file('file');
          $employes=$request->input('employe');
          $categories=$request->input('categorie');

           foreach($employes as $employe){
            $p_emp=new Projet_employe();
            $p_emp->projet_id=$projet->id;
            $p_emp->employe_id=Employe::where('nom',($employe))->value('id');

              $p_emp->save();
           }

            foreach($categories as $categorie){
            $p_cat=new Projet_categorie();
            $p_cat->projet_id=$projet->id;
            $p_cat->categorie_id=Categorie::where('nom',($categorie))->value('id');
            $p_cat->save();
           }

           if(!empty($files)){
          foreach($files as $file){
            $fichier=new Fichier();
             $fichier->nom=$file->getClientOriginalName();
               $fichier->chemin=file_get_contents($file);
               $fichier->type=$file->getClientOriginalExtension();
               $fichier->projet_id=$projet->id;
               $fichier->save();
          }
        }
          $projet->save();
          
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