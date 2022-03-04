$(document).ready(function () {

    var DOMAIN = "http://localhost/FMS/";

    //Fetch subject
    fetch_subject();
    function fetch_subject(){
        $.ajax({
            url : DOMAIN+"controller/SubjectController.php",
            method : "POST",
            data : {getSubject:1},
            success : function(data){
                var choose = "<option value='0'>Choose Subject Code</option>";
                $("#select_subject").html(choose+data);

            }
        })
    }

    //Manage Subject
    manageSubject(1);
    function manageSubject(pn){
        $.ajax({
            url : DOMAIN+"controller/SubjectController.php",
            method : "POST",
            data : {manageSubject:1,pageno:pn},
            success : function(data){
               // alert(data);
                $("#get_subject").html(data);
            }
        })
    }

    //Navigation Click
    $("body").delegate(".page-link","click",function(){
        var pn = $(this).attr("pn");
        //alert(pn);
        manageSubject(pn);
    })

    //Delete Subject
    $("body").delegate(".del_cat","click",function(){
        var did = $(this).attr("did");
        if (confirm("Are you sure ? You want to delete..!")) {
            $.ajax({
                url: DOMAIN+"controller/SubjectController.php",
                method: "POST",
                data: {deleteSubject: 1, id: did},
                success: function (data) {
                    if (data == "DELETED") {
                        alert("Deleted Successfully");
                        manageSubject(1);
                    } else {
                        alert("Something Went Wrong..!");
                    }
                }
            })
        }
    })

    //Update Subject
    $("body").delegate(".edit_cat","click",function(){
        var eid = $(this).attr("eid");
        //alert(eid);
        $.ajax({
            url : DOMAIN+"controller/SubjectController.php",
            method : "POST",
            dataType : "json",
            data : {updateSubject:1,id:eid},
            success : function(data){
                //alert(data);
                console.log(data);
                $("#sid").val(data["sid"]);
                $("#subjectUpdate").val(data["subject_code"]);
                $("#subject_name").val(data["subject_name"]);
            }
        })
    })

    //Updating Subject
    $("#update_subject_form").on("submit",function(){
            $.ajax({
                url : DOMAIN+"controller/SubjectController.php",
                method : "POST",
                data  : $("#update_subject_form").serialize(),
                success : function(data){
                    if (data=="UPDATED") {
                        alert("Subject Updated Successfully..!");
                        //$("#cat_error").html("<span class='text-success'>Subject Updated Successfully</span>");
                        window.location.href = "";
                    }else {
                        alert(data);
                    }
                }
            })

    })

    /*--------------------------------------------------Virtual Course Files--------------------------------------------*/
    manageHome();
    function manageHome(){
        $.ajax({
            url : DOMAIN+"controller/HomeController.php",
            method : "POST",
            data : {manageHome:1},
            success : function(data){
                $("#get_home").html(data);
            }
        })
    }

//Navigation Click
    $("body").delegate(".page-link","click",function(){
        manageHome();
    })




    /*-------------------------------------------------------Batches---------------------------------------------------*/

    //Manage Batch Table
    manageBatch(1);
    function manageBatch(pn){
        $.ajax({
            url : DOMAIN+"controller/BatchController.php",
            method : "POST",
            data : {manageBatch:1,pageno:pn},
            success : function(data){
                $("#get_batch").html(data);
            }
        })
    }


    //Navigation Click
    $("body").delegate(".page-link","click",function(){
        var pn = $(this).attr("pn");
        //alert(pn);
        manageBatch(pn);
    })


    //Delete Batch
    $("body").delegate(".del_brand","click",function(){
        var did = $(this).attr("did");
        if (confirm("Are you sure ? You want to delete..!")) {
            $.ajax({
                url : DOMAIN+"controller/BatchController.php",
                method : "POST",
                data : {deleteBatch:1,id:did},
                success : function(data){
                    if (data == "DELETED") {
                        alert("Batch is deleted");
                        manageBatch(1);
                    }else{
                        alert(data);
                    }

                }
            })
        }
    })

    //Select Batch for Update
    $("body").delegate(".edit_brand","click",function(){
        var eid = $(this).attr("eid");
        //alert(eid);
        $.ajax({
            url : DOMAIN+"controller/BatchController.php",
            method : "POST",
            dataType : "json",
            data : {updateBatch:1,id:eid},
            success : function(data){
                //console.log(data);
                //alert(data["batch_name"]);
                $("#bid").val(data["bid"]);
                $("#batchUpdate").val(data["batch_name"]);
            }
        })
    })

    //Updating Batch
    $("#update_batch_form").on("submit",function(){
        if ($("#batchUpdate").val() == "") {
            $("#batchUpdate").addClass("border-danger");
            $("#batch_error").html("<span class='text-danger'>Please Enter Batch Name</span>");
        }else{
            $.ajax({
                url : DOMAIN+"controller/BatchController.php",
                method : "POST",
                data  : $("#update_batch_form").serialize(),
                success : function(data){
                    //alert(data);
                    alert("Subject Updated Successfully..!");
                    //$("#batch_error").html("<span class='text-success'>Please Enter Batch Name</span>");
                    window.location.href = "";
                }
            })
        }
    })
    /*-------------------------------------------------------File Name---------------------------------------------------*/
//Manage
    manageFile_name(1);
    function manageFile_name(pn){
        $.ajax({
            url : DOMAIN+"controller/FileNameController.php",
            method : "POST",
            data : {manageFile_name:1,pageno:pn},
            success : function(data){
                $("#get_file_name").html(data);
            }
        })
    }

    //Navigation Click
    $("body").delegate(".page-link","click",function(){
        var pn = $(this).attr("pn");
        //alert(pn);
        manageFile_name(pn);
    })







    //Delete File Name
    $("body").delegate(".del_filename","click",function(){
        var did = $(this).attr("did");
        if (confirm("Are you sure ? You want to delete..!")) {
            $.ajax({
                url : DOMAIN+"controller/FileNameController.php",
                method : "POST",
                data : {deleteFile_name:1,id:did},
                success : function(data){
                    if (data == "DELETED") {
                        alert("File Name is deleted");
                        manageFile_name(1);
                    }else{
                        alert(data);
                    }

                }
            })
        }
    })

    //Select File Name for Update
    $("body").delegate(".edit_filename","click",function(){
        var eid = $(this).attr("eid");
        //alert(eid);
        $.ajax({
            url : DOMAIN+"controller/FileNameController.php",
            method : "POST",
            dataType : "json",
            data : {update_FileName:1,id:eid},
            success : function(data){
                //console.log(data);
                //alert(data["file_name"]);
                $("#fid").val(data["fid"]);
                $("#fileNameUpdate").val(data["file_name"]);
                $("#file_number").val(data["file_number"]);
            }
        })
    })

    //Updating File Name
    $("#update_FileName_form").on("submit",function(){
        if ($("#fileNameUpdate").val() == "" && $("#file_number").val()=="") {
            $("#fileNameUpdate").addClass("border-danger");
            $("#filename_error").html("<span class='text-danger'>Please Enter File Name</span>");
            $("#file_number").addClass("border-danger");
            $("#filenumber_error").html("<span class='text-danger'>Please Enter File Number</span>");
        }else{
            $.ajax({
                url : DOMAIN+"controller/FileNameController.php",
                method : "POST",
                data  : $("#update_FileName_form").serialize(),
                success : function(data){
                    //alert(data);
                    alert("File Details Updated Successfully..!");
                    //$("#batch_error").html("<span class='text-success'>Please Enter Batch Name</span>");
                    window.location.href = "";
                }
            })
        }
    })

    manageFile_details();
    function manageFile_details(){
        $.ajax({
            url : DOMAIN+"controller/HomeController.php",
            method : "POST",
            data : {manageFile_details:1,},
            success : function(data){
                $("#get_file_details").html(data);
            }
        })
    }

//Navigation Click
    $("body").delegate(".file-details","click",function(){
        manageFile_details();
    })




})


