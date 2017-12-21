
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


<form  action="<?php echo base_url(); ?>index.php/super_admin/save_header" enctype="multipart/form-data" method="post">
 
    <header><h2>Add Header Information</h2>
    </header>
    <fieldset>
        <dl>
            <dt><label>Logo</label></dt>
            <dd>   <input type="text" name="logo"> 
            </dd>
        </dl>
      
        
          <dl>
            <dt><label>Title</label></dt>
            <dd>   <input type="text" name="title"> 
            </dd>
        </dl>
        
        
        
          
        

        <footer>
            <div class="submit_link">

                <input type="submit" value="Submit" class="alt_btn">
                <input type="reset" value="Reset">
            </div>
        </footer>

    </fieldset>
</form>
<hr /><hr />
<h2>Header View</h2>
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
        <tr>
            <th scope="col" class="rounded">Logo</th>
            <th scope="col" class="rounded">Title</th>
             <th scope="col" class="rounded">Delete</th>
            <th scope="col" class="rounded">Update</th>
           
        </tr>
    </thead>
    <tbody>
        <?php foreach ($all_header as $w_member) { ?>
            <tr> 
                <td><?php echo $w_member->logo ?></td>
                <td><?php echo $w_member->title ?></td>
       
                
                <td><a href="<?php echo base_url(); ?>super_admin/delete_header/<?php echo $w_member->header_id ?>" class="ask" >
                <img src="<?php echo base_url(); ?>images1/trash.png" alt="" title="" border="0" /></a>   
                <td> <a href="<?php echo base_url(); ?>super_admin/edit_header/<?php echo $w_member->header_id; ?>"><input type="image" src="<?php echo base_url() ?>images1/user_edit.png" title="Edit"></a>

                </td>
            </tr> 
        <?php } ?>
    </tbody>
</table>








