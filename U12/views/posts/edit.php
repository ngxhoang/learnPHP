<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Edit New Posts</h3>
    <hr>
        <form action="?mod=posts&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="hidden" name="id" value="<?= $pot['id'] ?>">
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $pot['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">Contents</label>
                <input type="text" class="form-control" id="" placeholder="" name="short_contents" value="<?= $pot['short_contents'] ?>">
            </div>
            <!-- <div>
                <img src="<?= $pot['thumbail'] ?>" alt="" width="120px" height="120px">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbail">
            </div>
            <div class="form-group">
                <label for="">Parent</label>
                <select name="category_id" class="form-control">
                  <option value="0">Danh mục cha</option>
                  <?php foreach ($posts as $ps) {?>
                    <option value="<?= $ps['id'] ?>"><?= $ps['title'] ?></option>
                  <?php } ?>
                </select>
            </div> -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
