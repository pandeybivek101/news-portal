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

                     <?php echo form_open_multipart('news/update_news/'.$values->id, ['id'=>'newsform'])  ?>
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" name="title" required="" value="<?= $values->title ?>">                                    
                        </div>  
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control" required="">
                                <?php foreach ($category_lists as $c) {?>
                                     <option value="<?php echo $c->id ?>" <?php if($c->id == $values->category_id): ?> selected <?php endif ?>><?php echo $c->name ?></option>
                                <?php } ?>
                            </select>                                  
                        </div>  
                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea class="form-control" name="short_description" rows="5"><?= $values->short_description ?></textarea>                                 
                        </div>  
                        <div class="form-group">
                           <label>Description</label>
                            <textarea class="form-control ckeditor" name="description">
                                <?= $values->description ?>
                            </textarea>                              
                        </div> 
                         <label>Current Image</label>
                         <img src="<?php echo base_url(); ?>images/<?= $values->feature_image ?>" class="img-responsive" alt="feature_image" height='200' width='200'>
                        <div class="form-group">
                            <input type="hidden" name="oldimage" 
                            value="<?= $values->feature_image  ?>">                                    
                        </div> 
                        <div class="form-group">
                            <label>Feature Image</label>
                            <input type="file" name="image">                                    
                        </div>   

                        <div class="form-group">
                            <label>Slider Key</label>
                            <label class="radio-inline">
                                <input type="radio" name="slider_key" value="1" <?php if($values->slider_key == 1): ?> checked <?php endif  ?>>Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="slider_key" value="0" <?php if($values->slider_key == 0): ?> checked <?php endif  ?>>No
                            </label>                                    
                        </div>

                        <div class="form-group">
                            <label>Feature Key</label>
                            <label class="radio-inline">
                                <input type="radio" name="feature_key" value="1" <?php if($values->feature_key ==1): ?> checked <?php endif  ?>>Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="feature_key" value="0" <?php if($values->feature_key == 0): ?> checked <?php endif  ?>>No
                            </label>                                    
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="1" <?php if($values->status ==1): ?> checked <?php endif  ?>>Active
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="0" <?php if($values->status ==0): ?> checked <?php endif  ?>>De Active
                            </label>                                    
                        </div>
                        
                        
                        <button type="submit" name="btnSave" class="btn btn-info">Update News</button>
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