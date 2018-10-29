<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
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
        $cl = Client::all();
        return view('client.view', ['tab' => $cl]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        return view('client.ajout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
 $this->validate($request,[
                'nom'=>'required|unique:clients',
         
                'adresse'=>'required',
                'tel'=>'required|numeric',
                'email'=>'required|email',

            ]);

            $cl = new Client();
            $cl->nom = ($request->input('nom'));
            $cl->adresse = ($request->input('adresse'));
            $cl->tel = ($request->input('tel'));
            $cl->email = ($request->input('email'));
            $cl->statut = ($request->input('statut'));
            $cl->save();


            return redirect('client');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(Request $request, $id)
    {
     
            $cl = Client::find($id);
            return view('client.edit', ['cl' => $cl]);
    }

        /**
         * Update the specified resource in storage.
         *
         * @param  int $id
         * @return Response
         */
        public
        function update($id,Request $request)
        {
  $this->validate($request,[
                    'nom'=>'required|unique:clients',
                    
                    'adresse'=>'required',
                    
                    'tel'=>'required|numeric',
                    'email'=>'required|email',

                ]);

            $cl = Client::find($id);
            $cl->nom = ($request->input('nom'));
          
            $cl->adresse = ($request->input('adresse'));
           
            $cl->tel = ($request->input('tel'));
            $cl->email = ($request->input('email'));
            $cl->statut = ($request->input('statut'));
            $cl->save();

            return redirect('client');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         * @return Response
         */
        public
        function destroy( Request $request,$id)
        {
            $cl=Client::find($id);
            $cl->delete();
            return redirect('client');
        }


}

?>