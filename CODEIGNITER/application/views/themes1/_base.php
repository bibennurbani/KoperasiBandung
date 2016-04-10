<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <?php
  // Page Title
  if(isset($theme['assets']['header']['title']))
  echo $this->template->get_title() . "\n";
  // Meta Tags
  if(isset($theme['assets']['header']['meta'])) {
  foreach($this->template->get_meta() as $meta_tag) {
  echo $meta_tag . "\n";
  }
  }
  // Custom CSS Files
  if(isset($theme['assets']['header']['css'])) {
  foreach($this->template->get_css() as $css_file) {
  echo $css_file . "\n";
  }
  }
  // Custom JS Files
  if(isset($theme['assets']['header']['js'])) {
  foreach($this->template->get_js('header') as $js_file) {
  echo $js_file . "\n";
  }
  }
  ?>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <?php
  include 'component/navbar.php';
  include 'component/mainbar.php';
  ?>
  <div class="container">
    <div class="content">
      <div class="content-container">
        
        <?php
        if (isset($content_v)) {
        $this->load->view($content_v);
        }else{
        ?>
        
        <div class="content-header">
          <h2 class="content-header-title">Blank Page</h2>
          <ol class="breadcrumb">
            <li><a href="./index.html">Home</a></li>
            <li class="active">Blank Page</li>
          </ol>
          </div> <!-- /.content-header -->
          <?php } ?>
          </div> <!-- /.content-container -->
          
          </div> <!-- /.content -->
          </div> <!-- /.container -->
          <?php
          include 'component/footer.php';
          // Custom JS Files
          if(isset($theme['assets']['footer']['js'])) {
          foreach($this->template->get_js('footer') as $js_file) {
          echo $js_file . "\n";
          }
          }
          ?>
          
        </body>
      </html>