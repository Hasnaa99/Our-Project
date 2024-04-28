<x-master title="Ajouter stagiaire">
<div class="container mt-5">
    <h2>Ajouter un nouveau stagiaire</h2>
    <form action="{{route('stagiaires.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
            @if($errors->any())
            <x-alert type="danger">
                <h6>Error</h6>
                <ul>
                    @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                    @endforeach
                </ul>
            </x-alert>
            @endif
  
        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom')}}">
        </div>
        @error('nom')
        <div class="text-danger">
            {{$message}}
        </div>
        @enderror

        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom :</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom')}}" >
        </div>
        @error('prenom')
            <div class="text-danger">
                {{$message}}
            </div>
        @enderror

        <div class="mb-3">
            <label for="age" class="form-label">Âge :</label>
            <input type="text" class="form-control" id="age" name="age" value="{{ old('age')}}">
        </div>
        @error('age')
            <div class="text-danger">
                {{$message}}
            </div>
        @enderror

        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email')}}">
        </div>
        @error('email')
            <div class="text-danger">
                {{$message}}
            </div>
        @enderror

        <div class="mb-3">
            <label for="filiere" class="form-label">Filière :</label>
            <input type="text" class="form-control" id="filiere" name="filiere" value="{{ old('filiere')}}">
        </div>
        @error('filiere')
            <div class="text-danger">
                {{$message}}
            </div>
        @enderror
        <div class="mb-3">
            <label for="image" class="form-label">Image :</label>
            <input type="file" class="form-control" id="image" name="image" >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de pass :</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <div class="mb-3">
            <label for="password_confirm" class="form-label">Confirmer le mot de pass :</label>
            <input type="password" class="form-control" id="password_confirm" name="password_confirmation" >
        </div>
        <button type="submit" class="btn btn-primary">Ajouter stagiaire</button>
    </form>
</div>
</x-master>
