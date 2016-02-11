<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link hret="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">

    </head>
    
    <body>
        <div class="container">
            <div class="content">

                <div class="title">Challenge Data Lyon</div>
            </div>
        </div>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="{{ asset('js/frontend.js') }}"></script>
        <script src="{{ asset('js/map.js') }}"></script>
        <script type="text/javascript">
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: '/town',
            contentType: 'application/json',
            success: function(response) {
                console.log('YES')
                console.log(response)
            }.bind(this),
            error: function(xhr, status, err) {
                console.log('NOPE')
                console.error(status, err)
            }.bind(this)
        })
        </script>
    </body>
</html>
