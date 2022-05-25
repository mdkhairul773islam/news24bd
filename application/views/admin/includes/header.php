<?php $logo = json_decode(siteMeta("logo"),true); ?>
<!DOCTYPE html>
<html lang="en" ng-app="MainApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>অ্যাডমিন প্যানেল  | <?php echo filter($site_name). " | ". filter($meta_title); ?></title>

    <link href="<?php echo site_url($logo["faveicon"]);?>" rel="icon">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo site_url('private/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Bootstrap Date Picker -->
    <link href="<?php echo site_url('private/plugins/bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet">

    <!-- Bootstrap file upload CSS -->
    <link href="<?php echo site_url('private/plugins/bootstrap-fileinput-master/css/fileinput.min.css') ;?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo site_url('private/css/simple-sidebar.css'); ?>" rel="stylesheet">
    <!-- Awesome Font CSS -->
    <link href="<?php echo site_url('private/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="<?php echo site_url('private/css/profile.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('private/css/form.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('private/css/top-nav.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('private/css/printstyle.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo site_url('public/news/css/jquery.tagit.css')?>">
    <link rel="stylesheet" href="<?php echo site_url('public/news/css/tagit.ui-zendesk.css')?>">
    <link href="<?php echo site_url('private/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('private/plugins/cropper/cropper.css');?>" rel="stylesheet" >
    <link href="<?php echo base_url('private/plugins/drag_upload/uploadfile.css');?>" rel="stylesheet" >

    <!-- Responsive CSS -->
    <link href="<?php echo site_url('private/css/responsive.css'); ?>" rel="stylesheet">

    <!-- Angular -->
    <script type="text/javaScript" src="<?php echo site_url('private/js/angular.js'); ?>"></script>
    <script type="text/javaScript" src="<?php echo site_url('private/js/angular-sanitize.min.js'); ?>"></script>
    <script type="text/javaScript" src="<?php echo site_url('private/js/dirPagination.js'); ?>"></script>

    <!-- jQuery -->
    <script type="text/javaScript" src="<?php echo site_url('private/js/jquery.js'); ?>"></script>
    <script type="text/javaScript" src="<?php echo site_url('private/js/jquery-ui.min.js'); ?>"></script>


    <!-- includ moment for bootstrap calander -->
    <script type="text/javascript" src="<?php echo site_url('private/js/Moment.js'); ?>"></script>
    <script type="text/javaScript" src="<?php echo site_url('private/plugins/bootstrap-datetimepicker-master/build/js/bootstrap-datetimepicker.min.js') ;?>"></script>

    <!-- texteditor Core Javascript -->
    <script src="<?php echo site_url('private/plugins/tinymce/js/tinymce/tinymce.min.js')?>"></script>
</head>

<body <?php echo $active; ?>>

    <!-- pre><?php print_r($this->data); ?></pre -->


    <div class="preloader">
        <div class="loader-wrap">
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
            <div class="loader-box"></div>
        </div>
    </div>

    <div id="wrapper">
