  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>King Fadlurs</p>
          
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?=base_url()."admin";?>">
            <i class="fa fa-dashboard"></i>
            <span>Home Admin</span>
          </a>
        </li>
        <li>
          <a href="<?=base_url()."home";?>">
            <i class="fa fa-home"></i>
            <span>Home Event</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>