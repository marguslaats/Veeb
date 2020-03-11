<?php require_once APPROOT.'/views/inc/header.php';?>
  <h1>Add post</h1>
  <p>Create post </p>
  <form action="<?php echo URLROOT;?>/posts/add" method="post">
    <div class="form-group">
      <label for="title">Post Title</label>
      <input type="text" id="title" name="title" class="form-control form-control-lg <?php echo (!empty
      ($data['title_err'])) ? 'is-invalid' : ''; ?>">
      <span class="invalid-feedback"><?php echo $data['title_err'];?></span>
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea id="content" name="content" class="form-control form-control-lg <?php echo (!empty
      ($data['content_err'])) ? 'is-invalid' : ''; ?>">
      </textarea>
      <span class="invalid-feedback"><?php echo $data['content_err'];?></span>
    </div>
    <input type="submit" value="Submit" class="btn btn-dark">
  </form>
<?php require_once APPROOT.'/views/inc/footer.php';?>