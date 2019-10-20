@extends('Layout')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header">
                <h2>Creer un Contact</h2>
            </div>
            <p>veuillez remplir ce formulaire pour creer un contact</p>
            <form action="{{route('contact_edit',$contact->id)}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label">Name</label>
                    <input type="text" name="name" class="form-control" required  value="{{$contact->nom}}">
                </div>
                <div class="form-group">
                    <label class="control-label">Prenom</label>
                    <input type="text" name="prenom" class="form-control" required  value="{{$contact->prenom}}">
                </div>
                <div class="form-group">
                    <label class="control-label">Civilite</label>
                    <input type="text" name="civilite" class="form-control"  value="{{$contact->civilite}}">
                </div>
                <div class="form-group">
                    <label class="control-label">Telephone</label>
                    <input type="tel" name="telephone" class="form-control"  value="{{$contact->telephone}}">
                </div>
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input type="email" name="email" class="form-control"  value="{{$contact->email}}">
                </div>
                <div class="form-group">
                    <label class="control-label">Societe</label>
                    <input type="text" name="societe" class="form-control"  value="{{$contact->societe}}">
                </div>
                <div class="form-group">
                    <label class="control-label">Ville</label>
                    <input type="text" name="ville" class="form-control"  value="{{$contact->ville}}">
                </div>
                <div class="form-group">
                    <label class="control-label">Naissance</label>
                    <input type="date" name="date" class="form-control"  value="{{$contact->naissance}}">
                </div>
                <input type="submit" class="btn btn-primary creer" value="Ajouter">
                <a href="../index.html" class="btn btn-default">Annuler</a>
            </form>
        </div>
    </div>



@endsection




