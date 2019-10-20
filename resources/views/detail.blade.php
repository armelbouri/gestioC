@extends('Layout')
@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="page-header">
                <h2>Les details d'un contact</h2>
            </div>
            <div class="panel panel-primary">
                <div class="panel panel-heading">consulter les informations d'un contact</div>
                <div class="panel panel-body">
                    <div class="card">
                        <p class="text"><strong>Nom : </strong><span class="text">{{$contact->nom}}</span></p>
                        <p class="text"><strong>Prenom : </strong><span class="text">{{$contact->prenom}}</span></p>
                        <p class="text"><strong>Civilite : </strong><span class="text">{{$contact->civilite}}</span></p>
                        <p class="text"><strong>Telephone : </strong><span class="text">{{$contact->telephone}}</span></p>
                        <p class="text"><strong>Email : </strong><span class="text">{{$contact->email}}</span></p>
                        <p class="text"><strong>Societe : </strong><span class="text">{{$contact->societe}}</span></p>
                        <p class="text"><strong>Ville : </strong><span class="text">{{$contact->ville}}</span></p>
                        <p class="text"><strong>Date Naissance : </strong><span class="text">{{$contact->naissance}}</span></p>

                    </div>


                </div>

            </div>


        </div>
    </div>



@endsection




