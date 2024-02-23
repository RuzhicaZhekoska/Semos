<?php

get_header();

?>
    <main class="main">
        <?php
        get_template_part('sections/begginer','v1')

        ?>

        <?php

            $people = array(
                "persone1" => array(
                    "first_name" => "Nikola",
                    "last_name" => "Marinkovikj",
                    "des" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                    "details" => array(
                        "age" =>  19,
                        "height" => 175,
                        "weight" => 78
                    )    
                ),
                "persone2" => array(
                    "first_name" => "Ruzhica",
                    "last_name" => "Zhekoska",
                    "des" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                    "details" => array(
                        "age" =>  20,
                        "height" => 175,
                        "weight" => 80
                    )    
                ),
                "persone3" => array(
                    "first_name" => "Kristijan",
                    "last_name" => "Vasikj",
                    "des" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                    "details" => array(
                        "age" =>  20,
                        "height" => 170,
                        "weight" => 82
                    )    
                ),
            );
            

            $nikola_age = $people["persone1"]["details"]["age"];
            $ruzhica_age = $people["persone2"]["details"]["age"];
            $nikola_name = $people["persone1"]["first_name"];
            $ruzhica_name = $people["persone2"]["first_name"];
            //echo $nikola_age . " " . $nikola_name . " " . $ruzhica_age . " " . $ruzhica_name;
        ?>

    <div>
        <?php
        $isOlder = isOlder($nikola_age , $ruzhica_age);
        if($isOlder)
        {
            echo $nikola_name . " e postar od " . $ruzhica_name;
        }
        else
        {
            echo $nikola_name . " ne e postar od " . $ruzhica_name;
        }
        ?>
    </div>

    <section class="people">
    <?php    
    foreach($people as $item)
    {
        echo "<div class='persone'>";
        echo "<h3>" . $item["first_name"] . " " . $item["last_name"] . "</h3>";
        echo "<p>" . $item["des"] . "</p>";
        echo "</div>";
    }
    ?>
    </section>
    </main>
<?php

get_footer();