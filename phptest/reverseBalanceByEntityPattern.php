<?php
    ini_set("soap.wsdl_cache_enabled", "0");
    $client = new SoapClient("http://localhost:8000/wsdl?wsdl",array("trace"=>1));
    $params = array(
                  "transactionPattern"=>"SENT111111");
    $result=$client->reverseBalanceByEntityPattern($params);

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
