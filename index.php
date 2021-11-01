<?php
    
    $site_title = "Todo @DriverUp";
    $site_description = "Loren ipsum is the sample text item";

    $tasks = array(
        array("id" => 1, "body" => "I am really excited to code", "is_completed" => false, "is_deleted" => false),
        array("id" => 2, "body" => "I am going to gym", "is_completed" => true, "is_deleted" => false),
        array("id" => 3, "body" => "I like to play sudoku", "is_completed" => false, "is_deleted" => false),
        array("id" => 4, "body" => "Homeworks need to be complete", "is_completed" => true, "is_deleted" => false),
        array("id" => 5, "body" => "Have to attend the social class", "is_completed" => true, "is_deleted" => false),
        array("id" => 6, "body" => "Have a scrum call with the team", "is_completed" => false, "is_deleted" => false),
        array("id" => 7, "body" => "I am really going for a trip", "is_completed" => false, "is_deleted" => false)
    );

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" />
    <title><?php echo $site_title ?></title>
  </head>
  <body>
    
    <div class="container">
        <div class="row" style="margin-top:150px">
            
            <div class="col-md-8 mx-auto">
                <h3><?php echo $site_title ?></h3>
                <p><?php echo $site_description ?></p>
                <!-- Input box with add task button -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter your task here..!" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <button class="btn btn-primary">Add Task</button>
                        </div>
                    </div>
                </div>

                <!-- List of all tasks  -->
                <div class="row" style="margin-top:15px;">
                    <div class="col-md-12">
                        <ul class="list-group">
                            
                            <?php foreach($tasks as $task) { ?>

                                <li class="list-group-item">
                                    <?php echo $task["body"]; ?>
                                
                                    <span style="float:right">

                                        <?php if($task["is_completed"]) { ?>
                                            <a href="/" class="btn btn-sm btn-success">Done</a>
                                        <?php } else { ?>
                                            <a href="/" class="btn btn-sm btn-info">Completed</a>
                                        <?php } ?>
                                        
                                            <a href="/" class="btn btn-sm btn-danger">Trash</a>
                                    </span>
                                </li>
                            
                            <?php } ?>
                    
                        </ul>
                    </div>
                </div>
            
            </div>
        
    </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>