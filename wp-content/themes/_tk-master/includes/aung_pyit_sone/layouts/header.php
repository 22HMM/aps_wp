<?php include_once "config.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
    <title>Aung Pyit Sone</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="position-relative">

    <div class="spinner-overlay">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- header -->
    <header class="main-header sticky-top">
        <!-- noti bar -->
        <section class="header-noti-bar py-1">
            <div class="container">
                <div class="row">
                    <!-- left noti -->
                    <div class="col-lg-4 col-md-3 col-12">
                        <!-- <img src="images/chat.svg" alt="mailbox"> -->
                        <!-- chat svg -->
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_116_78)">
                                <path
                                    d="M6.18153 4.54095C2.78915 4.54095 3.08524e-05 6.87378 3.08524e-05 9.74133C3.08524e-05 10.8876 0.44464 12.0525 1.26 12.9554L0.108605 14.2712C-0.00468595 14.4008 -0.0321664 14.5849 0.039523 14.7419C0.110773 14.899 0.266984 14.9999 0.439484 14.9999H6.62098C9.12572 14.9999 12.363 12.843 12.363 9.74133C12.363 6.87378 9.5739 4.54095 6.18153 4.54095ZM3.51557 10.5468C3.03106 10.5468 2.63669 10.1524 2.63669 9.66794C2.63669 9.18342 3.03109 8.78906 3.51557 8.78906C4.00005 8.78906 4.39444 9.18345 4.39444 9.66794C4.39447 10.1524 4.00008 10.5468 3.51557 10.5468ZM6.18153 10.5468C5.69701 10.5468 5.30265 10.1524 5.30265 9.66794C5.30265 9.18342 5.69704 8.78906 6.18153 8.78906C6.66601 8.78906 7.0604 9.18345 7.0604 9.66794C7.0604 10.1524 6.66604 10.5468 6.18153 10.5468ZM8.84748 10.5468C8.36297 10.5468 7.96861 10.1524 7.96861 9.66794C7.96861 9.18342 8.363 8.78906 8.84748 8.78906C9.33196 8.78906 9.72636 9.18345 9.72636 9.66794C9.72636 10.1524 9.33199 10.5468 8.84748 10.5468Z"
                                    fill="white" />
                                <path
                                    d="M14.8937 8.94223L13.859 7.73506C14.5976 6.90168 14.9997 5.88543 14.9997 4.83405C14.9997 2.16865 12.4369 0.000183105 9.28694 0.000183105C6.43855 0.000183105 4.0186 1.77525 3.59131 4.08563C4.38607 3.81557 5.27737 3.66206 6.18156 3.66206C10.0298 3.66206 13.1915 6.3499 13.2377 9.66792H14.5603C14.9356 9.66795 15.1372 9.22592 14.8937 8.94223Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_116_78">
                                    <rect width="15" height="15" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="ms-3">Hello guest! Welcome to Aung Pyit Sone</span>
                    </div>
                    <!-- right noti -->
                    <div class="col-lg-8 col-md-9 col-12 align-items-center">
                        <!-- phone -->
                        <div class="d-flex jusitify-content-center align-items-center">
                            <!-- <img src="images/phone-flip.svg" alt="mailbox"> -->
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_116_75)">
                                    <path
                                        d="M15 3.89999C15 8.67499 8.66875 15 3.89999 15C2.85624 15 1.88124 14.6062 1.16249 13.8875L0.537495 13.1687C-0.187505 12.4437 -0.187505 11.2187 0.568745 10.4625C0.587495 10.4437 2.09374 9.28749 2.09374 9.28749C2.84374 8.57499 4.02499 8.57499 4.76874 9.28749L5.68124 10.0187C7.68124 9.16874 9.09999 7.74374 10.0125 5.67499L9.28749 4.76249C8.56874 4.01874 8.56874 2.83124 9.28749 2.08749C9.28749 2.08749 10.4437 0.581238 10.4625 0.562488C11.2187 -0.193762 12.4437 -0.193762 13.2 0.562488L13.8562 1.13124C14.6062 1.87499 15 2.84999 15 3.89374V3.89999Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_116_75">
                                        <rect width="15" height="15" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <a href="tel:09778721813" class="ms-3 text-light text-decoration-none">09-778 721813</a>
                        </div>
                        <!-- mail -->
                        <div class="d-flex jusitify-content-center align-items-center ms-5">
                            <!-- <img src="images/mailbox.svg" alt="mailbox"> -->
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_116_85)">
                                    <path
                                        d="M6.25 5C6.25 3.27688 4.84812 1.875 3.125 1.875C1.40188 1.875 0 3.27688 0 5V13.125H6.25V5ZM4.375 6.875H1.875V5.625H4.375V6.875ZM11.25 1.875H6.18375C6.99563 2.66938 7.5 3.77688 7.5 5V13.125H15V5.625C15 3.55687 13.3181 1.875 11.25 1.875ZM13.125 8.125H11.875V6.875H9.375V5.625H13.125V8.125Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_116_85">
                                        <rect width="15" height="15" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <a href="mailto:makhinsweoo@gmail.com" class="ms-3 text-light text-decoration-none">makhinsweoo@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- nav bar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="/" class="navbar-brand">
                    <img src="images/logo.png" alt="logo">
                </a>
                <ul class="navbar-nav">
                    <div>
                        <button class="btn close-toggle btn-outline-light">
                            <svg class="cross-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="activities">Activities</a>
                    </li>
                    <li class="btn-contact-holder">
                        <a href="contact" class="btn-contact my-1 mt-2">Contact Us</a>
                    </li>
                </ul>
                <button class="btn toggle-btn btn-outline-dark">
                    <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </nav>
    </header>