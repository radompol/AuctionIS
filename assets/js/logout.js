function logout() {
  $.post("./assets/logout_action.php", {}, function (data) {
    window.location.href = "login.php";
  });
}
