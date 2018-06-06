<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\rfusers;
use App\Http\Resources\rfusers as RFusersResource;
class RfusersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rfuser = rfusers::all();
        // Get users 
        return RFusersResource::collection($rfuser);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $rfcodeArray = rfusers::all() -> last() -> pluck('rfcode');
        if(count($rfcodeArray) > 0){
            $lastRfid =  $rfcodeArray[count($rfcodeArray)-1];
            $lastRfidValue = substr($lastRfid, -3);
            $newRfid = ($lastRfidValue+1);
        }else{
            $newRfid = 200; 
        }
        

        $rfuser = new rfusers;
        $rfuser->email  = $request->input('email'); 
        $rfuser->age    = $request->input('age'); 
        $rfuser->height = $request->input('height'); 
        $rfuser->weight = $request->input('weight'); 
        $rfuser->chest  = $request->input('chest'); 
        $rfuser->rfcode = 'rf'.$newRfid;
        if($rfuser->save()){
            return new RFusersResource($rfuser);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rfuser =rfusers::where('rfcode', $request->rfid)->firstOrFail();
        
        $rfuser->email  = $request->input('email'); 
        $rfuser->age    = $request->input('age'); 
        $rfuser->height = $request->input('height'); 
        $rfuser->weight = $request->input('weight'); 
        $rfuser->chest  = $request->input('chest'); 
        
        if($rfuser->save()){
            return new RFusersResource($rfuser);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
       //echo $request->path();
       // echo $id;
       $rfuserid = rfusers::where('rfcode', $id)->firstOrFail();
        
       // Return single rfuser
       return new RFusersResource($rfuserid);
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
    }
}
