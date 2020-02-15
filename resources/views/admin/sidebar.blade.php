<aside class="main-sidebar">
  <a href="/admin/dashboard" class="brand-link"><i class="fab fa-erlang"></i><span class="brand-text">fflux</span></a>
  <div class="sidebar">
    <nav>
      <ul class="nav nav-pills nav-sidebar flex-column nav-flat" role="menu" data-accordion="true" data-widget="treeview">
        @vLink([
          'title'=>'Dashboard',
          'icon'=>'tachometer-alt fas',
          'url'=>'/dashboard'])
        @vLinks([
          'title'=>'Accounts',
          'icon'=>'id-card fas'])
          @vLink([
            'title'=>'SnapChat',
            'icon'=>'snapchat-square fab',
            'url'=>'/accounts/snapchat'])
          @vLink([
            'title'=>'Google',
            'icon'=>'google fab',
            'url'=>'/accounts/google'])
        @endvLinks
        @vLinks([
          'title'=>'Campaigns',
          'icon'=>'bullhorn fas'])
          @vLink([
            'title'=>'Campaign Manager',
            'icon'=>'chart-line fas',
            'url'=>'/campaigns'])
          @vLink([
            'title'=>'Waffles',
            'icon'=>'stroopwafel fas',
            'url'=>'/rules'])
        @endvLinks
        @vLink([
          'title'=>'Content Manager',
          'icon'=>'newspaper far',
          'url'=>'/pages'])
        @vLink([
          'title'=>'Domains & Routes',
          'icon'=>'sitemap fas',
          'url'=>'/domains'])
        @vLinks([
          'title'=>'Reporting',
          'icon'=>'chart-line fas'])
          @vLink([
            'title'=>'Spend',
            'icon'=>'funnel-dollar fas',
            'url'=>'/reports/spend'])
          @vLink([
            'title'=>'Revenue',
            'icon'=>'dollar-sign fas',
            'url'=>'/reports/revenue'])
          @vLink([
            'title'=>'Users',
            'icon'=>'users fas',
            'url'=>'/reports/user'])
          @vLink([
            'title'=>'Traffic',
            'icon'=>'traffic-light fas',
            'url'=>'/reports/traffic'])
        @endvLinks
          @vLink([
            'title'=>'Payment Methods',
            'icon'=>'credit-card fas',
            'url'=>'/payments'])
        @vLink([
          'title'=>'Users & Permissions',
          'icon'=>'users-cog fas',
          'url'=>'/users'])
      </ul>
    </nav>
  </div>
</aside>