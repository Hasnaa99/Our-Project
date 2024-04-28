<x-master title="Ajouter stagiaire">
    <div class="container mt-5">
        <h2>Modifier stagiaire</h2>
        <form action="{{route('stagiaires.update',$stagiaire->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
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
                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom',$stagiaire->nom)}}">
            </div>
            @error('nom')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
    
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom',$stagiaire->prenom)}}" >
            </div>
            @error('prenom')
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror
    
            <div class="mb-3">
                <label for="age" class="form-label">Âge :</label>
                <input type="text" class="form-control" id="age" name="age" value="{{ old('age',$stagiaire->age)}}">
            </div>
            @error('age')
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror
    
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="text" class="form-control" id="email" name="email" value="{{old('email',$stagiaire->email)}}">
            </div>
            @error('email')
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror
    
            <div class="mb-3">
                <label for="filiere" class="form-label">Filière :</label>
                <input type="text" class="form-control" id="filiere" name="filiere" value="{{ old('filiere',$stagiaire->filiere)}}">
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
            <button type="submit" class="btn btn-primary">Modifier stagiaire</button>
        </form>
    </div>
    </x-master>
    