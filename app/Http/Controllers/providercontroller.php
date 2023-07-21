<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

class providercontroller extends Controller
{
    //
    public function index()

    {
        return view('appsupport.addproviders');
    }
    public function addprovider(Request $req )

    {
        $provider=new Provider;
        $provider->name=$req->name;
        $provider->link=$req->link;
        $provider->user=$req->user;
        $provider->password=$req->password;
        $provider->location=$req->location;
        $provider->comment=$req->comment;
        $provider->save();
        return redirect('addprov');

        //return view('appsupport.addproviders');
    }
}
