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

       DB::table('incidenttemps')->insert([
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

     public function listserchget(){
        $incidents = new Incident;
        return view('searchins',compact('incidents'));
    }

    public function listserchpost(Request $request){

           
            $incidents = new Incident;
              if($request->input('num_facture') != null){
      
                $incidents = DB::table('incidents')->where('num_facture', 'like', '%'.$request->num_facture.'%')->get();
    }
             if( $request->input('motif') != null){
      
                $incidents = DB::table('incidents')->where('motif', 'like', '%'.$request->motif.'%')->get();
    }
    if( $request->input('description') != null){
      
                $incidents = DB::table('incidents')->where('description', 'like', '%'.$request->description.'%')->get();
    }
    if( $request->input('livreur') != null){
      
                $incidents = DB::table('incidents')->where('livreur', 'like', '%'.$request->livreur.'%')->get();
    }
    if( $request->input('vendu_a') != null){
      
                $incidents = DB::table('incidents')->where('vendu_a', 'like', '%'.$request->vendu_a.'%')->get();
    }
    if( $request->input('decision') != null){
      
                $incidents = DB::table('incidents')->where('decision', 'like', '%'.$request->decision.'%')->get();
    }
    if( $request->has('commercial') != null){
      
                $incidents = DB::table('incidents')->where('commercial', 'like', '%'.$request->commercial.'%')->get();
    }
    if( $request->input('societe') != null ){
      
                $incidents = DB::table('incidents')->where('societe', 'like', '%'.$request->societe.'%')->get();
    }
    if( $request->input('dates') != null){
      
                $incidents = DB::table('incidents')->where('dates', 'like', '%'.$request->dates.'%')->get();
    }
    if( $request->input('prixvente') != null){
      
                $incidents=DB::table('incidents')->where('prixvente', 'like', '%'.$request->prixvente.'%')->get();
    }
    if( $request->input('service_resp') != null){
      
                $incidents=DB::table('incidents')->where('service_resp', '=', $request->service_resp)->get();
    }
     if( $request->input('commercial') != null){
      
                $incidents=DB::table('incidents')->where('commercial', 'like', '%'.$request->commercial.'%')->get();
    }
/*
        $incidents = DB::table('incidents')
                ->where([
    ['num_facture', 'like', $request->num_facture.'%'],
    ['motif', 'like', $request->motif.'%'],
    ['description', 'like', $request->description.'%'],
    ['livreur', 'like', $request->livreur.'%'],
    ['decision', 'like', $request->decision.'%'],
    ['vendu_a', 'like', $request->vendu_a.'%'],
    ['commercial', 'like', $request->motif.'%'],
    ['societe', 'like', $request->societe.'%'],
    ['dates', 'like', $request->dates.'%'],
    ['prixvente', 'like',$request->motif.'%'],
    ['client', 'like', $request->client.'%'],
    ['client', 'like', $request->client.'%'],
])
                ->get();


                */



    


        return view('showserchlist',compact('incidents'));//redirect()->route('showserchlist', [$incidents]);//redirect('showserchlist',compact('incidents'));//view('searchins',compact('incidents'));
      // return $incidents;
    }

public function useradd(){
    return view('adduser');
}
public function useraddpost(Request $request){
        
    
        $validatedData = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required',
            'password1' => 'required',
            'password2' => 'required',
            'radio' => 'required'
          ]);

if($request->password1 == $request->password2){
    $isadm=$request->radio;
    if($isadm == 'false'){
               $isadm=0;
           }
           if($isadm == 'true'){
            $isadm=1;
        }

    DB::table('users')->insert([
    'id' => rand(2,5000),
    'name' => $request->name,
    'email' => $request->email,
    'password' => $request->password1,
    'clienttype' => $request->role,
    'is_admin' => $isadm
]);




}
 return view('adduser');

}



}
