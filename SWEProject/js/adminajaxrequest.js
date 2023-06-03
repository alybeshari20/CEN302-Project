// Ajax Call for admin Login Verification
function checkAdminLogin() {
  var adminLogEmail = $("#adminLogemail").val();
  var adminLogPass = $("#adminLogpass").val();
  $.ajax({
    url: "Admin/admin.php",
    type: "post",
    data: {
      checkLogemail: "checklogmail",
      adminLogEmail: adminLogEmail,
      adminLogPass: adminLogPass
    },
    success: function(data) {
      console.log(data);
      if (data == 0) {
        $("#statusAdminLogMsg").html(
          '<small class="alert alert-danger"> Invalid ! </small>'
        );
      } else if (data == 1) {
        $("#statusAdminLogMsg").html('<div class="spinner-border text-success" role="status">Loading..</div>');
        setTimeout (() => {
            window.location.href="Admin/controlpanel.php";
    
        },1000);
      }
    }
  });
}
