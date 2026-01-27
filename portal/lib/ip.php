<?php

// function getLocation($ip)
//     {
//         $ch = curl_init('http://ipwhois.app/json/' . $ip);
//         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//         $json = curl_exec($ch);
//         curl_close($ch);
//         // Decode JSON response
//         $ipWhoIsResponse = json_decode($json, true);
//         // Country code output, field "country_code"
//         return $ipWhoIsResponse;
//     }
require_once 'request.php';

$requestModel = new Request();
$ip = $requestModel->getIpAddress();
$isValidIpAddress = $requestModel->isValidIpAddress($ip);
$geoLocationData = $requestModel->getLocation($ip);
//$geoLocationData['country'];
function getlocationX(){
    $requestModel = new Request();
  $ipx = $requestModel->getIpAddress();
$isValidIpAddress = $requestModel->isValidIpAddress($ipx);
$geoLocationDatax = $requestModel->getLocation($ipx);
 
 return $geoLocationDatax['country'];  
    
}

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function getCountrySess(){
        // if(!empty(session_start())){
        //     session_start();
        // }else{

        //     echo '';
        // }

    //   3111b3fd18c7a0859ad9b686ac6e8c1a 
//b88368f3f6563a217a2d03b46e92201e
// b7a9c8e708f655760465f1711ebebe95
//7fba5a304c6c0cc5298d1f2713b508b6
// b7a9c8e708f655760465f1711ebebe95
// baa1497ff519803e9debddbcab97f3d7
//7320fa538cb1938a61bee7284c7f97de
//3e15bd4d2befd5ea2a4d664cec2c72ca
// if($_SESSION["country_name"]==''){
//  $PublicIP = get_client_ip();
//   $json  = file_get_contents('https://api.snoopi.io/'.$PublicIP.'?apikey=3e15bd4d2befd5ea2a4d664cec2c72ca');
//   $json  =  json_decode($json ,true);
  
  $country_name = 'Nigeria'; //$json['CountryName'];
//xyUlO5DIh3w64Uoo89BdEbdMafJwe4EU   IgaCoCgdb7cyP4xYvLhcvyhXru7nPxQy
        // $ch = curl_init('https://api.ip2loc.com/xyUlO5DIh3w64Uoo89BdEbdMafJwe4EU/'.$PublicIP);  
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $json = curl_exec($ch);
        // curl_close($ch);
        // // Decode JSON response
        // $data = json_decode($json, true);
        // // Country code output, field "country_code"
        // $country_name = $data['location']['country']['name'];
      //$country_name;
//       $_SESSION["country_name"] = $country_name;
//   return $_SESSION["country_name"];    
// }else{
//     return $_SESSION["country_name"]; 
// }
     return 'Nigeria';
    }
function getCountry(){
 return getCountrySess();     
}
function getlocation()
{

if(getCountry()=='Nigeria'){
    return 'Nigeria';
}elseif(getCountry()=='Ghana'){

return 'Ghana';
}elseif(getCountry()=='Kenya'){

    return 'Kenya';
    }elseif(getCountry()=='South Africa'){

        return 'South Africa';
    }elseif(getCountry()=='Morocco'){

        return 'Morocco';
    }
else{

    return ''; 
}

}



function getlocationXX(){
$ip  = get_client_ip();
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
if($details->country=='NG'){
    return 'Nigeria';
}else{

return '';
}
}
function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}

function numFormat($amount){
    
    if($amount > 999) {
    //Adds commas in thousands and drops anything after the decimal point
   $amount = number_format($amount);
    }
    
    return $amount;
}



