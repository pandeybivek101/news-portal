<?php
function upload_image($image){
	$config['upload_path'] = './images/';
    $config['allowed_types'] = 'gif|jpg|png';
    $record = & get_instance();
    $record->load->library('upload', $config);
    if($record->upload->do_upload($image)){
    	$imagedata=$record->upload->data();
    	$filename=$imagedata['file_name'];
    }else{
    	$filename='';
    }
    return $filename;
}
?>