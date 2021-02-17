<?php
$id = $_GET['id']-1; // 无锡 新闻综合1  都市资讯2  娱乐频道3  经济频道4  生活频道5
        $bstrURL = 'http://fapi.wifiwx.com/mobile/api/wifiwx4.0/media_home.php?appkey=CshXUoKcUZrBc0OheGbJ7UWgv6b2MSjf&appid=21';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $bstrURL);                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        $data1 = curl_exec($ch);
        curl_close($ch);
        $url = json_decode($data1)->tv_channel->data[$id]->channel_stream[0]->live_m3u8;
        header('location:'.$url);

?>
