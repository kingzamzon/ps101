<header class="app-header navbar">
  <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
    <span class="navbar-toggler-icon"></span>
  </button>

  <ul class="nav navbar-nav ml-auto">

    <li class="nav-item dropdown d-md-down-none">
      {{-- <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="icon-list"></i><span class="badge badge-pill badge-warning">15</span>
      </a> --}}
      <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
        <div class="dropdown-header text-center">
          <strong>You have 5 pending tasks</strong>
        </div>
        <a href="#" class="dropdown-item">
          <div class="small mb-1">Upgrade NPM &amp; Bower
            <span class="float-right">
              <strong>0%</strong>
            </span>
          </div>
          <span class="progress progress-xs">
            <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0"
              aria-valuemax="100"></div>
          </span>
        </a>
        <a href="#" class="dropdown-item">
          <div class="small mb-1">ReactJS Version
            <span class="float-right">
              <strong>25%</strong>
            </span>
          </div>
          <span class="progress progress-xs">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25"
              aria-valuemin="0" aria-valuemax="100"></div>
          </span>
        </a>
        <a href="#" class="dropdown-item">
          <div class="small mb-1">VueJS Version
            <span class="float-right">
              <strong>50%</strong>
            </span>
          </div>
          <span class="progress progress-xs">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50"
              aria-valuemin="0" aria-valuemax="100"></div>
          </span>
        </a>
        <a href="#" class="dropdown-item">
          <div class="small mb-1">Add new layouts
            <span class="float-right">
              <strong>75%</strong>
            </span>
          </div>
          <span class="progress progress-xs">
            <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75"
              aria-valuemin="0" aria-valuemax="100"></div>
          </span>
        </a>
        <a href="#" class="dropdown-item">
          <div class="small mb-1">Angular 2 Cli Version
            <span class="float-right">
              <strong>100%</strong>
            </span>
          </div>
          <span class="progress progress-xs">
            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100"
              aria-valuemin="0" aria-valuemax="100"></div>
          </span>
        </a>
        <a href="#" class="dropdown-item text-center">
          <strong>View all tasks</strong>
        </a>
      </div>
    </li>
    <li class="nav-item dropdown d-md-down-none">
      {{-- <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="icon-envelope-letter"></i><span class="badge badge-pill badge-info">7</span>
      </a> --}}
      <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
        <div class="dropdown-header text-center">
          <strong>You have 4 messages</strong>
        </div>
        <a href="#" class="dropdown-item">
          <div class="message">
            <div class="py-3 mr-3 float-left">
              <div class="avatar">
                <img src="{{asset('img/avatars/7.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">John Doe</small>
              <small class="text-muted float-right mt-1">Just now</small>
            </div>
            <div class="text-truncate font-weight-bold">
              <span class="fa fa-exclamation text-danger"></span> Important message</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
              do eiusmod tempor incididunt...</div>
          </div>
        </a>
        <a href="#" class="dropdown-item">
          <div class="message">
            <div class="py-3 mr-3 float-left">
              <div class="avatar">
                <img src="{{asset('img/avatars/6.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-warning"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">John Doe</small>
              <small class="text-muted float-right mt-1">5 minutes ago</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
              do eiusmod tempor incididunt...</div>
          </div>
        </a>
        <a href="#" class="dropdown-item">
          <div class="message">
            <div class="py-3 mr-3 float-left">
              <div class="avatar">
                <img src="{{asset('img/avatars/5.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-danger"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">John Doe</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
              do eiusmod tempor incididunt...</div>
          </div>
        </a>
        <a href="#" class="dropdown-item">
          <div class="message">
            <div class="py-3 mr-3 float-left">
              <div class="avatar">
                <img src="{{asset('img/avatars/4.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-info"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">John Doe</small>
              <small class="text-muted float-right mt-1">4:03 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
              do eiusmod tempor incididunt...</div>
          </div>
        </a>
        <a href="#" class="dropdown-item text-center">
          <strong>View all messages</strong>
        </a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
        aria-expanded="false">
        <img src="{{asset('img/avatars/6.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        {{-- <div class="dropdown-header text-center">
          <strong>Account</strong>
        </div> --}}
        {{-- <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span
            class="badge badge-info">42</span></a> --}}
        <div class="dropdown-header text-center">
          <strong>Settings</strong>
        </div>
        <div class="divider"></div>
        <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
       </form>
      </div>
    </li>
    <button class="navbar-toggler aside-menu-toggler" type="button">
    </button>

  </ul>
</header>