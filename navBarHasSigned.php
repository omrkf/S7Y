<body>
  <!-- navbar start from here -->
  <div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark-bg-dark">
      <a class="navbar-brand" href="HOME.php"><img src="img/s7y-logo-light.png" alt="s7y-logo" id="navbar-brand-edit"></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link-home hoooover" href="HOME.php">الصفحة الرئيسية</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link-home  hoooover" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
              الأندية
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item dbg-dark" href="sportgym.php?id=1">الأندية الرياضية</a>
              <a class="dropdown-item dbg-dark" href="healthy gym.php">الأنديةالصحية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link-home hoooover" href="coach.php?id=1">المدربون</a>
          </li>
          <li class="nav-item">
            <a class="nav-link-home hoooover" href="#">أخصائيين التغذية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link-home  hoooover" href="GPS.php">GPS</a>
          </li>
        </ul>

        <div class="search-boxingg">
          <input class="search-textrt" type="text" name=" " placeholder="ابحث ما تريد ! ">
          <a class="search-bttn hoooover" href="https://www.google.com.sa">
            <i class="fa fa-search"></i>
          </a>
        </div>
        <!-- href="memberEdit.php"></a></li> -->
        <nav class="cd-main-nav js-main-nav">
          <ul class="cd-main-nav__list js-signin-modal-trigger">
            <!-- inser more links here -->
            <li><a class="cd-main-nav__item cd-main-nav__item--signup hooooover " href="logout.php" data-signin="login" id="signnn">تسجيل خروج</a></li>
            
            
            <?php



            switch ($_SESSION['whoseSign']) {
              case "c":
            ?>
                <li><a class="fa fa-user-circle cd-main-nav__item cd-main-nav__item--signup hooooover"  href="clubProfile.php?id=<?php echo $_SESSION['club_id']?>" > <?php echo $_SESSION['username']?></a></li>
                <?php
                break;
              case "a":
                ?>
                 <li><a class="fa fa-user-circle cd-main-nav__item cd-main-nav__item--signup hooooover"   href="memberProfile.php?id=<?php echo $_SESSION['account_id']?>"> <?php echo $_SESSION['username']?></a></li>
                <?php
                
                break;
              case "ch":
                ?>
                <li><a class="fa fa-user-circle cd-main-nav__item cd-main-nav__item--signup hooooover"   href="coachProfile.php?id=<?php echo $_SESSION['coach_id']?>"> <?php echo $_SESSION['username']?></a></li>
            <?php
                break;
            }
            ?>
          </ul>
        </nav>
        <hr>
      </div>
    </nav>
  </div>