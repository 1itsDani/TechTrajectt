<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="lg:w-1/2 w-full relative">
                <?php
                $rss = simplexml_load_file('https://www.youtube.com/feeds/videos.xml?channel_id=UCewiBDBuReqnbVLVZlXQ_sg');
                if ($rss === FALSE) {
                    echo '<p>Er is een fout opgetreden bij het ophalen van de RSS feed.</p>';
                } else {
                    $video = $rss->entry[0];
                    $videoId = (string) $video->id;
                    $videoId = str_replace('yt:video:', '', $videoId);
                    $description = (string) $video->summary;
                    $thumbnailUrl = (string) $video->link->attributes()->href;
                    echo "<div class='mb-8'>";
                    echo "<div class='video-container'><iframe src='https://www.youtube.com/embed/{$videoId}' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>";
                    echo "<p class='text-gray-700'>{$description}</p>";
                    echo "</div>";
                }
                ?>
            </div>
</body>
</html>
