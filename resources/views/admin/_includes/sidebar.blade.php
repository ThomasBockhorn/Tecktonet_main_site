<!-- Sidebar -->
<div id="wrapper">
    <ul class="sidebar navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('welcome') }}">
        <i class="fas fa-fw fa-home"></i>
        <span>Website</span>
        </a>
    </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-blog"></i>
                <span>Blog</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Posts:</h6>
                <a class="dropdown-item" href="{{ route('adminBlog.create')}}">Add New Post</a>
                <a class="dropdown-item" href="{{ route('adminBlog.index')}}">Show All Posts</a>
            </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-project-diagram"></i>
                    <span>Projects</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Project:</h6>
                    <a class="dropdown-item" href="{{ route('adminProjects.create') }}">Add Project</a>
                    <a class="dropdown-item" href="{{ route('adminProjects.index') }}">Show All Projects</a>
                </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                        <span>Users</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <h6 class="dropdown-header">Users:</h6>
                        <a class="dropdown-item" href="{{ route('adminUsers.index') }}">Show Users</a>
                    </div>
                    </li>

              </ul>
    <div id="content-wrapper">
        <div class="container-fluid">
