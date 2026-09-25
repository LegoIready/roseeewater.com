<?php
if(!function_exists("mention")) {
    $sites = array(
        "tien" => "https://tiennguyenarts.wuaze.com/?i=1",
        "julia" => "https://jploia.github.io/portfolio-2025/",
        "michael" => "https://ics.uci.edu/~mikes/",
        // eventually we want all of the keys to be formatted like below!
        'Julia Nguyen' => 'https://jploia.github.io/portfolio-2025/',
        'Michael Shindler' => 'https://ics.uci.edu/~mikes/',
        'Shion Fukuzawa' => 'https://www.shionfukuzawa.com/',
        'David Joves' => 'https://davidjoves.com/'
    );
    function mention($what, $how = NULL) {
        echo '<a href="' . (is_null($how) ? $sites[$what] : $what) . '" target="_blank">' . (is_null($how) ? $what : $how) . '</a>';
    }
}
?>