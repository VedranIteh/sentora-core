<?php

/**
 * @copyright 2020 Sentora2 (http://www.sentora2.com/) 
 * Sentora2 is a GPL fork of the Sentora Project found here:
 *
 * Generic template place holder class.
 * @package zpanelx
 * @subpackage dryden -> ui -> tpl
 * @version 1.0.0
 * @author Bobby Allen (ballen@bobbyallen.me)
 * @copyright ZPanel Project (http://www.zpanelcp.com/)
 * @link http://www.zpanelcp.com/
 * @license GPL (http://www.gnu.org/licenses/gpl.html)
 */
class ui_tpl_usedforwarders {

    public static function Template() {
        $currentuser = ctrl_users::GetUserDetail();
        return ctrl_users::GetQuotaUsages('forwarders', $currentuser['userid']);
    }

}

?>
