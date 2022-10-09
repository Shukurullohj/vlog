<?php 
include('views/partials/head.php');
?>
    <div class="container mt-5">
        <?php foreach($query as $q){?>
            <div class="bg-info p-5 rounded-lg texte-white text-center">
                <h1><?php echo $q['title']; ?></h1>
                <img class="mb-4" style="width: 300px;" src="uploads/<?=$q['image_url']?>">
                <p class="mt-5 border-left border-dark p1-3"><?php echo $q['content']; ?></p>
                <div class="d-flex mt-2 justify-content-center align-items-center">
                    <a href="edit.php?id=<?php echo $q['id'];?>" class="btn btn-light btn-sm" name="edit">Edit</a>
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $q['id'] ?>' name="id">
                    
                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                    </form>
                </div>
            </div>
            
        <?php } ?>
        <a href="index.php" class="btn btn-outline-dark my-3">Go Home</a>
    </div>
<?php
include('views/partials/footer.php');
?>
      