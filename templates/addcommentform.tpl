

 <!-- Form for adding of comments on report with id={$id} -->   
<form class="content" method="post" action="index.php?controller=index&action=addcomment&id={$id}"> 
    <h2>Форма для подання коментаря на повідомлення з id= {$id}</h2> 
    Name: <input type="text" name="name">
    <br><br>
    Comment: <textarea name="content" rows="5" cols="40"></textarea>
    <br><br>
    <input type="submit" name="submit" value="Submit">  
</form>
