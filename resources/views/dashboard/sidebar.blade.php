<div class="sidebar">
    <nav class="sidebar-nav">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}"><i class="icon-speedometer"></i> Dashboard</a>
        </li>

        @if(Auth::user()->account_type == 0)
        <li class="nav-item">
          <a class="nav-link" href="{{ route('agents.index') }}"><i class="fa fa-user"></i> Agents</a>
        </li>
        @endif 
        
        <li class="nav-item">
          <a class="nav-link" href="{{ route('calendar.index') }}"><i class="icon-calendar"></i> Calendar</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('contacts.index') }}"><i class="fa fa-group"></i> Contacts</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('prospects.index') }}"><i class="fa-building fa"></i> Prospects</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('paychecks.index') }}"><i class="fa fa-handshake-o fa"></i> Paychecks</a>
        </li>

        {{-- <li class="nav-item">
          <a class="nav-link" href="./tasks.html"><i class="fa fa-tasks fa"></i> Tasks</a>
        </li> --}}

        <li class="nav-item">
          <a class="nav-link" href="{{ route('documents.index') }}"><i class="fa fa-file-pdf-o"></i> Documents</a>
        </li>

      </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
  </div>