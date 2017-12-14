<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">CPU Traffic</span>
              <span class="info-box-number">90<small>%</small></span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">41,410</span>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Sales</span>
              <span class="info-box-number">760</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">New Members</span>
              <span class="info-box-number">2,000</span>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
            <!--<h1 class="box-title">Data Event</h1>-->
              <table class="table table-bordered table-striped " id="datatables">
                  <thead>
                     <th>ID</th>
                      <th>Name</th>
                      <th>Location</th>
                      <th>Time</th>
                      <th>Image</th>
                      <th>Action</th>
                  </thead>
                  <tbody>
                      <?php foreach ($event->result() as $key => $value) { ?>
                        <tr>
                            <td><?= $value->id  ?></td>
                            <td><?= $value->name  ?></td>
                            <td><?= $value->location  ?></td>
                            <td><?= $value->date  ?></td>
                            <td><img style="width:100px" src="<?=$value->img ?>" /></td>
                            <td>
                                <a class="btn btn-danger" href="<?= base_url(). "admin/edit/".$value->id; ?>"><i class="fa fa-pencil"></i> Edit</a>
                                <a class="btn btn-info" href="<?= base_url(). "admin/delete/".$value->id; ?>"><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                         </tr>
                       <?php } ?>
                      </tbody>
                    </table>
                   </div>
                </div>
            </div>
        </div>
    </section>
  </div>