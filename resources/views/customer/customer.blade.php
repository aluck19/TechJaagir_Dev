<!DOCTYPE html>
<html>

<head>
    <title>
        AutoComplete
    </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

</head>

<body>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <section class="panel panel-default">
                <header class="panel-heading">
                    <input type="text" name="searchname" class="form-control" id="searchname" placeholder="Search">
                </header>

                <div class="panel-body">
                    <table>
                        <tr>
                            <td>ID</td>
                            <td><input type="text" name="id" id="id" class="form-control" placeholder="ID"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><br/></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name" id="name" class="form-control" placeholder="Name"></td>
                        </tr>
                    </table>
                </div>
            </section>
        </div>
    </div>

</body>
<script type="text/javascript">
    $('#searchname').autocomplete({
        source: 'http://localhost:8000/autocomplete',
        minlength: 1,
        autoFocus: true,
        select:function(e, ui){
            $('#id').val(ui.item.id);
            $('#name').val(ui.item.value);

        }

    });
</script>


</html>
