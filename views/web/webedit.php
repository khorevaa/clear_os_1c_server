<?php

/**
 * Server 1C view.
 *
 * @category   apps
 * @package    server-1c
 * @subpackage controllers
 * @author     High Tech Lider ltd. <htlead@htlead.kz>
 * @copyright  2018 High Tech Lider
 * @license    http://www.gnu.org/copyleft/gpl.html GNU General Public License version 3 or later
 * @link       https://github.com/htlead/clear_os_1c_server
 */

///////////////////////////////////////////////////////////////////////////////
// Load dependencies
///////////////////////////////////////////////////////////////////////////////

$this->lang->load('server_1c');

///////////////////////////////////////////////////////////////////////////////
// Form
///////////////////////////////////////////////////////////////////////////////

if($errs)
	echo infobox_warning(lang('base_error'), implode("<br>", $errs));

echo form_open('server_1c/web_edit');
echo form_header(lang('server_1c_web_add'));

$sslverifyoptions = array('none' => 'none', 'optional' => 'optional',  'require' => 'require' , 'optional_no_ca' => 'optional_no_ca'   );

echo field_input    ('alias',          $Alias,                                                lang('server_1c_web_alias'),         true);
echo field_input    ('server',         $Srvr,                                                 lang('server_1c_web_server'),        true);
echo field_input    ('base',           $Base,                                                 lang('server_1c_web_base'),          true);
echo field_dropdown ('sslverifyclient',$sslverifyoptions,        $SSLVerifyClient,            lang('server_1c_web_ssl'),           false);
echo field_input    ('allowoverride',  $AllowOverride,                                        lang('server_1c_web_allow_override'),true);
echo field_input    ('options',        $Options,                                              lang('server_1c_web_options'),       true);
echo field_input    ('require',        $Require,                                              lang('server_1c_web_require'),       true);
echo field_input    ('sethandler',     $SetHandler,                                           lang('server_1c_web_sethandler'),    true);
echo field_input    ('managedappdesc', $ManagedApplicationDescriptor,                         lang('server_1c_web_managed_app_desc'), true);

echo field_button_set(array(form_submit_update('submit'), anchor_cancel('/app/server_1c')));

echo form_footer();
echo form_close();

?>