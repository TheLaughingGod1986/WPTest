<?php
/**
 * Template Name:FilmList
 */
get_header();
?>

    <div class="container">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-8">
                <h5>Place the films in your preferd order by draging or clicking the up and down arrow. Once you
                    have made your selection enter tour name and email and email the click "submit"</h5>
            </div>
            <div class="col-sm">

            </div>
        </div>

        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-2">
                <ol>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                </ol>
            </div>
            <div class="col-6">
                <ul id="new_fields">
                    <li id="field_id_1" name='fruits[]' class="ui-state-default">The Abyss</li>
                    <li id="field_id_2" name='fruits[]' class="ui-state-default">Aliens</li>
                    <li id="field_id_3" name='fruits[]' class="ui-state-default">The Terminator</li>
                    <li id="field_id_4" name='fruits[]' class="ui-state-default">Terminator 2: Judgement Day
                    </li>
                    <li id="field_id_5" class="ui-state-default">Avatar</li>
                    <li id="field_id_6" class="ui-state-default">Titanic</li>
                    <li id="field_id_7" class="ui-state-default">Piranha II: The Spawning</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
here
            </div>
            <div class="col-8">
                <form onclick="sendFilms" method="get">
                    Name: <input type="text" id="name" name="name"><br>
                    E-mail: <input type="text" id="email" name="email"><br>
                    <input type="submit">
                </form>
            </div>
            <div class="col-sm">
here
            </div>
        </div>
    </div>


            <?php
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/page/content', 'page');
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
            endwhile;
            ?>



    <!--            For list see front end cms page-->
    10<?php get_footer(); ?>