
<?php include_once("includes/Header.php"); ?>
<?php include_once("includes/Update-File-Name.php"); ?>
<?php require_once("database/DBConnection.php");?>

<div class="container"style="padding: 50px;">
    <div class="col-md-4">



    </div>
    <br/>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>File Number</th>
            <th>File Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody id="get_file_name">
        <!--<tr>
          <td>1</td>
          <td>Electronics</td>
          <td><a href="#" class="btn btn-success btn-sm">Active</a></td>
          <td>
              <a href="#" class="btn btn-danger btn-sm">Delete</a>
              <a href="#" class="btn btn-info btn-sm">Edit</a>
          </td>
        </tr>-->
        </tbody>
    </table>
</div>
<?php include_once("includes/FileNames.php"); ?>
</body>
</html>