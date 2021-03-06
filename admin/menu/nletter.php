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

    $where = $where.': '._nletter;
        if($do == 'preview')
    {
      $show = show($dir."/nletter_prev", array("head" => _nletter_prev_head,
                                               "text" => bbcode_nletter($_POST['eintrag'])));
      exit('<table class="mainContent" cellspacing="1">'.$show.'</table>');
    } elseif($do == "send") {
        if(empty($_POST['eintrag']) || $_POST['to'] == "-")
          {
            if(empty($_POST['eintrag'])) $error = _empty_eintrag;
            elseif($_POST['to'] == "-") $error = _empty_to;

            $error = show("errors/errortable", array("error" => $error));

            $qry = common::$sql['default']->select("SELECT id,name FROM `{prefix_groups}` ORDER BY name");
            foreach($qry as $get) {
              if($_POST['to'] == $get['id']) $selsq = 'selected="selected"';
              else $selsq = "";

              $squads .= show(_to_squads, array("id" => $get['id'],
                                                "sel" => $selsq,
                                                "name" => stringParser::decode($get['name'])));
            }

        if($_POST['to'] == "reg") $selr = 'selected="selected"';
        elseif($_POST['to'] == "member") $selm = 'selected="selected"';
        elseif($_POST['to'] == "leader") $sell = 'selected="selected"';

            $show = show($dir."/nletter", array("von" => common::$userid,
                                                "an" => _to,
                                                "who" => _msg_global_who,
                                                "reg" => _msg_global_reg,
                                                "selr" => $selr,
                                                "selm" => $selm,
                                                "sell" => $sell,
                                                "value" => _button_value_nletter,
                                                "preview" => _preview,
                                                "allmembers" => _msg_global_all,
                                                "all_leader" => _msg_all_leader,
                                                "leader" => _msg_leader,
                                                "squad" => _msg_global_squad,
                                                "squads" => $squads,
                                                "posteintrag" => stringParser::decode($_POST['eintrag']),
                                                "titel" => _nletter_head,
                                                "nickhead" => _nick,
                                                "bbcodehead" => _bbcode,
                                                "error" => $error,
                                                "eintraghead" => _eintrag));
          } else {
        if($_POST['to'] == "reg")
        {
                  $message = show(common::bbcode_email(settings::get('eml_nletter')), array("text" => bbcode_nletter($_POST['eintrag'])));
                  $subject =stringParser::decode(settings::get('eml_nletter_subj'));

          $qry = common::$sql['default']->select("SELECT email FROM `{prefix_users}` WHERE nletter = 1");
          foreach($qry as $get) {
              common::sendMail(stringParser::decode($get['email']),$subject,$message);
          }

            common::$sql['default']->update("UPDATE `{prefix_userstats}`
                         SET `writtenmsg` = writtenmsg+1
                         WHERE user = ".intval(common::$userid));

              $show = common::info(_msg_reg_answer_done, "?admin=nletter");

        } elseif($_POST['to'] == "member") {
          $message = show(common::bbcode_email(settings::get('eml_nletter')), array("text" => bbcode_nletter($_POST['eintrag'])));
                  $subject =stringParser::decode(settings::get('eml_nletter_subj'));

          $qry = common::$sql['default']->select("SELECT email FROM `{prefix_users}` WHERE level >= 2");
          foreach($qry as $get) {
              common::sendMail(stringParser::decode($get['email']),$subject,$message);
          }

            common::$sql['default']->update("UPDATE `{prefix_userstats}`
                        SET `writtenmsg` = writtenmsg+1
                        WHERE user = ".intval(common::$userid));

              $show = common::info(_msg_member_answer_done, "?admin=nletter");
        } else {
          $message = show(common::bbcode_email(settings::get('eml_nletter')), array("text" => bbcode_nletter($_POST['eintrag'])));
                  $subject =stringParser::decode(settings::get('eml_nletter_subj'));

          $qry = common::$sql['default']->select("SELECT s2.email FROM `{prefix_groupuser}` AS s1
                     LEFT JOIN `{prefix_users}` AS s2
                     ON s1.user = s2.id
                     WHERE s1.group = '".$_POST['to']."'");
          foreach($qry as $get) {
              common::sendMail(stringParser::decode($get['email']),$subject,$message);
          }

            common::$sql['default']->update("UPDATE `{prefix_userstats}`
                          SET `writtenmsg` = writtenmsg+1
                          WHERE user = ".intval(common::$userid));

              $show = common::info(_msg_squad_answer_done, "?admin=nletter");
        }
      }
    } else {
          $qry = common::$sql['default']->select("SELECT id,name FROM `{prefix_groups}` ORDER BY name"); $squads = '';
          foreach($qry as $get) {
              $squads .= show(_to_squads, array("id" => $get['id'],
                                                "sel" => "",
                                                "name" => stringParser::decode($get['name'])));
          }

          $show = show($dir."/nletter", array("von" => common::$userid,
                                              "an" => _to,
                                              "selr" => "",
                                              "selm" => "",
                                              "who" => _msg_global_who,
                                              "squads" => $squads,
                                              "preview" => _preview,
                                              "reg" => _msg_global_reg,
                                              "allmembers" => _msg_global_all,
                                              "all_leader" => _msg_all_leader,
                                              "leader" => _msg_leader,
                                              "squad" => _msg_global_squad,
                                              "titel" => _nletter_head,
                                              "value" => _button_value_nletter,
                                              "nickhead" => _nick,
                                              "bbcodehead" => _bbcode,
                                              "eintraghead" => _eintrag,
                                              "error" => "",
                                              "posteintrag" => ""));
      }