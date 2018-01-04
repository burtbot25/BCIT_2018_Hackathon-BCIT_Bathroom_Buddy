<?php session_start(); 

extract($_POST);

$cleanRating = $_POST['cleanRating'];
$_SESSION['cleanTotal'];
$_SESSION['cleanCount'];
$smellRating = $_POST['smellRating'];
$_SESSION['smellTotal'];
$_SESSION['smellCount'];
$trafficRating = $_POST['trafficRating'];
$_SESSION['trafficTotal'];
$_SESSION['trafficCount'];

// Clean Rating
if ($_SESSION['cleanCount'] == 0){
    $_SESSION['cleanCount'] = 0;
}

if (isset($cleanRating)){
    $_SESSION['cleanSum'] += $cleanRating;
    $_SESSION['cleanCount'] += 1;
} 

if ($_SESSION['cleanCount'] != 0){
    $_SESSION['cleanTotal'] = round(($_SESSION['cleanSum'] / $_SESSION['cleanCount']), 2);
}

// Smell Rating
if ($_SESSION['smellCount'] == 0){
    $_SESSION['smellCount'] = 0;
}

if (isset($smellRating)){
    $_SESSION['smellSum'] += $smellRating;
    $_SESSION['smellCount'] += 1;
} 

if ($_SESSION['smellCount'] != 0){
    $_SESSION['smellTotal'] = round(($_SESSION['smellSum'] / $_SESSION['smellCount']), 2);
}

// Traffic Rating
if ($_SESSION['trafficCount'] == 0){
    $_SESSION['trafficCount'] = 0;
}

if (isset($trafficRating)){
    $_SESSION['trafficSum'] += $trafficRating;
    $_SESSION['trafficCount'] += 1;
} 

if ($_SESSION['trafficCount'] != 0){
    $_SESSION['trafficTotal'] = round(($_SESSION['trafficSum'] / $_SESSION['trafficCount']), 2);
}

