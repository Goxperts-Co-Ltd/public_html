<?php 
global $post;
$jobs_category = array(
     'taxonomy' => 'job-category',
     'hide_empty' => false,
     'orderyby'    => 'ASC',
);
$jobs_category_terms = get_terms($jobs_category);
if(count($jobs_category_terms) > 0){
?>
<div class="sidebar-box ftco-animate">
    <div class="categories">
        <h3 class="heading-3">Recent Category</h3>
        <?php foreach($jobs_category_terms as $cat => $latest) :
             if($cat === 10){
             break;
             }
            ?>
        <li><a href="#"><?php echo $latest->name;?><span>(<?php echo $latest->count;?>)</span></a></li>
        <?php endforeach;wp_reset_query(); ?>
    </div>
</div>
<?php
}
?>