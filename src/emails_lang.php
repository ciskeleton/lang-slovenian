<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Na voljo so sistemske posodobitve';
$lang['emails_updates_available_message'] = <<<EOT
Pozdravljeni,

Za {site_anchor} so bile zaznale nove sistemske posodobitve.

Te posodobitve lahko vključujejo popravke varnosti, izboljšave zmogljivosti ali nove funkcije.
Priporočamo, da jih čim prej pregledate.

Na voljo posodobitve lahko pregledate in upravljate v nadzornem panelu:
{link}

Če ste posodobitve že pregledali ali namestili, ni potrebno nobeno nadaljnje ukrepanje.

To je avtomatsko sistemsko sporočilo, ki ga je poslalo {site_name}.
Na to e-poštno sporočilo ne odgovarjajte.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Aktivacija računa';
$lang['emails_account_activation_request_message'] = <<<EOT
Pozdravljen, {name},

Hvala za registracijo na {site_anchor}. Vaš račun je ustvarjen in ga je treba aktivirati, preden ga lahko uporabite.

Za aktivacijo vašega računa kliknite naslednjo povezavo ali jo kopirajte in prilepite v svoj brskalnik:
{link}

Lep pozdrav,
-- {site_name} ekipa.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Nova povezava za aktivacijo';
$lang['emails_account_activation_resend_message'] = <<<EOT
Pozdravljen, {name},

Nedavno ste zahtevali novo aktivacijsko povezavo na {site_anchor}, ker vaš račun ni bil aktiven.
Za aktivacijo vašega računa kliknite naslednjo povezavo ali jo kopirajte in prilepite v svoj brskalnik:
{link}

Če tega niste zahtevali, ni potrebno nobeno nadaljnje dejanje.

To dejanje je bilo zahtevano z te IP naslova: {ip_link}.

Lep pozdrav,
-- {site_name} ekipa.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Račun aktiviran';
$lang['emails_account_activation_success_message'] = <<<EOT
Pozdravljen, {name},

Vaš račun na {site_anchor} je bil uspešno aktiviran. Zdaj se lahko kadarkoli <a href="{login_url}" target="_blank" rel="noopener">prijavite</a>.

Upamo, da boste uživali v svojem bivanju.

Lep pozdrav,
-- {site_name} ekipa.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Račun čaka na odobritev';
$lang['emails_account_approval_pending_message'] = <<<EOT
Pozdravljen, {name},

Hvala, ker ste nam pridružili na {site_anchor}. Vaš račun je ustvarjen, vendar zahteva odobritev skrbnika, preden postane aktiven.
Iskreno se opravičujemo za ta ključni korak, ampak je izključno iz varnostnih razlogov.

Prejeli boste potrditveni e-pošto, takoj ko bo vaš račun odobren.

Upamo, da boste uživali v svojem bivanju.

Lep pozdrav,
-- {site_name} ekipa.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Račun odobren';
$lang['emails_account_approval_success_message'] = <<<EOT
Pozdravljen, {name},

Odlične novice! Vaš račun na {site_anchor} je bil pravkar odobren.

Zdaj se lahko prijavite in takoj začnete uporabljati svoj račun:
{link}

Smo veseli, da ste z nami.

Lep pozdrav,
-- {site_name} ekipa.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Račun obnovljen';
$lang['emails_account_restored_message'] = <<<EOT
Pozdravljen, {name},

Ta e-pošta potrjuje, da je bil vaš račun na {site_anchor} uspešno obnovljen.

Dobrodošli nazaj! Upamo, da boste tokrat uživali v svojem bivanju.