$_SESSION['overallTotal'] = round((($_SESSION['cleanTotal'] + $_SESSION['smellTotal'] + $_SESSION['trafficTotal']) / 3), 2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BCIT Bathroom Buds</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
    <script>var show = false;</script>

</head>

<body>

    <div class="container-fluid text-center">
        <img src="logo.png">
<div class="row">
      <div class="col-12">
       <p class="text-center"><strong>Bathroom Buddies (Team 10) </strong>- Alex, Harman, Rys, Wilbert</p>
       </div></div>
        <br />
        <div class="container">

            <div class="dropdown">
                <button class="dropbtn">Sort by:</button>
                <div class="dropdown-content">
                    <a href="#">Smell</a>
                    <a href="cleanSorted.php">Cleanliness</a>
                    <a href="#">Traffic</a>
                </div>
            </div>
            <br />
            <br />

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top img-fluid" src="bathroom/bathroom1.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">SW4 - 4310</h4>
                        <p class="card-text">This bathroom has 6 stalls and 3 urinals.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Overall: 
                                <?php 
                                    echo $_SESSION['overallTotal']; 
                                ?> 
                            </li>
                            <li class="list-group-item">Smell: 
                                <?php 
                                    if (!isset($_SESSION['smellTotal'])){
                                        $_SESSION['smellTotal'] = 0;
                                    }
                                    echo $_SESSION['smellTotal']; 
                                ?> 
                            </li>
                            
                            <li class="list-group-item">Cleanliness: 
                                <?php 
                                
                                    if (!isset($_SESSION['cleanTotal'])){
                                        $_SESSION['cleanTotal'] = 0;
                                    }
                                    echo $_SESSION['cleanTotal']; 
                                ?> 
                            </li>
                            
                            <li class="list-group-item">Traffic: 
                                <?php
                                    if (!isset($_SESSION['trafficTotal'])){
                                        $_SESSION['trafficTotal'] = 0;
                                    }
                                    echo $_SESSION['trafficTotal']; 
                                ?> 
                            </li>
                            <form class="form" role="form" method="post" action="index.php">
                                
                                
                                
                                <div class="col-xs-12 form-group text-center">
            <fieldset class="rating text-center">
              <div class="col-xs-12 text-center">Smell: </div>  
                <br/>
    <input type="radio" id="smellstar5" name="smellRating" value="5" /><label class = "full" for="smellstar5" title="Awesome - 5 stars"></label>
    <input type="radio" id="smellstar4half" name="smellRating" value="4.5" /><label class="half" for="smellstar4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="smellstar4" name="smellRating" value="4" /><label class = "full" for="smellstar4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="smellstar3half" name="smellRating" value="3.5" /><label class="half" for="smellstar3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="smellstar3" name="smellRating" value="3" /><label class = "full" for="smellstar3" title="Meh - 3 stars"></label>
    <input type="radio" id="smellstar2half" name="smellRating" value="2.5" /><label class="half" for="smellstar2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="smellstar2" name="smellRating" value="2" /><label class = "full" for="smellstar2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="smellstar1half" name="smellRating" value="1.5" /><label class="half" for="smellstar1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="smellstar1" name="smellRating" value="1" /><label class = "full" for="smellstar1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="smellstarhalf" name="smellRating" value="0.5" /><label class="half" for="smellstarhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
            <div class="col-xs-12 form-group text-center">
            <fieldset class="rating">
            <div class="col-xs-12 text-center">Cleanliness: </div>  
                <br/>
    <input type="radio" id="cleanstar5" name="cleanRating" value="5" /><label class = "full" for="cleanstar5" title="Awesome - 5 stars"></label>
    <input type="radio" id="cleanstar4half" name="cleanRating" value="4.5" /><label class="half" for="cleanstar4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="cleanstar4" name="cleanRating" value="4" /><label class = "full" for="cleanstar4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="cleanstar3half" name="cleanRating" value="3.5" /><label class="half" for="cleanstar3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="cleanstar3" name="cleanRating" value="3" /><label class = "full" for="cleanstar3" title="Meh - 3 stars"></label>
    <input type="radio" id="cleanstar2half" name="cleanRating" value="2.5" /><label class="half" for="cleanstar2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="cleanstar2" name="cleanRating" value="2" /><label class = "full" for="cleanstar2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="cleanstar1half" name="cleanRating" value="1.5" /><label class="half" for="cleanstar1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="cleanstar1" name="cleanRating" value="1" /><label class = "full" for="cleanstar1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="cleanstarhalf" name="cleanRating" value="0.5" /><label class="half" for="cleanstarhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
            <div class="col-xs-12 form-group text-center">
            <fieldset class="rating">
            <div class="col-xs-12 text-center">Traffic: </div>  
                <br/>
    <input type="radio" id="trafficstar5" name="trafficRating" value="5" /><label class = "full" for="trafficstar5" title="Awesome - 5 stars"></label>
    <input type="radio" id="trafficstar4half" name="trafficRating" value="4.5" /><label class="half" for="trafficstar4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="trafficstar4" name="trafficRating" value="4" /><label class = "full" for="trafficstar4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="trafficstar3half" name="trafficRating" value="3.5" /><label class="half" for="trafficstar3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="trafficstar3" name="trafficRating" value="3" /><label class = "full" for="trafficstar3" title="Meh - 3 stars"></label>
    <input type="radio" id="trafficstar2half" name="trafficRating" value="2.5" /><label class="half" for="trafficstar2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="trafficstar2" name="trafficRating" value="2" /><label class = "full" for="trafficstar2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="trafficstar1half" name="trafficRating" value="1.5" /><label class="half" for="trafficstar1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="trafficstar1" name="trafficRating" value="1" /><label class = "full" for="trafficstar1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="trafficstarhalf" name="trafficRating" value="0.5" /><label class="half" for="trafficstarhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
                                
                                
                                
                                <input type="submit" class="btn btn-primary rating" name="submit" id="submit" value="Submit"/>
                                
                                
                            </form> 
                        </ul>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 0 mins ago</small>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top img-fluid" src="bathroom/bathroom2.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Tim Horton's SE9</h4>
                        <p class="card-text">This bathroom has 3 stalls and 3 urinals.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Overall: 3.83</li>
                            <li class="list-group-item">Smell: 3.5</li>
                            <li class="list-group-item">Cleanliness: 4</li>
                            <li class="list-group-item">Traffic: 4</li>
                            <form class="form" role="form" method="post" action="#">
                                <div class="col-xs-12 form-group text-center">
            <fieldset class="rating text-center">
              <div class="col-xs-12 text-center">Smell: </div>  
                <br/>
    <input type="radio" id="#" name="#" value="5" /><label class = "full" for="#" title="Awesome - 5 stars"></label>
    <input type="radio" id="#" name="#" value="4.5" /><label class="half" for="#" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="#" name="#" value="4" /><label class = "full" for="#" title="Pretty good - 4 stars"></label>
    <input type="radio" id="#" name="#" value="3.5" /><label class="half" for="#" title="Meh - 3.5 stars"></label>
    <input type="radio" id="#" name="#" value="3" /><label class = "full" for="#" title="Meh - 3 stars"></label>
    <input type="radio" id="#" name="#" value="2.5" /><label class="half" for="#" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="#" name="#" value="2" /><label class = "full" for="#" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="#" name="#" value="1.5" /><label class="half" for="#" title="Meh - 1.5 stars"></label>
    <input type="radio" id="#" name="#" value="1" /><label class = "full" for="#" title="Sucks big time - 1 star"></label>
    <input type="radio" id="#" name="#" value="0.5" /><label class="half" for="#" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
            <div class="col-xs-12 form-group text-center">
            <fieldset class="rating">
            <div class="col-xs-12 text-center">Cleanliness: </div>  
                <br/>
    <input type="radio" id="#" name="#" value="5" /><label class = "full" for="#" title="Awesome - 5 stars"></label>
    <input type="radio" id="#" name="#" value="4.5" /><label class="half" for="#" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="#" name="#" value="4" /><label class = "full" for="#" title="Pretty good - 4 stars"></label>
    <input type="radio" id="#" name="#" value="3.5" /><label class="half" for="#" title="Meh - 3.5 stars"></label>
    <input type="radio" id="#" name="#" value="3" /><label class = "full" for="#" title="Meh - 3 stars"></label>
    <input type="radio" id="#" name="#" value="2.5" /><label class="half" for="#" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="#" name="#" value="2" /><label class = "full" for="#" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="#" name="#" value="1.5" /><label class="half" for="#" title="Meh - 1.5 stars"></label>
    <input type="radio" id="#" name="#" value="1" /><label class = "full" for="#" title="Sucks big time - 1 star"></label>
    <input type="radio" id="#" name="#" value="0.5" /><label class="half" for="#" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
            <div class="col-xs-12 form-group text-center">
            <fieldset class="rating">
            <div class="col-xs-12 text-center">Traffic: </div>  
                <br/>
    <input type="radio" id="#" name="#" value="5" /><label class = "full" for="#" title="Awesome - 5 stars"></label>
    <input type="radio" id="#" name="#" value="4.5" /><label class="half" for="#" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="#" name="#" value="4" /><label class = "full" for="#" title="Pretty good - 4 stars"></label>
    <input type="radio" id="#" name="#" value="3.5" /><label class="half" for="#" title="Meh - 3.5 stars"></label>
    <input type="radio" id="#" name="#" value="3" /><label class = "full" for="#" title="Meh - 3 stars"></label>
    <input type="radio" id="#" name="#" value="2.5" /><label class="half" for="#" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="#" name="#" value="2" /><label class = "full" for="#" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="#" name="#" value="1.5" /><label class="half" for="#" title="Meh - 1.5 stars"></label>
    <input type="radio" id="#" name="#" value="1" /><label class = "full" for="#" title="Sucks big time - 1 star"></label>
    <input type="radio" id="#" name="#" value="0.5" /><label class="half" for="#" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
                                <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit"/>
                            </form> 
                        </ul>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top img-fluid" src="bathroom/bathroom3.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">SW1 - 1039</h4>
                        <p class="card-text">This bathroom has 6 stalls and 2 urinals.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Overall: 3</li>
                            <li class="list-group-item">Smell: 3</li>
                            <li class="list-group-item">Cleanliness: 3</li>
                            <li class="list-group-item">Traffic: 3</li>
                            <form class="form" role="form" method="post" action="#">
                                <div class="col-xs-12 form-group text-center">
            <fieldset class="rating text-center">
              <div class="col-xs-12 text-center">Smell: </div>  
                <br/>
    <input type="radio" id="#" name="#" value="5" /><label class = "full" for="#" title="Awesome - 5 stars"></label>
    <input type="radio" id="#" name="#" value="4.5" /><label class="half" for="#" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="#" name="#" value="4" /><label class = "full" for="#" title="Pretty good - 4 stars"></label>
    <input type="radio" id="#" name="#" value="3.5" /><label class="half" for="#" title="Meh - 3.5 stars"></label>
    <input type="radio" id="#" name="#" value="3" /><label class = "full" for="#" title="Meh - 3 stars"></label>
    <input type="radio" id="#" name="#" value="2.5" /><label class="half" for="#" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="#" name="#" value="2" /><label class = "full" for="#" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="#" name="#" value="1.5" /><label class="half" for="#" title="Meh - 1.5 stars"></label>
    <input type="radio" id="#" name="#" value="1" /><label class = "full" for="#" title="Sucks big time - 1 star"></label>
    <input type="radio" id="#" name="#" value="0.5" /><label class="half" for="#" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
            <div class="col-xs-12 form-group text-center">
            <fieldset class="rating">
            <div class="col-xs-12 text-center">Cleanliness: </div>  
                <br/>
    <input type="radio" id="#" name="#" value="5" /><label class = "full" for="#" title="Awesome - 5 stars"></label>
    <input type="radio" id="#" name="#" value="4.5" /><label class="half" for="#" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="#" name="#" value="4" /><label class = "full" for="#" title="Pretty good - 4 stars"></label>
    <input type="radio" id="#" name="#" value="3.5" /><label class="half" for="#" title="Meh - 3.5 stars"></label>
    <input type="radio" id="#" name="#" value="3" /><label class = "full" for="#" title="Meh - 3 stars"></label>
    <input type="radio" id="#" name="#" value="2.5" /><label class="half" for="#" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="#" name="#" value="2" /><label class = "full" for="#" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="#" name="#" value="1.5" /><label class="half" for="#" title="Meh - 1.5 stars"></label>
    <input type="radio" id="#" name="#" value="1" /><label class = "full" for="#" title="Sucks big time - 1 star"></label>
    <input type="radio" id="#" name="#" value="0.5" /><label class="half" for="#" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
            <div class="col-xs-12 form-group text-center">
            <fieldset class="rating">
            <div class="col-xs-12 text-center">Traffic: </div>  
                <br/>
    <input type="radio" id="#" name="#" value="5" /><label class = "full" for="#" title="Awesome - 5 stars"></label>
    <input type="radio" id="#" name="#" value="4.5" /><label class="half" for="#" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="#" name="#" value="4" /><label class = "full" for="#" title="Pretty good - 4 stars"></label>
    <input type="radio" id="#" name="#" value="3.5" /><label class="half" for="#" title="Meh - 3.5 stars"></label>
    <input type="radio" id="#" name="#" value="3" /><label class = "full" for="#" title="Meh - 3 stars"></label>
    <input type="radio" id="#" name="#" value="2.5" /><label class="half" for="#" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="#" name="#" value="2" /><label class = "full" for="#" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="#" name="#" value="1.5" /><label class="half" for="#" title="Meh - 1.5 stars"></label>
    <input type="radio" id="#" name="#" value="1" /><label class = "full" for="#" title="Sucks big time - 1 star"></label>
    <input type="radio" id="#" name="#" value="0.5" /><label class="half" for="#" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
                                <input type="submit" class="btn btn-primary" name="#" id="#" value="Submit"/>
                            </form> 
                        </ul>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 5 mins ago</small>
                    </div>
                </div>
            </div>

            <!-- Second card row -->
            <br />

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top img-fluid" src="bathroom/bathroom4.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">SW9 - 2002</h4>
                        <p class="card-text">This bathroom has 4 stalls and 2 urinals.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Overall: 3.3</li>
                            <li class="list-group-item">Smell: 2</li>
                            <li class="list-group-item">Cleanliness: 5</li>
                            <li class="list-group-item">Traffic: 3</li>
                            <form class="form" role="form" method="post" action="#">
                                <div class="col-xs-12 form-group text-center">
            <fieldset class="rating text-center">
              <div class="col-xs-12 text-center">Smell: </div>  
                <br/>
    <input type="radio" id="#" name="#" value="5" /><label class = "full" for="#" title="Awesome - 5 stars"></label>
    <input type="radio" id="#" name="#" value="4.5" /><label class="half" for="#" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="#" name="#" value="4" /><label class = "full" for="#" title="Pretty good - 4 stars"></label>
    <input type="radio" id="#" name="#" value="3.5" /><label class="half" for="#" title="Meh - 3.5 stars"></label>
    <input type="radio" id="#" name="#" value="3" /><label class = "full" for="#" title="Meh - 3 stars"></label>
    <input type="radio" id="#" name="#" value="2.5" /><label class="half" for="#" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="#" name="#" value="2" /><label class = "full" for="#" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="#" name="#" value="1.5" /><label class="half" for="#" title="Meh - 1.5 stars"></label>
    <input type="radio" id="#" name="#" value="1" /><label class = "full" for="#" title="Sucks big time - 1 star"></label>
    <input type="radio" id="#" name="#" value="0.5" /><label class="half" for="#" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
            <div class="col-xs-12 form-group text-center">
            <fieldset class="rating">
            <div class="col-xs-12 text-center">Cleanliness: </div>  
                <br/>
    <input type="radio" id="#" name="#" value="5" /><label class = "full" for="#" title="Awesome - 5 stars"></label>
    <input type="radio" id="#" name="#" value="4.5" /><label class="half" for="#" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="#" name="#" value="4" /><label class = "full" for="#" title="Pretty good - 4 stars"></label>
    <input type="radio" id="#" name="#" value="3.5" /><label class="half" for="#" title="Meh - 3.5 stars"></label>
    <input type="radio" id="#" name="#" value="3" /><label class = "full" for="#" title="Meh - 3 stars"></label>
    <input type="radio" id="#" name="#" value="2.5" /><label class="half" for="#" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="#" name="#" value="2" /><label class = "full" for="#" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="#" name="#" value="1.5" /><label class="half" for="#" title="Meh - 1.5 stars"></label>
    <input type="radio" id="#" name="#" value="1" /><label class = "full" for="#" title="Sucks big time - 1 star"></label>
    <input type="radio" id="#" name="#" value="0.5" /><label class="half" for="#" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
            <div class="col-xs-12 form-group text-center">
            <fieldset class="rating">
            <div class="col-xs-12 text-center">Traffic: </div>  
                <br/>
    <input type="radio" id="#" name="#" value="5" /><label class = "full" for="#" title="Awesome - 5 stars"></label>
    <input type="radio" id="#" name="#" value="4.5" /><label class="half" for="#" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="#" name="#" value="4" /><label class = "full" for="#" title="Pretty good - 4 stars"></label>
    <input type="radio" id="#" name="#" value="3.5" /><label class="half" for="#" title="Meh - 3.5 stars"></label>
    <input type="radio" id="#" name="#" value="3" /><label class = "full" for="#" title="Meh - 3 stars"></label>
    <input type="radio" id="#" name="#" value="2.5" /><label class="half" for="#" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="#" name="#" value="2" /><label class = "full" for="#" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="#" name="#" value="1.5" /><label class="half" for="#" title="Meh - 1.5 stars"></label>
    <input type="radio" id="#" name="#" value="1" /><label class = "full" for="#" title="Sucks big time - 1 star"></label>
    <input type="radio" id="#" name="#" value="0.5" /><label class="half" for="#" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
                                <input type="submit" class="btn btn-primary" name="#" id="#" value="Submit"/>
                            </form> 
                        </ul>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 6 mins ago</small>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top img-fluid" src="bathroom/bathroom5.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">SE9 - 202</h4>
                        <p class="card-text">This bathroom has 7 stalls and 0 urinals.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Overall: 2</li>
                            <li class="list-group-item">Smell: 2</li>
                            <li class="list-group-item">Cleanliness: 2</li>
                            <li class="list-group-item">Traffic: 2</li>
                            <form class="form" role="form" method="post" action="#">
                                <div class="col-xs-12 form-group text-center">
            <fieldset class="rating text-center">
              <div class="col-xs-12 text-center">Smell: </div>  
                <br/>
    <input type="radio" id="#" name="#" value="5" /><label class = "full" for="#" title="Awesome - 5 stars"></label>
    <input type="radio" id="#" name="#" value="4.5" /><label class="half" for="#" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="#" name="#" value="4" /><label class = "full" for="#" title="Pretty good - 4 stars"></label>
    <input type="radio" id="#" name="#" value="3.5" /><label class="half" for="#" title="Meh - 3.5 stars"></label>
    <input type="radio" id="#" name="#" value="3" /><label class = "full" for="#" title="Meh - 3 stars"></label>
    <input type="radio" id="#" name="#" value="2.5" /><label class="half" for="#" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="#" name="#" value="2" /><label class = "full" for="#" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="#" name="#" value="1.5" /><label class="half" for="#" title="Meh - 1.5 stars"></label>
    <input type="radio" id="#" name="#" value="1" /><label class = "full" for="#" title="Sucks big time - 1 star"></label>
    <input type="radio" id="#" name="#" value="0.5" /><label class="half" for="#" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
            <div class="col-xs-12 form-group text-center">
            <fieldset class="rating">
            <div class="col-xs-12 text-center">Cleanliness: </div>  
                <br/>
    <input type="radio" id="#" name="#" value="5" /><label class = "full" for="#" title="Awesome - 5 stars"></label>
    <input type="radio" id="#" name="#" value="4.5" /><label class="half" for="#" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="#" name="#" value="4" /><label class = "full" for="#" title="Pretty good - 4 stars"></label>
    <input type="radio" id="#" name="#" value="3.5" /><label class="half" for="#" title="Meh - 3.5 stars"></label>
    <input type="radio" id="#" name="#" value="3" /><label class = "full" for="#" title="Meh - 3 stars"></label>
    <input type="radio" id="#" name="#" value="2.5" /><label class="half" for="#" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="#" name="#" value="2" /><label class = "full" for="#" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="#" name="#" value="1.5" /><label class="half" for="#" title="Meh - 1.5 stars"></label>
    <input type="radio" id="#" name="#" value="1" /><label class = "full" for="#" title="Sucks big time - 1 star"></label>
    <input type="radio" id="#" name="#" value="0.5" /><label class="half" for="#" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
            <div class="col-xs-12 form-group text-center">
            <fieldset class="rating">
            <div class="col-xs-12 text-center">Traffic: </div>  
                <br/>
    <input type="radio" id="#" name="#" value="5" /><label class = "full" for="#" title="Awesome - 5 stars"></label>
    <input type="radio" id="#" name="#" value="4.5" /><label class="half" for="#" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="#" name="#" value="4" /><label class = "full" for="#" title="Pretty good - 4 stars"></label>
    <input type="radio" id="#" name="#" value="3.5" /><label class="half" for="#" title="Meh - 3.5 stars"></label>
    <input type="radio" id="#" name="#" value="3" /><label class = "full" for="#" title="Meh - 3 stars"></label>
    <input type="radio" id="#" name="#" value="2.5" /><label class="half" for="#" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="#" name="#" value="2" /><label class = "full" for="#" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="#" name="#" value="1.5" /><label class="half" for="#" title="Meh - 1.5 stars"></label>
    <input type="radio" id="#" name="#" value="1" /><label class = "full" for="#" title="Sucks big time - 1 star"></label>
    <input type="radio" id="#" name="#" value="0.5" /><label class="half" for="#" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
                                <input type="submit" class="btn btn-primary" name="#" id="#" value="Submit"/>
                            </form> 
                        </ul>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 1 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top img-fluid" src="bathroom/bathroom6.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">SE12 - 1001</h4>
                        <p class="card-text">This bathroom has 4 stalls and 3 urinals.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Overall: 1</li>
                            <li class="list-group-item">Smell: 1</li>
                            <li class="list-group-item">Cleanliness: 1</li>
                            <li class="list-group-item">Traffic: 1</li>
                            <form class="form" role="form" method="post" action="#">
                                <div class="col-xs-12 form-group text-center">
            <fieldset class="rating text-center">
              <div class="col-xs-12 text-center">Smell: </div>  
                <br/>
    <input type="radio" id="#" name="#" value="5" /><label class = "full" for="#" title="Awesome - 5 stars"></label>
    <input type="radio" id="#" name="#" value="4.5" /><label class="half" for="#" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="#" name="#" value="4" /><label class = "full" for="#" title="Pretty good - 4 stars"></label>
    <input type="radio" id="#" name="#" value="3.5" /><label class="half" for="#" title="Meh - 3.5 stars"></label>
    <input type="radio" id="#" name="#" value="3" /><label class = "full" for="#" title="Meh - 3 stars"></label>
    <input type="radio" id="#" name="#" value="2.5" /><label class="half" for="#" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="#" name="#" value="2" /><label class = "full" for="#" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="#" name="#" value="1.5" /><label class="half" for="#" title="Meh - 1.5 stars"></label>
    <input type="radio" id="#" name="#" value="1" /><label class = "full" for="#" title="Sucks big time - 1 star"></label>
    <input type="radio" id="#" name="#" value="0.5" /><label class="half" for="#" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
            <div class="col-xs-12 form-group text-center">
            <fieldset class="rating">
            <div class="col-xs-12 text-center">Cleanliness: </div>  
                <br/>
    <input type="radio" id="#" name="#" value="5" /><label class = "full" for="#" title="Awesome - 5 stars"></label>
    <input type="radio" id="#" name="#" value="4.5" /><label class="half" for="#" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="#" name="#" value="4" /><label class = "full" for="#" title="Pretty good - 4 stars"></label>
    <input type="radio" id="#" name="#" value="3.5" /><label class="half" for="#" title="Meh - 3.5 stars"></label>
    <input type="radio" id="#" name="#" value="3" /><label class = "full" for="#" title="Meh - 3 stars"></label>
    <input type="radio" id="#" name="#" value="2.5" /><label class="half" for="#" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="#" name="#" value="2" /><label class = "full" for="#" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="#" name="#" value="1.5" /><label class="half" for="#" title="Meh - 1.5 stars"></label>
    <input type="radio" id="#" name="#" value="1" /><label class = "full" for="#" title="Sucks big time - 1 star"></label>
    <input type="radio" id="#" name="#" value="0.5" /><label class="half" for="#" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
            <div class="col-xs-12 form-group text-center">
            <fieldset class="rating">
            <div class="col-xs-12 text-center">Traffic: </div>  
                <br/>
    <input type="radio" id="#" name="#" value="5" /><label class = "full" for="#" title="Awesome - 5 stars"></label>
    <input type="radio" id="#" name="#" value="4.5" /><label class="half" for="#" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="#" name="#" value="4" /><label class = "full" for="#" title="Pretty good - 4 stars"></label>
    <input type="radio" id="#" name="#" value="3.5" /><label class="half" for="#" title="Meh - 3.5 stars"></label>
    <input type="radio" id="#" name="#" value="3" /><label class = "full" for="#" title="Meh - 3 stars"></label>
    <input type="radio" id="#" name="#" value="2.5" /><label class="half" for="#" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="#" name="#" value="2" /><label class = "full" for="#" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="#" name="#" value="1.5" /><label class="half" for="#" title="Meh - 1.5 stars"></label>
    <input type="radio" id="#" name="#" value="1" /><label class = "full" for="#" title="Sucks big time - 1 star"></label>
    <input type="radio" id="#" name="#" value="0.5" /><label class="half" for="#" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
                                <input type="submit" class="btn btn-primary" name="#" id="#" value="Submit"/>
                            </form> 
                        </ul>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 10 mins ago</small>
                    </div>
                </div>
            </div>
            
            <br />
            <div class="card-deck">
                <?php 
                
                if (!isset($_SESSION['newBathroom']) && !empty($_SESSION['newBathroom'])){
                        } else {
                            
                            $_SESSION['building'] = $_POST['building'];
                            $_SESSION['floor'] = $_POST['floor'];
                            $_SESSION['stalls'] = $_POST['stalls'];
                            $_SESSION['urinals'] = $_POST['urinals'];

                            $_SESSION['newBathroom'] =
                                '<div id="card7" class="card">
                                        <img class="card-img-top img-fluid" src="bathroom/bathroom3.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h4 class="card-title"> ' . $_SESSION['building'] . '-' . $_SESSION['floor'] . '</h4>
                                            <p class="card-text">This bathroom has ' . $_SESSION['stalls'] . ' stalls and ' . $_SESSION['urinals'] . ' urinals.</p>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Overall: ' . (($_POST['smellrating'] + $_POST['cleanrating'] + $_POST['trafficrating']) / 3) . '</li>
                                                <li class="list-group-item">Smell: ' . $_POST['smellrating'] . '</li>
                                                <li class="list-group-item">Cleanliness: ' . $_POST['cleanrating'] . '</li>
                                                <li class="list-group-item">Traffic: ' . $_POST['trafficrating'] . '</li>
                                                <form class="form" role="form" method="post" action="#">
                                                    Smell <input class="text-center" type="text" name="#" id="#" placeholder="Enter rating"/>
                                                    <br />
                                                    Cleanliness <input class="text-center" type="text" name="#" id="#" placeholder="Enter rating"/>
                                                    <br />
                                                    Traffic <input class="text-center" type="text" name="#" id="#" placeholder="Enter rating"/>
                                                    <br />
                                                    <input type="submit" class="btn btn-primary" name="#" id="#" value="Submit"/>
                                                </form> 
                                            </ul>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 0 mins ago</small>
                                        </div>
                                        <div class="card"></div>
                                    </div>';
                    
                            echo $_SESSION['newBathroom'];
                    
                            if(isset($_SESSION['building'])){
                                echo '<script>var show = true;</script>';
                            }
                        }

                    ?>
                    <div class="card"></div><div class="card"></div>
                </div>
            
            <br />
        <div class="card">
            <h3 class="card-header">Add Bathroom</h3>
            <div class="card-block">
               <br />
                <a href="addWashrooms.php" class="btn btn-primary">Add New</a>

            </div>
            <br />
        </div>
        <br />
        </div>
    </div>
    
    <script> 
        
        if (show === false) {
            $("#card7").hide();
        } else {
            $("#card7").show();     
        }
    </script>
    
</body>

</html>
