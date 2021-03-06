<?php

use App\Models\Contacts;
use App\Models\Phones;
use App\Models\Socials;

$phones=Phones::orderby('order')->where(['status'=>1])->limit(3)->get();
$socials=Socials::orderby('order')->where(['status'=>1])->first();
$contact=Contacts::orderby('order')->where(['status'=>1])->first();
?>

<!DOCTYPE html>
<html lang="{{App::getlocale()}}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/css/bootstrap-scss/bootstrap-grid.min.css">
    <link rel="stylesheet" href="app/libs/slick/slick.css">
    <link rel="stylesheet" href="app/libs/wow/css/libs/animate.css">
    <link rel="stylesheet" href="app/css/style.min.css">
    <link rel="stylesheet" href="app/css/media.min.css">
    <title>{{__("SNGroup")}}</title>
</head>

<body>
    <!--Loader
    ==========================-->
    <div class="loader-wrap">
        <div class="loader"></div>
    </div>

    <!--Header
==================================-->
    <header class="header">
        <div class="container">
            <div class="header-block d-f justify-content-between">
                <a href="" class="header-logo pb-1 pt-1">
                    <img src="app/images/logo.png" alt="">
                </a>
                <div class="header-item">
                    <div class="header-item-top d-f justify-content-between">
                        @for($i=2;$i>0;$i--)
                            <div class="header-phone d-f">
                                <a href="" class="d-f align-items-center">
                                    <img src="app/images/phone.png" alt="">
                                    <span class="d-b h6 f-med link-col pl-l">{{$phones[$i]->phone}}</span>
                                </a>
                                <p class="f-14 text-upper f-med main-col pl-1 d-f align-items-center">{{$phones[$i]->title()}}</p>
                            </div>
                        @endfor
                        <div class="header-email d-f">
                            <img src="app/images/email.png" alt="">
                            <p class="f-med h6 ml-l">{{$contact->email}}</p>
                        </div>
                        <div class="header-lang">
                            <div class="header-lang-top d-f">
                                <p class="h6 f-med text-upper mr-l">{{App::getlocale()}}</p>
                                <img class="ob-cont" src="app/images/green-arrow.png" alt="">
                            </div>
                            <ul class="header-lang-bottom">
                                <li><a href="/lang/ru" class="h6 f-med text-upper main-col">RU</a></li>
                                <li><a href="/lang/uz" class="h6 f-med text-upper main-col">UZ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-item-bottom w-100">
                        <div class="header-menu-logo">
                            <img src="app/images/logo.png" alt="">
                        </div>
                        <ul class="header-menu w-100 d-f justify-content-between">
                            <li><a href="" class="f-14 f-med text-upper link-col">??????????????</a></li>
                            <li><a href="" class="f-14 f-med text-upper link-col active">?? ????????????????</a></li>
                            <li><a href="" class="f-14 f-med text-upper link-col">??????????????????</a></li>
                            <li><a href="" class="f-14 f-med text-upper link-col">??????????????????????</a></li>
                            <li><a href="" class="f-14 f-med text-upper link-col">??????????????????????</a></li>
                            <li><a href="" class="f-14 f-med text-upper link-col">??????????????</a></li>
                            <li><a href="" class="f-14 f-med text-upper link-col">????????????????</a></li>
                            <li><a href="" class="f-14 f-med text-upper link-col">????????????????</a></li>
                            <li class="header-menu-lang d-n">
                                <div class="header-lang">
                                    <div class="header-lang-top d-f">
                                        <p class="h6 f-med text-upper mr-l">Ru</p>
                                        <img class="ob-cont" src="images/green-arrow.png" alt="">
                                    </div>
                                    <ul class="header-lang-bottom">
                                        <li><a href="" class="h6 f-med text-upper main-col">RU</a></li>
                                        <li><a href="" class="h6 f-med text-upper main-col">UZ</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hamburger">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px">
                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                            d="M7.500,24.000 L7.500,21.000 L24.000,21.000 L24.000,24.000 L7.500,24.000 ZM-0.000,10.500 L24.000,10.500 L24.000,13.500 L-0.000,13.500 L-0.000,10.500 ZM21.000,-0.000 L24.000,-0.000 L24.000,3.000 L21.000,3.000 L21.000,-0.000 ZM-0.000,-0.000 L16.500,-0.000 L16.500,3.000 L-0.000,3.000 L-0.000,-0.000 ZM3.000,24.000 L-0.000,24.000 L-0.000,21.000 L3.000,21.000 L3.000,24.000 Z" />
                    </svg>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <!--Footer
