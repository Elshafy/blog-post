<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;
use Illuminate\Support\Facades\Auth ;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $id   = Auth::id();
        if($user->profile== null){
            $profile=Profile::create([
                'province'=>'syira',
                'user_id'=>$id,
                'gender'=>'male',
                'bio'=>'Hello',
                'facebook' =>'syria'
            ]);
        }
        return view('users.profile')->with('user',$user);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'name'      => 'required',
            'province'  => 'required',
            'gender'    =>'required',
            'bio'       =>'required'

        ]);

        $user =Auth::user();
        $user->profile->province=$request->province;
        $user->profile->facebook=$request->facebook;
        $user->name=$request->name;
        $user->profile->gender=$request->gender;
        $user->profile->bio=$request->bio;
        $user->profile->save();
        if($request->has('password')){
            $user->password= bcrypt( $request->password);

        }
        $user->save();

         return redirect()->back();


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
    }
}
