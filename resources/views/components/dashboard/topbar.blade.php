<div class="topbar">
    <div class="topbar-title">@yield('title', 'Dashboard')</div>
    <div class="topbar-actions">
        <a href="{{ route('home') }}" class="view-site">↗ Voir le blog</a>
        @yield('topbar-actions')
    </div>
</div>
