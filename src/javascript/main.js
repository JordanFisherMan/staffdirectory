$(function(){
  $('#js-search').on("change paste keyup", function(){
    $.ajax({
              type: "GET",
              url: 'livesearch.php',
              data: {search: $(this).val()},
              success: function(response)
              {
                  console.log(response);
             }

    });
  });



});
