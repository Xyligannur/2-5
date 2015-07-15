<form method="post">
    <input type="text" name="title" class="form-control" placeholder="Введите название вашей статьи" value="<?=$article[0]['title']. $title?>" />
    <br>
    <textarea name="short" class="form-control" placeholder="Краткое описание...." rows="5" cols="20"><?=$article[0]['short']. $short?></textarea>
    <br>
    <textarea name="content" class="form-control" placeholder="Ваша статья...." rows="10" cols="45"><?=$article[0]['content']. $content?></textarea>
    <br>
    <button type="submit" class="btn btn-primary btn-lg"><span class="fa fa-pencil"></span> Изменить</button>
</form>
