<?php require APPROOT . '/views/inc/header.php';?>
<!-- <div classs=" home-section"> -->

<div class="row home-section">
    <div class="col-md-6">
        <h1>Complaints</h1>
    </div>
    <div class="col-md-6">
        <a href="<?=URLROOT;?>/complaints/add" class="btn btn-primary pull-right">
            <i class="fa fa-pencil"></i>Add Complaint
        </a>
    </div>
</div>
<?php flash('post_message');?>
<?php foreach ($data['posts'] as $post): ?>
    <div class="card card-body mb-3  home-section">
        <h4 class="card-title">
            <?=$post->title;?>
        </h4>
        <div class="bg-light p-2 mb-3">
            Written by
            <!-- <?=$post->name;?> on <?=$post->created_at;?> -->
            <?php if ($post->name == $_SESSION['user_name']) {
    echo 'You on ' . $post->created_at;
} else {
    echo $post->name . ' on ' . $post->created_at;
}
?>
        </div>
        <p class="card-text"><?=$post->body;?> </p>
        <a href="<?=URLROOT;?>complaints/show/<?=$post->postId;?>" class="btn btn-dark">Read More</a>
    </div>

<!-- </div> -->

<?php endforeach;?>
<?php require APPROOT . '/views/inc/footer.php';?>