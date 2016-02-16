<?php

namespace Api\Controllers;

use App\Http\Requests;
use App\Wydatek;
use Illuminate\Http\Request;
use Api\Requests\WydatkiRequest;
use Api\Transformers\WydatkiTransformer;

/**
 * @Resource('Wydatki', uri='/wydatki')
 */
class WydatkiController extends BaseController
{

    public function __construct() 
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Show all dogs
     *
     * Get a JSON representation of all the dogs
     * 
     * @Get('/')
     */
    public function index()
    {
//        return Wydatek::all();
        return $this->collection(Wydatek::all(), new WydatkiTransformer);
    }

    /**
     * Store a new dog in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WydatkiRequest $request)
    {
        return Wydatek::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->item(Wydatek::findOrFail($id), new WydatkiTransformer);
    }

    /**
     * Update the dog in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WydatkiRequest $request, $id)
    {
        $dog = Wydatek::findOrFail($id);
        $dog->update($request->all());
        return $dog;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Wydatek::destroy($id);
    }
}
