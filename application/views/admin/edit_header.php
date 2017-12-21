<form  action="<?php echo base_url(); ?>index.php/super_admin/update_header" enctype="multipart/form-data" method="post">
 
    <header><h2>Update Header Information</h2>
    </header>
    
    <fieldset>
      
        <dl>
            <dt><label>Logo</label></dt>
            <dd>   <input type="text"   name="logo"> 
                <input type="text"   name="header_id">
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