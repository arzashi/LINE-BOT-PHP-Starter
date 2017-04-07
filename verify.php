<?PHP



$access_token = 'RbycuSKQE3As5AbaRgu8koQs/Qg7ZnggCFXSgIlVJfDOKi1OJNJrEtY16gcgqilEyMKz4tVYzNMtOpykl06pHE6xuqhKnAJP/3UPYdebMtAi5liiyecugxg9Z/92iZ/0URspOyendDJGYhk1veusdAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>