<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Retrieve all =items.
     *
     * @return Response
     */
    public function index()
    {
        return Item::all();
    }

    /**
     * Retrieve the item for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Item::findOrFail($id);
    }

    /**
     * Store a new item.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        $item = Item::create($request->only(['name', 'description']));

        return response()->json($item, 201);
    }

    /**
     * Update the specified item.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, ['name' => 'alpha_dash']);

        $item = Item::find($id);
        $item->update($request->only(['name', 'description']));

        return $item;
    }

    /**
     * Delete the specified item.
     *
     * @param  string  $id
     * @return Response
     */
    public function destroy($id)
    {
        Item::find($id)->delete();

        return response()->json(null, 204);
    }
}
