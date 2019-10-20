<?php

namespace App\Http\Controllers;
use Redirect;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //recuperation des donnees depuis la bd
        $contacts=Contact::all();
        return  view('list',$contacts)->with('contacts',$contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request)
    {
        if($request->isMethod('post')) {
            $this->validate($request,
                [
                    'nom' => 'required',
                    'prenom' => 'required'
                ],
                [
                    'nom.required'=>'Vous devez renseigner un nom',
                    'prenom.required'=>'Vous devez renseigner un prenom'
                ]);
            $contact = new Contact();
            $contact->nom = $request->input('nom');
            $contact->prenom = $request->input('prenom');
            $contact->civilite = $request->input('civilite');
            $contact->telephone = $request->input('telephone');
            $contact->email = $request->input('email');
            $contact->societe = $request->input('societe');
            $contact->ville = $request->input('ville');
            $contact->naissance = $request->input('naissance');
            $contact->save();
            return redirect::to('');
        }
        else{
            return view('ajouter');
        }

    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::where('id','=', $id)->first();
        return view('detail')->with('contact',$contact);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function edit(Request $request, $id)
    {
        $contact = Contact::where('id','=', $id)->first();
        if($request->isMethod('post')) {
            $this->validate($request,
                [
                    'nom' => 'required',
                    'prenom' => 'required'
                ],
                [
                    'nom.required'=>'Vous devez renseigner un nom',
                    'prenom.required'=>'Vous devez renseigner un prenom'
                ]);
            $contact = new Contact();
            $contact->nom = $request->input('nom');
            $contact->prenom = $request->input('prenom');
            $contact->civilite = $request->input('civilite');
            $contact->telephone = $request->input('telephone');
            $contact->email = $request->input('email');
            $contact->societe = $request->input('societe');
            $contact->ville = $request->input('ville');
            $contact->naissance = $request->input('naissance');
            $contact->save();
            return redirect::to('');
        }
        else{
            return view('editer')->with('contact',$contact);
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
        ]);

        $update = ['nom' => $request->nom, 'prenom' => $request->prenom, 'civilite' => $request->civilite, 'telephone' => $request->telephone, 'email' => $request->email, 'societe' => $request->societe, 'ville' => $request->ville, 'naissance' => $request->naissance ];
        Note::where('id',$id)->update($update);

        return Redirect::to('');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::where('id','=', $id)->first();
        if($contact){
            $contact->delete();
            return Redirect::to('');

        }

    }
}
