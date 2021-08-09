<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form method="POST" action="{{ route('inscrit') }}" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <input type="file" name="picture" >
    {{ $errors->first('picture', ':message') }}
    <input type="submit" value="Valider" >
</form>
</body>
