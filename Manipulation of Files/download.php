<?php
$link = "https://lh3.googleusercontent.com/proxy/OU_ADrCYaBXj93GyXuhBVEhwsbS0iloRePA5EtWeXqAEzUHYedQVi5q9LhSpyCscEuYL1QIxnHEjt3PCezlD7mRYJoTjlB0bFnslT3_Rbk5HHw7K1si4UgGT1eH3s2Tq";
$content = file_get_contents($link);
$parse = parse_url($link);
$basename = basename($parse["path"]);
$file = fopen($basename, "w+");
fwrite($file, $content);
fclose($file);
echo "Download concluido com sucesso!<br/>";
?>
<img src="<?=$basename?>">