<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>

    </head>
    
    <body>
        <div class="container">
            <div class="content">

                <div class="title">Challenge Data Lyon</div>
            </div>
        </div>
        <script type="text/javascript">
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: '/town',
            contentType: 'application/json',
            success: function(response) {
                jQuery.each(response, function(index, itemData) {
                    console.log(response.itemData);
                });
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
