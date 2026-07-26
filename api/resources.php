<?php
$title = 'Resources';
include('header.php');
?>
<h1>Resources</h1>
<h2>Rosa's Notas</h2>
<p>I read a lot of textbooks, and I take notes on them. These are meant to be refreshers or references, not full notes, so you won't find many explanations, proofs, or practice problems. Sources and upcoming notes are (soon to be) on my <?php mention("https://github.com/LegoIready","GitHub"); ?>.</p>
<h2>Mathematics</h2>
<ul>
    <li><?php mention("/files/notes/Rose's Modern Geometry.pdf","Rose's Modern Geometry"); ?>. 2026.</li>
    <li><a href="/files/notes/Rose's Linear Algebra.pdf" target="_blank">"Rose's Linear Algebra."</a> 2026.</li>
    <li><a href="/files/notes/Rose's Statistics.pdf" target="_blank">"Rose's Statistics."</a> 2025.</li>
    <li><a href="/files/notes/Rose's Discrete Mathematics.pdf" target="_blank">"Rose's Discrete Mathematics."</a> 2025.</li>
</ul>
<h2>Computer Science</h2>
<ul>
    <li><a href="/files/notes/Rose's Programming in MATLAB.pdf" target="_blank">"Rose's Programming in MATLAB."</a> 2025.</li>
    <li><a href="/files/notes/Rose's Programming in Python.pdf" target="_blank">"Rose's Programming in Python."</a> 2024.</li>
    <li><a href="/files/notes/Rose's Programming in C++.pdf" target="_blank">"Rose's Programming in C++."</a> 2024.</li>
</ul>
<h2>External Resources</h2>
<p>These are some helpful resources written by other people.</p>
<section id="resources">
    <script> echo_list("resources"); </script>
</section>
<?php
include("footer.php");
?>