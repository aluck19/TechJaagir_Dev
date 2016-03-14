<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function executeSearch()
    {

        echo "here";
        $keywords  = Input::get('keywords');

        $users = User::all();

        $searchUsers = new \Illuminate\Database\Eloquent\Collection();

        foreach($users as $u){
            if(Str::contains(Str::lower($u->name), Str::lower($keywords)))
                $searchUsers->add($u);
        }

        return View::make("test/searchUsers")->with('searchUsers', $searchUsers);
    }
}
