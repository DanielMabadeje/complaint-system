<?php require APPROOT . '/views/inc/header.php';?>
<div class="home-section">

<div class="card card-body mb-3">
    <h4 class="card-title">
        <?=$data['post']->title;?>
    </h4>
    <div class="bg-light p-2 mb-3">
        Written by
        <!-- <?=$data['user']->name;?> on <?=$data['post']->created_at;?> -->
        <?php if ($data['user']->name == $_SESSION['user_name']) {
    echo 'You on ' . $data['post']->created_at;
} else {
    echo $data['user']->name . ' on ' . $data['post']->created_at;
}
?>
    </div>
    <p class="card-text"><?=$data['post']->body;?> </p>
    <?php if ($data['post']->user_id == $_SESSION['user_id']): ?>
        <hr>
        <div class="d-flex">
            <form class="text-right float-right" action="<?=URLROOT;?>posts/delete/<?=$data['post']->id;?> " method="post">
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>
    <?php endif;?>
    <a href="<?=URLROOT;?>posts/" class="btn btn-dark mt-3">Back</a>
</div>

<div class="row">
    <div class="col-md-6 mr-auto">
        <div class="card card-body bg-light mt-5">
            <h2>Comments</h2>
            <div>
                <?php foreach ($data['comments'] as $comment): ?>
                    <div class="card card-body p-2 mt-2">
                        <h4><?=$comment->comment?></h4>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <div class="col-md-6 ml-auto">
        <div class="card card-body bg-light mt-5">
            <h2>Add Comment</h2>
            <p>Create a new Comment</p>
            <form action="<?=URLROOT?>admins/addcomment/<?=$data['post']->id?>" method="post">

                <div class="form-group">
                    <label for="body">  Comment <sup>*</sup></label>
                    <textarea type="text" name="comment" class="form-control form-control-lg <?=(!empty($data['body_err'])) ? 'is-invalid' : '';?>" value="<?=$data['body'];?>"> </textarea>
                    <span class="invalid-feedback"><?=$data['body_err'];?></span>
                </div>
                <input type="submit" class="btn btn-success" value="Submit">
            </form>
        </div>
    <!-- </div> -->
</div>
</div>


</div>
<?php require APPROOT . '/views/inc/footer.php';?>