function detectCurrency(){
 if(getlocation()=='Nigeria'){
     
     echo "₦"; 
  }elseif(getCountry()=='Ghana') {
    echo "₵";
  }elseif(getCountry()=='Kenya') {
    echo "KSh";
  }elseif(getCountry()=='South Africa') {
    echo "R";
  }elseif(getCountry()=='Morocco') {
    echo "DH";
  }elseif(getCountry()=='Cameroon' || getCountry()=='Central African Republic' || getCountry()=='Chad' || getCountry()=='DR Congo' 
  || getCountry()=='Equatorial Guinea' || getCountry()=='Gabon' || getCountry()=='Senegal' || getCountry()=='Mali' 
  || getCountry()=='Niger' || getCountry()=='Ivory Coast' || getCountry()=='Benin' || getCountry()=='Burkina Faso' || getCountry()=='Guinea-Bissau') { 
    echo "F.CFA";
  }elseif(getCountry()=='Egypt') {
    echo "E£";
  }elseif(getCountry()=='Guinea') {
    echo "FG";
  }elseif(getCountry()=='Malawi') {
    echo "MK";
  }elseif(getCountry()=='Rwanda') {
    echo "R₣";
  }elseif(getCountry()=='Sierra Leone') {
    echo "Le";
  }elseif(getCountry()=='São Tomé and Príncipe') {
    echo "Db";
  }elseif(getCountry()=='Tanzania') {
    echo "Tsh";
  }elseif(getCountry()=='Uganda') {
    echo "Ush";
  }elseif(getCountry()=='Zambia') {
    echo "K";
  }
  
  else {
      
   echo "$";   
  }

}

function detectCurrencyAmount($amount){
  if(getlocation()=='Nigeria'){
     
  
   echo numFormat($amount); 
  }elseif(getCountry()=='Ghana') {
    $amount = $amount /40.75;      
   $amount = ceil($amount);
   echo numFormat($amount);
  }elseif(getCountry()=='Kenya') {
    $amount = $amount /3.43;      
   $amount = ceil($amount);
   echo numFormat($amount);
  }elseif(getCountry()=='South Africa') {
    $amount = $amount /25.55;      
   $amount = ceil($amount);
   echo numFormat($amount);
  }elseif(getCountry()=='Morocco') {
    $amount = $amount /45.53;      
   $amount = ceil($amount);
   echo numFormat($amount);
  }elseif(getCountry()=='Cameroon' || getCountry()=='Central African Republic' || getCountry()=='Chad' || getCountry()=='DR Congo' 
  || getCountry()=='Equatorial Guinea' || getCountry()=='Gabon' || getCountry()=='Senegal' || getCountry()=='Mali' 
  || getCountry()=='Niger' || getCountry()=='Ivory Coast' || getCountry()=='Benin' || getCountry()=='Burkina Faso' || getCountry()=='Guinea-Bissau') {  
    $amount = $amount /1.3;      
    $amount = ceil($amount);
    echo numFormat($amount);
   }elseif(getCountry()=='Egypt') {
    $amount = $amount /14.91;      
   $amount = ceil($amount);
   echo numFormat($amount);
  }elseif(getCountry()=='Guinea') {
    $amount = $amount /0.05;      
   $amount = ceil($amount);
   echo numFormat($amount);
  }elseif(getCountry()=='Malawi') {
    $amount = $amount /0.45;      
   $amount = ceil($amount);
   echo numFormat($amount);
  }elseif(getCountry()=='Rwanda') {
    $amount = $amount /0.42;      
   $amount = ceil($amount);
   echo numFormat($amount);
  }elseif(getCountry()=='Sierra Leone') {
    $amount = $amount /0.03;      
   $amount = ceil($amount);
   echo numFormat($amount);
  }elseif(getCountry()=='São Tomé and Príncipe') {
    $amount = $amount /0.02;      
   $amount = ceil($amount);
   echo numFormat($amount);
  }elseif(getCountry()=='Tanzania') {
    $amount = $amount /0.2;      
   $amount = ceil($amount);
   echo numFormat($amount);
  }elseif(getCountry()=='Uganda') {
    $amount = $amount /0.12;      
   $amount = ceil($amount);
   echo numFormat($amount);
  }elseif(getCountry()=='Zambia') {
    $amount = $amount /0.04;      
   $amount = ceil($amount);
   echo numFormat($amount);
  }
  else {
      
    $amount = $amount / 460;      
   $amount = ceil($amount);
   echo numFormat($amount);  
  }

}

function detectCurrencyAmountx($amount){
  if(getlocation()=='Nigeria'){
     
  
  return numFormat($amount); 
  }elseif(getlocation()=='Ghana') { 
    $amount = $amount /36.95;      
   $amount = ceil($amount);
   return numFormat($amount);
  } 
  
  else {
      
    $amount = $amount / 460;      
   $amount = ceil($amount);
   return numFormat($amount);  
  }

}

function test(){
    echo 4234;
}
?>