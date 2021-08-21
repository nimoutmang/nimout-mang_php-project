<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    
        /*Home page */
            .description{
                margin-top: 10%;
                color: white;
                
                
            }
            .paragraph{
                font-size: 100%;
                color: red;
            }
            .col-sm-2{
                margin-bottom: 20%;
            }
            
        body{
            /* background: black */
            background: url("https://jooinn.com/images450_/wood-background-1.jpg")
        }

        /*Contact us page*/
        @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
        /*Google font integration*/
        @import url('https://fonts.googleapis.com/css?family=Roboto');

        #contact{
            
            font-family: 'Roboto', sans-serif;
        }

        #contact .well{
            margin-top:30px;
            border-radius:0;
        }

        #contact .form-control{
            border-radius: 0;
            border:2px solid #1e1e1e;
        }

        #contact button{
            border-radius:0;
            border:2px solid #1e1e1e;
        }

        #contact .row{
            margin-bottom:30px;
        }

        @media (max-width: 768px) { 
            #contact iframe {
                margin-bottom: 15px;
            }
            
        }

    /* Home page */
        body{
            background-color:LightGray;
        }

    /*footer */
        .footer {
        background-color: #414141;
        width: 100%;
        text-align: left;
        font-family: sans-serif;
        font-weight: bold;
        font-size: 16px;
        padding: 50px;
        margin-top: 50px;
        }

        .footer .footer-left,
        .footer .footer-center,
        .footer .footer-right {
        display: inline-block;
        vertical-align: top;
        }


    /* footer left*/

        .footer .footer-left {
        width: 33%;
        padding-right: 15px;
        }

        .footer .about {
        line-height: 20px;
        color: #ffffff;
        font-size: 13px;
        font-weight: normal;
        margin: 0;
        }

        .footer .about span {
        display: block;
        color: #ffffff;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 20px;
        }

        .footer .icons {
        margin-top: 25px;
        }

        .footer .icons a {
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


    /* footer center*/

        .footer .footer-center {
        width: 30%;
        }

        .footer .footer-center i {
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

        .footer .footer-center i.fa-envelope {
        font-size: 17px;
        line-height: 38px;
        }

        .footer .footer-center p {
        display: inline-block;
        color: #ffffff;
        vertical-align: middle;
        margin: 0;
        }

        .footer .footer-center p span {
        display: block;
        font-weight: normal;
        font-size: 14px;
        line-height: 2;
        }

        .footer .footer-center p a {
        color: #0099ff;
        text-decoration: none;
        }


        /* footer right*/

        .site-footer
        {
        background-color:#26272b;
        padding:45px 0 20px;
        font-size:15px;
        line-height:24px;
        color:#737373;
        }
        .site-footer hr
        {
        border-top-color:#bbb;
        opacity:0.5
        }
        .site-footer hr.small
        {
        margin:20px 0
        }
        .site-footer h6
        {
        color:#fff;
        font-size:16px;
        text-transform:uppercase;
        margin-top:5px;
        letter-spacing:2px
        }
        .site-footer a
        {
        color:#737373;
        }
        .site-footer a:hover
        {
        color:#3366cc;
        text-decoration:none;
        }
        .footer-links
        {
        padding-left:0;
        list-style:none
        }
        .footer-links li
        {
        display:block
        }
        .footer-links a
        {
        color:#737373
        }
        .footer-links a:active,.footer-links a:focus,.footer-links a:hover
        {
        color:#3366cc;
        text-decoration:none;
        }
        .footer-links.inline li
        {
        display:inline-block
        }
        .site-footer .social-icons
        {
        text-align:right
        }
        .site-footer .social-icons a
        {
        width:40px;
        height:40px;
        line-height:40px;
        margin-left:6px;
        margin-right:0;
        border-radius:100%;
        background-color:#33353d
        }
        .copyright-text
        {
        margin:0
        }
        @media (max-width:991px)
        {
        .site-footer [class^=col-]
        {
            margin-bottom:30px
        }
        }
        @media (max-width:767px)
        {
        .site-footer
        {
            padding-bottom:0
        }
        .site-footer .copyright-text,.site-footer .social-icons
        {
            text-align:center
        }
        }
        .social-icons
        {
        padding-left:0;
        margin-bottom:0;
        list-style:none
        }
        .social-icons li
        {
        display:inline-block;
        margin-bottom:4px
        }
        .social-icons li.title
        {
        margin-right:15px;
        text-transform:uppercase;
        color:#96a2b2;
        font-weight:700;
        font-size:13px
        }
        .social-icons a{
        background-color:#eceeef;
        color:#818a91;
        font-size:16px;
        display:inline-block;
        line-height:44px;
        width:44px;
        height:44px;
        text-align:center;
        margin-right:8px;
        border-radius:100%;
        -webkit-transition:all .2s linear;
        -o-transition:all .2s linear;
        transition:all .2s linear
        }
        .social-icons a:active,.social-icons a:focus,.social-icons a:hover
        {
        color:#fff;
        background-color:#29aafe
        }
        .social-icons.size-sm a
        {
        line-height:34px;
        height:34px;
        width:34px;
        font-size:14px
        }
        .social-icons a.facebook:hover
        {
        background-color:#3b5998
        }
        .social-icons a.twitter:hover
        {
        background-color:#00aced
        }
        .social-icons a.linkedin:hover
        {
        background-color:#007bb6
        }
        .social-icons a.dribbble:hover
        {
        background-color:#ea4c89
        }
        @media (max-width:767px)
        {
        .social-icons li.title
        {
            display:block;
            margin-right:0;
            font-weight:600
        }
        }

    /* logo*/
        .img{
                border-radius: 50%;
                width: 50%;
                height: 50%;
            }
    /* login*/
    
    
    </style>
    
</head>
<body>