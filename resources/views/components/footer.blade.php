<!DOCTYPE html>
<html>
    <head>
        <title>Bulma Simple footer</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">

      h1{
      margin-bottom: 55px !important;
      color: #fff !important;
      }
      .content ul{
      padding: 0;
      margin: 0;
      }
      .content ul li{
      list-style-type: none;
      text-align: center;
      padding: 5px;
      }
      .content ul li a{
      color: #fff;
      font-size: 18px;
      }
      .content ul li a:hover{
      color: #ddd;
      }
      h6{
      text-align: center;
      color: #fff !important;
      font-size: 30px !important;
      margin-bottom: 25px !important;
      }

      .fa{
      padding-right: 10px;
      font-size: 24px;
      cursor: pointer;
      }
      .control.has-icons-left .icon.is-left{
      left: 5px;
      }




    </style>
  </head>
  <body>
    <footer class="footer has-background-dark">
      <div class="content has-text-centered has-text-white">
        <div class="div" style="border-bottom: 1px solid #FFDB4A"></div>
        <h1><span style="color: #FFDB4A">A</span>lwase Here To Hel<span style="color: #FFDB4A">p</span></h1>
        <div class="columns">
          <div class="column">
            <h6><span style="color: #FFDB4A">A</span>bout <span style="color: #FFDB4A">U</span>s</h6>
            <p class="has-text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </p>
          </div>
          <div class="column">
            <h6><span style="color: #FFDB4A">C</span>ontact</h6>
            <ul>


               <div class="div m-3"><a href="http://mail.google.com/mail/"><i class="mdi fas fa-envelope-open-text" style="font-size: 1.4rem"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://mail.google.com/mail/">Gmail</a><br></div>
               <div class="div m-4"> <a href="http://facebook.com"> <i class="mdi fab fa-facebook-f" style="font-size: 1.4rem"></i> </a> &nbsp;&nbsp;&nbsp; <a href="http://facebook.com">Facebook</a> <br></div>
                <div class="div"><a href="http://twitter.com"> <i class="mdi fab fa-twitter" style="font-size: 1.4rem"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="http://twitter.com">Twitter</a> <br></div>
            </ul>
          </div>
          <div class="column">
            <h6><span style="color: #FFDB4A">F</span>AQ</h6>
            <ul>
              <li><a href="http://lmst.test/course">Enroll a new course</a></li>
              <li><a href="#">Get a course Certificate</a></li>
              <li><a href="#">Change profile picture</a></li>
              <li><a href="#">Payment methor</a></li>
              <li><a href="http://mail.google.com/mail/"><span style="color: #FFDB4A">Somthing Else!</span> contact our support team</a></li>
            </ul>
          </div>
          <div class="column">
            <h6><span style="color: #FFDB4A">C</span>ubscribe</h6>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-medium" type="email" placeholder="Email">
              <span class="icon is-left">
              <i class="fa fa-envelope"></i>
              </span>
            </div>
            <a class="button is-warning mt-5 is-rounded">Subscribe</a>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>

<div class="div colmuns" style="border-bottom: 1px solid #FFDB4A">
</div>
<style>
    .footer  {
                    background-color: #37424c;
                    color: #b2b9bf;
                    font-size: 16px;
                    min-height: 63px;
                }
                .footer-widget h3 {
                  margin-bottom: 20px;
                }
                .footer-widget .stats {
                  margin-top: 23px;
                }
                .footer-widget .stats .line {
                  font-size: 18px;
                  margin-top: 10px;
                }
                .footer-widget .stats .line .counter {
                  font-weight: 600;
                  float: left;
                  display: block;
                }
                .footer-widget .stats .line .caption {
                  color: #7b8690;
                  margin-left: 56px  ;
                  display: block;
                }

                /*Recent Post*/
                .recent-post {
                    list-style-type: none;
                    text-indent: -1.7em;
                }
                .recent-post li {
                    margin-top: 18px;
                }
                .recent-post li:before {
                    font-family: FontAwesome;
                    content: "\f097";
                    float: left;
                    width: 1.7em;
                }
                .recent-post a {
                    color: #ced8e1;
                    font-size: 16px;
                    margin-top: 10px;
                    text-decoration: none !important;
                }
                .recent-post a:hover {
                    color: #fbfbfb;
                }
                /* Tags */
                .tags {
                    list-style: none;
                    margin: 0 0 15px 0;
                    padding-left: 0;
                }
                .tags li {
                    float: left;
                }
                .tags li button {
                    padding: 4px 8px;
                    margin-right: 10px;
                    margin-bottom: 10px;
                    display: inline-block;
                    border: 0;
                    font-size: 18px;
                    color: inherit;
                    background-color: #4d5f6f;
                }
                .tags li button:hover,
                .tags li button:active {
                    color: #fff;
                    background-color: #00b9e8;
                    outline: none;
                    box-shadow: none !important;
                }
                a{
                    color: #ddd;
                }
                a:hover{
                    color: #fc3;
                }

    /*************Copyright Segment*************/
                .cpyright-footer { /*shared with header */
                    border-color: #333;
                    background-color: #333;
                    color: #ccc;
                    font-size: 16px;
                    min-height: 63px;
            text-align: center !important;

                }
                .cpyright-footer p{
                    position: absolute;
                    left: 45%;
            padding-top: 20px;
          }
        </style>
      <footer>

        <div class="cpyright-footer has-text-centered">

            <p class="social pull-left has-text-centered">Copyright &copy;  LMS 2021 </p>

        </div>

    </footer>
    <!-- End of Content -->
