<?php
    ini_set("soap.wsdl_cache_enabled", "0");
    $client = new SoapClient("http://localhost/test/soap2/esquema.wsdl",array("trace"=>1));    
    $params = array(
                  "a"=>"3",
                  "b"=>"1",);
    
    //$result=$client->BillingNotification($params['phonenumber'],$params['shortcodenumber'],$params['price'],$params['transactionid']);
    $result=$client->SumaSimple($params);

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