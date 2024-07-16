$(document).ready(function () {
  to_dashboard();

  to_Navigation();
});
function to_dashboard() {
  $.post("pages/home/home_main.php", {}, function (data) {
    $("#contents").html(data);
  });
}
function to_Navigation() {
  $.post("navigation/nav.php", {}, function (data) {
    $("#nav_content").html(data);
  });
}
function to_myauction() {
  $.post("pages/myauction/myauction_main.php", {}, function (data) {
    $("#contents").html(data);
  });
}
function to_mybids() {
  $.post("pages/mybids/mybids_main.php", {}, function (data) {
    $("#contents").html(data);
  });
}
function to_aboutus() {
  $.post("pages/aboutus/aboutus_main.php", {}, function (data) {
    $("#contents").html(data);
  });
}
function to_portfolio() {
  $.post("pages/profile/profile_main.php", {}, function (data) {
    $("#contents").html(data);
  });
}
