<?php
/**
 * Project tracking-tag-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 08/12/2022
 * Time: 09:14
 */
if (!function_exists('ngsp_f_emc_tracking_code')) {
    function ngsp_f_emc_tracking_code($siteId = '')
    {
        return \nguyenanhung\Libraries\TrackingTag\VietnamGovFEMC::code($siteId);
    }
}
