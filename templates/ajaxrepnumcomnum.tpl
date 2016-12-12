<!-- <!DOCTYPE html PUBLIC "-//W3S//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> -->  
  
<!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8"> -->

<!-- <script src="../jquery/jquery-3.1.1.min.js" 
    src="http://jqueryjs.googlecode.com/files/jquery-3.1.1.min.js"--> 

 
   
 

 <script>

 //<script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8">
 
 //<script src="http://jqueryjs.googlecode.com/files/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8">

var repnum = 0;
var comnum = 0;
//alert("Begin of ajaxmain");
function waitForReportsAndCommentsNumbers() {
  $.ajax( {          
    type: "POST",
    url: "../models/class.Get.Reports.Number.Comments.Number.php?repnum=" + repnum + "&comnum=" + comnum,
    async: true,
    cache: false,

    complete: function () {    
      //alert("Complete");
      //$("#ml").html("complete");
    },

    success: function(data) {
      json=$.parseJSON(data);
      if(json['repnum'] != "") 
      {                                               
      repnum = json['repnum'];
      comnum = json['comnum'];
      s='Зараз на сайті '+'<br>'+'Повідомлень: ' + repnum + '<br>' + 'Коментарів: ' + comnum;     
      $("#ml").html(s);                       
      }
      setTimeout('waitForReportsAndCommentsNumbers()', 500); 
    },

    error: function () {    
      setTimeout('waitForReportsAndCommentsNumbers()', 500);
    //$("#ml").html("error");
    }             
  });
};

var new_comment_id = 0;
      
function waitForNewComRep() {
  $.ajax({          
    type: "POST",
    url: "../models/class.Get.Data.MySql.php?repid=" + new_comment_id,
    async: true,
    cache: false,

    success: function(data) {
      json=$.parseJSON(data);
      if(json['new_comment_content'] != "") {
        alert(json['new_comment_content']);
      }
      new_comment_id = json['new_comment_id'];
      setTimeout('waitForNewComRep()',10000);
    },             
  });
};
        
$(document).ready(function() {
    waitForReportsAndCommentsNumbers();
    waitForNewComRep(); })  
          
</script> 

