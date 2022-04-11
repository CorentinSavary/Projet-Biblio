@extends ('layout')


@section('content')
<h1>Rechercher un client </h1>

<label for="nom">ID client : </label> 
<Input Class="Recherche-Input" Type="Search" Placeholder="Recherche" Aria-Label="Search">
<h2>Emprunt en cours :</h2>

<table class="table table-hover">
        <thead>
          <tr>
            <th>N Emprunt</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
          </tr>
        </thead>
        
      </table>


@endsection