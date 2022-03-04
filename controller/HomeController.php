<?php


include_once("../database/DBConnection.php");
include_once("../model/Subject.php");


if (isset($_POST["manageHome"])){
    $obj = new Subject();
    $rows1 = $obj->getAllRecord("batches");
    $rows2 = $obj->getAllRecord("subject");

    foreach ($rows1 as $rows) {
        ?>
        <tr>
            <td><b><?php echo $rows["batch_name"]; ?></b></td>
            <?php foreach($rows2 as $row ) {
                ?>
                <td><a href="FileDetails.php?varname=<?php echo $rows["batch_name"]."/".$row["subject_code"] ?>" class="btn btn-info file-details"><?php echo $row["subject_code"] ?></a></td>
                <?php
            }
            ?>

        </tr>
        <?php
    }
    exit();
}

if (isset($_POST["manageFile_details"])){
    $obj = new Subject();
    $rows3 = $obj->getAllRecord("file_details");


    foreach ($rows3 as $rows) {
        ?>
        <tr>
            <td>
                <a href=" " ><?php echo $rows["file_name"] ?></a>
            </td>
        </tr>
        <?php
    }
    ?>
    <?php
    exit();
}

?>