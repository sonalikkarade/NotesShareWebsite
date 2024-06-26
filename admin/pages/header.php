<!-- =============================================== -->

<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand"><?= $project ?></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Dashboard</a></li>
          <li><a href="rptadmin.php"><i class="fa fa-user-plus"></i> Admin </a></li>
          <li><a href="rptdepartment.php"><i class="fa fa-building"></i> Department </a></li>
          <li><a href="rptsubject.php"><i class="fa fa-book"></i> Subject </a></li>
          <li><a href="rptfaculty.php"><i class="fa fa-user-secret"></i> Faculty </a></li>
          <li><a href="mapping.php"><i class="fa fa-exchange"></i>Subject Allotment </a></li>          
        </ul>
      </div>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../adminphoto/img.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= $_SESSION['name'] ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../adminphoto/img.png" class="img-circle" alt="User Image">

                <p>
                  <?= $_SESSION['name'] ?>
                  <small><?= $project ?> <?= $officename ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="profile.php">Profile</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="changepassword.php">Change Password</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="logout.php">Sign out</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-custom-menu -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</header>