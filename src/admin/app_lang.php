<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Komponente';
$lang['admin_content'] = 'Vsebina';
$lang['admin_database_backup'] = 'Varnostne kopije podatkovne baze';
$lang['admin_extensions'] = 'Razširitve';
$lang['admin_firewall'] = 'Požarni zid';
$lang['admin_help'] = 'Pomoč';
$lang['admin_languages'] = 'Jeziki';
$lang['admin_logs'] = 'Sistemski dnevniki';
$lang['admin_media'] = 'Mediateka';
$lang['admin_modules'] = 'Moduli';
$lang['admin_plugins'] = 'Vtičniki';
$lang['admin_reports'] = 'Dnevnik aktivnosti';
$lang['admin_settings'] = 'Sistemske nastavitve';
$lang['admin_sysinfo'] = 'Podatki o sistemu';
$lang['admin_system'] = 'Sistem';
$lang['admin_system_firewall'] = 'Sistemski požarni zid';
$lang['admin_themes'] = 'Teme';
$lang['admin_updates'] = 'Sistemske posodobitve';
$lang['admin_users'] = 'Uporabniki';
$lang['admin_view_site'] = 'Poglej spletno mesto';
$lang['per_page'] = 'Na stran';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Hvala za ustvarjanje z <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Ni aktivnih elementov.} other{<b>#</b> od <b>%s</b> elementov je aktivnih.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'Namesti';
$lang['admin_install_error'] = 'Namestitev paketa ni uspela.';
$lang['admin_install_error_com'] = 'Namestitev ni uspela: %s';
$lang['admin_install_location_app'] = 'Samo ta aplikacija';
$lang['admin_install_location_core'] = 'Vse aplikacije';
$lang['admin_install_location_select'] = '&#151; Izberite lokacijo &#151;';
$lang['admin_install_success'] = 'Paket je bil uspešno nameščen.';
$lang['admin_install_upload'] = 'Naloži';
$lang['admin_install_upload_error'] = 'Nalaganje paketa ni uspelo.';
$lang['admin_install_upload_success'] = 'Paket je bil uspešno naložen.';
$lang['admin_install_upload_tip'] = 'Namestite paket tako, da tukaj naložite njegovo datoteko <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Ni mogoče počistiti stare varnostne kopije.';
$lang['admin_database_backup_clean_success'] = '%d varnostnih kopij izbrisanih. %d prostora na disku je sproščeno.';
$lang['admin_database_backup_create'] = 'Ustvari varnostno kopijo';
$lang['admin_database_backup_create_confirm'] = 'Ali ste prepričani, da želite zdaj ustvariti varnostno kopijo?';
$lang['admin_database_backup_create_error'] = 'Ni mogoče ustvariti datoteke varnostne kopije. Prepričite, da je mapa <b>%s</b> zapisljiva.';
$lang['admin_database_backup_create_success'] = 'Varnostna kopija podatkovne baze <b>%s</b> je bila uspešno ustvarjena.';
$lang['admin_database_backup_delete_confirm'] = 'Ali ste prepričani, da želite izbrisati te varnostne kopije?';
$lang['admin_database_backup_delete_error'] = 'Ni mogoče izbrisati izbrane varnostne kopije.';
$lang['admin_database_backup_delete_success'] = 'Varnostne kopije so bile uspešno izbrisane.';
$lang['admin_database_backup_download_error'] = 'Ni mogoče prenesti izbrano varnostno kopijo.';
$lang['admin_database_backup_download_success'] = 'Varnostno kopijo je bilo uspešno preneseno.';
$lang['admin_database_backup_lock_confirm'] = 'Ali ste prepričani, da želite zakleniti te varnostne kopije?';
$lang['admin_database_backup_lock_error'] = 'Ni mogoče zakleniti izbrane varnostne kopije.';
$lang['admin_database_backup_lock_success'] = 'Varnostne kopije so bile uspešno zaklenjene.';
$lang['admin_database_backup_locked_error'] = 'Ni mogoče izbrisati zaklenjene varnostne kopije.';
$lang['admin_database_backup_missing_error'] = 'Varnostne kopije ni bilo mogoče najti.';
$lang['admin_database_backup_unlock_confirm'] = 'Ali ste prepričani, da želite odkleniti te varnostne kopije?';
$lang['admin_database_backup_unlock_error'] = 'Ni mogoče odkleniti izbrane varnostne kopije.';
$lang['admin_database_backup_unlock_success'] = 'Varnostne kopije so bile uspešno odklenjene.';
$lang['admin_database_prune'] = 'Obreži';
$lang['admin_database_prune_confirm'] = 'Ali ste prepričani, da želite obrezati podatkovno bazo? Pred izvedbo bo ustvarjena varnostna kopija.';
$lang['admin_database_prune_error'] = 'Ni mogoče obrezati podatkovno bazo.';
$lang['admin_database_prune_next'] = 'Naslednje obrezanje: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Podatkovna baza je bila uspešno obrezana.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Izbriši dnevnike';
$lang['admin_logs_delete_confirm'] = 'Ali ste prepričani, da želite izbrisati izbrane dnevniške datoteke?';
$lang['admin_logs_delete_error'] = 'Ni mogoče izbrisati dnevniške datoteke.';
$lang['admin_logs_delete_success'] = 'Dnevniške datoteke so bile uspešno izbrisane.';
$lang['admin_logs_error_disabled'] = 'Beleženje trenutno ni omogočeno.';
$lang['admin_logs_error_empty'] = 'Ni najdenih dnevnikov.';
$lang['admin_logs_error_missing'] = 'Dnevniške datoteke ni bilo mogoče najti ali so bile prazne.';
$lang['admin_logs_tip'] = 'Beleženje lahko hitro ustvari zelo velike datoteke. Za žive strani, pomislite o brisanju starih.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Ali ste prepričani, da želite izbrisati izbrane e-pošte?';
$lang['admin_emails_delete_error'] = 'Ni mogoče izbrisati izbranih e-pošt.';
$lang['admin_emails_delete_success'] = 'Izbrane e-pošte uspešno izbrisane.';
$lang['admin_emails_email_from'] = 'Poslano od';
$lang['admin_emails_mail_queue'] = 'E-poštna vrsta';
$lang['admin_emails_mailer'] = 'Masovna e-pošta';
$lang['admin_emails_search'] = 'Iskanje e-pošte po zadevi ali vsebini...';
$lang['admin_emails_send_error'] = 'Neuspešno postavljanje e-pošte v vrsto. Prosimo, poskusite znova.';
$lang['admin_emails_send_none'] = 'Noben uporabnik ne ustreza vašim izbranim kriterijem.';
$lang['admin_emails_send_success'] = 'E-pošta je bila postavljena v vrsto in bo kmalu poslana.';
$lang['admin_emails_send_to_banned'] = 'Pošlji prepovedanim uporabnikom.';
$lang['admin_emails_send_to_deleted'] = 'Pošlji izbranim uporabnikom.';
$lang['admin_emails_send_to_disabled'] = 'Pošlji neaktivnim uporabnikom.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Dodaj uporabnika';
$lang['admin_users_all_users'] = 'Vsi uporabniki';
$lang['admin_users_ban_confirm'] = 'Ali ste prepričani, da želite prepovedati dostop izbranim uporabnikom?';
$lang['admin_users_ban_error'] = 'Izbranim uporabnikom ni mogoče prepovedati dostopa.';
$lang['admin_users_ban_success'] = 'Izbranim uporabnikom je bil uspešno prepovedan dostop.';
$lang['admin_users_delete_confirm'] = 'Ali ste prepričani, da želite izbrisati izbrane uporabnike?';
$lang['admin_users_delete_error'] = 'Izbranih uporabnikov ni mogoče izbrisati.';
$lang['admin_users_delete_success'] = 'Izbrani uporabniki so bili uspešno izbrisani.';
$lang['admin_users_disable_confirm'] = 'Ali ste prepričani, da želite onemogočiti izbrane uporabnike?';
$lang['admin_users_disable_error'] = 'Izbranih uporabnikov ni mogoče onemogočiti.';
$lang['admin_users_disable_success'] = 'Izbrani uporabniki so bili uspešno onemogočeni.';
$lang['admin_users_edit'] = 'Uredi uporabnika';
$lang['admin_users_edit_error'] = 'Ni mogoče posodobiti uporabnika.';
$lang['admin_users_edit_success'] = 'Uporabnik uspešno posodobljen.';
$lang['admin_users_enable_confirm'] = 'Ali ste prepričani, da želite omogočiti izbrane uporabnike?';
$lang['admin_users_enable_error'] = 'Izbranih uporabnikov ni mogoče omogočiti.';
$lang['admin_users_enable_success'] = 'Izbrani uporabniki so bili uspešno omogočeni.';
$lang['admin_users_groups'] = 'Skupine';
$lang['admin_users_lock_confirm'] = 'Ali ste prepričani, da želite zakleniti izbrane uporabnike?';
$lang['admin_users_lock_error'] = 'Ni mogoče zakleniti izbranih uporabnikov.';
$lang['admin_users_lock_success'] = 'Izbrani uporabniki uspešno zaklenjeni.';
$lang['admin_users_logged'] = 'Prijavljeni uporabniki';
$lang['admin_users_manage'] = 'Upravljaj uporabnike';
$lang['admin_users_remove_confirm'] = 'Ali ste prepričani, da želite trajno izbrisati izbrane uporabnike in vse njihove podatke?';
$lang['admin_users_remove_error'] = 'Izbranih uporabnikov in vseh njihovih podatkov ni mogoče trajno izbrisati.';
$lang['admin_users_remove_success'] = 'Izbrani uporabniki in vsi njihovi podatki so bili uspešno izbrisani.';
$lang['admin_users_restore_confirm'] = 'Ali ste prepričani, da želite obnoviti izbrane uporabnike?';
$lang['admin_users_restore_error'] = 'Izbranih uporabnikov ni mogoče obnoviti.';
$lang['admin_users_restore_success'] = 'Izbrani uporabniki so bili uspešno obnovljeni.';
$lang['admin_users_search'] = 'Iskanje po imenu, uporabniškem imenu ali e-pošti...';
$lang['admin_users_unban_confirm'] = 'Ali ste prepričani, da želite odstraniti prepoved dostopa izbranim uporabnikom?';
$lang['admin_users_unban_error'] = 'Prepovedi dostopa izbranim uporabnikom ni mogoče odstraniti.';
$lang['admin_users_unban_success'] = 'Prepoved dostopa izbranim uporabnikom je bila uspešno odstranjena.';
$lang['admin_users_unlock_confirm'] = 'Ali ste prepričani, da želite odkleniti izbrane uporabnike?';
$lang['admin_users_unlock_error'] = 'Ni mogoče odkleniti izbranih uporabnikov.';
$lang['admin_users_unlock_success'] = 'Izbrani uporabniki uspešno odklenjeni.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Počisti dnevnike';
$lang['admin_reports_clear_confirm'] = 'Ali ste prepričani, da želite počistiti dnevnik dejanj?';
$lang['admin_reports_clear_error'] = 'Ni mogoče počistiti dnevnika dejanj.';
$lang['admin_reports_clear_success'] = 'Dnevnik dejanj uspešno počiščen.';
$lang['admin_reports_latest_actions'] = 'Zadnja dejanja';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Ali ste prepričani, da želite izbrisati izbrane datoteke?';
$lang['admin_media_delete_error'] = 'Ni mogoče izbrisati datotek.';
$lang['admin_media_delete_success'] = 'Datoteke uspešno izbrisane.';
$lang['admin_media_file_delete_error'] = 'Ni mogoče izbrisati datoteke.';
$lang['admin_media_file_delete_success'] = 'Datoteka uspešno izbrisana.';
$lang['admin_media_file_update_error'] = 'Ni mogoče posodobiti datoteke.';
$lang['admin_media_file_update_success'] = 'Datoteka uspešno posodobljena.';
$lang['admin_media_search'] = 'Iskanje po imenu, opisu ali imenu datoteke...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Ni aktivnih modulov.} other{<b>#</b> od <b>%s</b> modulov je aktivnih.}';
$lang['admin_modules_add'] = 'Dodaj modul';
$lang['admin_modules_delete_confirm'] = 'Ali ste prepričani, da želite izbrisati modul: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Ni mogoče izbrisati modula.';
$lang['admin_modules_delete_success'] = 'Modul uspešno izbrisan.';
$lang['admin_modules_disable_all_confirm'] = 'Ali ste prepričani, da želite onemogočiti vse module?';
$lang['admin_modules_disable_all_error'] = 'Ni mogoče onemogočiti vseh modulov.';
$lang['admin_modules_disable_all_success'] = 'Vsi moduli so bili uspešno onemogočeni.';
$lang['admin_modules_disable_confirm'] = 'Ali ste prepričani, da želite onemogočiti modul: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Ni mogoče deaktivirati modula.';
$lang['admin_modules_disable_success'] = 'Modul uspešno deaktiviran.';
$lang['admin_modules_enable_all_confirm'] = 'Ali ste prepričani, da želite omogočiti vse module?';
$lang['admin_modules_enable_all_error'] = 'Ni mogoče omogočiti vseh modulov.';
$lang['admin_modules_enable_all_success'] = 'Vsi moduli so bili uspešno omogočeni.';
$lang['admin_modules_enable_confirm'] = 'Ali ste prepričani, da želite omogočiti modul: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Ni mogoče aktivirati modula.';
$lang['admin_modules_enable_success'] = 'Modul uspešno aktiviran.';
$lang['admin_modules_install_confirm'] = 'Ali ste prepričani, da želite namestiti ta modul?';
$lang['admin_modules_install_error'] = 'Namestitev modula ni uspela.';
$lang['admin_modules_install_success'] = 'Modul je bil uspešno nameščen.';
$lang['admin_modules_install_tip'] = 'Moduli dodajajo nove funkcije in funkcionalnost vašemu spletnemu mestu. Prebrskite razpoložljive module v <a href="%s" target="_blank" rel="noopener">imeniku modulov</a> ali naložite enega kot <b>.zip</b> paket.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Ni aktivnih vtičnikov.} other{<b>#</b> od <b>%s</b> vtičnikov je aktivnih.}';
$lang['admin_plugins_add'] = 'Dodaj vtičnik';
$lang['admin_plugins_delete_confirm'] = 'Ali ste prepričani, da želite izbrisati vtičnik: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Ni mogoče izbrisati vtičnika.';
$lang['admin_plugins_delete_success'] = 'Vtičnik uspešno izbrisan.';
$lang['admin_plugins_disable_all_confirm'] = 'Ali ste prepričani, da želite onemogočiti vse vtičnike?';
$lang['admin_plugins_disable_all_error'] = 'Ni mogoče onemogočiti vseh vtičnikov.';
$lang['admin_plugins_disable_all_success'] = 'Vsi vtičniki so bili uspešno onemogočeni.';
$lang['admin_plugins_disable_confirm'] = 'Ali ste prepričani, da želite onemogočiti vtičnik: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Ni mogoče deaktivirati vtičnika.';
$lang['admin_plugins_disable_success'] = 'Vtičnik uspešno deaktiviran.';
$lang['admin_plugins_enable_all_confirm'] = 'Ali ste prepričani, da želite omogočiti vse vtičnike?';
$lang['admin_plugins_enable_all_error'] = 'Ni mogoče omogočiti vseh vtičnikov.';
$lang['admin_plugins_enable_all_success'] = 'Vsi vtičniki so bili uspešno omogočeni.';
$lang['admin_plugins_enable_confirm'] = 'Ali ste prepričani, da želite omogočiti vtičnik: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Ni mogoče aktivirati vtičnika.';
$lang['admin_plugins_enable_success'] = 'Vtičnik uspešno aktiviran.';
$lang['admin_plugins_install_confirm'] = 'Ali ste prepričani, da želite namestiti ta vtičnik?';
$lang['admin_plugins_install_error'] = 'Namestitev vtičnika ni uspela.';
$lang['admin_plugins_install_success'] = 'Vtičnik je bil uspešno nameščen.';
$lang['admin_plugins_install_tip'] = 'Vtičniki razširjajo obstoječe funkcije z dodatnimi možnostmi ali integracijami. Namestite iz <a href="%s" target="_blank" rel="noopener">imenika vtičnikov</a> ali naložite <b>.zip</b> datoteko.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Dodaj temo';
$lang['admin_themes_delete_confirm'] = 'Ali ste prepričani, da želite izbrisati temo: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Ni mogoče izbrisati teme.';
$lang['admin_themes_delete_error_active'] = 'Ne morete izbrisati trenutno aktivne teme.';
$lang['admin_themes_delete_success'] = 'Tema uspešno izbrisana.';
$lang['admin_themes_disable_confirm'] = 'Ali ste prepričani, da želite deaktivirati temo: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Teme ni bilo mogoče deaktivirati.';
$lang['admin_themes_disable_success'] = 'Tema je bila uspešno deaktivirana.';
$lang['admin_themes_enable_confirm'] = 'Ali ste prepričani, da želite omogočiti temo: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Ni mogoče aktivirati teme.';
$lang['admin_themes_enable_success'] = 'Tema uspešno aktivirana.';
$lang['admin_themes_install_confirm'] = 'Ali ste prepričani, da želite namestiti to temo?';
$lang['admin_themes_install_error'] = 'Namestitev teme ni uspela.';
$lang['admin_themes_install_success'] = 'Tema je bila uspešno nameščena.';
$lang['admin_themes_install_tip'] = 'Teme spreminjajo videz in postavitev vašega spletnega mesta. Izberite iz <a href="%s" target="_blank" rel="noopener">knjižnice tem</a> ali naložite <b>.zip</b> datoteko za namestitev svoje.';
$lang['admin_themes_none_tip'] = 'Ta aplikacija deluje brez teme. Namestite temo, da prilagodite javni vmesnik.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Meniji';
$lang['admin_menus_assign_error'] = 'Ni mogoče posodobiti lokacij menijev.';
$lang['admin_menus_assign_success'] = 'Lokacije menijev uspešno posodobljene.';
$lang['admin_menus_header'] = 'Na voljo je <b>%s</b> lokacij menija.';
$lang['admin_menus_location'] = 'Lokacija';
$lang['admin_menus_locations'] = 'Lokacije menijev';
$lang['admin_menus_manage'] = 'Upravljaj menije';
$lang['admin_menus_menu'] = 'Dodeljen meni';
$lang['admin_menus_none'] = '&#151; Brez &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Dodaj jezik';
$lang['admin_languages_default_confirm'] = 'Ali ste prepričani, da želite narediti ta jezik privzet jezik spletnega mesta?';
$lang['admin_languages_default_error'] = 'Ni mogoče spremeniti privzetega jezika.';
$lang['admin_languages_default_error_nochange'] = 'Ta jezik je že privzeti.';
$lang['admin_languages_default_success'] = 'Privzeti jezik uspešno spremenjen.';
$lang['admin_languages_disable_all_confirm'] = 'Ali ste prepričani, da želite onemogočiti vse jezike?';
$lang['admin_languages_disable_all_error'] = 'Ni mogoče onemogočiti vseh jezikov.';
$lang['admin_languages_disable_all_success'] = 'Vsi jeziki so bili uspešno onemogočeni.';
$lang['admin_languages_disable_confirm'] = 'Ali ste prepričani, da želite onemogočiti jezik: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Ni mogoče onemogočiti jezika.';
$lang['admin_languages_disable_error_default'] = 'Privzetega jezika ni mogoče onemogočiti.';
$lang['admin_languages_disable_error_nochange'] = 'Ta jezik je že onemogočen.';
$lang['admin_languages_disable_success'] = 'Jezik uspešno onemogočen.';
$lang['admin_languages_enable_all_confirm'] = 'Ali ste prepričani, da želite omogočiti vse jezike?';
$lang['admin_languages_enable_all_error'] = 'Ni mogoče omogočiti vseh jezikov.';
$lang['admin_languages_enable_all_success'] = 'Vsi jeziki so bili uspešno omogočeni.';
$lang['admin_languages_enable_confirm'] = 'Ali ste prepričani, da želite omogočiti jezik: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Ni mogoče omogočiti jezika.';
$lang['admin_languages_enable_error_nochange'] = 'Ta jezik je že omogočen.';
$lang['admin_languages_enable_success'] = 'Jezik uspešno omogočen.';
$lang['admin_languages_install_confirm'] = 'Ali ste prepričani, da želite namestiti ta jezik?';
$lang['admin_languages_install_error'] = 'Namestitev jezika ni uspela.';
$lang['admin_languages_install_success'] = 'Jezik je bil uspešno nameščen.';
$lang['admin_languages_install_tip'] = 'Jeziki dodajo prevode za vmesnik in vsebino vašega spletnega mesta. Prebrskajte razpoložljive jezike v <a href="%s" target="_blank" rel="noopener">imeniku jezikov</a> ali naložite paket <b>.zip</b>, da namestite svojega.';
$lang['admin_languages_tip'] = 'Omogočite, onemogočite in nastavitev privzetega jezika spletnega mesta. Omogočeni jeziki so na voljo obiskovalcem spletnega mesta.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Paket že obstaja.';
$lang['package_archive_download_failed'] = 'Prenos arhiva paketa ni uspel.';
$lang['package_backup_create_error'] = 'Ustvarjanje varnostne kopije paketa ni uspelo.';
$lang['package_backup_dir_failed'] = 'Ustvarjanje varnostne mape %s ni uspelo';
$lang['package_backup_missing'] = 'Varnostna datoteka ne obstaja.';
$lang['package_backup_path_error'] = 'Pot do varnostne datoteke ni bila najdena.';
$lang['package_backup_request_invalid'] = 'Neveljaven zahtevek za varnostno kopijo.';
$lang['package_backup_restore_error'] = 'Obnovitev varnostne kopije paketa ni uspela.';
$lang['package_catalog_type_unknown'] = 'Neznana vrsta kataloga.';
$lang['package_checksum_error'] = 'Preverjanje kontrolne vsote (checksum) paketa ni uspelo.';
$lang['package_copy_files_error'] = 'Kopiranje datotek paketa na cilj ni uspelo.';
$lang['package_copy_updates_error'] = 'Kopiranje datotek posodobitve na cilj ni uspelo.';
$lang['package_dest_dir_failed'] = 'Ustvarjanje ciljne mape %s ni uspelo';
$lang['package_destination_error'] = 'Cilja paketa ni bilo mogoče določiti.';
$lang['package_download_dir_failed'] = 'Ustvarjanje mape za prenos %s ni uspelo';
$lang['package_download_empty'] = 'Prenos paketa je vrnil prazen odziv.';
$lang['package_download_request_invalid'] = 'Neveljaven zahtevek za prenos paketa.';
$lang['package_extract_failed'] = 'Razširjanje ZIP-a %s ni uspelo';
$lang['package_invalid_lang_files'] = 'Neveljaven jezik — manjkajo zahtevane jezikovne datoteke aplikacije.';
$lang['package_invalid_lang_structure'] = 'Neveljaven jezik — manjkajo mape admin in/ali ci3.';
$lang['package_invalid_missing_info'] = 'Neveljaven %s: manjka "info.php".';
$lang['package_invalid_module_structure'] = 'Neveljaven modul — manjkajo zahtevane mape config in/ali controllers.';
$lang['package_invalid_plugin_boot'] = 'Neveljaven vtičnik (plugin) — manjka "boot.php".';
$lang['package_invalid_plugin_contents'] = 'Neveljaven vtičnik (plugin) — vtičniki ne smejo vsebovati krmilnikov ali pogledov (views).';
$lang['package_invalid_theme_boot'] = 'Neveljavna tema — manjko "boot.php".';
$lang['package_invalid_theme_views'] = 'Neveljavna tema — manjkajoča mapa views.';
$lang['package_no_root_dir'] = 'Paket ne vsebuje korenskega imenika (root directory).';
$lang['package_not_downloadable'] = 'Paket ni javno prenosljiv.';
$lang['package_not_in_registry'] = 'Paket ni na voljo v javnem registru.';
$lang['package_request_invalid'] = 'Neveljaven zahtevek za paket.';
$lang['package_rollback_request_invalid'] = 'Neveljaven zahtevek za povrnitev (rollback).';
$lang['package_root_mismatch'] = 'Korenski direktorij arhiva paketa se ne ujema s %s';
$lang['package_single_root_required'] = 'Paket mora vsebovati natanko en korenski imenik.';
$lang['package_source_error'] = 'vira paketa ni bilo mogoče določiti.';
$lang['package_system_core_restricted'] = 'Sistemskih komponent ni mogoče namestiti kot pakete.';
$lang['package_temp_dir_failed'] = 'Ustvarjanje začasne mape %s ni uspelo';
$lang['package_type_unknown'] = 'Neznana vrsta paketa.';
$lang['package_update_request_invalid'] = 'Neveljaven zahtevek za posodobitev paketa.';
$lang['package_update_root_mismatch'] = 'Korenski direktorij arhiva posodobitve se ne ujema s %s.';
$lang['package_upload_dir_failed'] = 'Ustvarjanje mape za nalaganje %s ni uspelo';
$lang['package_url_invalid'] = 'Neveljaven URL za distribucijo paketa.';
$lang['package_write_failed'] = 'Zapisovanje paketa v %s ni uspelo';
$lang['package_zip_not_found'] = 'ZIP paket ne obstaja: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Na voljo so nove posodobitve!';
$lang['update_backup_error'] = 'Ni mogoče ustvariti varnostne kopije obstoječega paketa. Posodobitev je bila prekinjena.';
$lang['update_check_disabled'] = 'Samodejne preverbe posodobitev so onemogočene. Omogočite jih za ogled posodobitev.';
$lang['update_check_error'] = 'Trenutno ni mogoče zagnati preverjanja posodobitev.';
$lang['update_check_success'] = 'Preverjanje posodobitev je bilo uspešno zaključeno.';
$lang['update_install_error'] = 'Paketa ni bilo mogoče namestiti. Prejšnja različica je bila ohranjena.';
$lang['update_install_success'] = 'Paket je bil uspešno posodobljen na najnovejšo različico.';
$lang['update_interval_3days'] = 'Vsake 3 dni';
$lang['update_interval_biweekly'] = 'Vsaki 2 tedna';
$lang['update_interval_daily'] = 'Vsak dan';
$lang['update_interval_monthly'] = 'Enkrat na mesec';
$lang['update_interval_weekly'] = 'Enkrat na teden';
$lang['update_not_available'] = 'Vaše spletno mesto je posodobljeno.';
$lang['update_rollback_error'] = 'Prejšnje različice ni mogoče obnoviti. Morda bo potreben ročni poseg.';
$lang['update_rollback_success'] = 'Prejšnja različica je bila uspešno obnovljena.';
$lang['updates_available'] = 'Razpoložljive posodobitve';
$lang['updates_check_now'] = 'Preveri zdaj';
$lang['updates_check_now_confirm'] = 'Ali ste prepričani, da želite preveriti posodobitve zdaj?';
$lang['updates_current_version'] = 'Trenutna različica';
$lang['updates_enable'] = 'Omogoči posodobitve';
$lang['updates_last_check'] = 'Zadnja preverba: %s';
$lang['updates_latest_version'] = 'Najnovejša različica';
$lang['updates_next_check'] = 'Naslednja načrtovana preverba: %s';
$lang['updates_previous_version'] = 'Prejšnja različica';
$lang['updates_recent'] = 'Nedavno posodobljeno';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Blokiranje navedenega IP naslova ni uspelo.';
$lang['admin_firewall_ban_success'] = 'IP naslov je bil uspešno blokiran.';
$lang['admin_firewall_block_ip'] = 'Blokiraj IP naslov';
$lang['admin_firewall_delete_confirm'] = 'Ali ste prepričani, da želite odblokirati izbrane IP naslove?';
$lang['admin_firewall_delete_error'] = 'Odblokiranje izbranih IP naslovov ni uspelo.';
$lang['admin_firewall_delete_success'] = 'Izbrani IP naslovi so bili uspešno odblokirani.';
$lang['admin_firewall_duration'] = 'Trajanje prepovedi';
$lang['admin_firewall_permanent'] = 'Trajno';
$lang['admin_firewall_reason'] = 'Razlog prepovedi';
$lang['admin_firewall_tip'] = 'Oglejte si in upravljajte IP naslove, ki jih je požarni zid blokiral zaradi ponavljajočih se kršitev ali sumljive dejavnosti.';

// Settings
$lang['404_ban_duration'] = 'Trajanje blokade 404';
$lang['404_threshold'] = 'Omejitev napak 404';
$lang['uri_ban_duration'] = 'Trajanje blokade URI';
$lang['uri_strike_threshold'] = 'Omejitev URI';
