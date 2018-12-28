<?php include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <?php

            $postSummaries;

            if(isset($_POST["submit"])) {
                $search = $_POST["search"];
                $postSummaries = getPostSummaries($search);
            }
            else {
                $postSummaries = getPostSummaries();
            }

            if (sizeof($postSummaries)) {
                foreach ($postSummaries as $postSummary) {
                    ?>
    
                    <h1 class="page-header">
                        Page Heading
                        <small>Secondary Text</small>
                    </h1>
    
                    <!-- First Blog Post -->
                    <h2>
                        <a href="#"><?php echo $postSummary["postTitle"] ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php"><?php echo $postSummary["postAuthor"] ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $postSummary["postDate"] ?></p>
                    <hr>
                    <img class="img-responsive" src="images/<?php echo $postSummary["postImage"] ?>" alt="">
                    <hr>
                    <p><?php echo $postSummary["postContent"] ?></p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
    
                    <hr>
    
                    <?php
                }
            }
            else {
                echo "<h1 class='page-header'>No Results</h1>";
            }

            ?>

            
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php include "includes/sidebar.php"; ?>

    </div>
    <!-- /.row -->

    <hr>

<!-- Footer -->
<?php include "includes/footer.php"; ?>