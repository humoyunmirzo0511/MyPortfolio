<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">

    <title>Default Dashboard | AppStack - Admin &amp; Dashboard Template</title>

    <link rel="canonical" href="{{asset('admin/dashboard-default.html')}}"/>
    <link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Choose your prefered color scheme -->
    <!-- <link href="css/light.css" rel="stylesheet"> -->
    <!-- <link href="css/dark.css" rel="stylesheet"> -->

    <!-- BEGIN SETTINGS -->
    <!-- Remove this after purchasing -->
    <link class="js-stylesheet" href="{{asset('admin/css/dark.css')}}" rel="stylesheet">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script>
</head>
<!--
  HOW TO USE:
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-behavior: sticky (default), fixed, compact
-->

<body data-theme="dark" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
<div class="wrapper">
    <nav id="sidebar" class="sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="/admins">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                     y="0px"
                     width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                     xml:space="preserve">
            <path d="M19.4,4.1l-9-4C10.1,0,9.9,0,9.6,0.1l-9,4C0.2,4.2,0,4.6,0,5s0.2,0.8,0.6,0.9l9,4C9.7,10,9.9,10,10,10s0.3,0,0.4-0.1l9-4
              C19.8,5.8,20,5.4,20,5S19.8,4.2,19.4,4.1z"/>
                    <path d="M10,15c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,15,10.1,15,10,15z"/>
                    <path d="M10,20c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,20,10.1,20,10,20z"/>
          </svg>
                <span class="align-middle me-3">AppStack</span>
            </a>
            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Pages
                </li>

                <li class="sidebar-item">
                    <a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Resume</span>
                    </a>
                    <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="/admin/skills">Skills</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="/admin/knowledges">Knowledges</a></li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a data-bs-target="#pages2" data-bs-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Works</span>
                    </a>
                    <ul id="pages2" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="/admin/portfolio">Portfolio</a></li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a data-bs-target="#pages3" data-bs-toggle="collapse" class="sidebar-link collapsed">
                        <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Blog</span>
                    </a>
                    <ul id="pages3" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                        <li class="sidebar-item"><a class="sidebar-link" href="pages-profile.html">Profile</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="pages-settings.html">Settings</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>


    <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg">
            <a class="sidebar-toggle">
                <i class="hamburger align-self-center"></i>
            </a>

            <form class="d-none d-sm-inline-block">
                <div class="input-group input-group-navbar">
                    <input type="text" class="form-control" placeholder="Search projects…" aria-label="Search">
                    <button class="btn" type="button">
                        <i class="align-middle" data-feather="search"></i>
                    </button>
                </div>
            </form>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav navbar-align">
                    <li class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle d-inline-block d-sm-none"
                           href="/" data-bs-toggle="dropdown">
                            <i class="align-middle" data-feather="settings"></i>
                        </a>

                        <a class="nav-link dropdown-toggle d-none d-sm-inline-block"
                           href="/" data-bs-toggle="dropdown">
                            <img src="{{asset('admin/img/avatars/avatar.jpg')}}"
                                 class="avatar img-fluid rounded-circle me-1"
                                 alt="Chris Wood"/> <span class="text-dark">Adminstrator</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                                                                  data-feather="user"></i> Profile</a>
                            <a class="dropdown-item" href="/"><i
                                    class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="pages-settings.html">Settings & Privacy</a>
                            <a class="dropdown-item" href="/">Help</a>
                            <form style="display: inline" method="POST" action="{{ route('logout') }}">
                                <a class="dropdown-item" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    @csrf
                                    Log Out
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="content">
