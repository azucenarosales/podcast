<?php $player=true; include_once('head.php'); ?>

  <div class="container">    
    <div class="feed">
    <?php

    $rssLink = $_POST['rss'];
    $contenido = implode(file($rssLink));
    $xml = new SimpleXmlElement($contenido);

    ?>
    <ul>
      <!-- Toma el xml parseado e imprime su titulo, la fecha de publicación y la descripción  -->
      <?php foreach ($xml->channel->item as $item):?>
      <h5 class="title"><a href="<?=$item->enclosure->attributes()->url?>" class="link"><?=$item->title?></a> <a href="<?=$item->enclosure->attributes()->url?>" class="link"><i class="material-icons">play_arrow</i></a> </h5>
      <p><?=$item->pubDate?></p>
      <?=$item->description?>
      <?php endforeach;?>
    </ul>
    </div>
  </div>	
</body>
</html>




