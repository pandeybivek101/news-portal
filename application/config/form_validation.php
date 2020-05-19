<?php
$config = array(
        'category' => array(
                array(
                        'field' => 'name',
                        'label' => 'Name',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'rank',
                        'label' => 'Rank',
                        'rules' => 'required'
                ),
        ),
        'advertise' => array(
                array(
                        'field' => 'title',
                        'label' => 'Title',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'link',
                        'label' => 'Link',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'rank',
                        'label' => 'Rank',
                        'rules' => 'required|numeric'
                ),
        ),
        'news' => array(
                array(
                        'field' => 'title',
                        'label' => 'Title',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'short_description',
                        'label' => 'Short Description',
                        'rules' => 'required'
                ),
        ),
);

?>