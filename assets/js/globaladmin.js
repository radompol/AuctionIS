$(document).ready(function () {
  // to_dashboard();
  to_userVerification();
  to_Navigation();
});
function to_dashboard() {
  $.post("admin_pages/dashboard/dashboard_main.php", {}, function (data) {
    $("#contents").html(data);
  });
}
function to_itemVerification() {
  $.post(
    "admin_pages/itemverification/itemverification_main.php",
    {},
    function (data) {
      $("#contents").html(data);
    }
  );
}
function to_transactionHistory() {
  $.post(
    "admin_pages/transactionhistory/transactionhistory_main.php",
    {},
    function (data) {
      $("#contents").html(data);
    }
  );
}
function to_userVerification() {
  $.post(
    "admin_pages/userverification/userverification_main.php",
    {},
    function (data) {
      $("#contents").html(data);
    }
  );
}
function to_Navigation() {
  $.post("navigation/nav.php", {}, function (data) {
    $("#nav_content").html(data);
  });
}
function to_reports() {
  $.post("admin_pages/reports/reports_main.php", {}, function (data) {
    $("#contents").html(data);
  });
}

function to_pending() {
  $.post("admin_pages/pending/pending_main.php", {}, function (data) {
    $("#contents").html(data);
  });
}
