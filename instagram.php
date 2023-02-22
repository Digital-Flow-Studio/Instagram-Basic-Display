<?php

$request_url ="https://graph.instagram.com/17841400506687706/media?fields=id,caption,media_type,media_url,username,timestamp&access_token=IGQVJXcnF1Q1pHcHlkTkZAlZAkpaWDVmT2NzRHBxZAGF4eE9lZA1RVNWhUSmdtdVU3WmQxZA25jTnhWNUJfS0lnczdhMmllQmYtTWVaMmpfZAVlpT1lvSm42TmlfTTNBMHE5a1NNV1ROYU5R";
$requests = file_get_contents($request_url);

$insta_response = json_decode($requests);




foreach ($insta_response->data as $media) { ?>

<img src = "<?php echo $media->media_url; ?>" alt = "<?php echo $media->caption; ?>"/>

<?php
}
    ?>
