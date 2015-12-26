<?php
header('Content-Type: text/html;charset=utf-8');

function call_socket($remote_server, $remote_server_port,$remote_path, $request) {
$sock = fsockopen($remote_server, $remote_server_port, $errno, $errstr, 30);
if (!$sock) die("$errstr ($errno)\n");
$out = "POST $remote_path HTTP/1.1\r\n";
$out .= "User-Agent: PHPRPC/1.0\r\n";
$out .= "Host: $remote_server\r\n";
$out .= "Content-type: text/xml\r\n";
$out .= "Content-length: " . strlen($request) . "\r\n";
$out .= "Accept: */*\r\n\r\n";
$out .= "$request\r\n\r\n";
fputs($sock, $out);
$headers = "";
while ($str = trim(fgets($sock, 4096)))
$headers .= "$str\n";
$data = "";
while (!feof($sock))
$data .= fgets($sock, 4096);
fclose($sock);
return $data;
}




$output = array();

function make_request($request_xml, &$output) {

$retval = call_socket('k3', 80, '/xml-rpc/xml-rpc-server.php', $request_xml);
//$retval = call_socket('omnimir.ru', 80, '/', $request_xml);
/*
$opts = array(
'http'=>array(
'method'=>"POST",
'header'=>"User-Agent: PHPRPC/1.0\r\n" .
"Content-Type: text/xml\r\n" .
"Content-length: " . strlen($request_xml) . "\r\n",
'content'=>"$request_xml"
)
);
$context = stream_context_create($opts);
$retval = file_get_contents('http://k3/xml-rpc/xml-rpc-server.php', false, $context);
*/

$data = xmlrpc_decode($retval);
if (is_array($data) && xmlrpc_is_fault($data)){
$output = $data;
}else{
$output = unserialize(base64_decode($data));
}
}

$id = 5;
$request_xml = xmlrpc_encode_request('getNewsById', array($id));
make_request($request_xml, $output);

var_dump($output);

echo $retval;

print_r(dns_get_record('k3'));
print_r(dns_get_record('omnimir.ru'));
?>