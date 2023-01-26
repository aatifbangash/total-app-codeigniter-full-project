<?php
  if(isset($_COOKIE['automotive_video_watched']) && $_COOKIE['automotive_video_watched'] == 'true') {
    if(isset($_COOKIE['automotive_game_started']) && $_COOKIE['automotive_game_started'] == 'true') {
        if(isset($_COOKIE['automotive_quiz_started']) && $_COOKIE['automotive_quiz_started'] == 'true') {
            header('Location: /HUD-quiz');
        }else{
            header('Location: /HUD');
        }
    }else{
        header('Location: /automotive');
    }
  }else if(isset($_COOKIE['transport_video_watched']) && $_COOKIE['transport_video_watched'] == 'true'){
    header('Location: /transport');
  }
?>
<main role="main" id="main" class="content clearfix">
    <section class="main-content clearfix">
        <div id="node-1671" class="node node-mega-gabarit timeline-none-column" about="/consumers/new-vision-performance" typeof="sioc:Item foaf:Document">
            <div class="paragraphs-items paragraphs-items-field-mega-gabarit-content paragraphs-items-field-mega-gabarit-content-full paragraphs-items-full mega-gabarit-content">
                <div data-position="1" class="container-white container-mg clearfix parent">
                    <div class="inner clearfix">
                        <div class="mega-gabarit html_js_css_bundle " about="" typeof="">
                            <div class="block-full-hjc" id="block-full-hjc" about="/block/html-total-quartz" typeof="">
                                <div id="tqp__container">
                                    <img src="<?php echo base_url(); ?>assets/index_files/image2.png" alt="" id="video" class="tqp__content_container">
                                    <div class="game-btns">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <a class="game-main-btn" id="game-main-btn1" href="<?php echo base_url(); ?>automotive">Automotive</a>
                                        <a class="game-main-btn" id="game-main-btn2" href="<?php echo base_url(); ?>transport.html">Transport</a>
                                    </div>
                                </div>
                                <script type="text/javascript" src="<?php echo base_url(); ?>assets/index_files/jquery-2.1.1.min.js"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-bottom">
    </section>
</main>