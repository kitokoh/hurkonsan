<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Admin\Contact;
use http\Env\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Mail;

class MailSiteController extends Controller
{
    static function send($request,$type)
    {
        //dd($request);

        if($type == 'contact_form'){
            $objDemo = new Contact();
            $objDemo->name = $request->name;
            $objDemo->email = $request->email;
            $objDemo->telephone = $request->telephone;
            $objDemo->subject = $request->subject;
            $objDemo->message = $request->message;
            $objDemo->type = $type;
        }

        Mail::to("bilgi@hurkonsanpres.com")->send(new ContactMail($objDemo));
    }
}
