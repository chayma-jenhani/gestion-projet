<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Devis;
use App\Client;
use App\Projet;
use App\Facture;



class FactureController extends Controller 
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
     $f=Facture::all();
      return view('facture.view', ['tab' => $f]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(Request $request)
  {
    $projets=Projet::all();
    $devis=Devis::all();
    $cl=Client::all();
      return view('facture.ajout',['cl'=>$cl,
        'devis'=>$devis,'projets'=>$projets]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request,[
                    'montant'=>'required|numeric' ]);
          $facture = new Facture();
         
            $facture->client_id=Client::where('nom',($request->input('client')))->value('id');
             $facture->projet_id=Projet::where('titre',($request->input('projet')))->value('id');
              $facture->devis_id=Devis::where('nom',($request->input('devis')))->value('id');

$facture->montant=$request->input('montant');
        
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
    $projet=Projet::all();
    $devis=Devis::all();
      $cl=Client::all();
      return view('facture.ajout',['cl'=>$cl,'devis'=>$devis,'projet'=>$projet]);
  }



  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request,$id)
  {
    
    $this->validate($request,[
                    'montant'=>'required|numeric' ]);

      $facture = Facture::find($id);
     
         $facture->montant=$request->input('montant');
            $facture->client_id=Client::where('nom',($request->input('client')))->value('id');
             $facture->projet_id=Projet::where('nom',($request->input('projet')))->value('id');
              $facture->devis_id=Devis::where('nom',($request->input('devis')))->value('id');

        
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
     $f=Facture::find($id);
      $f->delete();
      return redirect('facture');
  }
  
}

?>