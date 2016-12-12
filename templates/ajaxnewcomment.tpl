
<script>

  report_id={$id};

function waitForNewComRep() {
  $.ajax({
    type: "POST",
    url: "../models/class.Get.Data.MySql.php?repid="+report_id,
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
   waitForNewComRep(); })
</script>