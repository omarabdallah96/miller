@extends('layouts.app')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://unpkg.com/treeflex/dist/css/treeflex.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .custom_info {
        background-color: white;
        /* border: 1px solid; */
        margin-bottom: 10px;
        width: 100%;
        height: 100px;
        padding-top: 20px;
        width: 25% !important;
        margin-left: 20px;
        margin-right: 20px;
        border-radius: 10px;
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        content: "\f007";

        box-shadow: 0 2px 1px rgb(0 0 0 / 9%), 0 4px 2px rgb(0 0 0 / 9%), 0 8px 4px rgb(0 0 0 / 9%), 0 16px 8px rgb(0 0 0 / 9%), 0 32px 16px rgb(0 0 0 / 9%);

    }

    .custom_info_parent {
        display: flex;
        flex-direction: row;
        place-content: center;

    }

    .custom_info:hover {
        /* position: absolute; */

        background-color: #ed4f1c;
        transition: ease-in-out 0.5s;
        color: white;

    }

    body {
        background-repeat: no-repeat;
        background-size: cover;

        /* background-image: url('https://img.freepik.com/free-vector/cpu-blue-cyber-circuit-future-technology-concept-background_42077-1909.jpg'); */
    }

    /* make the nodes round and change their background-color */
    .tf-ancestor-tree {
        position: relative;
    }

    .tf-ancestor-tree>ul {
        transform: rotateX(180deg);
    }

    .tf-ancestor-tree li ul {
        margin-bottom: 1em;
    }

    .node-text {
        display: inline-block;
        transform: rotateX(180deg);
    }

    .tf-nc {
        background-color: #ed4f1c;

        border-radius: 80px;
        color: white;
        box-shadow: 0px 10px 5px rgb(0 0 0 / 9%), 0px -10px 5px rgb(0 0 0 / 9%);

    }


    .parent {
        /* t-webkit-transform: rotate(180deg); */
        -moz-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        transform: rotate(180deg);

    }

    .tf-tree .tf-nc,
    .tf-tree .tf-node-content {
        border: none;
    }

    .ic_power {
        transform: rotate(90deg);
        margin-top: -20px;
        margin-bottom: -30px;

    }

    .footer {
        position: re;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #ed4f1c;
        color: white;
        text-align: center;

        box-shadow: 0px 10px 5px rgb(0 0 0 / 9%), 0px -10px 5px rgb(0 0 0 / 9%);
    }

    .topnav {
        transition: ease-in-out 1s;
        overflow: hidden;
        margin-top: -10px;
        background-color:
            #ed4f1c;
        box-shadow: 0 2px 1px rgb(0 0 0 / 9%), 0 4px 2px rgb(0 0 0 / 9%), 0 8px 4px rgb(0 0 0 / 9%), 0 16px 8px rgb(0 0 0 / 9%), 0 32px 16px rgb(0 0 0 / 9%);

    }

    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color:
            #ed4f1c;
        color: black;
    }

    .topnav a.active {
        background-color:
            #ed4f1c;
        color: white;
    }

    .topnav .icon {
        display: none;
    }

    @media screen and (max-width: 600px) {
        .topnav a:not(:first-child) {
            display: none;
        }

        .topnav a.icon {
            float: right;
            display: block;
        }

    }

    @media screen and (max-width: 600px) {
        .topnav.responsive {
            position: relative;
        }

        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }

        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }
    }

    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800|Poppins&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    .cards {
        max-width: 1100px;
        margin: 0 auto;
        text-align: center;
        padding: 30px;
    }

    .cards h2.header {
        font-size: 40px;
        margin: 0 0 30px 0;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .services {
        display: flex;
        align-items: center;
    }

    .content {
        display: flex;
        flex-wrap: wrap;
        flex: 1;
        margin: 20px;

        padding: 20px;
        /* border: 2px solid black; */
        border-radius: 4px;
        transition: all .3s ease;
    }

    .content .fab {
        font-size: 70px;
        margin: 16px 0;
    }

    .content>* {
        flex: 1 1 100%;
    }

    .content:hover {
        color: white;

    }

    .content:hover a {
        border-color: white;
        background: white;

    }

    .content-1:hover {
        border-color: #1DA1F2;
        background: #1DA1F2;
    }

    .content-1:hover a {
        color: #1DA1F2;
    }

    .content-2:hover {
        border-color: #E1306C;
        background: #E1306C;
    }

    .content-2:hover a {
        color: #E1306C;
    }

    .content-3:hover {
        border-color: #ff0000;
        background: #ff0000;
    }

    .content-3:hover a {
        color: #ff0000;
    }

    .content h2 {
        font-size: 30px;
        margin: 16px 0;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .content p {
        font-size: 17px;
        font-family: 'Poppins', sans-serif;
    }

    .content a {
        margin: 22px 0;
        background: black;
        color: white;
        text-decoration: none;
        text-transform: uppercase;
        border: 1px solid black;
        padding: 15px 0;
        border-radius: 25px;
        transition: .3s ease;
    }


    @media (max-width: 900px) {
        .services {
            display: flex;
            flex-direction: column;
        }

        .custom_info_parent {
            display: block;
        }

        .custom_info {
            width: 89% !important;
        }
    }

    #slide1 {
        background-repeat: no-repeat;
        background-size: cover;
    }

    .text-custom {
        width: auto;
        background-color: #1a71ff !important;
        border: none !important;
        color: white !important;
    }

    .service-container {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .service-container .icon {
        margin-top: 5%;
        font-size: 38px;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .service-container .number-icon .icon-2 {
        height: 70px;
        width: 70px;
        line-height: 80px;
        border-radius: 64% 36% 55% 45% / 76% 72% 28% 24% !important;
        border-color: #f89d36 !important;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .service-container .number-icon .icon-2 i {
        font-size: 30px;
    }

    .service-container .number-icon .number {
        position: absolute;
        top: 0;
        right: 70px;
        left: 0;
        height: 35px;
        width: 35px;
        margin: 0 auto;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .service-container .number-icon .number span {
        line-height: 30px;
    }

    .service-container .content .number {
        font-size: 40px;
        color: #dee2e6;
    }

    .service-container .content .title {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .service-container.hover-bg {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .service-container.hover-bg .smooth-icon {
        position: absolute;
        bottom: -40px;
        right: -20px;
        font-size: 60px;
        color: #f8f9fa;
        -webkit-transition: all 0.8s ease;
        transition: all 0.8s ease;
    }

    .service-container.hover-bg:hover {
        background-color: #f89d36;
    }

    .service-container.hover-bg:hover .content .title {
        color: #ffffff !important;
    }

    .service-container.hover-bg:hover .content .serv-pera {
        color: #fafafb !important;
    }

    .service-container.hover-bg:hover .smooth-icon {
        font-size: 100px;
        opacity: 0.2;
        bottom: -20px;
        right: 10px;
    }

    .service-container:hover {
        background-color: #ffffff;
        -webkit-box-shadow: 0 10px 25px rgba(47, 60, 78, 0.15) !important;
        box-shadow: 0 10px 25px rgba(47, 60, 78, 0.15) !important;
    }

    .service-container:hover .icon {
        color: #f89d36;
        -webkit-animation: mover 1s infinite alternate;
        animation: mover 1s infinite alternate;
    }

    .service-container:hover .number-icon .icon-2 {
        background-color: #f89d36;
        border-radius: 50% !important;
    }

    .service-container:hover .number-icon .icon-2 i {
        color: #ffffff !important;
    }

    .service-container:hover .number-icon .number {
        color: #ffffff;
        background: #f89d36 !important;
        border-color: #ffffff !important;
    }

    .service-container:hover .content .title {
        color: #f89d36;
    }

    .service-container a:hover,
    .service-container a .title:hover {
        color: #f89d36 !important;
    }

    @-webkit-keyframes mover {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        100% {
            -webkit-transform: translateY(-15px);
            transform: translateY(-15px);
        }
    }

    @keyframes mover {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        100% {
            -webkit-transform: translateY(-15px);
            transform: translateY(-15px);
        }
    }

    .service-wrapper {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .service-wrapper .icon {
        width: 60px;
        height: 60px;
        line-height: 45px;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .service-wrapper .content .title {
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
        font-weight: 500;
    }

    .service-wrapper .big-icon {
        position: absolute;
        right: 0;
        bottom: 0;
        opacity: 0.05;
        -webkit-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .service-wrapper:hover {
        -webkit-box-shadow: 0 10px 25px rgba(47, 60, 78, 0.15) !important;
        box-shadow: 0 10px 25px rgba(47, 60, 78, 0.15) !important;
        background: #ffffff;
        -webkit-transform: translateY(-8px);
        transform: translateY(-8px);
        border-color: transparent !important;
    }

    .service-wrapper:hover .icon {
        background: #0062ff !important;
        color: #ffffff !important;
    }

    .service-wrapper:hover .big-icon {
        z-index: -1;
        opacity: 0.1;
        font-size: 160px;
    }

    .text-custom {
        color: #0062ff !important;
    }

    .uim-svg {
        display: inline-block;
        height: 1em;
        vertical-align: -0.125em;
        font-size: inherit;
        fill: var(--uim-color, currentColor);
    }

    card::after {
        display: block;
        position: absolute;
        bottom: -10px;
        left: 20px;
        width: calc(100% - 40px);
        height: 35px;
        background-color: #fff;
        -webkit-box-shadow: 0 19px 28px 5px rgba(64, 64, 64, 0.09);
        box-shadow: 0 19px 28px 5px rgba(64, 64, 64, 0.09);
        content: '';
        z-index: -1;
    }

    a.card {
        text-decoration: none;
    }

    .card {
        position: relative;
        border: 0;
        border-radius: 0;
        background-color: #fff;
        -webkit-box-shadow: 0 12px 20px 1px rgba(64, 64, 64, 0.09);
        box-shadow: 0 12px 20px 1px rgba(64, 64, 64, 0.09);
    }

    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: .25rem;
    }

    .box-shadow {
        -webkit-box-shadow: 0 12px 20px 1px rgba(64, 64, 64, 0.09) !important;
        box-shadow: 0 12px 20px 1px rgba(64, 64, 64, 0.09) !important;
    }

    .ml-auto,
    .mx-auto {
        margin-left: auto !important;
    }

    .mr-auto,
    .mx-auto {
        margin-right: auto !important;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .bg-white {
        background-color: #fff !important;
    }

    .ml-auto,
    .mx-auto {
        margin-left: auto !important;
    }

    .mr-auto,
    .mx-auto {
        margin-right: auto !important;
    }

    .d-block {
        display: block !important;
    }

    img,
    figure {
        max-width: 100%;
        height: auto;
        vertical-align: middle;
    }

    .card-text {
        padding-top: 12px;
        color: #8c8c8c;
    }

    .text-sm {
        font-size: 12px !important;
    }

    p,
    .p {
        margin: 0 0 16px;
    }

    .card-title {
        margin: 0;
        font-family: "Montserrat", sans-serif;
        font-size: 18px;
        font-weight: 900;
    }

    .pt-1,
    .py-1 {
        padding-top: .25rem !important;
    }

    .head-icon {
        margin-top: 18px;
        color: #FF4500
    }

    .footer_area {
        position: relative;
        z-index: 1;
        overflow: hidden;
        /* webkit-box-shadow: 0 8px 48px 8px rgba(47, 91, 234, 0.175); */
        box-shadow: 0 8px 48px 8px rgba(47, 91, 234, 0.175);
        padding: 60px;
    }

    .footer_area .row {
        margin-left: -25px;
        margin-right: -25px;
    }

    .footer_area .row .col,
    .footer_area .row .col-1,
    .footer_area .row .col-10,
    .footer_area .row .col-11,
    .footer_area .row .col-12,
    .footer_area .row .col-2,
    .footer_area .row .col-3,
    .footer_area .row .col-4,
    .footer_area .row .col-5,
    .footer_area .row .col-6,
    .footer_area .row .col-7,
    .footer_area .row .col-8,
    .footer_area .row .col-9,
    .footer_area .row .col-auto,
    .footer_area .row .col-lg,
    .footer_area .row .col-lg-1,
    .footer_area .row .col-lg-10,
    .footer_area .row .col-lg-11,
    .footer_area .row .col-lg-12,
    .footer_area .row .col-lg-2,
    .footer_area .row .col-lg-3,
    .footer_area .row .col-lg-4,
    .footer_area .row .col-lg-5,
    .footer_area .row .col-lg-6,
    .footer_area .row .col-lg-7,
    .footer_area .row .col-lg-8,
    .footer_area .row .col-lg-9,
    .footer_area .row .col-lg-auto,
    .footer_area .row .col-md,
    .footer_area .row .col-md-1,
    .footer_area .row .col-md-10,
    .footer_area .row .col-md-11,
    .footer_area .row .col-md-12,
    .footer_area .row .col-md-2,
    .footer_area .row .col-md-3,
    .footer_area .row .col-md-4,
    .footer_area .row .col-md-5,
    .footer_area .row .col-md-6,
    .footer_area .row .col-md-7,
    .footer_area .row .col-md-8,
    .footer_area .row .col-md-9,
    .footer_area .row .col-md-auto,
    .footer_area .row .col-sm,
    .footer_area .row .col-sm-1,
    .footer_area .row .col-sm-10,
    .footer_area .row .col-sm-11,
    .footer_area .row .col-sm-12,
    .footer_area .row .col-sm-2,
    .footer_area .row .col-sm-3,
    .footer_area .row .col-sm-4,
    .footer_area .row .col-sm-5,
    .footer_area .row .col-sm-6,
    .footer_area .row .col-sm-7,
    .footer_area .row .col-sm-8,
    .footer_area .row .col-sm-9,
    .footer_area .row .col-sm-auto,
    .footer_area .row .col-xl,
    .footer_area .row .col-xl-1,
    .footer_area .row .col-xl-10,
    .footer_area .row .col-xl-11,
    .footer_area .row .col-xl-12,
    .footer_area .row .col-xl-2,
    .footer_area .row .col-xl-3,
    .footer_area .row .col-xl-4,
    .footer_area .row .col-xl-5,
    .footer_area .row .col-xl-6,
    .footer_area .row .col-xl-7,
    .footer_area .row .col-xl-8,
    .footer_area .row .col-xl-9,
    .footer_area .row .col-xl-auto {
        padding-right: 25px;
        padding-left: 25px;
    }

    .single-footer-widget {
        position: relative;
        z-index: 1;
    }

    .single-footer-widget .copywrite-text a {
        color: #747794;
        font-size: 1rem;
    }

    .single-footer-widget .copywrite-text a:hover,
    .single-footer-widget .copywrite-text a:focus {
        color: #3f43fd;
    }

    .single-footer-widget .widget-title {
        margin-bottom: 1.5rem;
    }

    .single-footer-widget .footer_menu li a {
        color: #747794;
        margin-bottom: 1rem;
        display: block;
        font-size: 1rem;
    }

    .single-footer-widget .footer_menu li a:hover,
    .single-footer-widget .footer_menu li a:focus {
        color: #3f43fd;
    }

    .single-footer-widget .footer_menu li:last-child a {
        margin-bottom: 0;
    }

    .footer_social_area {
        position: relative;
        z-index: 1;
    }

    .footer_social_area a {
        border-radius: 50%;
        height: 40px;
        text-align: center;
        width: 40px;
        display: inline-block;
        background-color: #f5f5ff;
        line-height: 40px;
        -webkit-box-shadow: none;
        box-shadow: none;
        margin-right: 10px;
    }

    .footer_social_area a i {
        line-height: 36px;
    }

    .footer_social_area a:hover,
    .footer_social_area a:focus {
        color: #ffffff;
    }

    @-webkit-keyframes bi-cycle {
        0% {
            left: 0;
        }

        100% {
            left: 100%;
        }
    }

    @keyframes bi-cycle {
        0% {
            left: 0;
        }

        100% {
            left: 100%;
        }
    }

    ol li,
    ul li {
        list-style: none;
    }

    ol,
    ul {
        margin: 0;
        padding: 0;
    }

    li a {
        color: white !important
    }

    .footer-distributed {

        background: #ed4f1c;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: bold 16px sans-serif;
        padding: 55px 50px;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
        display: inline-block;
        vertical-align: top;
    }

    /* Footer left */

    .footer-distributed .footer-left {
        width: 40%;
    }

    /* The company logo */

    .footer-distributed h3 {
        color: #ffffff;
        font: normal 36px 'Open Sans', cursive;
        margin: 0;
    }

    .footer-distributed h3 span {
        color: lightseagreen;
    }

    /* Footer links */

    .footer-distributed .footer-links {
        color: #ffffff;
        margin: 20px 0 12px;
        padding: 0;
    }

    .footer-distributed .footer-links a {
        display: inline-block;
        line-height: 1.8;
        font-weight: 400;
        text-decoration: none;
        color: inherit;
    }

    .footer-distributed .footer-company-name {
        color: #222;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
    }

    /* Footer Center */

    .footer-distributed .footer-center {
        width: 35%;
    }

    .footer-distributed .footer-center i {
        background-color: #33383b;
        color: #ffffff;
        font-size: 25px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        text-align: center;
        line-height: 42px;
        margin: 10px 15px;
        vertical-align: middle;
    }

    .footer-distributed .footer-center i.fa-envelope {
        font-size: 17px;
        line-height: 38px;
    }

    .footer-distributed .footer-center p {
        display: inline-block;
        color: #ffffff;
        font-weight: 400;
        vertical-align: middle;
        margin: 0;
    }

    .footer-distributed .footer-center p span {
        display: block;
        font-weight: normal;
        font-size: 14px;
        line-height: 2;
    }

    .footer-distributed .footer-center p a {
        color: lightseagreen;
        text-decoration: none;
        ;
    }

    .footer-distributed .footer-links a:before {
        content: "|";
        font-weight: 300;
        font-size: 20px;
        left: 0;
        color: #fff;
        display: inline-block;
        padding-right: 5px;
    }

    .footer-distributed .footer-links .link-1:before {
        content: none;
    }

    /* Footer Right */

    .footer-distributed .footer-right {
        width: 20%;
    }

    .footer-distributed .footer-company-about {
        line-height: 20px;
        color: #92999f;
        font-size: 13px;
        font-weight: normal;
        margin: 0;
    }

    .footer-distributed .footer-company-about span {
        display: block;
        color: #ffffff;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .footer-distributed .footer-icons {
        margin-top: 25px;
    }

    .footer-distributed .footer-icons a {
        display: inline-block;
        width: 35px;
        height: 35px;
        cursor: pointer;
        background-color: #33383b;
        border-radius: 2px;

        font-size: 20px;
        color: #ffffff;
        text-align: center;
        line-height: 35px;

        margin-right: 3px;
        margin-bottom: 5px;
    }

    /* If you don't want the footer to be responsive, remove these media queries */

    @media (max-width: 880px) {

        .footer-distributed {
            font: bold 14px sans-serif;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
            display: block;
            width: 100%;
            margin-bottom: 40px;
            text-align: center;
        }

        .footer-distributed .footer-center i {
            margin-left: 0;
        }

    }

    /*
Forces image to be 100% width and not max width of 100%
*/
    .carousel-item .img-fluid {
        width: 100%;
        height: auto;
    }

    /* 
anchors are inline so you need ot make them block to go full width
*/
    .carousel-item a {
        display: block;
        width: 100%;
    }
</style>
@section('content')

<!--!slider!-->


<center>
    <br>
    <br>

    <!--
    ####################################################
    C A R O U S E L
    ####################################################
    -->
    <div id="carousel-2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
        <ol class="carousel-indicators">
            <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-2" data-slide-to="1"></li>
            <li data-target="#carousel-2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <a href="https://bootstrapcreative.com/">

                    <img src="https://dummyimage.com/1000x400/444/" alt="responsive image" class="d-block img-fluid">

                    <div class="carousel-caption">
                        <div>
                            <h2>Digital Craftsmanship</h2>
                            <p>We meticously build each site to get results</p>
                            <span class="btn btn-sm btn-outline-secondary">Learn More</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->


            <div class="carousel-item">
                <a href="https://bootstrapcreative.com/">
                    <img src="https://dummyimage.com/1000x400/444/" alt="responsive image" class="d-block img-fluid">

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2>Every project begins with a sketch</h2>
                            <p>We work as an extension of your business to explore solutions</p>
                            <span class="btn btn-sm btn-outline-secondary">Our Process</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="https://bootstrapcreative.com/">

                    <img src="https://dummyimage.com/1000x400/444/" alt="responsive image" class="d-block img-fluid">


                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2>Performance Optimization</h2>
                            <p>We monitor and optimize your site's long-term performance</p>
                            <span class="btn btn-sm btn-secondary">Learn How</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
        </div>
        <!-- /.carousel-inner -->
        <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /.carousel -->


    <div class="container-fluid">
        <p>Full width carousel</p>
    </div>
    <!-- /.container -->


    <br>
    <br>

    <div class="tf-tree tf-ancestor-tree">

        <ul>

            <li>
                <!-- <span class="tf-nc"><span class="node-text">1</span></span> -->
                <ul class="parent">
                    <li>
                        <span class="tf-nc"><span class="node-text">1</span></span>



                    </li>
                    <li>
                        <span class="tf-nc"><span class="node-text">2</span></span>



                    </li>
                    <li>
                        <span class="tf-nc">5</span>
                        <!-- <ul>
                                <li><span class="tf-nc">9</span></li>
                                <li><span class="tf-nc">10</span></li>
                            </ul> -->


                    </li>
                    <li>
                        <span class="tf-nc"><span class="node-text">4</span></span>


                    </li>
                </ul>

                <img class="ic_power" src="https://icon-library.com/images/87577-200.png" />
                <ul class="">
                    <li>
                        <span class="tf-nc"><span class="node-text">5</span></span>






                    </li>
                    <li>
                        <span class="tf-nc"><span class="node-text">6</span></span>






                    </li>
                    <li>
                        <span class="tf-nc"><span class="node-text">7</span></span>



                    </li>
                    <li>
                        <span class="tf-nc"><span class="node-text">8</span></span>


                    </li>
                </ul>
            </li>

        </ul>


    </div>
    <div class="tf-tree tf-ancestor-tree">
        <br>
        <br>
        <br>
        <ul>

            <li>
                <!-- <span class="tf-nc"><span class="node-text">1</span></span> -->
                <!-- <ul class="parent">
            <li>
                <span class="tf-nc"><span class="node-text">1</span></span>



            </li>
            <li>
                <span class="tf-nc"><span class="node-text">2</span></span>



            </li>
            <li>
                <span class="tf-nc">5</span>
              


            </li>
            <li>
                <span class="tf-nc"><span class="node-text">4</span></span>


            </li>
        </ul> -->
                <br>
                <br>
                <br>
                <ul class="">
                    <li>
                        <span class="tf-nc"><span class="node-text">5</span></span>






                    </li>
                    <li>
                        <span class="tf-nc"><span class="node-text">6</span></span>






                    </li>
                    <li>
                        <span class="tf-nc"><span class="node-text">7</span></span>



                    </li>
                    <li>
                        <span class="tf-nc"><span class="node-text">8</span></span>


                    </li>
                </ul>
            </li>

        </ul>


    </div>
    <center>
        <div class="custom_info_parent">
            <div class="  contact-info-one custom_info">
                <div class="media feature_widget ">
                    &nbsp; &nbsp;&nbsp; <i class="mr-3 fa fa-map-marker fa-3x"></i>
                    <div class="media-body">
                        <h5 class="mt-0">Head Office</h5>
                        4578 Marmora Road, Glasgow
                    </div>
                </div>
            </div>



            <div onclick="call_us()" class=" contact-info-two custom_info">
                <div class="media feature_widget">
                    &nbsp; &nbsp;&nbsp; <i class="mr-3 fa fa-phone fa-3x"></i>
                    <div class="media-body">
                        <h5 class="mt-0">Call Us</h5>
                        (+81) 123-456-7890
                    </div>
                </div>
            </div>



            <div class=" contact-info-three custom_info">
                <div class="media feature_widget ">
                    &nbsp; &nbsp;&nbsp; <i class="mr-3 fa fa-envelope-open fa-3x"></i>
                    <div class="media-body">
                        <h5 class="mt-0">7:30 AM - 7:30 PM</h5>
                        Monday to Saturday
                    </div>
                </div>
            </div>
        </div>
    </center>


    <div class="services">
        <div id="slide1" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/0/0f/Eiffel_Tower_Vertical.JPG');" class="content content-1">
            <div class="fa fa-twitter fa-4x"></div>
            <h2>
                Twitter
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error?
            </p>
            <a href="#">Read More</a>
        </div>
        <div class="content content-2">
            <div class="fab fa-instagram"></div>
            <h2>
                Instagram
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error?
            </p>
            <a href="#">Read More</a>
        </div>
        <div class="content content-3">
            <div class="fab fa-youtube"></div>
            <h2>
                Youtube
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ullam aliquid non eligendi, nemo est neque reiciendis error?
            </p>
            <a href="#">Read More</a>
        </div>
    </div>

    <br>
    <br>
    </div> -->
    <br>
    <br>
    <section class="container pt-3 mb-3">
        <h2 class="h3 block-title text-center">
            Our Services
            <center>
                <hr style="border: 2px solid;width:40%">
            </center>
            </small>
        </h2>
        <div class="row pt-5 mt-30">
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-user fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">UX Prototyping</h3>
                        <p class="card-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p><span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-user-circle-o fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Web &amp; UI Design</h3>
                        <p class="card-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p><span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-address-book fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Issuance of residence in Turkey</h3>
                        <p class="card-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p><span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-car fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Back-End Development</h3>
                        <p class="card-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p><span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-camera fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Usability Testing</h3>
                        <p class="card-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p><span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5">
                <a class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-image fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">SEO Optimization</h3>
                        <p class="card-text text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p><span class="text-sm text-uppercase font-weight-bold">Learn More&nbsp;<i class="fe-icon-arrow-right"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </section>













    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</center>
<div class="footer">
    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>Company<span>logo</span></h3>

            <p class="footer-links">
                <a href="#" class="link-1">Home</a>

                <a href="#">Blog</a>

                <a href="#">Pricing</a>

                <a href="#">About</a>

                <a href="#">Faq</a>

                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Company Name © 2015</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+1.555.555.5555</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">support@company.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span>
                Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
            </p>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

        </div>

    </footer>
    </footer>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    //jquery on click


    function call_us() {
        //open call dialer 
        //    window.location('tel:+96179175660')
        window.location.href = 'tel:+96179175660'

    }
</script>