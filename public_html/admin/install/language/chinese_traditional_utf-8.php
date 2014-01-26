<?php
// +--------------------------------------------------------------------------+
// | glFusion CMS                                                             |
// +--------------------------------------------------------------------------+
// | chinese_traditional_utf-8.php                                            |
// |                                                                          |
// | Chinese language file for the glFusion installation script               |
// +--------------------------------------------------------------------------+
// | $Id::                                                                   $|
// +--------------------------------------------------------------------------+
// | Copyright (C) 2008-2009 by the following authors:                        |
// |                                                                          |
// | Samuel Maung Stone – sam AT stonemicro DOT com                           |
// | Albert Zhu         - i AT cpro DOT me                                    |
// |                                                                          |
// | Based on the Geeklog CMS                                                 |
// | Copyright (C) 2000-2008 by the following authors:                        |
// |                                                                          |
// | Authors: Tony Bibbs         - tony AT tonybibbs DOT com                  |
// |          Mark Limburg       - mlimburg AT users DOT sourceforge DOT net  |
// |          Jason Whittenburg  - jwhitten AT securitygeeks DOT com          |
// |          Dirk Haun          - dirk AT haun-online DOT de                 |
// |          Randy Kolenko      - randy AT nextide DOT ca				      |
// |          Matt West          - matt AT mattdanger DOT net			      |
// +--------------------------------------------------------------------------+
// |                                                                          |
// | This program is free software; you can redistribute it and/or            |
// | modify it under the terms of the GNU General Public License              |
// | as published by the Free Software Foundation; either version 2           |
// | of the License, or (at your option) any later version.                   |
// |                                                                          |
// | This program is distributed in the hope that it will be useful,          |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
// | GNU General Public License for more details.                             |
// |                                                                          |
// | You should have received a copy of the GNU General Public License        |
// | along with this program; if not, write to the Free Software Foundation,  |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.          |
// |                                                                          |
// +--------------------------------------------------------------------------+

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

// +---------------------------------------------------------------------------+

$LANG_CHARSET = 'utf-8';

// +---------------------------------------------------------------------------+
// install.php

