<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
             Create Category
         </div>
         <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <?=$this->session->flashdata('message')?>
                    <?php echo form_open('news/create_category', ['id'=>'categoryform']); ?>
                        <div class="form-group">
                            <label>Name</label>
                            <?php echo form_input(['class'=>'form-control', 'name'=>'name', 'required']); ?>
                            <?php if(form_error('name')): ?><label id="name-error" class="error" for="name"><?= form_error('name') ?></label><?php endif ?>
                        </div>
                        <div class="form-group">
                            <label>Rank</label>
                            <?php echo form_input(['class'=>'form-control', 'name'=>'rank', 'required']); ?>
                            <?php if(form_error('rank')): ?><label id="rank-error" class="error" for="name"><?= form_error('rank') ?></label><?php endif ?>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <label class="radio-inline">
                                <input type="radio" name="status" id="status" value="1">Active
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" id="status" value="0" checked="">De Active
                            </label>
                            
                        </div>
                        
                        
                        <button type="submit" name="btnSave" class="btn btn-info">Save Category</button>
                        <button type="reset" class="btn btn-danger">Clear</button>
                    </form>
                </div>
                
                <!-- /.col-lg-6 (nested) -->
            </div>
            <!-- /.row (nested) -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>