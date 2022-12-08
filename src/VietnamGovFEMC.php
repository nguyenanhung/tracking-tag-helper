<?php
/**
 * Project tracking-tag-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 08/12/2022
 * Time: 09:12
 */

namespace nguyenanhung\Libraries\TrackingTag;

class VietnamGovFEMC extends BaseCore
{
    public static function code($siteId = '')
    {
        $setSiteId = trim($siteId);

        return "<script type=\"text/javascript\">
        var _govaq = window._govaq || [];
        _govaq.push(['trackPageView']);
        _govaq.push(['enableLinkTracking']);
        (function() {
            _govaq.push(['setTrackerUrl', 'https://f-emc.ngsp.gov.vn/tracking']);
            _govaq.push(['setSiteId', '" . $setSiteId . "']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.defer = true;
            g.src = 'https://f-emc.ngsp.gov.vn/embed/gov-tracking.min.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>";
    }
}
