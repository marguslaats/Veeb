<?php


class Posts extends Controller
{
    public function __construct(){
        $this->postModel = $this->model('Post');
        $this->userModel = $this->model('User');
    }
    public function index(){
        if($this->postModel->getAllPosts() !== false){
            $data = $this->postModel->getAllPosts();
            $this->view('posts/index', $data);
        }
        $this->view('posts/index');
    }
    public function show($id){
        $post = $this->postModel->getPostById($id);
        $user = $this->userModel->getUserById($post->user_id);
        $data = array(
            'post' => $post,
            'user' => $user
        );
        $this->view('posts/show', $data);
    }
}