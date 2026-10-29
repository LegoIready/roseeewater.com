<?php
if(!function_exists("mention")) {
    $sites = array(
        'Sandra Batista' => 'https://www.linkedin.com/in/sandra-batista-562b245',
        'Shion Fukuzawa' => 'https://www.shionfukuzawa.com',
        'David Joves' => 'https://davidjoves.com',
        'Aaron Kuang' => 'https://kuanga5.github.io',
        'Nero Li' => 'https://www.linkedin.com/in/neroli2000',
        'Julia Nguyen' => 'https://jploia.com',
        'Tien Nguyen' => 'https://tiennguyenarts.wuaze.com',
        'Cynthia Roxanne Ortiz' => 'https://www.linkedin.com/in/cynthia-roxanne-ortiz',
        'Michael Shindler' => 'https://ics.uci.edu/~mikes',
        'Urja Vaidya' => 'https://urja-vaidya.netlify.app'
    );
    /**
     * Generates a hyperlink that opens in a new tab. Usage is `mention(name)` or `mention(link, text)`.
     * @param string $what The name of the thing mentioned as listed in $sites, or, if $how is set, the url of the thing mentioned.
     * @param string $how The name of the thing mentioned, if not an entry in $sites.
     * @return null.
     */
    function mention($what, $how = NULL) {
        echo '<a href="' . (is_null($how) ? $GLOBALS['sites'][$what] : $what) . '" target="_blank">' . (is_null($how) ? $what : $how) . '</a>';
    }
}
?>