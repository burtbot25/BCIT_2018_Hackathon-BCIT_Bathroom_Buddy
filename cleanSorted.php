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
                <div class="card"> <!-- CARD ONE -->
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
                                Smell <input class="text-center" type="text" name="smellRating" id="smellRating" placeholder="Enter rating"/>
                                <br />
                                Cleanliness <input class="text-center" type="text" name="cleanRating" id="cleanRating" placeholder="Enter rating"/>
                                <br />
                                Traffic <input class="text-center" type="text" name="trafficRating" id="trafficRating" placeholder="Enter rating"/>
                                <br />
                                <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit"/>
                            </form> 
                        </ul>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>

				
                <div class="card"> <!-- CARD FOUR -->
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
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
				
				
                <div class="card"><!-- CARD TWO -->
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
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                
            </div>

            <!-- Second card row -->
            <br />

            <div class="card-deck">
                <div class="card"> <!-- CARD THREE -->
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
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card"> <!-- CARD FIVE -->
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
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card"><!-- CARD SIX -->
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
                        <small class="text-muted">Last updated 3 mins ago</small>
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
                                '<div id="card7" class="card" style="max-width: 31%;"> <!-- CARD SEVEN -->
                                        <img class="card-img-top img-fluid" src="bathroom/bathroom3.jpg" alt="Card image cap">
                                        <div class="card-block">
                                            <h4 class="card-title"> ' . $_SESSION['building'] . '-' . $_SESSION['floor'] . '</h4>
                                            <p class="card-text">This bathroom has ' . $_SESSION['stalls'] . ' stalls and ' . $_SESSION['urinals'] . ' urinals.</p>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Overall: </li>
                                                <li class="list-group-item">Smell: </li>
                                                <li class="list-group-item">Cleanliness: </li>
                                                <li class="list-group-item">Traffic: </li>
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
                                    </div>';
                    
                            echo $_SESSION['newBathroom'];
                    
                            if(isset($_SESSION['building'])){
                                echo '<script>var show = true;</script>';
                            }
                        }

                    ?>
                    
                </div>
            
            <br />
            
            
        <div class="card">
            <h3 class="card-header">Add Bathroom</h3>
            <div class="card-block">
                <h4 class="card-title">Cleanest bathroom of the month</h4>
                <p class="card-text">SE2 - First floor</p>
                <a href="addWashrooms.php" class="btn btn-primary">Go there now!</a>

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
