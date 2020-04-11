<?php 
//erp company query - require ERP Plugins
$company_type = array(
	'type' => 'company'
);
$contact_companies = erp_get_peoples($company_type);
$root_2 = esc_url( home_url( '/job-openings/?job__company_spec=' ));
if(count($contact_companies) > 0){
?>
<div class="sidebar-box ftco-animate">
    <div class="categories">
        <h3 class="heading-3">Latest Company</h3>
        <?php foreach($contact_companies as $keys => $compani) : 
                if($keys === 5){
                break;
                }
                $company_slug = array(
                    'taxonomy' => 'job-company',
                    'name' => $compani->first_name				
                   );
                  $company_slug_post_filter = get_terms($company_slug);
            ?>
        <li><a href="<?php echo $root_2.$company_slug_post_filter[0]->slug;?>"><?php echo $compani->first_name; ?></a></li>
        <?php endforeach;wp_reset_query(); ?>
    </div>
</div>
<?php
}
?>