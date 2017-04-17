<?php





for ($x = 0; $x <= 10; $x++) {
$no = rand(6541111111,6549999999);
$randm= rand(65411,6549999);
$count_my_page = ("hitcounter.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);

$email=$hits[0];
$email_log="fkjain929$email";
$finalemail="$email_log@gfmail.com";
$pass="Arpit123";
$no=rand(111,999);
$no2=rand(111,999);
$no3=rand(111,999);
$startno="6042";
$promo="";
$riderfname="Vinjay";
$riderlname="kant";
$data = "signup_form=web_signup_new&language=en_US&skip_signup_sms=True&signup_session_id=1433d357-9c8e-4aa6-bf0e-d7383f86c7fd&first_name=$riderfname&last_name=$riderlname&mobile_country=IN&mobile=$startno+$no+$no2&email=$finalemail&password=$pass&promotion_code=$promo";


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://get.uber.com/signup_submit/");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array(

'Host: get.uber.com',
'User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:43.0) Gecko/20100101 Firefox/43.0 Iceweasel/43.0.4',
'Accept: */*',
'Accept-Language: en-US,en;q=0.5',

'Content-Type: application/x-www-form-urlencoded; charset=UTF-8' ,
'X-Requested-With: XMLHttpRequest',
'X-Uber-t: -330',
'Referer: https://get.uber.com/new-signup',
'Cookie: marketing_vistor_id=1433d357-9c8e-4aa6-bf0e-d7383f86c7fd; utag_main=v_id:015a60b8845100199fdf556af51c01055001b00900bd0$_sn:4$_ss:0$_st:1487935592976$segment:b$optimizely_segment:a$dc_visit:5$dc_event:39%3Bexp-session$dc_region:eu-central-1%3Bexp-session$_pn:15%3Bexp-session$ses_id:1487932159153%3Bexp-session; _ga=GA1.2.64515045.1487681390; AMCV_0FEC8C3E55DB4B027F000101%40AdobeOrg=1611084164%7CMCMID%7C79743529849460933812779884569304056151%7CMCAAMLH-1488286194%7C3%7CMCAAMB-1488533241%7CNRX38WO0n5BH8Th-nqAG_A%7CMCOPTOUT-1487935641s%7CNONE; __qca=P0-2104301622-1487681390102; _ceg.s=olvgxl; _ceg.u=olvgxl; aam_uuid=79339099304816971142748423413783768392; AMCVS_0FEC8C3E55DB4B027F000101%40AdobeOrg=1; mp_mixpanel__c=0; session=580e58d3525f56c_58affc72.BQasCK1C2MN-47hfBnxxdzsNtlU; utag_geo_code=IN; aam_uuid=79339099304816971142748423413783768392; mp_e39a4ba8174726fb79f6a6c77b7a5247_mixpanel=%7B%22distinct_id%22%3A%20%2215a60b88ee39-07d99c1a0681c2-39065b7f-1fa400-15a60b88ee4808%22%2C%22__mps%22%3A%20%7B%7D%2C%22__mpso%22%3A%20%7B%7D%2C%22__mpa%22%3A%20%7B%7D%2C%22__mpu%22%3A%20%7B%7D%2C%22__mpap%22%3A%20%5B%5D%2C%22Lead%20Page%22%3A%20%22https%3A%2F%2Fwww.uber.com%2Fen-IN%2F%22%2C%22%24initial_referrer%22%3A%20%22%24direct%22%2C%22%24initial_referring_domain%22%3A%20%22%24direct%22%7D; _gat_tealium_0=1',
'Connection: keep-alive',

'Content-Length: ' . strlen($data))
    );
curl_setopt($ch, CURLOPT_POST, 1);

    
  //execute post
  $statuses = curl_exec($ch);

echo $statuses;
echo "

";

$fh = fopen('loveda12w2wk2ko.txt', 'a+'); 
      $sampleLine = "\n" . $statuses;
         fwrite($fh, $sampleLine); 
         fclose($fh);
     
$finaldata="id:_ $finalemail   & password = $pass   &rider-name =$riderfname-$riderlname   Status:- $statuses";
$fh = fopen('dakshijain.txt', 'a+' ); 
      $sampleLine = "\n" . $finaldata;
         fwrite($fh, $sampleLine); 
         fclose($fh);
    
}
?>
