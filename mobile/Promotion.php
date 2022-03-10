<?php
//getting the dboperation class
require_once 'PromotionOperation.php';

//function validating all the paramters are available
//we will pass the required parameters to this function
function isTheseParametersAvailable($params){
    //assuming all parameters are available
    $available = true;
    $missingparams = "";

    foreach($params as $param){
        if(!isset($_GET[$param]) || strlen($_GET[$param])<=0){
            $available = false;
            $missingparams = $missingparams . ", " . $param;
        }
    }

    //if parameters are missing
    if(!$available){
        $response = array();
        $response['error'] = true;
        $response['message'] = 'Parameters ' . substr($missingparams, 1, strlen($missingparams)) . ' missing';

        //displaying error
        echo json_encode($response);

        //stopping further execution
        die();
    }
}

//an array to display response
$response = array();

//if it is an api call
//that means a get parameter named api call is set in the URL
//and with this parameter we are concluding that it is an api call
if(isset($_GET['service'])) {

    switch ($_GET['service']) {

        //the CREATE operation
        //if the api call value is 'createhero'
        //we will create a record in the database
        case 'create':
            //first check the parameters required for this request are available or not
//isTheseParametersAvailable(array('nom', 'prenom', 'age' , 'tel' , 'mail' , 'password' , 'role'  , 'img' ));

            //creating a new dboperation object
            $db = new PromotionOperation();

            $result = $db->create(

                $_GET['Type'],
                $_GET['title'],
                $_GET['description'],
                $_GET['scoreMin']
            );


            //if the record is created adding success to response
            if ($result) {
                //record is created means there is no error
                $response['error'] = false;

                //in message we have a success message
                $response['message'] = 'user addedd successfully';
            } else {

                //if record is not added that means there is an error
                $response['error'] = true;

                //and we have the error message
                $response['message'] = 'Some error occurred please try again';
            }

            break;

        case 'getall':
            $db = new PromotionOperation();
            $response['error'] = false;
            $response['message'] = 'Request successfully completed';
            $response['data'] = $db->getAll();
            break;
    }
}

?>

