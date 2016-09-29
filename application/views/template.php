<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
   <?php foreach($css_files as $file): ?>
      <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
   <?php endforeach; ?>
   <?php foreach($js_files as $file): ?>
      <script src="<?php echo $file; ?>"></script>
   <?php endforeach; ?>
</head>
<body>
   <div>
      <?php echo $output; ?>
   </div>
</body>
<script>
   $(document).ready(function() {
      $('table .td-description').each(function(){
         var msg = $(this).text();
         var urlRegex =/(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
         $(this).html(msg.replace(urlRegex, '<a href="$1" class="exturl">$1</a>'));
      });
   });
</script>
</html>
