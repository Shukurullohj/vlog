<?php 
include('partials/head.php');
?>
<?php if (isset($_GET['error'])): ?>
	<p><?php echo $_GET['error']; ?></p>
<?php endif ?>
    <div class="container mt-5">
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <input type="text" name="title" placeholder=" Blog title" class="form-control my-3 bg-info text-white text-center" name="title">
            <textarea name="content" class="form-control my-3 bg-info text-white" cols="30" rows="10"></textarea>
            <input class="form-control mb-3" type="file" name="my_image">
            <button name="new_post" type="submit" value="Upload" class="btn btn-info">Add Post</button>
        </form>
    </div>
<?php
include('partials/footer.php');
?>