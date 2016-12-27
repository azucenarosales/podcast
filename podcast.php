<?php $player=true; include_once('head.php'); ?>

  <div class="container">    
    <div class="feed">
    <?php

    $rssLink = $_POST['rss'];
    $curl_handle=curl_init();
  curl_setopt($curl_handle, CURLOPT_URL, $rssLink);
  curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
  curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Podcast');
  $contenido = curl_exec($curl_handle);
  curl_close($curl_handle);  
  $xml = new SimpleXmlElement($contenido);


    ?>
    <ul>
      <!-- Toma el xml parseado e imprime su titulo, la fecha de publicación y la descripción  -->
      <?php foreach ($xml->channel->item as $item):?>

      <h5 class="title"><a href="<?=$item->enclosure->attributes()->url?>" class="link"><?=$item->title?></a> <a href="<?=$item->enclosure->attributes()->url?>" class="link"><i class="material-icons">play_arrow</i></a> </h5>
      <p><?=$item->pubDate?></p>
      <?php // Cambia los h1 al h6 por un parrafo en negrita para que no pierda el estilo
      echo preg_replace('/<h[1-6](.*?)<\/h[1-6]>/si', '<p style="font-weight:bold"$1</p>', $item->description);
      ?>
      <?php endforeach;?>
    </ul>
    </div>
  </div>	
</body>
</html>
