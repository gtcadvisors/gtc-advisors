<!DOCTYPE html>
<html lang="<?php _esc($config['lang_code']);?>" dir="<?php _esc($lang_direction);?>">
<head>
    <title><?php _esc($page_title); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="<?php _esc($config['site_title']);?>">
    <meta name="keywords" content="<?php _esc($config['meta_keywords']);?>">
    <meta name="description" content="<?php ($meta_desc == '')?_esc($config['meta_description']):_esc($meta_desc);?>">

    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//google.com">
    <link rel="dns-prefetch" href="//apis.google.com">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//pagead2.googlesyndication.com">
    <link rel="dns-prefetch" href="//gstatic.com">
    <link rel="dns-prefetch" href="//oss.maxcdn.com">

    <meta property="fb:app_id" content="<?php _esc($config['facebook_app_id']);?>"/>
    <meta property="og:site_name" content="<?php _esc($config['site_title']);?>"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:url" content="<?php _esc($page_link);?>"/>
    <meta property="og:title" content="<?php _esc($page_title); ?>" />
    <meta property="og:description" content="<?php _esc($meta_desc);?>"/>
    <meta property="og:type" content="<?php _esc($meta_content);?>"/>
    <?php if($meta_content == 'article'){ ?>
        <meta property="article:author" content="#"/>
        <meta property="article:publisher" content="#"/>
        <meta property="og:image" content="<?php _esc($meta_image);?>"/>
        <?php
    }
    if($meta_content == 'website'){
        echo '<meta property="og:image" content="'.$meta_image.'"/>';
    }
    ?>

    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="<?php _esc($page_title);?>">
    <meta property="twitter:description" content="<?php _esc($meta_desc);?>">
    <meta property="twitter:domain" content="<?php _esc($config['site_url']);?>">
    <meta name="twitter:image:src" content="<?php _esc($meta_image);?>"/>
    <link rel="shortcut icon" href="<?php _esc($config['site_url']);?>storage/logo/<?php _esc($config['site_favicon']);?>">

    <script async>
        var themecolor = '<?php _esc($config['theme_color']);?>';
        var mapcolor = '<?php _esc($config['map_color']);?>';
        var siteurl = '<?php _esc($config['site_url']);?>';
        var template_name = '<?php _esc($config['tpl_name']);?>';
    </script>

    <!--Loop for Theme Color codes-->
    <style>
        :root{
        <?php
        $themecolor = $config['theme_color'];
        $colors = array();
        list($r, $g, $b) = sscanf($themecolor, "#%02x%02x%02x");
        $i = 0.01;
        while($i <= 1){
            echo "--theme-color-".str_replace('.','_',$i).": rgba($r,$g,$b,$i);";
            $i += 0.01;
        }
        echo "--theme-color-1: rgba($r,$g,$b,1);";
        ?>
        }
    </style>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<title>Become an Advisor</title>
		<!--  stylesheets-->
		<link href="<?php _esc(TEMPLATE_URL);?>/assets/css/become_form.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
		<!--	bootstrap icons			-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	</head>
	<body>
		<form method="post" action="#" enctype="multipart/form-data" id="advisor-form">
			
		<div class="d-flex align-items-md-center pe-4 border-bottom border-top flex-md-wrap flex-lg-nowrap">
			<div class="container-fluid p-3 pb-0 ps-md-5 ps-lg-5 d-flex align-items-md-center flex-md-wrap flex-lg-nowrap flex-column flex-md-row">
				<div class="d-flex align-items-center mb-2 header-circle-cont">
					<div class="me-3 pb-md-2"><i class="bi bi-1-circle-fill circle-active"></i></div>
					<div class="me-3 pb-md-2"><span class="blue__fg header-text">Personal Information</span></div>
					<div class="me-3 pb-md-2"><i class="bi bi-chevron-right d-none d-md-block "></i></div>
				</div>
				<div class="d-flex align-items-center mb-2 header-circle-cont">
					<div class="me-3 pb-md-2"><i class="bi bi-2-circle circle"></i></div>
					<div class="me-3 pb-md-2"><span class="header-text">Professional Information</span></div>
					<div class="me-3 pb-md-2"><i class="bi bi-chevron-right d-none d-md-block "></i></div>
				</div>
				<div class="d-flex align-items-center mb-2 header-circle-cont">
					<div class="me-3 pb-md-2"><i class="bi bi-3-circle circle"></i></div>
					<div class="me-3 pb-md-2"><span class="header-text">Certifications</span></div>
					<div class="me-3 pb-md-2"><i class="bi bi-chevron-right d-none d-md-block "></i></div>
				</div>
				<div class="d-flex align-items-center mb-2 header-circle-cont">
					<div class="me-3 pb-md-2"><i class="bi bi-4-circle circle"></i></div>
					<div class="me-3 pb-md-2"><span class="header-text">Licenses</span></div>
					<div class="me-3 pb-md-2"><i class="bi bi-chevron-right d-none d-md-block "></i></div>
				</div>
				<div class="d-flex align-items-center mb-2 header-circle-cont">
					<div class="me-3 pb-md-2"><i class="bi bi-5-circle circle"></i></div>
					<div class="me-3 pb-md-2"><span class="header-text">Resume</span></div>
				</div>
				<div  class="ms-auto align-items-center d-none d-md-block mb-2">
					<a href="<?php url("BECOME-ADVISOR") ?>" class="mb-2">Exit</a>
				</div>
			</div>
			<div class="d-flex d-md-none">
				<a href="<?php url("BECOME-ADVISOR") ?>" class="mt-auto mb-2">Exit</a>
			</div>
		</div>

			<!-- <div class="container-fluid border-bottom border-top p-3">
				<div class="row align-items-center ms-lg-2">
						<div class="col-10 col-md-12 col-lg-10">
								<div class="row gy-2">
									<div class="col-sm-12 col-md-auto">
											<div class="row align-items-center header-circle-cont">
												<div class="col-auto"><i class="bi bi-1-circle-fill circle-active"></i></div>
												<div class="col-auto"><span class="blue__fg header-text">Personal Information</span></div>
												<div class="col-auto"><i class="bi bi-chevron-right d-none d-md-block "></i></div>
											</div>
									</div>
										
									<div class="col-sm-12 col-md-auto">
											<div class="row align-items-center header-circle-cont">
												<div class="col-auto"><i class="bi bi-2-circle circle"></i></div>
												<div class="col-auto"><span class="header-text">Professional Information</span></div>
												<div class="col-auto"><i class="bi bi-chevron-right d-none d-md-block "></i></div>
											</div>
									</div>
										
									<div class="col-sm-12 col-md-auto">
											<div class="row align-items-center header-circle-cont">
												<div class="col-auto"><i class="bi bi-3-circle circle"></i></div>
												<div class="col-auto"><span class="header-text">Certifications</span></div>
												<div class="col-auto"><i class="bi bi-chevron-right d-none d-md-block "></i></div>
											</div>
									</div>
										
									<div class="col-sm-12 col-md-auto">
											<div class="row align-items-center header-circle-cont">
												<div class="col-auto"><i class="bi bi-4-circle circle"></i></div>
												<div class="col-auto"><span class="header-text">Licenses</span></div>
												<div class="col-auto"><i class="bi bi-chevron-right d-none d-md-block "></i></div>
											</div>
									</div>
									
									<div class="col-sm-12 col-md-auto">
											<div class="row align-items-center header-circle-cont">
												<div class="col-auto"><i class="bi bi-5-circle circle"></i></div>
												<div class="col-auto"><span class="header-text">Resume</span></div>
											</div>
									</div>
								</div>
						</div>
						<div class="col-1 ms-auto text-end me-2 exit-btn mt-auto mt-lg-1">
							<a href="<?php url("BECOME-ADVISOR") ?>" class="">Exit</a>
						</div>
				</div>
			</div> -->
					

					

				<!--#########################  PERSONAL INFORMATION  #############################-->
			<div id="0" class="form-section hidden" style="overflow-x: hidden;">
			<span class=<?php echo( $inputError? "error-message": "hidden") ?>><?php  _esc($inputError) ?></span>
			<span class=<?php echo( $profileImageError? "error-message": "hidden") ?>><?php  _esc($profileImageError) ?></span>
			<span class=<?php echo( $languageSelectError? "error-message": "hidden") ?>><?php  _esc($languageSelectError) ?></span>
				<div class="container-fluid ms-md-4 p-4 pt-lg-5 pb-lg-5">
					<div class="row section-2">
						<div class="col-lg-6 col-sm-8">
							<h3 class="blue__fg mb-3">Personal Information</h3>
							<span class="blue__fg subheader-text lh-lg">Tell us a bit about yourself. This Information will appear on your </span>
							<span class="blue__fg subheader-text lh-lg">public profile, so that potential customers can get to know you better</span>
						</div>
						<div class="col-4 align-self-end text-end ms-auto me-4"><span class="light-text">* Mandatory fields</span></div>
					</div>
				</div>
					
				<div class="container-fluid border-top p-4 pt-2 p-md-4">
					<div class="row ms-md-5 mt-4">
						<span class="text-dark fw-bold text mb-2">Profile Picture <span class="text text-danger">*</span></span>
						<span class="mb-4">Add a profile picture of yourself so customers will know exactly who you are</span>
						<div class="img-circle mb-4" id="profile-picture"><i class="bi bi-camera"></i>
					</div>
						<div class="row" id="upload-pic-cntr">
							<div class="col-auto"><input class="btn btn-md blue__btn ps-3 pt-2 pb-2 pe-3" id="upload-pic-btn" type="button" value="Upload a picture"></div>
						</div>
						<div class="row hidden" id="upload-delete-cntr">
							<div class="col-auto"><input type="button" class="btn btn-md blue__btn ps-3 pt-2 pb-2 pe-3 rounded-3" id="upload-new-pic-btn" value="Upload new picture"></div>
							<div class="col-auto"><input type="button" class="btn btn-light btn-md ps-3 pt-2 pb-2 pe-3 rounded-3 grey-btn" id="delete-pic-btn" value="Delete"></div>
						</div>							
						<input type="file" id="profile-image-upload" name="profileImage" class="hidden" accept="image/*">
						<span class="file-error ms-1 mt-2"></span>

						<div class="row mt-3">
							<div class="col-lg-4 col-md-6 col-xs-12">
								<label class="text-dark fw-bold fs-6 text mt-2" for="fullname">Name <span class="text text-danger">*</span></label>
								<input class="form-input mt-3 text-required" id="fullname" name="fullName" type="text" placeholder="Full Name">
								<label class="mt-2">We’re big on real names around here, so people know who’s who.</label>
							</div>
						</div>
							
						<div class="row">
							<div class="col-lg-4 col-md-6 col-xs-12">
							<label class="text-dark fw-bold text mt-4" for="username">Username</label>
								<input class="form-input mt-3 disabled" id="username" name="userName" type="text" placeholder="Username" value="<?php _esc($userName)?>" disabled>
								<label class="mt-2">Your Global Tax Complaince URL: https://gtc.co/faridahux</label>
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-4 col-md-6 col-xs-12">
								<label class="text-dark fw-bold text mt-4" for="email">Email <span class="text text-danger">*</span></label>
								<input class="form-input mt-3 text-required disabled" id="email" name="email" type="email" value="<?php _esc($email)?>" disabled>
							</div>
						</div>
							
						<div class="row">
							<div class="col-lg-4 col-md-6 col-xs-12">
								<label class="text-dark fw-bold text mt-4" for="phone">Phone number <span class="text text-danger">*</span></label>
								<input class="form-input mt-3 text-required" id="phone" name="phone" type="tel" placeholder="Phone number">
							</div>
						</div>
							
						<div class="row mt-4">
							<div class="col-lg-4 col-md-6 col-xs-12">
								<div class="row align-items-center">
									<div class="col-auto"><label class="text-dark fw-bold text mb-3" for="bio">Bio <span class="text text-danger">*</span></label></div>
									<div class="col-auto ms-auto"><label class="text fs-6 mb-3"><span id="bio-word-count">0</span>/200</label></div>
								</div>
								<textarea id="bio" name="bio" class="text-required" placeholder="Bio" maxlength="200"></textarea>
								<label class="mt-2">A catchphrase for why clients should hire you</label>
							</div>
						</div>
							
						<div class="row mt-4">
							<div class="col-lg-4 col-md-6 col-xs-12">
								<div class="row align-items-center">
									<div class="col-auto"><label class="text-dark fw-bold text mb-3" for="description">Description / About you <span class="text text-danger">*</span></label></div>
									<div class="col-auto ms-auto"><label class="text fs-6 mb-3"><span id="desc-word-count">0</span>/1024</label></div>
								</div>
									<textarea id="description" name="description" placeholder="Description" maxlength="1024" class="text-required"></textarea>
									<label class="mt-2">Share a bit about yourself, your work experience, projects you have worked on and your area of expertise</label>
							</div>
						</div>
							
						<label class="text-dark fw-bold fs-6 text mt-4 mb-3" for="languages">Languages<span class="text text-danger">*</span></label>
						<div class="row">
							<div class="col-lg-4 col-md-6 col-xs-12">
								<select id="languages" class="mb-5" multiple name="languages[]">
									<option value="arabic">Arabic</option>
									<option value="english">English</option>
									<option value="bengali">Bengali</option>
									<option value="french">French</option>
									<option value="spanish">Spanish</option>
								</select>
							</div>
						</div>

						<div class="row text-end mt-5 mb-5">
							<div class="col-lg-5 col-sm-8"><input type="button" class="btn btn-lg blue__btn continue-btn" value="Continue" ></div>
						</div>
					</div>
				</div>
			</div>
				




			<!--############################  PROFESSIONAL INFORMATION  ###############################-->
			<div id="1" class="form-section hidden">

			<span class=<?php echo( $contractorTypeError? "error-message": "hidden") ?>><?php  _esc($contractorTypeError) ?></span>
			<span class=<?php echo( $expertiseListError? "error-message": "hidden") ?>><?php  _esc($expertiseListError) ?></span>

				<div class="container-fluid ms-md-4 p-4 pt-lg-5 pb-lg-5">
					<div class="row section-2">
						<div class="col-lg-6 col-sm-8">
							<h3 class="blue__fg mb-3">Professional Information</h3>
							<span class="blue__fg subheader-text lh-lg">This is your time to shine. Let potential customers know what you do </span>
							<span class="blue__fg subheader-text lh-lg">best and how you gained your licences, certifications and experience.</span>
						</div>
						<div class="col-4 align-self-end text-end ms-auto me-4"><span class="light-text">* Mandatory fields</span></div>
					</div>
				</div>

				<div class="container-fluid border-top p-4 pt-2 p-md-4">
					<div class="row ms-md-5">
						<!--		agency or freelancer			-->
						<div class="row">

							<div class="col-sm-12 col-md-12 col-lg-6">
								<label class="text-dark fw-bold text mt-3 mb-2">Contractor <span class="text text-danger">*</span></label>
								<br>
								<label class="">We want to know if you are an Agency or a Freelancer</label>
								<hr>
								<div class="form-check m-2">
									<input class="form-check-input" type="radio" name="contractor" id="freelancer-radiobtn" value="freelancer">
									<label class="form-check-label text-dark ms-2" for="freelancer-radiobtn">Freelancer</label>
								</div>
								<div class="form-check m-2">
									<input class="form-check-input" type="radio" name="contractor" id="agency-radiobtn" value="agency" >
									<label class="form-check-label text-dark  ms-2" for="agency-radiobtn">Agency</label>
								</div>
									<span class="contractor-radio-error ms-2 hidden" style="color: #E02B1D">You must select an option</span>
							</div>
							
							<div class="agency-contents hidden">

								<div class="row mt-2">
									<div class="col-sm-12 col-md-12 col-lg-6">
										<label class="text-dark fw-bold text mt-3 mb-2">Agency size <span class="text text-danger">*</span></label>
										<br>
										<label class="">Choose your agency size</label>
										<hr>
										<div class="form-check m-2">
											<input class="form-check-input" type="radio" name="agencySize" id="flexRadioDefault3" value="2 - 20 Employees">
											<label class="form-check-label text-dark  ms-2" for="flexRadioDefault3">2 - 20 Employees</label>
										</div>
										<div class="form-check m-2">
											<input class="form-check-input" type="radio" name="agencySize" id="flexRadioDefault4" value="20 - 50 Employees">
											<label class="form-check-label text-dark  ms-2" for="flexRadioDefault4">20 - 50 Employees</label>
										</div>
										<div class="form-check m-2">
											<input class="form-check-input" type="radio" name="agencySize" id="flexRadioDefault5" value="50 - 100 Employees">
											<label class="form-check-label text-dark  ms-2" for="flexRadioDefault5">50 - 100 Employees</label>
										</div>
										<div class="form-check m-2">
											<input class="form-check-input" type="radio" name="agencySize" id="flexRadioDefault6" value="100 and more Employees">
											<label class="form-check-label text-dark  ms-2" for="flexRadioDefault6">100 and more Employees</label>
										</div>
									</div>
									<span class="agency-size-radio-error ms-2 hidden" style="color: #E02B1D">You must select an option</span>
								</div>

								<div class="row mt-2">
									<div class="col-sm-12 col-md-12 col-lg-6">
										<label class="text-dark fw-bold text mt-3 mb-2">Year founded <span class="text text-danger">*</span></label>
										<br>
										<label class="">Choose the year your agency was founded </label>
										<hr>
										<div class="year-founded-container">
											<input type="text" class="yearpicker form-input mb-4 year-picker-input" value="" readonly />
										</div>
										
									</div>
								</div>

							</div>
						
						
						</div>
						
						<!--		Expertise -->
						<div class="row expertise-section">
							<div class="col-sm-12 pb-3 border-bottom col-md-12 col-lg-6">
								<label class="text-dark fw-bold text mt-4">Services <span class="text text-danger">*</span></label>
								<div class="row mt-2">
									<div class="col-auto"><label class="">Choose your area of expertise</label></div>
									<div class="col-auto ms-auto blue__fg"><label class="mb-1">Select all that apply</label></div>
								</div>
								
								<div class="row border-top mt-2 mb-3 gy-3 expertise-list">
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c1" name="expertise[]" value="Tax Audit">
										<label for="c1" class="form-check-label text-dark  ms-2">Tax Audit</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c2" name="expertise[]" value="Tax Compliance">
										<label for="c2" class="form-check-label text-dark ms-2">Tax Compliance</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c3" name="expertise[]" value="Tax Dispute">
										<label for="c3" class="form-check-label text-dark  ms-2">Tax Dispute</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c4" name="expertise[]" value="Corporate Income Tax">
										<label for="c4" class="form-check-label text-dark ms-2">Corporate Income Tax</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c5" name="expertise[]" value="Personal Income Tax">
										<label for="c5" class="form-check-label text-dark ms-2">Personal Income Tax</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c6" name="expertise[]" value="Tax Pricing">
										<label for="c6" class="form-check-label text-dark ms-2">Tax Pricing</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c7" name="expertise[]" value="Value Added Tax">
										<label for="c7" class="form-check-label text-dark ms-2">Value Added Tax</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c8" name="expertise[]" value="Tax Planning">
										<label for="c8" class="form-check-label text-dark ms-2">Tax Planning</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c9" name="expertise[]" value="Tax Law Research">
										<label for="c9" class="form-check-label text-dark ms-2">Tax Law Research</label>
									</div>
									<div class="col-sm-12 col-md-4">
										<input type="checkbox" class="form-check-input expertise" id="c10" name="expertise[]" value="Tax Advice">
										<label for="c10" class="form-check-label text-dark ms-2">Tax Advice</label>
									</div>
								
								</div>
								<span class="blue__fg" id="add-new-expertise"><i class="bi bi-plus blue__fg"></i>Add New</span>
								<div class="row hidden align-items-center new-expertise gy-2">
									<div class="col-9 col-md-5 new-expertise-input"><input class="form-input-2" placeholder="Add Expertise"></div>
									<div class="col-1 col-md-1"><i class="bi bi-plus-circle-fill blue__fg display-6" id="add-expertise" role="button"></i></div>
								</div>
							</div>
						</div>
						<span class="checkbox-error hidden mt-2" style="color: #E02B1D">You must check at least one service</span>

						<div class="row mt-5 mb-5">
							<div class="col-12 col-lg-6">
								<div class="row">
									<div class="col-auto"><input type="button" class="btn btn-lg ps-3 pt-2 pb-2 pe-3 rounded-3 button-3 previous-btn" value="Previous" ></div>
									<div class="col-auto ms-auto"><input type="button" class="btn btn-lg ps-3 pt-2 pb-2 pe-3 rounded-3 blue__btn continue-btn" value="Continue" ></div>
								</div>
							</div>
						</div>

					</div>
				</div>					
			</div>
	


			<!--################################ CERTIFICATIONS #########################-->

			<div id="2" class="form-section active">
			<span class=<?php echo( $certficateFileError? "error-message": "hidden") ?>><?php  _esc($certficateFileError) ?></span>

				<div class="row justify-content-center mt-5">
					<div class="col-10 col-md-9">
							<div class="row">
								<div class="col-auto ms-auto"><input type="button" class="btn blue__btn ps-3 pt-2 pb-2 pe-3 rounded-3 add-file" value="Add Certificate" data-bs-toggle="modal" data-bs-target="#cert-modal"></div>
							</div>
					</div>
				</div>
				
				<!--Cert modal -->
				<div class="modal" id="cert-modal" tabindex="-1" aria-labelledby="cert-modalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<div class="container-fluid" id="certifications-section">
									<label class="text-dark fw-bold fs-6 text mb-3">Certifications</span></label>
									<br>
									<label class="mb-1">Include any certificates or awards that are relevant to the services you are offering.</label>
									<div class="row mt-4">
										<input type="file" class="certificate"  capture="user">
										<span class="file-error hidden"></span>
									</div>
									<div class="row">
										<div class="col-9 col-md-6 mt-3"><input class="form-input-2" id="certificate-name" placeholder="Certificate Name"></div>
										<!-- <div class="col-9 col-md-6 mt-3 "><input class="form-input-2" id="certificate-from" placeholder="Certificate From (e.g ICAN)"></div> -->
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close-cert-modal">Close</button>
								<button type="button" class="btn blue__btn"  id="add-certificate-btn">Add</button>
							</div>
						</div>
					</div>
				</div>
		

				<div class="row justify-content-center mt-2">
					<div class="container-1 col-10 col-md-9 overflow-y-auto">
						<table class="table cert-table hidden">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Certificate Name</th>
									<!-- <th scope="col">Certificate From</th> -->
									<th scope="col"></th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>

						<div class="text-center mt-5 pt-5 no-cert-placeholder">
								<img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/no-files-icon.svg" alt="">
								<h2>Add Certifications</h2>
						</div>
					</div>	
				</div>
				<div class="row justify-content-center mt-5">
					<div class="col-10 col-md-9">
						<div class="row">
							<div class="col-auto">
								<input type="button" class="btn btn-lg ps-3 pt-2 pb-2 pe-3 rounded-3 button-3 previous-btn" value="Previous">
							</div>
							<div class="col-auto ms-auto">
								<input type="button" class="btn btn-lg ps-3 pt-2 pb-2 pe-3 rounded-3 blue__btn continue-btn" value="Continue">
							</div>
						</div>
					</div>
				</div>

			</div>




			<!--############################  LICENCES ############################-->

			<div id="3" class="form-section hidden">
			<span class=<?php echo( $licenseFileError? "error-message": "hidden") ?>><?php  _esc($licenseFileError) ?></span>
				<div class="row justify-content-center mt-5">
					<div class="col-10 col-md-9">
						<div class="row">
							<div class="col-auto ms-auto"><input type="button" class="btn blue__btn	 ps-3 pt-2 pb-2 pe-3 rounded-3 add-file" value="Add License" data-bs-toggle="modal" data-bs-target="#license-modal"></div>
						</div>
					</div>
				</div>
			
				<!--License Modal -->
				<div class="modal" id="license-modal" tabindex="-1" aria-labelledby="license-modalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<div class="container-fluid" id="license-section">
										<label class="text-dark fw-bold fs-6 text mb-3">License <span class="text text-danger">*</span></label>
										<br>
										<label class="mb-1">Include any license that are relevant to the services you are offering.</label>
										<div class="row mt-4">
											<input type="file" class="license"  accept="image/*,.pdf*" capture="user">
											<span class="file-error hidden"></span>
										</div>
										<div class="row">
											<div class="col-9 col-md-6 mt-3 "><input class="form-input-2" id="license-name" placeholder="License Name"></div>
											<div class="col-9 col-md-6 mt-3 "><input class="form-input-2" id="license-from" placeholder="License From (e.g ICAN)"></div>
											<div class="col-12 col-md-12 mt-3 "><input class="form-input-2" id="license-number" placeholder="National organization membership number"></div>
										</div>
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close-license-modal">Close</button>
								<button type="button" class="btn blue__btn"  id="add-license-btn">Add</button>
							</div>
						</div>
					</div>
				</div>

				<div class="row justify-content-center mt-2">
					<div class="container-1 col-10 col-md-9 overflow-y-auto">
						<table class="table license-table hidden">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">License Name</th>
									<th scope="col">License From</th>
									<th scope="col">License Number</th>
									<th scope="col"></th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
							<div class="text-center mt-5 pt-5 no-license-placeholder">
								<img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/no-files-icon.svg" alt="">
								<h2>Add Licenses</h2>
							</div>
					</div>
				</div>

				<div class="row justify-content-center mt-5 mb-5 mb-lg-2">
					<div class="col-10 col-md-9">
						<div class="row">
							<div class="col-auto">
								<input type="button" class="btn btn-lg ps-3 pt-2 pb-2 pe-3 rounded-3 button-3 previous-btn" value="Previous">
							</div>
							<div class="col-auto ms-auto">
								<input type="button" class="btn btn-lg ps-3 pt-2 pb-2 pe-3 rounded-3 blue__btn continue-btn" value="Continue">
							</div>
						</div>
					</div>
				</div>

			</div>



			<!--###########################  RESUME  ###########################-->
			<div id="4" class="form-section hidden"> 
			<span class=<?php echo( $resumeError? "error-message": "hidden") ?>><?php  _esc($resumeError) ?></span>

				<div class="container-fluid resume-section mt-5 ms-2">

					<div class="row ms-md-5">
						<div class="col-12 col-md-10 col-lg-8">
							<div class="row">
								<label class="text-dark fw-bold text mb-3">CV / Resume <span class="text text-danger">*</span></label>
								<br>
								<div class="col-auto">
									<input class="btn blue__btn ps-3 pt-2 pb-2 pe-3 rounded-3" type="button" id="add-resume-btn" value="Upload your CV / Resume">
								</div>
								<div class="hidden resume-upload-container">
									<input type="file" id="resume-upload" class="mt-3" accept=".docx*,.pdf*,.jpeg*,.jpg*" name="resume" capture="user">
										<span class="file-error hidden"></span>
									<p class="mt-1">JPG, PDF or DOCX. Max size of 2MB</p>
								</div>
							</div>
									
							<div class="row mt-4">	

								<div class="row">
										<div class="col-12">
												<input type="checkbox" class="form-check-input" id="c12" name="policy" value="Terms of Use">
												<label for="c12" class="form-check-label text-dark fw-semibold ms-2">I have read and agree to the Privacy Policy and Terms <br class="d-block d-md-none"> of Use</label>
										</div>
								</div>

								<div class="row mt-4">
										<div class="col">
												<a href="#	" class="blue__fg">Privacy Policy | Terms of Use</a>
										</div>
								</div>
							
								<div class="row mt-4">
									<div class="col-12">
											<input type="checkbox" class="form-check-input" id="c13" name="policy" value="Terms of Use">
											<label for="c13" class="form-check-label text-dark fw-semibold ms-2">I confirm that the information given in this form is true,<br class="d-block d-md-none"> complete and accurate</label>
									</div>
								</div>
							</div>
								<span class="checkbox-error mt-3 hidden" style="color: #E02B1D">You must check all boxes</span>
									
							<div class="row mb-5 ms-2 ms-lg-0 mt-5">
								<div class="col-auto mt-5"><input type="button" class="btn btn-lg ps-3 pt-2 pb-2 pe-3 rounded-3 button-3 previous-btn" value="Previous" ></div>
								<div class="col-auto mt-5 offset-2 offset-md-4"><input type="button" class="btn btn-lg ps-3 pt-2 pb-2 pe-3 rounded-3 blue__btn" id="register-btn" value="Register" ></div>
							</div>
							
						</div>
					</div>
				</div>

			</div>
		
		</form>


		
		
		
		<!-- JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<!--		Multiselect Dropdown		-->
		<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
		<script>
						new MultiSelectTag('languages')  // id
		</script>
		
		<!--	JS File			-->
		<script src = "<?php _esc(TEMPLATE_URL);?>/assets/js/become_form.js"></script>
		<!-- Bootstrap JS				-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
		<script src="<?php _esc(TEMPLATE_URL);?>/assets/js/yearpicker.js"></script>
		<script>
      $(document).ready(function() {
        $(".yearpicker").yearpicker({
          year: 2017,
          startYear: 1900,
          endYear: new Date().getFullYear()
        });
      });
    </script>
	</body>
</html>