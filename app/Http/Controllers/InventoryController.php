<?php

namespace App\Http\Controllers;;
use Illuminate\Http\Request;
use App\Models\Inventory;
class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Inventory = Inventory::all();
        
        return view('index',compact('Inventory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('create');

    }

    /**
     * Store a newly created resource  in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'id_type'=> 'required',
            'buy_date'=>'required',
            'price' => 'required',
            'waranty' => 'required',
            's/n' => 'required',
            'model' => 'required',

        ]);
        print_r($request->all());
        $show = Inventory::create($validatedData);
   
        // return redirect('/inventory')->with('success', 'Inventory is successfully saved');
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
    public function edit($id_inv)
    {
        $edit = Inventory::findOrFail($id_inv);

        return view('edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_inv)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'id_type'=> 'required',
            'buy_date'=>'required',
            'price' => 'required',
            'waranty' => 'required',
            's/n' => 'required',
            'model' => 'required',
        ]);
        Inventory::where('id_inv',$id_inv)->update($validatedData);

        return redirect('/inventory')->with('success', 'update Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_inv)
    {
        $Inv = Inventory::findOrFail($id_inv);
        $Inv->delete();

        return redirect('/inventory')->with('success', 'delete Data is successfully deleted');
    }
}
