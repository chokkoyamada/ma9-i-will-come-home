<?php
function my_layout_view($body, $data)
{
	$CI = get_instance();
	$layout_data['content_header'] = $CI->load->view('layout/header_view', array(), true);
	$layout_data['content_body'] = $CI->load->view($body, $data, true);
	$layout_data['content_footer'] = $CI->load->view('layout/footer_view', array(), true);
	$layout_data = array_merge($layout_data, $data);
	$CI->load->view('layout/main_view', $layout_data);
}

