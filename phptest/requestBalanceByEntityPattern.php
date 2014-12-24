<?php
    ini_set("soap.wsdl_cache_enabled", "0");
    $client = new SoapClient("http://54.148.81.57:8000/wsdl?wsdl",array("trace"=>1));
    $transactionPattern = "000000000000111111";
    $params = array(
                  "transactionPattern"=>"2");

    //$result=$client->BillingNotification($params['phonenumber'],$params['shortcodenumber'],$params['price'],$params['transactionid']);
    $result=$client->requestBalanceByEntityPattern($params);

?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div>
            <strong>Envio SOAP :</strong>
            <p>
               <?php echo htmlentities($client->__getLastRequest()) ?>
            </p>
        </div>
        <div>
            <strong>Respuesta SOAP :</strong>
            <p>
               <?php echo htmlentities($client->__getLastResponse()) ?>
            </p>
        </div>
    </body>
</html>
