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
                    url: '<?php echo $this->Url->build(array("controller" => "users", "action" => "attendancecalendar")) ?>',
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

                        <?php if (count($studio)!= 0) { ?>
                            <div class="card-block col-lg-6 col-md-auto col-sm-auto">
                                <h2><?php echo $studio[0]->studio->event->name . " on " . $studio[0]->studio->date->nice() ?></h2>
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th width="40%">Class Name</th>
                                            <td><?= $studio[0]->studio->event->name ?></td>
                                        </tr>
                                        <tr>
                                            <th>Teacher Name</th>
                                            <td><?= $studio[0]->studio->teacher->name ?></td>
                                        </tr>
                                        <tr>
                                            <th>Participants</th>
                                            <td>There are <?= count($studio)?> students enrolled: </td>
                                        </tr>
                                        <?php foreach ($studio as $item) { ?>
                                            <tr>
                                                <th></th>
                                                <td><?= $item->participant->first_name." ".$item->participant->last_name ?></td>
                                            </tr>
                                        <?php } ?>

                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        <?php }else{?>
                        <div class="card-block col-lg-6 col-md-auto col-sm-auto">
                            <h2>No one has enrolled in this class</h2>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>