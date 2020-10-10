<?php $this->load->view('adminpanel/header'); ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <br> <h1 class="h2">Add Blog</h1>
            <form enctype="multipart/form-data" action="<?= base_url().'admin/blog/addblog_post'?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Title" value=<?= set_value('title'); ?>  >
                    <?php 
                     echo '<div style="color : red">';
                    echo form_error('title'); 
                    echo '</div>';
                    ?>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="desc" placeholder="Blog Description" value=<?= set_value('desc'); ?>>
                    <?php 
                    echo '<div style="color : red" class="mt-1">';
                     echo form_error('desc');
                     echo '</div>';
                      ?>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="file" placeholder="upload image"  value=<?= set_value('file'); ?>>

                    <?php
                    if(isset($_SESSION['img'])){
                      if ($_SESSION['img'] == "no"){
                        echo '<div style="color : red">';
                      echo "No image is selected";
                      echo '</div>';
                      }
                    }
                    // ?>

                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Blog</button>
                </div>
                </form>

 </main>


<?php $this->load->view('adminpanel/footer'); ?>

<script type="text/javascript">
  <?php 
      if (isset($_SESSION['inserted'])) {
        if ($_SESSION['inserted']=="yes") {

          echo "alert('Data Inserted Successfully!');";
        }
        else{
          echo "alert('Not Inserted!');";
        }
      }
   ?>
</script>