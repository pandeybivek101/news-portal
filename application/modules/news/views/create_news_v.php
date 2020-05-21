<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            <?= $title ?>
         </div>
         <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <?= $this->session->flashdata('message'); ?>

                    <!--<form role="form" action="" method="post" id="newsform" enctype="multipart/form-data">-->
                        <?php echo form_open_multipart('news/create_news', ['id'=>'newsform'])  ?>
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" name="title" required="">                                    
                        </div>  
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control" required="">
                                <option value="0">Select Category</option>
                                <?php foreach ($category_lists as $c) {?>
                                     <option value="<?php echo $c->id ?>"><?php echo $c->name ?></option>
                                <?php } ?>
                            </select>                                  
                        </div>  
                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea class="form-control" name="short_description" rows="5"></textarea>                                 
                        </div>  
                        <div class="form-group">
                           <label>Description</label>
                            <textarea class="form-control ckeditor" name="description"></textarea>                              
                        </div>  
                        <div class="form-group">
                            <label>Feature Image</label>
                            <input type="file" name="image">                                    
                        </div>   

                        <div class="form-group">
                            <label>Slider Key</label>
                            <label class="radio-inline">
                                <input type="radio" name="slider_key" value="1">Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="slider_key" value="0" checked="">No
                            </label>                                    
                        </div>

                        <div class="form-group">
                            <label>Feature Key</label>
                            <label class="radio-inline">
                                <input type="radio" name="feature_key" value="1">Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="feature_key" value="0" checked="">No
                            </label>                                    
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="1">Active
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="0" checked="">De Active
                            </label>                                    
                        </div>
                        
                        
                        <button type="submit" name="btnSave" class="btn btn-info">Save News</button>
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