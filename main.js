$( document ).ready(function() {

  $.ajax({
  url: "getPagamenti.php",
  method: "GET",

  success: function (data,stato) {
  console.log(data);

   for (var i = 0; i < data.length; i++) {
      $("ul").append("<li>" + data[i] + "</li>")
   }



  },
  error: function (richiesta,stato,errore) {
  alert("Si è verificato un errore", errore);
  }
  })
})