====================================-->

    <div class="footer">
        <div class="container">
            <div class="row equal-offsets  pt-3 pb-3">
                <div class="col-xl-2 col-lg-2 col-md-6">
                    <div class="footer-left d-f justify-content-md-center align-items-center">
                        <div class="footer-logo">
                            <img src="app/images/f-logo.png" alt="">
                        </div>
                        <div class="footer-social ml-2">
                            <a href="{{$socials->facebook}}" class="footer-social-item">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="8px" height="18px">
                                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                        d="M7.683,9.007 L5.272,9.007 L5.272,17.999 L1.698,17.999 L1.698,9.007 L-0.002,9.007 L-0.002,5.831 L1.698,5.831 L1.698,3.776 C1.698,2.306 2.365,0.004 5.304,0.004 L7.952,0.016 L7.952,3.099 L6.031,3.099 C5.715,3.099 5.272,3.264 5.272,3.965 L5.272,5.835 L7.996,5.835 L7.683,9.007 Z" />
                                </svg>
                            </a>
                            <a href="{{$socials->instagram}}" class="footer-social-item active mt-l mb-l">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px">
                                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                        d="M17.978,11.850 C17.968,12.787 17.937,13.727 17.625,14.629 C17.021,16.376 15.792,17.437 13.989,17.779 C13.175,17.933 12.331,17.969 11.499,17.981 C9.716,18.008 7.932,17.997 6.149,17.978 C5.210,17.969 4.267,17.937 3.363,17.629 C1.609,17.031 0.545,15.805 0.197,14.009 C0.040,13.197 0.006,12.354 -0.007,11.525 C-0.034,9.740 -0.024,7.955 -0.004,6.169 C0.006,5.233 0.037,4.292 0.349,3.391 C0.953,1.644 2.182,0.583 3.985,0.241 C4.799,0.087 5.643,0.069 6.476,0.037 C7.317,0.005 8.160,0.030 9.002,0.030 C9.002,0.022 9.002,0.013 9.003,0.005 C10.213,0.026 11.423,0.038 12.633,0.072 C13.683,0.101 14.701,0.288 15.614,0.844 C16.810,1.572 17.542,2.646 17.778,4.010 C17.920,4.826 17.968,5.665 17.981,6.495 C18.008,8.280 17.998,10.065 17.978,11.850 ZM16.366,8.866 C16.366,8.156 16.380,7.447 16.362,6.739 C16.344,6.057 16.317,5.374 16.248,4.696 C16.094,3.177 15.187,2.130 13.688,1.845 C12.899,1.696 12.081,1.673 11.275,1.658 C9.748,1.631 8.221,1.634 6.695,1.657 C5.934,1.669 5.165,1.697 4.415,1.814 C3.113,2.017 2.222,2.760 1.862,4.049 C1.747,4.462 1.679,4.899 1.669,5.328 C1.630,6.954 1.606,8.582 1.612,10.209 C1.615,11.245 1.639,12.283 1.729,13.314 C1.865,14.860 2.807,15.913 4.333,16.189 C5.117,16.331 5.929,16.349 6.729,16.362 C8.235,16.388 9.743,16.381 11.250,16.365 C11.939,16.357 12.631,16.319 13.317,16.251 C13.958,16.188 14.559,15.979 15.076,15.570 C15.913,14.907 16.236,13.992 16.286,12.978 C16.352,11.608 16.366,10.237 16.402,8.866 C16.390,8.866 16.378,8.866 16.366,8.866 ZM13.795,5.300 C13.196,5.296 12.701,4.800 12.706,4.208 C12.712,3.615 13.192,3.138 13.787,3.136 C14.403,3.132 14.876,3.599 14.877,4.209 C14.878,4.813 14.391,5.304 13.795,5.300 ZM8.982,13.625 C6.400,13.624 4.360,11.567 4.361,8.966 C4.362,6.430 6.442,4.394 9.031,4.396 C11.560,4.397 13.613,6.467 13.613,9.015 C13.613,11.575 11.554,13.625 8.982,13.625 ZM8.989,6.016 C7.340,6.017 5.987,7.365 5.985,9.008 C5.984,10.649 7.339,12.003 8.985,12.004 C10.631,12.006 11.987,10.655 11.988,9.012 C11.990,7.370 10.634,6.015 8.989,6.016 Z" />
                                </svg>
                            </a>
                            <a href="{{$socials->telegram}}" class="footer-social-item">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="17px">
                                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                        d="M18.000,1.008 C17.964,1.476 17.834,1.972 17.735,2.473 C16.911,6.622 16.083,10.771 15.255,14.919 C15.207,15.157 15.156,15.396 15.035,15.610 C14.838,15.961 14.552,16.090 14.177,15.999 C13.941,15.941 13.736,15.824 13.542,15.671 C12.294,14.685 11.041,13.707 9.796,12.716 C9.637,12.590 9.547,12.604 9.413,12.745 C8.799,13.394 8.173,14.029 7.558,14.676 C7.323,14.923 7.063,15.071 6.721,15.058 C6.480,15.049 6.341,14.944 6.268,14.699 C5.883,13.420 5.491,12.143 5.101,10.865 C4.969,10.432 4.830,10.001 4.706,9.564 C4.661,9.407 4.585,9.327 4.436,9.278 C3.214,8.879 1.995,8.471 0.775,8.065 C0.614,8.012 0.453,7.958 0.310,7.862 C-0.038,7.629 -0.066,7.318 0.236,7.023 C0.443,6.821 0.695,6.701 0.954,6.595 C2.617,5.912 4.280,5.229 5.944,4.546 C9.536,3.073 13.128,1.601 16.720,0.128 C16.749,0.116 16.777,0.103 16.805,0.091 C17.480,-0.176 17.995,0.199 18.000,1.008 ZM6.729,13.839 C6.795,13.806 6.789,13.759 6.792,13.722 C6.874,12.790 6.959,11.858 7.031,10.925 C7.049,10.693 7.116,10.520 7.286,10.359 C9.627,8.122 11.962,5.878 14.298,3.635 C14.446,3.494 14.595,3.353 14.739,3.207 C14.799,3.148 14.877,3.079 14.831,2.979 C14.783,2.875 14.679,2.879 14.587,2.890 C14.408,2.912 14.255,3.006 14.105,3.106 C11.224,5.040 8.343,6.975 5.459,8.903 C5.295,9.013 5.272,9.113 5.331,9.299 C5.688,10.433 6.034,11.572 6.383,12.710 C6.499,13.085 6.613,13.460 6.729,13.839 Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 pl-4">
                    @for($i=2;$i>=0;$i--)    
                        <div class="footer-center-block d-f @if($i!==2) mt-l @endif">
                            @if($i==2)
                                <p class="mr-l">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px">
                                        <path fill-rule="evenodd" fill="rgb(0, 203, 113)"
                                            d="M16.555,11.814 C15.453,11.814 14.371,11.642 13.346,11.303 C12.843,11.131 12.226,11.289 11.919,11.604 L9.895,13.131 C7.548,11.878 6.102,10.433 4.866,8.103 L6.349,6.132 C6.735,5.748 6.873,5.186 6.707,4.658 C6.367,3.628 6.194,2.546 6.194,1.443 C6.194,0.647 5.546,-0.001 4.750,-0.001 L1.444,-0.001 C0.648,-0.001 -0.000,0.647 -0.000,1.443 C-0.000,10.572 7.426,17.999 16.555,17.999 C17.352,17.999 18.000,17.351 18.000,16.555 L18.000,13.258 C18.000,12.462 17.352,11.814 16.555,11.814 Z" />
                                    </svg>
                                </p>
                            @endif
                            <a href="{{$phones[$i]->phone}}" class="@if($i!=2) footer-center-number @endif h5 f-bold wh-col">{{$phones[$i]->phone}}</a>
                            <p class="ml-1"><img src="app/images/telegram.png" alt=""></p>
                            <p class="@if($i==3) footer-icon @endif ml-l"><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px">
                                    <image x="0px" y="0px" width="24px" height="24px"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABXFBMVEUAAAAAvyIAvyIAvyIAvyIAvyIAvyIAvyIAvyIAvyIAvyIvyUt/2ZCo4rKt47eM3JtGzl4BvyMLwSyc4Knr8O2n4rJy14Ru1oGV3qLi7uW/58chxj4IwSi65sPC58kjxkAPwi/d7eEfxT2B2pHL6dENwi0zyk41yk+d4Kro7+tBzVrm7+jS69cTwzLk7uY+zFhJzmHY7N3w8fHq8OwSwzGf4KuD2pNl1Hmx5LvF6My05L152Iug4Kxj1Hc0yk/s8O542Ikgxj4cxTqZ36Y4y1Pn7+kJwSpW0Wzt8O+y5LvW7NpZ0m+45cBv1oICvyTU69lr1X+u47jv8fDl7+c/zFiP3Z0RwzEKwSsYxDbQ6tWG25UHwCjj7uZi03Zx14Nt1oAFwCZU0GrY7Nyo4rMGwCdIzmHu8e/O6tTE6Mu+58be7eJs1n8DwCRc0nJd0nIUwzNY0W1X0W05y1T///8/d56+AAAACnRSTlMAKYLD7yizZ/iE01X27gAAAAFiS0dEc0EJPc4AAAAHdElNRQflAgkLDyLTOI6xAAABI0lEQVQoz3VS51/CMBRMF+PhCtRtBUcRt+JGLcMtOHFP3Hv+/x9s3ivCT+l9yKUvzb3LJYwRJFlRAVRFllg5NA/8wqOV6l4flMHnLdb98Ad+53/4B9yjOTqBquqa2jpOaqIP9Q2G9PqGxqbmllZyYPvESZvRHhYcCXV0YkFiMnJXtxntERMeM1BNZgoK9faZ/QNYGRwaFqQwVdDIKA/Hx8Zx88SkGFWGH1PTwGcS5G52DokW5g0AK5ni6YzdboEWUGpxaRlgZXVtXc9CboOksPnm1rY9Wju7+T0rmabmZDe2j3RweHR8AmQXD3h6dn5xaQIUrq5vbp0DYiR38fvEg/74lH9+eS1GgiG+vX8AD3x+fRegFKJr7O4X5X617o+h0vP5ATV0KaP39o9NAAAAAElFTkSuQmCC" />
                                </svg></p>
                            <p class=" ml-1 h6 f-bold main-col">{{$phones[$i]->title()}}</p>
                        </div>
                    @endfor
                    <div class="footer-center-block d-f mt-1">
                        <p class=" d-f align-item-center justify-content-between mr-l" style="margin-top: 5px;"><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="18px" height="14px">
                                <path fill-rule="evenodd" fill="rgb(0, 203, 113)"
                                    d="M17.528,13.532 C17.213,13.843 16.835,13.999 16.393,13.999 L1.607,13.999 C1.165,13.999 0.787,13.843 0.472,13.532 C0.157,13.220 -0.000,12.846 -0.000,12.408 L-0.000,4.513 C0.294,4.838 0.633,5.127 1.014,5.378 C3.438,7.009 5.103,8.153 6.007,8.809 C6.388,9.087 6.698,9.304 6.936,9.460 C7.173,9.616 7.490,9.775 7.885,9.937 C8.280,10.100 8.648,10.180 8.990,10.180 L9.000,10.180 L9.010,10.180 C9.352,10.180 9.720,10.100 10.115,9.937 C10.510,9.775 10.826,9.616 11.064,9.460 C11.302,9.304 11.611,9.087 11.993,8.809 C13.131,7.994 14.799,6.850 16.995,5.378 C17.377,5.120 17.712,4.831 18.000,4.513 L18.000,12.408 C18.000,12.846 17.843,13.220 17.528,13.532 ZM16.282,4.315 C13.764,6.044 12.197,7.122 11.581,7.546 C11.514,7.592 11.372,7.693 11.154,7.849 C10.937,8.005 10.756,8.131 10.612,8.227 C10.468,8.323 10.294,8.431 10.090,8.550 C9.886,8.669 9.693,8.759 9.512,8.818 C9.331,8.878 9.164,8.908 9.010,8.908 L9.000,8.908 L8.990,8.908 C8.836,8.908 8.668,8.878 8.487,8.818 C8.307,8.759 8.114,8.670 7.910,8.550 C7.705,8.431 7.531,8.323 7.387,8.227 C7.243,8.131 7.063,8.005 6.845,7.849 C6.627,7.694 6.485,7.592 6.418,7.546 C5.809,7.122 4.932,6.517 3.787,5.731 C2.641,4.946 1.955,4.474 1.727,4.315 C1.312,4.036 0.921,3.653 0.552,3.166 C0.184,2.679 -0.000,2.226 -0.000,1.809 C-0.000,1.292 0.139,0.861 0.417,0.516 C0.694,0.171 1.091,-0.000 1.607,-0.000 L16.393,-0.000 C16.828,-0.000 17.204,0.155 17.522,0.466 C17.841,0.778 18.000,1.153 18.000,1.590 C18.000,2.114 17.836,2.614 17.507,3.091 C17.179,3.568 16.771,3.976 16.282,4.315 Z" />
                            </svg></p>
                        <a class="h5 f-bold wh-col">{{$contact->email}}</a>
                    </div>
                    <div class="footer-center-block d-f mt-1">
                        <p class=" d-f align-item-center justify-content-between mr-l" style="margin-top: 5px;"><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="14px" height="18px">
                                <path fill-rule="evenodd" fill="rgb(0, 203, 113)"
                                    d="M7.000,-0.001 C3.139,-0.001 -0.002,3.045 -0.002,6.789 C-0.002,12.179 6.249,17.594 6.515,17.822 C6.654,17.940 6.827,17.999 7.000,17.999 C7.180,17.999 7.360,17.935 7.500,17.808 C7.765,17.567 14.003,11.854 14.003,6.789 C14.003,3.045 10.860,-0.001 7.000,-0.001 ZM7.000,10.026 C5.156,10.026 3.662,8.576 3.662,6.790 C3.662,5.003 5.156,3.552 7.000,3.552 C8.843,3.552 10.338,5.002 10.338,6.790 C10.338,8.577 8.843,10.026 7.000,10.026 Z" />
                            </svg></p>
                        <a class="h5 f-bold wh-col" style="width: 60%;">{{$contact->address()}}</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-menu-wrap d-f">
                        <ul class="footer-menu-1">
                            <li><a href="" class="f-14 f-med wh-col text-upper">??????????????</a></li>
                            <li><a href="" class="f-14 f-med wh-col text-upper mt-1">?? ????????????????</a></li>
                            <li><a href="" class="f-14 f-med wh-col text-upper mt-1">??????????????????</a></li>
                            <li><a href="" class="f-14 f-med wh-col text-upper mt-1">??????????????????????</a></li>
                        </ul>
                        <div class="footer-menu-2">
                            <li><a href="" class="f-14 f-med wh-col text-upper">??????????????????????</a></li>
                            <li><a href="" class="f-14 f-med wh-col text-upper mt-1">??????????????</a></li>
                            <li><a href="" class="f-14 f-med wh-col text-upper mt-1">????????????????</a></li>
                            <li><a href="" class="f-14 f-med wh-col text-upper mt-1">????????????????</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-block fx-csb">
                    <p class="f-reg">???SN Group??? ?????? ?????????? ????????????????</p>
                    <p class="f-reg">?? Copyright 2019 - Web developed by <a href="">SOS Group</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="app/libs/jquery/jquery.min.js"></script>
    <script src="app/libs/slick/slick.min.js"></script>
    <script src="app/libs/wow/dist/wow.min.js"></script>
    <script src="app/js/main.js"></script>
</body>

</html>