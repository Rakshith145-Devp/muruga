jQuery(document).ready(function() {
  jQuery("h2.banner-heading").each(function() {
      var t = jQuery(this).text();
      var splitT = t.split(" ");
      var newText = "";
      for (var i = 0; i < splitT.length; i++) {
          if (i == 3) {
              newText += "<span style='color:#8D674D; text-decoration: underline;'>";
              newText += splitT[i] + " ";
              newText += "</span>";
          } else {
              newText += splitT[i] + " ";
          }
      }
      jQuery(this).html(newText);
  });
});