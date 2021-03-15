<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Incidenttemp;

use App\Models\Incident;
use Illuminate\Support\Facades\DB;

class IncidenttController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $incidents= Incidenttemp::all();//DB::table('incidentts')->get();
         return view('approveins',compact('incidents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *  * @param  int  $id
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
         $incident=Incidenttemp::where('id',$id)->firstOrFail();
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
        
        $incident=new Incident;
        $incidenttemp=Incidenttemp::where('id',$id)->firstOrFail();
         $incident->num_facture=$incidenttemp->num_facture;
            $incident->motif=$incidenttemp->motif;
            $incident->societe=$incidenttemp->societe;
            $incident->description=$incidenttemp->description;
            $incident->dates=$incidenttemp->dates;
            $incident->livreur=$incidenttemp->livreur;
            $incident->decision=$incidenttemp->decision;
            $incident->vendu_a=$incidenttemp->vendu_a;
            $incident->client=$incidenttemp->client;
            $incident->service_resp=$incidenttemp->service_resp;
            $incident->regelement_revente=$incidenttemp->regelement_revente;
            $incident->prixvente=$incidenttemp->prixvente;
            $incident->commercial=$incidenttemp->commercial;
        $incident->save();

        
       Incidenttemp::where('id',$id)->firstOrFail()->delete();

 return redirect()->route('approveins.index')->with(['message'=> 'Successfully deleted!!']);
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
        
          Incidenttemp::where('id',$id)->firstOrFail()->delete();

           return redirect()->route('approveins.index')->with(['message'=> 'Successfully deleted!!']);
    
    }
}
