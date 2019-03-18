var temp = '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (true ? "p-r-35" : "") + '" role="alert">' +
'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
'<span data-notify="icon"></span> ' +
'<span data-notify="title">{1}</span> ' +
'<span data-notify="message">{2}</span>' +
'<div class="progress" data-notify="progressbar">' +
'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
'</div>' +
'<a href="{3}" target="{4}" data-notify="url"></a>' +
'</div>';
function pass_but() {
  var x = document.getElementById('curr_password');
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function newpass_but() {
  var x = document.getElementById('new_password');
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function repass_but() {
  var x = document.getElementById('renew_password');
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
$(document).ready(function(){
  $("#changepass").click(function(){
    var curr_password = $("#curr_password").val();
    var new_password = $("#new_password").val();
    var renew_password = $("#renew_password").val();
    var user_id = $("#user_id").val();
    var user = $("#username").val();
    var changepass = "true";
    var form_data = {
      curr_password : curr_password,
      new_password : new_password,
      renew_password : renew_password,
      user_id : user_id,
      user : user,
      changepass : changepass
    }
    $.ajax({
      url : "passer.php",
      type : "POST",
      data : form_data,
      cache : false,
      success : function (res) {
      // alert(res);
      if (res == "updated") {
        $.notify({
          message: "Password Changed!"
        },
        {
          type: "bg-green",
          allow_dismiss: true,
          newest_on_top: true,
          timer: 500,
          animate: {
            enter: "animated zoomInRight",
            exit: "animated zoomOutRight"
          },
          template: temp
        });
        $(".changepass").val("");
      }
      if (res == "blank") {
        $.notify({
          message: "Input all fields!"
        },
        {
          type: "bg-red",
          allow_dismiss: true,
          newest_on_top: true,
          timer: 500,
          animate: {
            enter: "animated zoomInRight",
            exit: "animated zoomOutRight"
          },
          template: temp
        });
      }
      if (res == "min_new_pass_len") {
        $.notify({
          message: "Password Changed!"
        },
        {
          type: "bg-red",
          allow_dismiss: true,
          newest_on_top: true,
          timer: 500,
          animate: {
            enter: "animated zoomInRight",
            exit: "animated zoomOutRight"
          },
          template: temp
        });
      }
      if (res == "max_new_pass_len") {
        $.notify({
          message: "New Password must not be greater than 15 characters!"
        },
        {
          type: "bg-red",
          allow_dismiss: true,
          newest_on_top: true,
          timer: 500,
          animate: {
            enter: "animated zoomInRight",
            exit: "animated zoomOutRight"
          },
          template: temp
        });
      }
      if (res == "no_match") {
        $.notify({
          message: "New Password did not match!"
        },
        {
          type: "bg-red",
          allow_dismiss: true,
          newest_on_top: true,
          timer: 500,
          animate: {
            enter: "animated zoomInRight",
            exit: "animated zoomOutRight"
          },
          template: temp
        });
      }
      if (res == "new_pass") {
        $.notify({
          message: "No special characters allowed in New Password!"
        },
        {
          type: "bg-red",
          allow_dismiss: true,
          newest_on_top: true,
          timer: 500,
          animate: {
            enter: "animated zoomInRight",
            exit: "animated zoomOutRight"
          },
          template: temp
        });
      }
      if (res == "retype") {
        $.notify({
          message: "No special characters allowed in Retype Password!"
        },
        {
          type: "bg-red",
          allow_dismiss: true,
          newest_on_top: true,
          timer: 500,
          animate: {
            enter: "animated zoomInRight",
            exit: "animated zoomOutRight"
          },
          template: temp
        });
      }
      if (res == "invalid") {
        $.notify({
          message: "Invalid current password!"
        },
        {
          type: "bg-red",
          allow_dismiss: true,
          newest_on_top: true,
          timer: 500,
          animate: {
            enter: "animated zoomInRight",
            exit: "animated zoomOutRight"
          },
          template: temp
        });
      }
      if (res == "error") {
        $.notify({
          message: "Error occured!"
        },
        {
          type: "bg-red",
          allow_dismiss: true,
          newest_on_top: true,
          timer: 500,
          animate: {
            enter: "animated zoomInRight",
            exit: "animated zoomOutRight"
          },
          template: temp
        });
      }
    }
  });
});
});