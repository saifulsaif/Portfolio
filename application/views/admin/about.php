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


<form  action="<?php echo base_url(); ?>super_admin/save_about" enctype="multipart/form-data" method="post">

    <header><h2>Add About</h2>
    </header>
    <fieldset>
      
         
       

        <dl>
            <dt><label> Image</label></dt>
            <dd><input type="file" name="photo"></dd>
        </dl>
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
            <th scope="col" class="rounded"> Image</th>
            <th scope="col" class="rounded">Title</th>
             <th scope="col" class="rounded">Description</th>
            <th scope="col" class="rounded">Delete</th>
            <th scope="col" class="rounded-q4">Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($all_about as $gallery_image) { ?>
            <tr> 
               
                <td><img height="200" width="200px" src="<?php echo $gallery_image->photo ?>"/></td>                      
                <td><?php echo $gallery_image->title ?></td>
                 <td><?php echo $gallery_image->description ?></td>
               
               
               <td><a href="<?php echo base_url(); ?>super_admin/delete_about/<?php echo $gallery_image->about_id ?>" class="ask" >
                        <img src="<?php echo base_url(); ?>images/trash.png" alt="" title="" border="0" /></a>   
                <td> <a href="<?php echo base_url(); ?>super_admin/edit_about/<?php echo $gallery_image->about_id; ?>"><input type="image" src="<?php echo base_url() ?>images/user_edit.png" title="Edit"></a>

                </td> 
            </tr>
        <?php } ?>
    </tbody>
</table>







