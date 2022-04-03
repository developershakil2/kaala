

  <link rel="stylesheet" href="dapp/style.css">
<?php  include_once("includes/head.php")?>

<body class="home-3">
    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->



    <!-- ===============// header section start here \\================= -->
    <?php  include_once("includes/header.php")?>
    <!-- ===============//header section end here \\================= -->


  

  <body>
   
    <div style="margin-top:50px; " id="dapp_con" class="container m-auto">
        <div id="main_box" class="row">
            <div class="col col-md-6 offset-md-3" id="window">
                <h4>Swap</h4>
                <div id="form">
                    <div class="swapbox">
                        <div class="swapbox_select token_select" id="from_token_select">
                            <img class="token_image" id="from_token_img">
                            <span id="from_token_text"></span>
                        </div>
                        <div class="swapbox_select">
                            <input class="number form-control" placeholder="amount" id="from_amount">
                        </div>
                    </div>
                    <div class="swapbox">
                        <div class="swapbox_select token_select"  id="to_token_select">
                            <img class="token_image" id="to_token_img">
                            <span id="to_token_text"></span>
                        </div>
                        <div class="swapbox_select">
                            <input class="number form-control" placeholder="amount" id="to_amount">
                        </div>
                    </div>
                    <div>Estimated Gas: <span id="gas_estimate"></span></div>
                    <button disabled class="btn btn-large btn-primary btn-block" id="swap_button">
                        Swap
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="token_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Select token</h5>
              <button id="modal_close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div id="token_list"></div>
            </div>
          </div>
        </div>
      </div>

    <script type="text/javascript" src="./dapp/main.js"></script>
  </body>
</html>







    
<?php  include_once("includes/footer.php")?>
<?php include_once("includes/script.php")?>