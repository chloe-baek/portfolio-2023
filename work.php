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
                    print '<a href='.$row['demo'].' class="work__link" target="_blank"><i class="fa fa-home"></i></a>';
                }
                if(!empty($row['git'])){
                    print'<a href='.$row['git'].' class="work__link" target="_blank">
                    <i class="fa-brands fa-github"></i></a></div>
                    ';
                }
print'  </div></div></li>';
        //  if($row['id'] % 2 === 0){
        //     print '<li class="work__container" data-scroll>
        //             <div class="work__tab">
        //             <div class="work__imgContainer work__imgContainer-left">
        //             <a href="#modal'.$row['id'].'" class="btn__show">
        //             <img src="images/img/'.$row['img_main'].'" class="work__img">
        //             </a>
        //             </div>
        //             <div class="work__desc">
                    
        //             <h3 class="work__heading">'.$row['project_name'].'</h3>
                    
        //             <p class="work__para"><strong>Project Type | </strong>'.$row['project_type'].'</p>
        //             <p class="work__para work__para-des">'.$row['des'].'</p>
        //             <p class="work__para"><strong>Technology Used | </strong>'.$row['technology_used'].'</p>
        //             <p class="work__para"><strong>Completed | </strong>'.$row['completed'].'</p>
        //             <div class="work__link-right">';
        //     if(!empty($row['demo'])){
        //         print '<a href='.$row['demo'].' class="work__link" target="_blank"><i class="fa fa-home"></i></a>';
        //     }
        //     if(!empty($row['git'])){
        //         print'<a href='.$row['git'].' class="work__link" target="_blank">
        //         <i class="fa-brands fa-github"></i></a></div>
        //         </div>';
        //     }
            
        // print '</div></li>';
            
        //  }
        //  if($row['id'] % 2 === 1){
        //     print '<li class="work__container" data-scroll>
        //             <div class="work__tab">
        //             <div class="work__desc-left">
                    
        //             <h3 class="work__heading">'.$row['project_name'].'</h3>
                   
        //             <p class="work__para"><strong>Project Type | </strong>'.$row['project_type'].'</p>
        //             <p class="work__para work__para-des">'.$row['des'].'</p>
        //             <p class="work__para"><strong>Technology Used | </strong>'.$row['technology_used'].'</p>
        //             <p class="work__para"><strong>Completed | </strong>'.$row['completed'].'</p>
        //             <div class="work__link-left">';

        //     if(!empty($row['demo'])){
        //         print '<a href='.$row['demo'].' class="work__link" target="_blank"><i class="fa fa-home"></i></a>';
        //     }
        //     if(!empty($row['git'])){
        //         print'<a href='.$row['git'].' class="work__link" target="_blank">
        //         <i class="fa-brands fa-github"></i></a></div>
        //         </div>';
        //     }
        //     print  '<div class="work__imgContainer-right work__imgContainer">
        //     <a href="#modal'.$row['id'].'" class="btn__show">
        //             <img src="images/img/'.$row['img_main'].'" class="work__img"> </a>
        //             </div>
        //         </div></li>';
        //     }
            
        //     print '<div class="modal hidden" id="modal'.$row['id'].'">
        //             <button class="btn__close">&times;</button>
        //             <video muted controls class="work__video">
        //             <source src="images/works/'.$row['img'].'" type="video/mp4">
        //             </video>
        //             <p class="work__para"><strong>Goals | </strong>'.$row['goals'].'</p>
        //             <p class="work__para"><strong>Challenging | </strong>'.$row['challenging'].'</p>';
        //             if(!empty($row['target_audience'])){
        //                 print '<p class="work__para"><strong>Target Audience | </strong>'.$row['target_audience'].'</p>';
        //             }
        //             if(!empty($row['collaborator'] || $row['role']) ){
        //                 print '<p class="work__para"><strong>Collaborator | </strong>'.$row['collaborator'].'</p>
        //                     <p class="work__para"><strong>Role | </strong>'.$row['role'].'</p>';
        //             }
        //     print '</div>';

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