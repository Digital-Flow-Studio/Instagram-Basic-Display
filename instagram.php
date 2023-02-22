<?php
$access_token = '';
$request_url ="https://graph.instagram.com/17841400506687706/media?fields=id,caption,media_type,media_url,username,timestamp&access_token=". $access_token;
$requests = file_get_contents($request_url);
$insta_response = json_decode($requests);
foreach ($insta_response->data as $media) { ?>
<img src = "<?php echo $media->media_url; ?>" alt = "<?php echo $media->caption; ?>"/>
<?php
}
?>
