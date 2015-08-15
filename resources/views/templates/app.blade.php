<html>
<head>
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.min.js"></script>
</head>

<body>
    <h1>Trenutno ste logovani kao {{ \Auth::user()->name }} | Pritisnite <a href="{{ action('Auth\AuthController@getLogout') }}">ovdje</a> da se odjavite.</h1>
    @yield('content')
</body>

<script type="text/javascript">

$(document).ready(function() {

    $.fn.deleteModel = function() {

        var o = $(this[0]);

        if (!confirm('Da li ste sigurni da želite izbrisati ovaj unos?'))
            return;

        o.append(function(){

            return "\n" +
                "<form id='deleteForm' action='" + o.attr('href') + "' method='POST' style='display:none'>\n" +
                "<input type='hidden' name='_method' value='delete'>\n" +
                "<input type='hidden' name='_token' value='" + '{{ csrf_token() }}' + "'>\n" +
                "</form>\n";

        });

        $('#deleteForm', o).submit();

    };

    $('a.delete-request').click(function(event){

        event.preventDefault();

        $(this).deleteModel();

    });

});

</script>
</html>