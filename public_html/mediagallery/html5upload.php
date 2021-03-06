<?php
// +--------------------------------------------------------------------------+
// | Media Gallery Plugin - glFusion CMS                                      |
// +--------------------------------------------------------------------------+
// | html5upload.php                                                          |
// |                                                                          |
// | Processes media files uploaded via HTML 5                                |
// +--------------------------------------------------------------------------+
// | Copyright (C) 2009-2015 by the following authors:                        |
// |                                                                          |
// | Mark R. Evans          mark AT glfusion DOT org                          |
// | Mark A. Howard         mark AT usable-web DOT com                        |
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

global $_CONF, $_USER, $_PLUGINS, $_MG_CONF;

require_once '../lib-common.php';

// main

if (!in_array('mediagallery', $_PLUGINS)) {
    COM_errorLog( 'HTML5Upload: MediaGallery not found in $_PLUGINS', 1 );
    COM_404();
    exit;
}

require_once $_CONF['path'].'plugins/mediagallery/include/init.php';

$uid = (isset($_GET['uid'])) ? COM_applyFilter( $_GET['uid'], true ) : '';
$sid = (isset($_GET['sid'])) ? COM_applyFilter( $_GET['sid'], false ) : '';
$aid = (isset($_GET['aid'])) ? COM_applyFilter( $_GET['aid'], true ) : '';

if( $_MG_CONF['verbose'] ) {
    COM_errorLog( '***Inside HTML5Upload main()***', 1 );
    COM_errorLog( 'received uid=' . $uid, 1 );
    COM_errorLog( 'received sid=' . $sid, 1 );
    COM_errorLog( 'received aid=' . $aid, 1 );
}

// let's try to set the $_USER array
$_USER = SESS_getUserDataFromId( $uid );
if( isset($_USER['error']) && $_USER['error'] == '1' ) {
    COM_errorLog( 'HTML5Upload: User identified by uid=' . $uid . ' not found.', 1 );
    echo $LANG_MG01['swfupload_err_session'];
    exit (0);
} elseif(!isset($_USER['uid']) || $_USER['uid'] < 2 ) {
    COM_errorLog( 'HTML5Upload: Anonymous upload rejection.', 1 );
    echo 'Anonymous upload rejected';
    exit(0);
}

// ok, we have a valid uid, but now check the token.  if it is invalid, then
// return the user to the swfupload page.
if( !(SEC_checkTokenGeneral( $sid, 'html5upload' )) ) {
    COM_errorLog( 'HTML5Upload: Invalid token=' . $sid . ' for uid=' . $uid, 1 );
    echo "Session has expired, please reload the page";
    exit(0);
}

// the upload is authenticated

if ( $_MG_CONF['verbose'] ) {
    COM_errorLog( 'The upload is authentic', 1 );
    COM_errorLog( 'Retrieved ' . count($_USER) . ' user data values', 1 );
    COM_errorLog( '***Leaving HTML5Upload main()***', 1 );
}

$_GROUPS = SEC_getUserGroups( $_USER['uid'] );
$_RIGHTS = explode( ',', SEC_getUserPermissions() );

MG_initAlbums();

// now that we're sure we have the right user

require_once $_CONF['path'] . 'plugins/mediagallery/include/lib-upload.php';
require_once $_CONF['path'] . 'plugins/mediagallery/include/newmedia.php';

if ( COM_isAnonUser() && $_MG_CONF['loginrequired'] == 1 )  {
    exit;
}

$rc = MG_saveHTML5Upload( $aid );
COM_errorLog($rc);
echo $rc;
exit(0);
?>