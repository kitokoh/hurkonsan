<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Services;
use Illuminate\Http\Request;
use App\Models\Admin\Contact;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $contactMessages = Contact::all();
        $settings = Services::all();
        return view('admin.pages.contactMessages.index', compact('contactMessages', 'settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->telephone = $request->telephone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $type = 'contact_form';
        
        MailSiteController::send($contact,$type);
        $saved = $contact->save();

        if ($saved) {
            return back()->with('success', 'Mesajınız Gönderildi');
        } else
            return back()->with('error', 'Mesaj Gönderilirken Hata Oluştu');
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Contact $contactMessage)
    {
        return view('admin.pages.contactMessages.show', compact('contactMessage'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */

    public function destroy(Contact $contactMessage, Request $request)
    {
        $contactMessage->delete();

        if ($contactMessage) {
            return redirect()->route('contactMessages.index')->with('success', 'Başarıyla Silindi');
        } else {
            return back()->with('error', 'Bir hata oluştu.');
        }
    }
}
