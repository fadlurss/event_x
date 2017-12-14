    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- ID Event -->
          <input type="hidden" name="id" value="<?= $dataEvent->row()->location ?>">

          <!-- Title -->
          <h1 class="mt-4"><?= $dataEvent->row()->name ?></h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#"><?=  $dataUsers->row()->username  ?></a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Date : <?= $dataEvent->row()->date ?> - <?= $dataEvent->row()->dateEnd?></p>

          <!-- Location -->
          <p>Location : <?= $dataEvent->row()->location ?></p>

          <hr>

          <div class="thumbnail">
          <!-- Preview Image -->
          <img class="img-fluid rounded" src="<?=  $dataEvent->row()->img  ?>" alt="">
          </div>

          <hr>

          <!-- Post Content -->
          <p class="lead">
          <?= $dataEvent->row()->description ?></p>

          <?php if($this->session->nama != null){ ?>
                              <a href="<?= base_url(). "home/edit/".$dataEvent->row()->id; ?>" class="btn btn-primary">Edit</a>
          <?php } ?>
          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>

          <!-- Comment with nested comments -->
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0">Commenter Name</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

              <div class="media mt-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                  <h5 class="mt-0">Commenter Name</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>

            </div>
          </div>

        </div>

               <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <?php foreach ($category->result() as $key => $value) { ?>
                                        <li><a href="<?= base_url("home/category/" . $value->id_category) ?>"><?= $value->name_category ?></a></li>
                                    <?php } ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <!-- <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div> -->

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->