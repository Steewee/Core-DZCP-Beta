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

## OUTPUT BUFFER START ##
include("../inc/buffer.php");

## INCLUDES ##
include(basePath."/inc/common.php");

## SETTINGS ##
$dir = "search";
$where = /*_search_head*/_forum_search_head;
$smarty = common::getSmarty(); //Use Smarty

## SECTIONS ##
switch ($action):
default:
//check $_GET var
  if($_GET['area'] == 'topic') $acheck2 = 'checked="checked"';
  else                         $acheck1 = 'checked="checked"';
  if($_GET['type'] == 'autor') $tcheck2 = 'checked="checked"';
  else                         $tcheck1 = 'checked="checked"';

  $i=0;
  for(reset($_GET);list($key,$value)=each($_GET);$i++)
  {
    $key = trim($key);
    if($i == 0) $sep = '?';
    else        $sep = '&';
    $getstr .= $sep.$key.'='.$value;

    if(preg_match("#k_#",$key))
      $strkat .= $key.'|';
  }

  if(common::permission("intforum"))
  {
    $qry = common::$sql['default']->select("SELECT * FROM `{prefix_forumkats}` ORDER BY kid");
  } else {
    $qry = common::$sql['default']->select("SELECT * FROM `{prefix_forumkats}` WHERE intern = 0 ORDER BY kid");
  }

  foreach($qry as $get) {
    $fkats .= '<li><label class="searchKat" style="text-align:center">'.stringParser::decode($get['name']).'</label></li>';

    $showt = "";
    $qrys = common::$sql['default']->select("SELECT * FROM `{prefix_forumsubkats}`
                WHERE sid = '".$get['id']."'
                ORDER BY kattopic");
    foreach($qrys as $gets) {
      $intF = common::$sql['default']->rows("SELECT * FROM `{prefix_f_access}`
                  WHERE user = '".$_SESSION['id']."'
                  AND forum = '".$gets['id']."'");
      if($get['intern'] == 0 || (($get['intern'] == 1 && $intF) || common::$chkMe == 4))
      {
        if(preg_match("#k_".$gets['id']."\|#",$strkat)) $kcheck = 'checked="checked"';
        else  $kcheck = '';

        $fkats .= '<li><label class="search" for="k_'.$gets['id'].'"><input type="checkbox" class="chksearch" name="k_'.$gets['id'].'" id="k_'.$gets['id'].'" '.$kcheck.' onclick="DZCP.hideForumFirst()" value="true" />&nbsp;&nbsp;'.stringParser::decode($gets['kattopic']).'</label></li>';
      }
    }
  }

//Auswertung
  if($do == 'search')
  {
    $maxfsearch = 20;

    if($_GET['si_board'] == true)
    {
      $_SESSION['search_con'] = $_GET['con'];

      if($_GET['type'] == 'autor')
      {
        $_SESSION['search_type'] = 'autor';
        if($_GET['con'] == 'or')
        {
          $suche = explode(" ",$_GET['search']);
          for($x=0;$x<count($suche);$x++)
          {
            $z=0;
            $qryu = common::$sql['default']->select("SELECT id,nick FROM `{prefix_users}` WHERE nick LIKE '%".trim($suche[$x])."%'");
            if(common::$sql['default']->rowCount())
            {
              foreach($qryu as $getu) {
                if($z == 0) $c = 'WHERE (';
                else        $c = 'OR ';

                $dosearch .= $c."s1.t_reg = '".$getu['id']."' OR s2.reg = '".$getu['id']."' ";
              }
              $z++;
            }
          }

          $suche = explode(" ",$_GET['search']);
          for($x=0;$x<count($suche);$x++)
          {
            if($z == 0) $b = 'WHERE (';
            else        $b = 'OR ';
            $dosearch .= $b."s1.t_nick LIKE '%".trim($suche[$x])."%' OR s2.nick LIKE '%".trim($suche[$x])."%' ";
            $z++;
          }
        } else {
          $qryu = common::$sql['default']->select("SELECT id,nick FROM `{prefix_users}` WHERE nick LIKE '%".trim($_GET['search'])."%'");
          if(common::$sql['default']->rowCount())
          {
            $x=0;
            foreach($qryu as $getu) {
              if($x == 0) $c = 'WHERE (';
              else        $c = 'OR ';

              $dosearch .= $c."s1.t_reg = '".$getu['id']."' OR s2.reg = '".$getu['id']."' ";
              $x++;
            }
          }
          if($x == 0) $c = 'WHERE (';
          else        $c = 'OR ';
          $dosearch .= $c."s1.t_nick LIKE '%".trim($_GET['search'])."%' OR s2.nick LIKE '%".trim($_GET['search'])."%' ";
        }
        $dosearch .= ')';
      } else {
        $_SESSION['search_type'] = 'text';
        if($_GET['con'] == 'or')
        {
          $suche = explode(" ",$_GET['search']);
          for($x=0;$x<count($suche);$x++)
          {
            if($x == 0) $c = 'WHERE (';
            else        $c = 'OR ';
            if($_GET['area'] != 'topic')
              $dosearch .= $c." s1.t_text LIKE '%".trim($suche[$x])."%' OR s2.text LIKE '%".trim($suche[$x])."%' ";
            else $dosearch .= $c." s1.topic LIKE '%".trim($suche[$x])."%' ";
          }
        } else {
          if($_GET['area'] != 'topic')
            $dosearch .= "WHERE (s1.t_text LIKE '%".trim($_GET['search'])."%' OR s2.text LIKE '%".trim($_GET['search'])."%'";
          else $dosearch .= "WHERE (s1.topic LIKE '%".trim($_GET['search'])."%'";
        }
        $dosearch .= ')';
      }

      if(!empty($strkat))
      {
        $dosearch .= ' AND (';
        $kat = explode("|",$strkat);
        for($y=0;$y<count($kat)-1;$y++)
        {
          if($y == 0) $d = '';
          else        $d = 'OR ';
          $k = $kat[$y];
          $k = str_replace("k_","",$k);
          $dosearch .= $d."s3.id = '".intval($k)."' ";
        }
        $dosearch .= ')';
      }

      $dosearch = (!common::permission("intforum")) ? 'AND s4.intern = 0' : 'AND s4.intern = 1';

      $qry = common::$sql['default']->select("SELECT s1.id,s1.topic,s1.kid,s1.t_reg,s1.t_email,s1.t_nick,s1.hits,s4.intern,s3.id AS subid
                 FROM `{prefix_forumthreads}` AS s1
                 LEFT JOIN `{prefix_forumposts}` AS s2
                 ON s1.id = s2.sid
                 LEFT JOIN `{prefix_forumsubkats}` AS s3
                 ON s1.kid = s3.id
                 LEFT JOIN `{prefix_forumkats}` AS s4
                 ON s3.sid = s4.id
                 ".$dosearch."
                 GROUP by s1.id
                 ORDER BY s1.lp DESC
                 LIMIT ".($page - 1)*$maxfsearch.",".$maxfsearch."");

      $entrys = common::$sql['default']->rows("SELECT s1.id
                 FROM `{prefix_forumthreads}` AS s1
                 LEFT JOIN `{prefix_forumposts}` AS s2
                 ON s1.id = s2.sid
                 LEFT JOIN `{prefix_forumsubkats}` AS s3
                 ON s2.kid = s3.id
                 AND s1.kid = s3.id
                 LEFT JOIN `{prefix_forumkats}` AS s4
                 ON s3.sid = s4.id
                 ".$dosearch."
                 GROUP by s1.id");

       foreach($qry as $get) {
          $intF = common::$sql['default']->rows("SELECT * FROM `{prefix_f_access}`
                      WHERE user = '".$_SESSION['id']."'
                      AND forum = '".$get['subid']."'");
          if(($get['intern'] == 1 && !$intF && common::$chkMe != 4)) $entrys--;
          if($get['intern'] == 0 || (($get['intern'] == 1 && $intF) || common::$chkMe == 4))
          {
            if($get['sticky'] == 1) $sticky = _forum_sticky;
            else $sticky = "";

            if($get['closed'] == 1) $closed = _closedicon;
            else $closed = "";

            $cntpage = common::cnt("{prefix_forumposts}", " WHERE sid = ".$get['id']);
            if($cntpage == 0) $pagenr = 1;
            else $pagenr = ceil($cntpage/settings::get('m_ftopics'));


            $getlp = common::$sql['default']->fetch("SELECT date,nick,reg,email FROM `{prefix_forumposts}`
                         WHERE sid = '".$get['id']."'
                         ORDER BY date DESC");
            if(common::$sql['default']->rowCount())
            {
              $lpost = show(_forum_thread_lpost, ["nick" => common::autor($getlp['reg'], '', $getlp['nick'], stringParser::decode($getlp['email'])),
                                                       "date" => date("d.m.y H:i", $getlp['date'])._uhr]);
              $lpdate = $getlp['date'];
            } else {
              $lpost = "-";
              $lpdate = "";
            }

            $threadlink = show(_forum_thread_search_link, ["topic" => common::cut(stringParser::decode($get['topic']),settings::get('l_forumtopic')),
                                                                "id" => $get['id'],
                                                                "sticky" => $sticky,
                                                                "hl" => $_GET['search'],
                                                                "closed" => $closed,
                                                                "lpid" => $cntpage+1,
                                                                "page" => $pagenr]);

            $class = ($color % 2) ? "contentMainSecond" : "contentMainFirst"; $color++;

            $results .= show($dir."/forum_search_results", ["new" => common::check_new($get['lp']),
                                                                 "topic" => $threadlink,
                                                                 "subtopic" => common::cut(stringParser::decode($get['subtopic']),settings::get('l_forumsubtopic')),
                                                                 "hits" => $get['hits'],
                                                                 "replys" => common::cnt("{prefix_forumposts}", " WHERE sid = '".$get['id']."'"),
                                                                 "class" => $class,
                                                                 "lpost" => $lpost,
                                                                 "autor" => common::autor($get['t_reg'], '', $get['t_nick'], $get['t_email'])]);
          }
        }

        $nav = common::nav($entrys,$maxfsearch,$getstr);
        $show = show($dir."/forum_search_show", ["head" => _forum_search_results,
                                                      "autor" => _autor,
                                                      "thread" => _forum_thread,
                                                      "lpost" => _forum_lpost,
                                                      "nav" => $nav,
                                                      "results" => $results,
                                                      "replys" => _forum_replys,
                                                      "hits" => _hits]);
    }
  }
//Diverse Abfragen
  if($_GET['searchplugin'] == true)
  {
    $onclick = 'onclick="more(1)" style="cursor:pointer"';
    $img = '<img id="img1" src="../inc/images/expand.gif" alt="" />';
    $style = 'style="display:none"';

    if($_GET['si_board'] == true) $si_board = 'checked="checked"';
    if(empty($strkat)) $all_board = 'checked="checked"';
    if($_GET['con'] == 'or') $chk_con = 'selected="selected"';
  } else {
    $si_board = 'checked="checked"';
    $all_board = 'checked="checked"';
  }

  $index = show($dir."/search", ["head" => /*_search_head*/_forum_search_head,
                                      "searchwords" => _search_word,
                                      "board" => _forum,
                                      "fkats" => $fkats,
                                      "show" => $show,
                                      "search" => $_GET['search'],
                                      "searchin" => _search_in,
                                      "onclick" => $onclick,
                                      "img" => $img,
                                      "con_and" => _search_con_and,
                                      "con_or" => _search_con_or,
                                      "chkcon" => $chk_con,
                                      "style" => $style,
                                      "si_board" => $si_board,
                                      "all_board" => $all_board,
                                      "acheck1" => $acheck1,
                                      "acheck2" => $acheck2,
                                      "tcheck1" => $tcheck1,
                                      "tcheck2" => $tcheck2,
                                      "value" => _button_value_search1,
                                      "autor" => _search_type_autor,
                                      "searcharea" => _search_for_area,
                                      "text" => _search_type_text,
                                      "type" => _search_type,
                                      "hint" => _search_forum_hint,
                                      "all" => _search_forum_all,
                                      "full" => _search_type_full,
                                      "intitle" => _search_type_title,
  ]);
break;
case 'site';
    $qry = common::$sql['default']->select("SELECT * FROM `{prefix_news}`
             WHERE (titel LIKE '%".stringParser::encode($_GET['searchword'])."%' AND titel != '') OR (text LIKE '%".stringParser::encode($_GET['searchword'])."%' AND `text` != '')
             ORDER BY titel ASC");
    foreach($qry as $get) {
    $class = ($color % 2) ? "contentMainFirst" : "contentMainSecond"; $color++;
    $shownews .= show($dir."/search_show", ["class" => $class,
                                               "type" => 'news',
                                               "href" => '../news/index.php?action=show&amp;id='.$get['id'],
                                               "titel" => stringParser::decode($get['titel'])
    ]);
  }

  unset($class);
  $qry = common::$sql['default']->select("SELECT * FROM `{prefix_artikel}`
             WHERE (titel LIKE '%".stringParser::encode($_GET['searchword'])."%' AND titel != '') OR (text LIKE '%".stringParser::encode($_GET['searchword'])."%' AND `text` != '')
             ORDER BY titel ASC");
    foreach($qry as $get) {
    $class = ($color % 2) ? "contentMainFirst" : "contentMainSecond"; $color++;
    $showartikel .= show($dir."/search_show", [
                                               "href" => '../artikel/index.php?action=show&amp;id='.$get['id'],
                                               "class" => $class,
                                               "type" => 'artikel',
                                               "titel" => stringParser::decode($get['titel'])]);
  }

  unset($class);
  $qry = common::$sql['default']->select("SELECT * FROM `{prefix_sites}`
             WHERE (titel LIKE '%".stringParser::encode($_GET['searchword'])."%' AND titel != '') OR (text LIKE '%".stringParser::encode($_GET['searchword'])."%' AND `text` != '')
             ORDER BY titel ASC");
  foreach($qry as $get) {
    $class = ($color % 2) ? "contentMainFirst" : "contentMainSecond"; $color++;
    $showsites .= show($dir."/search_show", [
                                               "href" => '../sites/?show='.$get['id'],
                                               "class" => $class,
                                               "type" => 'site',
                                               "titel" => stringParser::decode($get['titel'])
    ]);
  }

  if(!empty($shownews)) $shownews = '<tr><td class="contentMainTop"><b>'._news.'</b></td></tr>'.$shownews;
  if(!empty($showartikel)) $showartikel = '<tr><td class="contentMainTop"><b>'._artikel.'</b></td></tr>'.$showartikel;
  if(!empty($showsites)) $showsites = '<tr><td class="contentMainTop"><b>'._search_sites.'</b></td></tr>'.$showsites;

  $index = show($dir."/search_global", ["shownews" => $shownews,
                                             "showartikel" => $showartikel,
                                             "showsites" => $showsites,
                                             "results" => _search_results,
  ]);
break;
endswitch;

## INDEX OUTPUT ##
$title = common::$pagetitle." - ".$where;
common::page($index, $title, $where);