Lep pozdrav,
-- {site_name} ekipa.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Dobrodošli v {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Pozdravljen, {name},

Večina ljudi ima res dolgo pozdravno e-poštno zaporedje po tem, ko se registrirate na njihovi strani.

Dobre novice: nismo kot večina ljudi.
Ampak, vseeno vas želimo pozdraviti in se vam zahvaliti, da ste nam pridružili na {site_anchor}.

Upamo, da boste uživali v svojem bivanju. Prosimo, sprejmite naše prijazne pozdrave.

-- {site_name} ekipa.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Zahteva za spremembo e-pošte';
$lang['emails_email_change_request_message'] = <<<EOT
Pozdravljen, {name},

Prejemate ta e-poštno sporočilo, ker smo prejeli zahtevo za spremembo e-pošte za vaš račun na {site_anchor}.

Če želite nadaljevati, kliknite naslednjo povezavo ali jo kopirajte in prilepite v svoj brskalnik:
{link}

Če niste zahtevali spremembe e-poštnega naslova, ni potrebno nobeno nadaljnje dejanje.

To dejanje je bilo zahtevano z te IP naslova: {ip_link}.

Lep pozdrav,
-- {site_name} ekipa.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'E-poštni naslov spremenjen';
$lang['emails_email_change_success_message'] = <<<EOT
Pozdravljen, {name},

Ta e-pošta potrjuje, da se je vaš e-poštni naslov, uporabljen na {site_anchor}, uspešno spremenil.

Če tega dejanja niste izvedli, se čim prej obrnite na nas, da rešimo ta problem.

To dejanje je bilo izvedeno z te IP naslova: {ip_link}.

Lep pozdrav,
-- {site_name} ekipa.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Opozorilo o neuspešni prijavi';
$lang['emails_login_alert_failure_message'] = <<<EOT
Pozdravljen, {name},

Nekdo je nedavno uporabil napačno geslo za poskus prijave v vaš {site_name} račun.

Datum strežnika: {date}
Naprava: {browser}, {platform}
IP naslov: {ip_link}

Če to niste bili vi, skrbite se - poskus prijave ni bil uspešen.

Če ste bili vi, a ne spomnite se gesla, kliknite na spodnjo povezavo za ponastavitev:
{reset_link}

Če imate težave pri prijavi v račun, stopite v stik z našim timom ali zahtevajte povezavo za prijavo z enim klikom.

-- {site_name} ekipa.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Obvestilo o uspešni prijavi';
$lang['emails_login_alert_success_message'] = <<<EOT
Pozdravljen, {name},

Po uspešni prijavi v vaš {site_name} račun vam pošiljamo ta e-poštni sporočilo.

Datum strežnika: {date}
Naprava: {browser}, {platform}
IP naslov: {ip_link}

Če ste bili vi, lahko varno prezrete to sporočilo.

Če niste bili vi, takoj spremenite svoje geslo, da zaščitite svoj račun.

Za pomoč se obrnite na našo podporno ekipo.

-- {site_name} ekipa.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Hitra povezava za prijavo';
$lang['emails_login_magic_link_message'] = <<<EOT
Pozdravljen, {name},

Tukaj je vaša čarobna povezava za prijavo v vaš {site_name} račun.

Kliknite na spodnjo povezavo za prijavo:
{link}

Povezava poteče: {time}

Če niste zahtevali te povezave, lahko prezrete to e-pošto.

Lep pozdrav,
-- {site_name} ekipa.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Dvostopenjska avtentikacija';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Pozdravljen, {name},

Vaša dvofaktorska avtentikacijska koda je: <strong>{code}</strong>

Dvofaktorsko avtentikacijo lahko vedno onemogočite v nastavitvah svojega računa.

To dejanje je bilo izvedeno s te IP naslova: {ip_link}.

Lep pozdrav,
-- {site_name} ekipa.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Zahteva za ponastavitev gesla';
$lang['emails_password_change_request_message'] = <<<EOT
Pozdravljen, {name},

To e-pošto prejemate, ker smo prejeli zahtevek za ponastavitev gesla za vaš račun na {site_name}.

Kliknite na naslednjo povezavo ali jo kopirajte in prilepite v svoj brskalnik, če želite nadaljevati:
{link}

Če niste zahtevali ponastavitve gesla, ni potrebnih nadaljnjih ukrepov.

To dejanje je bilo zahtevano s te IP naslova: {ip_link}.

Lep pozdrav,
-- {site_name} ekipa.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Geslo je bilo uspešno spremenjeno';
$lang['emails_password_change_success_message'] = <<<EOT
Pozdravljen, {name},

Ta e-pošta potrjuje, da je bilo vaše geslo na {site_name} uspešno spremenjeno. Zdaj se lahko <a href="{login_url}" target="_blank" rel="noopener">prijavite</a> z novim geslom.

Če te akcije niste izvedli, se prosim čim prej obrnite na nas, da rešimo ta problem.

To dejanje je bilo izvedeno s te IP naslova: {ip_link}.

Lep pozdrav,
-- {site_name} ekipa.
EOT;
