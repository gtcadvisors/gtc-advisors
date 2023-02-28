<?php
$app_dir = basename(dirname(__FILE__)).'/';
$router->map('GET|POST','/', $app_dir.'home.php');
$router->map('GET|POST','/home/[a:lang]?/?', $app_dir.'home.php');
$router->map('GET|POST','/home/[a:lang]?/[a:country]?/?', $app_dir.'home.php');
$router->map('GET|POST','/index2/?', $app_dir.'index2.php');
$router->map('GET|POST','/dashboard/?', $app_dir.'dashboard.php');
$router->map('GET|POST','/advisor-profile/[*:username]?/?', $app_dir.'advisor-profile.php');
$router->map('GET|POST','/become-an-advisor/?', $app_dir.'become-an-advisor.php');
$router->map('GET|POST','/become-an-advisor-form/?', $app_dir.'become-an-advisor-form.php');
$router->map('GET|POST','/profile-edit/?', $app_dir.'profile-edit.php');
$router->map('GET|POST','/my-experiences/[*:page]?/?', $app_dir.'my-experiences.php');
$router->map('GET|POST','/add-experience/?', $app_dir.'user-experience.php');
$router->map('GET|POST','/edit-experience/[i:id]?', $app_dir.'user-experience.php');

// Advisors Certificates Links
$router->map('GET|POST','/my-certificates/[*:page]?/?', $app_dir.'my-certificates.php');
$router->map('GET|POST','/add-certificate/?', $app_dir.'certificate.php');
$router->map('GET|POST','/edit-certificate/[i:id]?', $app_dir.'certificate.php');

// Advisors Resumes Links
$router->map('GET|POST','/my-resumes/[*:page]?/?', $app_dir.'my-resumes.php');
$router->map('GET|POST','/add-resume/?', $app_dir.'resume.php');
$router->map('GET|POST','/edit-resume/[i:id]?', $app_dir.'resume.php');

// // Advisors Licenses Links
$router->map('GET|POST','/my-licenses/[*:page]?/?', $app_dir.'my-licenses.php');
$router->map('GET|POST','/add-license/?', $app_dir.'license.php');
$router->map('GET|POST','/edit-license/[i:id]?', $app_dir.'license.php');

$router->map('GET|POST','/my-companies/[*:page]?/?', $app_dir.'my-companies.php');
$router->map('GET|POST','/myaccount/?', $app_dir.'myaccount.php');
$router->map('GET|POST','/create-company/?', $app_dir.'add-company.php');
$router->map('GET|POST','/edit-company/[i:id]?', $app_dir.'add-company.php');
$router->map('GET|POST','/my-jobs/[*:page]?/?', $app_dir.'my-jobs.php');
$router->map('GET|POST','/pending/[*:page]?/?', $app_dir.'ad-pending.php');
$router->map('GET|POST','/expire/[*:page]?/?', $app_dir.'ad-expire.php');
$router->map('GET|POST','/favourite/[*:page]?/?', $app_dir.'ad-favourite.php');
$router->map('GET|POST','/favourite-users/[*:page]?/?', $app_dir.'favourite-users.php');
$router->map('GET|POST','/applied-jobs/[*:page]?/?', $app_dir.'applied-jobs.php');
$router->map('GET|POST','/applied-users/[i:id]?', $app_dir.'applied-users.php');
$router->map('GET|POST','/hidden/[*:page]?/?', $app_dir.'ad-hidden.php');
$router->map('GET|POST','/no_saved_advisors/?', $app_dir.'no_saved_advisors.php');
$router->map('GET|POST','/resubmission/[*:page]?/?', $app_dir.'ad-resubmission.php');
$router->map('GET|POST','/job-alert/?', $app_dir.'job-alert.php');
$router->map('GET|POST','/companies/?', $app_dir.'companies.php');
$router->map('GET|POST','/profile/[*:username]?/[*:page]?/?',$app_dir.'profile.php');
$router->map('GET|POST','/job/[i:id]?/[*:slug]?/?', $app_dir.'ad-detail.php');
$router->map('GET|POST','/company/[i:id]?/[*:slug]?/?', $app_dir.'company-detail.php');
$router->map('GET|POST','/post-job/[a:lang]?/[a:country]?/[a:action]?/?', $app_dir.'post-job.php');
$router->map('GET|POST','/edit-job/[i:id]?/[a:lang]?/[a:country]?/[a:action]?/?', $app_dir.'edit-job.php');
$router->map('GET|POST','/listing/?', $app_dir.'listing.php');
$router->map('GET|POST','/freelancers/?', $app_dir.'freelancers.php');
$router->map('GET|POST','/category/?', $app_dir.'category.php');
$router->map('GET|POST','/expert-profile/?', $app_dir.'expert-profile.php');
$router->map('GET|POST','/saved-advisors/?', $app_dir.'saved-advisors.php');
$router->map('GET|POST','/category/[*:cat]?/[*:subcat]?/?', $app_dir.'listing.php');
$router->map('GET|POST','/sub-category/[*:subcat]?/[*:slug]?/?', $app_dir.'listing.php');
$router->map('GET|POST','/city/[i:city]?/[*:slug]?/?', $app_dir.'listing.php');
$router->map('GET|POST','/keywords/[*:keywords]?/?', $app_dir.'listing.php');
$router->map('GET|POST','/manage-project/[*:page]?/?', $app_dir.'project_manage.php');
$router->map('GET|POST','/bidder/[i:id]?', $app_dir.'project_bidder.php');
$router->map('GET|POST','/milestone/[i:id]?', $app_dir.'project_milestone.php');
$router->map('GET|POST','/project/[i:id]?/[*:slug]?/?', $app_dir.'project_detail.php');
$router->map('GET|POST','/edit-project/[i:id]?/[a:action]?/?', $app_dir.'project_edit.php');
$router->map('GET|POST','/post-project/?', $app_dir.'project_post.php');
$router->map('GET|POST','/projects/?', $app_dir.'project_search.php');
$router->map('GET|POST','/projects/[*:cat]?/[*:subcat]?/?', $app_dir.'project_search.php');
$router->map('GET|POST','/deposit/?', $app_dir.'project_deposit.php');
$router->map('GET|POST','/transfer/?', $app_dir.'project_transfer.php');
$router->map('GET|POST','/withdraw/?', $app_dir.'project_withdraw.php');
$router->map('GET|POST','/notifications/[*:page]?/?', $app_dir.'project_notifications.php'); 