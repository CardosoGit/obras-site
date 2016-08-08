<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

	public function get_post($post_id){
		$data_post  = $this->db->get_where('posts',['ID' => $post_id])->row_array();
		$data = $this->db->get_where('meta_posts',['post_id' => $post_id])->result_array();
		return $data_post;
	}

	public function get_post_id($post_slug){
		$this->db->select('ID');
		$data = $this->db->get_where('posts', ['post_slug' => $post_slug])->row();
		return $data->ID;
	}

	public function get_tags($post_id){
		$data = $data = $this->get_meta_posts($post_id, 'tag');
		return $data;
	}

	public function get_related_posts($post_id, $qtd){
		$data = $this->get_meta_posts($post_id, 'post_relacionado');
		if (isset($data)) {
			$this->db->select('post_title,post_slug');
			$this->db->limit($qtd);
			$this->db->where_in('ID', $this->get_array_of_ids($data, 'meta_value'));
			$dados =  $this->db->get('posts')->result_array();
			return $dados;
		}
		return null;
		

	}

	private function get_array_of_ids($data, $slug_id){
		$array_of_ids = [];
		foreach ($data as $key => $value) {
			array_push($array_of_ids, $value[$slug_id]);
		}
		return $array_of_ids;
	}

	public function get_meta_posts($post_id, $meta_key){
		$meta_posts = $this->db->get_where('meta_posts',[
			'post_id' => $post_id,
			'meta_key' => $meta_key
			])->result_array();
		if (!empty($meta_posts)) {
			return $meta_posts;
		}
		return null;
	}

	public function get_all_posts_simple($comments_count = false){
		$this->db->order_by('ID', 'DESC');
		$this->db->select('ID,post_title, resume_content, post_slug, post_image, post_author');

		$posts = $this->db->get('posts')->result_array();
		if ($comments_count) {
			foreach ($posts as $key => $value) {
				$count = $this->get_comments($posts[$key]['ID'], true)['count'];
				$posts[$key]["comment_count"] = (isset($count)) ? $count : 0 ;
			}
		}
		return $posts;
	}

	public function get_recents_posts($qtd){
		$this->db->order_by('ID', 'DESC');
		$this->db->limit($qtd);
		$posts = $this->db->get('posts')->result_array();
		return $posts;
	}

	public function get_all_posts_by_category($category, $comments_count = false){
		$id_category = $this->db->get_where('post_categories',[
			'slug_category' => $category
			])->row_array()['ID'];

		$this->db->select('post_id');
		$ids = $this->db->get_where('meta_posts',[
			'meta_value' => $id_category,
			'meta_key' => 'post_category'
			])->result_array();
		if (!empty($ids)) {
			$this->db->order_by('ID', 'DESC');
			$this->db->where_in('ID', $this->get_array_of_ids($ids, 'post_id'));
			$posts =  $this->db->get('posts')->result_array();
			if ($comments_count) {
				foreach ($posts as $key => $value) {
					$count = $this->get_comments($posts[$key]['ID'], true)['count'];
					$posts[$key]["comment_count"] = (isset($count)) ? $count : 0 ;
				}
			}
			return $posts;
		}
		else{
			return null;
		}
		
	}

	public function get_category($post_id){
		$meta_post = $this->db->get_where('meta_posts',['post_id'=>$post_id,'meta_key'=>'post_category'])->row_array();
		$category_id = $meta_post['meta_value'];		
		$category = $this->db->get_where('post_categories',['ID' => $category_id])->row_array();
		
		return $category;
	}

	public function get_comments($post_id, $comments_count = false){
		$this->db->order_by('ID', 'DESC');
		$comments = $this->db->get_where('comments',['id_post' => $post_id])->result_array();
		if (!empty($comments)) {
			if ($comments_count) {
				return ["comments" => $comments, "count" => count($comments)];
			}
			else{
				return $comments;
			}
		}
		return null;
	}

	public function save_comment($data){
		$this->db->insert('comments', $data);
	}

}

/* End of file Post_model.php */
/* Location: ./application/models/Post_model.php */	