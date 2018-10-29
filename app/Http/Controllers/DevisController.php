<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Devis;
use App\Client;
use App\Projet;

class DevisController extends Controller 
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
     $d= Devis::all();
      return view('devis.view', ['tab' => $d]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(Request $request)
  {
    $cl=Client::all();
      return view('devis.ajout',['cl'=>$cl]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request,[
                'nom'=>'required|unique:devis',
         

            ]);
          $devis = new Devis();
          $devis->nom = ($request->input('nom'));
            $devis->client_id=Client::where('nom',($request->input('client')))->value('id');
        
          $devis->save();

           return redirect('devis');
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
  public function edit($id)
  {
     $cl=Client::all();
          $devis =Devis::find($id);
          return view('devis.edit', ['devis' => $devis],['cl'=>$cl]);
  }



  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request,$id)
  {$this->validate($request,[
                'nom'=>'required|unique:devis',
         

            ]);
      $devis = Devis::find($id);
     
          $devis->client_id=Client::where('nom',($request->input('client')))->value('id');
          $devis->nom = $request->input('nom');
          $devis->save();
          return redirect('devis');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
     $d=Devis::find($id);
      $d->delete();
      return redirect('devis');
  }
  
}

?>