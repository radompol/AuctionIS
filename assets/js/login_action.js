$(document).ready(function () {
  $("#login-form").submit(function (e) {
    e.preventDefault();
    btnDisable("#loginbtnID", true);
    loginAction();
  });
});

function loginAction() {
  $.post(
    "./assets/login_action.php",
    {
      email: $("#username_text").val(),
      pass: $("#pass_text").val(),
    },
    function (data) {
      console.log(data);
      if (data === "success") {
        alert("Login Successfully");
        window.location.href = "index.php";
      } else {
        alert("Email and Password does not match.");
        btnDisable("#loginbtnID", false);
      }
    }
  );
}
function btnDisable(element, type) {
  $(element).prop("disabled", type);
}
