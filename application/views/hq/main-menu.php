
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><?=anchor(base_url('/hq/showDashboard'),'Home'); ?></li>
        <li><a href="#">Members</a></li>
        <li><?=anchor(base_url('/hq/searchChapter'),'Chapters'); ?></li>
        <li><a href="#">Fees</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><?=anchor(base_url('/hq/logout'),'Logout'); ?></li>
      </ul>
    </div>
  </div>
</nav>
  