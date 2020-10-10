<?php $this->load->view('adminpanel/header'); ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <br> <h1 class="h2">edit Blog</h1>
        <?php  
            //     echo "<pre>";
            //   print_r($result);
            //   die();
              ?>
            <form enctype="multipart/form-data" action="<?= base_url().'admin/blog/editblog_post'?>" method="post">
            <select class="custom-select" name="publish-unpublish">
                <option value="1" <?= ($result[0]['b_Status'] == "1" ? "selected": ""); ?>>Publish</option>
                <option value="0" <?= ($result[0]['b_Status'] == "0" ? "selected": ""); ?>>Unpublish</option>
            </select>
                <div class="form-group" style="margin-top : 10px">
                <input type="hidden" name="blog_id" value="<?= $result[0]['b_Id']?>">
                    <input type="text" value="<?= $result[0]['b_Title']?>" class="form-control" name="title" 
                    placeholder="Title">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="desc" placeholder="Blog Description"
                    ><?= $result[0]['b-Discription']?></textarea>
                    
                </div>
                <div class="form-group">
                    <img width="100" src="<?= base_url().$result[0]['b_Img']?>" alt="blog image">
                    <input type="file" class="form-control optional " name="file" placeholder="upload image">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Edit Blog</button>
                </div>
                </form>

 </main>


<?php $this->load->view('adminpanel/footer'); ?>

<script type="text/javascript">
  <?php 
      if (isset($_SESSION['updated'])) {
        if ($_SESSION['updated']=="yes") {

          echo "alert('Data updated Successfully!')";
        }
        else{
          echo "alert('Soem thing went wrong and data couldn't updated!')";
        }
      }
   ?>
</script>