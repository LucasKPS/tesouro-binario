<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #27599b;" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <img src="/img/logo/logonova2.png" alt="Logo da Fintech" style="height: px; width: 200px; padding-left: 4px">
        </div>
    </a>

    <hr class="sidebar-divider my-0">

    <!-- Sidebar Items -->
    @foreach ($itens as $item)
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('dashboard.page', [$item->item]) }}">
                <i class="{{ $item->icon }}"></i>
                {{ $item->identifier }}
            </a>
        </li>
    @endforeach

    <hr class="sidebar-divider">
    
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0 bx" id="sidebarToggle"></button>
    </div>
</ul>
