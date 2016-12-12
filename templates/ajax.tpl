
<!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8"> -->

<!--<script src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js" --> 
<script src="https://code.jquery.com/jquery-3.1.1.min.js" 
  type="text/javascript" charset="utf-8">
/* <script type="text/javascript" charset="utf-8"> */

var param = 0;
      
function waitForMsg() {
  $.ajax({          
      type: "POST",
      url: "../configs/models/getDataMySql.php?param=" + param,
      async: true,
      cache: false,     
    
      success: function(data) {
        var json = eval('(' + data + ')');
        if(json['msg'] != "") {
          alert(json['msg']);
        }
        param = json['param'];
        setTimeout('waitForMsg()',1000);
      },
  });
};
    
//$(document).ready(
$(function() {
  waitForMsg();
})
    
</script>

  