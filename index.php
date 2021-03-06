<?php

use Contentful\Delivery\Client;

require_once __DIR__ . '/vendor/autoload.php';

$spaceID = 'ykfxakfjtqhb';
$accessToken = 'lBV8DOT3Jl-I784udYqzAYn_KAIg8rlaR6F8WuT3Wp8';

// Feel free to customize this snippet as much as you like.
// To learn more, check out our PHP Tutorials and Integrations: https://www.contentful.com/developers/docs/php/

$client = new Client($accessToken, $spaceID);

$entries = $client->getEntries();

if (count($entries) === 0) {
    echo "Oops, you do not have entries in your space. How about creating some?<br />\n";
} else {
    echo "You have entries with these IDs:<br />\n";
    foreach ($entries as $entry) {
        echo $entry->getId()."<br />\n";
    }
}
