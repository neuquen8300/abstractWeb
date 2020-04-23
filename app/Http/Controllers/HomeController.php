<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contact;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailContact;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }


    public function contact(Contact $request){
        try {
        $contact = $request->validated();

        $info = new Message();
        
            $info->name = $contact['name'];
            $info->contact_info = $contact['contact-info'];
            $info->save();

            Mail::to('dbouzo77@gmail.com')->send(new mailContact($contact));

            return json_encode('success');
        } catch (\Throwable $th) {
            return $th;
        }
        
    }

}
