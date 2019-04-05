<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="{{ asset('images/admin.PNG') }}" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Arif H. Mahmud</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-success btn-block">UI/UX Project
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <!-- course management -->
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-coursee" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title"> Course Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-coursee">
              <ul class="nav flex-column">
                <li class="nav-item">

                  <a class="nav-link" href="{{ route('admin.addcourse') }}"> <i class="menu-icon mdi mdi-content-copy"></i>Add Course</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.course.list') }}">Course List</a>
                </li>
              </ul>
            </div>
          </li>  
          <!-- Course Management -->         
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-coursefile" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title"> File Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-coursefile">
              <ul class="nav flex-column">
                <li class="nav-item">

                  <a class="nav-link" href="{{ route('admin.add.course.file') }}"></i>Add Course File</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.course.file.list') }}">Course File List</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- File Management -->

           <!-- Course Management -->         
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-story" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title"> Story Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-story">
              <ul class="nav flex-column">
                <li class="nav-item">

                  <a class="nav-link" href="{{ route('admin.add.story') }}"></i>Add Story </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.story.file.list') }}"> Story List</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- File Management -->
           <!-- members Management -->         
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-members" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title"> Members Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-members">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.members.list') }}"> Members List</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- end members Management -->
         <!--  msg management -->
          <li class="nav-item">
            <a class="nav-link msg" data-toggle="collapse" href="#ui-msg" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title"> Message Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-msg">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link msg" href="{{ route('admin.contact.list') }}"> Message List</a>
                </li>
              </ul>
            </div>
          </li>

<!-- end msg management -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Form elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
              <i class="menu-icon mdi mdi-sticker"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/login.html"> Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/register.html"> Register </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>