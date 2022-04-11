@extends ('layout')


@section('content')

  
<div class="container">
  <h1>Ajouter un nouveau livre</h1>
  
  
  <form>
  <div class="form-group">
    <label for="titre">Titre </label>
    <input type="text" class="form-control" id="titre" >
  </div>

  <div class="form-group">
    <label for="titre">Type</label>
    <input type="text" class="form-control" id="titre" >
  </div>

  <div class="form-group">
    <label for="titre">Auteur</label>
    <input type="text" class="form-control" id="titre" >
  </div>

  <script type="text/javascript">
/* Voici la fonction javascript qui change la propriété "display"
pour afficher ou non le div selon que ce soit "none" ou "block". */
 
function AfficherMasquer()
{
divInfo = document.getElementById('divacacher');
 
if (divInfo.style.display == 'none')
divInfo.style.display = 'block';
else
divInfo.style.display = 'none';
 
}
</script>
 

<input type="button" class="btn btn-primary mb-2" value="Ajouter un auteur" onClick="AfficherMasquer()" />
 

<div id="divacacher" style="display:none;">
<label for="titre">Auteur</label>
    <input type="text" class="form-control" id="titre" >
</div>
  
  <button type="submit" class="btn btn-primary mb-2">Envoyer</button>
 
</form>
</div>
@endsection
</body>
</html>