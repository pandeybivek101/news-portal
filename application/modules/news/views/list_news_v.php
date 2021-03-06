<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            News Listing
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="CategoryTable">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Category Name</th>
                        <th>Title</th>
                        <th>Short Description</th>
                        <!-- <th>Description</th> -->
                        <th>Feature Image</th>
                        <th>Slider Key</th>
                        <th>Feature Key</th>
                        <th>Status</th>
                        <th>Created By</th>
                        <th>Modified By</th>
                        <th>Created  Date</th>
                        <th>Modified Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
               <tbody>
                <?php foreach($news_lists as $nl):  ?>
                  <tr class="odd gradeX">
                        <td><?= $nl->id ?></td>
                        <td><?= $nl->name ?></td>
                        <td><?= $nl->title ?></td>
                        <td><?= $nl->short_description ?></td>
                        <td><img src="<?php echo base_url(); ?>images/<?= $nl->feature_image ?>" class="img-responsive" alt="title"></td>
                        <td class="center">
                            <?php if($nl->slider_key == 1){ echo 'Yes';}else{ echo 'No';} ?>                                 
                        </td>
                        <td class="center">
                            <?php if($nl->feature_key == 1){ echo 'Yes';}else{ echo 'No';} ?>                                            
                        </td>
                        <td class="center">
                            <?php if($nl->status == 1): ?>
                            <label class="label label-success">Active</label>
                            <?php else: ?> 
                            <label class="label label-danger">Inactive</label>
                            <?php endif ?>                                          
                        </td>
                        <td class="center"><?= get_username_by_id($nl->created_by) ?> </td>
                        <td class="center"><?= get_username_by_id($nl->modified_by) ?> </td>
                        <td><?= $nl->created_date ?></td>
                        <td><?= $nl->modified_date ?></td>
                        <td><a href="<?php base_url();?>/news-portal/news/update_news/<?= $nl->id ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Edit</a> 
                            <a href="" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure want to delete?')"><i class="fa fa-trash"></i> Delete</a></td>
                    </tr>
                    <?php endforeach  ?>
                    
               </tbody>
            </table>
            <!-- /.table-responsive -->
           
        </div>
        <!-- /.panel-body -->
    </div>
            <!-- /.panel -->
</div>
        <!-- /.col-lg-12 -->

