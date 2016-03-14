<!DOCTYPE html>
    <html>

        <head>
            <title>
                Search
            </title>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        </head>

        <body>
            <div class="col-lg-4 col-lg-offset-4">
                <div class="form-group">
                        <input type="text" id="search-input" class="form-control" placeholder="Search">
                </div>
                <div class="col-lg-12" id="search-results">


                </div>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
            {{--<script src="{{ asset('js/search.js') }}"></script>--}}

        <script>
            var timer;

            function up() {

                timer = setTimeout(function() {
                    var keywords = $("#search-input").val();

                    if(keywords.length>0){
                        $.post("http://localhost:8000/test/executeSearch", {keywords: keywords}, function(markup){
                            $('#search-results').html(markup);
                        });
                    }

                },500 );
            }

            function  down(){
                clearTimeout(timer);
            }
        </script>

        </body>



</html>