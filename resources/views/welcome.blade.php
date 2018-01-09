<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="css/app.css">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <body>
                <div class="col-md-4">
                    <?php foreach ($regiones as $region): ?>
                    <table class="table table-hover">
                        <tr>[
                            <td>'code'        => '<?php echo $region->codigo ?>',</td>
                            <td>'name'          => '<?php echo $region->nombre ?>',</td>
                            <td>'lat' => '<?php echo $region->lat ?>',</td>
                            <td>'lng' => '<?php echo $region->lng ?>',</td>
                            <td>'provinceCode' => '<?php echo $region->codigo_padre ?>'</td>
                        </tr>],
                    </table><hr>
                    <?php endforeach ?>
                </div>   

    </body>
</html>
