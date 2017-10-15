<?= $this->Html->css('vendors/fullCan/fullcalendar.min.css'); ?>
<?= $this->Html->css('vendors/fullCan/fullcalendar.print.min.css', ['media' => 'print']); ?>
<style>
    .fc-title, .fc-time {
        color: white;
        font-weight: bold;
    }
</style>
<?= $this->Html->script('vendors/fullCan/lib/moment.min.js'); ?>
<?= $this->Html->script('vendors/fullCan/fullcalendar.min.js'); ?>
<script>
    $(document).ready(function () {
        $('#calendar').fullCalendar({
            eventLimit: true, // allow "more" link when too many events
            events:
                {
                    url: '<?php echo $this->Url->build(array("controller" => "studios", "action" => "calendar")) ?>',
                    type: 'get'
                }
        });

    });
</script>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Classes Information
                    </div>
                    <div class="card-body row">
                        <div class="card-block col-lg-6 col-md-auto col-sm-auto">
                            <div id='calendar'></div>
                        </div>
                        <div class="card-block col-lg-6 col-md-auto col-sm-auto">
                            <h2><?= $studio->event->name ?></h2>
                            <div>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th width="40%">Class Name</th>
                                        <td><?= $studio->event->name ?></td>
                                    </tr>
                                    <tr>
                                        <th>Teacher Name</th>
                                        <td><?= $studio->teacher->name ?></td>
                                    </tr>
                                    <tr>
                                        <th>Class Type</th>
                                        <td><?= $studio->class_type->name ?></td>
                                    </tr>
                                    <tr>
                                        <th>Start Date</th>
                                        <td><?= $studio->event->start_date->nice() ?></td>
                                    </tr>
                                    <tr>
                                        <th>End Date</th>
                                        <td><?= $studio->event->end_date->nice() ?></td>
                                    </tr>
                                    <tr>
                                        <th>Start Time</th>
                                        <td><?= $studio->event->start_time->format('h:i A') ?></td>
                                    </tr>
                                    <tr>
                                        <th>End Time</th>
                                        <td><?= $studio->event->end_time->format('h:i A') ?></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>