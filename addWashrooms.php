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
    <!-- Comment -->
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
            
            
        <?php 

        ?>
           <!--
            <div class="col-xs-12 form-group text-center">
            <fieldset class="rating text-center">
              <div class="col-xs-12 text-center">Smell: </div>  
                <br/>
    <input type="radio" id="smellstar5" name="smellrating" value="5" /><label class = "full" for="smellstar5" title="Awesome - 5 stars"></label>
    <input type="radio" id="smellstar4half" name="smellrating" value="4.5" /><label class="half" for="smellstar4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="smellstar4" name="smellrating" value="4" /><label class = "full" for="smellstar4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="smellstar3half" name="smellrating" value="3.5" /><label class="half" for="smellstar3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="smellstar3" name="smellrating" value="3" /><label class = "full" for="smellstar3" title="Meh - 3 stars"></label>
    <input type="radio" id="smellstar2half" name="smellrating" value="2.5" /><label class="half" for="smellstar2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="smellstar2" name="smellrating" value="2" /><label class = "full" for="smellstar2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="smellstar1half" name="smellrating" value="1.5" /><label class="half" for="smellstar1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="smellstar1" name="smellrating" value="1" /><label class = "full" for="smellstar1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="smellstarhalf" name="smellrating" value="0.5" /><label class="half" for="smellstarhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
            <div class="col-xs-12 form-group text-center">
            <fieldset class="rating">
            <div class="col-xs-12 text-center">Cleanliness: </div>  
                <br/>
    <input type="radio" id="cleanstar5" name="cleanrating" value="5" /><label class = "full" for="cleanstar5" title="Awesome - 5 stars"></label>
    <input type="radio" id="cleanstar4half" name="cleanrating" value="4.5" /><label class="half" for="cleanstar4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="cleanstar4" name="cleanrating" value="4" /><label class = "full" for="cleanstar4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="cleanstar3half" name="cleanrating" value="3.5" /><label class="half" for="cleanstar3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="cleanstar3" name="cleanrating" value="3" /><label class = "full" for="cleanstar3" title="Meh - 3 stars"></label>
    <input type="radio" id="cleanstar2half" name="cleanrating" value="2.5" /><label class="half" for="cleanstar2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="cleanstar2" name="cleanrating" value="2" /><label class = "full" for="cleanstar2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="cleanstar1half" name="cleanrating" value="1.5" /><label class="half" for="cleanstar1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="cleanstar1" name="cleanrating" value="1" /><label class = "full" for="cleanstar1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="cleanstarhalf" name="cleanrating" value="0.5" /><label class="half" for="cleanstarhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
            <div class="col-xs-12 form-group text-center">
            <fieldset class="rating">
            <div class="col-xs-12 text-center">Traffic: </div>  
                <br/>
    <input type="radio" id="trafficstar5" name="trafficrating" value="5" /><label class = "full" for="trafficstar5" title="Awesome - 5 stars"></label>
    <input type="radio" id="trafficstar4half" name="trafficrating" value="4.5" /><label class="half" for="trafficstar4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="trafficstar4" name="trafficrating" value="4" /><label class = "full" for="trafficstar4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="trafficstar3half" name="trafficrating" value="3.5" /><label class="half" for="trafficstar3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="trafficstar3" name="trafficrating" value="3" /><label class = "full" for="trafficstar3" title="Meh - 3 stars"></label>
    <input type="radio" id="trafficstar2half" name="trafficrating" value="2.5" /><label class="half" for="trafficstar2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="trafficstar2" name="trafficrating" value="2" /><label class = "full" for="trafficstar2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="trafficstar1half" name="trafficrating" value="1.5" /><label class="half" for="trafficstar1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="trafficstar1" name="trafficrating" value="1" /><label class = "full" for="trafficstar1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="trafficstarhalf" name="trafficrating" value="0.5" /><label class="half" for="trafficstarhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
                                -->
                                <input type="submit" class="btn btn-primary" name="#" id="#" value="Submit"/>
                            </form> 
        
        
            
            
        
    </div>
    <script>
    $("#sub").click(function(){
        var show = true;
      });
   
    </script>
    </body>
</html>