<!doctype html>

<html>

<head>
    <title><?php bloginfo('title') ?></title>
    
    <meta charset="utf-8">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="<?php bloginfo('template_url') ?>/bower_components/webcomponentsjs/webcomponents.min.js"></script>
    
    <link rel="import" href="<?php bloginfo('template_url') ?>/bower_components/core-drawer-panel/core-drawer-panel.html">
    <link rel="import" href="<?php bloginfo('template_url') ?>/bower_components/core-header-panel/core-header-panel.html">
    <link rel="import" href="<?php bloginfo('template_url') ?>/bower_components/core-toolbar/core-toolbar.html">
    <link rel="import" href="<?php bloginfo('template_url') ?>/bower_components/core-icon-button/core-icon-button.html">
    <link rel="import" href="<?php bloginfo('template_url') ?>/bower_components/core-menu/core-menu.html">
    <link rel="import" href="<?php bloginfo('template_url') ?>/bower_components/core-item/core-item.html">
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<?php wp_head() ?>	
</head>
	   
<body>
    <core-drawer-panel id="navigationPanel" forceNarrow="true">
        <?php $menu_name = 'navigation-menu' ?>
        <?php if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])): ?>
            <core-header-panel drawer>
            <?php $menu = wp_get_nav_menu_object($locations[$menu_name]) ?>
                <core-toolbar id="navheader">
                    <span><?php echo $menu->name ?></span>
                </core-toolbar>
            <?php $menu_items = wp_get_nav_menu_items($menu->term_id) ?>
                <core-menu>
                <?php foreach ((array) $menu_items as $key => $menu_item): ?>
                    <core-item label="<?php echo $menu_item->title ?>">
                        <a href="<?php echo $menu_item->url ?>"></a>
                    </core-item>
                <?php endforeach ?>
                </core-menu>
            </core-header-panel>
        <?php endif; ?>
        <core-header-panel main>
            <core-toolbar id="mainheader">
                <core-icon-button id="navicon" icon="menu"></core-icon-button>
                <a href="<?php bloginfo('url') ?>" class="link-unstyled"><?php bloginfo('title') ?></a>
            </core-toolbar>
            <div id="content" class="container">