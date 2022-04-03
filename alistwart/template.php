<?php
include("class/function.php");
$object = new nftClass();





session_start();
$admin_id = $_SESSION['adminID'];

if($admin_id == null){
  header("location:index.php");
}




if(isset($_GET['adminlogout'])){
  if($_GET['adminlogout']=="logout"){
    $object->adminLogout();
  }
}







?>

<?php include_once('./includes/head_template.php'); ?>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    

<?php include_once('./includes/sidebar_template.php'); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php include_once('./includes/topnav_template.php'); ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php

            if($view == "dashboard"){
                include_once("view/dasboard_view.php");
            }elseif($view == "explor"){
                include("view/explor_view.php");
            }elseif($view=="explor_manage"){
                include("view/manage_explor_view.php");
            }elseif($view == "livenft"){
                include("view/livenft_view.php");
            }elseif($view == "livenft_manage"){
                include("view/live_nft_manage_view.php");
            }
            elseif($view == "whitelist"){
              include("view/white_view.php");
          }
          elseif($view == "whitelist_manage"){
            include("view/white_manage_view.php");
        }
        elseif($view == "super"){
          include("view/super_view.php");
      }
      elseif($view == "supermanage"){
        include("view/super_manage_view.php");
    } elseif($view == "rare"){
      include("view/rare_view.php");
  }
  elseif($view == "raremanage"){
    include("view/raremanage_view.php");
}

elseif($view == "devteam"){
  include("view/devteam_view.php");
}

elseif($view == "devteam_manage"){
  include("view/devteam_manage_view.php");
}

elseif($view == "common"){
  include("view/common_view.php");
}

elseif($view == "common_manage"){
  include("view/common_manage_view.php");
}

elseif($view == "allnft"){
  include("view/allnft_view.php");
}

elseif($view == "allnftmanage"){
  include("view/allnft_manage_view.php");
}

elseif($view == "lagendary"){
  include("view/lagendary_view.php");
}


elseif($view == "lagendarymanage"){
  include("view/lagendary_manage_view.php");
}


elseif($view == "faq"){
  include("view/faq_view.php");
}

elseif($view == "faqmanage"){
  include("view/faq_manage_view.php");
}


elseif($view == "rd"){
  include("view/rd_view.php");
}

elseif($view == "rdmanage"){
  include("view/rdmanage_view.php");
}


elseif($view == "explor_update"){
  include("update/explor_update.php");
}











?>
            
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer style="width:100%; height:50px; display:none" class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © colony 2022</span>
             
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php include_once('./includes/script.php'); ?>