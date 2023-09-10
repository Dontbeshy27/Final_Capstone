<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pubg_clan;
use Illuminate\Http\Request;

class Pubg_clansApiController extends Controller
{
    public function index()
    {
        return Pubg_clan::all();
    }
   
    public function show(Pubg_clan $pubg_clan)
    {
        return  $pubg_clan;
    }

    public function store(Request $request)
    {
        $pubg_clan = Pubg_clan::create($request->all());
        return response(
            [
                'message' => 'PUBG CLANS is successfully created',
                'pubg_clan' => $pubg_clan,
                'id' => $pubg_clan->id
            ],
            201
        );
    }

    public function update(Request $request, Pubg_clan $pubg_clan)
    {
        $pubg_clan->update($request->all());
        return response([
            'message' => 'PUBG CLANS is successfully updated',
            'employee' => $pubg_clan,
            'id' => $pubg_clan->id
        ]);
    }   

    public function destroy(Pubg_clan $pubg_clan)
    {
        Pubg_clan::destroy($pubg_clan->id);

        return response([
            'message' => 'Pubg clan is successfully deleted'
        ]);
    }
}


