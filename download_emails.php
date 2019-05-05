<?php
$name = $_POST['title'];
$emails =  $_POST['data'];

$emails = str_replace(array("<li>", " ", "\n"), array("", "", ""), $emails);

$emails = explode('</li>', $emails);

$name = str_replace( array(",", " "), array("-", ""), $name);

/*if (!file_exists('emails')) {
	mkdir('emails');
}*/

$filename = $path = 'emails/'. $name . ".csv";
$fp = fopen( $filename, 'w'); 


foreach($emails as $line){ 
	$val = explode(",", $line); 
	fputcsv($fp, $val); 
} 
fclose($fp);

/*
if (isset($path)) {
	if(file_exists($path)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($path).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($path));
        flush(); // Flush system output buffer
        readfile($path);
        exit;
    }

    //unlink($path);
}*/
if (isset($path)) {
	if(file_exists($path)) {
		$download['success'] = "true";
		$download['download_url'] = $path;
	} else {
		$download['success'] = "false";
	}
} else{
	$download['success'] = "false";
}


echo json_encode($download);
