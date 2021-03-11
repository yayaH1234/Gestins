<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;
use Illuminate\Support\Facades\DB;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $incidents= Incident::all();

        
        
        return view('inslist',compact('incidents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $incident=Incident::where('id',$id)->firstOrFail();
        return view('showinsdet',compact('incident'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $incident=Incident::where('id',$id)->firstOrFail();
        return view('updateins',compact('incident'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
          /*  'title' => 'required',
            'departement' => 'required',
            'location' => 'required',
            'description' => 'required',
            'dates' => 'required',*/

            'num_facture' => 'required',
            'motif' => 'required',
            'societe' => 'required',
            'description' => 'required',
            'dates' => 'required',
            'livreur' => 'required',
            'decision' => 'required',
            'vendu_a' => 'required',
            'client' => 'required',
            'service_resp' => 'required',
            'regelement_revente' => 'required',
            'prix_vente' => 'required',
            'commercial' => 'required'
        ]);
        $num_f=$request->num_facture;
        $motf=$request->motif;
        $soci=$request->societe;
        $livreur=$request->livreur;
        $decision=$request->decision;
        $vendu=$request->vendu_a;
        $client=$request->client;
        $servic=$request->service_resp;
        $regelment=$request->regelement_revente;
        $prix=$request->prix_vente;
        $comm=$request->commercial;
        $desc=$request->description;
        $dat=$request->dates;
        if($dat == null){
            $incident=Incident::where('id',$id)->firstOrFail();
            $dat=$incident->dates;
        }


       // return $ttl.' '.$dprt.' '.$loc.' '.$desc.' '.$dat;
        DB::table('incidents')->where('id', $id)->update([
            'num_facture' => $num_f,
            'motif' => $motf,
            'societe' => $soci,
            'description' => $desc,
            'dates' => $dat,
            'livreur' => $livreur,
            'decision' => $decision,
            'vendu_a' => $vendu,
            'client' => $client,
            'service_resp' =>$servic,
            'regelement_revente' => $regelment,
            'prixvente' => $prix,
            'commercial' => $comm
        ]);



        return redirect()->route('inslist.index')->with(['message'=> 'Successfully deleted!!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
         Incident::where('id',$id)->firstOrFail()->delete();

           return redirect()->route('inslist.index')->with(['message'=> 'Successfully deleted!!']);
    }
}
