<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['nurses'])){
            require_once __DIR__ . "/vendor/autoload.php";           
            $collection = (new MongoDB\Client)->test->hospital;
            $selected_nurses = $_POST['nurses'];

            $cursor = $collection->find(['name'=>$selected_nurses],['projection'=>['ward'=>1, '_id'=>0]]);
            $strForSave .="<table border=1 cellspacing=1><tr><td>Wards for: $selected_nurses</td></tr>";
            foreach($cursor as $document){
                $strForSave .="<tr><td>";
                $strForSave .=$document['ward'];
                $strForSave .="</td></tr>";
            }

            $strForSave .="</table>";
            echo($strForSave);

            $save_to_localStorage = "<script>localStorage.setItem('lastData', '$strForSave');</script>";
            echo($save_to_localStorage);
        }
    ?>
</body>
</html>