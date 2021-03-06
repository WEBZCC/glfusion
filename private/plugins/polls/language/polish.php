<?php
###############################################################################
# polish.php
#
# This is the Polish language file for the glFusion Polls plugin
#
# Copyright (C) 2001 Tony Bibbs
# tony AT tonybibbs DOT com
# Copyright (C) 2005 Trinity Bays
# trinity93 AT gmail DOT com
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
###############################################################################

if (!defined ('GVERSION')) {
    die ('This file cannot be used on its own.');
}

global $LANG32;

###############################################################################
# Array Format:
# $LANGXX[YY]:  $LANG - variable name
#               XX    - file id number
#               YY    - phrase id number
###############################################################################

$LANG_POLLS = array(
    'polls' => 'Ankieta',
    'results' => 'Wyniki',
    'pollresults' => 'Wyniki ankiety',
    'votes' => 'głosów',
    'vote' => 'Głosować',
    'pastpolls' => 'Poprzednie ankiety',
    'savedvotetitle' => 'Głos zapisany',
    'savedvotemsg' => 'Twój głos został zapisany w ankiecie',
    'pollstitle' => 'Ankiety w systemie',
    'polltopics' => 'Inne ankiety',
    'stats_top10' => 'Dziesięć najlepszych ankiet',
    'stats_topics' => 'Temat',
    'stats_votes' => 'Głosy',
    'stats_none' => 'Wygląda na to, że nie ma ankiet na tej stronie lub nikt nigdy nie głosował.',
    'stats_summary' => 'Ankiety (odpowiedzi) w systemie',
    'open_poll' => 'Otwórz dla głosowania',
    'answer_all' => 'Odpowiedz na wszystkie pozostałe pytania',
    'not_saved' => 'Wynik nie został zapisany',
    'upgrade1' => 'Zainstalowano nową wersję wtyczki ankiet. Prosimy',
    'upgrade2' => 'zaktualizować',
    'editinstructions' => 'Proszę wypełnić identyfikator ankiety, przynajmniej jedno pytanie i dwie odpowiedzi na to pytanie.',
    'pollclosed' => 'Ta ankieta jest zamknięta do głosowania.',
    'pollhidden' => 'Wyniki ankiety będą dostępne dopiero po zamknięciu ankiety.',
    'start_poll' => 'Rozpocznij ankietę',
    'deny_msg' => 'Dostęp do tej ankiety jest zabroniony. Albo sonda została przeniesiona / usunięta, albo nie masz wystarczających uprawnień.',
    'login_required' => "<a href=\"{$_CONF['site_url']}/users.php\" rel=\"nofollow\">Zaloguj</a> wymagane do głosowania",
    'username' => 'Nazwa użytkownika',
    'ipaddress' => 'Adres IP',
    'date_voted' => 'Data głosowania',
    'description' => 'Opis',
    'general' => 'Ogólne',
    'poll_questions' => 'Dodaj pytania i odpowiedzi',
    'permissions' => 'Uprawnienia'
);

###############################################################################
# admin/plugins/polls/index.php

