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

    <script>

        $(document).ready(function() {
            $('#calendar').fullCalendar({
                defaultDate: '2017-09-12',
                editable: true,
                eventLimit: true,
                events: [
                    {
                        title: 'All Day Event',
                        start: '2017-09-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2017-09-07',
                        end: '2017-09-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2017-09-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2017-09-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2017-09-11',
                        end: '2017-09-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2017-09-12T10:30:00',
                        end: '2017-09-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2017-09-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2017-09-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2017-09-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2017-09-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2017-09-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2017-09-28'
                    }
                ]
            });
//        $('#calendar').fullCalendar({
//            defaultDate: '2017-09-12',
//            editable: true,
//            eventLimit: true, // allow "more" link when too many events
//            events: [
//                {
//                    title: 'All Day Event',
//                    start: '2017-09-01'
//                },
//                {
//                    title: 'Long Event',
//                    start: '2017-09-07',
//                    end: '2017-09-10'
//                },
//                {
//                    id: 999,
//                    title: 'Repeating Event',
//                    start: '2017-09-09T16:00:00'
//                },
//                {
//                    id: 999,
//                    title: 'Repeating Event',
//                    start: '2017-09-16T16:00:00'
//                },
//                {
//                    title: 'Conference',
//                    start: '2017-09-11',
//                    end: '2017-09-13'
//                },
//                {
//                    title: 'Meeting',
//                    start: '2017-09-12T10:30:00',
//                    end: '2017-09-12T12:30:00'
//                },
//                {
//                    title: 'Lunch',
//                    start: '2017-09-12T12:00:00'
//                },
//                {
//                    title: 'Meeting',
//                    start: '2017-09-12T14:30:00'
//                },
//                {
//                    title: 'Happy Hour',
//                    start: '2017-09-12T17:30:00'
//                },
//                {
//                    title: 'Dinner',
//                    start: '2017-09-12T20:00:00'
//                },
//                {
//                    title: 'Birthday Party',
//                    start: '2017-09-13T07:00:00'
//                },
//                {
//                    title: 'Click for Google',
//                    url: 'http://google.com/',
//                    start: '2017-09-28'
//                }
//            ]
//        });

        });

    </script>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>





</head>
<body>



    <div id="calendar"></div>

</body>
</html>





