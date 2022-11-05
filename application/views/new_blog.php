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
    <form action="<?php echo base_url("blog/insert"); ?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="blog_title">Blog Adı</label>
                    <input type="text" name="blog_title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="blog_title">Blog Metni</label>
                    <input type="text" name="blog_text" class="form-control" required>
                </div>
                <button class="btn btn-success">Blog Ekle</button>
            </div>
            
        </div>
    </form>
    </div>

    <?php $this->load->view("dependencies/script"); ?>
</body>
</html>