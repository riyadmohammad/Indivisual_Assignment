<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use Validator;
class AddbusesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.addBuses');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $all = Bus::all();
        return view('admin.allBuses', ['all'=>$all]);

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
        $validation = Validator::make($request->all(), [

			'name'=>'required|unique:buses',
			'operator'=>'required',
			'seat_row'=>'required',
			'seat_column'=>'required',
            'location'=>'required',
            'rout'=>'required',
            'departure'=>'required',
            'arrival'=>'required',
        
        ]);

        if($validation->fails()){
			return back()
					->with('errors', $validation->errors())
					->withInput();
        }

        $bus = new Bus();

        $bus->name =$request->name;
        $bus->operator =$request->operator;
        $bus->seat_row =$request->seat_row;
        $bus->seat_column =$request->seat_column;
        $bus->location =$request->location;
        $bus->rout =$request->rout;
        $bus->departure =$request->departure;
        $bus->arrival =$request->arrival;
        $bus->save();

        return redirect()->back();
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


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $find = Bus::where('id', $id)->first();

        return view('admin.editBuses', compact('find'));
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

        $validation = Validator::make($request->all(), [

			'name'=>'required',
			'operator'=>'required',
			'seat_row'=>'required',
			'seat_column'=>'required',
            'location'=>'required',
            'rout'=>'required',
            'departure'=>'required',
            'arrival'=>'required',
        ]);

        if($validation->fails()){
			return back()
					->with('errors', $validation->errors())
					->withInput();
        }

        $bus = Bus::find($id);
        $bus->name =$request->name;
        $bus->operator =$request->operator;
        $bus->seat_row =$request->seat_row;
        $bus->seat_column =$request->seat_column;
        $bus->location =$request->location;
        $bus->rout =$request->rout;
        $bus->departure =$request->departure;
        $bus->arrival =$request->arrival;
        $bus->save();
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
        $delete = Bus::destroy($id);
        return redirect()->back();
    }
}
