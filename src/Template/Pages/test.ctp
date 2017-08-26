<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
      integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<table class="table">
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <tr>
        <th>Phone</th>
        <th>
            <?= h($information[0]->value) ?>
        </th>
        <th>
            <?=
            $this->Html->link(
                'Edit',
                ['controller' => 'Information', 'action' => 'edit/1', '_full' => true]
            ); ?>
        </th>
    </tr>
    <tr>
        <th>Company Name</th>
        <th><?= h($information[1]->value) ?></th>
        <th>            <?=
            $this->Html->link(
                'Edit',
                ['controller' => 'Information', 'action' => 'edit/2', '_full' => true]
            ); ?></th>
    </tr>
    <tr>
        <th>ABN</th>
        <th><?= h($information[2]->value) ?></th>
        <th>            <?=
            $this->Html->link(
                'Edit',
                ['controller' => 'Information', 'action' => 'edit/3', '_full' => true]
            ); ?></th>
    </tr>
    <tr>
        <th>Address - Road</th>
        <th><?= h($information[3]->value) ?></th>
        <th>            <?=
            $this->Html->link(
                'Edit',
                ['controller' => 'Information', 'action' => 'edit/5', '_full' => true]
            ); ?></th>
    </tr>
    <tr>
        <th>Address - Suburb</th>
        <th><?= h($information[4]->value) ?></th>
        <th>            <?=
            $this->Html->link(
                'Edit',
                ['controller' => 'Information', 'action' => 'edit/6', '_full' => true]
            ); ?></th>
    </tr>
    <tr>
        <th>Background Image</th>
        <th><?= h($information[5]->value) ?></th>
        <th>            <?=
            $this->Html->link(
                'Edit',
                ['controller' => 'Information', 'action' => 'edit/7', '_full' => true]
            ); ?></th>
    </tr>
    <tr>
        <th>Logo Image</th>
        <th><?= h($information[6]->value) ?></th>
        <th>            <?=
            $this->Html->link(
                'Edit',
                ['controller' => 'Information', 'action' => 'edit/8', '_full' => true]
            ); ?></th>
    </tr>


</table>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
