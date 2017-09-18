<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <?= $this->Html->css('vendors/fullCan/fullcalendar.min.css') ?>
    <?= $this->Html->css('vendors/fullCan/fullcalendar.print.min.css', ['media' => 'print']) ?>
    <?= $this->Html->script('vendors/fullCan/lib/moment.min.js') ?>
    <?= $this->Html->script('vendors/fullCan/lib/jquery.min.js') ?>
    <?= $this->Html->script('vendors/fullCan/fullcalendar.min.js') ?>


</head>
<body>
<div id="calendar"></div>

<p>
    <button class="ajax-button"
            data-url="/team103/studios/calendar?ext=json">
        Click Me
    </button>
    <button class="ajax-button2"
            data-url="/team103/studios/calendar?ext=json">
        Click Me 2
    </button>
</p>
<p>
    Result: <span id="target"></span>

</p>
<p>
    <? echo $this->Url->build(["controller" => "studios", "action" => "calendar", "ext" => "json"]); ?>
</p>

<script>
    $(".ajax-button").click(function (e) {
        $.ajax({
            type: 'get',
            url: '/team103/studios/calendar?ext=json',
            beforeSend: function (xhr) {
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            },
            success: function (response) {
                if (response.error) {
                    alert(response.error);
                    console.log(response.error);
                }
                if (response.content) {
                    $('#target').html(response.content);
                    console.log(response);
                }
            },
            error: function (e) {
                alert("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
        console.log('clicked');

    });
    $(".ajax-button2").click(function (e) {
        console.log('clicked2');

    });
</script>
</body>
</html>





