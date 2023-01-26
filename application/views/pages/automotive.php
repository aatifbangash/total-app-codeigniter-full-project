<?php
if(isset($_COOKIE['automotive_game_started']) && $_COOKIE['automotive_game_started'] == 'true') {
    header('Location: /HUD');
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
                                <div id="tqp__container" class="video-container">
                                    <video id="video1" controls autoplay="autoplay">
                                        <source src="<?php echo base_url(); ?>assets/index_files/animation2.mp4" type="video/mp4">
                                        <source src="<?php echo base_url(); ?>assets/index_files/animation2.ogg" type="video/ogg">
                                        Your browser does not support HTML video.
                                    </video>
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
<script type='text/javascript'>
    var animationVideo = document.getElementById('video1');
    animationVideo.controls = false;
    animationVideo.addEventListener('click', function(e) {
        e.preventDefault();
        animationVideo.play();
    });
    animationVideo.addEventListener('ended', myHandler, false);
	
    if(localStorage.getItem('automotive')){
        console.log('Automotive set.');
    }else if(!localStorage.getItem('automotive')){
        localStorage.setItem('automotive', 'true');
        localStorage.removeItem("transport");
    }

	if(localStorage.getItem('video_watched')){
		document.getElementById('video1').remove();
        document.querySelector('.video-container').innerHTML = '<img src="<?php echo base_url(); ?>assets/index_files/image6.jpeg" alt="" id="video" class="tqp__content_container"><div class="game-btns"><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p><a class="game-main-btn" href="<?php echo base_url(); ?>HUD">Start Game</a></div>';
	}

    function myHandler(e) {
        if(localStorage.getItem('video_watched')){
			console.log('Video Watched.');
		}else if(!localStorage.getItem('video_watched')){
			localStorage.setItem('video_watched', 'true');
            setCookie('automotive_video_watched','true',7);
		}
        document.getElementById('video1').remove();
        document.querySelector('.video-container').innerHTML = '<img src="<?php echo base_url(); ?>assets/index_files/image6.jpeg" alt="" id="video" class="tqp__content_container"><div class="game-btns"><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p><a class="game-main-btn" href="<?php echo base_url(); ?>HUD">Start Game</a></div>';
        // What you want to do after the event
    }

    function setCookie(name,value,days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }
    function eraseCookie(name) {   
        document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }
</script>