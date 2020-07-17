const $ = require("jquery");
  const Handlebars = require("handlebars");
// FUNCTION READY AJAX CALL
  $(document).ready(function(){
    $.ajax(
    {
      url:'http://localhost:8888/php-ajax-dischi/server-data.php',
      method:'GET',
      success: function (data){
        showResult(data);
      },
      error: function (request, state, errors) {
        alert('Qualcosa è andato storto');
      }
    });
    $('.selection').change(function(){
      var author = $(this).val();
      $.ajax(
        {
          url:'http://localhost:8888/php-ajax-dischi/server-data.php',
          method:'GET',
          data: {
            author: author
          },
          success: function (data){
            showResult(data);
          },
          error: function (request, state, errors) {
            alert('Qualcosa è andato storto');
          }
        });
    });
  });
// FUNCTION
  function showResult (result) {
  reset();
  var source = $("#cd-template").html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < result.length; i++) {
    if (result.length > 0) {
      var cd = result[i];
      var context = {
        title: cd.title,
        author: cd.author,
        year: cd.year,
        poster: cd.poster
       };
      var html = template(context);
      $('.container-cd').append(html);
    }
    else {
      showResultNo();
    }
  }
  function showResultNo() {
  var source = $("#cd-template").html();
  var template = Handlebars.compile(source);
  var html = template(context);
  $('.container-cd').append(html);
  }
  function reset () {
  $('.container-cd').html('');
  }
}
