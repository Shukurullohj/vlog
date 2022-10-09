
<?php 
include("views/partials/head.php");
include "logic.php";

    $rowcount = mysqli_num_rows( $query );

    
?>

        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == 'added'){ ?>
                <div class="alert alert-success" role="alert">
                    Post has been added succesfully
                </div>
            <?php } else if ($_REQUEST['info'] == "updated"){ ?>
                <div class="alert alert-success" role="alert">
                    Post has been updated succesfully
                </div>
            <?php } else if ($_REQUEST['info'] == "deleted"){ ?>
                <div class="alert alert-danger" role="alert">
                    Post has been deleted succesfully
                </div>
            <?php } ?>
        <?php } ?>
  <main class="main-content mt-5">
    <div class="container">
      <div class="row">
        <header class="site-header col-4">
          <div class="site-header__logo-wrapper">
            <div class="p-4 bg-info rounded ">
              <h1 class="site-header__logo">Hi Blog There</h1>
              <p class="site-header__logo-info">Blogs Board</p>
            </div>
          </div>
          <div class="roadmap-widget mt-5">
            <div class="roadmap-widget__header p2">
              <h3 class="text-success">Lastest News</h3>
              <a class="roadmap-widget__link" href="news.html">View</a>
            </div>
            
            </dl>
          </div>    
          <div class="taglist">
            <h3 class="text-secondary">Popular News</h3>
          </div>
              
        </header>

        
        <div class="col-8">
          
          <div class="feedbacks__actions p-3 bg-info rounded mb-3 d-flex align-items-center justify-content-between">
            <div class="feedbacks__suggestions-count-wrapper align-items-center d-flex align-items-center">
              <img class="feedbacks__suggestions-icon" src="site_img/bulb.svg" alt="" aria-hidden="true" width="23" height="24">
              <div class="feedbacks__suggestions-count">6 Suggestions</div>
            </div>

            <div class="feedbacks__sorting-wrapper mt-2">
              <label class="feedbacks__sorting-label" for="feedbacks-sort-select">Sort by :</label>
              <select class="bg-transparent" aria-label="Disabled select example" name="sort" id="feedbacks-sort-select">
                <option>Most Upvotes</option>
                <option>Least Upvotes</option>
                <option>Most Comments</option>
                <option>Least Comments</option>
              </select>
            </div>

            <a class="btn btn-secondary" href="create.php">+ Add Post</a>
          </div>
        

        
          <div class="feedbacks__inner">
          
            
            <?php
        if($rowcount === 0) { 
            include('views/empty.php');
        } else { include('views/posts.php'); }?>
        

          </div>
        </div>
      </div>
    </div>
  </main>
    <div class="container mt-5">
        
        

<?php
include("views/partials/footer.php");
?>