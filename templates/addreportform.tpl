
        <!-- Form for adding new report -->
        <div class="content">
            <h2>Форма для подання повідомлення</h2>
            <script>
              function validate_form() {
                if (addreportform.name.value=="") {
                    addreportform.name.focus();
                    alert ("Enter your name");
                    return false;
                }
                if (addreportform.name.value.length<3) {
                    addreportform.name.focus();
                    alert ("Minimal name length is 3 symbolls!");
                    return false;
                }
                if (addreportform.name.value.length>10) {
                    addreportform.name.focus();
                    alert ("Maximal name length is 10 symbolls!");
                    return false;
                }
              }
            </script>
            <form name="addreportform" method="post" onsubmit="return validate_form()" 
                action="index.php?controller=index&action=addreport";>
                
                Name: <input type="text" name="name" onclick="validate_name()">
                <br><br>
                Title: <input type="text" name="title">
                <br><br>
                Report: <textarea name="content" rows="5" cols="30"></textarea>
                <br><br> 
                <input type="submit" name="submit" value="Submit">  
            </form>
        
        </div>

                
                <!-- 
                    //NAME='$_POST[name]', TITLE='$_POST[title]', 
                    //CONTENT='$_POST[content]', DATE='$dt', COMNUM=0, LAST_COMMENT_DATE='0000-00-00 00:00:00'";
                -->

  


 
