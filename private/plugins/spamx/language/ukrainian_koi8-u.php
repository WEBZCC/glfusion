<?php
/**
 * File: ukrainian.php
 * This is the Ukrainian language page for the glFusion Spam-X Plug-in!
 * 
 * Copyright (C) 2006 by Vitaliy Biliyenko
 * v.lokki@gmail.com
 * 
 * Licensed under GNU General Public License
 *
 * $Id: ukrainian_koi8-u.php 2846 2008-07-29 00:52:10Z mevans0263 $
 */

if (!defined ('GVERSION')) {
    die ('This file cannot be used on its own.');
}

global $LANG32;

$LANG_SX00 = array(
    'inst1' => '<p>���� �� ������� ��, ��Ħ ��ۦ ',
    'inst2' => '������� ����������� �� ����������� ��� ������ ������ � �� ������� �������� ¦�� ��������� ',
    'inst3' => '�����Ħ���� ���� �����.</p><p>���� �� ������ �צ� �������, ��� ¦���� �� ������, ��� צ� ��������� � ������, ',
    'inst4' => '��Ħ�̦�� ������������ ����� <a href="mailto:spamx@pigstye.net">spamx@pigstye.net</a> ��� �����צ��� ��Φ. ',
    'inst5' => '�Ӧ ������ ���� ���������.',
    'submit' => '��Ħ�����',
    'subthis' => '�� �������æ� �� ���������ϧ ���� ����� Spam-X',
    'secbut' => '�� ����� ������ ������� ��Ҧ��� RDF, ��� ��ۦ ����� ����������� ��� ������.',
    'sitename' => '����� �����: ',
    'URL' => 'URL ������ Spam-X: ',
    'RDF' => 'RDF url: ',
    'impinst1a' => '���� Φ� ��������������� ��Ӧ� Spam-X comment Spam blocker ��� ����������� �� ����������� ���������Φ ���Φ ������ � �����',
    'impinst1b' => ' ���Ԧ�, � ����� ��� ��������� ������Φ �צ ������. (�� ������� �� �����Φ ���������.)',
    'impinst2' => '����� ������� ��� ���� �� ����� Gplugs/Spam-X ��� ������� ������-������ ',
    'impinst2a' => '���Ԧ�, �� ��Ħ����� ��ϧ ���Φ ������. (�����: ���� � ��� � ˦���� ���Ԧ�, �� ������ ������ ���� �� ',
    'impinst2b' => '�������� � ������ ���� ����. �� ��������� ��� ����� ���������� ��ϧ ����� � �������� ���ͦ� ������.) ',
    'impinst2c' => '���� ����, �� �� ��������� ������ ��Ħ�����, �����Φ�� [�����] �� ������ ������Ҧ, ��� ����������� ����.',
    'impinst3' => '������Φ ��Φ ���� ��������: (�������� ��, ���� � �������).',
    'availb' => '������Φ ���Φ ������',
    'clickv' => '�����Φ�� ��� ����������� ������ ������',
    'clicki' => '�����Φ�� ��� ����������� ������ ������',
    'ok' => 'OK',
    'rsscreated' => '��Ҧ��� RSS ��������',
    'add1' => '������ ',
    'add2' => ' ����Ӧ� � ',
    'add3' => ' ������� ������.',
    'adminc' => '������� ��ͦΦ���������:',
    'mblack' => '��� ������ ������:',
    'rlinks' => '���Ҧ���Φ ���������:',
    'e3' => '��� ������ ����� � ���������� ������ glFusion, �����Φ�� ������:',
    'addcen' => '������ ��������� ������',
    'addentry' => '������ �����',
    'e1' => '��� �������� �����, �����Φ�� ����.',
    'e2' => '��� ������ �����, ���Ħ�� ���� � ��̦ � �����Φ�� ������.  ������ ������ ��������������� �Ӧ �������Φ ������ Perl (Perl Regular Expressions).',
    'pblack' => '������������ ������ ������ Spam-X',
    'conmod' => '����������� ������������ ������ Spam-X',
    'acmod' => '����̦ Ħ� Spam-X',
    'exmod' => '����̦ ���̦�� Spam-X',
    'actmod' => '�����Φ ����̦',
    'avmod' => '������Φ ����̦',
    'coninst' => '<hr>�����Φ�� �������� ������, ��� �������� ����, �����Φ�� ��������� ������, ��� ������ ����.<br>����̦ ����������� ���� � ������ �������.',
    'fsc' => '�������� �¦� Spam-�������� ',
    'fsc1' => ' ��������� ������������ ',
    'fsc2' => ' � IP-������ ',
    'uMTlist' => '������� MT-Blacklist',
    'uMTlist2' => ': ������ ',
    'uMTlist3' => ' ����Ӧ� � �������� ',
    'entries' => ' ����Ӧ�.',
    'uPlist' => '������� ������������ ������ ������',
    'entriesadded' => '������ ������',
    'entriesdeleted' => '������ ��������',
    'viewlog' => '����������� ��� Spam-X',
    'clearlog' => '�������� ���',
    'logcleared' => '- ���-���� Spam-X �������',
    'plugin' => '������',
    'access_denied' => '������ ����������',
    'access_denied_msg' => '���� ������צ ���������ަ ����� ������ �� æ�� ���Ҧ���.  ��� ��Ǧ� �� IP-������ ��������.',
    'admin' => '��ͦΦ��������� ����̦�',
    'install_header' => '����������/�������� ������',
    'installed' => '������ �����������',
    'uninstalled' => '������ �� �����������',
    'install_success' => '�������æ� ��Ц���',
    'install_failed' => '�������æ� ������� -- ����������� error.log ���� �������.',
    'uninstall_msg' => '������ ��Ц��� ��������',
    'install' => '����������',
    'uninstall' => '��������',
    'warning' => '�����! ������ ��� �� �צ������',
    'enabled' => '����Φ�� ������ ����� ����������.',
    'readme' => '����! ���� Φ� ������ �������æ� ���������� ',
    'installdoc' => ' �������� Install.',
    'spamdeleted' => '�������� Spam-��������',
    'foundspam' => '�������� �¦� Spam-�������� ',
    'foundspam2' => ' ��������� ������������ ',
    'foundspam3' => ' � IP-������ ',
    'deletespam' => '�������� Spam',
    'numtocheck' => '���˦��� �������Ҧ� ��� ����צ���',
    'note1' => '<p>�����: ��Ӧ� ������ ��������� ���� ��������� ���, ���� �� ����� �������',
    'note2' => ' ����� �������Ҧ� � Spam-X �� ���������� ����.  <ul><li>�������� ����Ħ�� ��������� �� ��ۦ ',
    'note3' => '��������� ����� ����-��������� � ������� �� �� ������ ������� ������.</li><li>��̦ ',
    'note4' => '�����Φ���� ���� � ����� Spam-X ����צ���� �����Φ �������Ҧ �� ����.</li></ul><p>�������Ҧ ',
    'note5' => '����צ������� צ� ��צ��� �� ���Ҧ��� -- ����צ��� ¦���ϧ ˦�����Ԧ �������Ҧ� ',
    'note6' => '������� ¦���� ����.</p>',
    'masshead' => '<hr><h1 align="center">������ ��������� Spam-�������Ҧ�</h1>',
    'masstb' => '<hr><h1 align="center">������ ��������� �������-�����</h1>',
    'comdel' => ' �������Ҧ� ��������.',
    'initial_Pimport' => '<p>������ ������� ������"',
    'initial_import' => '���������� ������ MT-Blacklist',
    'import_success' => '<p>��Ц��� ����������� %d ����Ӧ� ������� ������.',
    'import_failure' => '<p><strong>�������:</strong> �� �������� ����Ӧ�.',
    'allow_url_fopen' => '<p>�������, ���Ʀ����æ� ������ ���������� �� ������Ѥ ������ צ�����Φ ����� (<code>allow_url_fopen</code> ��� �������� off). ����-�����, ���������� ������ ������ � ���������� URL � ��ͦ�Ԧ�� ���� � ������� "data" ������ glFusion, <tt>%s</tt>, ���� Φ� ��������� �����:',
    'documentation' => '���������æ� ������ Spam-X',
    'emailmsg' => "����� ����-���� ���� ��Ħ����� �� \"%s\"\nUID �����������: \"%s\"\n\n�ͦ��:\"%s\"",
    'emailsubject' => '����-���� �� %s',
    'ipblack' => '������ ������ IP Spam-X',
    'ipofurlblack' => '������ ������ IP � URL Spam-X',
    'headerblack' => '������ ������ HTTP-�������˦� Spam-X',
    'headers' => '��������� ������:',
    'stats_headline' => '���������� Spam-X',
    'stats_page_title' => '������ ������',
    'stats_entries' => '������',
    'stats_mtblacklist' => 'MT-Blacklist',
    'stats_pblacklist' => '������������ ������ ������',
    'stats_ip' => '���������Φ IP-������',
    'stats_ipofurl' => '����������� �� IP � URL',
    'stats_header' => 'HTTP-���������',
    'stats_deleted' => '�����, ������Φ �� ����',
    'plugin_name' => 'Spam-X',
    'slvwhitelist' => '���� ������ SLV',
    'instructions' => 'Spam-X allows you to define words, URLs, and other items that can be used to block spam posts on your site.',
    'invalid_email_or_ip' => 'Invalid e-mail address or IP address has been blocked',
    'filters' => 'Filters',
    'edit_filters' => 'Edit Filters',
    'scan_comments' => 'Scan Comments',
    'scan_trackbacks' => 'Scan Trackbacks',
    'auto_refresh_on' => 'Auto Refresh On',
    'auto_refresh_off' => 'Auto Refresh Off',
    'type' => 'Type',
    'blocked' => 'Blocked',
    'no_blocked' => 'No spam has been blocked by this module',
    'filter' => 'Filter',
    'all' => 'All',
    'blacklist' => 'Blacklist',
    'http_header' => 'HTTP Header',
    'ip_blacklist' => 'IP Blacklist',
    'ipofurl' => 'IP of URL',
    'filter_instruction' => 'Here you can define filters which will be applied to each registration and post on the site. If any of the checks return true, the registration / post will be blocked as spam',
    'value' => 'Value',
    'no_filter_data' => 'No filters have been defined',
    'delete' => 'Delete',
    'delete_confirm' => 'Are you sure you want to delete this item?',
    'delete_confirm_2' => 'Are you REALLY SURE you want to delete this item',
    'new_entry' => 'New Entry',
    'blacklist_prompt' => 'Enter words to trigger spam',
    'http_header_prompt' => 'Header',
    'ip_prompt' => 'Enter IP to block',
    'ipofurl_prompt' => 'Enter IP of links to block',
    'content' => 'Content',
    'new_filter_entry' => 'New Filter Entry',
    'cancel' => 'Cancel',
    'ip_error' => 'The entry does not appear to be a valid IP or IP range',
    'no_bl_data_error' => 'No errors',
    'blacklist_success_save' => 'Spam-X Filter Saved Successfully',
    'blacklist_success_delete' => 'Selected items successfully deleted',
    'invalid_item_id' => 'Invalid ID',
    'edit_filter_entry' => 'Edit Filter',
    'spamx_filters' => 'Spam-X Filters',
    'history' => 'Past 3 Months'
);

