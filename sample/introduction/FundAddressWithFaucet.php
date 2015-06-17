<?php

// php -f .\sample\docs-sample\introduction\fund-bcy-address-with-faucet-short-v.php

require __DIR__ . '/../../bootstrap.php';

use BlockCypher\Api\Faucet;
use BlockCypher\Auth\SimpleTokenCredential;
use BlockCypher\Rest\ApiContext;

$apiContext = ApiContext::create(
    'test', 'bcy', 'v1',
    new SimpleTokenCredential('c0afcccdde5081d6429de37d16166ead')
);

$faucetResponse = Faucet::fundAddress('CFqoZmZ3ePwK5wnkhxJjJAQKJ82C7RJdmd', 100000, $apiContext);

ResultPrinter::printResult("Fund Address With Faucet", "FaucetResponse", 'CFqoZmZ3ePwK5wnkhxJjJAQKJ82C7RJdmd', null, $faucetResponse);