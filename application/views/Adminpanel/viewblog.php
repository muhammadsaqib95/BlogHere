<?php $this->load->view('adminpanel/header'); ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="row mt-3">
            <h2 class="h2" >View Blog</h2>
            <!-- <div class="col-4">
              <input type=search name="search" placeholder="Search">
            </div> -->
                <nav class="navbar navbar-light bg-light">
                <form class="form-inline" style="margin-left:40rem" enctype="multipart/form-data"
                 method="post" action="<?= base_url().'admin/blog/search' ?>" >
                  <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search">
                  <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
              </nav>
        </div>
            <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
               <?php
            //         echo "<pre>";
            // print_r($result);
            // die();
            if($result != null){
                    $counter=1;
                    foreach($result as $key => $value){
                       echo "<tr>
                  <td>".$counter."</td>
                  <td>".$value['b_Title']."</td>
                  <td>".$value['b-Discription']."</td>
                  <td><img src='".base_url().$value['b_Img']."' class='image-fluid' width ='100'></td>
                  
                 <td><a class=\"btn btn-primary\" href='".base_url().'admin/blog/edit_blog/'.$value['b_Id']."'>Edit</td>

                  <td><a class=\"btn delete btn-danger\"href='#.' data-id='".$value['b_Id']."' >Delete</td>
                </tr>";
                $counter=$counter+1;
                    }
            }
            else{
              echo "<tr><td>No data found against this query.</td></tr>";
            }
                  
                  
               ?>
                             
              </tbody>
            </table>
          </div>

 </main>


<?php $this->load->view('adminpanel/footer'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script src="assets/js/3.4.1/jquery.min.js"></script>  -->
<script type="text/javascript">
$(".delete").click(function(){
    var delete_id = $(this).attr('data-id');
    var bool = confirm('Are you sure??');
    console.log(bool);
    if (bool){
        $.ajax({
            url :'<?= base_url().'admin/blog/delete_blog/' ?>',
            type : 'post',
            data : {'delete_id' : delete_id},
            success : function(response){
                console.log(response);
                if (response == "deleted"){
                    location.reload();
                }
                elseif (response == "notdeleted") 
                {
                    alert('Something went wrong and blog is not deleted!');
                }
            }
        })
    }
    else{
        // alert('not move to delete functionality');
    }

});



</script>