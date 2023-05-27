<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      @can('users')
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#user" aria-expanded="false" aria-controls="ui-basic">

            <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">User</span>

          <i class="menu-arrow"></i>

        </a>
        <div class="collapse" id="user">
          <ul class="nav flex-column sub-menu">
            @can('create-users')

            <li class="nav-item"> <a class="nav-link" href="{{url('/user')}}">Create</a></li>

            @endcan
            @can('index-users')


            <li class="nav-item"> <a class="nav-link" href="">All user</a></li>
            @endcan
          </ul>
        </div>
      </li>
      @endcan

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#category" aria-expanded="false" aria-controls="ui-basic">
        @can('category')
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">Category</span>
        @endcan
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="category">
          <ul class="nav flex-column sub-menu">
            @can('create-category')


            <li class="nav-item"> <a class="nav-link" href="{{url('/category')}}">Create</a></li>
            @endcan
            @can('index-category')
            <li class="nav-item"> <a class="nav-link" href="{{url('/all-category')}}">All category</a></li>
            @endcan
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#sub" aria-expanded="false" aria-controls="ui-basic">
            @can('subcategory')
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">Sub-Category</span>
          @endcan
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="sub">
          <ul class="nav flex-column sub-menu">
            @can('create-subcategory')
            <li class="nav-item"> <a class="nav-link" href="">Create</a></li>
            @endcan
            @can('index-category')
            <li class="nav-item"> <a class="nav-link" href="">All sub-category</a></li>
            @endcan
          </ul>
        </div>
      </li>
{{--
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#size" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">Size</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="size">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="">All size</a></li>
          </ul>
        </div>
      </li>  --}}

      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Tables</span>
        </a>
      </li>

    </ul>
  </nav>
