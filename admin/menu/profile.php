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
$where = $where.': '._profile_head;

switch ($do) {
    case 'add':
        $show = show($dir."/form_profil", array("head" => _profile_add_head,
                                                "name" => _profile_name,
                                                "type" => _profile_type,
                                                "value" => _button_value_add,
                                                "kat" => _profile_kat,
                                                "form_kat" => _profile_kat_dropdown,
                                                "form_type" => _profile_type_dropdown)); 
    break;
    case 'addprofile':
        if(empty($_POST['name'])) {
            $show = common::error(_profil_no_name,1);
        } elseif($_POST['kat']=="lazy") {
            $show = common::error(_profil_no_kat,1);
        } elseif($_POST['type']=="lazy") {
            $show = common::error(_profil_no_type,1);
        } else {
            common::$sql['default']->insert("INSERT INTO `{prefix_profile}` SET `name` = '".stringParser::encode($_POST['name'])."', `type` = '".intval($_POST['type'])."', `kid`  = '".intval($_POST['kat'])."'");
            $insID = common::$sql['default']->lastInsertId();
            $feldname = "custom_".$insID;

            common::$sql['default']->update("UPDATE `{prefix_profile}` SET `feldname` = '".$feldname."' WHERE id = '".intval($insID)."'");
            common::$sql['default']->query("ALTER TABLE `{prefix_users}` ADD `".$feldname."` varchar(249) NOT NULL DEFAULT ''");
            $show = common::info(_profile_added,"?admin=profile");
        }
    break;
    case 'delete':
        $get = common::$sql['default']->fetch("SELECT feldname FROM `{prefix_profile}` WHERE id = '".intval($_GET['id'])."'");
        common::$sql['default']->query("ALTER TABLE `{prefix_users}` DROP `".$get['feldname']."`");
        common::$sql['default']->delete("DELETE FROM `{prefix_profile}` WHERE id = '".intval($_GET['id'])."'");
        $show = common::info(_profil_deleted, "?admin=profile");
    break;
    case 'edit':
        $get = common::$sql['default']->fetch("SELECT `shown`,`kid`,`type` FROM `{prefix_profile}` WHERE `id` = ?;",array(intval($_GET['id'])));
        $shown = str_replace("<option value='".$get['shown']."'>", "<option selected=\"selected\" value='".$get['shown']."'>", _profile_shown_dropdown);
        $kat = str_replace("<option value='".$get['kid']."'>", "<option selected=\"selected\" value='".$get['kid']."'>", _profile_kat_dropdown);
        $type = str_replace("<option value='".$get['type']."'>", "<option selected=\"selected\" value='".$get['type']."'>", _profile_type_dropdown);
        $show = show($dir."/form_profil_edit", array("p_name" => stringParser::decode($get['name']),
                                                     "id" => $_GET['id'],
                                                     "value" => _button_value_edit,
                                                     "form_shown" => $shown,
                                                     "form_kat" => $kat,
                                                     "form_type" => $type,
                                                     "head" => _profile_edit_head));
    break;
    case 'editprofil':
        if(empty($_POST['name'])) {
            $show = common::error(_profil_no_name,1);
        } else {
            common::$sql['default']->update("UPDATE `{prefix_profile}` SET `name` = ?, `kid` = ?, `type` = ?, `shown` = ? WHERE id = ?;",
                    array(stringParser::encode($_POST['name']),intval($_POST['kat']),
                        intval($_POST['type']),intval($_POST['shown']),intval($_GET['id'])));

            $show = common::info(_profile_edited,"?admin=profile");
        }
    break;
    case 'shown':
        $get = common::$sql['default']->fetch("SELECT `id`,`shown` FROM `{prefix_profile}` WHERE `id` = ?;",array(intval($_GET['id'])));
        if(common::$sql['default']->rowCount()) {
            common::$sql['default']->update("UPDATE `{prefix_profile}` SET `shown` = ? WHERE id = ?;",array(($get['shown'] ? 0 : 1),$get['id']));
            header("Location: ?admin=profile");
        }
    break;
    default:
        $qry = common::$sql['default']->select("SELECT * FROM `{prefix_profile}` ORDER BY name");
        $show_about = ""; $show_clan = ""; $show_contact = ""; $show_favos = ""; $show_hardware = "";
        foreach($qry as $get) {
            $shown = ($get['shown'] == 1)
                ? '<a href="?admin=profile&amp;do=shown&amp;id='.$get['id'].'"><img src="../inc/images/yes.gif" alt="" title="'._non_public.'" /></a>'
                : '<a href="?admin=profile&amp;do=shown&amp;id='.$get['id'].'"><img src="../inc/images/no.gif" alt="" title="'._public.'" /></a>';

            $class = ($color % 2) ? "contentMainSecond" : "contentMainFirst"; $color++;
            $edit = show("page/button_edit_single", array("id" => $get['id'],
                                                          "action" => "admin=profile&amp;do=edit",
                                                          "title" => _button_title_edit));

            $delete = show("page/button_delete_single", array("id" => $get['id'],
                                                              "action" => "admin=profile&amp;do=delete",
                                                              "title" => _button_title_del,
                                                              "del" => _confirm_del_profil));

            $show_n = show($dir."/profil_show", array("class" => $class,
                                                      "name" => stringParser::decode($get['name']),
                                                      "type" => constant('_profile_type_'.$get['type']),
                                                      "shown" => $shown,
                                                      "edit" => $edit,
                                                      "del" => $delete));

            switch($get['kid']) {
                case 1: $show_about .= $show_n; break;
                case 2: $show_clan .= $show_n; break;
                case 3: $show_contact .= $show_n; break;
                case 4: $show_favos .= $show_n; break;
                case 4: $show_hardware .= $show_n; break;
            }
        }

        if(empty($show_about)) {
            $show_about = show(_no_entrys_found, array("colspan" => "5"));
        }
        
        if(empty($show_clan)) {
            $show_clan = show(_no_entrys_found, array("colspan" => "5"));
        }
        
        if(empty($show_contact)) {
            $show_contact = show(_no_entrys_found, array("colspan" => "5"));
        }
        
        if(empty($show_favos)) {
            $show_favos = show(_no_entrys_found, array("colspan" => "5"));
        }
        
        if(empty($show_hardware)) {
            $show_hardware = show(_no_entrys_found, array("colspan" => "5"));
        }
        
        $show = show($dir."/profil", array("show_about" => $show_about,
                                           "show_clan" => $show_clan,
                                           "show_contact" => $show_contact,
                                           "show_favos" => $show_favos,
                                           "show_hardware" => $show_hardware));
    break;
}