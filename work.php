<?php include('includes/database.php') ?>
<?php include('includes/header.php') ?>
<section class="work">
    <h2 class="heading__h2">Development</h2>
    <!-- <h4 class="heading__h4">&ast;Hover over the image with your mouse, a video will play</h4> -->
    <ul class="work__ul">

        <?php
     $id = $_GET['id'];
     $query = "SELECT * FROM project";
     $sql = mysqli_query($connection,$query);
   
     while($row = mysqli_fetch_array($sql)){
        print '<li class="work__container" data-scroll>
                <div class="work__tab">
                <div class="work__imgContainer work__imgContainer-left">
                
                <img src="images/img/'.$row['img_main'].'" class="work__img">
                
                </div>
                <div class="work__desc">
                <h3 class="work__heading">'.$row['project_name'].'</h3>
                
                <p class="work__para work__para-des">'.$row['des'].'</p>
                <p class="work__para"><strong>&#128279; '.$row['technology_used'].'</strong></p>
                
                <div class="work__link-right">';

                if(!empty($row['demo'])){
                    print '<a href='.$row['demo'].' class="work__link" target="_blank"><i class="fafa-home"></i></a>';
                }
                if(!empty($row['git'])){
                    print'<a href='.$row['git'].' class="work__link" target="_blank">
                    <i class="fa-brands fa-github"></i></a></div>
                    ';
                }
        print '</div></div></li>';


        }
       
        ?>


    </ul>
</section>
<a href="#" class="work__top">
    <i class="fas fa-chevron-circle-up"></i>
</a>
<?php include('includes/footer.php') ?>
<script src="script/scroll.js"></script>
<!-- <script src="script/video.js"></script> -->
<script src="script/modal.js"></script>
</body>

</html>