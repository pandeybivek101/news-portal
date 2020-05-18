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
                        <th>ID</th>
                        <th>Title</th>
                        <!-- <th>Description</th> -->
                        <th>Rank</th>
                        <th>Status</th>
                        <th>Created By</th>
                        <th>Modified By</th>
                        <th>Created  Date</th>
                        <th>Modified Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
               <tbody>
                <?php foreach($advertisement as $al): ?>
                    <tr class="odd gradeX">
                        <td><?= $al->id ?></td>
                        <td><?= $al->title ?></td>
                        <td><?= $al->rank ?></td>
                        <td class="center">
                            <?php if($al->status == 1): ?>
                            <label class="label label-success">Active</label>
                            <?php else: ?> 
                            <label class="label label-danger">Inactive</label>
                            <?php endif ?>                                          
                        </td>
                        <td class="center"><?= $al->created_by ?></td>
                        <td><?= $al->modified_by ?></td>
                        <td><?= $al->created_date ?></td>
                        <td><?= $al->modified_date ?></td>
                        <td><a href="" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Edit</a> <a href="" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure want to delete?')"><i class="fa fa-trash"></i> Delete</a></td>
                    </tr>
                <?php endforeach ?>
                    
               </tbody>
            </table>
            <!-- /.table-responsive -->
           
        </div>
        <!-- /.panel-body -->
    </div>
            <!-- /.panel -->
</div>
        <!-- /.col-lg-12 -->

