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
                    url: '<?php echo $this->Url->build(array("controller" => "users", "action" => "classcalendar")) ?>',
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
                    </div>
                </div>
            </div>
        </div>
    </div>