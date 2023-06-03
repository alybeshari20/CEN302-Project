$(document).ready(function(){
    //Email Verification
    $("#stuemail").on("keypress blur", function(){
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

        var stuemail=$("#stuemail").val();
        $.ajax({
            url: 'Students/addstudents.php',
            method:'POST',
            data:{
                checkemail: "checekmail",
                stuemail: stuemail , 
                
            },
            success: function(data){
                //console.log(data);
                if(data!=0){     
             $("#statusMsg2").html("<small style='color:red;'> Email already used! </small");
         $("#signup").attr("disabled", true);
                }else if(data==0 && reg.test(stuemail)){
                    $("#statusMsg2").html("<small style='color:green;'> That's correct </small");
                    $("#signup").attr("disabled", false);
                } else if(!reg.test(stuemail)){
                    $("#statusMsg2").html("<small style='color:red;'> Please enter valid email e.g. example@gmail.com!</small");
             $("#signup").attr("disabled", false);
                }
                if(stuemail== ""){
                    $("#statusMsg2").html("<small style='color:red;'> Please enter email!</small");


                }
            },
        });
    });
});



function addStu() {
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname = $('#stuname').val();
    var stuemail = $('#stuemail').val();
    var stupass = $('#stupass').val();

    if(stuname.trim()==""){
        $("#statusMsg1").html("<small style='color:red;'> Please Enter Name! </small");
        $("#stuname").focus();
        return false;
    } else if(stuemail.trim() == "") {
        $("#statusMsg2").html("<small style='color:red;'> Please Enter Email! </small");
        $("#stuemail").focus();
        return false;

    }else if(stuemail.trim() != "" && !reg.test(stuemail)){
        $("#statusMsg2").html("<small style='color:red;'> Please enter valid email e.g. example@gmail.com! </small");
        $("#stuemail").focus();
        return false;

    }
    
    
    else if(stupass.trim() == "") {
        $("#statusMsg3").html('<small style="color:red;"> Please enter Password! </small');
        $("#stupass").focus();
        return false;
    } else {
        $.ajax({
            url:'Students/addstudents.php',
            method:'POST',
            dataType: "json",
            data:{
                stusignup: "stusignup",
                stuname: stuname ,
                stuemail: stuemail , 
                stupass: stupass ,
            },
            success: function(data){
                console.log(data);
                if(data=="OK"){
                    $('#successMsg').html("<span class='alert alert-success'> Registration Successful! </span>");
                    clearStuRegField();
    }else if(data=="Failed"){
        $('#successMsg').html("<span class='alert alert-danger'> Unable to Register</span>");
    
    
    }
            },
        });
    }

    
    }
     //Empty All Fields and Status Msg
function clearStuRegField() {
  $("#regForm").trigger("reset");
  $("#statusMsg1").html(" ");
  $("#statusMsg2").html(" ");
  $("#statusMsg3").html(" ");
}

//Login Verification

function checkStuLogin() {
    var stuLogEmail = $("#stuLogemail").val();
    var stuLogPass = $("#stuLogpass").val();
    $.ajax({
        url: "Students/addstudents.php",
        method: "POST",
        data: {
            checkLogemail: "checkLogemail",
            stuLogEmail: stuLogEmail,
            stuLogPass: stuLogPass,
        },
        success: function (data) {
            if(data==0){
                $("#statusLogMsg").html(
                    '<small class="alert alert-danger">Invalid !</small>'
                );

            }else if (data==1){
                $("#statusLogMsg").html('<div class="spinner-border text-success" role="status">Loading..</div>');
                setTimeout (() => {
                    window.location.href="index.php";
            
                },1000);
            }
        },
    });

}
