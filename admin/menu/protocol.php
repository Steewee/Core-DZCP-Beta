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

if(_adminMenu != 'true') exit;

$where = $where.': '._protocol;
switch ($do) {
    case 'deletesingle':
        common::$sql['default']->delete("DELETE FROM `{prefix_ipcheck}` WHERE `id` = ?;",array(intval($_GET['id'])));
        header("Location: ".common::GetServerVars('HTTP_REFERER'));
    break;
    default:
        if(isset($_POST['run']) == 'delete') {
            common::$sql['default']->delete("DELETE FROM `{prefix_ipcheck}` WHERE `time` != 0;");
            notification::add_success(_protocol_deleted);
        }
        
        $params = array();
        if(!empty($_GET['sip'])) {
            $search = "WHERE `ip` = ? AND `time` != 0 AND `what` NOT REGEXP 'vid_'";
            array_push($params, stringParser::encode($_GET['sip']));
            $swhat = $_GET['sip'];
        } else {
            $search = "WHERE `time` != 0 AND `what` NOT REGEXP 'vid_'";
            $swhat = _info_ip;
        }

        $entrys = common::cnt('{prefix_ipcheck}', $search, 'id', $params); $maxprot = 30;
        $qry = common::$sql['default']->select("SELECT * FROM `{prefix_ipcheck}` ".$search." ORDER BY `id` DESC LIMIT ".($page - 1)*$maxprot.",".$maxprot.";",$params);
        foreach($qry as $get) {
              $action = "";
              $class = ($color % 2) ? "contentMainSecond" : "contentMainFirst"; $color++;
              $date = date("d.m.y H:i", $get['time'])._uhr;
              $delete = show("page/button_delete", array("id" => $get['id'],
                                                         "action" => "admin=protocol&amp;do=deletesingle",
                                                         "title" => _button_title_del));

            if(preg_match("#\(#",$get['what'])) {
                $a = preg_replace("#^(.*?)\((.*?)\)#is","$1",$get['what']);
                $wid = preg_replace("#^(.*?)\((.*?)\)#is","$2",$get['what']);

                if($a == 'fid')
                    $action = 'wrote in <b>board</b>';
                elseif($a == 'ncid')
                    $action = 'wrote <b>comment</b> in <b>news</b> with <b>ID</b> '.$wid;
                elseif($a == 'artid')
                    $action = 'wrote <b>comment</b> in <b>article</b> with <b>ID</b> '.$wid;
                elseif($a == 'vid')
                    $action = 'voted <b>poll</b> with <b>ID '.$wid.'</b>';
                elseif($a == 'mgbid')
                    $action = common::autor($wid).' got a userbook entry';
                elseif($a == 'createuser') {
                    $ids = explode("_", $wid);
                    $action = '<b style="color:red">ADMIN:</b> '.common::autor($ids[0]).' <b>added</b> user '.common::autor($ids[1]);
                } elseif($a == 'upduser') {
                    $ids = explode("_", $wid);
                    $action = '<b style="color:red">ADMIN:</b> '.common::autor($ids[0]).' <b>edited</b> user '.common::autor($ids[1]);
                } elseif($a == 'deluser') {
                    $ids = explode("_", $wid);
                    $action = '<b style="color:red">ADMIN:</b> '.common::autor($ids[0]).' <b>deleted</b> user';
                } elseif($a == 'ident') {
                    $ids = explode("_", $wid);
                    $action = '<b style="color:red">ADMIN:</b> '.common::autor($ids[0]).' took <b>identity</b> from user '.common::autor($ids[1]);
                } elseif($a == 'logout')
                    $action = common::autor($wid).' <b>logged out</b>';
                elseif($a == 'login')
                    $action = common::autor($wid).' <b>logged in</b>';
                elseif($a == 'trypwd')
                    $action = 'failed to <b>reset password</b> from '.common::autor($wid);
                elseif($a == 'pwd')
                    $action = '<b>reseted password</b> from '.common::autor($wid);
                elseif($a == 'reg')
                    $action = common::autor($wid).' <b>signed up</b>';
                elseif($a == 'trylogin')
                    $action = 'failed to <b>login</b> in '.common::autor($wid).'`s account';
                else 
                    $action = '<b style="color:red">undefined:</b> <b>'.$a.'</b>';
            } else {
                if($get['what'] == 'gb')
                    $action = 'wrote in <b>guestbook</b>';
                else 
                    $action = '<b style="color:red">undefined:</b> <b>'.$a.'</b>';
            }

            $show .= show($dir."/protocol_show", array("datum" => $date,
                                                       "class" => $class,
                                                       "delete" => $delete,
                                                       "user" => $get['ip'],
                                                       "action" => $action));
        }

        if(empty($show))
            $show = '<tr><td colspan="3" class="contentMainSecond">'._no_entrys.'</td></tr>';

        $sip = (isset($_GET['sip']) && !empty($_GET['sip'])) ? "&amp;sip=".$_GET['sip'] : "";
        $show = show($dir."/protocol", array("show" => $show,
                                             "search" => $swhat,
                                             "nav" => common::nav($entrys,$maxprot,"?admin=protocol".$sip)));
    break;
}