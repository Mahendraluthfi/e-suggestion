<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->
    <link rel="icon" href="<?php echo base_url() ?>asset/mas_icon.png">
    

    <title>Autonomation Digital Suggestion</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>asset/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>asset/dist/css/cover.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/lzb9xb6nk7bhcwc0o84tkk63jdjhevhzli5pwnrxwr11brsa/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <style type="text/css">
      body{
        font-family: 'Ubuntu', sans-serif;
      }      
    </style>
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <img src="<?php echo base_url() ?>asset/mas_icon.png" height="80" class="mb-3" alt="">
          <h3>Autonomation<br>Suggestion Platform</h3>          
         <!--  <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
          </nav> -->
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">We want better</h1>
        <p class="lead">Please give us a suggestions</p>
        <p class="lead">
          <button type="button" class="btn btn-lg btn-secondary" onclick="add()">Submit Suggestion</button>
        </p>
        <?php echo $this->session->flashdata('msg'); ?>
      </main>

    <div class="modal fade bd-example-modal-lg" id="modal-id" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg mw-100 w-75">
        <div class="modal-content">
          <!-- <div class="modal-header text-dark">
            Submit a suggestions
          </div> -->
          <div class="modal-body text-dark text-left" style="text-shadow: 0px 0px #000; font-size: 13px;">
            <?php echo form_open('welcome/submit'); ?>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name <span class="text-info">(Nama)</span></label>
                <div class="col-sm-6">
                  <input required="" type="text" class="form-control form-control-sm" name="name" placeholder="Name / Nama">
                </div>
                <label class="col-sm-1 col-form-label">EPF</label>
                <div class="col-sm-3">
                  <input required="" type="text" class="form-control form-control-sm" name="epf" placeholder="EPF No">
                </div>
              </div>    
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Department</label>
                <div class="col-sm-6">
                  <input required="" type="text" class="form-control form-control-sm" name="department" placeholder="Department">
                </div>                
              </div> 
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Title <span class="text-info">(Judul)</span></label>
                <div class="col-sm-10">
                  <input required="" type="text" class="form-control form-control-sm" name="title" placeholder="Title / Judul Suggestion">
                </div>                
              </div>                 
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Purpose <span class="text-info">(Tujuan)</span></label>
                <div class="col-sm-10">
                  <input required="" type="text" class="form-control form-control-sm" name="purpose" placeholder="Purpose / Tujuan">
                </div>                
              </div>  
              <div class="form-group row">
                <label class="col-sm-6 col-form-label">Current Process <span class="text-info">(Proses saat ini)</span></label>
                <label class="col-sm-6 col-form-label">Future Process <span class="text-info">(Proses yang dinginkan)</span></label>                
              </div>                          
              <div class="form-group row">
                <div class="col-sm-6">                
                  
                  <textarea required="" name="current" class="form-control form-control-sm" rows="5" placeholder="Current Process (Proses saat ini)"></textarea>
                  <!-- <input type="file" name=""> -->
                </div>
                <div class="col-sm-6">
                  
                  <textarea required="" name="future" class="form-control form-control-sm" rows="5" placeholder="Future Process (Proses yang dinginkan)"></textarea>
                
                </div>                
              </div>  
              <div class="form-group row">
                <label class="col-sm-6 col-form-label">Benefit <span class="text-info">(Keuntungan)</span></label>                
              </div>  
              <div class="form-group row">
                    <div class="col-sm-12">
                        <textarea required="" name="benefit" class="form-control form-control-sm" rows="5" placeholder="Benefit (Keuntungan yang didapat)"></textarea>
                    </div>
              </div>                                                  
              <div class="form-group row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" onclick="return confirm('Are you sure with your submittion ?')" class="btn btn-primary">Submit Suggestion</button>
                    </div>
              </div>                                                  
            </form>
          </div>
        </div>
      </div>
    </div>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Develop by <a href="#">MAS Sumbiri Autonomation</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="<?php echo base_url() ?>asset/dist/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>asset/dist/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>asset/dist/js/holder.min.js"></script>
    <script src="<?php echo base_url() ?>asset/dist/js/bootstrap.min.js"></script>
    <script>

      function add() {
        // body...
        $('#modal-id').modal('show');
      }

        tinymce.init({
          selector: 'textarea',  // change this value according to your HTML
          plugins: 'lists',
          toolbar: 'bold italic | numlist bullist',
          menubar: false,
        });


    </script>
  </body>
</html>
