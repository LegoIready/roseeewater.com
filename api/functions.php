<?php
if(!function_exists("mention")) {
    $sites = array(
        "tien" => "https://tiennguyenarts.wuaze.com/?i=1",
        "julia" => "https://jploia.github.io/portfolio-2025/",
        "michael" => "https://ics.uci.edu/~mikes/",
        // eventually we want all of the keys to be formatted like below!
        "Julia Nguyen" => 'https://jploia.github.io/portfolio-2025/'
    );
    function mention($what, $how) {
        echo "<a href=\"" . $what . "\" target=\"_blank\">" . $how . "</a>";
    }
}
?>