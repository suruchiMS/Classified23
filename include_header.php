<!-- Pre-loader start -->

<div class="theme-loader">
  <div class="loader-track">
    <div class="preloader-wrapper">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div>
        <div class="gap-patch">
          <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
      <div class="spinner-layer spinner-red">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div>
        <div class="gap-patch">
          <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-yellow">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div>
        <div class="gap-patch">
          <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-green">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div>
        <div class="gap-patch">
          <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Pre-loader end -->
<nav class="navbar header-navbar pcoded-header">
  <div class="navbar-wrapper">
    <div class="navbar-logo">
      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
        <i class="ti-menu"></i>
      </a>
      <div class="mobile-search waves-effect waves-light">
        <div class="header-search">
          <div class="main-search morphsearch-search">
            <div class="input-group">
              <span class="input-group-addon search-close"><i class="ti-close"></i></span>
              <input type="text" class="form-control" placeholder="Enter Keyword">
              <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
            </div>
          </div>
        </div>
      </div>

      <a class="mobile-options waves-effect waves-light">
        <i class="ti-more"></i>
      </a>
    </div>

    <div class="navbar-container container-fluid">
      <ul class="nav-left">
        <li>
          <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
        </li>
        <li class="header-search">
          <div class="main-search morphsearch-search">
            <div class="input-group">
              <span class="input-group-addon search-close"><i class="ti-close"></i></span>
              <input type="text" class="form-control">
              <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
            </div>
          </div>
        </li>
        <li>
          <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
            <i class="ti-fullscreen"></i>
          </a>
        </li>
      </ul>
      <ul class="nav-right">
        <li class="user-profile header-notification">
          <a href="#!" class="waves-effect waves-light">
            <?php echo $username; ?>
            <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
            <span></span>
            <i class="ti-angle-down"></i>
          </a>


          <ul class="show-notification profile-notification">
            <li class="waves-effect -light">
              <a href="logout.php">
                <i class="ti-layout-sidebar-left"></i> Logout
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>