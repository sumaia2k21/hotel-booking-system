<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
            <i class="  fas fa-tachometer-alt  "></i>
              <span class="menu-title">Dashboard</span>
              
              
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="">
          <i class="fas fa-address-book"></i>
              <span class="menu-title">Booking</span>
             
            </a>
            
          </li>
          <li class="nav-item">
          <a class="nav-link" href="">
              <i class="  ti-palette menu-icon "></i>
              <span class="menu-title">Booked Rooms</span>
              </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
            <i class="fas fa-users"></i>
              <span class="menu-title">Guests</span>
            </a>

            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="fas fa-building"></i>
              <span class="menu-title">Hotel Configuration</span>
              <i class="fas fa-chevron-right"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{route('book')}}">Room Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Rooms</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('book')}}">Price Manager</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Paid service</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('book')}}">Amenities</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Housekeeping status</a></li>

              </ul>
            </div>
          </li>

            
            
         
          <li class="nav-item">
            <a class="nav-link" href="">
            <i class="far fa-clipboard"></i>
              <span class="menu-title">Report</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
            <i class="fas fa-user-cog"></i>
              <span class="menu-title">Administrarive</span>
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">HR management
              
            </a>
           
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="" aria-expanded="false" aria-controls="auth">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title"> Advance Booking</span>
              
            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>