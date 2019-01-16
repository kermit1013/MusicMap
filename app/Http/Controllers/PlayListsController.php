<?php

namespace App\Http\Controllers;

use App\PlayList;
use Illuminate\Http\Request;
use Response;

class PlayListsController extends Controller
{
    public function index()
    {
        $list = PlayList::all();
        return Response::json($list,200);

    }

    public function add(Request $request)
    {
        $playList= new PlayList;

        $playList->name=$request->input('name');
        $playList->url=$request->input('url');
        $playList->user_id=$request->input(('user_id'));
        $playList->save();

        return Response::json('success',200);
    }

    public function edit(Request $request)
    {
        $playList= PlayList::find($request->input('id'));

        $playList->name=$request->input('name');
        $playList->url=$request->input('url');
        $playList->user_id=$request->input(('user_id'));
        $playList->touch();

        return Response::json('success',200);
    }

    public function delete(Request $request)
    {
        $playList= PlayList::find($request->input('id'));
        try {
            $playList->delete();
        } catch (\Exception $e) {
        }

        return Response::json(null,204);
    }

}
