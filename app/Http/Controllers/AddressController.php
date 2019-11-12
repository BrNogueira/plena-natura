<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserAddress;

class AddressController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $data['address'] = UserAddress::where('user_id', \Auth::user()->id)->get();
        return view('address.my_address',$data);
    }

    public function newAddress(){
        return view('address.new');
    }

    public function new(Request $request){
        $address = new UserAddress;
        $address->title       = $request->title;
        $address->cep         = $request->cep;
        $address->street      = $request->street;
        $address->city        = $request->city;
        $address->district    = $request->district;
        $address->state       = $request->state;
        $address->number      = $request->number;
        $address->complements = isset($request->complements) ? $request->complements : '';
        $address->main        = 0;
        $address->user_id     = \Auth::user()->id;
        if($address->save()){
             return redirect('/meus-enderecos');
        }else{
            return redirect('/meus-enderecos/novo');
        }
    }
    public function editAddress($id){
        $data['address'] = UserAddress::where('id', $id)
                          ->where('user_id', \Auth::user()->id)->first();
        return view('address.edit', $data);
    }

    public function edit(Request $request, $id){
        $address = UserAddress::find($id);
        $address->title       = $request->title;
        $address->cep         = $request->cep;
        $address->street      = $request->street;
        $address->city        = $request->city;
        $address->district    = $request->district;
        $address->state       = $request->state;
        $address->number      = $request->number;
        $address->complements = isset($request->complements) ? $request->complements : '';
        $address->main        = 0;
        if($address->save()){
             return redirect('/meus-enderecos');
        }else{
            return redirect('/meus-enderecos/edit/' . $id);
        }
    }

    public function delete($id){
        $delete = UserAddress::where('id', $id)->where('user_id', \Auth::user()->id)->delete();
        return redirect('/meus-enderecos');
    }

    public function setMain(Request $request, $id){
        $data['main'] = 0;
        UserAddress::where('user_id', \Auth::user()->id)->update($data);

        $address = UserAddress::find($id);
        $address->main = 1;
        $address->save();
        $json['success'] = true;
        return  response()->json($json, 200);
    }
}
