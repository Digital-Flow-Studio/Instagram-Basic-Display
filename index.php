<?php
$url = 'https://api.instagram.com/oauth/access_token';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$data = "client_id=2458326197668159&client_secret=18cbf5ab05831ec18c01e81f647521e6&grant_type=authorization_code&redirect_uri=https://stickeryeti.io/ch_en/&code=AQA-fNfVUZBaLK07cVjbNLE2-JALnB0jMJfXwOmJjKN5DO58eVKQojKLMu1uaO7TDcKM7o5JGA-uMF3_n2sYP5Eog-trBfeqvmpB4eOxNv2a7Gvf33alxo6EOUpgQMIOL-4p_uBdhkEKGIuAfOT4DG_f0gw9QY53oYirdXARc_idfnT6uwINpYBs6bgf_TQ-bJFtqL8iKRB6UwKxR6a8HFc0q102b4NLQcWQ7ivRdwsX5Q";
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($curl);
echo "<pre>";
var_dump($result);
curl_close($curl);
