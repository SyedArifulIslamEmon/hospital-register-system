<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            @show
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        @section('css')
        <link rel="stylesheet" type="text/css" href="/dist/css/common.css" />
        <link rel="stylesheet" type="text/css" href="/dist/css/base.css" />
        @show
        
        <script src="/dis/js/base.js" type="text/javascript"></script>
    </head>
    
    <body>
        <div class="bd-wrap">
            <h2 class="title">
                @section('body-title')
                @show
            </h2>
            
            @section('body-main')
            @show
        </div>

        @section('body-bottom')
        @show

        @section('js')
        @show
    </body>
</html>