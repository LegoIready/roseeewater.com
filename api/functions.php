<?php
if(!function_exists("mention")) {
    $sites = array(
        "tien" => "https://tiennguyenarts.wuaze.com/?i=1",
        "julia" => "https://jploia.github.io/portfolio-2025",
        "michael" => "https://ics.uci.edu/~mikes",
        // eventually we want all of the keys to be formatted like below!
        'Sandra Batista' => 'https://www.linkedin.com/in/sandra-batista-562b245',
        'Shion Fukuzawa' => 'https://www.shionfukuzawa.com',
        'David Joves' => 'https://davidjoves.com',
        'Aaron Kuang' => 'https://kuanga5.github.io',
        'Nero Li' => 'https://www.linkedin.com/in/neroli2000',
        'Julia Nguyen' => 'https://jploia.github.io/portfolio-2025',
        'Tien Nguyen' => 'https://tiennguyenarts.wuaze.com/?i=1',
        'Michael Shindler' => 'https://ics.uci.edu/~mikes',
        'Urja Vaidya' => 'https://urja-vaidya.netlify.app'
    );
    function mention($what, $how = NULL) {
        echo '<a href="' . (is_null($how) ? $sites[$what] : $what) . '" target="_blank">' . (is_null($how) ? $what : $how) . '</a>';
    }
}
?>