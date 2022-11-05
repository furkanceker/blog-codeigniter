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
        <?php foreach ($blogs as $blog) { ?> 
    <form action="<?php echo base_url("blog/update"); ?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="blog_title">Blog Adı</label>
                    <input type="text" name="new_blog_title" class="form-control" required value="<?php echo $blog->title; ?>">
                </div>
                <div class="form-group">
                    <label for="blog_title">Blog Metni</label>
                    <input type="text" name="new_blog_text" class="form-control" required value="<?php echo $blog->text; ?>">
                </div>
                <button class="btn btn-success">Kaydet</button>
            </div>
            
        </div>
    </form>
    <?php } ?>
    </div>

    <?php $this->load->view("dependencies/script"); ?>
</body>
</html>