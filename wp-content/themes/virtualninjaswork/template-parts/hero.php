<?php
//countries count
$search_location = array(
    'taxonomy' => 'job-location',
    'hide_empty' => false,
    'order'      => 'ASC'
);	
$main_search_location = get_terms($search_location);
$countries = count($main_search_location);
//company count
$company_type = array(
	'type' => 'company'
);
$contact_companies = erp_get_peoples($company_type);
$company = count($contact_companies);
//employee count
$employee_args = array(
	'type' => 'employee'
);
$employees = erp_get_peoples($employee_args);
$employee = count($employees);
?>

<div class="ftco-counter ftco-no-pt ftco-no-pb">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
                <div class="text d-flex">
                    <div class="icon mr-2">
                        <span class="flaticon-worldwide"></span>
                    </div>
                    <div class="desc text-left">
                        <strong class="number" data-number="<?php echo $countries; ?>">0</strong>
                        <span>Countries</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
                <div class="text d-flex">
                    <div class="icon mr-2">
                        <span class="flaticon-visitor"></span>
                    </div>
                    <div class="desc text-left">
                        <strong class="number" data-number="<?php echo $company; ?>">0</strong>
                        <span>Companies</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
                <div class="text d-flex">
                    <div class="icon mr-2">
                        <span class="flaticon-resume"></span>
                    </div>
                    <div class="desc text-left">
                        <strong class="number" data-number="<?php echo $employee;?>">0</strong>
                        <span>Active Employees</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>