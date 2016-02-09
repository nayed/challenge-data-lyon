<html>

  <head>
    <title> autocomplete </title>
  </head>

  <body>
    <form action="" method="get">
      <label for="town">your town: </label>
      <input id="searchTown" type="text" name="town" value="" placeholder="enter your town">
    </form>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.24/jquery.autocomplete.min.js"></script>

    {{-- Ajax test --}}
    <script type="text/javascript" defer>
      $(function() {
        var cache = {};
        $( "#searchTown" ).autocomplete({
          minLength: 1,
          source: function( request, response ) {
            var term = request.term;
            if ( term in cache ) {
              response( cache[ term ] );
              return;
            }

            $.getJSON( "/town", request, function( data, status, xhr ) {
              cache[ term ] = data;
              response( data );
            });
          }
        });
      });
    </script>
  </body>
</html>

