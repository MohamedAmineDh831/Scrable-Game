<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form method="POST" action="{{ route('n.base') }}" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <input type="file" name="picture" >
    {{ $errors->first('picture', ':message') }}
    <input type="submit" value="Valider" >
</form>
<h3>en cours d'attente</h3>
<h3>defdsfdsfdsr</h3>


</body>
