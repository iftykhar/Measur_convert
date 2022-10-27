<?php




function convert_to_meters($value, $from_unit){
    switch($from_unit){
        case 'inches':
            return $value * 0.0254;
            break;
        case 'feet' :
            return $value * 0.3048;
            break;
        case 'yeards':
            return $value * 0.9144;
            break;
        case 'miles':
            return $value * 1609.344;
            break;
        case 'milimeters':
            return $value * 0.01;
            break;
        case 'centimeters':
            return $value * 0.001;
            break;
        case 'meters':
            return $value;
            break;
        case 'kilometers':
            return $value * 1000;
            break;
        default:
            return "unsupported unit.";
    }
   
}
function convert_from_meters($value, $to_unit){
    switch($to_unit){
        case 'inches':
            return $value / 0.0254;
            break;
        case 'feet' :
            return $value / 0.3048;
            break;
        case 'yeards':
            return $value / 0.9144;
            break;
        case 'miles':
            return $value / 1609.344;
            break;
        case 'milimeters':
            return $value / 0.01;
            break;
        case 'centimeters':
            return $value / 0.001;
            break;
        case 'meters':
            return $value;
            break;
        case 'kilometers':
            return $value / 1000;
            break;
        default:
            return "unsupported unit.";
    }
   
    
}

function convert_length($value, $from_unit, $to_unit){
    $meter_value = convert_to_meters($value,$from_unit);
    $new_value = convert_from_meters($meter_value ,$to_unit);
    return $new_value;
}
$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if ($_POST['submit']) {
    $from_value = $_POST['from_value'];
    $from_unit = $_POST['from_unit'];
    $to_unit = $_POST['to_unit'];

    $to_value = convert_length($from_value, $from_unit, $to_unit);
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Length </title>
</head>
<body>
    <div id="main-content">
        <h1>Convert Length</h1>

        <form action="" method="POST">
            <div class="entry">
                <label for="">From:</label>&nbsp;
                <input type="text" name="from_value" value="<?php echo $from_value;?>"/>&nbsp;
                <select name="from_unit" id="">
                    <option value="inches"<?php if($from_unit == 'inches'){ echo " selected";} ?>>inches</option>
                    <option value="feet"<?php if($from_unit == 'feet'){ echo " selected";} ?>>feet</option>
                    <option value="yeards" <?php if($from_unit == 'yeards'){ echo " selected";} ?>>yeards</option>
                    <option value="miles"<?php if($from_unit == 'miles'){ echo " selected";} ?>>miles</option>
                    <option value="milimeters"<?php if($from_unit == 'milimeters'){ echo " selected";} ?>>milimeters</option>
                    <option value="centimeters"<?php if($from_unit == 'centimeters'){ echo " selected";} ?>>centimeters</option>
                    <option value="meters"<?php if($from_unit == 'meters'){ echo " selected";} ?>>meters</option>
                    <option value="kilometers"<?php if($from_unit == 'kilometers'){ echo " selected";} ?>>kilometers</option>
                </select>
            </div>
            <div class="entry">
                <label for="">To:</label>
                <input type="text" name="to_value" value="<?php echo $to_value;?>" />&nbsp;
                <select name="to_unit" id="">
                <option value="inches"<?php if($to_unit == 'inches'){ echo " selected";} ?>>inches</option>
                    <option value="feet"<?php if($to_unit == 'feet'){ echo " selected";} ?>>feet</option>
                    <option value="yeards" <?php if($to_unit == 'yeards'){ echo " selected";} ?>>yeards</option>
                    <option value="miles"<?php if($to_unit == 'miles'){ echo " selected";} ?>>miles</option>
                    <option value="milimeters"<?php if($to_unit == 'milimeters'){ echo " selected";} ?>>milimeters</option>
                    <option value="centimeters"<?php if($to_unit == 'centimeters'){ echo " selected";} ?>>centimeters</option>
                    <option value="meters"<?php if($to_unit == 'meters'){ echo " selected";} ?>>meters</option>
                    <option value="kilometers"<?php if($to_unit == 'kilometers'){ echo " selected";} ?>>kilometers</option>
                </select>
            </div>
            
            <input type="submit" name="submit" value="submit"/>
        </form>
        <br>
        <a class="return" href="index.php">Return to Menu</a>
    </div>
</body>
</html>