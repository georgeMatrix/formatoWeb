<link rel="stylesheet" href="blog/css/normalize.css">
<link rel="stylesheet" href="blog/css/framework.css">
<link rel="stylesheet" href="blog/css/style.css">
<link rel="stylesheet" href="blog/css/responsive.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    .content-wrapper {
        overflow: hidden;
    }

    .wrapper {
        width: 1204px;
        margin: 0 auto;
    }

    .container {
        width: 984px;
        float: right;
        margin-bottom: 362px;
        padding-bottom: 20px;

        /* div padding fix */
        -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
        -moz-box-sizing: border-box;    /* Firefox, other Gecko */
        box-sizing: border-box;         /* Opera/IE 8+ */
    }

    .page-title {
        width: 100%;
        height: 120px;
        background-color: #4a4a4a;
        border-radius: 10px;
        overflow: hidden;
        padding: 25px 40px;

        /* div padding fix */
        -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
        -moz-box-sizing: border-box;    /* Firefox, other Gecko */
        box-sizing: border-box;         /* Opera/IE 8+ */
    }

    .page-title-detail h1 {
        font-size: 34px;
        font-weight: 300;
        line-height: 40px;
        color: #ffffff;
        text-transform: uppercase;
        margin: 0;
    }

    .sub-title {
        font-size: 18px;
        font-weight: 400;
        color: #bdbdbd;
        line-height: 20px;
        margin-top: 5px;
    }

    .page-navigation {
        width: 30%;
        float: right;
        margin-top: -50px;
    }

    .page-navigation ul li a {
        color: #ffffff;
        text-decoration: none;
        -webkit-transition: color 0.2s ease-in-out;
        -moz-transition: color 0.2s ease-in-out;
        -ms-transition: color 0.2s ease-in-out;
        -o-transition: color 0.2s ease-in-out;
        transition: color 0.2s ease-in-out;
    }

    /*******************************************************************************
								Top Header
*******************************************************************************/

    .top-header {
        width: 100%;
        height: 40px;
        margin-bottom: 20px;
        background-color: #91181f;
    }

    .wrapper.topwrap {
        background-color: #91181f;
        overflow: hidden;
    }

    .top-info {
        float: left;
        color: #eeeeee;
        margin-top: 8px;
    }

    .top-socialmedia {
        float: right;
        list-style: none;
    }

    .top-socialmedia li {
        display: inline;
    }

    .top-socialmedia li a {
        width: 40px;
        height: 40px;
        float: left;
        overflow: hidden;
        opacity: 0.8;

        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -ms-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    .top-socialmedia li a:hover{
        background-color: #9dd6d9;
        opacity: 1;
    }

    /*******************************************************************************
								Footer
*******************************************************************************/

    .footer-section {

        width: 100%;
        left: 0;
        bottom: 0;
    }

    .footer-content {
        width: 984px;
        overflow: hidden;
        -webkit-border-top-left-radius: 10px;
        -webkit-border-top-right-radius: 10px;
        -moz-border-radius-topleft: 10px;
        -moz-border-radius-topright: 10px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .footer-top {
        padding: 40px;
        background-color: rgba(56, 102, 118, 0.42);
        overflow: hidden;
    }

    .footer-title {
        font-size: 20px;
        font-weight: 400;
        line-height: 24px;
        color: #ffffff;
        text-transform: uppercase;
        margin-top: -5px;
    }

    .footer-details {
        margin-top: 26px;
        color: #ffffff;
    }

    .footer-about,
    .footer-contact {
        width: 423px;
        float: left;
        margin-right: 29px;
    }

    .footer-contact ul {
        list-style: none;
    }

    .footer-contact ul li {
        border-bottom: #6a6a6a solid 1px;
        padding: 15px 0px;
    }

    .footer-contact ul li:first-child {
        padding: 0px 0px 15px 0px;
    }

    .footer-contact ul li:last-child {
        border-bottom: none;
        padding: 15px 0px 0px 0px;
    }

    .contact-list {
        width: 100%;
        height: 41px;
        display: table;
        padding-left: 55px;
        box-sizing:border-box;
        -moz-box-sizing:border-box;
        -webkit-box-sizing:border-box;
        background: url(../images/footer-icon-address.png) no-repeat;
    }

    .contact-list.email {
        background: url(../images/footer-icon-email.png) no-repeat;
    }

    .contact-list.phone {
        background: url(../images/footer-icon-phone.png) no-repeat;
    }

    .contact-list.count {
        background: url(../images/footer-icon-count.png) no-repeat;
    }

    .contact-list span {
        display: table-cell;
        vertical-align: middle;
    }

    .footer-subscribe {
        width: 282px;
        float: right;
    }


    /* ===== Footer bottom ===== */

    .footer-bottom {
        height: 40px;
        padding: 0px 40px;
        background-color: #91181F;
        overflow: hidden;
    }

    .copyright {
        width: 50%;
        float: left;
        margin-top: 9px;
        padding-right: 20px;
        color: #ffffff;

        /* div padding fix */
        -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
        -moz-box-sizing: border-box;    /* Firefox, other Gecko */
        box-sizing: border-box;         /* Opera/IE 8+ */
    }

    .copyright a {
        text-decoration: none;
        color: #ffffff;

        -webkit-transition: color 0.2s ease-in-out;
        -moz-transition: color 0.2s ease-in-out;
        -ms-transition: color 0.2s ease-in-out;
        -o-transition: color 0.2s ease-in-out;
        transition: color 0.2s ease-in-out;
    }

    .copyright a:hover {
        color: #cccccc;
    }

    .footer-bottom nav {
        float: right;
    }

    .footer-bottom ul {
        list-style: none;
        margin-top: 9px;
    }

    .footer-bottom ul li {
        display: inline;
        float: left;
        margin-left: 12px;
    }

    .footer-bottom ul li a {
        color: #ffffff;
        text-decoration: none;

        -webkit-transition: color 0.2s ease-in-out;
        -moz-transition: color 0.2s ease-in-out;
        -ms-transition: color 0.2s ease-in-out;
        -o-transition: color 0.2s ease-in-out;
        transition: color 0.2s ease-in-out;
    }

    .footer-bottom ul li a:hover {
        color: #cccccc;
    }



    /*******************************************************************************
                                    Go To Top
    *******************************************************************************/

    .back-to-top {
        width: 40px;
        height: 40px;
        position: fixed;
        bottom: 1.5em;
        right: 1.5em;
        background: url(../images/go-to-top.png) no-repeat;
        opacity: 0.5;
        z-index: 1000;
        display: none;
    }

    .back-to-top:hover {
        opacity: 0.6;
    }



    /*******************************************************************************
                                    Hover Effect
    *******************************************************************************/

    .thumbnail-hover {
        position: absolute;
        width: 100%;
        height: 100%;
        background: url(../images/link-icon.png) no-repeat top center rgba(246, 138, 94, 0.8);
        border-radius: 10px;
        opacity: 0;

        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -ms-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    .thumbnail-hover:hover {
        background: url(../images/link-icon.png) no-repeat center center rgba(246, 138, 94, 0.8);
        opacity: 1;
    }

    .service-panel .thumbnail-hover {
        background: rgba(246, 138, 94, 0.8);
    }

    .sidebar-thumbnail-hover {
        position: absolute;
        width: 100%;
        height: 100%;
        background: url(../images/link-plus-icon.png) no-repeat center center rgba(0, 0, 0, 0.3);
        opacity: 0;

        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -ms-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    .sidebar-thumbnail-hover:hover {
        opacity: 1;
    }

</style>