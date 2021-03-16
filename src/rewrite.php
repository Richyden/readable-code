<?php 

function orderPizza($pizzaType, $clientName) {

    echo 'Creating new order... <br>';
    $price = GetBill($pizzaType);
    
    $address = 'unknown';
    if($clientName == 'koen') {
        $address = 'a peniche in Liège';

    }
    elseif ($clientName == 'nico') {
        $address = 'somewhere in Belgium';
    }
    elseif ($clientName == 'students') {
        $address = 'BeCode office';
    }
    
    echo " A " . $pizzaType . "pizza should be sent to " . $clientName . ". <br> The address: {$address}. <br> The bill is € " .$price. ".<br>";
    echo "Order finished.<br><br>";
}

function GetBill($type)
{
    $bill = 'unknown';

    if ($type == 'marguerita') {
        $bill = 5;
    }
    else {
        if ($type == 'golden') {
            $bill = 100;
        }

        if ($type == 'calzone') {
            $bill = 10;
        }

        if ($type == 'hawai') {
            throw new Exception('Computer says no');
        }
    }

    return $bill;
}

function pizzaChoice()
{
    $test= 0;
    orderPizza('calzone', 'nico');
    orderPizza('marguerita', 'nick');
    orderPizza('golden', 'students');
}

pizzaChoice();

?>