// Define Messages that are shown when Spam-X module action is taken
$PLG_spamx_MESSAGE128 = '�������� ����, �������� �� ��צ�������� ��������.';
$PLG_spamx_MESSAGE8 = '�������� ����. ��ͦΦ�������� ��Ħ����� ������������ �����.';

// Messages for the plugin upgrade
$PLG_spamx_MESSAGE3001 = 'Plugin upgrade not supported.';
$PLG_spamx_MESSAGE3002 = $LANG32[9];

// Localization of the Admin Configuration UI
$LANG_configsections['spamx'] = array(
    'label' => 'Spam-X',
    'title' => 'Spam-X Configuration'
);

$LANG_confignames['spamx'] = array(
    'action' => 'Spam-X Actions',
    'notification_email' => 'Notification Email',
    'admin_override' => 'Don\'t Filter Admin Posts',
    'logging' => 'Enable Logging',
    'timeout' => 'Timeout',
    'sfs_username_check' => 'Enable User name validation',
    'sfs_email_check' => 'Enable email validation',
    'sfs_ip_check' => 'Enable IP address validation',
    'sfs_username_confidence' => 'Minimum confidence level on Username match to trigger spam block',
    'sfs_email_confidence' => 'Minimum confidence level on Email match to trigger spam block',
    'sfs_ip_confidence' => 'Minimum confidence level on IP address match to trigger spam block',
    'slc_max_links' => 'Maximum Links allowed in post',
    'debug' => 'Debug Logging',
    'akismet_enabled' => 'Akismet Module Enabled',
    'akismet_api_key' => 'Akismet API Key (Required)',
    'fc_enable' => 'Enable Form Check',
    'sfs_enable' => 'Enable Stop Forum Spam',
    'slc_enable' => 'Enable Spam Link Counter',
    'action_delete' => 'Delete Identified Spam',
    'action_mail' => 'Mail Admin when Spam Caught'
);

$LANG_configsubgroups['spamx'] = array(
    'sg_main' => 'Main Settings'
);

$LANG_fs['spamx'] = array(
    'fs_main' => 'Spam-X Main Settings',
    'fs_sfs' => 'Stop Forum Spam Settings',
    'fs_slc' => 'Spam Link Counter',
    'fs_akismet' => 'Akismet',
    'fs_formcheck' => 'Form Check'
);

// Note: entries 0, 1, 9, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['spamx'] = array(
    0 => array('True' => 1, 'False' => 0),
    1 => array('True' => true, 'False' => false)
);

?>