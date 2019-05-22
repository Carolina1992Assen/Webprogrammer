<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Simple Form',
    'items' => Array(
        'News' => '/WP19/assignment_3/index.php',
        'Add news item' => '/WP19/assignment_3/news_add.php',
        'Leap Year' => '/WP19/assignment_3/leapyear.php',
        'Simple Form' => '/WP19/assignment_3/simple_form.php'
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';

?>






    <div  class="hi">
        <h1>

        <?php
            $name = isset($_GET['nana']) ? $_GET['nana']: "";
            if ($name !== "") {
            echo("Welcome {$name}!");
        };
        ?>
        </h1>
    </div>

    <div>
        <p>
        <?php $place = isset($_GET['p']) ? $_GET['p']:'';
        if ($place !== "") {
            if ($place == "Amsterdam") {
                echo "You're from the capital of the Netherlands!";
            } else {
                echo("You're from {$place}!");
            };
        };
        ?>
        </p>
    </div>

        <div class="container">
            <div class="row wp-row">
                <div class="col-md-12">
                    <form action="simple_form.php" method="GET" id="my_form">
                        <div class="form-group">
                        <label for="name">name:</label>
                         <input type="text" class="form-control" id="name" name="nana">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Enter a valid name
                            </div>
                        <label for="place">place:</label>
                        <input type="text" id="place" class="form-control" name="p">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Enter a valid place
                            </div>
                            <button id="sub" class="button-hide">Send</button>
                        </div>


                     </form>

               </div>
            </div>
        </div>


   
<?php
include __DIR__ . '/tpl/body_end.php';
?>
