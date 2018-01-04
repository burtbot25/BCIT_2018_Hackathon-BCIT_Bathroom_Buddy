<?php session_start(); ?>

<html lang="en">
<head>
	<title>BCIT Bathroom Buddy Add Washroom</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<meta charset="utf-8" />
</head>
<body>
    
    <div class="container text-center">
        <img src="logo.png">
        <div class="col-xs-12, title">
            Add a new washroom!
        </div>
        <form method="post" action="index.php">
          <div class="form-group">
            <label for="building">Building:</label>
            <input type="text" class="form-control" name="building" id="building">
          </div>
          <div class="form-group">
            <label for="floor">Floor:</label>
            <input type="text" class="form-control" name="floor" id="floor">
          </div>
            <div class="form-group">
            <label for="stalls">Stalls:</label>
            <input type="text" class="form-control" name="stalls" id="stalls">
          </div>
            <div class="form-group">
            <label for="urinals">Urinals:</label>
            <input type="text" class="form-control" name="urinals" id="urinals">
          </div>
            
            <div class="col-xs-12">
              <fieldset class="rating" id="smell">
              <legend>Smell:</legend>
              
              <input type="radio" id="star1" name="smell" value="1" class="star"/><label for="star1" title="Sucks big time" class="star">1 star</label>
              <input type="radio" id="star2" name="smell" value="2" class="star"/><label for="star2" title="Kinda bad" class="star">2 stars</label>
              <input type="radio" id="star3" name="smell" value="3" class="star"/><label for="star3" title="Meh" class="star">3 stars</label>
              <input type="radio" id="star4" name="smell" value="4" class="star"/><label for="star4" title="Pretty good" class="star">4 stars</label>
               <input type="radio" id="star5" name="smell" value="5" class="star"/><label for="star5" title="Rocks!" class="star">5 stars</label>
              </fieldset>
            </div>
            
            <div class="col-xs-12">
            <fieldset class="rating" id="clean">
              <legend>Cleanliness:</legend>
               <input type="radio" id="star10" name="clean" value="5" class="star"/><label for="star10" title="Rocks!" class="star">5 stars</label>
                <input type="radio" id="star9" name="clean" value="4" class="star"/><label for="star9" title="Pretty good" class="star">4 stars</label>
                <input type="radio" id="star8" name="clean" value="3" class="star"/><label for="star8" title="Meh" class="star">3 stars</label>
                <input type="radio" id="star7" name="clean" value="2" class="star"/><label for="star7" title="Kinda bad" class="star">2 stars</label>
                <input type="radio" id="star6" name="clean" value="1" class="star"/><label for="star6" title="Sucks big time" class="star">1 star</label>
              </fieldset>
            </div>
            <div class="col-xs-12">
            <fieldset class="rating" id="traffic">
              <legend>Traffic:</legend>
               <input type="radio" id="star20" name="traffic" value="5" class="star"/><label for="star20" title="Rocks!" class="star">5 stars</label>
                <input type="radio" id="star19" name="traffic" value="4" class="star"/><label for="star19" title="Pretty good" class="star">4 stars</label>
                <input type="radio" id="star18" name="traffic" value="3" class="star"/><label for="star18" title="Meh" class="star">3 stars</label>
                <input type="radio" id="star17" name="traffic" value="2" class="star"/><label for="star17" title="Kinda bad" class="star">2 stars</label>
                <input type="radio" id="star16" name="traffic" value="1" class="star"/><label for="star16" title="Sucks big time" class="star">1 star</label>
              </fieldset>
            </div>
            <div class="col-xs-12"><button type="submit" class="btn btn-default">Submit</button></div>
        </form> 
        
    </div>
    </body>
</html>