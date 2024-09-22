<?php
function getYouTubeSubscribers()
{
    $apiKey = 'HH'; //Api token
    $channelId = 'HH'; // Replace with your channel ID

    $apiUrl = 'https://www.googleapis.com/youtube/v3/channels?part=statistics&id=' . $channelId . '&key=' . $apiKey;
    $data = file_get_contents($apiUrl);
    $json = json_decode($data, true);

    if (isset($json['items'][0]['statistics']['subscriberCount'])) {
        return $json['items'][0]['statistics']['subscriberCount'];
    } else {
        return 'N/A';
    }
}