$LANG25 = array(
    1 => 'Tryb',
    2 => 'Podaj temat, przynajmniej jedno pytanie i przynajmniej jedną odpowiedź na to pytanie.',
    3 => 'Utworzono',
    4 => 'Ankieta %s zapisane',
    5 => 'Tworzenie ankiety',
    6 => 'Identyfikator',
    7 => '(nie używaj spacji)',
    8 => 'Pojawia się na pollblock',
    9 => 'Temat',
    10 => 'Odpowiedzi / głosy / uwagi',
    11 => 'Wystąpił błąd podczas pobierania odpowiedzi na pytanie o ankietę %s',
    12 => 'Wystąpił błąd podczas pobierania danych z ankiety na temat ankiety %s',
    13 => 'Utwórz ankietę',
    14 => 'zapisz',
    15 => 'anuluj',
    16 => 'usuń',
    17 => 'Wprowadź identyfikator ankiety',
    18 => 'Zarządzaj Ankietą',
    19 => 'Aby zmodyfikować lub usunąć ankietę, kliknij ikonę edycji ankiety. Aby utworzyć nową ankietę, kliknij powyżej "utwórz nową".',
    20 => 'Głosy',
    21 => 'Brak dostępu',
    22 => "Próbujesz uzyskać dostęp do ankiety, do której nie masz praw. Ta próba została zarejestrowana. Prosimy <a href=\"{$_CONF['site_admin_url']}/poll.php\">wróć do ekranu administracji ankietami</a>.",
    23 => 'Nowy sondaż',
    24 => 'Admin Home',
    25 => 'Tak',
    26 => 'Nie',
    27 => 'Edytuj',
    28 => 'Wyślij',
    29 => 'Szukaj',
    30 => 'Limit wyników',
    31 => 'Pytanie',
    32 => 'Aby usunąć to pytanie z ankiety, usuń jego tekst pytania',
    33 => 'Aktywna',
    34 => 'Temat:',
    35 => 'Ankieta ma',
    36 => 'więcej pytań.',
    37 => 'Ukryj wyniki',
    38 => 'Podczas gdy ankieta jest otwarta, tylko właściciel &amp; root może zobaczyć wyniki',
    39 => 'Temat będzie wyświetlany tylko wtedy, gdy jest więcej niż 1 pytanie.',
    40 => 'Zobacz wszystkie odpowiedzi na tę ankietę',
    41 => 'Czy na pewno chcesz usunąć tą ankietę??',
    42 => 'Czy na pewno chcesz usunąć tę ankietę? Wszystkie pytania, odpowiedzi i komentarze związane z tą ankietą zostaną trwale usunięte z bazy danych.',
    43 => 'Logowanie wymagane do głosowania'
);

###############################################################################
# autotag descriptions

$LANG_PO_AUTOTAG = array(
    'desc_poll' => 'Link: to a Poll on this site.  link_text defaults to the Poll topic.  usage: [poll:<i>poll_id</i> {link_text}]',
    'desc_poll_result' => 'HTML: renders the results of a Poll on this site.  usage: [poll_result:<i>poll_id</i>]',
    'desc_poll_vote' => 'HTML: renders a voting block for a Poll on this site.  usage: [poll_vote:<i>poll_id</i>]'
);

$PLG_polls_MESSAGE19 = 'Twoja ankieta została pomyślnie zapisana.';
$PLG_polls_MESSAGE20 = 'Twoja ankieta została pomyślnie usunięta.';

// Messages for the plugin upgrade
$PLG_polls_MESSAGE3001 = 'Aktualizacja wtyczki nie jest obsługiwana.';
$PLG_polls_MESSAGE3002 = $LANG32[9];

// Localization of the Admin Configuration UI
$LANG_configsections['polls'] = array(
    'label' => 'Ankiety',
    'title' => 'Konfiguracja ankiet'
);

$LANG_confignames['polls'] = array(
    'pollsloginrequired' => 'Wymagane logowanie ankieta',
    'hidepollsmenu' => 'Ukryj pozycję menu ankiet',
    'maxquestions' => 'Maksymalnie pytań na ankietę',
    'maxanswers' => 'Maksymalnie opcji na pytanie',
    'answerorder' => 'Sortuj wyniki',
    'pollcookietime' => 'Ciasteczko ważne dla',
    'polladdresstime' => 'Adres IP ważny dla',
    'delete_polls' => 'Usuń ankiety z właścicielem',
    'aftersave' => 'Po zapisaniu ankiety',
    'default_permissions' => 'Sondowanie domyślnych uprawnień',
    'displayblocks' => 'Wyświetl bloki glFusion'
);

$LANG_configsubgroups['polls'] = array(
    'sg_main' => 'Ustawienia główne'
);

$LANG_fs['polls'] = array(
    'fs_main' => 'Ogólne ustawienia ankiet',
    'fs_permissions' => 'Domyślne uprawnienia'
);

// Note: entries 0, 1, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['polls'] = array(
    0 => array('Tak' => 1, 'Nie' => 0),
    1 => array('Tak' => true, 'Nie' => false),
    2 => array('Jako przesłany' => 'submitorder', 'Według głosów' => 'voteorder'),
    9 => array('Przekaż do ankiety' => 'item', 'Display Admin List' => 'list', 'Display Public List' => 'plugin', 'Display Home' => 'home', 'Display Admin' => 'admin'),
    12 => array('Brak dostępu' => 0, 'Tylko odczyt' => 2, 'Odczyt i zapis' => 3),
    13 => array('Lewe bloki' => 0, 'Prawe bloki' => 1, 'Lewe & Prawe bloki' => 2, 'Zaden' => 3)
);

?>