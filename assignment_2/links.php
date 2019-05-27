<?php
/* Header */
$page_title = 'Webprogramming Assignment 2';
$navigation = Array(
    'active' => 'Links',
    'items' => Array(
        'Home' => '/WP19/assignment_2/index.php',
        'Links' => '/WP19/assignment_2/links.php',
        'News' => '/WP19/assignment_2/news.php',
        'Future' => '/WP19/assignment_2/future.php'
    )
);
include __DIR__ . '/tpl/head.php';
/* Body */
include __DIR__ . '/tpl/body-start.php';

include __DIR__ . '/tpl/body-end.php';
?>
<div class="col-md-12">
    <h1>Links</h1>
</div>

<div>
<ul id="linklist">
    <h3><li><a href="https://www.google.com">Google Link</a></li></h3>
        <h3><li><a href="https://www.facebook.com">Facebook Link</a></li></h3>
            <h3><li><a href="https://www.hotmail.com">Hotmail Link</a></li></h3>
                <h3><li><a href="https://www.gmail.com">Gmail Link</a></li></h3>
                    <h3><li><a href="https://www.twitter.com">Twitter Link</a></li></h3>
</ul>

<button id="button">Fade in/out</button>
</div>


<div style="margin-top: 2%;">
<label for="link"><strong>link Name:</strong></label>
<input type="text" id="link">
<label for="url"><strong>Url:</strong></label>
<input type="url" id="url">
</div>


<button id="add-button">add</button>

    <button id='remove' style="margin-top:4%;">remove mode on/off</button>


<?php
include __DIR__ . '/tpl/footer.php';
?>