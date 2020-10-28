<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('index', [
            'contacts' => $contacts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->slug = $this->makeSlug($request->all()['fname'], $request->all()['lname']);
        $contact->fname = $request->all()['fname'];
        $contact->lname = $request->all()['lname'];
        $contact->phone = $request->all()['phone'];
        $contact->mail = $request->all()['email'];
        $contact->note = $request->all()['note'];
        $contact->save();
        $contacts = Contact::all();
        return view('index', [
            'contacts' => $contacts
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Contact $contact)
    {
        $contact = Contact::find($request['id']);
        $contact->fname = $request['fname'];
        $contact->lname = $request['lname'];
        $contact->phone = $request['phone'];
        $contact->mail = $request['mail'];
        $contact->note = $request['note'];
        $contact->save();
        $contacts = Contact::all();
        return view('index', [
            'contacts' => $contacts
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $contact = \DB::table('contacts')->where('slug', $request['name'])->first();
        return view('edit', [
            'contact' => $contact
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Contact $contact)
    {
        //$contact = \DB::table('contacts')->where('id', $request['name'])->first();
        $contact = Contact::find($request['name']);
        $contact->delete();
        $contacts = Contact::all();
        return view('index', [
            'contacts' => $contacts
        ]);
    }

    public function makeSlug( string $fname, string $lname) : string
    {
        $string = $fname.'-'.$lname;
        $string = strtolower($string);
        $string = preg_replace('/á/', 'a', $string);
        $string = preg_replace('/é/', 'e', $string);
        $string = preg_replace('/ě/', 'e', $string);
        $string = preg_replace('/č/', 'c', $string);
        $string = preg_replace('/í/', 'i', $string);
        $string = preg_replace('/ý/', 'y', $string);
        $string = preg_replace('/š/', 's', $string);
        $string = preg_replace('/ú/', 'u', $string);
        $string = preg_replace('/ů/', 'u', $string);
        $string = preg_replace('/ř/', 'r', $string);
        $string = preg_replace('/ť/', 't', $string);
        return $string;
    }
}
