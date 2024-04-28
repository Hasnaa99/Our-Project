<x-master title="Infos Stagiaire">
    <h3 class="m-3">Les informations de stagiaire {{$stagiaire->id}}</h3>
    {{-- @if($stagiaire->image)
        <img src="{{ asset('storage/' . $stagiaire->image) }}"/>
    @else
        <img src="{{ asset('storage/image.jpg') }}"/>
    @endif --}}
    <p class="m-4"><b>Nom et prénom :</b> {{$stagiaire->nom}} {{$stagiaire->prenom}} </p>
    <p class="m-4"><b>Age : </b>{{$stagiaire->age}}</p>
    <p class="m-4"><b>Filiére:</b> {{$stagiaire->filiere}}</p>
</x-master>


