<main role="main" id="main" class="content clearfix">
    <section class="main-content clearfix">
        <div class="title-media">
            <div class="inner">
                <h1 class="banner-title red">A new vision of performance</h1>
            </div>
        </div>
        <div id="node-1671" class="node node-mega-gabarit timeline-none-column" about="/consumers/new-vision-performance" typeof="sioc:Item foaf:Document">
            <div class="paragraphs-items paragraphs-items-field-mega-gabarit-content paragraphs-items-field-mega-gabarit-content-full paragraphs-items-full mega-gabarit-content">
                <div data-position="1" class="container-white container-mg clearfix parent">
                    <div class="inner clearfix">
                        <div class="mega-gabarit html_js_css_bundle " about="" typeof="">
                            <div class="block-full-hjc" about="/block/html-total-quartz" typeof="">
                                <div id="tqp__container">
                                    <div id="tqp__bidon-carousel">
                                        <div id="tqp__bidon-carousel_absolute" class="tqp__absolute">
                                            <div id="tqp__bidon-wrapper" class="tqp__absolute">
                                                <div id="tqp__bidon-button-s2" data-frame="2" class="tqp__bidon-button tqp__absolute"><img src="<?php echo base_url(); ?>assets/index_files/bidon-button.png" alt="" class="tqp__bidon-button-img" onclick="openVideo(1);" id="icon-1"><img src="<?php echo base_url(); ?>assets/index_files/bidon-button-close.png" alt="" class="tqp__bidon-button-img-close"></div>
                                                <div id="tqp__bidon-button-s3" data-frame="3" class="tqp__bidon-button tqp__absolute"><img src="<?php echo base_url(); ?>assets/index_files/bidon-button.png" alt="" class="tqp__bidon-button-img" onclick="openVideo(2);" id="icon-2"><img src="<?php echo base_url(); ?>assets/index_files/bidon-button-close.png" alt="" class="tqp__bidon-button-img-close"></div>
                                                <div id="tqp__bidon-button-s4" data-frame="4" class="tqp__bidon-button tqp__absolute"><img src="<?php echo base_url(); ?>assets/index_files/bidon-button.png" alt="" class="tqp__bidon-button-img" onclick="openVideo(3);" id="icon-3"><img src="<?php echo base_url(); ?>assets/index_files/bidon-button-close.png" alt="" class="tqp__bidon-button-img-close"></div>
                                                <div id="tqp__bidon-button-s5" data-frame="5" class="tqp__bidon-button tqp__absolute"><img src="<?php echo base_url(); ?>assets/index_files/bidon-button.png" alt="" class="tqp__bidon-button-img" onclick="openVideo(4);" id="icon-4"><img src="<?php echo base_url(); ?>assets/index_files/bidon-button-close.png" alt="" class="tqp__bidon-button-img-close"></div>
                                                <div id="tqp__bidon-button-s6" data-frame="6" class="tqp__bidon-button tqp__absolute"><img src="<?php echo base_url(); ?>assets/index_files/bidon-button.png" alt="" class="tqp__bidon-button-img" onclick="openVideo(5);" id="icon-5"><img src="<?php echo base_url(); ?>assets/index_files/bidon-button-close.png" alt="" class="tqp__bidon-button-img-close"></div>
                                                <img src="<?php echo base_url(); ?>assets/index_files/bidon.png" alt="" id="tqp__bidon">
                                            </div>

                                            <div id="tqp__bc-s1" data-mw="180" class="tqp__bc-item">
                                                <div class="tqp__bc-left tqp__content_container">
                                                    <div class="tqp__bc-content tqp__absolute">
                                                        <h2>Total,<br>performance<br>&amp;efficiency</h2>
                                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Quaerat hic ut suscipit tempore amet quasi distinctio
                                                            tempora eaque? Libero velit enim facere similique esse,
                                                            corporis aliquam quas repellat sunt nesciunt.</p>
                                                        <br />
                                                        <a class="game-main-btn btn" id="join_game" href="<?php echo base_url(); ?>HUD-quiz">Join
                                                            The Quiz</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
    var videosCount = 0;

    if(localStorage.getItem('game_started')){
        console.log('Game Started');
    }else if(!localStorage.getItem('game_started')){
        localStorage.setItem('game_started', 'true');
        setCookie('automotive_game_started','true',7);
    }

	if(localStorage.getItem('section-1')){
		document.getElementById('icon-1').src = 'assets/index_files/check.png';
        videosCount++;
	}
	if(localStorage.getItem('section-2')){
		document.getElementById('icon-2').src = 'assets/index_files/check.png';
        videosCount++;
	}
	if(localStorage.getItem('section-3')){
		document.getElementById('icon-3').src = 'assets/index_files/check.png';
        videosCount++;
	}
	if(localStorage.getItem('section-4')){
		document.getElementById('icon-4').src = 'assets/index_files/check.png';
        videosCount++;
	}
	if(localStorage.getItem('section-5')){
		document.getElementById('icon-5').src = 'assets/index_files/check.png';
        videosCount++;
	}

    $('#join_game').click(function(e) {
        if(videosCount < 5){
            return false;
        }
    });


    function openVideo(val) {
        Swal.fire({
            // title: '<strong>HTML <u>example</u></strong>',
            // icon: 'info',
            html: '<video style="width:100%" controls autoplay="autoplay"><source src="<?php echo base_url(); ?>assets/index_files/animation2.mp4" type="video/mp4"><source src="<?php echo base_url(); ?>/assets/index_files/animation2.ogg" type="video/ogg">Your browser does not support HTML video.</video>',
            showCloseButton: false,
            // showCancelButton: true,
            // focusConfirm: false,
            confirmButtonText: 'Close',
            // confirmButtonAriaLabel: 'Thumbs up, great!',
            // cancelButtonText:
            //     '<i class="fa fa-thumbs-down"></i>',
            // cancelButtonAriaLabel: 'Thumbs down'
        });
		
		if(localStorage.getItem('section-'+val)){
			console.log('Video Watched.');
		}else if(!localStorage.getItem('section-'+val)){
			localStorage.setItem('section-'+val, 'true');
		}

        var count = 0;

        for (var i=1;i<=5;i++){
            if(localStorage.getItem('section-'+i)){
                count++;
            }
        }

        if(count >= 5){
            videosCount = 5;
        }

		document.getElementById('icon-'+val).src = 'assets/index_files/check.png';
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