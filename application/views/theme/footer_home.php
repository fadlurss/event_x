 <footer class="fixed-bottom">
        <div class="container text-center">
            <div class="row">
                <div class="col sm-12">
                    <p>&copy; copyright 2017 | built with love by <a href="http:instagram/stayrocks">Muhammad Alfi</a></p>
                </div>
            </div>
        </div>
    </footer>
    
<!--
   <nav class="navbar  navbarfixed-bottom navbar-dark bg-dark navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Fixed bottom</a>
</nav>
-->


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?= base_url("assets/") ?>dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url("assets/") ?>dist/js/summernote.min.js"></script>   
    <script src="<?= base_url("assets/") ?>dist/js/moment.js"></script>
    <script src="<?= base_url("assets/") ?>dist/js/transition.js"></script>
    <script src="<?= base_url("assets/") ?>dist/js/collapse.js"></script>
    <script src="<?= base_url("assets/") ?>dist/js/bootstrap-datetimepicker.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <script src="<?= base_url("assets/") ?>dist/js/jquery-equal-height.min.js"></script>
    <!-- <script src="<?= base_url("assets/") ?>bower_components/materialize/js/materialize.js"></script> -->
    <script>
        $('input.typeahead').change(function(){
            var q = $(".typeahead").val();
            $.get("search.php?query="+q,function(e){
                var e = JSON.parse(e);
                var data = "";
                for(var i = 0; i < e.length; i++)
                {
                   data += '<div class="col-sm-6 col-md-4"><div class="thumbnail"> <img src="img/portfolio/london.jpg" alt="..."><div class="caption"><h3>'+e[i].nama+'</h3><p><i class="fa fa-map-marker"></i> '+e[i].lokasi+'</p><p><a href="view.php?id='+e[i].id+'" class="btn btn-primary" >More</a></p></div></div></div>';
                }
                $("#kotak").html(data);

            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/core.js"></script>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker6').datetimepicker();
            $('#datetimepicker7').datetimepicker({
                useCurrent: false //Important! See issue #1075
            });
            $("#datetimepicker6").on("dp.change", function (e) {
                $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
            });
            $("#datetimepicker7").on("dp.change", function (e) {
                $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
            });
        });
    </script>
    <script>
         $(document).ready(function(){
           $('#description').summernote({
               toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']], 
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['link', ['linkDialogShow', 'unlink']]
              ]
           });
         });
    </script>
    <script type="text/javascript">
        function equal_height() {
            $('.jQueryEqualHeight3').jQueryEqualHeight('.card .card-body .card-title');
            $('.jQueryEqualHeight3').jQueryEqualHeight('.card .card-body .card-text');
            $('.jQueryEqualHeight3').jQueryEqualHeight('.card');
        }
        $(window).on('load', function(event) {
            equal_height();
        });
        $(window).resize(function(event) {
            equal_height();
        });
    </script>
   <!--  <script>
        $(document).ready(function() {
          $('.button-collapse').sideNav();
          $('select').material_select();
          $('.datepicker').pickadate({
            format: 'dd-mm-yyyy',
          });
        });
    </script> -->
</body>
</html>
