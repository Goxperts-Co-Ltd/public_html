<?php
$author =  get_the_author();
$author_desc = get_the_author_description();
$image_author = get_avatar_url(get_the_author_ID());
?>
<div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="<?php echo $image_author;?>">
              </div>
              <div class="desc">
                <h3><?php echo $author;?></h3>
                <p><?php echo $author_desc;?></p>
              </div>
            </div>