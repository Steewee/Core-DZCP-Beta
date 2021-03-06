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

function kalender($month="",$year="",$js=false) {
    header("Content-Type: text/html; charset=utf-8");
    if(!$js) {
        $kalender = '<div style="width:100%;padding:10px 0;text-align:center"><img src="../inc/images/ajax_loading.gif" alt="" /></div>'.
                    "<script language=\"javascript\" type=\"text/javascript\">DZCP.initDynLoader('navKalender','kalender','',true);</script>";
    } else {
        if(!empty($month) && !empty($year)) {
            $monat = common::cal($month);
            $jahr = $year;
        } else {
            $monat = date("m");
            $jahr = date("Y");
        }

        for($i = 1; $i <= 12; $i++) {
            $mname = ["1" => _jan,
                           "2" => _feb,
                           "3" => _mar,
                           "4" => _apr,
                           "5" => _mai,
                           "6" => _jun,
                           "7" => _jul,
                           "8" => _aug,
                           "9" => _sep,
                           "10" => _okt,
                           "11" => _nov,
                           "12" => _dez];

            if($monat == $i) $month = $mname[$i];
        }

        $today = mktime(0,0,0,date("n"),date("d"),date("Y"));
        $i = 1; $show = '';
        while($i <= 31 && checkdate($monat, $i, $jahr)) {
            $data = ''; $event = ''; $bdays = '';
            for($iw = 1; $iw <= 7; $iw++) {
                unset($titlebd); unset($titleev);

                $datum = mktime(0,0,0,$monat,$i,$jahr);
                $wday = getdate($datum);
                $wday = $wday['wday'];

                if(!$wday) $wday = 7;

                if($wday != $iw) {
                    $data .= "<td class=\"navKalEmpty\"></td>";
                } else {
                    $titlebd = ''; $bdays = '';
                    $qry = common::$sql['default']->select("SELECT `id`,`bday` FROM `{prefix_users}` WHERE bday != 0;");
                    foreach($qry as $get) {
                        if(date("d.m",$get['bday']) == common::cal($i).".".$monat) {
                            $bdays = "set";
                            $titlebd .= '&lt;img src=../inc/images/bday.gif class=icon alt= /&gt;'.'&nbsp;'.common::jsconvert(_kal_birthday.common::rawautor($get['id'])).'&lt;br />';
                        }
                    }

                    $event = ""; $titleev = "";
                    $qry = common::$sql['default']->select("SELECT `datum`,`title` FROM `{prefix_events}` WHERE DATE_FORMAT(FROM_UNIXTIME(datum), '%d.%m.%Y') = ?;",
                            [common::cal($i).".".$monat.".".$jahr]);
                    foreach($qry as $get) {
                        $event = "set";
                        $titleev .= '&lt;img src=../inc/images/event.png class=icon alt= /&gt;'.'&nbsp;'.common::jsconvert(_kal_event.stringParser::decode($get['title'])).'&lt;br />';
                    }

                    $info = 'onmouseover="DZCP.showInfo(\''.common::cal($i).'.'.$monat.'.'.$jahr.'\', \''.$titlebd.$titleev.'\')" onmouseout="DZCP.hideInfo()"';

                    if($event == "set" || $bdays == "set")
                        $day = '<a class="navKal" href="../kalender/?m='.$monat.'&amp;y='.$jahr.'&amp;hl='.$i.'" '.$info.'>'.common::cal($i).'</a>';
                    else
                        $day = common::cal($i);

                    if(!checkdate($monat, $i, $jahr))
                        $data .= '<td class="navKalEmpty"></td>';
                    elseif($datum == $today)
                        $data .= show("menu/kal_day", ["day" => $day, "id" => "navKalToday"]);
                    else
                        $data .= show("menu/kal_day", ["day" => $day, "id" => "navKalDays"]);

                    $i++;
                }
            }

            $show .= "<tr>".$data."</tr>";
        }

        if(($monat+1) == 13) {
          $nm = 1;
          $ny = $jahr+1;
        } else {
          $nm = $monat+1;
          $ny = $jahr;
        }

        if(($monat-1) == 0) {
          $lm = 12;
          $ly = $jahr-1;
        } else {
          $lm = $monat-1;
          $ly = $jahr;
        }

        $kalender = show("menu/kalender", ["monat" => $month,
                                                "show" => $show,
                                                "year" => $jahr,
                                                "nm" => $nm,
                                                "ny" => $ny,
                                                "lm" => $lm,
                                                "ly" => $ly]);

    }

    return '<div id="navKalender">'.$kalender.'</div>';
}