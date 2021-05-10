
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet">
  <!-- View/Chapter_officer/Dashboard -->

  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <!-- <a class="navbar-brand" href="#">Logo</a> -->
  <?php 
     // $icon = '<img src="'.base_url("/icons/home.svg").' height=50 width=50';
      $icon = img(base_url("/icons/home.svg"), FALSE, 'width=50 height=50',);
      $link = base_url('administrator');
      echo anchor($link,$icon);
  ?>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
         <a class="nav-link" target="mainview" href=<?=base_url('administrator/members') ?> >Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="mainview" tabindex="-1" href=<?=base_url('#') ?> >News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="mainview" tabindex="-1" target="mainview" href=<?=base_url('#') ?>>Fees</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="mainview"  tabindex="-1" href=<?=base_url('#') ?> >Help</a>
      </li>
    </ul>
    

  <!-- <?php 
     
      $icon = img(base_url("/icons/settings.svg"), FALSE, 'width=30 height=30 class=mr-1',);
      $link = base_url('settings');
      echo anchor($link,$icon);
  ?> -->
       <div class="text-white">
        <?php 
      
          echo 'Login as '.$this->session->userdata('user').'&nbsp'; 
        ?>
          
        </div> 
       <?=anchor(base_url('administrator/logout'), 'Logout', 'class="btn btn-outline-warning my-2 my-sm-0 ml-1"') ?>
      <!-- <button class="btn btn-outline-warning my-2 my-sm-0 ml-1" >Logout</button> -->
    
  </div>

</nav>
<div class="container">
   
 <iframe name="mainview" width="100%" height="100%" style="border: 0" src=<?=base_url('administrator/insights') ?> ></iframe>
</div>
<!-- <script type="text/javascript">
  var data = sessionStorage.getItem('chapter');
  console.log(data);
</script> -->


