$location_URL = 'https://test.placetopay.com/soap/pse/?wsdl';
$wsdl = 'https://test.placetopay.com/soap/pse/?wsdl'

$client = new SoapClient ($wsdl, array(

'location' => $location_URL,
'uri' => "";
'trace' => 1,
'login' => $usuario,
'password' => $pass));
