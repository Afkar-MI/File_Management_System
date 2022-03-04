<?php require_once("database/DBConnection.php"); ?>
<?php include_once("includes/Header.php"); ?>
<?php include_once("model/Filename.php"); ?>

<?php
$var_value=$_GET['varname'];
$obj = new Filename();
$rows3 = $obj->getAllRecord("file_details");
?>

<div class="container align-content-center">
    <br>
    <table >
        <thead><h1 class="text-info"><?php echo "$var_value" ?></h1></thead>

<?php
foreach ($rows3 as $rows) {
    ?>
            <tbody>
            <tr>
                <td>
                    <h5><a href="<?php echo "uploads/".$var_value."/".$rows["file_number"].".pdf" ?>" target="_blank"><?php echo $rows["file_name"] ?></a></h5>
                </td>
            </tr>
            </tbody>
    <?php
}
?>
    </table>
</div>
<?php
exit();
?>




