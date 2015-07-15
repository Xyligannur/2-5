<form method="post" enctype="multipart/form-data">
    <input type="text" name="title" class="form-control" placeholder="Введите название вашей статьи...." value="<?=$title?>" />
    <br>
    <textarea name="short" class="form-control" placeholder="Краткое описание...." rows="5" cols="10"><?=$short?></textarea>
    <br>
    <textarea name="content" class="form-control" placeholder="Ваша статья...." rows="10" cols="45"><?=$content?></textarea>
    <br>
    <input class="selectbutton" type="FILE" name="imgupload">
    <button type="submit" class="btn btn-primary btn-lg"><span class="fa fa-check"></span> Добавить</button>
</form>
