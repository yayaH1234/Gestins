<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incident;
use Redirect;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //

    public function addinspostm(Request $request){
        
        $incident=new Incident;
        $validatedData = $request->validate([
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
          ]); // php artisan make:model Incident


          try{

       DB::table('incidents')->insert([
        'num_facture' => $request->input('num_facture'),
            'motif' => $request->input('motif'),
            'societe' => $request->input('societe'),
            'description' => $request->input('description'),
            'dates' => $request->input('dates'),
            'livreur' => $request->input('livreur'),
            'decision' => $request->input('decision'),
            'vendu_a' => $request->input('vendu_a'),
            'client' => $request->input('client'),
            'service_resp' =>$request->input('service_resp'),
            'regelement_revente' => $request->input('regelement_revente'),
            'prixvente' => $request->input('prix_vente'),
            'commercial' => $request->input('commercial')
    ]);
       }catch(\Exception $e){
        // do task when error
        return $e->getMessage();   // insert query
     }

      /*    $incident->id=rand(1,90000);
          $incident->num_facture=$request->input('num_facture');
          $incident->motif=$request->input('motif');
          $incident->societe=$request->input('societe');
          $incident->description=$request->input('description');
          $incident->dates=$request->input('dates');
          $incident->livreur=$request->input('livreur');
          $incident->decision=$request->input('decision');
          $incident->vendu_a=$request->input('vendu_a');
          $incident->client=$request->input('client');
          $incident->service_resp=$request->input('service_resp');
          $incident->regelement_revente=$request->input('regelement_revente');
          $incident->prixvente=$request->input('prix_vente');
          $incident->commerciale=$request->input('commerciale');
            $incident->save();*/
            return view('addins')->with('message','Operation Successful !');
/*
         return $request->input('num_facture').' '.$request->input('motif').' '.$request->input('societe').' '
         .$request->input('description').' '.$request->input('dates').' '.$request->input('livreur').' '
         .$request->input('decision').' '.$request->input('vendu_a').' '.$request->input('client').' '
         .$request->input('service_resp').' '.$request->input('regelement_revente').' '.$request->input('prix_vente');
*/
    /*      $message->id=rand(1,5000);
          $message->first_name = $request->input('first-name');
          $message->last_name = $request->input('last-name');
          $message->email = $request->input('email');
          $message->phone = $request->input('phone');
          $message->message = $request->input('message');
          $message->save();
      */    //dd($request->all()); 
        //  return $first_name." ".$last_name." ".$email." ".$phone." ".$message;
        
        
        //return Redirect::back()->with('message','Operation Successful !');
    }

    public function showincidentlist(){
        $incidents = Incident::all();
        return view('showins',compact('incidents'));
    }


}
