<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <form action="" method="post">
            <div class="input-group">
                <input name="search" type="text" class="form-control">
                <span class="input-group-btn">
                    <button name="submit" class="btn btn-default" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                </button>
                </span>
            </div>
        </form>
        
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">

        <?php


        $titles = getCategoryTitles(10);

        ?>

        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    <?php

                    for ($i = 0; $i < sizeof($titles); $i+=2) {
                        echo "<li><a href='#'>{$titles[$i]}</a></li>";
                    }

                    ?>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    <?php

                    for ($i = 1; $i < sizeof($titles); $i+=2) {
                        echo "<li><a href='#'>{$titles[$i]}</a></li>";
                    }

                    ?>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <?php include "widget.php"; ?>

</div>