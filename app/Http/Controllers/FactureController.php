<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactureController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
     $facture= Facture::all();
      return view('facture.view', ['fact' => $facture]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
     $cl=Client::all();
     $d=Devis::all();
     $p=Projet::all();
      return view('devis.ajout',['cl'=>$cl],['devis'=>$d],['projet'=>$p]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     $clientId=Client::where('nom',($request->input('client')))->value('id');
     $devisId=Devis::where('nom',($request->input('devis')))->value('id');
     $projetId=Projet::where('nom',($request->input('projet')))->value('id');

          $facture = new Facture();
          $facture->nom = ($request->input('nom'));

          $facture->client_id=$clientId;
          $facture->devis_id=$devisId;
          $facture->projet_id=$projetId;
          $facture->save();

           return redirect('facture');
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
     $d=Devis::all();
     $p=Projet::all();
     $facture=Facture::find($id);
      return view('devis.edit',['cl'=>$cl],['devis'=>$d],['projet'=>$p]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id,Request $request)
  {
    $clientId=Client::where('nom',($request->input('client')))->value('id');
     $devisId=Devis::where('nom',($request->input('devis')))->value('id');
     $projetId=Projet::where('nom',($request->input('projet')))->value('id');

          $facture =Facture::find($id);
          $facture->nom = ($request->input('nom'));

          $facture->client_id=$clientId;
          $facture->devis_id=$devisId;
          $facture->projet_id=$projetId;
          $facture->save();

           return redirect('facture');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
     $facture =Facture::find($id);
     $facture->delete();
     return redirect('facture');
  }
  }
  
}

?>