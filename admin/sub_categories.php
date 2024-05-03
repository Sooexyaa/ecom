<?php
require('top.php');

if(isset($_GET['type']) && $_GET['type']!=''){
   $type=get_safe_value($con,$_GET['type']);
   if($type=='status')
   {
      $operation=get_safe_value($con,$_GET['operation']);
      $id=get_safe_value($con,$_GET['id']);
      if($operation=='active')
      {
         $status='1';
      }
      else{
         $status='0';
      }
      $update_status="update sub_categories set status='$status' where id='$id'";
      mysqli_query($con,$update_status);
   }
   if($type=='delete')
   {
      $id=get_safe_value($con,$_GET['id']);
      $delete_sql="delete from sub_categories where id='$id'";
      mysqli_query($con,$delete_sql);
   }
}



$sql="select sub_categories.*,categories.categories from sub_categories,categories  where categories.id=sub_categories.categories_id order by sub_categories asc";
$res=mysqli_query($con,$sql);
?>
<div class="card-body">
              <h1 class="grid_title">Our Sub Categories</h1>
			  <a href="add_sub_categories.php" class="add_link">Add New Sub-Category</a>
              <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                             
                            <th width="10%">S.No #</th>
                            <th width="10%">ID</th>
                            <th width="25%">Categories Name</th>
                            <th width="15%">Sub-Categories</th>
                            <th></th>
                            <th width="35%">Status</th>
                        </tr>
                              
                           </tr>
                        </thead>
                        <tbody>
                           <?php 
                           $i=1;
                           while($row=mysqli_fetch_assoc($res)){?>
                           <tr>
                              <td class="serial"><?php echo $i?></td>
                              <td><?php echo $row['id']?></td>
                              <td><?php echo $row['categories']?></td>
                              <td><?php echo $row['sub_categories']?></td>
                              <td>
                              <td>
								<?php
								if($row['status']==1){
									echo "<a href='?type=status&operation=deactive&id=".$row['id']."' class='btn btn-primary'>Active</a>&nbsp;";
								}else{
									echo "<a href='?type=status&operation=active&id=".$row['id']."' class='btn btn-primary'>Deactive</a>&nbsp;";
								}
								echo "<a href='add_sub_categories.php?id=".$row['id']."' class='btn btn-primary'>Edit</a>&nbsp;";
								
								echo "<a href='?type=delete&id=".$row['id']."' class='btn btn-danger'>Delete</a>";
								
								?>
							   </td>
                              
                           </tr>
                           <?php $i++;}?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
require('footer.php');
?>
