<!DOCTYPE html>
<!--
    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.mobile-1.4.1.css" />
        <link rel="stylesheet" type="text/css" href="css/fg_membersite.css" />
        <link rel="stylesheet" type="text/css" href="css/pwdwidget.css" />

        <title>Hello World</title>

        <script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.mobile-1.4.1.js"></script>
        <script type="text/javascript" src="phonegap.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
        <script src="scripts/pwdwidget.js" type="text/javascript"></script> 

    </head>
    <body>
  
  <div data-role="page" id="pageone">
  <div data-role="header">
  <a href="#homepage" class="ui-btn ui-icon-arrow-l ui-btn-icon-left">Back</a>
  <h1>Login</h1>

  <div data-role="navbar">
    <ul>
      <li><a href="#homepage" data-icon="home" class="ui-btn-active ui-state-persist">Home</a></li>
      <li><a href="./register.php" data-icon="star">Register</a></li>
      <li><a href="#anylink" data-icon="search">Search</a></li>
    </ul>
  </div>

  </div>

  <div data-role="main" class="ui-content">
  
  	<form method="post" action="login.php">
  		<label for="username" class="ui-hidden-accessible">Username:</label>
  		<input type="text" name="username" id="username" placeholder="Username" data-clear-btn="true"/>
  		<input type="password" name="pwd" id="pwd" placeholder="Password" data-clear-btn="true"/>  		
  		<input type="submit" value="Submit"></input>
  	</form>
    
  </div>

  <div data-role="footer" data-position="fixed">
    <h1>Footer Text</h1>
  </div>
</div> 

        <script type="text/javascript">
            app.initialize();
        </script>


       

    </body>
</html>
