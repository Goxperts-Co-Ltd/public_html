<?php 

$args = array(
  'post_type' => 'post',
  'order'      => 'ASC',
  'category_name'  => 'featured',
  'post_status' => 'publish',
  'limit'    => 4
  );
$post_query = new WP_Query($args);
$post = $post_query->get_posts();
$size = 'featured-post-img';

?>

<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-12">
                <div class="section-title">
                  <h2>Editor's Pick</h2>
                </div>
              </div>
            </div>
           <?php if( $post[0]->ID):?>
            <div class="row">
              <div class="col-md-6">
                <div class="post-entry-1">  <?php  $featuredImg = wp_get_attachment_image_src( get_post_thumbnail_id($post[0]->ID), $size ); ?>
                  <a href="<?php echo get_permalink( $post[0]->ID);?>"><img src="<?php echo  $featuredImg['0'];?>" alt="<?php echo  $post[0]->post_title;?>" class="img-fluid"></a>
                  <h2><a href="<?php echo get_permalink( $post[0]->ID);?>"><?php echo  $post[0]->post_title;?></a></h2>
                  <p><?php echo get_post_meta( $post[0]->ID, '_yoast_wpseo_metadesc', true); ?></p>
                  <div class="post-meta">
                    <span class="d-block"><a href="#"><?php echo get_author_name($post[0]->post_author)?></a></a></span>
                    <span class="date-read"><?php echo $post[0]->post_date;?><span class="mx-1">&bullet;</span><span class="icon-star2"></span></span>
                  </div>
                </div>
              </div>
           <?php endif;?>
           <?php if( $post[1]->ID):?>
              <div class="col-md-6">
                <div class="post-entry-2 d-flex bg-light"> <?php  $featuredImg2 = wp_get_attachment_image_src( get_post_thumbnail_id($post[1]->ID), $size ); ?>
                  <div class="thumbnail" style="background-image: url('<?php echo $featuredImg2['0'];?>')"></div>
                  <div class="contents">
                    <h2><a href="<?php echo get_permalink( $post[1]->ID);?>"><?php echo  $post[1]->post_title;?></a></h2>
                    <div class="post-meta">
                      <span class="d-block"><a href="#"><?php echo get_author_name($post[1]->post_author)?></a></span>
                      <span class="date-read"><?php echo $post[1]->post_date;?><span class="mx-1">&bullet;</span>   <span class="icon-star2"></span></span>
                    </div>
                  </div>
                </div>
                <?php endif;?>
                <?php if( $post[2]->ID):?>
                <div class="post-entry-2 d-flex"> <?php  $featuredImg3 = wp_get_attachment_image_src( get_post_thumbnail_id($post[2]->ID), $size ); ?>
                  <div class="thumbnail" style="background-image: url('<?php echo $featuredImg3['0']; ?>')"></div>
                  <div class="contents">
                    <h2><a href="<?php echo get_permalink( $post[2]->ID);?>"><?php echo  $post[2]->post_title;?></a></h2>
                    <div class="post-meta">
                      <span class="d-block"><a href="#"><?php echo get_author_name($post[2]->post_author)?></a></span>
                      <span class="date-read"><?php echo $post[1]->post_date;?><span class="mx-1">&bullet;</span><span class="icon-star2"></span></span>
                    </div>
                  </div>
                </div>
                <?php endif;?>
                <?php if( $post[3]->ID):?>
                <div class="post-entry-2 d-flex"> <?php  $featuredImg4 = wp_get_attachment_image_src( get_post_thumbnail_id($post[3]->ID), $size ); ?>
                  <div class="thumbnail" style="background-image: url('<?php echo  $featuredImg4['0']; ?>')"></div>
                  <div class="contents">
                    <h2><a href="<?php echo get_permalink( $post[3]->ID);?>"><?php echo  $post[3]->post_title;?></a></h2>
                    <div class="post-meta">
                      <span class="d-block"><a href="#"><?php echo get_author_name($post[3]->post_author)?></a></span>
                      <span class="date-read"><?php echo $post[1]->post_date;?><span class="mx-1">&bullet;</span><span class="icon-star2"></span></span>
                    </div>
                  </div>
                </div>
                <?php endif;?>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="section-title">
              <h2>Trending</h2>
            </div>

            <div class="trend-entry d-flex">
              <div class="number align-self-start">01</div>
              <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>

            <div class="trend-entry d-flex">
              <div class="number align-self-start">02</div>
              <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>

            <div class="trend-entry d-flex">
              <div class="number align-self-start">03</div>
              <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>

            <div class="trend-entry d-flex">
              <div class="number align-self-start">04</div>
              <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>
            
            <p>
              <a href="#" class="more">See All Trends <span class="icon-keyboard_arrow_right"></span></a>
            </p>

          </div>
        </div>
      </div>
    </div>
    <!-- END section -->

    <div class="py-0">
      <div class="container">
        <div class="half-post-entry d-block d-lg-flex bg-light">
          <div class="img-bg" style="background-image: url('images/big_img_1.jpg')"></div>
          <div class="contents">
            <span class="caption">Editor's Pick</span>
            <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero obcaecati natus adipisci necessitatibus eius, enim vel sit ad reiciendis. Enim praesentium magni delectus cum, tempore deserunt aliquid quaerat culpa nemo veritatis, iste adipisci excepturi consectetur doloribus aliquam accusantium beatae?</p>
            
            <div class="post-meta">
              <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">Food</a></span>
              <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
            </div>

          </div>
        </div>
      </div>
    </div>