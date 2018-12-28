<?php include "includes/header.php"; ?>

<div id="wrapper">

    <?php include "includes/navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome
                        <small>Author</small>
                        to the Admin page
                    </h1>
                </div>

                <div class="col-xs-6">
                    <form action="">
                        <div class="form-group">
                            <label for="catTitle">Category Title</label>
                            <input class="form-control" type="text" name="catTitle">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "includes/footer.php"; ?>
