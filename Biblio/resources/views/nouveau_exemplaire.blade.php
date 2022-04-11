@extends ('layout')


@section('content')

  
<div class="container">
  <h1>Ajouter un nouveau exemplaire</h1>
  
  
  <form>
  <div class="form-group">
    <label for="ISBN">ISBN </label>
    <input type="text" class="form-control" id="ISBN" >
  </div>

  <div class="form-group">
    <label for="etat">Etat</label>
    <input type="text" class="form-control" id="etat" >
  </div>
  <button type="submit" class="btn btn-primary mb-2">Envoyer</button>
 
</form>
</div>
@endsection
</body>
</html>