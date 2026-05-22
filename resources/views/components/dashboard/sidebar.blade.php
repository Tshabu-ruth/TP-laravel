<aside class="sidebar">
    <div class="sidebar-brand">
        <a href="{{ route('home') }}" class="sidebar-logo">Le Blog</a>
        <div class="sidebar-sub">Administration</div>
    </div>
    <nav class="sidebar-nav">
        <div class="nav-section-label">Vue d'ensemble</div>
        <a href="{{ route('dashboard.index') }}" class="nav-item {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
            <span class="nav-icon">◈</span> Dashboard
        </a>

        <div class="nav-section-label">Contenu</div>
        <a href="{{ route('dashboard.articles') }}" class="nav-item {{ request()->routeIs('dashboard.articles') ? 'active' : '' }}">
            <span class="nav-icon">✦</span> Articles
            <span class="nav-badge">50</span>
        </a>
        <a href="{{ route('dashboard.categories') }}" class="nav-item {{ request()->routeIs('dashboard.categories') ? 'active' : '' }}">
            <span class="nav-icon">◎</span> Catégories
        </a>
        <a href="{{ route('dashboard.comments') }}" class="nav-item {{ request()->routeIs('dashboard.comments') ? 'active' : '' }}">
            <span class="nav-icon">◇</span> Commentaires
            <span class="nav-badge">250</span>
        </a>

        <div class="nav-section-label">Utilisateurs</div>
        <a href="{{ route('dashboard.users') }}" class="nav-item {{ request()->routeIs('dashboard.users') ? 'active' : '' }}">
            <span class="nav-icon">○</span> Utilisateurs
        </a>

        <div class="nav-section-label">Paramètres</div>
        <a href="{{ route('dashboard.settings') }}" class="nav-item {{ request()->routeIs('dashboard.settings') ? 'active' : '' }}">
            <span class="nav-icon">◻</span> Réglages
        </a>
    </nav>
    <div class="sidebar-footer">
        <div class="sidebar-user">
            <div class="user-avatar">A</div>
            <div>
                <div class="user-name">Admin</div>
                <div class="user-role">Super administrateur</div>
            </div>
        </div>
    </div>
</aside>
