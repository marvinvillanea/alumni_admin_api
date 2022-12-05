<?php 
    
    require_once('pages/header.php');
    require('function.php');
 
?>



<div class="page-wrapper">
       <?php include("menu_bar.php") ?>
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include("header_navigation.php");
              
            ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                
               <?php 
                $page = isset($_GET['page']) ? $_GET['page'] : 'home';
                if(!file_exists($page.".php")){
                    include '404.html';
                }else{
                    include $page.'.php';
                }

            ?>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<?php require_once('pages/footer.php')?>
