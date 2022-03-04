//Custom Javascripts

$(document).ready(function () {

    var DOMAIN = "http://localhost/FMS/";

    /*---------------------------------------------------- Register-------------------------------------------------- */
   $("#register_form").on("submit",function () {
       var status = false;
       var name = $("#username");
       var email = $("#email");
       var password1 = $("#password1");
       var password2 = $("#password2");
       var type = $("#type");
       var n_patt = new RegExp(/^[A-Za-z ]+$/);
       var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);

        //Username Validation
        if (name.val()==""){
            name.addClass("border-danger");
            $("#u_error").html("<span class='text-danger'>Please Enter Your Name</span>");
            status = false;
        }else{
            name.removeClass("border-danger");
            $("#u_error").html("");
            status = true;
        }

       //Email Validation
       if (email.val()==""){
           email.addClass("border-danger");
           $("#e_error").html("<span class='text-danger'>Please Enter Your Email</span>");
           status = false;
       }else if(!e_patt.test(email.val())){
           email.addClass("border-danger");
           $("#e_error").html("<span class='text-danger'>Please Enter a Valid Email</span>");
           status = false;
       }else{
           email.removeClass("border-danger");
           $("#e_error").html("");
           status = true;
       }

       //Password1 Validation
       if (password1.val()=="") {
           password1.addClass("border-danger");
           $("#p1_error").html("<span class='text-danger'>Please Enter Password</span>");
           status = false;
       }else if(password1.val().length < 8){
           password1.addClass("border-danger");
           $("#p1_error").html("<span class='text-danger'>Password Length Must be more than 9 characters</span>");
           status = false;
       }else{
           password1.removeClass("border-danger");
           $("#p1_error").html("");
           status = true;
       }

       //Password2 Validation
       if (password2.val()=="") {
           password2.addClass("border-danger");
           $("#p2_error").html("<span class='text-danger'>Please Re-Enter Password</span>");
           status = false;
       }else if(password2.val().length < 8){
           password2.addClass("border-danger");
           $("#p2_error").html("<span class='text-danger'>Password Length Must be more than 9 characters</span>");
           status = false;
       }else{
           password2.removeClass("border-danger");
           $("#p2_error").html("");
           status = true;
       }

       //Type Validation
       if (type.val()=="") {
           type.addClass("border-danger");
           $("#t_error").html("<span class='text-danger'>Please Select User Type</span>");
           status = false;
       }else{
           type.removeClass("border-danger");
           $("#t_error").html("");
           status = true;
       }

       //Password Matches Validation
       if (password1.val()!= password2.val()){
           password2.addClass("border-danger");
           $("#p2_error").html("<span class='text-danger'>Password Not Matched</span>");
           status = false;

       }else if(password1.val() == password2.val() && status == true) {
            //alert("Everything OK");

           $(".overlay").show();
           $.ajax({
               url : DOMAIN+"/controller/UserController.php",
               method : "POST",
               data : $("#register_form").serialize(),
               success : function(data){                            //Response == data
                   if (data == "EMAIL_ALREADY_EXISTS") {
                       $(".overlay").hide();
                       alert("It seems like you email is already used");
                   }else if(data == "SOME_ERROR"){
                       $(".overlay").hide();
                       alert("Something Wrong");
                   }else{
                       alert("User Registered Successfully..!")
                       /*$(".overlay").hide();
                       window.location.href = encodeURI(DOMAIN+"/Index.php?msg=You are registered Now you can login");*/
                   }
               }
           }) //AJAX Ends
       }

   })

    /*------------------------------------------------------- LOGIN-------------------------------------------------- */

    $('#login_form').on("submit",function () {
        var email = $("#email");
        var password = $("#password");
        var status = false;

        if (email.val() == "") {
            email.addClass("borer-danger");
            $("#e_error").html("<span class='text-danger'>Please Enter Email</span>");
            status = false;
        } else {
            email.removeClass("border-danger");
            $("#e_error").html("");
            status = true
        }
        if (password.val() == "") {
            password.addClass("borer-danger");
            $("#p_error").html("<span class='text-danger'>Please Enter Password</span>");
            status = false;
        } else {
            password.removeClass("border-danger");
            $("#p_error").html("");
            status = true
        }
        if (status == true) {
            alert("Ready");
        }
    })

    /*----------------------------------------------------- Subject------------------------------------------------ */

    //Fetch Subject
    fetch_subject(); //Calling Function in Initialize
    function fetch_subject(){
        $.ajax({
            url : DOMAIN+"controller/SubjectController.php",
            method : "POST",
            data : {getSubject:1},
            success : function(data){
                //alert(data);
                //var root = "<option value='0'>Root</option>";
                var choose = "<option value=''>Subject</option>";
                //$("#parent_cat").html(root+data);
                $("#select_subject").html(choose+data);
            }
        })
    }

    //Add New Subject
    $("#subject_form").on("submit",function(){
        if (($("#subject_name").val() == "") && ($("#subject_code").val() =="")) {
            $("#subject_name").addClass("border-danger");
            $("#sbjName_error").html("<span class='text-danger'>Please Enter Subject Name</span>");
            $("#subject_code").addClass("border-danger");
            $("#sbjCode_error").html("<span class='text-danger'>Please Enter Subject Code</span>");
        }
        else{
            $.ajax({
                url : DOMAIN+"controller/SubjectController.php",
                method : "POST",
                data  : $("#subject_form").serialize(),
                success : function(data){
                    if (data == "SUBJECT_ADDED") {
                        $("#subject_name").removeClass("border-danger");
                        $("#sbjName_error").html("<span class='text-success'>New Subject Name Added Successfully..!</span>");
                        $("#subject_name").val("");
                        $("#subject_code").removeClass("border-danger");
                        $("#sbjCode_error").html("<span class='text-success'>New Subject Code Added Successfully..!</span>");
                        $("#subject_code").val("");
                        fetch_subject();
                    }else{
                        alert(data);
                    }
                }
            })
        }
    })

    //Fetch Batch
    fetch_batch();  //Calling Function in Initialize
    function fetch_batch(){
        $.ajax({
            url : DOMAIN+"/controller/BatchController.php",
            method : "POST",
            data : {getBatch:1},
            success : function(data){
                var choose = "<option value=''>Choose Batch</option>";
                $("#select_batch").html(choose+data);
            }
        })
    }

    //Add New Batch
    $("#batch_form").on("submit",function(){
        if ($("#batch_name").val() == "") {
            $("#batch_name").addClass("border-danger");
            $("#batch_error").html("<span class='text-danger'>Please Enter Batch Name</span>");
        }else{
            $.ajax({
                url : DOMAIN+"controller/BatchController.php",
                method : "POST",
                data : $("#batch_form").serialize(),
                success : function(data){
                    if (data == "BATCH_ADDED") {
                        $("#batch_name").removeClass("border-danger");
                        $("#batch_error").html("<span class='text-success'>New Batch Added Successfully..!</span>");
                        $("#batch_name").val("");
                        fetch_batch();
                    }else{
                        alert(data);
                    }

                }
            })
        }
    })
// fetch file_name
    fetch_filename();  //Calling Function in Initialize
    function fetch_filename(){
        $.ajax({
            url : DOMAIN+"controller/FileNameController.php",
            method : "POST",
            data : {get_file_name:1},
            success : function(data){
                var choose = "<option value=''>Choose File Name</option>";
                $("#select_file_name").html(choose+data);
            }
        })
    }

    //Add New file name
    $("#filename_form").on("submit",function(){
        if ($("#file_name").val() == "" && $("#file_number").val()=="") {
            $("#file_name").addClass("border-danger");
            $("#file_error").html("<span class='text-danger'>Please Enter File Name</span>");
            $("#file_number").addClass("border-danger");
            $("#filenumber_error").html("<span class='text-danger'>Please Enter File Number</span>");
        }else{
            $.ajax({
                url : DOMAIN+"controller/FileNameController.php",
                method : "POST",
                data : $("#filename_form").serialize(),
                success : function(data){
                    if (data == "FILE_NAME_ADDED") {
                        $("#file_name").removeClass("border-danger");
                        $("#file_error").html("<span class='text-success'>New File Name Added Successfully..!</span>");
                        $("#file_name").val("");
                        $("#file_number").removeClass("border-danger");
                        $("#filenumber_error").html("<span class='text-success'>New File Number Added Successfully..!</span>");
                        $("#file_number").val("");
                        fetch_subject();
                    }else{
                        alert(data);
                    }

                }
            })
        }
    })


}) //Code Ends