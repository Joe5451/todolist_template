<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="utf-8" lang="zh-TW" />
    <meta http-equiv="Content-Language" content="zh-tw" />
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="distribution" content="Taiwan">
    <meta name="robots" content="none">

	<title>Todolist Template</title>

	<base href="<?php //echo base_url(); ?>">

    <link rel="stylesheet" href="css/icons.css" />
    <link rel="stylesheet" href="css/circular_progress_bar.css" />
    <link rel="stylesheet" href="css/farbtastic.css" />
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>" />

    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/jquery.bpopup.min.js"></script>
    <script src="js/farbtastic.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<header class="main_header px-5 py-3">
    <nav class="main_nav">
        <a href="index.php" class="main_nav_link">
            <i class="fas fa-list"></i>
            首頁
        </a>
        <a href="tag_list.php" class="main_nav_link">
            <i class="fas fa-tags"></i>
            標籤管理
        </a>
        <a href="trash.php" class="main_nav_link">
            <i class="fas fa-trash-alt"></i>
            垃圾桶
        </a>
        <a href="" class="main_nav_link">
            <i class="fas fa-power-off"></i>
            登出
        </a>
    </nav>
</header>

<header id="mobile_menu" class="mobile_header px-5 py-3">
    <nav class="mobile_nav">
        <a href="index.php" class="mobile_nav_link">
            <i class="fas fa-list"></i>
            首頁
        </a>
        <a href="tag_list.php" class="mobile_nav_link">
            <i class="fas fa-tags"></i>
            標籤管理
        </a>
        <a href="trash.php" class="mobile_nav_link">
            <i class="fas fa-trash-alt"></i>
            垃圾桶
        </a>
        <a href="" class="mobile_nav_link">
            <i class="fas fa-power-off"></i>
            登出
        </a>
    </nav>
</header>

<div class="menu_btn">
    <div class="menu_btn_bar menu_btn_bar1"></div>
    <div class="menu_btn_bar menu_btn_bar2"></div>
    <div class="menu_btn_bar menu_btn_bar3"></div>
</div>

<script>
    $('.menu_btn').click(function() {
        $(this).toggleClass('active');
        $('#mobile_menu').stop().toggleClass('show');
    });
</script>