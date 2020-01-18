<?php
$iptv = $_GET['iptv'];
$text = file_get_contents( $iptv );
$price =  explode("EXTINF", $text);
$count = count($price);
//http://zigfreed.cc.ua/iptv/zigfreed.m3u
if (strpos($iptv, 'zigfreed') !== false)
{
    $coutt = round($count, -1);
    echo "BEGIN:VCARD<br>VERSION:3.0<br>N;CHARSET=utf-8:Все каналы;;;<br>ORG:+$coutt каналов;<br>TITLE:zigfreed.php?grp=all_channel<br>END:VCARD<br><br>";
for ($i = 2; $i < $count; $i++) {
    preg_match('/:-1 group-title="(.*?)",(.*?)(http.*?)\#/Us', $price[$i], $matches);
    
if (strpos($res, $matches[1]) !== false)
{
    
} else {
    $cout = substr_count($text, $matches[1]);
    if ($cout>0) {
    $res = "$res,$matches[1]";
    echo "BEGIN:VCARD<br>VERSION:3.0<br>N;CHARSET=utf-8:$matches[1];;;<br>ORG:Всего каналов: $cout;<br>TITLE:zigfreed.php?grp=$matches[1]<br>END:VCARD<br><br>";
    }}}    
}
//https://webhalpme.ru/rif.m3u
if (strpos($iptv, 'webhalpme') !== false)
{
    $coutt = round($count, -1);
    echo "BEGIN:VCARD<br>VERSION:3.0<br>N;CHARSET=utf-8:Все каналы;;;<br>ORG:+$coutt каналов;<br>TITLE:webhalpme.php?grp=all_channel<br>END:VCARD<br><br>";
for ($i = 1; $i < $count; $i++) {
    preg_match('/:-1,(.*?)\#EXTGRP:(.*?)(http.*?)\#/s', $price[$i], $matches);
if (strpos($res, $matches[2]) !== false)
{
} else {
    $cout = substr_count($text, $matches[2]);
    if ($cout>0) {
    $res = "$res,$matches[2]";
    echo "BEGIN:VCARD<br>VERSION:3.0<br>N;CHARSET=utf-8:$matches[2];;;<br>ORG:Всего каналов: $cout;<br>TITLE:webhalpme.php?grp=$matches[2]<br>END:VCARD<br><br>";}}}   
}
//http://iptv.glav-noe.ru/RusIPTV.m3u
if (strpos($iptv, 'RusIPTV') !== false)
{
    $coutt = round($count, -1);
    echo "BEGIN:VCARD<br>VERSION:3.0<br>N;CHARSET=utf-8:Все каналы;;;<br>ORG:+$coutt каналов;<br>TITLE:rustv.php?grp=all_channel<br>END:VCARD<br><br>";
for ($i = 1; $i < $count; $i++) {
    preg_match('/:-1,(.*?)\#EXTGRP:(.*?)(http.*?)\#/s', $price[$i], $matches);
if (strpos($res, $matches[2]) !== false)
{
} else {
    $cout = substr_count($text, $matches[2]);
    if ($cout>0) {
    $res = "$res,$matches[2]";
    echo "BEGIN:VCARD<br>VERSION:3.0<br>N;CHARSET=utf-8:$matches[2];;;<br>ORG:Всего каналов: $cout;<br>TITLE:rustv.php?grp=$matches[2]<br>END:VCARD<br><br>";}}}   
}
//https://webarmen.com/my/iptv/auto.nogrp.m3u
if (strpos($iptv, 'webarmen') !== false)
{
    $coutt = round($count, -1);
    echo "BEGIN:VCARD<br>VERSION:3.0<br>N;CHARSET=utf-8:Все каналы;;;<br>ORG:+$coutt каналов;<br>TITLE:webarmen.php?grp=all_channel<br>END:VCARD<br><br>";
for ($i = 1; $i < $count; $i++) {
    preg_match('/:-1.*?tvg-logo="(.*?)" tvg-name="(.*?)".*?\#EXTGRP:(.*?)(http.*?)\#/Us', $price[$i], $matches);
if (strpos($res, $matches[3]) !== false)
{
} else {
    $cout = substr_count($text, $matches[3]);
    if ($cout>0) {
    $res = "$res,$matches[3]";
    echo "BEGIN:VCARD<br>VERSION:3.0<br>N;CHARSET=utf-8:$matches[3];;;<br>ORG:Всего каналов: $cout;<br>TITLE:webarmen.php?grp=$matches[3]<br>END:VCARD<br><br>";}}}   
}
//https://smarttvapp.ru/app/iptvfull.m3u
if (strpos($iptv, 'smarttvapp') !== false)
{
    $coutt = round($count, -1);
    echo "BEGIN:VCARD<br>VERSION:3.0<br>N;CHARSET=utf-8:Все каналы;;;<br>ORG:+$coutt каналов;<br>TITLE:smarttvapp.php?grp=all_channel<br>END:VCARD<br><br>";
}
//https://karnei4.github.io/ http://bit.do/tv-m3u
if (strpos($iptv, 'tv-m3u') !== false)
{
    $coutt = round($count, -1);
    echo "BEGIN:VCARD<br>VERSION:3.0<br>N;CHARSET=utf-8:Все каналы;;;<br>ORG:+$coutt каналов;<br>TITLE:karnei4.php?grp=all_channel<br>END:VCARD<br><br>";
for ($i = 1; $i < $count; $i++) {
    preg_match('/:0.*?group-title="(.*?)" tvg-logo="(.*?),(.*?)(http.*?)\#/Us', $price[$i], $matches);
if (strpos($res, $matches[1]) !== false)
{
} else {
    $cout = substr_count($text, $matches[1]);
    if ($cout>0) {
    $res = "$res,$matches[1]";
    echo "BEGIN:VCARD<br>VERSION:3.0<br>N;CHARSET=utf-8:$matches[1];;;<br>ORG:Всего каналов: $cout;<br>TITLE:karnei4.php?grp=$matches[1]<br>END:VCARD<br><br>";}}}   
}
?>
