<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <?php $this->load->view("dependencies/style"); ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <a href="<?php echo base_url(); ?>"><h3 class="text-center">Blog Sitemiz</h3></a>
        </div>
        <a href="<?php echo base_url("blog/insert");?>" class="btn btn-success">Blog Ekle</a>

        <div>
            <?php foreach ($blogs as $blog) { ?>
                <div class="blog-item">
                    <a href="<?php echo base_url("blog/view/$blog->id");?>">
                        <h3><?php echo $blog->title; ?></h3>
                        <h6><?php echo $blog->createdAt; ?></h6>
                        <a href="<?php echo base_url("blog/delete/$blog->id");?>" class="btn btn-danger">Blog Sil</a>
                    </a>
                </div>
            <?php } ?>
        </div>

    </div>

    <?php $this->load->view("dependencies/script"); ?>
</body>
</html>