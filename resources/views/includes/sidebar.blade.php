<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-heading">General Dashbaord</li>
        <li class="nav-item">
        <li class="nav-item">
            <a class="nav-link collapsed" {{ Request::is('dashboard/post*') ? 'active' : ''}} data-bs-target="#dashnav" data-bs-toggle="collapse">
                <i class="bi bi-layout-text-window-reverse"></i>
                <span>Dashboard</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="dashnav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/home">
                    <i class="bi bi-grid"></i>
                    <span>Home</span>
                </a>
            </li>
            </ul>
        </li>
        </li>
        

        <li class="nav-heading">Tour Guide</li>
        <li class="nav-item">
            <li class="nav-item">
            <a class="nav-link collapsed" {{ Request::is('dashboard/post*') ? 'active' : ''}} data-bs-target="#guidenav" data-bs-toggle="collapse">
                <i class="bi bi-layout-text-window-reverse"></i>
                <span>Account</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="guidenav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-grid"></i>
                    <span>Account Tour Guide</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-grid"></i>
                    <span>Tour Guide Data</span>
                </a>
            </li>
            </ul>
        </li>
        </li>
        
        <li class="nav-heading">Destination</li>
        <li class="nav-item">
            <a class="nav-link collapsed" {{ Request::is('dashboard/post*') ? 'active' : ''}} data-bs-target="#destinav" data-bs-toggle="collapse">
                <i class="bi bi-layout-text-window-reverse"></i>
                <span>Destination</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="destinav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/destination">
                    <i class="bi bi-grid"></i>
                    <span>Destination</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="bi bi-grid"></i>
                    <span>Destination Data</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('destcategory.index')}}">
                    <i class="bi bi-grid"></i>
                    <span>Destination Category Data</span>
                </a>
            </li>
            </ul>
        </li>
        </li>
    
            <li class="nav-heading">Blog & Posts</li>
            <li class="nav-item">
                <a class="nav-link collapsed" {{ Request::is('dashboard/post*') ? 'active' : ''}} data-bs-target="#blognav" data-bs-toggle="collapse">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>Blog & Posts</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="blognav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/blog">
                        <i class="bi bi-grid"></i>
                        <span>Blog</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('post.index')}}">
                        <i class="bi bi-grid"></i>
                        <span>Post Data</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('postcategory.index')}}">
                        <i class="bi bi-grid"></i>
                        <span>Post Category Data</span>
                    </a>
                </li>
                
                </ul>
             </li>
             
    
             

    </ul>
</aside>
