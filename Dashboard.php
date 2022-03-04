<?php include_once("includes/Header.php"); ?>

<title>Dashboard</title>

<div class="container" style="padding-top: 50px;">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Subjects</h5>
                    <p class="card-text">Here You Can Manage Your Subjects</p>
                    <a href="#" data-toggle="modal" data-target="#subject" class="btn btn-primary">Add</a>
                    <a href="Manage-Subject.php" class="btn btn-primary">Manage</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Batches</h5>
					<!--Data-Target id will be called in Brands.php-->
                    <p class="card-text">Here You Can Manage Your Batches</p>
                    <a href="#" data-toggle="modal" data-target="#batches" class="btn btn-primary">Add</a>
                    <a href="Manage-Batch.php" class="btn btn-primary">Manage</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">File Name</h5>
                    <p class="card-text">Here You Can Manage Your File Names</p>
                    <a href="#" data-toggle="modal" data-target="#file_names" class="btn btn-primary">Add</a>
                    <a href="Manage-File-Name.php" class="btn btn-primary">Manage</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<?php include_once("includes/Subject.php"); ?>
<?php include_once("includes/Batches.php"); ?>
<?php include_once("includes/FileNames.php"); ?>

</body>
</html>