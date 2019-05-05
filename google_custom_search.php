<?php 

$api_key = (isset($_GET['api_key'])&&!empty($_GET['api_key'])) ? $_GET['api_key'] : " AIzaSyCYhCpF8G3WfcYaxCSSqF0wklQzjwSNV9M " ;
$limit = (isset($_GET['limit'])&&!empty($_GET['limit'])) ? $_GET['limit'] : "100" ;
$search_text = (isset($_GET['search_text'])) ? $_GET['search_text'] : "" ;
$search_texts = explode(",", $search_text);

$search_text= "";
for ($i=0; $i < count($search_texts); $i++) { 
  $search_text .= '"' . $search_texts[$i] . '" ' ;
}

$site = (isset($_GET['site'])&&!empty($_GET['site'])) ? $_GET['site'] : "instagram.com" ;
$mail_domain = (isset($_GET['mail_domain'])&&!empty($_GET['mail_domain'])) ? $_GET['mail_domain'] : "@gmail.com" ;

$api_key = str_replace(" ", "", $api_key);

$domain = (isset($_GET['domain'])&&!empty($_GET['domain'])) ? $_GET['domain'] : "1" ;

if ($domain == "1") {
  $mail_domain = "@gmail.com";
} elseif ($domain == "2") {
  $mail_domain = "@yahoo.com"; 
} elseif ($domain == "3") {
  $mail_domain = "@co.uk";
} elseif ($domain == "4") {
  $mail_domain = "@live.com";
}

if($api_key == 'custom_api_key'){
  $apiKey = $GET['custom_api_key'];
} else {
  $apiKey = $api_key;
}

$query = $search_text . ' ' . $mail_domain . ' site:'. $site;
$items = array();
$titles = array();

for ($i = 1; $i <= 12; $i++) {

  $ch = curl_init();

  $request = "https://www.googleapis.com/customsearch/v1?" .
    "q=" . urlencode( "$query" ) . 
    "&cx=013594553343653397533:q-qkkaltmay" .
    "&key=" . $apiKey .
    "&start=" . ( ($i - 1)*10 + 1 );

  curl_setopt($ch, CURLOPT_URL, $request);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

  $output = curl_exec($ch);
  $output = json_decode($output);


    if(isset($output->items)){

      foreach( $output->items as $result ) {

        if (!empty($result) ) {
          $items[] = extract_emails($result->snippet);
          $titles[] = extract_emails($result->title);
        } else {
          $items[] = "";
        }

      } 

    }

}


function extract_emails($str){
    // This regular expression extracts all emails from a string:
    $regexp = '/([a-z0-9_\.\-])+\@(([a-z0-9\-])+\.)+([a-z0-9]{2,4})+/i';
    preg_match_all($regexp, $str, $m);

    return isset($m[0]) ? $m[0] : array();
}

$emails = array_merge($items, $titles);

$real_email = array();
$real_email_li = "";
$count = 0;
foreach ($emails as $email) {
    if (isset($email[0])) {
      $count++;

      if ($count < $limit) {
        $real_email_li .= "<li>" .$email[0] . "</li>";
        //$real_email[] = $email[0];
      }
      
    }
}

if (!empty($items)) {
  echo $real_email_li;
} else {
  echo "Please change api key from filter!";
}
