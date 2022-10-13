<?php

namespace Raj\Contract\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Raj\Contract\Mail\ContractMailable;
use Raj\Contract\Modal\Contract;

class ContractController extends Controller
{
    //
    function index(){
        return view('contract::contract');
    }
    function send(Request $request){
        Mail::to(config('contract.send_email_to'))->send(new ContractMailable($request->message,$request->name));
        Contract::create($request->all());
        return redirect(route('contract'));
    }

}
