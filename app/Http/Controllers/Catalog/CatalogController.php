<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Http\Requests\catalog\CatalogCreateRequest;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = catalog::all();
		return view('catalog/index')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalog = new Catalog;
		return view('catalog/create')->with('catalog', $catalog);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$catalog = Catalog::create([
						'name' => $request->name,
						'description' => $request->description,
						'price' => $request->price,
            'company' => $request->company,
		]);
    return redirect(url('catalog'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $item = Catalog::findOrFail($id);
      return view('catalog/show')->with('item', $item);
      
    }

    public function filter($price)
    {
      if(Catalog::where('price', $price)->exists())
      {
        $category = Catalog::where('price', $price)->first();
        $items = Catalog::where('price', $category->$price)->get();
        return view('catalog/filter')->with('items', $items);
      }
      else
      {
        return redirect('/')->with('status', "Category does not exists");
      }
      //if(Catalog)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $catalog = Catalog::findOrFail($id);
      return view('catalog/edit')->with('catalog', $catalog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CatalogCreateRequest $request, $id)
    {
      $item = Catalog::find($id);
      $item->vehicleMake = $request->vehicleMake;
      $item->vehicleModel = $request->vehicleModel;
      $item->vehicleType = $request->vehicleType;
      $item->year = $request->year;
      $item->price = $request->price; 
      $item->save();
      return redirect(url('catalog'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Catalog::findOrFail($id);
		$item->delete();
		return redirect() ->back();
    }
}
