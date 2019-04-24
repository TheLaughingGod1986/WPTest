<?php
/**
 * Template Name:FilmList
 */
get_header();
?>
    <div class="row">
        <div class="col-7 offset-3">
            <h5>Place the films in your preferred order by dragging or clicking the up and down arrow. Once you
                have made your selection enter tour name and email and email the click "submit"</h5>
        </div>
    </div>

    <div class="row ">
        <div class="col-4 text-right">
            <ol style="float: right;">
                <li class="numberCircleFirst">1</li>
                <li class="numberCircle">2</li>
                <li class="numberCircle">3</li>
                <li class="numberCircle">4</li>
                <li class="numberCircle">5</li>
                <li class="numberCircle">6</li>
                <li class="numberCircle">7</li>

            </ol>
        </div>
        <div class="col-5">
            <ul id="new_fields" class="updownrow">
                <li id="field_id_1" class="ui-state-default border-round border border-secondary">The Abyss
                    <span class="glyphicon-arrow-up">Up</span><span class="glyphicon-arrow-down">Down</span>
                </li>
                <li id="field_id_2" class="ui-state-default border-round border border-secondary">Aliens
                    <span class="glyphicon-arrow-up">Up</span><span class="glyphicon-arrow-down">Down</span>
                </li>
                <li id="field_id_3" class="ui-state-default border-round border border-secondary">The Terminator
                    <span class="glyphicon-arrow-up">Up</span><span class="glyphicon-arrow-down">Down</span>
                </li>
                <li id="field_id_4" class="ui-state-default border-round border border-secondary">Terminator 2:
                    Judgement Day
                    <span class="glyphicon-arrow-up">Up</span><span class="glyphicon-arrow-down">Down</span>
                </li>
                <li id="field_id_5" class="ui-state-default border-round border border-secondary">Avatar
                    <span class="glyphicon-arrow-up">Up</span><span class="glyphicon-arrow-down">Down</span>
                </li>
                <li id="field_id_6" class="ui-state-default border-round border border-secondary">Titanic
                    <span class="glyphicon-arrow-up">Up</span><span class="glyphicon-arrow-down">Down</span>
                </li>
                <li id="field_id_7" class="ui-state-default border-round border border-secondary">Piranha II: The
                    Spawning
                    <span class="glyphicon-arrow-up">Up</span><span class="glyphicon-arrow-down">Down</span>
                </li>
            </ul>
        </div>
    </div>



        <form onclick="sendFilms()" method="get">
            <div class="row">
                <div class="col-3 offset-md-3">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name[required]">
                </div>
                <div class="col-3 ">
                    <input type="text" id="email" name="email" class="form-control" placeholder="Email address[required]">
                </div>

                <input class="float-right quick-override" type="submit">
            </div>
        </form>





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
<?php get_footer(); ?>