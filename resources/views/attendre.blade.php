<!DOCTYPE html>
<h3>ajout avec succes</h3>
<form method="post" action="{{route('n.base')}}">
        @Csrf 
              
              
<p>
                <label for="typepartie">typepartie:</label>
                <input type="int" name="tpr" id="tpr">
            </p>
            <p>
                <label for="user">typepartie:</label>
                <input type="int" name="usr" id="usr">
            </p>
         <input type="submit" value="Submit">
        </form>