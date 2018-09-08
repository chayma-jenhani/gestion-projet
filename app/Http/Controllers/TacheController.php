<?php 

namespace App\Http\Controllers;

use App\Tache;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;

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
    $cl= Tache::all();
      return view('tache.view', ['tab' => $cl]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(Request $request)
  {
      return view('tache.ajout');
  }


  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $tache = new Tache();
          $tache->titre = ($request->input('titre'));
          $tache->description = ($request->input('description'));
          $tache->deadline = ($request->input('deadline'));
          $tache->statut = ($request->input('statut'));
          $tache->priorite = ($request->input('priorite'));
          $tache->created_at=Date::now();
          $tache->updated_at=Date::now();
          $tache->projet_id=1;
       
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
  {
              $tache=Tache::find($id);
          return view('tache.edit',['t' => $tache]);
      }
  

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
     $tache = new Tache();
              $tache->titre = ($request->input('titre'));
              $tache->description = ($request->input('description'));
              $tache->dateAjout = Date::now();
              $tache->priorite = ($request->input('priorite'));
              $tache->deadline = ($request->input('deadline'));
              $tache->updated_at=Date::now();
              $tache->statut = ($request->input('statut'));
              $tache->projet_id=1;
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