<?php
/**
 * DZCP - deV!L`z ClanPortal - Mainpage ( dzcp.de )
 * deV!L`z Clanportal ist ein Produkt von CodeKing,
 * geändert dürch my-STARMEDIA und Codedesigns.
 *
 * Diese Datei ist ein Bestandteil von dzcp.de
 * Diese Version wurde speziell von Lucas Brucksch (Codedesigns) für dzcp.de entworfen bzw. verändert.
 * Eine Weitergabe dieser Datei außerhalb von dzcp.de ist nicht gestattet.
 * Sie darf nur für die Private Nutzung (nicht kommerzielle Nutzung) verwendet werden.
 *
 * Homepage: http://www.dzcp.de
 * E-Mail: info@web-customs.com
 * E-Mail: lbrucksch@codedesigns.de
 * Copyright 2017 © CodeKing, my-STARMEDIA, Codedesigns
 */

## OUTPUT BUFFER START #
define('basePath', dirname(dirname(__FILE__).'../'));
ob_start();

## INCLUDES ##
require(basePath."/inc/debugger.php");
require(basePath."/inc/config.php");
require(basePath."/inc/bbcode.php");

##  * Bot Trap *
if(!common::$sql['default']->rows("SELECT `id` FROM `{prefix_ipban}` WHERE `ip` = ? LIMIT 1;", [common::$userip])) {
    $data_array = [];
    $data_array['confidence'] = ''; $data_array['frequency'] = ''; $data_array['lastseen'] = '';
    $data_array['banned_msg'] = stringParser::encode('SpamBot detected by System * Bot Trap *');
    common::$sql['default']->insert("INSERT INTO `{prefix_ipban}` SET `time` = ?, `ip` = ?, `data` = ?, `typ` = 3;",
            [time(),common::$userip,serialize($data_array)]);
    common::check_ip(); // IP Prufung * No IPV6 Support *
}
ob_end_flush();