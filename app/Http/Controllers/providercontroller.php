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
        $req->validate([
            'name'=>'required',
            'link'=>'required',
            'user'=>'required',
            'password'=>'required',
            'location'=>'required',
            'comment'=>'required'

        ]);
      //  return  $req->input();

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
    public function cancel()

    {
        return view('appsupport.layout');
    }
    public function show()

    {


        $pro = Provider::all();
        return view('appsupport.addproviders',compact('pro'));
    }
    public function delete($id)

    {
        $pro = Provider::find($id);

        //$pro::delete('delete from providers whre id =?',[$id]);

        $pro ->delete();

        return redirect('addprov');

    }
}
