<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Server;

class servercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('appsupport.addservers');
    }
    public function addserver(Request $req )

    {
        $req->validate([
            'name'=>'required',
            'ip'=>'required',
            'password'=>'required',
            'domain'=>'required',
            'provider'=>'required',
            'duedate'=>'required',
            'datecreation'=>'required',
            'price'=>'required',
            'methodepayment'=>'required',
            'namesrv'=>'required',
            'account'=>'required',
            'comment'=>'required',

        ]);
      //  return  $req->input();

        $server=new Server;
        $server->name=$req->name;
        $server->ip=$req->ip;
        $server->password=$req->password;
        $server->domain=$req->domain;
        $server->provider=$req->provider;
        $server->duedate=$req->duedate;
        $server->datecreation=$req->datecreation;
        $server->price=$req->price;
        $server->methodepayment=$req->methodepayment;
        $server->namesrv=$req->namesrv;
        $server->account=$req->account;
        $server->comment=$req->comment;
        $server->save();
        return redirect('srvs');

        //return view('appsupport.addproviders');
    }


}
