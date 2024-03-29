<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use App\Http\Requests\catalog\CatalogCreateRequest;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{

    public function __construct()
    {
      $this->middleware('catalog.access:SPDSSAdministrator,RegisteredCustomer')->only(['index', 'show']);

      $this->middleware('catalog.access:SPDSSAdministrator,null')->only(['create', 'store', 'edit', 'update', 'delete']);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if($user->role == "SPDSSAdministrator")
        {
        $items = catalog::all()->sortByDesc('name');
        } else
        {
            if($user->type == "Commercial")
            {
                $items = catalog::all()->where('sale_type', '=', 'Commercial')->sortByDesc('name');
            } else
            {
                $items = catalog::all()->where('sale_type', '=', 'Residential')->sortByDesc('name');
            }
        }
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
    public function store(CatalogCreateRequest $request)
    {
      $catalog = Catalog::create([
              'name' => $request->name,
              'description' => $request->description,
              'price' => $request->price,
              'company' => $request->company,
              'sale_type' =>$request->sale_type,
              'type' =>$request->type,
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
        $catalog = Catalog::find($id);
        $catalog->company = $request->company;
        $catalog->name = $request->name;
        $catalog->description = $request->description;
        $catalog->price = $request->price;
        $catalog->sale_type = $request->sale_type;
        $catalog->type = $request->type;
        $catalog->save();
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
        return redirect(url('catalog'));
    }
}
