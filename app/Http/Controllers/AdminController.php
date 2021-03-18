<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users= User::all();

        
        
        return view('userlist',compact('users'));
        
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($userid)
    {
        //
        $user=User::where('id',$userid)->firstOrFail();
        return view('showuser',compact('user'));
     //  return redirect()->route('showuser',$user)->with('message', 'correctly!!!');;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($userid)
    {
        //
        $user=User::where('id',$userid)->firstOrFail();
        return view('updateuser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userid)
    {
        //

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password1' => 'required',
            'password2' => 'required',
            'role' => 'required',
            'radio' => 'required',

        ]);

       // DB::table('users')->where('id', $userid)->update(['payment' => 1]);

       $nm=request('name');
       $email=request('email');
       $pwd1=request('password1');
       $pwd2=request('password2');
       $role=request('role');
       $isadm=request('radio');
       if($pwd1 == $pwd2){
           if($isadm == 'false'){
               $isadm=0;
           }
           if($isadm == 'true'){
            $isadm=1;
        }
        
        
       DB::table('users')->where('id', $userid)->update(['name' => $nm ,
       'email' => $email,
       'password' => Hash::make($pwd1),
       'clienttype' => $role,
       'is_admin' => $isadm
       ]);
       return redirect()->route('userlist.index')->with(['message'=> 'Successfully deleted!!']);
       }
       
       return redirect()->route('userlist.index')->with(['message'=> 'erreur !!']);


  /*
        $blog->update($request->all());
  
        return redirect()->route('blogs.index')
                        ->with('success','Blog updated successfully');*/
       // dd($request->all);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($userid)
    {
        //

        //$user->delete();
        User::where('id',$userid)->firstOrFail()->delete();

     //   User::find($user->id)->delete();

       // return Redirect::back()->with('success','user  deleted successfully');
       return redirect()->route('userlist.index')->with(['message'=> 'Successfully deleted!!']);
    }
}
