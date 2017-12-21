<?php
$message = $this->session->userdata('message');
if ($message) {
    ?>
    <h4 class="valid_box"><?php echo $message; ?></h4>
    <?php
    $this->session->unset_userdata('message');
} else {
    
}
?>
<?php
$error_message = $this->session->userdata('error_message');
if ($error_message) {
    ?>
    <h4 class="error_box"><?php echo $error_message; ?></h4>
    <?php
    $this->session->unset_userdata('error_message');
} else {
    
}
?>


<br />


<form  action="<?php echo base_url(); ?>super_admin/save_service" enctype="multipart/form-data" method="post">

    <header><h2>Add Service</h2>
    </header>
    <fieldset>
      
         
       

      
          <dl>
            <dt><label>Title </label></dt>
            <dd><input type="text" name="title"></dd>
        </dl>  <dl>
            <dt><label>Description </label></dt>
            <dd>
                <textarea name="description" rows="8" cols="50"></textarea>
            </dd>
        </dl>
        


        <footer>
            <div class="submit_link">

                <input type="submit" value="Save" class="alt_btn">
                <input type="reset" value="Reset">
            </div>
        </footer>

    </fieldset>
</form>
<hr /><hr />
<h4 style="color:green;">
    <?php
    $img_deleted = $this->session->userdata('message');

    if (isset($cat_deleted)) {
        echo $imgt_deleted;
        $this->session->unset_userdata('message');
    }
    ?>
</h4>
<h2>Services view</h2>
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
        <tr>
           
            <th scope="col" class="rounded">Title</th>
             <th scope="col" class="rounded">Description</th>
            <th scope="col" class="rounded">Delete</th>
            <th scope="col" class="rounded-q4">Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($all_service as $gallery_image) { ?>
            <tr> 
               
                 <td><?php echo $gallery_image->title ?></td>
                 <td><?php echo $gallery_image->description ?></td>
               
               
               <td><a href="<?php echo base_url(); ?>super_admin/delete_service/<?php echo $gallery_image->service_id ?>" class="ask" >
                        <img src="<?php echo base_url(); ?>images/trash.png" alt="" title="" border="0" /></a>   
                <td> <a href="<?php echo base_url(); ?>super_admin/edit_service/<?php echo $gallery_image->service_id; ?>"><input type="image" src="<?php echo base_url() ?>images/user_edit.png" title="Edit"></a>

                </td> 
            </tr>
        <?php } ?>
    </tbody>
</table>







