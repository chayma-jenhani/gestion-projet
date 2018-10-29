<?php 

namespace App\Http\Controllers;

use App\Employe;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;
class EmployeController extends Controller 
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
      $emp = Employe::all();
      return view('employe.view', ['emp' => $emp]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(Request $request)
  {
      return view('employe.ajout');
  }


  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     $this->validate($request,[
              'nom'=>'required|unique:employes',
              
              'adresse'=>'required',
              'tel1'=>'required|numeric',
              'email'=>'required|email',
              'CIN'=>'required|size:8',
              'salaire'=>'required|numeric',
              
              'bank'=>'required',
          ]);

          $emp = new Employe();
          $emp->nom = ($request->input('nom'));
          
          $emp->adresse = ($request->input('adresse'));
          $emp->CIN = ($request->input('CIN'));
          $emp->tel1 = ($request->input('tel1'));
          $emp->tel2 = ($request->input('tel2'));
          $emp->email = ($request->input('email'));
          $emp->statut = ($request->input('statut'));
          $emp->salaire = ($request->input('salaire'));
          
          
          $emp->Bank = ($request->input('bank'));
          $emp->created_at=Date::now();
          $emp->updated_at=Date::now();

          $emp->save();


          return redirect('employe');
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
  public function edit($id, Request $request)
  {
          $emp = Employe::find($id);
          return view('employe.edit', ['emp' => $emp]);
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
              'nom'=>'required|unique:employes',
              
              'adresse'=>'required',
              'tel1'=>'required|numeric',
              'email'=>'required|email',
              'CIN'=>'required|size:8',
              'salaire'=>'required|numeric',
              //'photo'=>'image',
              'bank'=>'required',
          ]);

          $emp = Employe::find($id);
          $emp->nom = ($request->input('nom'));
          
          $emp->adresse = ($request->input('adresse'));
          $emp->CIN = ($request->input('CIN'));
          
          $emp->tel1 = ($request->input('tel1'));
          $emp->tel2 = ($request->input('tel2'));
          $emp->email = ($request->input('email'));
          $emp->statut = ($request->input('statut'));
          $emp->salaire = ($request->input('salaire'));
          $emp->photo = ($request->input('photo'));
          $emp->BK_banc= ($request->input('BK_banc'));
          $emp->Bank = ($request->input('bank'));
          $emp->updated_at=Date::now();
          $emp->save();

          return redirect('employe');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      $emp=Employe::find($id);
      $emp->delete();
      return redirect('employe');
  }
  
}

?>