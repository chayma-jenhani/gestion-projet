<?php 

namespace App\Http\Controllers;

use App\Tache;
use App\Employe;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;
use Auth;

class TacheController extends Controller 
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
      if (Auth::user()->role==='employe'){

      $empId=Employe::where('nom',Auth::user()->nom)->value('id');
      $taches=Tache::where('employe_id',$empId);}
      else{
    $taches= Tache::all();}
      return view('tache.view', ['tab' => $taches]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(Request $request,$idprojet)
  { $emp=Employe::all();
      return view('tache.ajout',['emp'=>$emp,'idprojet'=>$idprojet]);
  }


  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request,$idProjet)
  {
     $this->validate($request,[
                'titre'=>'required',
         

            ]);
      $tache = new Tache();
          $tache->titre = ($request->input('titre'));
          $tache->description = ($request->input('description'));
          $tache->deadline = ($request->input('deadline'));
          $tache->statut = ($request->input('statut'));
          $tache->priorite = ($request->input('priorite'));
          $tache->created_at=Date::now();
          $tache->updated_at=Date::now();
          $tache->projet_id=$idProjet;
          $tache->employe_id=Employe::where('nom',($request->input('employe')))->value('id');
       
          $tache->save();

          redirect('projet');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id,Request $request)
  {  $emp=Employe::all();
              $tache=Tache::find($id);
          return view('tache.edit',['t' => $tache],['emp'=>$emp]);
      }
  

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request)
  { $this->validate($request,[
                'titre'=>'required',
         

            ]);
     $tache = new Tache();
              $tache->titre = ($request->input('titre'));
              $tache->description = ($request->input('description'));
              $tache->dateAjout = Date::now();
              $tache->priorite = ($request->input('priorite'));
              $tache->deadline = ($request->input('deadline'));
              $tache->updated_at=Date::now();
              $tache->statut = ($request->input('statut'));
            
              $tache->employe_id=Employe::where('nom',($request->input('employe')))->value('id');
              $tache->save();

              redirect('projet');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      $t=Tache::find($id);
      $t->delete();
      return redirect('projet');
  }

  
}

?>