<?php 
$company = new \WeDevs\ERP\Company();
$virtual_ninjas = $company->address;
$virtual_add = $virtual_ninjas['address_1'].','.$virtual_ninjas['city'].','.$virtual_ninjas['zip'];
$virtual_phone = $company->phone;
$virtual_email = $company->fax;  
?>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"><?php echo $virtual_add;?></span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text"><?php echo $virtual_phone;?></span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?php echo $virtual_email;?></span></a></li>
	              </ul>
	            </div>
            </div>
          </div>