<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function saveContactInfo(Request $request)
    {

        $this->validate($request,[

            'name'=>'required|alpha',
            'email_address'=>'required|email',
            'subject'=>'required|alpha',
            'comment' => 'required'

        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email_address = $request->email_address;
        $contact->subject = $request->subject;
        $contact->comment = $request->comment;
        $contact->save();
        return redirect('/contact');

    }

    public function manageContact(){
        $contacts = Contact::all();
        return view('admin.contact.manage-contact',['contacts'=>$contacts]);

    }
    public function deleteContactInfo($id){
        $contactById = Contact::find($id);
        $contactById->delete();
        return redirect('/contact/manage-contact');
    }
}
