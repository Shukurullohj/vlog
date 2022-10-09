        <?php 
         foreach($query as $q){ ?>
            <ul class="list-group">
              <li class="list-group-item">
                <div class="feedback-card card p-3">
                  <div class="feedback-card__content">
                    <img style="width: 100%; height: 400px;" src="uploads/<?=$q['image_url']?>" alt="">
                    <h3 class="feedback-card__title"><a class="feedback-card__link" href="view.php?id=<?php echo $q['id']; ?>"><?php echo $q['title'];?></a></h3>
                    <p class="feedback-card__text"><?php echo substr($q['content'], 0, 50);?></p>
                </div>
              </li>
            </ul>
            <?php } ?>