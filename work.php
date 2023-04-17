<?php include('includes/database.php') ?>
<?php include('includes/header.php') ?>
<section class="work">
    <h2 class="heading__h2">Work</h2>
    <ul class="work__ul">

        <?php
     $id = $_GET['id'];
     $query = "SELECT * FROM project";
     $sql = mysqli_query($connection,$query);
   
    
     while($row = mysqli_fetch_array($sql)){

         if($row['id'] %2 === 0){
            print '<li class="work__container" data-scroll>
                    <div class="work__tab">
                    <div class="work__imgContainer">
                    <video muted autoplay loop class="work__img">
                    <source src="images/works/'.$row['img'].'" type="video/mp4">
                    </video>
                    </div><div class="work__desc">
                    <h3 class="work__heading">'.$row['project_name'].'</h3>
                    <p class="work__para"><strong>Project Type | </strong>'.$row['project_type'].'</p>
                    <p class="work__para"><strong>Goals | </strong>'.$row['goals'].'</p>';
            if(!empty($row['target_audience'])){
                print '<p class="work__para"><strong>Target Audience | </strong>'.$row['target_audience'].'</p>';
            }
           
            print '<p class="work__para"><strong>Challenging | </strong>'.$row['challenging'].'</p>
                   <p class="work__para"><strong>Technology Used | </strong>'.$row['technology_used'].'</p>';
            if(!empty($row['collaborator'] || $row['role']) ){
                print '<p class="work__para"><strong>Collaborator | </strong>'.$row['collaborator'].'</p>
                       <p class="work__para"><strong>Role | </strong>'.$row['role'].'</p>';
            }
            print '<p class="work__para"><strong>Completed | </strong>'.$row['completed'].'</p><div>';
            if(!empty($row['demo'])){
                print '<a href='.$row['demo'].' class="work__link" target="_blank"><i class="fa fa-home"></i></a>';
            }
            if(!empty($row['git'])){
                print'<a href='.$row['git'].' class="work__link" target="_blank">
                <i class="fa-brands fa-github"></i></a></div>';
            }
         }
         if($row['id'] %2 === 1){
            print '<li class="work__container" data-scroll>
                    <div class="work__tab">
                    <div class="work__desc-left">
                    <h3 class="work__heading">'.$row['project_name'].'</h3>
                    <p class="work__para"><strong>Project Type | </strong>'.$row['project_type'].'</p>
                    <p class="work__para"><strong>Goals | </strong>'.$row['goals'].'</p>';
            if(!empty($row['target_audience'])){
                print '<p class="work__para"><strong>Target Audience | </strong>'.$row['target_audience'].'</p>';
            }
            print '<p class="work__para"><strong>Challenging | </strong>'.$row['challenging'].'</p>
                    <p class="work__para"><strong>Technology Used | </strong>'.$row['technology_used'].'</p>';
            if(!empty($row['collaborator'] || $row['role']) ){
                print '<p class="work__para"><strong>Collaborator | </strong>'.$row['collaborator'].'</p>
                        <p class="work__para"><strong>Role | </strong>'.$row['role'].'</p>';
            }
            print '<p class="work__para"><strong>Completed | </strong>'.$row['completed'].'</p><div>';
            if(!empty($row['demo'])){
                print '<a href='.$row['demo'].' class="work__link" target="_blank"><i class="fa fa-home"></i></a>';
            }
            if(!empty($row['git'])){
                print'<a href='.$row['git'].' class="work__link" target="_blank">
                <i class="fa-brands fa-github"></i></a></div>';
            }
            print  '</div><div class="work__imgContainer-right">
                    <video muted autoplay loop class="work__img">
                    <source src="images/works/'.$row['img'].'" type="video/mp4">
                    </video>';

         }
       
     }
    ?>
        </div>
        </div>
        </li>
    </ul>
</section>
<a href="#" class="work__top">
    <i class="fas fa-chevron-circle-up"></i>
</a>
<?php include('includes/footer.php') ?>
<script src="./script/scroll.js"></script>

</body>

</html>