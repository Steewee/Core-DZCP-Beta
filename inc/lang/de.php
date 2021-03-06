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

define('_lang_de', 'Deutsch');
define('_lang_uk', 'Englisch');

## ADDED / REDEFINED FOR 1.7.0
define('_server_ip', 'Server-IP');
define('_aktion', 'Aktion');
define('_config_activate_user', 'User aktivieren');
define('_profil_admin_locked', 'Account ist nicht aktiviert');
define('_profil_locked', 'Der Account ist noch nicht aktiviert, <a href="?index=user&action=akl&do=send" target="_self">&lt; Aktivierungs-Mail senden &gt;</a>');
define('_profil_closed', 'Der Account ist gesperrt');
define('_admin_akl_regist_subj', 'Betreff: Registrierungs Aktivierungs-eMail');
define('_admin_akl_regist', 'Registrierungs Aktivierungs-eMail Template');
define('_reg_akl_invalid', 'Dieser Aktivierungslink ist nicht mehr g&uuml;ltig');
define('_reg_akl_valid', 'Dein Account wurde aktiviert');
define('_reg_akl_sended', 'Dein Aktivierungslink wurde an "[email]" versandt, schau bitte in dein E-Mail Postfach');
define('_reg_akl_email_nf', 'Es existiert kein Account mit dieser E-Mail Addresse');
define('_reg_akl_locked', 'Der Account ist gesperrt und kann nicht mehr aktiviert werden');
define('_reg_akl_activated', 'Dein Account ist bereits aktiviert');
define('_info_reg_valid_akl', 'Du hast dich erfolgreich registriert!<br /><br />Bitte aktiviere deinen Account &uuml;ber die Aktivierungs-eMail, die wir dir an deine E-Mail Adresse gesendet haben.<br /><br />Deine Zugangsdaten wurden dir an deine E-Mail Adresse "[email]" versandt.');
define('_info_reg_valid_akl_ad', 'Du hast dich erfolgreich registriert!<br /><br />Deinen Account wird nach einer Pr&uuml;fung durch die Administratoren dieser Seite aktiviert.<br /><br />Deine Zugangsdaten wurden dir an deine E-Mail Adresse "[email]" versandt.');
define('_button_value_activate', 'Aktivieren');
define('_activate_code', 'Aktivierungscode');
define('_activate_head', 'Account aktivieren');
define('_perm_activateusers', 'Account Aktivierungen verwalten');
define('_admin_akl_sended', 'gesendet');
define('_admin_akl_activated', 'Aktivierungen');
define('_actived', 'User Account wurde aktiviert');
define('_button_title_akl', 'Account aktivieren');
define('_admin_akl_resend', 'Aktivierungslink wurde an "[email]" versandt.');
define('_akl', 'Aktivierungsmails');
define('_akl_info', 'Sollen Aktivierungsmails bei Neuregistrierungen verwendet werden');
define('_akl_send', 'Aktivierungsmail senden');
define('_akl_only_admin', 'Nur &uuml;ber Administrator');
define('_button_activate_user', 'User aktivieren');
define('_button_del_user', 'User l&ouml;schen');
define('_users_deleted', 'User gel&ouml;scht');
define('_actived_all', 'User Accounts wurden aktiviert');
define('_delete_text', 'L&ouml;schen');
define('_config_c_cache' , 'Cache');
define('_config_c_cache_provider' , 'Cache Provider');
define('_config_c_cache_mem_host' , 'Memcache Host');
define('_config_c_cache_mem_port' , 'Memcache Port');
define('_default', 'Standard');
define('_smtp_host', 'SMTP Host');
define('_smtp_port', 'SMTP Port');
define('_smtp_username', 'SMTP Username');
define('_smtp_passwort', 'SMTP Passwort');
define('_smtp_tls_ssl', 'Verschl&uuml;sselung');
define('_smtp_sendmail_path', 'Sendmail Path');
define('_admin_eml_config_head', 'E-Mail Einstellungen');
define('_admin_eml_config_ext', 'Mail-Erweiterung');
define('_feeds', 'News Feeds *rss');
define('_feeds_info', 'Schaltet das automatische generieren von RSS Feeds an oder aus');
define('_pwd_encoder_algorithm', 'Algorithmus');
define('_pwd_encoder', 'Passwort-Hash Algorithmus');
define('_pwd_encoder_info', 'Welcher Passwort-Hash Algorithmus soll verwendet werden, Standard ist *SHA256');
define('_iban', 'IBAN');
define('_bic', 'BIC');
define('_login_head_admin', 'Administrator Login');
define('_no_entrys', 'Keine Eintr&auml;ge');
define('_profil_edit_almgr_link', '<a href="?action=editprofile&amp;show=almgr">Autologin editieren</a>');
define('_almgrhead', 'Autologin verwalten');
define('_almgr_host', 'Host');
define('_almgr_ip', 'IP-Adresse');
define('_almgr_create', 'Angelegt');
define('_almgr_lused', 'Verwendet');
define('_almgr_expires', 'G&uuml;ltig bis');
define('_almgr_name', 'Ger&auml;tename');
define('_almgr_edit_head', 'Autologin bearbeiten');
define('_almgr_ssid', 'Session-ID');
define('_almgr_pkey', 'Permanent-Key');
define('_almgr_editd', 'Autologin erfolgreich bearbeitet');
define('_almgr_add', '<a href="?action=editprofile&amp;show=almgr&amp;do=self_add">Dieses Ger&auml;t hinzuf&uuml;gen</a>');
define('_almgr_remove', '<a href="?action=editprofile&amp;show=almgr&amp;do=self_remove">Dieses Ger&auml;t entfernen</a>');
define('_info_almgr_deletet', 'Automatische Anmeldung wurde erfolgreich entfernt');
define('_info_almgr_self_deletet', 'Dieses Ger&auml;t wurde erfolgreich entfernt');
define('_info_almgr_self_added', 'Dieses Ger&auml;t wurde erfolgreich eingetragen');
define('_profile_access_error', 'Dieses Profil ist nur Mitgliedern zug&auml;nglich');
define('_pedit_visibility_profile', 'Eigenes Profil');
define('_paginator_previous', 'Zur&uuml;ck');
define('_paginator_next', 'Weiter');
define('_admin_bezeichnung', 'Bezeichnung');
define('_custom_game_icon', 'Custom-Icon');
define('_custom_game_icon_none', 'Kein Custom-Icon verwenden');
define('_addons', 'Add-ons');
define('_capcha_sound_info', 'Klicke um das Audio-CAPTCHA abspielen');
define("_notification_error", 'Fehler');
define("_notification_success", 'Erfolg');
define("_notification_notice", 'Hinweis');
define("_notification_warning", 'Achtung');
define("_notification_custom", 'Benutzerdefiniert');
define("_color", 'Farbe');
define("_description", 'Bezeichnung');
define("_replies", 'Antworten');
define('_no_news_yet', '<tr>
  <td class="contentMainFirst" colspan="[colspan]" align="center">Keine neuen News vorhanden</td>
</tr>');
define('_no_entrys_found', '<tr>
  <td class="contentMainFirst" colspan="[colspan]" align="center">Keine Eintr&auml;ge gefunden</td>
</tr>');
define('_admin_news_readed', 'Gelesen');
define('_admin_news_refresh', 'Aktualisieren');

//Forum
define("_forum_stats_top5", 'Statistik und Top 5 Posters');
define("_forum_who_is_online", 'Wer ist online?');
define("_forum_last_post", 'Neuesten Beitrag anzeigen');
define("_forum_online_info0", 'Es [t_is] <b>[users]</b> Besucher online: <b>[regs]</b> [t_regs] und <b>[gast]</b> [t_gast] (Basierend auf den Besuchern der letzten [timer] Minuten)');
define("_forum_online_info1", 'Registrierte User');
define("_forum_gast", 'Gast');
define("_forum_gaste", 'G&auml;ste');
define("_forum_regs", 'Mitglieder');
define("_forum_reg", 'Mitglied');
define("_forum_ist", 'ist');
define("_forum_sind", 'sind');
define("_forum_total_posts", 'Beitr&auml;ge');
define("_forum_total_topics", 'Themen');
define("_forum_total_members", 'Mitglieder');
define("_forum_newest_member", 'neuestes Mitglied');
define("_forum_new_thread", 'Neues Thema');
define("_forum_sort_bcc", 'Betreff');
define("_forum_sort_time", 'Erstellungsdatum');
define("_forum_sort_by", 'Sortiere nach');
define("_forum_sort_descending", 'Absteigend');
define("_forum_sort_ascending", 'Aufsteigend');
define("_forum_go", 'Los');
define("_forum_from", 'Von');

//Startpage
define('_profil_startpage', 'Startseite');
define('_config_startpage', 'Startseiten');
define('_perm_startpage', 'Startseiten verwalten');
define('_admin_startpage', 'Startseiten');
define('_admin_startpage_url', 'Ziel URL');
define('_admin_startpage_level', 'Sichtbar ab Level');
define('_admin_startpage_name', 'Name');
define('_admin_startpage_add_head', 'Neue Startseite anlegen');
define('_admin_startpage_edit', 'Startseite bearbeiten');
define('_admin_startpage_added', 'Startseite wurde erfogreich eingetragen');
define('_admin_startpage_deleted', 'Startseite wurde erfogreich gel&ouml;scht');
define('_admin_startpage_editd', 'Startseite wurde erfogreich bearbeitet');
define('_admin_startpage_no_name', 'Du hast keinen Namen eingegeben');
define('_admin_startpage_no_url', 'Du hast keine URL eingegeben');
define('_admin_startpage_add', 'Neue Startseite hinzuf&uuml;gen');

//IP Blocker
define('_ipban_admin_head', 'IP Blocker');
define('_config_ipban', 'IP Blocker');
define('_confirm_del_ipban', 'Eintrag l&ouml;schen');
define('_confirm_enable_ipban', 'Soll die IP-Sperrung f&uuml;r [ip] wieder aktiviert werden');
define('_confirm_disable_ipban', 'Soll die Sperrung der IP: [ip] deaktiviert werden');
define('_ipban_admin_deleted', 'Der IP Ban wurde erfolgreich gel&ouml;scht!');
define('_ipban_new_head', 'Neuen IP Ban hinzuf&uuml;gen');
define('_ipban_admin_added', 'Der neue IP Bann wurde erfolgreich hinzugef&uuml;gt!');
define('_ipban_edit_head', 'IP Ban bearbeiten');
define('_ipban_admin_edited', 'IP Ban wurde erfolgreich bearbeitet!');
define('_ipban_dis', 'Grund / Beschreibung');
define('_ipban_add_new', 'Neuer Eintrag');
define('_ipban_assuredness', 'Zuverl&auml;ssigkeit');
define('_ipban_reports', 'Reports');
define('_ipban_lastten_global', 'Letzten 10 gebanten IPs by Stopforumspam.com');
define('_ipban_lastten_user', 'Letzten 10 gebanten IPs by User');
define('_ipban_search', 'IP Suche');
define('_ipban_error_pip', 'Du kannst keine privaten IP-Adressen sperren!');
define('_ipban_disable', 'IP-Ban deaktivieren');
define('_ipban_enable', 'IP-Ban aktivieren');
define('_ip_empty', 'Keine IP eingegeben!');
define('_total_bans', 'Total Bans');
define('_ipban_head_admin', 'IP-Bans');
define('_perm_ipban', 'IP-Bans verwalten');

## ADDED / REDEFINED FOR 1.6.0 Final
define('_txt_navi_main', 'Hauptnavigation');
define('_txt_navi_clan', 'Clannavigation');
define('_txt_navi_misc', 'Sonstiges');
define('_txt_userarea', 'Benutzerbereich');
define('_txt_vote', 'Umfragen');
define('_txt_partners', 'Partner');
define('_txt_sponsors', 'Sponsoren');
define('_txt_counter', 'Statistik');
define('_txt_l_news', 'Neuigkeiten');
define('_txt_ftopics', 'Forenbeitr&auml;ge');
define('_txt_teams', 'Teams');
define('_txt_template_switch', 'Design &auml;ndern');
define('_txt_events', 'Termine');
define('_txt_kalender', 'Kalender');
define('_txt_l_artikel', 'Artikel');
define('_txt_l_reg', 'neue User');
define('_txt_motm', 'Member of the Moment');
define('_txt_top_dl', 'Top Downloads');
define('_txt_uotm', 'User of the Moment');

define('_config_slideshow', 'Slideshow');
define('_perm_slideshow', 'Slideshow-Bilder verwalten');
define('_slider', 'Slideshow');
define('_slider_admin_add', 'Neues Slideshowbild hinzuf&uuml;gen');
define('_slider_admin_add_done', 'Das Slideshowbild wurde erfolgreich eingef&uuml;gt');
define('_slider_admin_del', 'Soll das Slideshowbild wirklich gel&ouml;scht werden');
define('_slider_admin_del_done', 'Das Slideshowbild wurde erfolgreich gel&ouml;scht');
define('_slider_admin_edit', 'Slideshowbild editieren');
define('_slider_admin_edit_done', 'Die &Auml;nderungen wurden erfolgreich &uuml;bernommen!');
define('_slider_admin_error_empty_bezeichnung', 'Du musst eine Bezeichnung eingeben');
define('_slider_admin_error_empty_url', 'Du musst einen Link hinterlegen');
define('_slider_admin_error_nopic', 'Du musst ein Bild hochladen');
define('_slider_bezeichnung', 'Bezeichnung');
define('_slider_new_window', 'Neues Fenster?');
define('_slider_pic', 'Bild');
define('_slider_desc', 'Beschreibung');
define('_slider_position', 'Position');
define('_slider_position_first', 'als erstes');
define('_slider_position_lazy', '<option value="lazy">- nicht &auml;ndern -</option>');
define('_slider_url', 'URL');
define('_slider_show_title', 'Title anzeigen');
define('_forum_kat', 'Kategorie');

define('_artikel_userimage', 'Eigenes Artikelbild');
define('_artikelpic_del', 'Artikelbild l&ouml;schen?');
define('_artikelpic_deleted', 'Artikelbild erfolgreich gel&ouml;scht');

define('_news_userimage', 'Eigenes Newsbild');
define('_newspic_del', 'Newsbild l&ouml;schen?');
define('_newspic_deleted', 'Newsbild erfolgreich gel&ouml;scht');
define('_max', 'max.');

define('_perm_dlintern','Interne Download einsehen');

define('_config_url_linked_head', 'URLs verlinken');

define('_upload_error', 'Fehler beim hochladen der Datei!');
define('_login_banned', 'Dein Account wurde vom Administrator gesperrt!');
define('_lobby_no_mymessages', '<a href="../user/?action=msg">Du hast keine neuen Nachrichten!</a>');

define('_perm_smileys', 'Smileys verwalten');
define('_perm_protocol', 'Admin Protokoll einsehen');
define('_perm_support', 'Support Seite einsehen');
define('_perm_clear', 'Datenbank aufr&auml;umen');
define('_perm_forumkats', 'Forenkategorien verwalten');
define('_perm_impressum', 'Impressum verwalten');
define('_perm_config', 'Seitenkonfiguration &auml;ndern');
define('_perm_positions', 'User R&auml;nge verwalten');
define('_perm_partners', 'Partner verwalten');
define('_perm_profile', 'Profilfelder verwalten');

define('_dzcp_vcheck', 'Der DZCP Versions Checker informiert dich &uuml;ber neue DZCP Updates und zeigt dir, ob deine Version aktuell ist.<br><br><span class=fontBold>Beschreibung:</span><br><font color=#17D427>Gr&uuml;n:</font>Up to Date!<br><font color=#FFFF00>Gelb:</font> Keine Verbindung zu Server<br><font color=#FF0000>Rot:</font> Es ist ein neues Update verf&uuml;gbar!');

## ADDED / REDEFINED FOR 1.5 Final
define('_id_dont_exist', 'Die von dir angegebene ID existiert nicht!');

## ADDED / REDEFINED FOR 1.5.2
define('_button_title_del_account', 'User-Account l&ouml;schen');
define('_confirm_del_account', 'Moechtest du wirklich dein Benutzeraccount loeschen');
define('_profil_del_account', 'Account l&ouml;schen');
define('_profil_del_admin', '<b>L&ouml;schen nicht m&ouml;glich!</b>');
define('_info_account_deletet', 'Dein Account wurde erfolgreich gel&ouml;scht');
define('_news_get_timeshift', "Zeitversetzte News?");
define('_news_timeshift_from', "News Anzeigen ab:");
define('_placeholder', 'Template Platzhalter');
define('_menu_kats_head', 'Menu Kategorien');
define('_menu_add_kat', 'Neue Menu Kategorie hinzuf&uuml;gen');
define('_confirm_del_menu', 'Soll die Kategorie wirklich gel&ouml;scht werden?');
define('_menu_edit_kat', 'Menu Kategorie editieren');
define('_menukat_updated', 'Die Menu Kategorie wurde erfolgreich editiert!');
define('_menukat_inserted', 'Die Menu Kategorie wurde erfolgreich hinzugef&uuml;gt!');
define('_menukat_deleted', 'Die Menu Kategorie wurde erfolgreich gel&ouml;scht!');
define('_menu_visible', 'sichtbar f&uuml;r Status');
define('_menu_kat_info', 'Die CSS-Klassen f&uuml;r die Links werden automatisch vom Template Platzhalter abgeleitet.<br />z.B. f&uuml;r den Platzhalter <i>[nav_main]</i> lautet die CSS-Klasse <i>a.navMain</i>');
define('_admin_sqauds_roster', 'Team-Roster');
define('_admin_squads_nav_info', 'Hiermit wird ein Direktlink in die Navigation gesetzt, welcher zur Vollansicht des Teams f&uuml;hrt.');
define('_admin_squads_teams', 'Team-Show');
define('_admin_squads_no_navi', 'Nicht einf&uuml;gen');
define('_config_cache_info', 'Hier k&ouml;nenn die Intervalle festgelegt werden, in der der Teamspeak- oder Gameserver neu abgefragt werden. Darunter werden die Daten aus dem Cache gelesen.');
define('_config_direct_refresh', 'Direkte Weiterleitung');
define('_config_direct_refresh_info', 'Wenn aktiviert, wird nach einer Aktion (z.B. Eintr&auml;ge in Forum, News, etc) direkt weitergeleitet, anstatt eine Infonachricht auszugeben.');
define('_eintrag_titel_forum', '<a href="[url]" title="Diesen Beitrag anzeigen"><span class="fontBold">#[postid]</span></a> am [datum] um [zeit]  [edit] [delete]');
define('_eintrag_titel', '<span class="fontBold">#{$postid}</span> am {$datum} um {$zeit}{lang msgID="uhr"} {$edit} {$delete}');
## ADDED / REDEFINED FOR 1.5.1
define('_config_double_post', 'Forum Doppelpost');
define('_config_fotum_vote', 'Forum-Vote');
define('_config_fotum_vote_info', '<center>Zeigt die Forum-Votes auch unter Umfragen an.</center>');
## ADDED / REDEFINED FOR 1.5
define('_search_sites', 'Unterseiten');
define('_search_results', 'Suchergebnisse');
define('_config_useradd_head', 'User anlegen');
define('_config_adduser', 'User hinzuf&uuml;gen');
define('_uderadd_info', 'Der User wurde erfolgreich hinzugef&uuml;gt');
define('_useradd_head', 'Neuen User anlegen');
define('_useradd_about', 'Userdetails');
define('_login_lostpwd', 'Passwort vergessen');
define('_login_signup', 'Registrieren');
define('_config_links', 'Links');
define('_vote_menu_no_vote', 'keine Umfrage eingetragen');
define('_team_logo', 'Team Logo');
define('_sq_banner', 'Teambanner');
define('_forum_abo_title', 'Thema abbonieren');
define('_forum_vote', 'Umfrage');
define('_admin_user_clanhead_info', 'Die Rechte hier k&ouml;nnen <u>zus&auml;tzlich</u> zu den Rechten der User-R&auml;nge vergeben werden.');
define('_config_positions_boardrights', 'interne Forenrechte');
define('_perm_editkalender', 'Kalendereintr&auml;ge  verwalten');
define('_perm_forum', 'Foren Admin');
define('_perm_links', 'Links verwalten');
define('_perm_newsletter', 'Newsletter verschicken');
define('_perm_votesadmin', 'Umfragen verwalten');
define('_perm_artikel', 'Artikel verwalten');
define('_perm_downloads', 'Downloads verwalten');
define('_perm_editor', 'Seitenverwaltung');
define('_perm_editsquads', 'Teams verwalten');
define('_perm_editusers', 'darf User editieren');
define('_perm_intnews', 'interne News lesen');
define('_perm_news', 'Newsverwaltung');
define('_perm_votes', 'interne Umfragen einsehen');
define('_config_positions_rights', 'Rechte');
define('_admin_pos', 'User R&auml;nge');
define('_config_sponsors', 'Sponsoren');
define('_sponsors_admin_head', 'Sponsoren');
define('_sponsors_admin_add', 'Sponsor hinzuf&uuml;gen');
define('_sponsor_added', 'Sponsor erfolgreich hinzugef&uuml;gt!');
define('_sponsor_edited', 'Sponsor erfolgreich editiert!');
define('_sponsor_deleted', 'Sponsor erfolgreich gel&ouml;scht!');
define('_sponsor_name', 'Sponsor');
define('_sponsors_admin_name', 'Name');
define('_sponsors_admin_site', 'Sponsorenseite');
define('_sponsors_admin_addsite', 'Auf Sponsorenseite');
define('_sponsors_admin_add_site', 'Der Banner wird auf der Sponsorenseite angezeigt');
define('_sponsors_admin_upload', 'Bild-Upload');
define('_sponsors_admin_url', 'Oder: Bild-URL');
define('_sponsors_admin_banner', 'Rotation Banner');
define('_sponsors_admin_addbanner', 'In Rotations-Banner');
define('_sponsors_admin_add_banner', 'Der Banner wird oben in den Rotations-Banner aufgenommen');
define('_sponsors_admin_box', 'Sponsoren-Box');
define('_sponsors_admin_addbox', 'In Sponsoren-Box');
define('_sponsors_admin_add_box', 'Der Banner wird in der Sponsoren-Box angezeigt');
define('_sponsors_empty_name', 'Bitte den Namen des Sponsors angeben!');
define('_sponsors_empty_beschreibung', 'Du musst eine Beschreibung angeben!');
define('_sponsors_empty_link', 'Du musst eine Linkadresse angeben!');
define('_public', 'ver&ouml;ffentlichen');
define('_non_public', 'nicht ver&ouml;ffentlichen');
define('_no_public', '<b>unver&ouml;ffentlicht</b>');
define('_no_events', 'keine Events geplant');
define('_config_c_events', 'Men&uuml;: Events');
define('_news_send', 'News einsenden');
define('_news_send_source', 'Quelle');
define('_news_send_titel', 'Newsvorschlag von [nick]');
define('_news_send_note', 'Mitteilung o. Hinweis f&uuml;r die Redaktion');
define('_news_send_done', 'Vielen Dank! Die News wurde erfolgreich an die Redaktion weitergeleitet');
define('_news_send_description', 'Liebe Besucher,<br /><br />mit dem folgenden Formular ist es m&ouml;glich im Netz gefundene, oder selbst erstellte News an uns zu senden. Der von Dir ausgef&uuml;llte Formularinhalt wird dann mittels eines Verteilers an unsere Redakteure weitergeleitet. Bitte bedenke, dass wir jede Einsendung aufbereiten und evtl. genauere Details recherchieren m&uuml;ssen, um die gewohnte Qualit?t unserer News beizubehalten. Dies f?llt uns nat&uuml;rlich leichter, wenn Deine Einsendung bereits viele Einzelheiten aufweist und selbst formulierte Texte beinhaltet. Meldungen die lediglich 1:1 von anderen Seiten kopiert wurden, erschweren unsere Arbeit und verhindern nicht selten eine Ver&ouml;ffentlichung der Einsendung auf unserer Hauptseite.<br /><br />Nat&uuml;rlich sind wir &uuml;ber jede von Dir eingesendete News dankbar und freuen uns &uuml;ber das Engagement unserer Besucher.<br /><br />Vielen Dank im Voraus.<br /><br />Dein Redaktions-Team');
define('_contact_text_sendnews', '
[nick] hat uns ein Newsvorschlag eingesendet!<p>&nbsp;</p><p>&nbsp;</p>
<span class="fontBold">Nick:</span> [nick]<p>&nbsp;</p>
<span class="fontBold">Email:</span> [email]<p>&nbsp;</p>
<span class="fontBold">Quelle:</span> [hp]<p>&nbsp;</p><p>&nbsp;</p>
<span class="fontBold">Titel:</span> [titel]<p>&nbsp;</p><p>&nbsp;</p>
<span class="fontUnder"><span class="fontBold">News:</span></span><p>&nbsp;</p>[text]<p>&nbsp;</p><p>&nbsp;</p>
<span class="fontUnder"><span class="fontBold">Mitteilung oder Hinweis:</span></span><p>&nbsp;</p>[info]');

define('_msg_sendnews_user', '
<tr>
  <td align="center" class="contentMainTop"><span class="fontBold">Damit die anderen Redakteure wissen, dass du diese News ver&ouml;ffentlichen wirst,<br />klicke bitte auf den nachfolgenden Button. Danke</span></td>
</tr>
<tr>
  <td align="center" class="contentMainTop">
    <form action="" method="get" onsubmit="sendMe()">
      <input type="hidden" name="action" value="msg" />
      <input type="hidden" name="do" value="sendnewsdone" />
      <input type="hidden" name="id" value="[id]" />
      <input id="contentSubmit" type="submit" class="submit" value="Best&auml;tigen" />
    </form>
  </td>
</tr>');
define('_msg_sendnews_done', '
<tr>
  <td align="center" class="contentMainTop"><span class="fontRed">Diese News wird/wurde bereits von [user] bearbeitet!!!</span></td>
</tr>');
define('_send_news_done', 'Vielen Dank f&uuml;r das Best&auml;tigen und das einstellen des Newsvoschlags!');
define('_msg_all_leader', "alle Leader & Co-Leader");
define('_msg_leader', "Squad-Leader");
define('_pos_nletter', 'Diese Position in Newsletter an Squadleader und Co-Leader mit einbeziehen');
define('_pwd2', 'Passwort wiederhohlen');
define('_wrong_pwd', 'Die eingegebenen Passw&ouml;rter stimmen nicht &uuml;berein');
define('_info_reg_valid_pwd', 'Du hast dich erfolgreich registriert und kannst dich nun mit deinen Zugangsdaten einloggen!<br /><br />Deine Zugangsdaten wurden dir zur Sicherheit noch an die Emailadresse [email] gesendet.');
define('_profil_pnmail', 'Email bei neuen Nachrichten');
define('_admin_pn_subj', 'Betreff: PN-Email');
define('_admin_pn', 'PN-Email Template');
define('_admin_fabo_npost_subj', 'Betreff: ForenAbo Neuer Post');
define('_admin_fabo_pedit_subj', 'Betreff: ForenAbo Post editiert');
define('_admin_fabo_tedit_subj', 'Betreff: ForenAbo Thema editiert');
define('_admin_fabo_npost', 'ForenAbo Neuer Post Template');
define('_admin_fabo_pedit', 'ForenAbo Post editiert Template');
define('_admin_fabo_tedit', 'ForenAbo Thema editiert Template');
define('_foum_fabo_checkbox', 'Dieses Thema abonnieren und per E-Mail &uuml;ber neue Posts benachrichtigt werden?');
define('_forum_fabo_do', 'E-Mail Benachrichtigung erfolgreich ge&auml;ndert!');
define('_user_link_fabo', '[nick]');
define('_forum_vote_del', 'Umfrage l&ouml;schen');
define('_forum_vote_preview', 'Hier erscheint dann die Umfrage');
define('_forum_spam_text', '[ltext]<p>&nbsp;</p><p>&nbsp;</p><span class="fontBold">Nachtrag von </span>[autor]:<p>&nbsp;</p>[ntext]');
####################################################################################
define('_config_config', 'Allgemeine Einstellungen');
define('_config_dladmin', 'Downloads');
define('_config_editor', 'Seitenverwaltung');
define('_config_dlkats', 'Downloadkategorien');
define('_config_nletter', 'Newsletter');
define('_config_protocol', 'Adminprotokoll');
define('_partnerbuttons_textlink', 'Textlink');
define('_config_forum_subkats_add', '
    <form action="" method="get" onsubmit="DZCP.submitButton()">
      <input type="hidden" name="admin" value="forum" />
      <input type="hidden" name="do" value="newskat" />
      <input type="hidden" name="id" value="[id]" />
      <input id="contentSubmit" type="submit" class="submit" value="Neue Unterkategorie hinzuf&uuml;gen" />
    </form>
');
define('_msg_answer', '
    <form action="" method="get" onsubmit="DZCP.submitButton()">
      <input type="hidden" name="action" value="msg" />
      <input type="hidden" name="do" value="answer" />
      <input type="hidden" name="id" value="[id]" />
      <input id="contentSubmit" type="submit" class="submit" value="Antworten" />
    </form>');
define('_user_new_erase', '<form method="post" action="?action=userlobby"><input type="hidden" name="erase" value="1" /><input id="contentSubmit" type="submit" name="submit" class="submit" value="tempor&auml;re Neuerungen l&ouml;schen" /></form>');
define('_profile_add', '<form action="" method="get" onsubmit="return(DZCP.submitButton())">
      <input type="hidden" name="admin" value="profile" />
      <input type="hidden" name="do" value="add" />
      <input id="contentSubmit" type="submit" class="submit" value="Neues Profilfeld hinzuf&uuml;gen" />
    </form>');
define('_admin_reg_info', 'Hier kannst du einstellen, ob sich jemand f&uuml;r einen der Bereiche registrieren muss um dort etwas tun zu k&ouml;nnen (Beitr&auml;ge schreiben, einen Download herunterladen, etc)');
define('_config_c_floods_what', 'Hier kannst du die Zeit in Sekunden einstellen die ein User warten muss, bis er im jeweiligen Bereich was neues posten darf');
## ADDED FOR 1.4.5
define('_admin_smiley_exists', 'Es ist bereits ein Smiley mit diesem Namen vorhanden!');
## ADDED FOR 1.4.3
define('_download_last_date', 'Zuletzt heruntergeladen');
## EDITED FOR 1.4.1
define('_ulist_normal', 'Rang &amp; Level');
## ADDED FOR 1.4.1
define('_lobby_mymessages', '<a href="../user/?action=msg">Du hast <span class="fontWichtig">[cnt]</span> neue Nachrichten!</a>');
define('_lobby_mymessage', '<a href="../user/?action=msg">Du hast <span class="fontWichtig">[cnt]</span> neue Nachricht!</a>');
## EDIT/ADDED FOR 1.4
//Added
define('_contact_pflichtfeld', '<span class="fontWichtig">*</span> = Pflichtfelder');
define('_protocol_action', 'Aktion');
define('_protocol', 'Adminprotokoll');
define('_button_title_del_protocol', 'Komplettes Protokoll l&ouml;schen!');
define('_protocol_deleted', 'Das komplette Protokoll wurde erfolgreich gel&ouml;scht!');
define('_vote_no_answer', 'Du musst eine Antwort ausw&auml;hlen!');
define('_linkus_admin_edit', 'LinkUs editieren');
define('_config_linkus', 'LinkUs');
define('_urls_linked_info', 'Textlinks werden automatisch in anklickbare Links konvertiert');
define('_sponsoren', 'Sponsoren');
define('_downloads', 'Downloads');
define('_nachrichten', 'Nachrichten');
define('_edit_profile', 'Profil editieren');
define('_user_new_newsc', '&nbsp;&nbsp;<a href="../news/?action=show&amp;id=[id]#lastcomment"><span class="fontWichtig">[cnt]</span> [eintrag] in <span class="fontWichtig">[news]</span></a><br />');
define('_config_c_lartikel', 'Men&uuml;: Last Artikel');
define('_config_hover', 'Mouseover Informationen');
define('_config_seclogin', 'Login Sicherheitsabfrage');
define('_config_hover_standard', 'Standard Informationen einblenden');
define('_config_hover_all', 'Alle Informationen einblenden');
define('_error_vote_show', 'Dies ist eine &ouml;ffentliche Umfrage und kann somit nicht eingesehen werden!');
define('_login_pwd_dont_match', 'Benutzername und/oder Passwort sind ung&uuml;ltig oder der Account wurde gesperrt!');
define('_sq_aktiv', 'Aktiv');
define('_sq_inaktiv', 'Inaktiv');
define('_internal', 'Intern');
define('_sticky', 'Wichtig');
define('_misc', "Sonstige");
define('_all', "Alle");
define('_admin_support_head', 'Support Informationen');
define('_admin_support_info', 'Nachfolgende Informationen bitte bei einer Supportanfrage z.B.im Forum von <a href="http://www.dzcp.de" target="_blank">www.dzcp.de</a> mit angeben, um schneller zu einer L&ouml;sung des Problemes zu kommen!');
define('_config_support', 'Supportinfos');
define('_search_con_or', 'ODER-Verkn&uuml;pfung');
define('_search_con_and', 'UND-Verkn&uuml;pfung');
define('_search_head', 'Suchfunktion');
define('_search_word', 'Suchen nach...');
define('_search_forum_all', 'In allen Foren suchen');
define('_search_forum_hint', '(Durch dr&uuml;cken der \'Strg-Taste\' lassen<br />sich mehrere einzelne Foren ausw&auml;hlen)');
define('_search_for_area', 'Suchbereich');
define('_search_type_full', 'vollst&auml;ndige Suche');
define('_search_type_title', 'nur Topic durchsuchen');
define('_search_type', 'Suchtyp');
define('_search_type_autor', 'Autoren finden');
define('_search_type_text', 'Text und Topic durchsuchen');
define('_search_in', 'Suchen in...');
define('_user_profile_of', 'Userprofil von ');
define('_sites_not_available', 'Die angeforderte Seite existiert nicht!');
define('_wrote', 'schrieb');
define('_voted_head', 'Bereits an der Umfrage teilgenommen');
define('_show_who_voted', 'Zeige User, die bereits abgestimmt haben');
define('_no_live_status', 'Keine Liveabfrage');
define('_comment_edited', 'Der Kommentar wurde erfolgreich editiert!');
define('_comments_edit', 'Kommentar editieren');
define('_forum_post_where_preview', '<a href="javascript:void(0)">[mainkat]</a> <span class="fontBold">Forum:</span> <a href="javascript:void(0)">[wherekat]</a> <span class="fontBold">Thema:</span> <a href="javascript:void(0)">[wherepost]</a>');
define('_aktiv_icon', '<img src="../inc/images/active.gif" alt="" class="icon" />');
define('_inaktiv_icon', '<img src="../inc/images/inactive.gif" alt="" class="icon" />');
define('_pn_write_forum', '<a href="../user/?action=msg&amp;do=pn&amp;id=[id]"><img src="../inc/images/forum_pn.gif" alt="" title="[nick] eine Nachricht schreiben" class="icon" /></a>');
define('_uhr', '&nbsp;Uhr');
define('_kalender_admin_head', 'Kalender - Ereignisse');
define('_smileys_specialchar', 'Es d&uuml;rfen keine Sonder- oder Leerzeichen im BBCode angegeben sein!');
define('_preview', 'Vorschau');
define('_error_edit_post', 'Du bist nicht dazu berechtigt diesen Eintrag zu editieren!');
define('_nletter_prev_head', 'Newslettervorschau');
define('_error_downloads_upload', 'Es gab einen Problem beim Upload (Datei zu gro&szlig;?)');
define('_news_comments_prev', '<a href="javascript:void(0)">0 Kommentare</a>');
define('_only_for_admins', ' (IP ist nur f&uuml;r Admins sichtbar)');
define('_content', 'Content');
define('_rootadmin', 'Seitenadmin');
define('_nletter', 'Newsletter');
define('_subject', 'Betreff');
define('_nletter_head', 'Newsletter verfassen');
define('_squad', 'Team');
define('_confirm_del_vote', 'Soll diese Umfrage wirklich gel&ouml;scht werden?');
define('_confirm_del_dl', 'Soll dieser Download wirklich gel&ouml;scht werden?');
define('_confirm_del_galpic', 'Soll dieses Bild wirklich gel&ouml;scht werden?');
define('_confirm_del_entry', 'Soll dieser Eintrag wirklich gel&ouml;scht werden?');
define('_confirm_del_navi', 'Soll dieser Link wirklich gel&ouml;scht werden?');
define('_confirm_del_profil', 'Soll dieses Profilfeld wirklich gel&ouml;scht werden? \n Alle Usereingaben f&uuml;r dieses Feld gehen dabei verloren!');
define('_confirm_del_smiley', 'Soll dieser Smiley wirklich gel&ouml;scht werden?');
define('_confirm_del_kat', 'Soll diese Kategorie wirklich gel&ouml;scht werden?');
define('_confirm_del_news', 'Soll diese News wirklich gel&ouml;scht werden?');
define('_confirm_del_site', 'Soll diese Seite wirklich gel&ouml;scht werden?');
define('_confirm_del_artikel', 'Soll dieser Artikel wirklich gel&ouml;scht werden?');
define('_confirm_del_team', 'Soll diese Gruppe wirklich gel&ouml;scht werden?');
define('_confirm_del_ranking', 'Soll dieses Ranking wirklich gel&ouml;scht werden?');
define('_confirm_del_link', 'Soll dieser Link wirklich gel&ouml;scht werden?');
define('_confirm_del_sponsor', 'Soll dieser Sponsor wirklich gel&ouml;scht werden?');
define('_confirm_del_kalender', 'Soll dieses Ereignis wirklich gel&ouml;scht werden?');
define('_link_type', 'Linktyp');
define('_sponsor', 'Sponsor');
//-----------------------------------------------
define('_main_info', 'Hier kannst du allgemein Dinge einstellen wie den Seitentitel, das Standardtemplate, die Standardsprache, etc...');
define('_admin_eml_head', 'E-Mail Vorlagen');
define('_admin_eml_info', 'Hier kannst du die Emailtemplates aus verschiedenen Bereichen editieren. Achte darauf, das du die Platzhalter in den Klammern nicht l&ouml;schst!');
define('_admin_reg_subj', 'Betreff: Registrierung');
define('_admin_pwd_subj', 'Betreff: Passwort vergessen');
define('_admin_nletter_subj', 'Betreff: Newsletter');
define('_admin_reg', 'Registrierungstemplate');
define('_admin_pwd', 'Passwort vergessen-Template');
define('_admin_nletter', 'Newslettertemplate');
define('_result', 'Endstand');
define('_opponent', 'Gegner');
define('_played_at', 'Gespielt am');
define('_error_empty_nachricht', 'Du musst eine Nachricht angeben!');
define('_links_empty_text', 'Du musst eine Banneradresse angeben!');
define('_login_secure_help', 'Gib den zweistelligen Zahlencode in das Feld ein um dich zu verifizieren!');
define('_online_head_guests', 'G&auml;ste online');
define('_admin_first', 'als erstes');
define('_admin_squads_nav', 'Navigation');
define('_admin_squad_show_info', '<center>Definiert, ob ein Team in der Team&uuml;bersicht standardm&auml;&szlig;ig ein- oder aufgeklappt ist</center>');
//Edited
define('_dl_getfile', '[file] jetzt herunterladen');
define('_partners_link_add', 'Partnerbutton hinzuf&uuml;gen');
define('_config_forum_kats_add', 'Neue Kategorie hinzuf&uuml;gen');
define('_config_c_lnews', 'Men&uuml;: Last News');
define('_msg_new', 'Neue Nachricht schreiben');
define('_dl_titel', '<span class="fontBold">[name]</span> - [cnt] [file]');
define('_config_artikel', 'Artikel');
define('_config_forum', 'Forenkategorien');
define('_config_gruppen', 'Gruppen');
define('_config_news', 'News-/Artikelkategorien');
define('_config_positions', 'Rangbezeichnungen');
define('_config_allgemein', 'Konfiguration');
define('_config_impressum', 'Impressum');
define('_config_downloads', 'Downloadkategorien');
define('_config_newsadmin', 'News');
define('_config_filebrowser', 'Dateieditor');
define('_config_navi', 'Navigation');
define('_config_online', 'Seitenverwaltung');
define('_config_partners', 'Partnerbuttons');
define('_config_clear', 'Datenbank&nbsp;aufr&auml;umen');
define('_config_smileys', 'Smiley-Editor');
define('_config_profile', 'Profilfelder');
define('_config_votes', 'Umfragen');
define('_config_kalender', 'Kalender');
define('_config_einst', 'Einstellungen');
define('_profil_sig', 'Foren Signatur');
define('_akt_version', 'DZCP Version');
define('_forum_searchlink', '- <a href="../search/">Forensuche</a> -');
define('_msg_deleted', 'Die Nachricht wurde erfolgreich gel&ouml;scht!');
define('_info_reg_valid', 'Du hast dich erfolgreich registriert!<br />Dein Passwort wurde dir an die Emailadresse [email] gesendet.');
define('_edited_by', '<br /><br /><i>zuletzt editiert von {$autor} am {$time} &nbsp;Uhr</i>');
define('_linkus_empty_text', 'Du musst eine Banner-URL angeben!');
define('_empty_news_title', 'Du musst einen Newstitel angeben!');
define('_member_admin_votes', 'Interne Umfragen sehen');
define('_member_admin_votesadmin', 'Admin: Umfragen');
define('_msg_global_all', 'alle Mitglieder');
define('_smileys_info', 'Du kannst alle neuen Smileys auch per FTP in den Ordner <span class="fontItalic">./inc/images/smileys/</span> hochladen! Dabei ist der Dateiname gleich dem des BBCodes. z.B. dzcp.gif = :dzcp:');
define('_pos_empty_kat', 'Du musst eine Rangbezeichnung angeben!');
define('_forum_lastpost', '<a href="?action=showthread&amp;id=[tid]&amp;page=[page]#p[id]"><img src="../inc/images/forum_lpost.gif" alt="" title="Zum letzten Eintrag" class="icon" /></a>');
define('_forum_addpost', '<a href="?action=post&amp;do=add&amp;kid=[kid]&amp;id=[id]"><img src="../inc/images/forum_reply.gif" alt="" title="Neuer Eintrag" class="icon" /></a>');
define('_pn_write', '<a href="../user/?action=msg&amp;do=pn&amp;id=[id]"><img src="../inc/images/pn.gif" alt="" title="[nick] eine Nachricht schreiben" class="icon" /></a>');
//--------------------------------------------\\
define('_error_invalid_regcode', 'Der eingegebene Sicherheitsscode stimmt nicht mit der in der Grafik angezeigten Zeichenfolge &uuml;berein!');
define('_error_invalid_regcode_mathematic', 'Das Rechenergebnis vom Sicherheitscode ist nicht richtig!');
define('_welcome_guest', ' <img src="../inc/images/flaggen/nocountry.gif" alt="" class="icon" /> <a class="welcome" href="../user/?action=register">Gast</a>');
define('_online_head', 'User online');
define('_online_whereami', 'Bereich');
define('_back', '<a href="javascript: history.go(-1)" class="files">zur&uuml;ck</a>');
## EDITED/ADDED FOR v 1.3.3
define('_level_info', 'Beim vergeben des Levels "Admin" kann das Level nur noch &uuml;ber den Root Admin (derjenige, der das Clanportal installiert hat) ge&auml;ndert werden!<br />Ferner hat der Besitzer diesen Levels <span class="fontUnder">uneingeschr&auml;nkten</span> Zugriff auf alle Bereiche!');
## EDITED FOR v 1.3.1
define('_related_links','related Links:');
define('_profil_email2', 'E-mail #2');
define('_profil_email3', 'E-mail #3');
## Allgemein ##
define('_button_title_del', 'L&ouml;schen');
define('_button_title_edit', 'Editieren');
define('_button_title_zitat', 'Diesen Beitrag zitieren');
define('_button_title_comment', 'Diesen Beitrag kommentieren');
define('_button_title_menu', 'ins Menu eintragen');
define('_button_value_add', 'Eintragen');
define('_button_value_addto', 'Hinzuf&uuml;gen');
define('_button_value_edit', 'Editieren');
define('_button_value_search', 'Suchen');
define('_button_value_search1', 'Suche starten');
define('_button_value_vote', 'Abstimmen');
define('_button_value_do_show', 'Nicht anzeigen');
define('_button_value_show', 'Anzeigen');
define('_button_value_send', 'Abschicken');
define('_button_value_reg', 'Registrieren');
define('_button_value_msg', 'Nachricht senden');
define('_button_value_nletter', 'Newsletter abschicken');
define('_button_value_config', 'Konfiguration abspeichern');
define('_button_value_clear', 'Datenbank bereinigen');
define('_button_value_save', 'Speichern');
define('_button_value_upload', 'Hochladen');
define('_editor_from', 'Von');
define('intern', '<span class="fontWichtig">Intern</span>');
define('_comments_head', 'Kommentare');
define('_click_close', 'schlie&szlig;en');
## Begruessungen ##
define('_welcome_18', 'Guten Abend,');
define('_welcome_13', 'Guten Tag,');
define('_welcome_11', 'Mahlzeit,');
define('_welcome_5', 'Guten Morgen,');
define('_welcome_0', 'Gute Nacht,');
## Monate ##
define('_jan', 'Januar');
define('_feb', 'Februar');
define('_mar', 'M&auml;rz');
define('_apr', 'April');
define('_mai', 'Mai');
define('_jun', 'Juni');
define('_jul', 'Juli');
define('_aug', 'August');
define('_sep', 'September');
define('_okt', 'Oktober');
define('_nov', 'November');
define('_dez', 'Dezember');
## Laenderliste ##
define('_country_list', '
<option value="eg"> &Auml;gypten</option>
<option value="et"> &Auml;thopien</option>
<option value="al"> Albanien</option>
<option value="dz"> Algerien</option>
<option value="ao"> Angola</option>
<option value="ar"> Argentinien</option>
<option value="am"> Armenien</option>
<option value="aw"> Aruba</option>
<option value="au"> Australien</option>
<option value="az"> Aserbaidschan</option>
<option value="bs"> Bahamas</option>
<option value="bh"> Bahrain</option>
<option value="bd"> Bangladesh</option>
<option value="bb"> Barbados</option>
<option value="be"> Belgien</option>
<option value="bz"> Belize</option>
<option value="bj"> Benin</option>
<option value="bm"> Bermuda</option>
<option value="bt"> Bhutan</option>
<option value="bo"> Bolivien</option>
<option value="ba"> Bosnien Herzegovina</option>
<option value="bw"> Botswana</option>
<option value="br"> Brasilien</option>
<option value="bn"> Brunei Darussalam</option>
<option value="bg"> Bulgarien</option>
<option value="bf"> Burkina Faso</option>
<option value="bi"> Burundi</option>
<option value="cv"> Cape Verde</option>
<option value="ky"> Cayman Islands</option>
<option value="cl"> Chile</option>
<option value="cn"> China</option>
<option value="ck"> Cook Islands</option>
<option value="cr"> Costa Rica</option>
<option value="ci"> Cote D"Ivoire</option>
<option value="dk"> D&auml;nemark</option>
<option value="de"> Deutschland</option>
<option value="ec"> Ecuador</option>
<option value="er"> Eritrea</option>
<option value="ee"> Estland</option>
<option value="fo"> Faroer Inseln</option>
<option value="fj"> Fidschi</option>
<option value="fi"> Finnland</option>
<option value="fr"> Frankreich</option>
<option value="pf"> French Polynesia</option>
<option value="ga"> Gabon</option>
<option value="ge"> Georgien</option>
<option value="gi"> Gibraltar</option>
<option value="gr"> Griechenland</option>
<option value="uk"> Grossbritannien</option>
<option value="gl"> Gr&ouml;nland</option>
<option value="gp"> Guadeloupe</option>
<option value="gu"> Guam</option>
<option value="gt"> Guatemala</option>
<option value="gy"> Guyana</option>
<option value="ht"> Haiti</option>
<option value="hk"> Hong Kong</option>
<option value="is"> Island</option>
<option value="in"> Indien</option>
<option value="id"> Indonesien</option>
<option value="ir"> Iran</option>
<option value="iq"> Irak</option>
<option value="ie"> Irland</option>
<option value="il"> Israel</option>
<option value="it"> Italien</option>
<option value="jm"> Jamaica</option>
<option value="jp"> Japan</option>
<option value="jo"> Jordan</option>
<option value="yu"> Jugoslavien</option>
<option value="kh"> Kambodscha</option>
<option value="cm"> Kamerun</option>
<option value="ca"> Kanada</option>
<option value="qa"> Katar</option>
<option value="kz"> Kazachstan</option>
<option value="ke"> Kenia</option>
<option value="ki"> Kiribati</option>
<option value="co"> Kolumbien</option>
<option value="cg"> Kongo</option>
<option value="hr"> Kroatien</option>
<option value="cu"> Kuba</option>
<option value="kg"> Kyrgyzstan</option>
<option value="lv"> Lettland</option>
<option value="lb"> Libanon</option>
<option value="ly"> Lybien</option>
<option value="li"> Liechtenstein</option>
<option value="lt"> Litauen</option>
<option value="lu"> Luxemburg</option>
<option value="mo"> Macau</option>
<option value="mk"> Mazedonien</option>
<option value="mg"> Madagaskar</option>
<option value="my"> Malaysia</option>
<option value="ma"> Marocco</option>
<option value="mx"> Mexico</option>
<option value="md"> Moldawien</option>
<option value="mc"> Monaco</option>
<option value="mn"> Mongolei</option>
<option value="ms"> Montserrat</option>
<option value="mz"> Mozambique</option>
<option value="na"> Namibia</option>
<option value="nr"> Nauru</option>
<option value="np"> Nepal</option>
<option value="nc"> Neu Kaledonien</option>
<option value="nz"> Neuseeland</option>
<option value="nl"> Niederlande</option>
<option value="an"> Niederl&auml;ndische Antillen</option>
<option value="kp"> Nord Korea</option>
<option value="nf"> Norfolk Insel</option>
<option value="mp"> N&ouml;rdliche Marianen</option>
<option value="no"> Norwegen</option>
<option value="om"> Oman</option>
<option value="at"> &Ouml;sterreich</option>
<option value="tp"> Ost Timor</option>
<option value="pk"> Pakistan</option>
<option value="pa"> Panama</option>
<option value="py"> Paraguay</option>
<option value="pe"> Peru</option>
<option value="ph"> Philippinen</option>
<option value="pl"> Polen</option>
<option value="pt"> Portugal</option>
<option value="pr"> Puerto Rico</option>
<option value="ro"> Rum&auml;nien</option>
<option value="ru"> Russland</option>
<option value="lc"> Saint Lucia</option>
<option value="pm"> Saint Pierre und Miquelon</option>
<option value="ws"> Samoa</option>
<option value="sa"> Saudi Arabien</option>
<option value="sx"> Schottland</option>
<option value="sl"> Sierra Leone</option>
<option value="sg"> Singapur</option>
<option value="sk"> Slovakei</option>
<option value="si"> Slovenien</option>
<option value="sb"> Salomonen</option>
<option value="so"> Somalia</option>
<option value="za"> S&uuml;d Afrika</option>
<option value="kr"> S&uuml;d Korea</option>
<option value="es"> Spanien</option>
<option value="lk"> Sri Lanka</option>
<option value="sd"> Sudan</option>
<option value="sr"> Suriname</option>
<option value="se"> Schweden</option>
<option value="ch"> Schweiz</option>
<option value="sy"> Syrien</option>
<option value="tw"> Taiwan</option>
<option value="tz"> Tanzania</option>
<option value="th"> Thailand</option>
<option value="tg"> Togo</option>
<option value="to"> Tonga</option>
<option value="tt"> Trinidad und Tobago</option>
<option value="cz"> Tschechien</option>
<option value="tn"> Tunesien</option>
<option value="tr"> Turkei</option>
<option value="tc"> Turks und Caicos Islands</option>
<option value="tv"> Tuvalu</option>
<option value="ug"> Uganda</option>
<option value="ua"> Ukraine</option>
<option value="hu"> Ungarn</option>
<option value="uy"> Uruguay</option>
<option value="us"> USA</option>
<option value="ve"> Venezuela</option>
<option value="va"> Vatikan</option>
<option value="ae"> Vereinigte Arabische Emirate</option>
<option value="vn"> Vietnam</option>
<option value="vg"> Virgin Islands, Britisch</option>
<option value="vi"> Virgin Islands, U.S.</option>
<option value="by"> Wei&szlig;russland</option>
<option value="ye"> Yemen</option>
<option value="zm"> Zambia</option>
<option value="cf"> Zentralafrikan. Republik</option>
<option value="cy"> Zypern</option>');
## Globale Userraenge ##
define('_status_banned', 'gesperrt');
define('_status_unregged', 'unregistriert');
define('_status_user', 'User');
define('_status_trial', 'Trial');
define('_status_member', 'Member');
define('_status_admin', 'Administrator');
## Userliste ##
define('_acc_banned', 'Gesperrt');
define('_ulist_acc_banned', 'Gesperrte Accounts');
## Navigation: Kalender ##
define('_kal_birthday', 'Geburtstag von ');
define('_kal_event', 'Event: ');
## Linkus ##
//-> Allgemein
define('_years', 'Jahre');
define('_year', 'Jahr');
define('_months', 'Monate');
define('_month', 'Monat');
define('_weeks', 'Wochen');
define('_week', 'Woche');
define('_days', 'Tage');
define('_day', 'Tag');
define('_hours', 'Stunden');
define('_hour', 'Stunde');
define('_minutes', 'Minuten');
define('_minute', 'Minute');
define('_seconds', 'Sekunden');
define('_second', 'Sekunde');
//-> Admin
define('_linkus_admin_head', 'Neues LinkUs definieren');
define('_linkus_link', 'Ziellink');
define('_linkus_bsp_target', 'http://www.domain.tld');
define('_linkus_bsp_bannerurl', 'http://www.domain.tld/banner.jpg');
define('_linkus_bsp_desc', 'Beispielclan - Beschreibung');
define('_linkus_beschreibung', 'Title');
define('_linkus_text', 'Bannerlink');
define('_linkus_empty_beschreibung', 'Du musst einen Title-Tag angeben!');
define('_linkus_empty_link', 'Du musst eine Link-URL angeben!');
define('_linkus_added', 'Das LinkUs wurde erfolgreich hinzugef&uuml;gt!');
define('_linkus_edited', 'Das LinkUs wurde erfolgreich editiert!');
define('_linkus_deleted', 'Das LinkUs wurde erfolgreich gel&ouml;scht!');
define('_linkus', 'LinkUs');
## News ##
define('_news_kommentar', 'Kommentar');
define('_news_kommentare', 'Kommentare');
define('_news_archiv', '<a href="?action=archiv">Archiv</a>');
define('_news_comments_write_head', 'Neuen Newskommentar schreiben');
define('_news_archiv_sort', 'Sortieren nach');
define('_news_archiv_head', 'Newsarchiv');
define('_news_kat_choose', 'Kategorie w&auml;hlen');
## Artikel ##
define('_artikel_comments_write_head', 'Neuen Artikelkommentar schreiben');
## Forum ##
define('_forum_head', 'Forum');
define('_forum_topic', 'Topic');
define('_forum_subtopic', 'Untertitel');
define('_forum_lpost', 'Letzter Beitrag');
define('_forum_threads', 'Themen');
define('_forum_thread', 'Thema');
define('_forum_posts', 'Beitr&auml;ge');
define('_forum_cnt_threads', '<span class="fontBold">Anzahl der Themen:</span> [threads]');
define('_forum_cnt_posts', '<span class="fontBold">Anzahl der Posts:</span> [posts]');
define('_forum_admin_head', 'Admin');
define('_forum_admin_addsticky', 'als <span class="fontWichtig">wichtig</span> markieren?');
define('_forum_katname_intern', '<span class="fontWichtig">Intern:</span> [katname]');
define('_forum_sticky', '<span class="fontWichtig">Wichtig:</span>');
define('_forum_subkat_where', '<a href="../forum/">[mainkat]</a> <span class="fontBold">Forum:</span> <a href="?action=show&amp;id=[id]">[where]</a>');
define('_forum_head_skat_search', 'In dieser Kategorie suchen');
define('_forum_head_threads', 'Themen');
define('_forum_replys', 'Antworten');
define("_forum_thread_lpost", '<p class="forumTopic">[date]</p><p class="forumTopic">[nick]<a href="[post_link]" title="[lang_forum_last_post]"><img src="[dir]/images/forum/[img]" border="0"></a>');
define('_forum_new_thread_head', 'Neues Thema erstellen');
define('_empty_topic', 'Du musst ein Topic angeben!');
define('_forum_newthread_successful', 'Das Thema wurde erfolgreich ins Forum eingetragen!');
define('_forum_new_post_head', 'Neuen Forenpost eintragen');
define('_forum_newpost_successful', 'Der Post wurde erfolgreich ins Forum eingetragen!');
define('_posted_by', '<span class="fontBold">&raquo;</span> ');
define('_forum_post_where', '<a href="../forum/">[mainkat]</a> <span class="fontBold">Forum:</span> <a href="?action=show&amp;id=[kid]">[wherekat]</a> <span class="fontBold">Thema:</span> <a href="?action=showthread&amp;id=[tid]">[wherepost]</a>');
define('_forum_lpostlink', 'Letzter Post');
define('_forum_user_posts', '<span class="fontBold">Posts:</span> [posts]');
define('_sig', '<br /><br /><hr />');
define('_error_forum_closed', 'Dieses Thema ist geschlossen!');
define('_forum_search_head', 'Forensuche');
define('_forum_edit_post_head', 'Forenpost editieren');
define('_forum_edit_thread_head', 'Thema editieren');
define('_forum_editthread_successful', 'Das Thema wurde erfolgreich editiert!');
define('_forum_editpost_successful', 'Der Eintrag wurde erfolgreich editiert!');
define('_forum_delpost_successful', 'Der Eintrag wurde erfolgreich gel&ouml;scht!');
define('_forum_admin_open', 'Thema ist ge&ouml;ffnet');
define('_forum_admin_delete', 'Thema l&ouml;schen?');
define('_forum_admin_close', 'Thema ist geschlossen');
define('_forum_admin_moveto', 'Thema verschieben nach:');
define('_forum_admin_thread_deleted', 'Das Thema wurde erfolgreich gel&ouml;scht!');
define('_forum_admin_do_move', 'Das Thema wurde erfolgreich bearbeitet<br />und in die Kategorie <span class="fontWichtig">[kat]</span> verschoben!');
define('_forum_admin_modded', 'Das Thema wurde erfolgreich bearbeitet!');
define('_forum_search_what', 'Suchen nach');
define('_forum_search_kat', 'in Kategorie');
define('_forum_search_suchwort', 'Suchw&ouml;rter');
define('_forum_search_inhalt', 'Inhalt');
define('_forum_search_kat_all', 'allen Kategorien');
define('_forum_search_results', 'Suchergebnisse');
define('_forum_online_head', 'Im Forum online:');
define('_forum_nobody_is_online', 'Zur Zeit ist kein User im Forum online!');
## Kalender ##
//-> Allgemein
define('_kalender_head', 'Kalender');
define('_kalender_month_select', '<option value="[i]" [sel]>[month]</option>');
define('_kalender_year_select', '<option value="[i]" [sel]>[year]</option>');
define('_montag', 'Montag');
define('_dienstag', 'Dienstag');
define('_mittwoch', 'Mittwoch');
define('_donnerstag', 'Donnerstag');
define('_freitag', 'Freitag');
define('_samstag', 'Samstag');
define('_sonntag', 'Sonntag');
//-> Events
define('_kalender_events_head', 'Ereignisse am [datum]');
define('_kalender_uhrzeit', 'Uhrzeit');
//-> Admin
define('_kalender_admin_head_add', 'Ereignis hinzuf&uuml;gen');
define('_kalender_admin_head_edit', 'Ereignis editieren');
define('_kalender_event', 'Ereignis');
define('_kalender_error_no_time', 'Du musst ein Datum und eine Zeit angeben!');
define('_kalender_error_no_title', 'Du musst einen Titel angeben!');
define('_kalender_error_no_event', 'Du musst das Ereignis beschreiben!');
define('_kalender_successful_added', 'Das Ereignis wurde erfolgreich eingetragen!');
define('_kalender_successful_edited', 'Das Ereignis wurde erfolgreich editiert!');
define('_kalender_deleted', 'Das Ereignis wurde erfolgreich gel&ouml;scht!');
## Umfragen ##
define('_error_vote_closed', 'Diese Umfrage ist geschlossen!');
define('_votes_admin_closed', 'Umfrage schlie&szlig;en');
define('_votes_head', 'Umfragen');
define('_votes_stimmen', 'Stimmen');
define('_votes_intern', '<span class="fontWichtig">Intern:</span> ');
define('_votes_results_head', 'Umfrageergebnis');
define('_votes_results_head_vote', 'Antwortm&ouml;glichkeiten');
define('_vote_successful', 'Du hast erfolgreich an der Umfrage teilgenommen!');
define('_votes_admin_head', 'Neue Umfrage hinzuf&uuml;gen');
define('_votes_admin_question', 'Frage');
define('_votes_admin_answer', 'Antwortm&ouml;glichkeit');
define('_empty_votes_question', 'Du musst eine Frage definieren!');
define('_empty_votes_answer', 'Du musst mindestens 2 Antworten definieren!');
define('_votes_admin_intern', 'Interne Umfrage');
define('_vote_admin_successful', 'Die Umfrage wurde erfolgreich eingetragen!');
define('_vote_admin_delete_successful', 'Die Umfrage wurde erfolgreich gel&ouml;scht!');
define('_vote_admin_successful_menu', 'Die Umfrage ist nun im Men&uuml; eingetragen!');
define('_vote_admin_menu_isintern', 'Du kannst keine interne Umfrage ins Men&uuml; setzen!');
define('_vote_legendemenu', 'Umfrage im Men&uuml;?<br />(Icon klicken um die Umfrage ein- oder auszutragen)');
define('_votes_admin_edit_head', 'Umfrage editieren');
define('_vote_admin_successful_edited', 'Die Umfrage wurde erfolgreich editiert!');
define('_vote_admin_successful_menu1', 'Die Umfrage wurde erfolgreich aus dem Men&uuml; ausgetragen!');
define('_error_voted_again', 'Du hast bereits an dieser Umfrage teilgenommen!');
## Links/Sponsoren ##
define('_links_head', 'Links');
define('_links_admin_head', 'Neuen Link hinzuf&uuml;gen');
define('_links_admin_head_edit', 'Link editieren');
define('_links_link', 'Linkadresse');
define('_links_beschreibung', 'Linkbeschreibung');
define('_links_art', 'Linkart');
define('_links_admin_textlink', 'Textlink');
define('_links_admin_bannerlink', 'Bannerlink');
define('_links_text', 'Banneradresse');
define('_links_empty_beschreibung', 'Du musst eine Linkbeschreibung angeben!');
define('_links_empty_link', 'Du musst eine Linkadresse angeben!');
define('_link_added', 'Der Link wurde erfolgreich hinzugef&uuml;gt!');
define('_link_edited', 'Der Link wurde erfolgreich editiert!');
define('_link_deleted', 'Der Link wurde erfolgreich gel&ouml;scht!');
define('_sponsor_head', 'Sponsoren');
## Downloads ##
define('_downloads_head', 'Downloads');
define('_downloads_download', 'Download');
define('_downloads_admin_head', 'Download hinzuf&uuml;gen');
define('_downloads_nofile', '<option value="lazy">- keine Datei -</option>');
define('_downloads_admin_head_edit', 'Download editieren');
define('_downloads_lokal', 'lokale Datei');
define('_downloads_exist', 'Datei');
define('_downloads_name', 'Downloadname');
define('_downloads_url', 'Datei');
define('_downloads_kat', 'Kategorie');
define('_downloads_empty_download', 'Du musst einen Downloadnamen angeben!');
define('_downloads_empty_url', 'Du musst eine Datei angeben!');
define('_downloads_empty_beschreibung', 'Du musst eine Beschreibung angeben!');
define('_downloads_added', 'Der Download wurde erfolreich hinzugef&uuml;gt!');
define('_downloads_edited', 'Der Download wurde erfolgreich editiert!');
define('_downloads_deleted', 'Der Download wurde erfolgreich gel&ouml;scht!');
define('_dl_info', 'Download Informationen');
define('_dl_file', 'Datei');
define('_dl_besch', 'Beschreibung');
define('_dl_info2', 'Datei Informationen');
define('_dl_size', 'Dateigr&ouml;&szlig;e');
define('_dl_speed', 'Geschwindigkeit');
define('_dl_traffic', 'verursachter Traffic');
define('_dl_loaded', 'bisherige Downloads');
define('_dl_date', 'Uploaddatum');
define('_dl_wait', 'Download der Datei: ');
## Teams ##
define('_member_squad_head', 'Teams');
define('_member_squad_no_entrys', '<tr><td align="center"><span class="fontBold">Keine eingetragenen Member</span></td></tr>');
define('_member_squad_weare', 'Wir sind insgesamt <span class="fontBold">[cm] Member</span> und besitzen <span class="fontBold">[cs] Team(s)</span>');
## User ##
define('_profil_head', '<span class="fontBold">Userprofil von [nick]</span> [[profilhits] mal angesehen]');
define('_user_noposi', '<option value="lazy" class="dropdownKat">keine Position</option>');
define('_login_head', 'Login');
define('_new_pwd', 'neues Passwort');
define('_register_head', 'Registrierung');
define('_register_confirm', 'Sicherheitsscode');
define('_register_confirm_add', 'Code eingeben');
define('_lostpwd_head', 'Passwort zuschicken');
define('_profil_edit_head', 'Profil von [nick] editieren');
define('_profil_clan', 'Clan');
define('_profil_pic', 'Picture');
define('_profil_contact', 'Kontakt');
define('_profil_hardware', 'Hardware');
define('_profil_about', '&Uuml;ber mich');
define('_profil_real', 'Name');
define('_profil_city', 'Wohnort');
define('_profil_bday', 'Geburtstag');
define('_profil_age', 'Alter');
define('_profil_hobbys', 'Hobbys');
define('_profil_motto', 'Motto');
define('_profil_hp', 'Homepage');
define('_profil_sex', 'Geschlecht');
define('_profil_board', 'Mainboard');
define('_profil_cpu', 'CPU');
define('_profil_ram', 'RAM');
define('_profil_graka', 'Grafikkarte');
define('_profil_monitor', 'Monitor');
define('_profil_maus', 'Maus');
define('_profil_mauspad', 'Mauspad');
define('_profil_hdd', 'HDD');
define('_profil_headset', 'Headset');
define('_profil_os', 'System');
define('_profil_inet', 'Internet');
define('_profil_job', 'Job');
define('_profil_position', 'Position');
define('_profil_exclans', 'Ex-Clans');
define('_profil_status', 'Status');
define('_aktiv', '<span class=fontGreen>aktiv</span>');
define('_inaktiv', '<span class=fontRed>inaktiv</span>');
define('_male', 'm&auml;nnlich');
define('_female', 'weiblich');
define('_profil_ppic', 'Profilfoto');
define('_profil_gamestuff', 'Gamestuff');
define('_profil_userstats', 'Userstats');
define('_profil_navi_profil', '<a href="?action=user&amp;id=[id]">Profil</a>');
define('_profil_profilhits', 'Profilhits');
define('_profil_forenposts', 'Forenposts');
define('_profil_votes', 'teilgenommene Votes');
define('_profil_msgs', 'versendete Nachrichten');
define('_profil_logins', 'Logins');
define('_profil_registered', 'Registrierungsdatum');
define('_profil_last_visit', 'Letzter Pagebesuch');
define('_profil_pagehits', 'Pagehits');
define('_pedit_visibility', 'Sichtbarkeit/Berechtigungen');
define('_pedit_perm_public', '&Ouml;ffentlich');
define('_pedit_perm_user', 'Nur User');
define('_pedit_perm_member', 'Nur Mitglieder');
define('_pedit_perm_admin', 'Nur Administratoren');
define('_pedit_perm_allow', '<option value="1" selected="selected">Zulassen</option><option value="0">Sperren</option>');
define('_pedit_perm_deny', '<option value="1">Zulassen</option><option value="0" selected="selected">Sperren</option>');
define('_profil_edit_pic', '<a href="../upload/?action=userpic">hochladen</a>');
define('_profil_delete_pic', '<a href="../upload/?action=userpic&amp;do=deletepic">l&ouml;schen</a>');
define('_profil_edit_ava', '<a href="../upload/?action=avatar">hochladen</a>');
define('_profil_delete_ava', '<a href="../upload/?action=avatar&amp;do=delete">l&ouml;schen</a>');
define('_pedit_aktiv', '<option value="1" selected="selected">aktiv</option><option value="0">inaktiv</option>');
define('_pedit_inaktiv', '<option value="1">aktiv</option><option value="0" selected="selected">inaktiv</option>');
define('_pedit_male', '<option value="0">keine Angabe</option><option value="1" selected="selected">m&auml;nnlich</option><option value="2">weiblich</option>');
define('_pedit_female', '<option value="0">keine Angabe</option><option value="1">m&auml;nnlich</option><option value="2" selected="selected">weiblich</option>');
define('_pedit_sex_ka', '<option value="0">keine Angabe</option><option value="1">m&auml;nnlich</option><option value="2">weiblich</option>');
define('_info_edit_profile_done', 'Du hast dein Profil erfolgreich editiert!');
define('_delete_pic_successful', 'Dein Bild wurde erfolgreich gel&ouml;scht!');
define('_no_pic_available', 'Es wurde kein Bild von dir gefunden!');
define('_profil_edit_profil_link', '<a href="?action=editprofile">Profil editieren</a>');
define('_profil_avatar', 'Avatar');
define('_lostpwd_failed', 'Loginname und E-Mailadresse stimmen nicht &uuml;berein!');
define('_lostpwd_valid', 'Es wurde soeben ein neues Passwort generiert und an deine Emailadresse gesendet!');
define('_error_user_already_in', 'Du bist bereits eingeloggt!');
define('_user_is_banned', 'Dein Account wurde vom Admin dieser Seite gesperrt und ist ab jetzt nicht mehr nutzbar!<br />Informiere dich bei einem authorisiertem Mitglied &uuml;ber den genauen Sachverhalt.');
define('_msghead', 'Nachrichtencenter von [nick]');
define('_posteingang', 'Posteingang');
define('_postausgang', 'Postausgang');
define('_msg_title', 'Nachricht');
define('_msg_absender', 'Absender');
define('_msg_empfaenger', 'Empf&auml;nger');
define('_msg_answer_msg', 'Nachricht von [nick]');
define('_msg_sended_msg', 'Nachricht an [nick]');
define('_msg_answer_done', 'Die Nachricht wurde erfolgreich versendet!');
define('_msg_titel', 'Neue Nachricht schreiben');
define('_msg_titel_answer', 'Antworten');
define('_to', 'An');
define('_or', 'oder');
define('_msg_to_just_1', 'Du kannst nur einen Empf&auml;nger angeben!');
define('_msg_not_to_me', 'Du kannst keine Nachricht an dich selber schreiben!');
define('_legende_readed', 'Nachricht wurde vom Empf&auml;nger gelesen?');
define('_legende_msg', 'Neue Nachricht');
define('_msg_from_nick', 'Nachricht von [nick]');
define('_msg_global_reg', 'alle registrierten User');
define('_msg_global_squad', 'einzelne Teams:');
define('_msg_bot', '<span class="fontBold">MsgBot</span>');
define('_msg_global_who', 'Empf&auml;nger');
define('_msg_reg_answer_done', 'Die Nachricht wurde erfolgreich an alle registrierten User versendet!');
define('_msg_member_answer_done', 'Die Nachricht wurde erfolgreich an alle Mitglieder versendet!');
define('_msg_squad_answer_done', 'Die Nachricht wurde erfolgreich an das ausgew&auml;hlte Team versendet!');
define('_buddyhead', 'Buddyverwaltung');
define('_addbuddys', 'Buddies hinzuf&uuml;gen');
define('_buddynick', 'Buddy');
define('_add_buddy_successful', 'Der User wurde erfolgreich als Buddy geadded!');
define('_buddys_legende_addedtoo', 'Der User hat dich auch geadded');
define('_buddys_legende_dontaddedtoo', 'Der User hat dich nicht geadded');
define('_buddys_delete_successful', 'Der User wurde erfolgreich als Buddy gel&ouml;scht!');
define('_buddy_added_msg', 'Der User <span class="fontBold">[user]</span> hat dich soeben als Buddy geadded!');
define('_buddy_title', 'Buddies');
define('_buddy_del_msg', 'Der User <span class="fontBold">[user]</span> hat dich soeben als Buddy gel&ouml;scht!');
define('_ulist_lastreg', 'neuste User');
define('_ulist_online', 'Onlinestatus');
define('_ulist_age', 'Alter');
define('_ulist_sex', 'Geschlecht');
define('_ulist_country', 'Nationalit&auml;t');
define('_ulist_sort', 'Sortieren nach:');
define('_admin_user_edithead', 'Admin: User editieren');
define('_admin_user_clanhead', 'Autorisierungen');
define('_admin_user_squadhead', 'Team');
define('_admin_user_personalhead', 'Pers&ouml;nliches');
define('_admin_user_level', 'Level');
define('_admin_user_edituser', 'User editieren');
define('_admin_user_editsquads', 'Admin: Teams');
define('_admin_user_editkalender', 'Admin: Kalender');
define('_member_admin_newsletter', 'Admin: Newsletter');
define('_member_admin_downloads', 'Admin: Downloads');
define('_member_admin_links', 'Admin: Links');
define('_member_admin_forum', 'Admin: Forum');
define('_member_admin_intforum', 'Internes Forum sehen');
define('_member_admin_news', 'Admin: News');
define('_error_edit_myself', 'Du kannst dich nicht selber editieren!');
define('_error_edit_admin', 'Du darfst keine Admins editieren!');
define('_admin_level_banned', 'Account sperren');
define('_admin_user_identitat', 'Identit&auml;t');
define('_admin_user_get_identitat', '<a href="?action=admin&amp;do=identy&amp;id=[id]">annehmen</a>');
define('_identy_admin', 'Du kannst nicht die Identit&auml;t von einem Admin annehmen!');
define('_admin_squad_del', '<option value="delsq">- User aus dem Team l&ouml;schen -</option>');
define('_admin_squad_nosquad', '<option class="dropdownKat" value="lazy">- User ist in keinem Team -</option>');
define('_admin_user_edited', 'Der User wurde erfolgreich editiert!');
define('_userlobby', 'Userlobby');
define('_lobby_new', 'Neuerungen seit dem letzten Pagebesuch');
define('_lobby_new_erased', 'Die tempor&auml;ren Neuerungen wurden erfolgreich gel&ouml;scht!');
define('_last_forum', 'Letzten 10 Forumsbeitr&auml;ge');
define('_lobby_forum', 'Forenbeitr&auml;ge');
define('_new_post_1', 'neuer Post');
define('_new_post_2', 'neue Posts');
define('_new_thread', 'im Thema ');
define('_no_new_thread', 'Neues Thema:');
define('_new_eintrag_1', 'neuer Eintrag');
define('_new_eintrag_2', 'neue Eintr&auml;ge');
define('_lobby_user', 'Registrierte User');
define('_new_users_1', 'neu registrierter User');
define('_new_users_2', 'neu registrierte User');
define('_lobby_news', 'News');
define('_lobby_new_news', 'neue News');
define('_lobby_newsc', 'Newskommentare');
define('_lobby_new_newsc_1', 'neuer Newskommentar');
define('_lobby_new_newsc_2', 'neue Newskommentare');
define('_new_msg_1', 'neue Nachricht');
define('_new_msg_2', 'neue Nachrichten');
define('_lobby_votes', 'Umfragen');
define('_new_vote_1', 'neue Umfrage');
define('_new_vote_2', 'neue Umfragen');
define('_user_delete_verify', '
<tr>
  <td class="contentHead"><span class="fontBold">User l&ouml;schen</span></td>
</tr>
<tr>
  <td class="contentMainFirst" align="center">
    Bist du dir sicher das du den User [user] l&ouml;schen willst?<br />
    <span class="fontUnder">Alle</span> Aktivit&auml;ten dieses Users auf dieser Seite werden damit gel&ouml;scht!<br /><br />
    <a href="?action=admin&amp;do=delete&verify=yes&amp;id=[id]">Ja, l&ouml;schen!</a>
  </td>
</tr>');
define('_user_deleted', 'Der User wurde erfolgreich gel&ouml;scht!');
define('_userlobby_kal_today', 'N&auml;chster Event ist <a href="../kalender/?action=show&time=[time]"><span class="fontWichtig">heute - [event]</span></a>');
define('_userlobby_kal_not_today', 'N&auml;chstes Event ist am <a href="../kalender/?action=show&time=[time]"><span class="fontUnder">[date] - [event]</span></a>');
define('_profil_country', 'Land');
define('_profil_favos', 'Favoriten');
define('_profil_drink', 'Drink');
define('_profil_essen', 'Essen');
define('_profil_film', 'Film');
define('_profil_musik', 'Musik');
define('_profil_song', 'Song');
define('_profil_buch', 'Buch');
define('_profil_autor', 'Autor');
define('_profil_person', 'Person');
define('_profil_sport', 'Sport');
define('_profil_sportler', 'Sportler');
define('_profil_auto', 'Auto');
define('_profil_favospiel', 'Spiel');
define('_profil_game', 'Spiel');
define('_profil_favoclan', 'Clan');
define('_profil_spieler', 'Spieler');
define('_profil_map', 'Map');
define('_profil_waffe', 'Waffe');
define('_profil_rasse', 'Rasse');
define('_profil_sonst', 'Sonstiges');
define('_profil_url1', 'Page #1');
define('_profil_url2', 'Page #2');
define('_profil_url3', 'Page #3');
define('_profil_ich', 'Beschreibung');
## Upload ##
define('_upload_ext_error', 'Nur jpg, gif oder png Dateien!');
define('_upload_wrong_size', 'Die ausgew&auml;hlte Datei ist gr&ouml;&szlig;er als zugelassen!');
define('_upload_no_data', 'Du musst eine Datei angeben!');
define('_info_upload_success', 'Die Datei wurde erfolgreich hochgeladen!');
define('_upload_info', 'Info');
define('_upload_file', 'Datei');
define('_upload_beschreibung', 'Beschreibung');
define('_upload_button', 'Hochladen');
define('_upload_over_limit', 'Du darfst nicht mehr Bilder hochladen! L&ouml;sche alte Bilder um neue hochladen zu d&uuml;rfen!');
define('_upload_file_exists', 'Die angegebene Datei existiert bereits! Benenne die Datei um oder w&auml;hle eine andere Datei aus!');
define('_upload_head', 'Userbild uploaden');
define('_upload_userpic_info', 'Nur jpg, gif oder png Dateien mit einer maximalen Gr&ouml;&szlig;e von [userpicsize]KB!<br />Die empfohlene Gr&ouml;&szlig;e ist 170px * 210px ');
define('_upload_icons_head', 'GameIcons');
define('_upload_ava_head', 'Useravatar');
define('_upload_userava_info', 'Nur jpg, gif oder png Dateien mit einer maximalen Gr&ouml;&szlig;e von [userpicsize]KB!<br />Die empfohlene Gr&ouml;&szlig;e ist 100px * 100px ');
define('_upload_newskats_head', 'Kategoriebilder');
## Unzugeordnet ##
define('_forum_no_last_post', 'Der letzte Post kann leider nicht angezeigt werden!');
define('_config_maxwidth', 'Bilder autom. verkleinern');
define('_config_maxwidth_info', 'Hier kannst du einstellen, ab wann ein zu breites Bild verkleinert werden soll!');
define('_forum_top_posts', 'Top 5 Poster');
define('_user_cant_delete_admin', 'Du darfst keine Member oder Admins l&ouml;schen!');
define('_no_entrys_yet', '
<tr>
  <td class="contentMainFirst" colspan="{$colspan}" align="center">Bisher noch kein Eintrag vorhanden!</td>
</tr>');
define('_nav_no_ftopics', 'Noch kein Eintrag!');
define('_target', 'Neues Fenster');
define('_fopen', 'Der Webhoster dieser Seite erlaubt die ben&ouml;tigte Funktion fopen() nicht!');
define('_and', 'und');
define('_lobby_artikelc', 'Artikelkommentare');
define('_lobby_new_art_1', 'neuer Artikel');
define('_lobby_new_art_2', 'neue Artikel');
define('_user_new_art', '&nbsp;&nbsp;<a href="../artikel/"><span class="fontWichtig">[cnt]</span> [eintrag]</span><br />');
define('_lobby_new_artc_1', 'neuer Artikelkommentar');
define('_lobby_new_artc_2', 'neue Artikelkommentare');
define('_page', '<span class="fontBold">[num]</span>  ');
define('_profil_nletter', 'Newsletter empfangen?');
define('_forum_admin_addglobal', '<span class="fontWichtig">Globaler</span> Eintrag? (In allen Foren und Subforen)');
define('_forum_admin_global', '<span class="fontWichtig">Globaler</span> Eintrag?');
define('_forum_global', '<span class="fontWichtig">Global:</span>');
define('_admin_config_badword', 'Badword-Filter');
define('_admin_config_badword_info', 'Hier kannst du W&ouml;rter angeben, die bei Eingabe mit **** versehen werden. Die W&ouml;rter m&uuml;ssen mit Komma getrennt werden!');
define('_iplog_info', '<span class="fontBold">Hinweis:</span> Aus Sicherheitsgr&uuml;nden wird deine IP geloggt!');
define('_logged', 'IP gespeichert');
define('_info_ip', 'IP-Adresse');
define('_info_browser', 'Browser');
define('_info_res', 'Aufl&ouml;sung');
define('_unknown_browser', 'unbekannter Browser');
define('_unknown_system', 'unbekanntes System');
define('_info_sys', 'System');
define('_nav_montag', 'Mo');
define('_nav_dienstag', 'Di');
define('_nav_mittwoch', 'Mi');
define('_nav_donnerstag', 'Do');
define('_nav_freitag', 'Fr');
define('_nav_samstag', 'Sa');
define('_nav_sonntag', 'So');
define('_age', 'Alter');
define('_error_empty_age', 'Du musst dein aktuelles Alter angeben!');
define('_member_admin_intforums', 'interne Forumauthorisierungen');
define('_access', 'Authorisierung');
define('_error_no_access', 'Du hast nicht die n&ouml;tigen Rechte um diesen Bereich betreten zu d&uuml;rfen!');
define('_artikel_show_link', '<a href="../artikel/?action=show&amp;id=[id]">[titel]</a>');
define('_ulist_bday', 'Geburtstag');
define('_ulist_last_login', 'Letzter Login');
## Impressum ##
define('_impressum_head', 'Impressum');
define('_impressum_autor', 'Autor der Seite');
define('_impressum_domain', 'Domain:');
define('_impressum_disclaimer', 'Haftungsausschluss');
define('_impressum_txt', '<blockquote>
<h2><span class="fontBold">1. Inhalt des Onlineangebotes</span></h2>
<br />
Der Autor &uuml;bernimmt keinerlei Gew&auml;hr f&uuml;r die Aktualit&auml;t, Korrektheit, Vollst&auml;ndigkeit oder Qualit&auml;t der bereitgestellten Informationen. Haftungsanspr&uuml;che
gegen den Autor, welche sich auf Sch&auml;den materieller oder ideeller Art beziehen, die durch die Nutzung oder Nichtnutzung der dargebotenen Informationen bzw. durch die Nutzung fehlerhafter und unvollst&auml;ndiger Informationen verursacht wurden, sind grunds&auml;tzlich ausgeschlossen, sofern seitens
des Autors kein nachweislich vors&auml;tzliches oder grob fahrl&auml;ssiges Verschulden vorliegt.
<br />
<br />Alle Angebote sind freibleibend und unverbindlich. Der Autor beh&auml;lt es sich ausdr&uuml;cklich vor,
Teile der Seiten oder das gesamte Angebot ohne gesonderte Ank&uuml;ndigung zu ver&auml;ndern, zu erg&auml;nzen, zu l&ouml;schen oder die Ver&ouml;ffentlichung zeitweise oder endg&uuml;ltig einzustellen.
<br />
<br /><h2><span class="fontBold">2. Verweise und Links</span></h2>
<br />
Bei direkten oder indirekten Verweisen auf fremde Webseiten (\'Hyperlinks\'), die au&szlig;erhalb des Verantwortungsbereiches
des Autors liegen, w&uuml;rde eine Haftungsverpflichtung ausschlie&szlig;lich in dem Fall
in Kraft treten, in dem der Autor von den Inhalten Kenntnis hat und es ihm technisch m&ouml;glich und zumutbar w&auml;re, die Nutzung im Falle rechtswidriger Inhalte zu verhindern.
<br /><br />
Der Autor erkl&auml;rt hiermit ausdr&uuml;cklich, dass zum Zeitpunkt der Linksetzung keine illegalen Inhalte auf den zu verlinkenden Seiten erkennbar waren. Auf die aktuelle und zuk&uuml;nftige
Gestaltung, die Inhalte oder die Urheberschaft der verlinkten/verkn&uuml;pften Seiten hat der Autor keinerlei Einfluss. Deshalb distanziert er sich hiermit ausdr&uuml;cklich von allen Inhalten aller verlinkten
/verkn&uuml;pften Seiten, die nach der Linksetzung ver&auml;ndert wurden. Diese Feststellung gilt f&uuml;r alle innerhalb des eigenen Internetangebotes gesetzten Links und Verweise sowie f&uuml;r Fremdeintr&auml;ge in vom Autor eingerichteten G&auml;steb&uuml;chern, Diskussionsforen, Linkverzeichnissen, Mailinglisten und in allen anderen Formen von Datenbanken, auf deren Inhalt externe Schreibzugriffe m&ouml;glich sind. F&uuml;r illegale, fehlerhafte oder unvollst&auml;ndige Inhalte und insbesondere f&uuml;r Sch&auml;den, die aus der Nutzung oder Nichtnutzung solcherart dargebotener Informationen entstehen, haftet allein der Anbieter der Seite, auf welche verwiesen wurde, nicht derjenige, der &uuml;ber Links auf die jeweilige Ver&ouml;ffentlichung lediglich verweist.
<br />
<br /><h2><span class="fontBold">3. Urheber- und Kennzeichenrecht</span></h2>
<br />
Der Autor ist bestrebt, in allen Publikationen die Urheberrechte der verwendeten Bilder, Grafiken, Tondokumente, Videosequenzen und Texte
zu beachten, von ihm selbst erstellte Bilder, Grafiken, Tondokumente, Videosequenzen und Texte zu nutzen oder auf lizenzfreie Grafiken, Tondokumente, Videosequenzen und Texte zur&uuml;ckzugreifen.
<br />
Alle innerhalb des Internetangebotes genannten und ggf. durch Dritte gesch&uuml;tzten Marken- und Warenzeichen unterliegen uneingeschr&auml;nkt den Bestimmungen des jeweils g&uuml;ltigen Kennzeichenrechts und den Besitzrechten der jeweiligen eingetragenen Eigent&uuml;mer. Allein aufgrund der blo&szlig;en Nennung ist nicht der Schluss zu ziehen, dass Markenzeichen nicht durch Rechte Dritter gesch&uuml;tzt sind!
<br />
Das Copyright f&uuml;r ver&ouml;ffentlichte, vom Autor selbst erstellte Objekte bleibt allein beim Autor der Seiten.
Eine Vervielf&auml;ltigung oder Verwendung solcher Grafiken, Tondokumente, Videosequenzen und Texte in anderen elektronischen oder gedruckten Publikationen ist ohne ausdr&uuml;ckliche Zustimmung des Autors nicht gestattet.
<br />
<br /><h2><span class="fontBold">4. Datenschutz</span></h2>
<br />
Sofern innerhalb des Internetangebotes die M&ouml;glichkeit zur Eingabe pers&ouml;nlicher oder gesch&auml;ftlicher Daten (Emailadressen, Namen, Anschriften) besteht, so erfolgt die Preisgabe dieser Daten seitens des Nutzers auf ausdr&uuml;cklich freiwilliger Basis. Die Inanspruchnahme und Bezahlung aller angebotenen Dienste ist - soweit technisch m&ouml;glich und zumutbar - auch ohne Angabe solcher Daten bzw. unter Angabe anonymisierter Daten oder eines Pseudonyms gestattet.
Die Nutzung der im Rahmen des Impressums oder vergleichbarer Angaben ver&ouml;ffentlichten Kontaktdaten wie Postanschriften, Telefon- und Faxnummern sowie Emailadressen durch Dritte zur &Uuml;bersendung von nicht ausdr&uuml;cklich angeforderten Informationen ist nicht gestattet. Rechtliche Schritte gegen die Versender von sogenannten Spam-Mails bei Verst&ouml;ssen gegen dieses Verbot sind ausdr&uuml;cklich vorbehalten.
<br />
<br /><h2><span class="fontBold">5. Rechtswirksamkeit dieses Haftungsausschlusses</span></h2>
<br />
Dieser Haftungsausschluss ist als Teil des Internetangebotes zu betrachten, von dem aus auf diese Seite verwiesen wurde. Sofern Teile oder einzelne Formulierungen dieses Textes der geltenden Rechtslage nicht, nicht mehr oder nicht vollst&auml;ndig entsprechen sollten, bleiben die &uuml;brigen Teile des Dokumentes in ihrem Inhalt und ihrer G&uuml;ltigkeit davon unber&uuml;hrt.
</blockquote>');
## Admin ##
define('_config_head', 'Adminbereich');
define('_config_empty_katname', 'Du musst eine Kategoriebezeichnung angeben!');
define('_config_katname', 'Kategoriebezeichnung');
define('_config_set', 'Die Einstellungen wurden erfolgreich &uuml;bernommen!');
define('_config_forum_status', 'Status');
define('_config_forum_head', 'Forenkategorien');
define('_config_forum_mainkat', 'Hauptkategorie');
define('_config_forum_subkathead', 'Unterkategorien von <span class="fontUnder">[kat]</span>');
define('_config_forum_subkat', 'Unterkategorie');
define('_config_forum_subkats', '<span class="fontBold">[topic]</span><br /><span class="fontItalic">[subtopic]</span>');
define('_config_forum_kat_head', 'neue Kategorie hinzuf&uuml;gen');
define('_config_forum_public', '&ouml;ffentlich');
define('_config_forum_intern', 'Intern');
define('_config_forum_kat_added', 'Die Kategorie wurde erfolgreich hinzugef&uuml;gt!');
define('_config_forum_kat_deleted', 'Die Kategorie wurde erfolgreich gel&ouml;scht!');
define('_config_forum_kat_head_edit', 'Kategorie editieren');
define('_config_forum_kat_edited', 'Die Kategorie wurde erfolgreich editiert!');
define('_config_forum_add_skat', 'Neue Unterkategorie hinzuf&uuml;gen');
define('_config_forum_skatname', 'Unterkategoriebezeichnung');
define('_config_forum_empty_skat', 'Du musst eine Unterkategoriebezeichnung angeben!');
define('_config_forum_skat_added', 'Die Unterkategorie wurde erfolgreich hinzugef&uuml;gt!');
define('_config_forum_stopic', 'Untertitel');
define('_config_forum_skat_edited', 'Die Unterkategorie wurde erfolreich editiert!');
define('_config_forum_edit_skat', 'Unterkategorie editieren');
define('_config_forum_skat_deleted', 'Die Unterkategorie wurde erfolgreich gel&ouml;scht!');
define('_config_newskats_kat', 'Kategorie');
define('_config_newskats_head', 'News-/Artikelkategorien');
define('_config_newskats_katbild', 'Katbild');
define('_config_newskats_add', '<a href="?admin=news&amp;do=add">Neue Kategorie hinzuf&uuml;gen</a>');
define('_config_newskat_deleted', 'Die Kategorie wurde erfolgreich gel&ouml;scht!');
define('_config_newskats_add_head', 'Neue Kategorie hinzuf&uuml;gen');
define('_config_newskats_added', 'Die Kategorie wurde erfolgreich hinzugef&uuml;gt!');
define('_config_newskats_edit_head', 'Kategorie editieren');
define('_config_newskats_edited', 'Die Kategorie wurde erfolgreich editiert!');
define('_config_impressum_head', 'Impressum');
define('_config_impressum_domains', 'Domains');
define('_config_impressum_autor', 'Autor der Seite');
define('_config_konto_head', 'Kontodaten');
define('_news_admin_head', 'Newsbereich');
define('_admin_news_add', '<a href="?admin=newsadmin&amp;do=add">News hinzuf&uuml;gen</a>');
define('_admin_news_head', 'News hinzuf&uuml;gen');
define('_news_admin_kat', 'Kategorie');
define('_news_admin_klapptitel', 'Klapptexttitel');
define('_news_admin_more', 'More');
define('_empty_news', 'Du musst eine News eintragen!');
define('_news_sended', 'Die News wurde erfolgreich eingetragen!');
define('_admin_news_edit_head', 'News editieren');
define('_news_edited', 'Die News wurde erfolgreich editiert!');
define('_news_deleted', 'Die News wurde erfolgreich gel&ouml;scht!');
define('_member_admin_header', 'Gruppenbereich');
define('_member_admin_squad', 'Gruppe');
define('_member_admin_add', '<a href="?admin=gruppe&amp;do=add">Gruppe hinzuf&uuml;gen</a>');
define('_admin_squad_deleted', 'Die Gruppe wurde erfolgreich gel&ouml;scht!');
define('_member_admin_add_header', 'Gruppe hinzuf&uuml;gen');
define('_admin_squad_no_squad', 'Du musst einen Gruppennamen angeben!');
define('_admin_squad_add_successful', 'Die Gruppe wurde erfolgreich hinzugef&uuml;gt!');
define('_admin_squad_edit_successful', 'Die Gruppe wurde erfolgreich editiert!');
define('_member_admin_edit_header', 'Gruppe editieren');
define('_error_empty_clanname', 'Du musst euren Clannamen angeben!');
define('_admin_dlkat', 'Downloadkategorien');
define('_dl_add_new', '<a href="?admin=dl&amp;do=new">Neue Kategorie hinzuf&uuml;gen</a>');
define('_dl_new_head', 'Neue Downloadkategorie hinzuf&uuml;gen');
define('_dl_dlkat', 'Kategorie');
define('_dl_empty_kat', 'Du musst eine Kategoriebezeichnung angeben!');
define('_dl_admin_added', 'Die Downloadkategorie wurde erfolgreich hinzugef&uuml;gt!');
define('_dl_admin_deleted', 'Die Downloadkategorie wurde erfolgreich gel&ouml;scht!');
define('_dl_edit_head', 'Downloadkategorie editieren');
define('_dl_admin_edited', 'Die Downloadkategorie wurde erfolgreich editiert!');
define('_config_global_head', 'Konfiguration');
define('_config_c_limits', 'Seitenaufteilungen (LIMITS)');
define('_config_c_limits_what', 'Hier kannst du die Eintr&auml;ge einstellen, die pro Bereich maximal angezeigt werden');
define('_config_c_archivnews', 'News-Archiv');
define('_config_c_news', 'News');
define('_config_c_banned', 'Bannliste');
define('_config_c_adminnews', 'News-Admin');
define('_config_c_userlist', 'Userliste');
define('_config_c_comments', 'Newskommentare');
define('_config_c_fthreads', 'Forumsbeitr&auml;ge');
define('_config_c_fposts', 'Forumposts');
define('_config_c_floods', 'Anti-Flooding');
define('_config_c_forum', 'Forum');
define('_config_c_length', 'L&auml;ngenangaben');
define('_config_c_length_what', 'Hier kannst du die L&auml;nge in Anzahl der Zeichen angeben, bei der nach &Uuml;berschreitung die Ausgabe gek&uuml;rzt wird.');
define('_config_c_newsadmin', 'Newsadmin: Titel');
define('_config_c_newsarchiv', 'Newsarchiv: Titel');
define('_config_c_forumtopic', 'Forum: Topic');
define('_config_c_forumsubtopic', 'Forum: Subtopic');
define('_config_c_topdl', 'Men&uuml;: Top Downloads');
define('_config_c_ftopics', 'Men&uuml;: Last Forumtopics');
define('_config_c_main', 'Allgemeine Einstellungen');
define('_config_c_clanname', 'Clanname');
define('_config_c_pagetitel', 'Seitentitel');
define('_config_c_language', 'Default-Sprache');
define('_config_c_upicsize', 'Global: Uploadgr&ouml;sse Bilder');
define('_config_c_upicsize_what', 'erlaubte Gr&ouml;&szlig;e der Bilder in KB (Newsbilder, Userprofilbilder usw.)');
define('_config_c_regcode', 'Reg: Sicherheitscode');
define('_config_c_regcode_what', 'Fragt bei der Registrierung einen Sicherheitscode ab');
define('_pos_add_new', '<a href="?admin=positions&amp;do=new">Neuen Rang hinzuf&uuml;gen</a>');
define('_pos_new_head', 'Neuen Rang hinzuf&uuml;gen');
define('_pos_edit_head', 'Rang editieren');
define('_pos_admin_edited', 'Der Rang wurde erfolgreich editiert!');
define('_pos_admin_deleted', 'Der Rang wurde erfolgreich gel&ouml;scht!');
define('_pos_admin_added', 'Der Rang wurde erfolgreich hinzugef&uuml;gt!');
define('_admin_nc', 'Newskommentare');
define('_admin_reg_head', 'Registrierungspflicht');
define('_wartungsmodus_info', 'wenn eingeschaltet kann keiner, ausser der Admin die Seite betreten.');
define('_navi_kat', 'Bereich');
define('_navi_name', 'Linkname');
define('_navi_url', 'Weiterleitung');
define('_navi_shown', 'Sichtbar');
define('_navi_type', 'Art');
define('_navi_wichtig', 'Markieren');
define('_navi_space', '<b>Leerzeile</b>');
define('_navi_head', 'Navigationsverwaltung');
define('_navi_add', '<a href="?admin=navi&amp;do=add">Neuen Link hinzuf&uuml;gen</a>');
define('_navi_add_head', 'Neuen Link hinzuf&uuml;gen');
define('_navi_edit_head', 'Link editieren');
define('_navi_url_to', 'Weiterleiten nach');
define('_posi', 'Position');
define('_nach', 'nach');
define('_navi_no_name', 'Du musst einen Linknamen angeben!');
define('_navi_no_url', 'Du musst ein Weiterleitungsziel angeben!');
define('_navi_no_pos', 'Du musst die Position f&uuml;r den Link festlegen!');
define('_navi_added', 'Der Link wurde erfolgreich angelegt!');
define('_navi_deleted', 'Der Link wurde erfolgreich gel&ouml;scht!');
define('_navi_edited', 'Der Link wurde erfolgreich editiert!');
define('_editor_head', 'Seiten erstellen/verwalten');
define('_editor_name', 'Seitenbezeichnung');
define('_editor_add', '<a href="?admin=editor&amp;do=add">Neue Seite erstellen</a>');
define('_editor_add_head', 'Neue Seite hinzuf&uuml;gen');
define('_inhalt', 'Inhalt');
define('_allow', 'Erlauben');
define('_deny', 'Verbieten');
define('_editor_allow_html', 'HTML/BBCODE erlauben?');
define('_editor_allow_php', 'PHP-Code erlauben?');
define('_empty_editor_inhalt', 'Du musst einen Text schreiben!');
define('_site_added', 'Die Seite wurde erfolgreich eingetragen!');
define('_editor_linkname', 'Link-Name');
define('_editor_deleted', 'Die Seite wurde erfolgreich gel&ouml;scht!');
define('_editor_edit_head', 'Seite editieren');
define('_site_edited', 'Die Seite wurde erfolgreich editiert!');
define('_navi_standard', 'Der Standard wurde erfolgreich wieder hergestellt!');
define('_standard_sicher', 'Bist du dir sicher das du den Standard wiederherstellen willst?<br />Alle bisher erstellten Links und neue Seiten werden gel&ouml;scht!');
define('_partners_head', 'Partnerbuttons');
define('_partners_button', 'Button');
define('_partners_add_head', 'Neuen Partnerbutton hinzuf&uuml;gen');
define('_partners_edit_head', 'Partnerbutton editieren');
define('_partners_select_icons', '<option value="[icon]" [sel]>[icon]</option>');
define('_partners_added', 'Der Partnerbutton wurde erfolgreich hinzugef&uuml;gt!');
define('_partners_edited', 'Der Partnerbutton wurde erfolgreich editiert!');
define('_partners_deleted', 'Der Partnerbutton wurde erfolgreich gel&ouml;scht!');
define('_clear_head', 'Datenbank aufr&auml;umen');
define('_clear_news', 'Newseintr&auml;ge mit einbeziehen?');
define('_clear_forum', 'Forumeintr&auml;ge mit einbeziehen?');
define('_clear_forum_info', 'Forumeintr&auml;ge, die als <span class="fontWichtig">wichtig</span> markiert sind werden nicht gel&ouml;scht!');
define('_clear_misc', 'Sonstiges mit einbeziehen (empfohlen)?');
define('_clear_days', 'Eintr&auml;ge l&ouml;schen, die &auml;lter sind als');
define('_clear_what', 'Tage');
define('_clear_deleted', 'Es wurden [deleted] Eintr&auml;ge gel&ouml;scht!');
define('_clear_error_days', 'Du musst die Tage angeben, ab wann etwas gel&ouml;scht werden soll!');
define('_admin_status', 'Live-Status');
define('_error_unregistered', 'Du musst registriert sein um diese Funktion Nutzen zu k&ouml;nnen!');
define('_seiten', 'Seite:');
define('_user_admin_contact', 'Kontakt empfangen?');
define('_user_admin_formulare', 'Formulare');
define('_smileys_error_file', 'Du musst ein Smiley angeben!');
define('_smileys_error_bbcode', 'Du musst ein BB-Code angeben!');
define('_smileys_error_type', 'Es sind nur GIF-Dateien erlaubt!');
define('_smileys_added', 'Das Smiley wurde erfolgreich hinzugef&uuml;gt!');
define('_smileys_edited', 'Das Smiley wurde erfolgreich editiert!');
define('_smileys_deleted', 'Das Smiley wurde erfolgreich gel&ouml;scht!');
define('_smileys_normals', 'Standardsmileys (k&ouml;nnen nicht gel&ouml;scht werden!)');
define('_smileys_customs', 'Neue Smileys');
define('_smileys_head', 'Smiley-Editor');
define('_smileys_smiley', 'Smiley');
define('_smileys_bbcode', 'BBCode');
define('_smileys_head_add', 'Neuen Smiley hinzuf&uuml;gen');
define('_smileys_head_edit', 'Smiley editieren');
define('_head_waehrung', 'W&auml;hrung');
define('_dl_version', 'downloadbare Version');
define('_admin_artikel_add', '<a href="?admin=artikel&amp;do=add">Artikel hinzuf&uuml;gen</a>');
define('_artikel_add', 'Artikel hinzuf&uuml;gen');
define('_artikel_added', 'Der Artikel wurde erfolgreich hinzugef&uuml;gt');
define('_artikel_edit', 'Artikel editieren');
define('_artikel_edited', 'Der Artikel wurde erfolgreich editiert!');
define('_artikel_deleted', 'Der Artikel wurde erfolgreich gel&ouml;scht!');
define('_empty_artikel_title', 'Du musst einen Titel angeben!');
define('_empty_artikel', 'Du musst einen Artikel angeben!');
define('_admin_artikel', 'Admin: Artikel');
define('_config_c_martikel', 'Artikel');
define('_config_c_madminartikel', 'Artikel-Admin');
define('_reg_artikel', 'Artikelkommentare');
define('_on', 'eingeschaltet');
define('_off', 'ausgeschaltet');
define('_pers_info_info', 'Zeigt eine Infobox im Header mit pers&ouml;nlichen Informationen wie IP, Browser, Aufl&ouml;sung etc');
define('_pers_info', 'Infobox');
define('_config_lreg', 'Men&uuml;: Last reg. User');
define('_config_mailfrom', 'E-Mail Absender');
define('_config_mailfrom_info', 'Diese Emailadresse wird bei versendeten Emails wie Newsletter, Registrierung, etc als Absender angezeigt!');
define('_profile_del_confirm', 'Achtung, es gehen alle Usereingaben f&uuml;r dieses Feld verloren. Willst du es wirklich l&ouml;schen?');
define('_profile_about', '&Uuml;ber mich');
define('_profile_clan', 'Clan');
define('_profile_contact', 'Kontakt');
define('_profile_favos', 'Favoriten');
define('_profile_hardware', 'Hardware');
define('_profile_name', 'Feldname');
define('_profile_type', 'Feldtyp');
define('_profile_kat', 'Kategorie');
define('_profile_head', 'Profilfelderverwaltung');
define('_profile_edit_head', 'Profilfeld editieren');
define('_profile_shown', 'Sichtbar');
define('_profile_type_1', 'Textfeld');
define('_profile_type_2', 'URL');
define('_profile_type_3', 'Email-Adresse');
define('_profile_shown_dropdown','
<option value="1">Zeigen</option>
<option value="2">Verstecken</option>');
define('_profile_kat_dropdown', '
<option value="1">&Uuml;ber mich</option>
<option value="2">Clan</option>
<option value="3">Kontakt</option>
<option value="4">Favoriten</option>
<option value="5">Hardware</option>');
define('_profile_type_dropdown', '
<option value="1">Textfeld</option>
<option value="2">URL</option>
<option value="3">Email-Adresse</option>');
define('_profile_add_head', 'Profilfeld hinzuf&uuml;gen');
define('_profile_added', 'Das Profilfeld wurde erfolgreich hinzugef&uuml;gt!');
define('_profil_no_name', 'Du musst einen Feldnamen angeben!');
define('_profil_deleted', 'Das Profilfeld wurde erfolgreich gel&ouml;scht!');
define('_profile_edited', 'Das Profilfeld wurde erfolgreich editiert!');
## Misc ##
define('_error_have_to_be_logged', 'Du musst eingeloggt sein um diese Funktion Nutzen zu k&ouml;nnen!');
define('_error_invalid_email', 'Du hast eine ung&uuml;ltige Emailadresse angegeben!');
define('_error_invalid_url', 'Die angegebene Homepage ist nicht erreichbar!');
define('_error_nick_exists', 'Der Nickname ist leider schon vergeben!');
define('_error_user_exists', 'Der Loginname ist leider schon vergeben!');
define('_error_passwords_dont_match', 'Die eingegebenen Passw&ouml;rter stimmen nicht &uuml;berein!');
define('_error_email_exists', 'Die von dir angegebene EMailadresse wird schon von jemandem verwendet!');
define('_info_edit_profile_done_pwd', 'Du hast dein Profil erfolgreich editiert!');
define('_error_select_buddy', 'Du hast keinen User angegeben!');
define('_error_buddy_self', 'Du kannst dich nicht selbst als Buddy adden!');
define('_error_buddy_already_in', 'Der User steht schon in deiner Buddyliste!');
define('_error_msg_self', 'Du kannst dir nicht selber eine Nachricht schreiben!');
define('_error_back', 'zur&uuml;ck');
define('_user_dont_exist', 'Der von dir angegebene User existiert nicht!');
define('_error_fwd', 'weiter');
define('_error_wrong_permissions', 'Du hast nicht die erforderlichen Rechte um diese Aktion durchzuf&uuml;hren!');
define('_error_flood_post', 'Du kannst nur alle [sek] Sekunden einen neuen Eintrag schreiben!');
define('_empty_titel', 'Du musst einen Titel angeben!');
define('_empty_eintrag', 'Du musst einen Beitrag schreiben!');
define('_empty_nick', 'Du musst deinen Nick angeben!');
define('_empty_email', 'Du musst eine E-Mailadresse angeben!');
define('_empty_user', 'Du musst einen Loginnamen angeben!');
define('_empty_to', 'Du musst einen Empf&auml;nger  angeben!');
define('_empty_url', 'Du musst eine URL angeben!');
define('_empty_datum', 'Du musst ein Datum angeben!');
define('_index_headtitle', '[clanname]');
define('_site_sponsor', 'Sponsoren');
define('_site_user', 'User');
define('_site_online', 'Besucher online');
define('_site_member', 'Member');
define('_site_forum', 'Forum');
define('_site_links', 'Links');
define('_site_dl', 'Downloads');
define('_site_news', 'News');
define('_site_messerjocke', 'Messerjocke');
define('_site_banned', 'Bannliste');
define('_site_upload', 'Upload');
define('_site_ulist', 'Userliste');
define('_site_msg', 'Nachrichten');
define('_site_reg', 'Registrierung');
define('_site_user_login', 'Login');
define('_site_user_lostpwd', 'Lostpwd');
define('_site_user_logout', 'Logout');
define('_site_artikel', 'Artikel');
define('_site_user_lobby', 'Userlobby');
define('_site_user_profil', 'Userprofil');
define('_site_user_editprofil', 'Profil editieren');
define('_site_user_buddys', 'Buddies');
define('_site_impressum', 'Impressum');
define('_site_votes', 'Umfragen');
define('_site_config', 'Adminbereich');
define('_login', 'Login');
define('_register', 'registrieren');
define('_userlist', 'Userliste');
define('_news', 'News');
define('_newsarchiv', 'Newsarchiv');
define('_links', 'Links');
define('_impressum', 'Impressum');
define('_contact', 'Kontakt');
define('_artikel', 'Artikel');
define('_dl', 'Downloads');
define('_votes', 'Umfragen');
define('_forum', 'Forum');
define('_squads', 'Teams');
define('_editprofil', 'Profil editieren');
define('_logout', 'Logout');
define('_msg', 'Nachrichten');
define('_lobby', 'Lobby');
define('_buddys', 'Buddies');
define('_admin_config', 'Admin');
define('_head_online', 'Online');
define('_head_visits', 'Besucher');
define('_head_max', 'Max.');
define('_cnt_user', 'User');
define('_cnt_guests', 'G&auml;ste');
define('_cnt_today', 'Heute');
define('_cnt_yesterday', 'Gestern');
define('_cnt_online', 'Online');
define('_cnt_all', 'Gesamt');
define('_cnt_pperday', '&oslash; Tag');
define('_cnt_perday', 'pro Tag');
define('_show', 'Anzeigen');
define('_dont_show', 'Nicht anzeigen');
define('_status', 'Status');
define('_position', 'Position');
define('_kind', 'Art');
define('_cnt', '#');
define('_pwd', 'Passwort');
define('_loginname', 'Login-Name');
define('_email', 'E-Mail');
define('_hp', 'Homepage');
define('_member', 'Member');
define('_user', 'User');
define('_gast', 'unregistriert');
define('_nothing', '<option value="lazy" class="dropdownKat">- nichts &auml;ndern -</option>');
define('_pn', 'Nachricht');
define('_nick', 'Nick');
define('_info', 'Info');
define('_error', 'Fehler');
define('_datum', 'Datum');
define('_legende', 'Legende');
define('_link', 'Link');
define('_linkname', 'Linkname');
define('_url', 'URL');
define('_admin', 'Admin');
define('_hits', 'Zugriffe');
define('_map', 'Map');
define('_game', 'Game');
define('_autor', 'Autor');
define('_yes', 'Ja');
define('_no', 'Nein');
define('_maybe', 'Vielleicht');
define('_beschreibung', 'Beschreibung');
define('_admin_user_get_identy', 'Du hast erfolgreich die Identit&auml;t von [nick] angenommen!');
define('_comment_added', 'Dein Kommentar wurde erfolgreich gespeichert!');
define('_comment_deleted', 'Der Kommentar wurde erfolgreich gel&ouml;scht!');
define('_stichwort', 'Stichwort');
define('_eintragen_titel', 'Eintragen');
define('_titel', 'Titel');
define('_bbcode', 'BBCode');
define('_answer', 'Antwort');
define('_eintrag', 'Eintrag');
define('_weiter', 'weiter');
define('_site_msg_new', 'Du hast neue Nachrichten!<br />
                         Klicke <a href="../user/?action=msg">hier</a> um ins Nachrichtenmenu zu gelangen!');
define('_site_kalender', 'Kalender');
define('_login_permanent', ' Autologin');
define('_msg_del', 'markierte l&ouml;schen');
define('_wartungsmodus', 'Die Webseite ist momentan wegen Wartungsarbeiten geschlossen!<br />
Bitte versuche es in ein paar Minuten erneut!');
define('_wartungsmodus_head', 'Wartungsmodus');
define('_kalender', 'Kalender');
define('_ts_os', 'Betriebsystem');
define('_ts_uptime', 'Uptime');
define('_ts_channels', 'Channels');
define('_ts_user', 'User');
define('_ts_users_head', 'User Informationen');
define('_ts_player', 'User');
define('_ts_channel', 'Channel');
define('_ts_logintime', 'Eingeloggt seit');
define('_ts_idletime', 'AFK seit');
define('_ts_channel_head', 'Channel Informationen');
define('_config_tmpdir', 'Standardtemplate');
define('_navi_info', 'Alle in "_" eingebetteten Linknamen (wie _admin_) sind Platzhalter, die f&uuml;r die jeweiligen &Uuml;bersetzungen ben&ouml;tigt werden!');
define('_member_admin_intnews', 'Interne News sehen');
define('_news_admin_intern', 'interne News?');
define('_news_sticky', '<span class="fontWichtig">Angeheftet:</span>');
define('_news_get_sticky', 'News anheften?');
define('_news_sticky_till', 'bis zum:');
define('_forum_lp_head', 'Letzter Forenpost');
define('_forum_previews', 'Vorschau');
define('_error_unregistered_nc', '
<tr>
  <td class="contentMainFirst" align="center" colspan="2">
    <span class="fontBold">Du musst registriert sein um einen Kommentar schreiben zu k&ouml;nnen!</span>
  </td>
</tr>');
define('_upload_partners_head', 'Partnerbuttons');
define('_upload_partners_info', 'Nur jpg, gif oder png Dateien. Empfohlene Gr&ouml;e: 88px * 31px');
define('_select_field_ranking_add', '<option value="[value]" [sel]>[what]</option>');