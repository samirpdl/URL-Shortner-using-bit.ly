<?php

/**
* @author : Samir Poudel <samir@samirpdl.com.np>
**/
define('ACCESS_TOKEN', 'Your Access Token');
define('URL','https://api-ssl.bitly.com/v3/user/link_save');
$longURL=$_POST['url'];
$parsed = parse_url($longURL);
if (empty($parsed['scheme'])) {
    $longURL = 'http://' . ltrim($longURL, '/');
}
$get_url=file_get_contents(URL.'?access_token='.ACCESS_TOKEN.'&longUrl='.$longURL);
$url_content=json_decode($get_url);
$data=array();
$data['status']=$url_content->status_txt;
$data['link']=$url_content->data->link_save->link;
$data['is_newlink']=$url_content->data->link_save->new_link;

print_r( json_encode($data));
