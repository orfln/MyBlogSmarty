
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
   
<!-- <!DOCTYPE html PUBLIC "-//W3S//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> -->

<!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"--> 

<!-- <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> -->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple Blog</title>

        <link href="templates/main.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../jquery/jquery-3.1.1.min.js" charset="utf-8"></script>

        {assign var=logo value='Мій перший блог'}
        
    </head>
    
    <body id={$body_id}>
        <div class="pageContainer">

        <div class="logo">
            
            {$logo}
        </div>
      
      <nav>
        <ul>
            <li> <a href="index.php?controller=index&amp;action=index" 
                    class="main-menu" id="item1">Головна</a> </li>
            <li> <a href="index.php?controller=index&amp;action=showallreports" 
                    class="main-menu" id="item2">Всі повідомлення</a> </li>
            <li> <a href="index.php?controller=index&amp;action=newreportform" 
                    class="main-menu" id="item3">Написати повідомлення</a> </li>
        </ul>
      </nav>
      
      <script>
        $(window).resize(function() {
          var height = $("nav").height()+$(".logo").height();
            $("#ml").css("top",height);
            $(".content").css("top",height);
        });
        $(document).ready(function() {
          var height = $("nav").height()+$(".logo").height();
            $("#ml").css("top",height);
            $(".content").css("top",height);
        });
      </script>
        
    
