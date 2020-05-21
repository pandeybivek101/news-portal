<?php
function get_catagory_news($id){
	$cd = & get_instance();
	$cd->load->database();
	$cd->db->where('category_id', $id);
	$cd->db->where('feature_key', '1');
	$cd->db->order_by('created_date', 'ASC');
	$cd->db->limit(1);
	$news=$cd->db->get('tbl_news')->row();
	return $news;
}

?>