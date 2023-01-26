   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admintemplate/bower_components/switchery/dist/switchery.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admintemplate/assets/pages/advance-elements/css/bootstrap-datetimepicker.css">
   <!-- Date-range picker css  -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admintemplate/bower_components/bootstrap-daterangepicker/daterangepicker.css" />
   <!-- Date-Dropper css -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admintemplate/bower_components/datedropper/datedropper.min.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admintemplate/bower_components/switchery/dist/switchery.min.css" />

   <div class="page-header">
       <div class="page-header-title">
           <h4>Quiz</h4>
       </div>
       <div class="page-header-breadcrumb">
           <ul class="breadcrumb-title">
               <li class="breadcrumb-item">
                   <a href="index-2.html">
                       <i class="icofont icofont-home"></i>
                   </a>
               </li>
               <li class="breadcrumb-item"><a href="#!">Quiz</a>
               </li>
               <li class="breadcrumb-item"><a href="#!">Update Answer</a>
               </li>
           </ul>
       </div>
   </div>
   <!-- Page header end -->
   <!-- Page body start -->
   <div class="page-body">
       <div class="row">
           <div class="col-sm-12">
               <!-- Basic Form Inputs card start -->
               <div class="card">
                   <div class="card-block">
                       <div class="col-sm-8">
                           <?php echo form_open_multipart('administrator/update_answer_data'); ?>
                           <input type="hidden" name="id" class="form-control" value="<?php echo $answer['id']; ?>">
                           <input type="hidden" name="qid" class="form-control" value="<?php echo $answer['qid']; ?>">
                           <div class="form-group row">
                               <label class="col-sm-2 col-form-label">Answer</label>
                               <div class="col-sm-10">
                                   <input type="text" name="answer" class="form-control" value="<?php echo $answer['answer']; ?>" placeholder="Full Name">
                               </div>
                           </div>

                           <div class="form-group row">
                               <label class="col-sm-2 col-form-label">Is Correct</label>
                               <div class="col-sm-10">
                                   <select name="isCorrect" class="form-control" placeholder="User Name">
                                       <option <?php echo ($answer['isCorrect'] == '0') ? 'selected' : ''; ?> value="0">No</option>
                                       <option <?php echo ($answer['isCorrect'] == '1') ? 'selected' : ''; ?> value="1">Yes</option>
                                   </select>
                               </div>
                           </div>



                           <div class="form-group row">
                               <label class="col-sm-2 col-form-label"></label>
                               <div class="col-sm-10">
                                   <button type="submit" name="submit" class="btn btn-primary">Update</button>
                               </div>
                           </div>
                           <textarea id="description" style="visibility: hidden;"></textarea>
                           </form>
                       </div>

                   </div>
               </div>
           </div>
           <!-- Basic Form Inputs card end -->


           <script type="text/javascript" src="<?php echo base_url(); ?>admintemplate/bower_components/switchery/dist/switchery.min.js"></script>
           <!-- Custom js -->
           <script type="text/javascript" src="<?php echo base_url(); ?>admintemplate/assets/pages/advance-elements/swithces.js"></script>
           <script type="text/javascript" src="<?php echo base_url(); ?>admintemplate/assets/pages/advance-elements/moment-with-locales.min.js"></script>
           <script type="text/javascript" src="<?php echo base_url(); ?>admintemplate/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
           <script type="text/javascript" src="<?php echo base_url(); ?>admintemplate/assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>
           <!-- Date-range picker js -->
           <script type="text/javascript" src="<?php echo base_url(); ?>admintemplate/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
           <!-- Date-dropper js -->
           <script type="text/javascript" src="<?php echo base_url(); ?>admintemplate/bower_components/datedropper/datedropper.min.js"></script>


           <!-- ck editor -->
           <script src="<?php echo base_url(); ?>admintemplate/bower_components/ckeditor/ckeditor.js"></script>
           <!-- echart js -->

           <script src="<?php echo base_url(); ?>admintemplate/assets/pages/user-profile.js"></script>