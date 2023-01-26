     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admintemplate/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admintemplate/assets/pages/data-table/css/buttons.dataTables.min.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admintemplate/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admintemplate/bower_components/ekko-lightbox/dist/ekko-lightbox.css">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admintemplate/bower_components/lightbox2/dist/css/lightbox.css">

     <script type="text/javascript">
         $(document).ready(function() {
             $(".delete").click(function(e) {
                 alert('as');
                 $this = $(this);
                 e.preventDefault();
                 var url = $(this).attr("href");
                 $.get(url, function(r) {
                     if (r.success) {
                         $this.closest("tr").remove();
                     }
                 })
             });
         });
         $(document).ready(function() {
             $(".enable").click(function(e) {
                 alert('as');
                 $this = $(this);
                 e.preventDefault();
                 var url = $(this).attr("href");
                 $.get(url, function(r) {
                     if (r.success) {
                         $this.closest("tr").remove();
                     }
                 })
             });
         });
         $(document).ready(function() {
             $(".desable").click(function(e) {
                 alert('as');
                 $this = $(this);
                 e.preventDefault();
                 var url = $(this).attr("href");
                 $.get(url, function(r) {
                     if (r.success) {
                         $this.closest("tr").remove();
                     }
                 })
             });
         });
     </script>



     <div class="page-header">
         <div class="page-header-title">
             <h4>List Questions</h4>
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
                 <li class="breadcrumb-item"><a href="#!">List Questions</a>
                 </li>
             </ul>
         </div>
     </div>

     <!-- Page-header end -->
     <!-- Page-body start -->
     <div class="page-body">
         <!-- DOM/Jquery table start -->
         <div class="card">
             <div class="card-block">
                 <div class="table-responsive dt-responsive">
                     <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                         <thead>
                             <tr>
                                 <th>Id</th>
                                 <th>Question</th>
                                 <th>Category</th>
                                 <th>Answers</th>
                                 <th>Options</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php foreach ($quizes as $post) : ?>
                                 <tr>
                                     <td><?php echo $post['id']; ?></td>
                                     <td><a href="edit-blog.php?id=14"><?php echo $post['question']; ?></a></td>
                                     <td><?php echo $post['category']; ?></td>
                                     <td>
                                         <a class="label label-inverse-primary enable" href='<?php echo base_url(); ?>administrator/answers/<?php echo $post['id']; ?>'>Ansers</a>

                                     </td>
                                     <td>

                                         <a class="label label-inverse-info" href='<?php echo base_url(); ?>administrator/quiz/update-quiz/<?php echo $post['id']; ?>'>Edit</a>
                                         <a class="label label-inverse-danger delete" href='<?php echo base_url(); ?>administrator/delete/<?php echo $post['id']; ?>?table=<?php echo base64_encode('quiz'); ?>'>Delete</a>

                                     </td>
                                 </tr>
                             <?php endforeach; ?>

                             <!-- <div class="paginate-link">
                                    <?php //echo $this->pagination->create_links(); 
                                    ?>
                                </div>  -->

                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
         <!-- DOM/Jquery table end -->
     </div>