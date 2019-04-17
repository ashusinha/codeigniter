<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
        <!--<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>-->
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>
        <!--	angular js data posting
<div ng-app="postApp" ng-controller="postController">

<div class="col-sm-8 col-sm-offset-2">
    <div class="page-header"><h1>Post data using angularJS</h1></div>
     FORM 
    <form name="userForm" ng-submit="submitForm()">
        <?php //$form_data = array('ng-submit'=>'submitForm()'); echo form_open(base_url(),$form_data);?>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" ng-model="user.name">
        <span ng-show="errorName">{{errorName}}</span>
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" ng-model="user.username">
        <span ng-show="errorUserName">{{errorUserName}}</span>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" ng-model="user.email">
        <span ng-show="errorEmail">{{errorEmail}}</span>
    </div>
    <div class="form-group"> 
        <span ng-show="message">{{message}}</span>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    If button type not submit
    <!--<button type="button" ng-click="calculateQuantity()" class="btn btn-primary">Submit</button>
    </form>
    <?php //echo form_close();?>
</div>

        </div>
        <script>
            var postApp = angular.module('postApp', []);
    // Controller function and passing $http service and $scope var.
    postApp.controller('postController', function($scope, $http) {
      // create a blank object to handle form data.
        $scope.user = {};
      // calling our submit function.
      //$scope.calculateQuantity = function() { //if button type not submit
        $scope.submitForm = function() {
        // Posting data to php file
        $http({
          method  : 'POST',
          url     : '<?php //echo base_url();?>clone.php',
          data    : $scope.user //forms user object
          //headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         })
          .success(function(data) {              
            if (data.errors) {
              // Showing errors.
              $scope.errorName = data.errors.name;
              $scope.errorUserName = data.errors.username;
              $scope.errorEmail = data.errors.email;
            } else {
              $scope.message = data.message;
            }
          });
        };
    });
        </script>-->
	<div id="body">
            <?php
        $form_data = array('name'=>'scoffolding','id'=>'scoffolding');
        echo form_open(base_url(),$form_data);?>
    <label>Class Name</label>
    <input type="text" name="class_name"/>
    <br/>    
    <label>Model Name With Inside Constructor(Seprated with ",")</label>
    <input type="text" name="construct_name"/>
    <br/>    
    <label>Submit Button Name for view</label>
    <input type="text" name="sub_name"/>
    <br/>
    <label>Active</label>
    <input type="radio" name="is_active" value="Y"/> Yes
    <input type="radio" name="is_active" value="N"/> No
    <input type="submit" name="virtual" value="Submit"/>
       <?php echo form_close();?>
<!--		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>-->
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>