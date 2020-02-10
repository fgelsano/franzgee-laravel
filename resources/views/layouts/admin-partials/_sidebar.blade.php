<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Francis<sup> Admin</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Site Sections
    </div>

    <!-- Nav Item - Profile Collapse Menu -->
    <li class="nav-item 
                {{ (request()->is('dashboard/profile')) ? 'active' : '' }} 
                {{ (request()->is('dashboard/resume')) ? 'active' : '' }} 
                {{ (request()->is('dashboard/social-media')) ? 'active' : '' }} 
                {{ (request()->is('/dashboard/profile/edit')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfile"
            aria-expanded="true" aria-controls="collapseProfile">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span>
        </a>
        <div id="collapseProfile" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Components:</h6>
                <a class="collapse-item {{ (request()->is('dashboard/profile')) ? 'active' : '' }}"
                    href="{{ url('/dashboard/profile') }}">View Profile</a>
                <a class="collapse-item {{ (request()->is('dashboard/resume')) ? 'active' : '' }}"
                    href="{{ url('/dashboard/resume') }}">Resume</a>
                <a class="collapse-item {{ (request()->is('dashboard/social-media')) ? 'active' : '' }}"
                    href="{{ url('/dashboard/social-media') }}">Social Media</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Skills Collapse Menu -->
    <li
        class="nav-item {{ (request()->is('dashboard/skills')) ? 'active' : '' }} {{ (request()->is('dashboard/skills/add')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSkills" aria-expanded="true"
            aria-controls="collapseSkills">
            <i class="fas fa-fw fa-code"></i>
            <span>Skills</span>
        </a>
        <div id="collapseSkills" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6>
                <a class="collapse-item {{ (request()->is('dashboard/skills')) ? 'active' : '' }}"
                    href="{{ url('/dashboard/skills') }}">Skills List</a>
                <a class="collapse-item {{ (request()->is('dashboard/skills/add')) ? 'active' : '' }}"
                    href="{{ url('/dashboard/skills/add') }}">Add New Skill</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Portfolio Collapse Menu -->
    <li
        class="nav-item {{ (request()->is('dashboard/portfolio')) ? 'active' : '' }} {{ (request()->is('dashboard/portfolio/add')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePortfolio"
            aria-expanded="true" aria-controls="collapsePortfolio">
            {{-- <i class="fas fa-fw fa-slideshare"></i> --}}
            <i class="fab fa-slideshare"></i>
            <span>Portfolio</span>
        </a>
        <div id="collapsePortfolio" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6>
                <a class="collapse-item {{ (request()->is('dashboard/portfolio')) ? 'active' : '' }}"
                    href="{{ url('/dashboard/portfolio') }}">Portfolio List</a>
                <a class="collapse-item {{ (request()->is('dashboard/portfolio/add')) ? 'active' : '' }}"
                    href="{{ url('/dashboard/portfolio/add') }}">Add New Portfolio</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Blogs Collapse Menu -->
    <li
        class="nav-item {{ (request()->is('dashboard/blogs')) ? 'active' : '' }} {{ (request()->is('dashboard/blogs/categries')) ? 'active' : '' }} {{ (request()->is('dashboard/blogs/add')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlogs" aria-expanded="true"
            aria-controls="collapseBlogs">
            <i class="fas fa-fw fa-paper-plane"></i>
            <span>Blogs</span>
        </a>
        <div id="collapseBlogs" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6>
                <a class="collapse-item {{ (request()->is('dashboard/blogs')) ? 'active' : '' }}"
                    href="{{ url('/dashboard/blogs') }}">Blogs List</a>
                <a class="collapse-item {{ (request()->is('dashboard/blogs/categories')) ? 'active' : '' }}"
                    href="{{ url('/dashboard/blogs/categories') }}">Categories</a>
                <a class="collapse-item {{ (request()->is('dashboard/blogs/add')) ? 'active' : '' }}"
                    href="{{ url('/dashboard/blogs/add') }}">Add New Blog</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Others
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item 
            {{ (request()->is('dashboard/messages/inbox')) ? 'active' : '' }} 
            {{ (request()->is('dashboard/messages/drafts')) ? 'active' : '' }} 
            {{ (request()->is('dashboard/messages/sent')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-inbox"></i>
            <span>Messages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6>
                <a class="collapse-item {{ (request()->is('dashboard/messages/inbox')) ? 'active' : '' }}"
                    href="{{ url('/dashboard/messages/inbox') }}">Inbox</a>
                <a class="collapse-item {{ (request()->is('dashboard/messages/drafts')) ? 'active' : '' }}"
                    href="{{ url('/dashboard/messages/drafts') }}">Drafts</a>
                <a class="collapse-item {{ (request()->is('dashboard/messages/sent')) ? 'active' : '' }}"
                    href="{{ url('/dashboard/messages/sent') }}">Sent</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li
        class="nav-item {{ (request()->is('dashboard/settings')) ? 'active' : '' }} {{ (request()->is('dashboard/activity-logs')) ? 'active' : '' }}">
        <a class="nav-link {{ (request()->is('dashboard/settings')) ? 'active' : '' }}"
            href="{{ url('/dashboard/settings') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Other Settings</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->