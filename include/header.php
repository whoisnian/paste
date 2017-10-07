<?php
	echo '<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta name="description" content="Paste your code freely.">
    <title>'.$TITLE.'</title>

    <link rel="shortcut icon" href="./image/favicon.png">
    <link rel="stylesheet" href="./css/material.min.css">
	<link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/styles.css">
	<link rel="stylesheet" type="text/css" href="./css/desert.css">
      '.$OTHERSTYLE.'
  </head>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base" onload="PR.prettyPrint()">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
		<div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark mdl-layout__header-row">
          <span class="mdl-layout-title">Paste</span>
		    <div class="mdl-layout-spacer"></div>
		      '.$MENU.'
		    </div>
      </header>
      <main style="width:100%" class="mdl-layout__content mdl-grid mdl-grid--no-spacing">';
?>
