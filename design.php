<?php include('includes/database.php') ?>
<?php include('includes/header.php') ?>
<section class="work">
    <h2 class="heading__h2">Design</h2>

    <ul class="design__ul">

        <?php
     $id = $_GET['id'];
     $query = "SELECT * FROM design ORDER BY id DESC";
     $sql = mysqli_query($connection,$query);
   
     while($row = mysqli_fetch_array($sql)){
      
            print '<li class="design__li">
                    <div class="design__tab">
                
                            <img src="images/works/'.$row['img'].'" alt="'.$row['project_name'].'" class="design__img">
                        
                            <div class="design__desc">
                            
                            <h3 class="design__heading">'.$row['project_name'].'</h3>

                            <p class="work__para design__para-des">'.$row['des'].'</p>
                            <p class="work__para"><strong>&#127912; '.$row['technology_used'].'</strong></p>';
                        
                        
                            print '
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
<script src="script/design.js" defer></script>

</body>

</html>