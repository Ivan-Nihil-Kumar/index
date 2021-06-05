<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <link rel="stylesheet" href="Contacts.css">
        <title>Portfolio profile</title>
    </head>
    <body data-spy="scroll" data-target=".navbar">

        <div id="Header">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
                <div class="container">
                    <button class="navbar-toggler" data toggle="collapse" data target="#Navbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="#" class="navbar-brand"><h3>Portfolio</h3></a>
                    <div class="collapse navbar-collapse" id="Navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a href="About me.html" class="nav-link">About me</a></li>
                            <li class="nav-item"><a href="Skills.html" class="nav-link">Skills</a></li>
                            <li class="nav-item"><a href="Contacts.php" class="nav-link">Contacts</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


        <div id="bg-img"></div>

    

        <!--Contacts-->
        <body ng-app>
            <div class="container">
                <div class="form-group">
                    <h2><b><u>Reply Here:</u></b></h2>
                    <form ng-controller="Controller">
                        <textarea class="form-control" rows="5" ng-model="cmtName" placeholder="Your Comment"></textarea>
                        <br/>
                        <button class="btn btn-success btn-md pull-right" ng-click='btn_post();'>Comment</button>
                        <br/>
                        <hr/>
                        <h3><b><u>Comments:</u></b></h3>
                        <ul class="list-group">
                            <li class="list-group-item" ng-repeat="cmt in comments"> {{ cmt }}
                                <a href="" ng-click="post_cmt($home)"><span class="glyphicon glyphicon-trash" style="color:red; float:right;"></span></a>
                            </li>
                        </ul>
                    </form> 
                </div>
            </div>
            <script type="text/javascript">
            function Controller($scope) {
                 $scope.comments = [];
                 $scope.btn_post = function() {
                     if ($scope.cmtName != '') {
                         $scope.comments.push($scope.cmtName);
                         $scope.cmtName = "";
                     }
                 }
                 $scope.post_cmt = function($home) {
                     $scope.comments.splice($home, 1);
                 }
             }
            </script>


      


        

    </body>
</html>