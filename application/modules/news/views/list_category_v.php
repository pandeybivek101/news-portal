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
                        <th>Name</th>
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
                <?php foreach($category_lists as $cl): ?>
                  <tr class="odd gradeX">
                        <td><?= $cl->id ?></td>
                        <td><?= $cl->name ?></td>
                        <td><?= $cl->rank ?></td>
                        <td class="center">
                            <?php if($cl->status == 1): ?>
                            <label class="label label-success">Active</label>
                            <?php else: ?> 
                            <label class="label label-danger">Inactive</label>
                            <?php endif ?>                                          
                        </td>
                        <td class="center"><?= $cl->created_by ?></td>
                        <td><?= $cl->modified_by ?></td>
                        <td><?= $cl->created_date ?></td>
                        <td><?= $cl->modified_date ?></td>
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

