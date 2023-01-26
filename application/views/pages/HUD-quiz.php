<main role="main" id="main" class="content clearfix">
    <section class="main-content clearfix">
        <div id="node-1671" class="node node-mega-gabarit timeline-none-column" about="/consumers/new-vision-performance" typeof="sioc:Item foaf:Document">
            <div class="paragraphs-items paragraphs-items-field-mega-gabarit-content paragraphs-items-field-mega-gabarit-content-full paragraphs-items-full mega-gabarit-content">
                <div data-position="1" class="container-white container-mg clearfix parent">
                    <div class="inner clearfix">
                        <div class="mega-gabarit html_js_css_bundle " about="" typeof="">
                            <div class="block-full-hjc" id="block-full-hjc" style="background-color: transparent;" about="/block/html-total-quartz" typeof="">
                                <div id="tqp__container" class="video-container" style="background-color: transparent !important;">
                                    <form id="regForm" method="post" action="administrator/submit_quiz">
                                        <!-- One "tab" for each step in the form: -->
                                        <?php if (!empty($questions)) { 
                                            $serial = 0;
                                         ?>
                                            <?php foreach ($questions as $question => $values) {
                                                $serial++;
                                             ?>
                                                <div class="tab quiz-options" id="serial-<?php echo $serial; ?>">
                                                    <p><?php echo $question; ?></p>
                                                    <br />
                                                    <?php if (!empty($values['answers'])) { ?>
                                                        <?php foreach ($values['answers'] as $idx => $answer) { ?>
                                                            <p><?php echo $idx + 1; ?>: <?php echo $answer['answer'] ?> <input id="serial<?php echo $serial; ?>-idx-<?php echo $idx + 1; ?>" type="radio" oninput="this.className = ''" name="q-<?php echo $values['qid'] ?>" value="<?php echo $answer['aid'] ?>"></p>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>

                                        <div style="overflow:auto;">
                                            <div style="float:right;">
                                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                            </div>
                                        </div>
                                        <!-- Circles which indicates the steps of the form: -->
                                        <div style="text-align:center;margin-top:40px;">
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                        </div>
                                    </form>
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
<script>
    var currentTab;

    if(!localStorage.getItem('current_tab')){
        localStorage.setItem('current_tab', 1);
        currentTab = 0; // Current tab is set to be the first tab (0)
    }else{
        for(var i=localStorage.getItem('current_tab');i>0;i--){
            var prev = parseInt(localStorage.getItem('current_tab')) - i + 1;
            document.getElementById('serial-'+prev).style.display = 'none';
        }
        
        currentTab = parseInt(localStorage.getItem('current_tab')) - 1;
        document.getElementById('serial-'+localStorage.getItem('current_tab')).style.display = 'block';
    }

    showTab(currentTab); // Display the current tab

    if(localStorage.getItem('quiz_started')){
        console.log('Quiz Started');
    }else if(!localStorage.getItem('quiz_started')){
        localStorage.setItem('quiz_started', 'true');
        setCookie('automotive_quiz_started','true',7);
    }

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        var curr = parseInt(localStorage.getItem('current_tab')) + parseInt(n);
        localStorage.setItem('current_tab', curr);
        // Exit the function if any field in the current tab is invalid:
        // if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
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