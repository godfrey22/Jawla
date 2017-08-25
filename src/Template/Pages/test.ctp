<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<table class="table">
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <tr>
        <th>Phone</th>
        <th>
            <input type="text" value="<?= h($information[0]->value) ?>">
        </th>
        <th><a href="" class="btn btn-primary">Confirm</a></th>
    </tr>
    <tr>
        <th>Company Name</th>
        <th><input type="text" value="<?= h($information[1]->value) ?>"></th>
        <th><a href="" class="btn btn-primary">Confirm</a></th>
    </tr>
    <tr>
        <th>ABN</th>
        <th><input type="text" value="<?= h($information[2]->value) ?>"></th>
        <th><a href="" class="btn btn-primary">Confirm</a></th>
    </tr>
    <tr>
        <th>Address - Road</th>
        <th><input type="text" value="<?= h($information[3]->value) ?>"></th>
        <th><a href="" class="btn btn-primary">Confirm</a></th>
    </tr>
    <tr>
        <th>Address - Suburb</th>
        <th><input type="text" value="<?= h($information[4]->value) ?>"></th>
        <th><a href="" class="btn btn-primary">Confirm</a></th>
    </tr>
    <tr>
        <th>Background Image</th>
        <th><?= h($information[5]->value) ?></th>
        <th><a href="" class="btn btn-primary">Upload</a></th>
    </tr>
    <tr>
        <th>Logo Image</th>
        <th><?= h($information[6]->value) ?></th>
        <th><a href="" class="btn btn-primary">Upload</a></th>
    </tr>


</table>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>