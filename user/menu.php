
<nav class="navbar fixed-top navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:red; font-weight: bold; font-size:200%; margin-top:8px;">Ask Me</a>
    </div>
     <form class="navbar-form navbar-left">
      <div class="input-group" style="margin-top:8px;">
      <input type="text" class="form-control" placeholder="Ask Or Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav">
      
      <li><a href="#"><h4 style="color:red;"><span class="glyphicon glyphicon-list-alt"> Read </h4></span></a></li>
      </li>
      <li><a href="#"><h4><span class="glyphicon glyphicon-bell"> Notification</h4></span></a></li>
      <li><a href="#"><h4><span class="glyphicon glyphicon-earphone"> Contact </h4></span></a></li>
       
    </ul>
   <ul class="nav navbar-nav navbar-right" style="margin-top:8px;" >
   <li>
   <?php 
   $_email=$_SESSION["mail"];
    require 'classdemo.php';
    $obj=new database();
    $result=$obj->userget($_email);
    $row=$result->fetch_assoc();
    $_img=$row["user_img"];
    $_name=$row["user_name"];
   echo '<img src="'. $_img .'" class="img-circle" width="50" height="50">';
    ?> <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">View Profile</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </li>
    </li>
    </ul>
   
  </div>
  
</nav>
