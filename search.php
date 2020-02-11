<?php

$client = new http\Client;
$request = new http\Client\Request;

$body = new http\Message\Body;
$body->append(new http\QueryString(array(
	'inboundDate' => '2019-09-10',
	'cabinClass' => 'business',
	'children' => '0',
	'infants' => '0',
	'country' => 'US',
	'currency' => 'USD',
	'locale' => 'en-US',
	'originPlace' => 'SFO-sky',
	'destinationPlace' => 'LHR-sky',
	'outboundDate' => '2019-09-01',
	'adults' => '1'
)));

$request->setRequestUrl('https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/pricing/v1.0');
$request->setRequestMethod('POST');
$request->setBody($body);

$request->setHeaders(array(
	'x-rapidapi-host' => 'skyscanner-skyscanner-flight-search-v1.p.rapidapi.com',
	'x-rapidapi-key' => '9e82c16a66msh76b918a35074380p1b9f5djsnd94311000023',
	'content-type' => 'application/x-www-form-urlencoded'
));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();