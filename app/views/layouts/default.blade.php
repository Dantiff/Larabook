<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larabook</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

@include('layouts.partials.nav')

<div class="container">
    @include('flash::message')

    @yield('content')
</div>

<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $('#flash-overlay-modal').modal();

    $(document).ready(function() {
        $(".dropdown-toggle").dropdown();
    });

    $('.comments__create-form').on('keydown', function (e) {

        if (e.keyCode == 13){

            e.preventDefault();
            $(this).submit();
        }
        
    });
</script>

</body>
</html>
