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
            
            
        <?php 

        ?>

                                Smell <input class="text-center" type="text" name="newsmell" id="#" placeholder="Enter rating"/>
                                <br />
                                Cleanliness <input class="text-center" type="text" name="newclean" id="#" placeholder="Enter rating"/>
                                <br />
                                Traffic <input class="text-center" type="text" name="newtraffic" id="#" placeholder="Enter rating"/>
                                <br />
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