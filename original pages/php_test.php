<html>
<body>
hi there....

<?php

$myFile = "item_lists/tester.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "Bobby mmmmmmmm Bopper\n";
fwrite($fh, $stringData);
$stringData = "Tracy Tanner\n";
fwrite($fh, $stringData);
fclose($fh);


 $to = "ngozin@bu.edu";
 $subject = "mcr!";
 $body = "one more reason?";
 if (mail($to, $subject, $body)) {
   echo("<p>Message successfully sent!</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }

echo("hang on...");

$connection = ssh2_connect('ngozin@eng-grid@bu.edu', 22);
ssh2_auth_password($connection, 'ngozin', 'p..adf');

ssh2_scp_send($connection, '/Users/ngozinwogwugwu/Desktop/file_to_send.txt', '/home/ngozin/site_files/received_file.txt', 0644);
echo("<p>It's not too late!</p>");

?>
</body>
</html>