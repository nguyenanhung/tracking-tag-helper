<?php
if (!function_exists('google_analytics')) {
    /**
     * Function google_analytics
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-27 22:50
     *
     * @param string $ua
     *
     * @return string
     */
    function google_analytics($ua = '')
    {
        $out = "<script async src=\"https://www.googletagmanager.com/gtag/js?id=" . $ua . "\"></script>";
        $out .= "<script>";
        $out .= "window.dataLayer = window.dataLayer || [];";
        $out .= "  function gtag() {";
        $out .= "dataLayer.push(arguments);";
        $out .= " }";
        $out .= "   gtag('js', new Date());";
        $out .= "  gtag('config', '" . $ua . "');";
        $out .= "</script>";

        return $out;
    }
}
if (!function_exists('google_analytics_gtag')) {
    function google_analytics_gtag($ua = '')
    {
        $ua   = trim($ua);
        $gtag = "<script async src=\"https://www.googletagmanager.com/gtag/js?id=" . $ua . "\"></script>
    <script>
     window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', '" . $ua . "');
    </script>";
    }
}
if (!function_exists('add_this_script')) {
    /**
     * Function add_this_script
     *
     * @param string $id
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/4/19 33:23
     */
    function add_this_script($id = '')
    {
        return '<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=' . $id . '"></script>';
    }
}
