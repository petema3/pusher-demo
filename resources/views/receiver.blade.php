<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #broadcasts {
                background: #c0ffee;
                border: 2px solid mistyrose;
                list-style: none inside none;
                padding: 0;
            }

            #broadcasts:empty::before {
                content: 'No broadcasts received';
                display: block;
                margin: 30px 0;
            }

            #broadcasts li {
                font-weight: 600;
                padding: 10px 20px;
                text-align: left;
            }

            #broadcasts li + li {
                border-top: 1px solid mistyrose;
            }
        </style>
        <script>
            window.Laravel = <?php echo json_encode([
                'csrf_token' => csrf_token(),
                'pusher' => [
                    'key' => config('broadcasting.connections.pusher.key'),
                    'cluster' => config('broadcasting.connections.pusher.options.cluster'),
                ],
            ]); ?>
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Broadcasts:
                </div>
                <ul id="broadcasts"></ul>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
