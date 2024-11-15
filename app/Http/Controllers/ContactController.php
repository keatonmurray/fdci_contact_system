<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $term = $request->input('query');
        $users = $term ? Contact::search($term)->get() : Contact::all();
    
        $data = [
            'term' => $term,
            'users' => $users
        ];
        
        return view('contact.index')->with('data', $data);
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|max:35',
            'last_name' => 'required|max:35',
            'phone_number' => [
                'required',
                'regex:/^\+?[0-9]{1,3}[-.\s]?(\(?[0-9]{1,4}\)?[-.\s]?){1,3}[0-9]{1,4}$/',
                'unique:contacts,phone_number,',
                'max:18'
            ],
            'email_address' => 'required|email|unique:contacts,email_address',
            'company_name' => 'required'
        ]);
    
        Contact::create($data);
        return redirect()->route('contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $get_user = Contact::find($id);
        return view('contact.edit')->with('user', $get_user);
    }

    /**
     * Update the specified resource in storage.
     */
        public function update(Request $request, string $id)
        {
            $contact = Contact::findOrFail($id); // Will throw a 404 error if the contact is not found

        $validatedData = $request->validate([
            'first_name' => 'required|max:35',
            'last_name' => 'required|max:35',
           'phone_number' => [
                'required',
                'regex:/^\+?[0-9]{1,3}[-.\s]?(\(?[0-9]{1,4}\)?[-.\s]?){1,3}[0-9]{1,4}$/',
                'unique:contacts,phone_number,' . $id,
                'max:18'
            ],
            'email_address' => 'required|email|unique:contacts,email_address,' . $id,
            'company_name' => 'required'
        ]);

        $contact->update($validatedData);

        return redirect()->route('contact');
            
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id); 
        $contact->delete();
    
        return redirect()->route('contact');
    }
}
