<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>GFG- Store Data</title>
</head>
  
<body>
    <center>
        <h1>Storing Form data in Database</h1>
  
        <form method="post" action="{{route('nizar.affichage')}}">
        @Csrf 
              
              
<p>
                <label for="typepartie">typepartie:</label>
                <input type="int" name="tp" id="tp">
            </p>
              
         <input type="submit" value="Submit">
        </form>
    </center>
  
   
  
</html>
 