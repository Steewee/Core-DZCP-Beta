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
$where = $where.': '._artikel;

switch($do) {
    case 'add':
        $qryk = common::$sql['default']->select("SELECT `id`,`kategorie` FROM `{prefix_newskat}`;"); $kat = '';
        foreach($qryk as $getk) {
            $kat .= show(_select_field, array("value" => $getk['id'],"sel" => "","what" => stringParser::decode($getk['kategorie'])));
        }

        $show = show($dir."/artikel_form", array("head" => _artikel_add,
                                                 "autor" => common::autor(common::$userid),
                                                 "kat" => $kat,
                                                 "do" => "insert",
                                                 "error" => "",
                                                 "titel" => "",
                                                 "artikeltext" => "",
                                                 "link1" => "",
                                                 "link2" => "",
                                                 "link3" => "",
                                                 "url1" => "",
                                                 "url2" => "",
                                                 "url3" => "",
                                                 "button" => _button_value_add,
                                                 "n_artikelpic" => '',
                                                 "delartikelpic" => ''));
    break;
    case 'insert':
        if(empty($_POST['titel']) || empty($_POST['artikel'])) {
            $error = _empty_artikel;
            if(empty($_POST['titel']))
                $error = _empty_artikel_title;

            $qryk = common::$sql['default']->select("SELECT `id`,`kategorie` FROM `{prefix_newskat}`;"); $kat = '';
            foreach($getk as $getk) {
                $sel = ($_POST['kat'] == $getk['id'] ? 'selected="selected"' : '');
                $kat .= show(_select_field, array("value" => $getk['id'],
                                                  "sel" => $sel,
                                                  "what" => stringParser::decode($getk['kategorie'])));
            }

            $error = show("errors/errortable", array("error" => $error));
            $show = show($dir."/artikel_form", array("head" => _artikel_add,
                                                     "autor" => common::autor(common::$userid),
                                                     "kat" => $kat,
                                                     "do" => "insert",
                                                     "titel" => stringParser::decode($_POST['titel']),
                                                     "artikeltext" => stringParser::decode($_POST['artikel']),
                                                     "link1" => stringParser::decode($_POST['link1']),
                                                     "link2" => stringParser::decode($_POST['link2']),
                                                     "link3" => stringParser::decode($_POST['link3']),
                                                     "url1" => $_POST['url1'],
                                                     "url2" => $_POST['url2'],
                                                     "url3" => $_POST['url3'],
                                                     "button" => _button_value_add,
                                                     "error" => $error,
                                                     "n_artikelpic" => '',
                                                     "delartikelpic" => ''));
        } else {
            if(isset($_POST)) {
                common::$sql['default']->insert("INSERT INTO `{prefix_artikel}` SET `autor` = ?, `kat` = ?, `titel` = ?, `text` = ?, "
                            ."`link1`  = ?, `link2`  = ?, `link3`  = ?, `url1`   = ?, `url2`   = ?, `url3`   = ?;",
                array(intval(common::$userid),intval($_POST['kat']),stringParser::encode($_POST['titel']),stringParser::encode($_POST['artikel']),stringParser::encode($_POST['link1']),
                        stringParser::encode($_POST['link2']),stringParser::encode($_POST['link3']),stringParser::encode(common::links($_POST['url1'])),stringParser::encode(common::links($_POST['url2'])),
                    stringParser::encode(common::links($_POST['url3']))));

                if(isset($_FILES['artikelpic']['tmp_name']) && !empty($_FILES['artikelpic']['tmp_name'])) {
                    $endung = explode(".", $_FILES['artikelpic']['name']);
                    $endung = strtolower($endung[count($endung)-1]);
                    move_uploaded_file($_FILES['artikelpic']['tmp_name'], basePath."/inc/images/uploads/artikel/".common::$sql['default']->lastInsertId().".".strtolower($endung));
                }
            }
            
            $show = common::info(_artikel_added, "?admin=artikel");
        }
    break;
    case 'edit':
        $get = common::$sql['default']->fetch("SELECT * FROM `{prefix_artikel}` WHERE `id` = ?;",array(intval($_GET['id'])));
        $qryk = common::$sql['default']->select("SELECT `id`,`kategorie` FROM `{prefix_newskat}`;"); $kat = '';
        foreach($qryk as $getk) {
            $sel = ($get['kat'] == $getk['id'] ? 'selected="selected"' : '');
            $kat .= show(_select_field, array("value" => $getk['id'], "sel" => $sel, "what" => stringParser::decode($getk['kategorie'])));
        }

        $artikelimage = ""; $delartikelpic = "";
        foreach(array("jpg", "gif", "png") as $tmpendung) {
            if(file_exists(basePath."/inc/images/uploads/artikel/".intval($_GET['id']).".".$tmpendung)) {
                $artikelimage = common::img_size('inc/images/uploads/artikel/'.intval($_GET['id']).'.'.$tmpendung)."<br /><br />";
                $delartikelpic = '<a href="?admin=artikel&do=delartikelpic&id='.$_GET['id'].'">'._artikelpic_del.'</a><br /><br />';
            }
        }

        $do = show(_artikel_edit_link, array("id" => $_GET['id']));
        $show = show($dir."/artikel_form", array("head" => _artikel_edit,
                                                 "nautor" => _autor,
                                                 "autor" => common::autor(common::$userid),
                                                 "nkat" => _news_admin_kat,
                                                 "preview" => _preview,
                                                 "kat" => $kat,
                                                 "do" => $do,
                                                 "ntitel" => _titel,
                                                 "titel" => stringParser::decode($get['titel']),
                                                 "artikeltext" => stringParser::decode($get['text']),
                                                 "link1" => stringParser::decode($get['link1']),
                                                 "link2" => stringParser::decode($get['link2']),
                                                 "link3" => stringParser::decode($get['link3']),
                                                 "url1" => stringParser::decode($get['url1']),
                                                 "url2" => stringParser::decode($get['url2']),
                                                 "url3" => stringParser::decode($get['url3']),
                                                 "ntext" => _eintrag,
                                                 "error" => "",
                                                 "button" => _button_value_edit,
                                                 "linkname" => _linkname,
                                                 "aimage" => _artikel_userimage,
                                                 "n_artikelpic" => $artikelimage,
                                                 "delartikelpic" => $delartikelpic,
                                                 "nurl" => _url));
    break;
    case 'editartikel':
        if(isset($_POST)) {
            common::$sql['default']->update("UPDATE `{prefix_artikel}` SET `kat` = ?, `titel` = ?, `text` = ?, `link1` = ?, "
            . "`link2` = ?, `link3` = ?, `url1` = ?, `url2` = ?, `url3` = ? WHERE `id` = ?;",
            array(intval($_POST['kat']),stringParser::encode($_POST['titel']),stringParser::encode($_POST['artikel']),stringParser::encode($_POST['link1']),
                stringParser::encode($_POST['link2']),stringParser::encode($_POST['link3']),stringParser::encode(common::links($_POST['url1'])),
                stringParser::encode(common::links($_POST['url2'])),stringParser::encode(common::links($_POST['url3'])),intval($_GET['id'])));

            if(isset($_FILES['artikelpic']['tmp_name']) && !empty($_FILES['artikelpic']['tmp_name'])) {
                foreach(array("jpg", "gif", "png") as $tmpendung) {
                    if(file_exists(basePath."/inc/images/uploads/artikel/".intval($_GET['id']).".".$tmpendung))
                        @unlink(basePath."/inc/images/uploads/artikel/".intval($_GET['id']).".".$tmpendung);
                }

                //Remove minimize
                $files = common::get_files(basePath."/inc/images/uploads/artikel/",false,true,array("jpg", "gif", "png"));
                if($files) {
                    foreach ($files as $file) {
                        if(preg_match("#".intval($_GET['id'])."(.*?).(gif|jpg|jpeg|png)#",strtolower($file))!= FALSE) {
                            $res = preg_match("#".intval($_GET['id'])."_(.*)#",$file,$match);
                            if(file_exists(basePath."/inc/images/uploads/artikel/".intval($_GET['id'])."_".$match[1]))
                                @unlink(basePath."/inc/images/uploads/artikel/".intval($_GET['id'])."_".$match[1]);
                        }
                    }
                }

                $endung = explode(".", $_FILES['artikelpic']['name']);
                $endung = strtolower($endung[count($endung)-1]);
                move_uploaded_file($_FILES['artikelpic']['tmp_name'], basePath."/inc/images/uploads/artikel/".intval($_GET['id']).".".strtolower($endung));
            }

            $show = common::info(_artikel_edited, "?admin=artikel");
        }
    break;
    case 'delete':
        common::$sql['default']->delete("DELETE FROM `{prefix_artikel}` WHERE `id` = ?;",array(intval($_GET['id'])));
        common::$sql['default']->delete("DELETE FROM `{prefix_acomments}` WHERE `artikel` = ?;",array(intval($_GET['id'])));

        //Remove Pic
        foreach(array("jpg", "gif", "png") as $tmpendung) {
            if(file_exists(basePath."/inc/images/uploads/artikel/".intval($_GET['id']).".".$tmpendung))
                @unlink(basePath."/inc/images/uploads/artikel/".intval($_GET['id']).".".$tmpendung);
        }

        //Remove minimize
        $files = common::get_files(basePath."/inc/images/uploads/artikel/",false,true,array("jpg", "gif", "png"));
        if($files) {
            foreach ($files as $file) {
                if(preg_match("#".intval($_GET['id'])."(.*?).(gif|jpg|jpeg|png)#",strtolower($file))!= FALSE) {
                    $res = preg_match("#".intval($_GET['id'])."_(.*)#",$file,$match);
                    if(file_exists(basePath."/inc/images/uploads/artikel/".intval($_GET['id'])."_".$match[1]))
                        @unlink(basePath."/inc/images/uploads/artikel/".intval($_GET['id'])."_".$match[1]);
                }
            }
        }

        $show = common::info(_artikel_deleted, "?admin=artikel");
    break;
    case 'delartikelpic':
        //Remove Pic
        foreach(array("jpg", "gif", "png") as $tmpendung) {
            if(file_exists(basePath."/inc/images/uploads/artikel/".intval($_GET['id']).".".$tmpendung))
                @unlink(basePath."/inc/images/uploads/artikel/".intval($_GET['id']).".".$tmpendung);
        }

        //Remove minimize
        $files = common::get_files(basePath."/inc/images/uploads/artikel/",false,true,array("jpg", "gif", "png"));
        if($files) {
            foreach ($files as $file) {
                if(preg_match("#".intval($_GET['id'])."(.*?).(gif|jpg|jpeg|png)#",strtolower($file))!= FALSE) {
                    $res = preg_match("#".intval($_GET['id'])."_(.*)#",$file,$match);
                    if(file_exists(basePath."/inc/images/uploads/artikel/".intval($_GET['id'])."_".$match[1]))
                        @unlink(basePath."/inc/images/uploads/artikel/".intval($_GET['id'])."_".$match[1]);
                }
            }
        }

        $show = common::info(_newspic_deleted, "?admin=artikel&do=edit&id=".intval($_GET['id'])."");
    break;
    case 'public':
        if(isset($_GET['what']) && $_GET['what'] == 'set')
            common::$sql['default']->update("UPDATE `{prefix_artikel}` SET `public` = 1, `datum`  = ? WHERE `id` = ?",array(time(),intval($_GET['id'])));
        else
            common::$sql['default']->update("UPDATE `{prefix_artikel}` SET `public` = 0 WHERE `id` = ?;",array(intval($_GET['id'])));

        header("Location: ?admin=artikel");
    break;
    default:
        $qry = common::$sql['default']->select("SELECT * FROM `{prefix_artikel}` ".common::orderby_sql(array("titel","datum","autor"),'ORDER BY `public` ASC, `datum` DESC')." LIMIT ".($page - 1)*settings::get('m_adminartikel').",".settings::get('m_adminartikel').";");
        foreach($qry as $get) {
            $edit = show("page/button_edit_single", array("id" => $get['id'],
                                                          "action" => "admin=artikel&amp;do=edit",
                                                          "title" => _button_title_edit));

            $delete = show("page/button_delete_single", array("id" => $get['id'],
                                                              "action" => "admin=artikel&amp;do=delete",
                                                              "title" => _button_title_del,
                                                              "del" => _confirm_del_artikel));

            $titel = show(_artikel_show_link, array("titel" => common::cut(stringParser::decode($get['titel']),settings::get('l_newsadmin')), "id" => $get['id']));
            $public = ($get['public'] ? '<a href="?admin=artikel&amp;do=public&amp;id='.$get['id'].'&amp;what=unset"><img src="../inc/images/public.gif" alt="" title="'._non_public.'" /></a>'
                    : '<a href="?admin=artikel&amp;do=public&amp;id='.$get['id'].'&amp;what=set"><img src="../inc/images/nonpublic.gif" alt="" title="'._public.'" /></a>');

            $datum = empty($get['datum']) ? _no_public : date("d.m.y H:i", $get['datum'])._uhr;
            $class = ($color % 2) ? "contentMainSecond" : "contentMainFirst"; $color++;
            $show .= show($dir."/admin_show", array("date" => $datum,
                                                    "titel" => $titel,
                                                    "class" => $class,
                                                    "autor" => common::autor($get['autor']),
                                                    "intnews" => "",
                                                    "sticky" => "",
                                                    "public" => $public,
                                                    "edit" => $edit,
                                                    "delete" => $delete));
        }

        if(empty($show))
            $show = '<tr><td colspan="6" class="contentMainSecond">'._no_entrys.'</td></tr>';

        $entrys = common::cnt('{prefix_artikel}');
        $nav = common::nav($entrys,settings::get('m_adminnews'),"?admin=artikel".(isset($_GET['show']) ? $_GET['show'] : '').common::orderby_nav());
        $show = show($dir."/admin_news", array("head" => _artikel,
                                               "nav" => $nav,
                                               "order_autor" => common::orderby('autor'),
                                               "order_date" => common::orderby('datum'),
                                               "order_titel" => common::orderby('titel'),
                                               "show" => $show,
                                               "val" => "artikel",
                                               "add" => _artikel_add));
    break;
}