<br><br><br>
<section class="thumb" >
    <div class="container" >
       <div class="row" id="kotak">
            <?php foreach ($event->result() as $key => $value) { ?>
                <div class="col-sm-6 col-md-4 col-xs-12 jQueryEqualHeight3"><br>
                    <div class="card border-secondary mb-3">
                         <img class="card-img-top" style="width:360px;height:360px;"  src="<?=$value->img ?>"   alt="Card image cap">
                            <div class="card-body text-secondary">
                                <input type="hidden" <?= $value->id ?> >
                                    <h3 class="card-title"><?= $value->name ?></h3>
                                    <p class="card-text"><i class="fa fa-map-marker"></i> <?= $value->location ?>
                                        <div class="card-read-more text-center">
                                            <a href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html" class="btn btn-link btn-block">
                                            <a href="<?= base_url()."home/event/".$value->id ?>">Read More</a>
                                            </a>
                                        </div>
                                    </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
</section><br><br>
