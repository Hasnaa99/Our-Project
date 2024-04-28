<x-master title="Stagiaires">
    <a class="btn btn-success m-2" href={{ route('stagiaires.create') }}>Ajouter un nouveau stagiaire</a>
    <h1 class="m-4">Liste des stagiaires </h1>
        @include('Stagiaire.flashbag')
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom complet</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Filiére</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stagiaires as $stagiaire)
                <tr>
                    <td>{{$stagiaire->id}}</td>
                    <td>{{$stagiaire->nom}} {{$stagiaire->prenom}}</td>
                    <td>{{$stagiaire->age}}</td>
                    <td>{{$stagiaire->email}}</td>
                    <td>{{$stagiaire->filiere}}</td>
                    {{-- <td><img src="{{asset('storage/'.$stagiaire->image)}}"/></td> --}}
                    <td><a class="btn btn-primary" href = {{route('stagiaires.show',$stagiaire->id)}}>Afficher plus</a></button></td>
                    <td>
                        <form method="POST" action="{{route('stagiaires.destroy',$stagiaire->id)}}">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <form method="GET" action="{{route('stagiaires.edit',$stagiaire->id)}}">
                            @method('PUT')
                            @csrf
                            <button class="btn btn-info">Modifier</button>
                        </form>
                    </td>
            
                </tr>
                @endforeach

    
            </tbody>
           
        </table>

</x-master>