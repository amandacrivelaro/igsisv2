<!-- Logo -->
<a href="index2.html" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>IGSIS</b></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b>IGSIS</b></span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- User Account Menu -->
      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <!-- The user image in the navbar
          <?php
                echo $this->Html->image(
                    'TwitterBootstrap.user2-160x160.jpg',
                    ['class'=>'user-image',  "alt"=>"User Image"]
                );
            ?>-->
          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <span class="hidden-xs"><?php echo $this->Html->saudacao(); ?>, <?php echo $loguser; ?>!</span>
        </a>
      </li>
      <!-- Control Sidebar Toggle Button -->
      <li>
        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
      </li>
    </ul>
  </div>
</nav>
