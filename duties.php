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
        if(isset($_POST['dep'], $_POST['shift'])){
            require_once __DIR__ . "/vendor/autoload.php";
            $collection = (new MongoDB\Client) -> test -> hospital;
            $selected_dep = $_POST['dep'];
            $selected_shift = $_POST['shift'];

            $cursor = $collection ->find(['shift'=>$selected_shift], ['department'=>$selected_dep]);
            $strForSave .="<table border=1 cellspacing=1><tr><td>Duties on: $selected_shift shift in: $selected_dep department</td></tr>";
            foreach($cursor as $document){
                $strForSave .="<tr><td>";
                $strForSave .="Nurse: ";
                $strForSave .=$document['name'];

                $strForSave .="<br>";
                $strForSave .="Ward #: ";
                $strForSave .=$document['ward'];

                $strForSave .="<br>";
                $strForSave .="Date: ";
                $strForSave .=$document['date'];

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