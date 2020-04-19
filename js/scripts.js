console.log('Running');

//FEATURED HOVER
$(document).ready(function(){
    $(".linkfeat").hover(
      function () {
          $(".textfeat").show(500);
      },
      function () {
          $(".textfeat").hide(500);
      }
  );
});