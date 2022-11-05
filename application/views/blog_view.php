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
    </div>
    <div class="container">
            <?php foreach ($blogs as $blog) { ?>
                    <div class="blog-title">
                        <h3><?php echo $blog->title; ?></h3>
                    </div>
                    <div class="blog-text">
                        <p><?php echo $blog->text; ?></p>
                    </div>
                    <div class="blog-date">
                        <h6><?php echo $blog->createdAt; ?></h6>
                    </div>
                            
                    <a href="<?php echo base_url("blog/update/$blog->id");?>" class="btn btn-primary">Blog Güncelle</a>
                    <a href="<?php echo base_url("blog/delete/$blog->id");?>" class="btn btn-danger">Blog Sil</a>

            <?php } ?>
    </div>

    <?php $this->load->view("dependencies/script"); ?>
</body>
</html>