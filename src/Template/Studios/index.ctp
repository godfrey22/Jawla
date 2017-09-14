<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Studio[]|\Cake\Collection\CollectionInterface $studios
 */
?>
<?= $this->Html->css('vendors/fullCan/fullcalendar.min.css') ?>
<?= $this->Html->css('vendors/fullCan/fullcalendar.print.min.css', ['media' => 'print']) ?>
<style>
    .fc-title, .fc-time {
        color: white;
        font-weight: bold;
    }

</style>
<?= $this->Html->script('vendors/fullCan/lib/moment.min.js') ?>
<?= $this->Html->script('vendors/fullCan/fullcalendar.min.js') ?>


<script>

    $(document).ready(function () {

        $('#calendar').fullCalendar({
            defaultDate: '2017-09-12',
            disableDragging: true,
            eventLimit: true, // allow "more" link when too many events
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


        });


    });

</script>

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Company Information
                    </div>
                    <div class="card-body row">
                        <div class="card-block col-lg-6 col-md-auto col-sm-auto">
                            <div id='calendar'></div>
                        </div>
                        <div class="card-block col-6 col-md-auto col-sm-auto">
                            <h1>Class List</h1>
                            <table class="table table-bordered table-striped table-sm table-responsive">
                                <thead>
                                <tr>
                                    <th scope="col"><?= $this->Paginator->sort('event_id') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('teacher_id') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('class_type_id') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($studios as $studio): ?>
                                    <tr>
                                        <td><?= $studio->has('event') ? $this->Html->link($studio->event->name, ['controller' => 'Events', 'action' => 'view', $studio->event->id]) : '' ?></td>
                                        <td><?= $studio->has('teacher') ? $this->Html->link($studio->teacher->name, ['controller' => 'Teachers', 'action' => 'view', $studio->teacher->id]) : '' ?></td>
                                        <td><?= $studio->has('class_type') ? $this->Html->link($studio->class_type->name, ['controller' => 'ClassTypes', 'action' => 'view', $studio->class_type->id]) : '' ?></td>
                                        <td><?= h($studio->date->nice()) ?></td>
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['action' => 'view', $studio->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $studio->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $studio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studio->id)]) ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="paginator">
                                <ul class="pagination">
                                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                    <?= $this->Paginator->numbers() ?>
                                    <?= $this->Paginator->next(__('next') . ' >') ?>
                                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                                </ul>
                                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
                            </div>
                        </div>


