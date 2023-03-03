<?php

// tugas array
$bestie1 = ['Aini','Gresia','Nayla','Nazwa','Maya'];
$bestie2 = ['Nitta','Caca','Awa','Yurike','Sasa'];

echo $bestie1[0]," ",$bestie2[0]," ",$bestie1[1]," ",$bestie2[1]," ",$bestie1[2]," ",$bestie1[3]," ",$bestie2[3]," ",$bestie1[4]," ",$bestie2[4];
echo "<br />";

// tambah bestie
array_push($bestie1, 'Maurel');
array_push($bestie2, 'Disty');

echo $bestie1[0]," ",$bestie2[0]," ",$bestie1[1]," ",$bestie2[1]," ",$bestie1[2]," ",$bestie1[3]," ",$bestie2[3]," ",$bestie1[4]," ",$bestie2[4]," ",$bestie1[5]," ",$bestie2[5];

?>