<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <a class="navbar-brand brand-logo" href="#">PSB - Online</a>
      <a class="navbar-brand brand-logo-mini" href="#"><img src="{{ url('img/logo.png')}}" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      {{-- <ul class="navbar-nav mr-lg-2">
        <li class="nav-item nav-search d-none d-lg-block">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
            <div class="input-group-append">
              <span class="input-group-text" id="search">
                <i class="mdi mdi-magnify"></i>
              </span>
            </div>
          </div>
        </li>
      </ul> --}}
      <ul class="navbar-nav navbar-nav-right">
        {{-- <li class="nav-item dropdown d-none align-items-center d-lg-flex ml-0 mr-1">
          <a class="dropdown-toggle btn btn-link btn-sm" href="#" data-toggle="dropdown" id="pagesDropdown">
            <span class="nav-profile-name">Projects</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="pagesDropdown">
            <a class="dropdown-item">
              <i class="mdi mdi-compass text-primary"></i>
              Completed
            </a>
            <a class="dropdown-item">
              <i class="mdi mdi-shape-polygon-plus text-primary"></i>
              Upcoming
            </a>
          </div>
        </li>
        <li class="nav-item dropdown align-items-center d-lg-flex d-none ml-0 mr-1">
          <a class="dropdown-toggle btn btn-link btn-sm" href="#" data-toggle="dropdown" aria-expanded="false">
          <span class="nav-profile-name">Apps</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
            <a class="dropdown-item">
              <i class="mdi mdi-cellphone text-primary"></i>
              Mobile
            </a>
            <a class="dropdown-item">
              <i class="mdi mdi-laptop-windows text-primary"></i>
              Web
            </a>
          </div>
        </li>
        <li class="nav-item dropdown align-items-center d-lg-flex d-none ml-0 mr-3">
          <a class="dropdown-toggle btn btn-link btn-sm" href="#" data-toggle="dropdown" aria-expanded="false">
          <span class="nav-profile-name">Reports</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
            <a class="dropdown-item">
              <i class="mdi mdi-file-excel text-primary"></i>
              Excel
            </a>
            <a class="dropdown-item">
              <i class="mdi mdi-file-pdf text-primary"></i>
              Pdf
            </a>
          </div>
        </li>
        <li class="nav-item d-flex dropdown mr-1">
          <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-email-open-outline mx-0"></i>
            <span class="count"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
            <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="{{ url('comp/images/faces/face28.png')}}" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content flex-grow">
                <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                </h6>
                <p class="font-weight-light small-text text-muted mb-0">
                  The meeting is cancelled
                </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="{{ url('comp/images/faces/face2.jpg')}}" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content flex-grow">
                <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                </h6>
                <p class="font-weight-light small-text text-muted mb-0">
                  New product launch
                </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="{{ url('comp/images/faces/face3.jpg')}}" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content flex-grow">
                <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                </h6>
                <p class="font-weight-light small-text text-muted mb-0">
                  Upcoming board meeting
                </p>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item d-flex dropdown mr-1">
          <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-bell-outline mx-0"></i>
          <span class="count"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-success">
                  <i class="mdi mdi-information mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal">Application Error</h6>
                <p class="font-weight-light small-text mb-0 text-muted">
                  Just now
                </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-warning">
                  <i class="mdi mdi-settings mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal">Settings</h6>
                <p class="font-weight-light small-text mb-0 text-muted">
                  Private message
                </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-info">
                  <i class="mdi mdi-account-box mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal">New user registration</h6>
                <p class="font-weight-light small-text mb-0 text-muted">
                  2 days ago
                </p>
              </div>
            </a>
          </div>
        </li> --}}
        <li class="nav-item d-flex nav-profile dropdown">
          <a class="nav-link dropdown-toggle border px-1 py-1" href="#" data-toggle="dropdown" id="profileDropdown">
            <span class="nav-status-indicator"></span>
            <img src="{{ url('comp/images/faces/logo.png')}}" alt="profile"/>
            <span class="nav-profile-name">{{auth()->user()->name}}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item">
              <i class="mdi mdi-settings text-primary"></i>
              Settings
            </a>
            <a class="dropdown-item" href="{{url('logout')}}">
              <i class="mdi mdi-logout text-primary"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
