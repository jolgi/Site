$hov_links = $(".link");

$(function () {
  console.log("ready!");

  $hov_links.hover(
    function () {
      $(this).children("span").addClass("hover");
    },
    function () {
      $(this).children("span").removeClass("hover");
    }
  );

  $("#page_loader").load("pages/om.php");
});
