$(document).ready(function() {


  $.ajax({
    url: 'restaurants.txt',
    dataType: 'json',
    async: 'false',
    cache: 'false',
    success: function(data) {
      console.log(data);
    }
  });

});
