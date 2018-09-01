<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Devis;
use App\Client;

class DevisController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
     $d= Devis::all();
      return view('devis.view', ['devis' => $d]);
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
    $clientId=Client::where('nom',($request->input('client')))->value('id');
          $devis = new Devis();
          $devis->nom = ($request->input('nom'));
          $devis->client_id=$clientId;
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
          return view('projet.edit', ['devis' => $devis],['cl'=>$cl]);
  }



  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request,$id)
  {
      $devis = Devis::find($id);
     $clientId=Client::where('nom',($request->input('client')))->value('id');
          $devis->client_id=$clientId;
          $devis->nom = ($request->input('nom'));
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