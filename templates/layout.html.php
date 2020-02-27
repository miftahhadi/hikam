<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-alpha.4
* @link https://github.com/tabler/tabler
* Copyright 2018-2019 The Tabler Authors
* Copyright 2018-2019 codecalm.net Paweł Kuna
* Licensed under MIT (https://tabler.io/license)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Blank page - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <meta name="msapplication-TileColor" content="#206bc4"/>
    <meta name="theme-color" content="#206bc4"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="robots" content="noindex,nofollow,noarchive"/>
    <link rel="icon" href="../favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
    <!-- Libs CSS -->
    <link href="./dist/libs/flatpickr/dist/flatpickr.min.css?1582373134" rel="stylesheet"/>
    <!-- Tabler Core -->
    <link href="../dist/css/tabler.min.css?1582373134" rel="stylesheet"/>
    <!-- Tabler Plugins -->
    <link href="../dist/css/tabler-buttons.min.css?1582373134" rel="stylesheet"/>
    <style>
      body {
      	display: none;
      }
    </style>
  </head>
  <body class="antialiased">
    <div class="page">
      <nav class="navbar navbar-expand-lg navbar-light navbar-primary" id="navbar-primary">
        <div class="container">
          <a href="." class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal">
            <img src="./static/logo.svg" alt="Tabler" class="navbar-brand-logo navbar-brand-logo-large">
            <img src="./static/logo-small.svg" alt="Tabler" class="navbar-brand-logo navbar-brand-logo-small">
          </a>
          <div class="navbar-collapse collapse">
            <h6 class="navbar-heading">Navigation</h6>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="./index.html" >
                  <span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  </span>
                  <span class="nav-link-title">Home</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./form-elements.html" >
                  <span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                  </span>
                  <span class="nav-link-title">Form elements</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link dropdown-toggle" href="#navbar-base" data-toggle="dropdown" role="button" aria-expanded="true" >
                  <span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                  </span>
                  <span class="nav-link-title">Base</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#navbar-extra" data-toggle="dropdown" role="button" aria-expanded="false" >
                  <span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                  </span>
                  <span class="nav-link-title">Extra</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-arrow">
                  <li >
                    <a class="dropdown-item" href="./invoice.html" >
                      Invoice
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./blog.html" >
                      Blog cards
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./snippets.html" >
                      Snippets
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./search-results.html" >
                      Search results
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./pricing.html" >
                      Pricing cards
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#navbar-docs" data-toggle="dropdown" role="button" aria-expanded="false" >
                  <span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  </span>
                  <span class="nav-link-title">Docs</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-arrow dropdown-menu-columns  dropdown-menu-columns-3">
                  <li >
                    <a class="dropdown-item" href="./docs/index.html" >
                      Introduction
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/alerts.html" >
                      Alerts
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/autosize.html" >
                      Autosize
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/avatars.html" >
                      Avatars
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/badges.html" >
                      Badges
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/breadcrumb.html" >
                      Breadcrumb
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/buttons.html" >
                      Buttons
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/cards.html" >
                      Cards
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/carousel.html" >
                      Carousel
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/colors.html" >
                      Colors
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/countup.html" >
                      Countup
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/cursors.html" >
                      Cursors
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/charts.html" >
                      Charts
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/dropdowns.html" >
                      Dropdowns
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/divider.html" >
                      Divider
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/empty.html" >
                      Empty states
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/flags.html" >
                      Flags
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/form-elements.html" >
                      Form elements
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/form-helpers.html" >
                      Form helpers
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/input-mask.html" >
                      Form input mask
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/modals.html" >
                      Modals
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/progress.html" >
                      Progress
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/payments.html" >
                      Payments
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/range-slider.html" >
                      Range slider
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/ribbons.html" >
                      Ribbons
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/spinners.html" >
                      Spinners
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/steps.html" >
                      Steps
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/tables.html" >
                      Tables
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/tabs.html" >
                      Tabs
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/timelines.html" >
                      Timelines
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/toasts.html" >
                      Toasts
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/tooltips.html" >
                      Tooltips
                    </a>
                  </li>
                  <li >
                    <a class="dropdown-item" href="./docs/typography.html" >
                      Typography
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item d-none-navbar-vertical">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-customize">
                  <span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
                  </span>
                  <span class="nav-link-title">Customize</span>
                </a>
              </li>
            </ul>
            <h6 class="navbar-heading mt-4">Tools</h6>
            <div class="navbar-side">
              <div class="d-none d-xl-block ml-auto d-none-navbar-vertical-narrow">
                <form action="." method="get">
                  <div class="input-icon">
                    <span class="input-icon-addon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Search…">
                  </div>
                </form>
              </div>
              <a href="#" class="btn btn-primary d-none-navbar-horizontal d-none-navbar-vertical-narrow btn-block" data-toggle="modal" data-target="#modal-customize">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
                Customize
              </a>
              <a href="#" class="btn btn-primary d-none-navbar-horizontal d-none-navbar-vertical-wide btn-block btn-icon" data-toggle="modal" data-target="#modal-customize" aria-label="Button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
              </a>
            </div>
          </div>
        </div>
      </nav>
      <nav class="navbar navbar-light navbar-secondary navbar-expand" id="navbar-secondary">
        <div class="container">
          <a href="." class="navbar-brand navbar-brand-autodark d-none-navbar-vertical">
            <img src="./static/logo.svg" alt="Tabler" class="navbar-brand-logo navbar-brand-logo-large">
            <img src="./static/logo-small.svg" alt="Tabler" class="navbar-brand-logo navbar-brand-logo-small">
          </a>
          <form class="form-inline w-50 mr-4 d-none d-md-flex">
            <div class="input-icon w-100">
              <span class="input-icon-addon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
              </span>
              <input type="text" class="form-control form-control-flush w-100" placeholder="Search…">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link px-0" data-toggle="dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                <a class="dropdown-item" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon dropdown-item-icon"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                  Action
                </a>
                <a class="dropdown-item" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon dropdown-item-icon"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                  Another action
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon dropdown-item-icon"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                  Separated link</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown">
                <span class="flag flag-country-us mr-1"></span>
                <span class="d-none d-lg-inline">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" style="">
                <a href="#" class="dropdown-item"><span class="flag flag-country-de mr-1"></span>
                  German</a>
                <a href="#" class="dropdown-item"><span class="flag flag-country-pl mr-1"></span>
                  Polish</a>
                <a href="#" class="dropdown-item"><span class="flag flag-country-jp mr-1"></span>
                  Japan</a>
                <a href="#" class="dropdown-item"><span class="flag flag-country-ru mr-1"></span>
                  Russian</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow dropdown-menu-card" style="max-width: 20rem;">
                <div class="card">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown pl-2">
              <a href="#" class="nav-link d-flex lh-1 text-inherit p-0 text-left" data-toggle="dropdown">
                <span class="avatar" style="background-image: url(./static/avatars/000m.jpg)"></span>
                <div class="d-none d-lg-block pl-2">
                  <div>Paweł Kuna</div>
                  <div class="mt-1 small text-muted">Founder</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                <a class="dropdown-item" href="#">
                  Action
                </a>
                <a class="dropdown-item" href="#">
                  Another action
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon dropdown-item-icon"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                  Separated link</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <div class="content">
        <div class="container d-flex flex-column justify-content-center">
          <div class="empty">
            <div class="empty-icon">
              <img src="../dist/img/undraw_printing_invoices_5r4r.svg" class="h-8 mb-4" alt="">
            </div>
            <p class="empty-title h3">No results found</p>
            <p class="empty-subtitle text-muted">
              Try adjusting your search or filter to find what you're looking for.
            </p>
            <div class="empty-action">
              <a href="./." class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                Add your first client
              </a>
            </div>
          </div>
        </div>
        <footer class="footer footer-transparent">
          <div class="container">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ml-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="./docs/index.html" class="link-secondary">Documentation</a></li>
                  <li class="list-inline-item"><a href="./faq.html" class="link-secondary">FAQ</a></li>
                  <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary">Source code</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                Copyright © 2020
                <a href="." class="link-secondary">Tabler</a>.
                All rights reserved.
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <div class="modal modal-blur fade" id="modal-customize" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Customize Tabler</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-muted">Set preferences that will be saved for your live preview.</p>
            <div class="mb-3">
              <label class="form-label">Color scheme</label>
              <div class="form-hint">Light or dark presentation.</div>
              <div class="btn-group w-100">
                <button class="btn btn-secondary" data-theme-toggle="theme:light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                  Light</button>
                <button class="btn btn-secondary" data-theme-toggle="theme:dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                  Dark</button>
              </div>
            </div>
            <div class="mb-4 text-muted">
              You can use the <code>.theme-dark-auto</code> class to automatically adjust the color version to the system settings.
            </div>
            <div class="mb-3">
              <label class="form-label">Navigation position</label>
              <div class="form-hint">Choose where the main navigation in your project should be located.</div>
              <div class="btn-group w-100">
                <button class="btn btn-secondary" data-theme-toggle="navbar-position:horizontal">Topnav</button>
                <button class="btn btn-secondary" data-theme-toggle="navbar-position:vertical">Sidenav</button>
                <button class="btn btn-secondary" data-theme-toggle="navbar-position:both">Both</button>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Sidebar size</label>
              <div class="form-hint">Standard sidebar width or narrow version with icons only.</div>
              <div class="btn-group w-100">
                <button class="btn btn-secondary" data-theme-toggle="navbar-size:wide">Wide</button>
                <button class="btn btn-secondary" data-theme-toggle="navbar-size:narrow">Narrow</button>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Sidebar position</label>
              <div class="form-hint">Choose whether the sidebar should appear on the left or on the right.</div>
              <div class="btn-group w-100">
                <button class="btn btn-secondary" data-theme-toggle="navbar-side:left">Left</button>
                <button class="btn btn-secondary" data-theme-toggle="navbar-side:right">Right</button>
              </div>
            </div>
            <div>
              <label class="form-label">Navigation color</label>
              <div class="form-hint">Light or dark version of the sidebar </div>
              <div class="btn-group w-100">
                <button class="btn btn-secondary" data-theme-toggle="navbar-color:light">Light</button>
                <button class="btn btn-secondary" data-theme-toggle="navbar-color:dark">Dark</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <script src="../dist/js/bootstrap.bundle.min.js?1582373134"></script>
    <script src="../dist/js/jquery.slim.min.js?1582373134"></script>
    <!-- Tabler Core -->
    <script src="../dist/js/tabler.min.js?1582373134"></script>
    <script>
      (function() {
      	var navbarPrimary = document.getElementById('navbar-primary'),
      		navbarSecondary = document.getElementById('navbar-secondary');
      	var defaults = {
      		theme: 'light',
      		'navbar-position': 'horizontal',
      		'navbar-size': 'wide',
      		'navbar-side': 'left',
      		'navbar-color': 'light',
      	};
      	var eventsClean = {
      		'theme': function () {
      			document.body.classList.remove('theme-dark');
      		},
      		'navbar-position': function () {
      			navbarPrimary.classList.remove('navbar-vertical');
      			navbarSecondary.classList.remove('d-none');
      		},
      		'navbar-size': function () {
      			navbarPrimary.classList.remove('navbar-vertical-narrow');
      		},
      		'navbar-side': function () {
      			navbarPrimary.classList.remove('navbar-right');
      		},
      		'navbar-color': function () {
      			navbarPrimary.classList.remove('navbar-dark');
      			navbarPrimary.classList.add('navbar-light');
      		},
      	};
      	var events = {
      		'theme:light': function () {
      		},
      		'theme:dark': function () {
      			document.body.classList.add('theme-dark');
      		},
      		'navbar-position:vertical': function () {
      			navbarPrimary.classList.add('navbar-vertical');
      			navbarSecondary.classList.add('d-none');
      		},
      		'navbar-position:horizontal': function () {
      		},
      		'navbar-position:both': function () {
      			navbarPrimary.classList.add('navbar-vertical');
      		},
      		'navbar-size:wide': function () {
      		},
      		'navbar-size:narrow': function () {
      			navbarPrimary.classList.add('navbar-vertical-narrow');
      		},
      		'navbar-side:left': function () {
      		},
      		'navbar-side:right': function () {
      			navbarPrimary.classList.add('navbar-right');
      		},
      		'navbar-color:light': function () {
      		},
      		'navbar-color:dark': function () {
      			navbarPrimary.classList.add('navbar-dark');
      			navbarPrimary.classList.remove('navbar-light');
      		},
      	};
      	var updateThemeConfig = function (name) {
      		var key, value;
      		if (name) {
      			[key, value] = name.split(':');
      			setConfig(key, value);
      		}
      		applyConfig();
      	};
      	var disableTransitions = function () {
      		document.body.classList.add('no-transitions');
      		setTimeout(function () {
      			document.body.classList.remove('no-transitions');
      		}, 300);
      	};
      	var getConfig = function () {
      		var config = {};
      		for (var key in defaults) {
      			config[key] = localStorage.getItem('tabler-' + key) || defaults[key];
      		}
      		return config;
      	};
      	var setConfig = function (key, value) {
      		localStorage.setItem('tabler-' + key, value);
      	};
      	var applyConfig = function () {
      		disableTransitions();
      		var config = getConfig();
      		for (var key in config) {
      			var value = config[key];
      			eventsClean[key] && eventsClean[key].call();
      			events[key + ':' + value] && events[key + ':' + value].call();
      			([].slice.call(document.querySelectorAll('[data-theme-toggle^="' + key + '"]'))).map(function (activeTrigger) {
      				activeTrigger.classList.remove('active')
      			});
      			document.querySelector('[data-theme-toggle="' + key + ':' + value + '"]').classList.add('active');
      		}
      	};
      	applyConfig();
      	for (var name in events) {
      		var event = events[name];
      		(function (event, name) {
      			document.querySelector('[data-theme-toggle="' + name + '"]').addEventListener("click", function (e) {
      				updateThemeConfig(name);
      				event.call();
      				e.preventDefault();
      				return false;
      			});
      		})(event, name);
      	}
      })();
    </script>
    <script>
      document.body.style.display = "block"
    </script>
  </body>
</html>
