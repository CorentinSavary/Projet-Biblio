@extends ('layout')


@section('content')

  
<div class="container">
  <h1>Inscrire un nouveau client</h1>
  
  
  <form action="/nouveau_client" method="POST">
  {{csrf_field()}}
 
  <div class="form-group">
    <label for="nom">Nom </label>
    <input type="text" class="form-control" id="nom" name="nom" >
  </div>

  <div class="form-group">
    <label for="prenom">Prénom </label>
    <input type="text" class="form-control" id="prenom" name="prenom" >
  </div>

  <div class="form-group">
    <label for="adresse">Adresse </label>
    <input type="text" class="form-control" id="adresse" name="adresse">
  </div>

  <div class="form-group">
    <label for="NPA">NPA </label>
    <input type="text" class="form-control" id="NPA" name="NPA" >
  </div>

  <div class="form-group">
    <label for="ville">Ville </label>
    <input type="text" class="form-control" id="ville" name="ville" >
  </div>

  <div class="form-group">
    <label for="tel">Télephone </label>
    <input type="tel" class="form-control" id="tel" name="tel" >
  </div>
  
  <button type="submit" class="btn btn-primary mb-2">Envoyer</button>
 
</form>
</div>
@endsection
</body>
</html>