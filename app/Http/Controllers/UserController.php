<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name=null){
        //$name ='Sherali';
        return view('show',['username'=>$name]);
    }
    public function list(){
        $users=[
            'Komil',
            'Kamol',
            'Jasur',
            'Boxodir',
            'Sherali'
        ];
        return view('users.list',compact('users'));
    }
}