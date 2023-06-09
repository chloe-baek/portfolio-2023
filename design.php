<?php include('includes/database.php') ?>
<?php include('includes/header.php') ?>
<section class="work">
    <h2 class="heading__h2">Design</h2>
    <ul class="design__ul">

        <?php
     $id = $_GET['id'];
     $query = "SELECT * FROM design";
     $sql = mysqli_query($connection,$query);
   
     while($row = mysqli_fetch_array($sql)){
      
            print '<li class="design__container">
                    <div class="design__tab">
                
                            <figure class="design__figure">
                                <img src="images/works/'.$row['img'].'" alt="'.$row['project_name'].'" class="design__img">
                                <figcaption class="design__caption">'.$row['completed'].'</figcaption>
                            </figure>

                            <div class="design__desc">
                            
                            <h3 class="design__heading">'.$row['project_name'].'</h3>
                            
                            <p class="work__para"><strong>Project Type | </strong>'.$row['project_type'].'</p>
                            <p class="work__para design__para-des">'.$row['des'].'</p>
                            <p class="work__para"><strong>Technology Used | </strong>'.$row['technology_used'].'</p>
                            <p class="work__para"><strong>Goal | </strong>'.$row['goals'].'</p>
                            <p class="work__para"><strong>Challenging | </strong>'.$row['challenging'].'</p>
                            <p class="work__para"><strong>Target Audience | </strong>'.$row['target_audience'].'</p>
                            
                            </div>
                    </div>
                </li>';
            
        }
       
        ?>

    </ul>
</section>
<a href="#" class="work__top">
    <i class="fas fa-chevron-circle-up"></i>
</a>
<?php include('includes/footer.php') ?>
<script src="script/scroll.js" defer></script>
<script>
gsap.from('.design__container', {
    duration: 3.5,
    ease: 'power4.out',
    y: 50,
});
</script>
</body>

</html>