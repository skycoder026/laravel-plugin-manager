<style>

    body {
        background-color: #f5f4f5;
        margin-top: 20px;
    }

    .plugin-item {
        background-color: #fff;
    }

    .plugin-tab .nav-tabs {
        margin-bottom: 60px;
        border-bottom: 0;
    }

    .plugin-tab .nav-tabs>li {
        float: none;
        display: inline;
    }

    .plugin-tab .nav-tabs li {
        margin-right: 15px;
    }

    .plugin-tab .nav-tabs li:last-child {
        margin-right: 0;
    }

    .plugin-tab .nav-tabs {
        position: relative;
        z-index: 1;
        display: inline-block;
    }

    .plugin-tab .nav-tabs:before {
        position: absolute;
        content: "";
        top: 50%;
        left: 0;
        width: 100%;
        height: 1px;
        background-color: #fff;
        z-index: -1;
    }



    .plugin-tab .nav-tabs>li a {
        display: inline-block;
        background-color: #fff;
        border: none;
        border-radius: 30px;
        font-size: 14px;
        color: #000;
        padding: 5px 30px;
        text-decoration: none;
    }

    .plugin-tab .nav-tabs>li>a.active,
    .plugin-tab .nav-tabs>li a.active>:focus,
    .plugin-tab .nav-tabs>li>a.active:hover,
    .plugin-tab .nav-tabs>li>a:hover {
        border: none;
        background-color: #008def;
        color: #fff;
        text-decoration: underline;
    }

    .plugin-item {
        border-radius: 3px;
        position: relative;
        margin-bottom: 30px;
        z-index: 1;
    }

    .plugin-item .btn.btn-primary {
        text-transform: capitalize;
    }

    .plugin-item .plugin-info {
        font-size: 14px;
        color: #000;
        overflow: hidden;
        text-align: left;
    }

    .plugin-info .plugin-desc {
        height: 170px;
        padding: 10px;
    }

    .plugin-info .plugin-desc .plugin-body {
        height: 120px;
    }

    .plugin-info .plugin-title {
        margin-bottom: 20px;
    }

    .plugin-info .plugin-title span {
        font-size: 14px;
        display: block;
    }

    .plugin-info .plugin-title a {
        color: #000;
        text-decoration: none;
    }

    .plugin-info .plugin-title a:hover {
        color: #008def;
    }

    .plugin-info ul {
        margin-top: 10px;
        margin-bottom: 30px;
    }

    .plugin-meta {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .plugin-meta li,
    .plugin-meta li a {
        color: #646464;
        text-decoration: none;
    }

    .plugin-meta li a:hover {
        color: #008def;
    }

    .plugin-meta li {
        font-size: 12px;
        margin-bottom: 5px;
    }

    .plugin-meta li i {
        color: #000;
        margin-right: 5px;
    }

    .plugin-item .plugin-footer {
        position: relative;
    }


    .plugin-item .plugin-footer:after {
        position: absolute;
        content: "";
        bottom: 35px;
        left: -50px;
        width: 150%;
        height: 1px;
        background-color: #f5f4f5;
        z-index: -1;
    }

    .plugin-item .plugin-footer span {
        font-size: 12px;
        color: #bebebe;
        line-height: 25px;
    }

    .plugin-item .btn.btn-primary,
    .role .btn.btn-primary,
    .modal .modal-dialog .modal-content .modal-body .plugin-buttons a,
    .plugin-item .plugin-footer a {
        padding: 5px 10px;
        border-radius: 4px;
        line-height: 10px;
        font-size: 12px;
    }

    .modal .modal-dialog .modal-content .modal-body .plugin-buttons a,
    .plugin-item .plugin-footer a {
        color: #fff;
        background-color: #fa4913;
        border-color: #fa4913;
        text-decoration: none;
    }

    .modal .modal-dialog .modal-content .modal-body .plugin-buttons a.install,
    .plugin-item .plugin-footer a.install{
        background-color: #01996b;
        border-color: #01996b;
    }

    .plugin-item .plugin-footer a.update{
        background-color: #00569cf3;
        border-color: #00569c;
    }

    .plugin-item .plugin-footer a.disable{
        background-color: #0a0c0ef3;
        border-color: #0a0c0ef3;
    }

    .plugin-item .plugin-footer a.uninstall{
        background-color: #db0012;
        border-color: #db0012;
    }

    .sp {
        height: 12px !important;
        width: 12px !important;
        background-color: #ffffff;
    }

    .plugin-item .plugin-footer a.plugin-footer {
        background-color: #00aeef;
        border-color: #00aeef;
    }

    .plugin-item .plugin-footer a.freelance {
        background-color: #92278f;
        border-color: #92278f;
    }

    .plugin-item .item-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 5px;
        background-color: #008def;
        color: #fff;
        opacity: 0;
        -webkit-transition: all 800ms;
        -moz-transition: all 800ms;
        -ms-transition: all 800ms;
        -o-transition: all 800ms;
        transition: all 800ms;
    }

    .plugin-item:hover .item-overlay {
        opacity: 1;
    }

    .item-overlay .plugin-info {
        padding: 45px 25px 40px;
        overflow: hidden;
    }

    .item-overlay .btn.btn-primary {
        background-color: #007bd4;
        border-color: #007bd4;
        margin-bottom: 10px;
    }

    .item-overlay .plugin-info,
    .item-overlay .plugin-info ul li,
    .item-overlay .plugin-info ul li i,
    .item-overlay .plugin-info .plugin-title a {
        color: #fff;
    }

    .plugin-info .plugin-thumbnail img {
        width: 100%;
        height: 150px;
    }

    .plugin-social {
        margin-top: 35px;
    }

    .plugin-social li {
        float: left;
    }

    .plugin-social li+li {
        margin-left: 15px;
    }

    .plugin-social li a i {
        margin-right: 0;
        font-size: 14px;
    }

    .plugin-social li a {
        width: 35px;
        height: 35px;
        text-align: center;
        display: block;
        background-color: #007bd4;
        line-height: 35px;
        border-radius: 100%;
        border: 1px solid #007bd4;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .plugin-social li:last-child a {
        background-color: #fff;
    }

    .plugin-social li:last-child a i {
        color: #008def;
    }

    .plugin-social li a:before {
        position: absolute;
        content: "";
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        border-radius: 100%;
        background-color: #008def;
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
    }

    .plugin-social li a:hover:before {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        padding: 5px;
    }

    .plugin-social li a:hover {
        border-color: #fff;
    }

    .plugin-social li a:hover i {
        color: #fff;
    }

    .modal-left-col {
        position: fixed;
        background-color: #efefef;
        height: 100%;
    }


    @media (max-width: 500px){
        .modal-left-col {
            position: unset !important;
        }
    }
</style>
