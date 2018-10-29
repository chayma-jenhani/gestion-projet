<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Date\Date;
use App\Categorie;
class CategorieController extends Controller 
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
      $cat = Categorie::all();
      return view('categorie.view', ['tab' => $cat]);
  }
  

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(Request $request)
  {
      return view('categorie.ajout');
  }

  

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     $this->validate($request,[
                'nom'=>'required',
         

            ]);
      $categorie = new Categorie();
          $categorie->nom = ($request->input('nom'));
          $categorie->description = ($request->input('description'));
          $categorie->created_at = Date::now();
          $categorie->updated_at = Date::now();
          $categorie->statut = ($request->input('statut'));
          $categorie->save();

           return redirect('categorie');
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
        $categorie =Categorie::find($id);
      return view('categorie.edit',['cat' => $categorie]);
  
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

    $this->validate($request,[
                'nom'=>'required',
         

            ]);
     $categorie =Categorie::find($id);
          $categorie->nom = ($request->input('nom'));
          $categorie->description = ($request->input('description'));
          $categorie->updated_at = Date::now();
          $categorie->statut = ($request->input('statut'));
          $categorie->save();

           return redirect('categorie');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
     $cat=Categorie::find($id);
            $cat->delete();
            return redirect('categorie');
        
  }
}
  


?>