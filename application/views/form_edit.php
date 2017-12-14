<br><br><br>
<?php if($this->session->nama != null){ ?>
<section class="formulir" id="formulir">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Edit Event</h2>
                    <hr> </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <form enctype="multipart/form-data" action="<?= base_url()."home/update"; ?>" method="post">
                        <div class="form-group">
                            <div class="container">
                                <div class="form-group">
                                   <div class="row">
                                        <div class="name col-md-6">
                                           <label for="nim">Name Event</label>
                                                <input type="hidden" name="id" value="<?= $dataEvent->row()->id?>">
                                                <input type="text" name="name" id="name" value="<?= $dataEvent->row()->name ?>" class="form-control"required> 
                                               
                                        </div>
                                        <div class="name col-md-6">
                                           <label for="nama">Location</label>
                                               <input type="text" name="location" id="location" value="<?= $dataEvent->row()->location ?>" class="form-control" required> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                            <div class="name col-md-6">
                                               <label for="category">Select Category</label>
                                                <select name="id_category" id="id_category" class="form-control">
                                                    <option value="">---Choose Category---</option>
                                                    <option value="1">Event</option>
                                                    <option value="2">Seminar</option>
                                                </select>
                                            </div>
                                            <div class="name col-md-6">
                                               <label for="img">Image</label>
                                                <input type="file" name="img" id="img"  class="form-control">
                                            </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nama">Start Date</label>
                                        <div class="input-group date col-sm-4 col-md-4 col-xs-12" id="datetimepicker6">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                                <input type="text" class="form-control" name="date" id="date" value="<?= $dataEvent->row()->date ?>" required /> 
                                        </div>
                                </div>

                                <div class="form-group">
                                    <label for="nama">End Date</label>
                                        <div class="input-group date col-sm-4 col-md-4 col-xs-12" id="datetimepicker7">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                                <input type="text" class="form-control" name="date" id="date" value="<?= $dataEvent->row()->dateEnd ?>" required /> 
                                        </div>
                                </div>

                                <div class="form-group">
                                    <label for="pesan">Description</label>
                                    <textarea name="description" id="description" cols="30" class="form-control" rows="10"></textarea>
                                </div>
                                 <div class="form-group">
                                    
                                 </div>
                                <button class="btn btn-primary" id="submit" name="submit" role="button" value="Update">Add Event</button>
                                    </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>
<?php } else { 
redirect('home/login') ; } ?>