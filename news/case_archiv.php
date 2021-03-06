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

if(defined('_News')) {
    if(common::permission("intnews")) {
        $intern = "WHERE `intern` = 1 OR `intern` = 0 AND `datum` <= ".time()." AND `public` = 1";
    } else {
        $intern = "WHERE `intern` = 0 AND `datum` <= ".time()." AND `public` = 1";
    }

    //SQL
    $qry = common::$sql['default']->select("SELECT `id`,`titel`,`autor`,`datum`,`kat`,`text`
                   FROM `{prefix_news}`
                   ".$intern."
                   ".common::orderby_sql(["datum","autor","titel","kat"], 'ORDER BY datum DESC')."
                   LIMIT ".($page - 1)*settings::get('m_archivnews').",".settings::get('m_archivnews').";");
    $entrys = common::cnt('{prefix_news}', " ".$intern);

    //News
    if(common::$sql['default']->rowCount()) {
        foreach ($qry as $get) {
            $getk = common::$sql['default']->fetch("SELECT `kategorie` FROM `{prefix_newskat}` WHERE `id` = ?;", [$get['kat']]);

            //News Link
            $smarty->caching = false;
            $smarty->assign('link', common::cut(stringParser::decode($get['titel']), settings::get('l_newsarchiv')));
            $smarty->assign('url', "../news/?action=show&amp;id=" . $get['id']);
            $smarty->assign('target', "_self");
            $titel = str_replace('&raquo;', '', strip_tags($smarty->fetch('file:[' . common::$tmpdir . ']' . $dir . '/news_link.tpl'), '<a><div>'));
            $smarty->clearAllAssign();

            //Set Second or First class (style)
            $class = ($color % 2) ? "contentMainSecond" : "contentMainFirst";
            $color++;

            //-> Gen List
            $smarty->caching = true;
            $smarty->assign('autor', common::autor($get['autor']));
            $smarty->assign('date', date("d.m.y", $get['datum']));
            $smarty->assign('titel', $titel);
            $smarty->assign('class', $class);
            $smarty->assign('kat', stringParser::decode($getk['kategorie']));
            $smarty->assign('comments', common::cnt('{prefix_newscomments}', " WHERE `news` = " . $get['id']));
            $show .= $smarty->fetch('file:[' . common::$tmpdir . ']' . $dir . '/archiv_show.tpl', common::getSmartyCacheHash('news_archiv_show_' . $get['id']));
            $smarty->clearAllAssign();
        }
    } else {
        $smarty->caching = false;
        $smarty->assign('colspan',5);
        $show = $smarty->fetch('string:'._no_entrys_yet);
        $smarty->clearAllAssign();
    }

    //Index Output
    $nav = common::nav($entrys,settings::get('m_archivnews'),"?action=archiv".common::orderby_nav());
    $smarty->caching = false;
    $smarty->assign('nav',$nav);
    $smarty->assign('idir','../inc/images');
    $smarty->assign('order_date',common::orderby('datum'));
    $smarty->assign('order_titel',common::orderby('titel'));
    $smarty->assign('order_autor',common::orderby('autor'));
    $smarty->assign('order_kat',common::orderby('kat'));
    $smarty->assign('show',$show);
    $index = $smarty->fetch('file:['.common::$tmpdir.']'.$dir.'/archiv.tpl');
    $smarty->clearAllAssign();
    unset($nav,$show,$get,$qry,$class,$getk,$entrys,$intern);
}