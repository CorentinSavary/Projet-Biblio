
@extends ('layout')


@section('content')

<div class="container">
      <h1>Liste des clients</h1>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>id_client</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>NPA</th>
            <th>Ville</th>
            <th>Numéro Tel</th>

          </tr>
        </thead>
        
      </table>
      <table class="table table-dark table-hover">
@endsection
</body>
</html>