$LANG_INSTALL = array(
    'back_to_top' => '返回頂部',
    'calendar' => '載入日曆插件？',
    'calendar_desc' => '線上日曆/提醒系統，包括全站日曆和用戶日曆。',
    'connection_settings' => '連接設置',
    'content_plugins' => '內容與插件',
    'copyright' => '<a href="http://www.glfusion.org" target="_blank">glFusion</a>是一個自由軟體，基於<a href="http://www.gnu.org/licenses/gpl-2.0.txt" target="_blank">GNU/GPL v2.0 許可證發行。</a>',
    'core_upgrade_error' => '升級核心系統時發生錯誤。',
    'correct_perms' => '請按照提示修改您的安裝環境，如果您完成修改了，請點擊<b>重新檢查</b>按鈕重新檢查安裝環境',
    'current' => '當前',
    'database_exists' => '資料庫中已經存在glFusion的資料表。請在全新安裝前情空所有舊資料表。',
    'database_info' => '資料庫資訊',
    'db_hostname' => '資料庫主機',
    'db_hostname_error' => '資料庫主機名不能為空。',
    'db_name' => '資料庫名稱',
    'db_name_error' => '資料庫名稱不能為空。',
    'db_pass' => '資料庫密碼',
    'db_table_prefix' => '資料庫表首碼',
    'db_type' => '資料庫類型',
    'db_type_error' => '必須選擇資料庫類型',
    'db_user' => '資料庫用戶名',
    'db_user_error' => '資料庫用戶名不能為空',
    'dbconfig_not_found' => '找不到db-config.php文件。請確認該文件存在。',
    'dbconfig_not_writable' => '文件db-config.php不可寫。請打開該文件的寫許可權。',
    'directory_permissions' => '目錄許可權',
    'enabled' => '開啟',
    'env_check' => '環境檢測',
    'error' => '錯誤',
    'file_permissions' => '文件許可權',
    'file_uploads' => '許多glFusion的功能要用到檔上傳許可權，此項應該打開。',
    'filemgmt' => '載入下載管理插件？',
    'filemgmt_desc' => '<br />下載管理器，讓您非常容易就能提供按照目錄組織的檔下載服務。',
    'filesystem_check' => '檔系統檢查',
    'forum' => '載入論壇插件？',
    'forum_desc' => '<br />一個線上論壇系統，提供社區協作與交流功能。',
    'geeklog_migrate' => '從Geeklog v1.5+ 站點遷移',
    'hosting_env' => '伺服器環境檢測',
    'install' => '安裝',
    'install_heading' => 'glFusion安裝工具',
    'install_steps' => '安裝步驟',
    'invalid_geeklog_version' => '安裝工具找不到siteconfig.php文件。您確信自己是從Geeklog v1.5.0或更高版本進行網站遷移嗎？如果您使用的是Geeklog的較舊版本，請先升級到至少是Geeklog v1.5.0版本，然後重試。',
    'language' => '語言',
    'language_task' => '語言與任務',
    'libcustom_not_writable' => 'lib-custom.php文件不可寫',
    'links' => '載入友情鏈結插件？',
    'links_desc' => '<br />一個友情鏈結管理系統，提供按照目錄分類的友情鏈結。',
    'load_sample_content' => '載入默認示例網站數據嗎？',
    'mediagallery' => '載入多媒體管理插件？',
    'mediagallery_desc' => '<br />一個多媒體管理系統，不僅可以配置成一個簡單的相冊，還能支援音樂和電影。',
    'memory_limit' => '推薦您至少有48M的記憶體來運行您的網站。',
    'missing_db_fields' => '請將所有必填的資料庫欄位填寫完整。',
    'new_install' => '全新安裝',
    'next' => '下一步',
    'no_db' => '資料庫可能不存在。',
    'no_db_connect' => '無法連接資料庫',
    'no_innodb_support' => '您選擇了包含InnoDB特性的MySQL資料庫，但實際上該資料庫不支援InnoDB索引。',
    'no_migrate_glfusion' => '您不能遷移一個現存的glFusion站點，請使用升級選項來完成升級。',
    'none' => '無',
    'not_writable' => '不可寫',
    'notes' => '注意',
    'off' => '關閉',
    'ok' => '通過',
    'on' => '開啟',
    'online_help_text' => '線上安裝助手<br />位於glFusion.org',
    'online_install_help' => '線上安裝幫助',
    'open_basedir' => '如果您的功能變數名稱<strong>根路徑轉發功能</strong> (open_basedir restrictions) 是打開的，可能會導致安裝過程出現一些許可權問題。這個檔系統檢查工具本應是能夠指向任何路徑的。',
    'path_info' => '路徑資訊',
    'path_prompt' => '指向private/目錄的路徑',
    'path_settings' => '路徑設置',
    'perform_upgrade' => '執行升級',
    'php_req_version' => 'glFusion要求PHP版本不低於4.3.0.',
    'php_settings' => 'PHP配置',
    'php_version' => 'PHP版本',
    'php_warning' => '如果下面有任何一處被標記為<span class="no">紅色</span>，您的glFusion網站就可能遇到問題。請聯繫您的伺服器提供商來改變這些PHP配置項。',
    'plugin_install' => '插件安裝',
    'plugin_upgrade_error' => '在升級%s插件時遇到問題，請檢查錯誤日誌error.log查看詳情。<br />',
    'plugin_upgrade_error_desc' => '以下插件沒有被升級。請查閱錯誤日誌error.log查看詳情。<br />',
    'polls' => '載入投票插件？',
    'polls_desc' => '<br />一個線上投票系統，為您的用戶提功一個多樣的投票功能。',
    'post_max_size' => 'glFusion讓您可以上傳插件、圖片、和檔。您應該允許至少8M的上傳許可權。',
    'previous' => '上一步',
    'proceed' => '繼續',
    'recommended' => '推薦',
    'register_globals' => '如果PHP的<strong>register_globals</strong>開啟，可能引起安全隱患。',
    'safe_mode' => '如果PHP的<strong>safe_mode</strong>開啟，一些glFusion的功能可能無法正常工作，特別是媒體庫插件。',
    'samplecontent_desc' => '一旦勾選，將會安裝示例資料，例如區塊、文章、和靜態頁面。<strong>推薦glFusion的新用戶使用。</strong>',
    'select_task' => '選擇任務',
    'session_error' => '您的會話已超時。請重新開始安裝過程。',
    'setting' => '設置',
    'site_admin_url' => '管理員URL',
    'site_admin_url_error' => '管理員URL不能為空。',
    'site_email' => '管理員信箱',
    'site_email_error' => '管理員信箱不能為空',
    'site_email_notvalid' => '管理員信箱不是有效的電子郵件位址。',
    'site_info' => '站點信息',
    'site_name' => '站點名稱',
    'site_name_error' => '站點名稱不能為空',
    'site_noreply_email' => '不監控郵箱',
    'site_noreply_email_error' => '不監控郵箱不能為空。',
    'site_noreply_notvalid' => '不監控郵箱不是有效的電子郵件位址',
    'site_slogan' => '站點副標題',
    'site_upgrade' => '升級現存的glFusion網站',
    'site_url' => '站點URL',
    'site_url_error' => '站點URL不能為空。',
    'siteconfig_exists' => '一個siteconfig.php檔已經存在。如果運行全新安裝，請先刪除該檔。',
    'siteconfig_not_found' => '找不到siteconfig.php檔，您真的是在做升級操作嗎？',
    'siteconfig_not_writable' => '文件siteconfig.php不可寫，或者該檔所在路徑不可寫。請在繼續操作之前糾正這個問題。',
    'sitedata_help' => '<br />從下拉功能表選擇資料庫類型。通常是<strong>MySQL</strong>。同時請選擇資料庫表是否使用了<strong>UTF-8</strong>字元集(對於多語言站點一般需要選擇該選項，請注意和資料庫實際設置一致)。<br /><br />輸入資料庫伺服器的主機名。可能會和您的web伺服器不同，當您不確定時請諮詢伺服器提供商。<br /><br /><br />輸入資料庫名稱。<strong>資料庫必須已經存在。</strong>如果您不知道資料庫的名字，請聯繫您的伺服器提供商。<br /><br /><br />輸入資料庫用戶名。如果您不知道資料庫用戶名，請聯繫伺服器提供商。<br /><br /><br />輸入資料庫密碼，如果您不知道該密碼請聯繫伺服器提供商。<br /><br /><br /><br />輸入一個資料表首碼，表首碼可以用來在一個資料庫中區分多個網站的資料表。<br /><br /><br />輸入您網站的名字，它將會顯示為網站標題。例如glFusion或Mark\'s Marbles。不必擔心，您可以在以後再更改它。<br /><br /><br />請輸入網站副標題。它將會顯示在網站標題下方。例如synergy - stability - style。不必擔心，您可以在以後再更改它。<br /><br />輸入您網站的主電子郵件位址。該地址將被作為默認管理員的電郵.不必擔心，您可以在以後再更改它。<br /><br /><br />輸入您網站的不監控電郵位址。該位址將被用來發送自動生成的電子郵件、重置密碼信、或其他提醒郵件。不必擔心，您可以在以後再更改它。<br /><br /><br />請確認填寫正確的網站首頁訪問路徑或URL。<br /><br /><br />請確認填寫正確的網站管理後臺的路徑或URL。',
    'sitedata_missing' => '您輸入的網站資料存在以下問題：',
    'system_path' => '路徑設置',
    'unable_mkdir' => '無法創建目錄',
    'unable_to_find_ver' => '無法檢測glFusion的版本號',
    'upgrade_error' => '升級出錯',
    'upgrade_error_text' => '升級安裝glFusion發生錯誤。',
    'upgrade_steps' => '升級步驟',
    'upload_max_filesize' => 'glFusion允許您上傳插件、圖片和檔。您應設置至少8M的文件上傳許可權。',
    'use_utf8' => '使用UTF-8',
    'welcome_help' => '歡迎使用glFusion CMS安裝嚮導。您可以全新安裝一個網站、從glFusion的舊版本升級、或者從一個現存的Geeklog v1.5網站遷移資料。<br /><br />請選擇嚮導的語言以及需要執行的任務，然後點擊<strong>下一步</strong>繼續。',
    'wizard_version' => 'v1.1.3.svn安裝嚮導工具',
    'system_path_prompt' => '請輸入glFusion的<strong>private/</strong>目錄的完整絕對路徑。<br /><br />該路徑包括<strong>db-config.php.dist</strong>或<strong>db-config.php</strong>文件。<br /><br />例如: /home/www/glfuison/private 或  c:/www/glfusion/private<br /><br /><strong>提示：</strong> 您的public_html/的絕對路徑應該是：<br />%s<br /><br /><strong>高級設置</strong>允許您強制更改這些默認路徑，但一般情況下您不需要修改這些路徑，系統會自動為您設置。',
    'advanced_settings' => '高級設置',
    'log_path' => '日誌檔路徑',
    'lang_path' => '語言檔路徑',
    'backup_path' => '備份檔案路徑',
    'data_path' => '資料檔案路徑',
    'language_support' => '多語言支援',
    'language_pack' => '在glFusion完成安裝後，您可以下載並安裝<a href="http://www.glfusion.org/filemgmt/viewcat.php?cid=18" target="_blank">語言包</a>， 該語言包包含所有支援的語言檔。',
    'libcustom_not_found' => 'Unable to located lib-custom.php.dist.',
    'no_db_driver' => 'You must have the MySQL extension loaded in PHP to install glFusion',
    'version_check' => 'Check For Updates',
    'check_for_updates' => "Goto the <a href=\"{$_CONF['site_admin_url']}/vercheck.php\">Upgrade Checker</a> to see if there are any glFusion CMS or Plugin updates available."
);

// +---------------------------------------------------------------------------+
// success.php

$LANG_SUCCESS = array(
    0 => '安裝完成',
    1 => '安裝glFusion',
    2 => ' 完成!',
    3 => '恭喜，你已成功地',
    4 => ' glFusion 請用一分鐘時間閱讀以下的資訊：',
    5 => '要登入你的新glFusion網站, 請用這個帳戶：',
    6 => '用戶名：',
    7 => 'Admin',
    8 => '密碼：',
    9 => 'password',
    10 => '安全警告',
    11 => '不要忘記',
    12 => '項目',
    13 => '刪除或改名安裝目錄,',
    14 => '更改',
    15 => '帳戶密碼.',
    16 => '將',
    17 => '和',
    18 => '的許可權設置成',
    19 => '<strong>注意:</strong> 因為安全模式已改變, 我們已建立了新的帳戶讓你管理你的新網站.  這個新的帳戶名是 <b>NewAdmin</b> 和密碼是 <b>password</b>',
    20 => '安裝',
    21 => '升級'
);

?>