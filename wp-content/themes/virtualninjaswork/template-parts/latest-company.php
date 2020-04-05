<?php 
//erp company query - require ERP Plugins
$company_type = array(
	'type' => 'company'
);
$contact_companies = erp_get_peoples($company_type);
if(count($contact_companies) > 0){
?>
<div class="sidebar-box ftco-animate">
    <div class="categories">
        <h3 class="heading-3">Latest Company</h3>
        <?php foreach($contact_companies as $keys => $compani) : 
                if($keys === 5){
                break;
                }
            ?>
        <li><a href="#"><?php echo $compani->first_name; ?></a></li>
        <?php endforeach;wp_reset_query(); ?>
    </div>
</div>
<?php
}
?>