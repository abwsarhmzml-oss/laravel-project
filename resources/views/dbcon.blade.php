<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lrarvel dbcon   </title>
</head>
<body>
<div>
    <?php
    if(DB::connection()->getpdo()){
        echo "we are conted with";

    }


    ?>
</div>
</body>
</html>
