<div class="row">
    <div class="col-md-12">
        <div class="page-header clearfix">
            <h2 class="pull-left">Liste des Contacts</h2>
            <a href='{{route('ajouter_contact')}}' class="btn btn-success pull-right">Ajout Contact</a>
        </div>

        <table class='table table-bordered table-striped'>
            <thead>
            <tr>
                <th>No</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Civilite</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Societe</th>
                <th>Ville</th>
                <th>Naissance</th>
                <th>operation</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->nom}}</td>
                    <td>{{$contact->prenom}}</td>
                    <td>{{$contact->civilite}}</td>
                    <td>{{$contact->telephone}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->societe}}</td>
                    <td>{{$contact->ville}}</td>
                    <td>{{$contact->naissance}}</td>
                    <td>
                        <a href='{{route('detail',$contact->id)}}' title='detail' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span>detail</a>
                        <a href='' title='editer' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'>editer</span></a>
                        <a href='{{route('suppression',$contact->id)}}' title='suppression' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span>supprimer</a>
                    </td>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
