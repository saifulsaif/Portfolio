
<h2>Contact view</h2>
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
        <tr>
             <th scope="col" class="rounded">Date and Time</th>
            <th scope="col" class="rounded"> Full Name</th>
            <th scope="col" class="rounded">Email Address </th>
             <th scope="col" class="rounded">Subject</th>
            <th scope="col" class="rounded">Message</th>
            <th scope="col" class="rounded"><img src="<?php echo base_url(); ?>images/trash.png" alt="" title="" border="0" /></th>
            <th scope="col" class="rounded"><input type="image" src="<?php echo base_url() ?>images/user_edit.png" title="Edit"></th>
 
        </tr>
    </thead>
    <tbody>
        <?php foreach ($all_contact as $gallery_image) { ?>
            <tr> 
                <td><?php echo $gallery_image->date ?></td>
                <td><?php echo $gallery_image->full_name ?></td>
                 <td><?php echo $gallery_image->email_address ?></td>
                 <td><?php echo $gallery_image->subject ?></td>
                    <td><?php echo $gallery_image->message ?></td>
               
               
               <td><a href="<?php echo base_url(); ?>super_admin/delete_contact/<?php echo $gallery_image->contact_id ?>" class="ask" >
                        <img src="<?php echo base_url(); ?>images/trash.png" alt="" title="" border="0" /></a>   
                <td> <a href="<?php echo base_url(); ?>super_admin/edit_about/<?php echo $gallery_image->contact_id; ?>"><input type="image" src="<?php echo base_url() ?>images/user_edit.png" title="Edit"></a>

                </td> 
            </tr>
        <?php } ?>
    </tbody>
</table>







