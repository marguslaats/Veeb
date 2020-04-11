<?php require_once APPROOT.'/views/inc/header.php';?>
<?php flashShow('post_message');?>
    <div class="col">
<?php if(isset($_SESSION['user_id'])) :?>
    <a href="<?php echo URLROOT?>/posts/add" class="btn btn-dark">Add Post</a>
<?php endif;?>
    <div >
        <div class="col">
            <h1>Posts</h1>
        </div>
        <?php foreach ($data as $post):?>
            <div class="card card-body mb-3">
                <h4 class="card-title"><?php echo $post->title;?></h4>
                <div class="bg-light p-2 mb-2">Written by: <?php echo $post->name;?> on <?php echo $post->created_at;?></div>
                <div class="card-text mb-2"><?php echo substr($post->content, 0, 300);?>...</div>
                <a href="<?php echo URLROOT?>/posts/show/<?php echo $post->postID;?>" class="btn btn-dark">Read More</a>
            </div>
        <?php endforeach;?>
    </div>
<?php require_once APPROOT.'/views/inc/footer.php';?>