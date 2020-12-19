
<html>
<head>
  <title>Kode Bottle</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="Kodebottle, CodingStudentProject, Coding Student Project, Branding, Software, Apps, Web Apps">
  <meta name="description" content="">
  
  <meta property="og:title" content="Kodebottle: Increase value with code"/>
  <meta property="og:description" content=""/>
  <meta property="og:image" content="image/cropped-kodebottle-logo-full-png-3.png"/>
  
  <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Days+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Marvel" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bellefair|Chathura|Codystar|Faster+One|Life+Savers|Tulpen+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
  <link rel="stylesheet" href="css/flickity.css">
  <link rel="stylesheet" href="css/footloose.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/contact.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/flickity@2.2.1/dist/flickity.pkgd.min.js"></script>
  <script src="js/kodebottle.js"></script>
  <script type="text/javascript" src="sw_app.js"></script>
  <script type="text/javascript">
      $("document").ready(function(){
            const VISION= "To be the company of choice for quality clients and the delivery of the best integrated communications solutions for maximum benefit and increase in value.";
            const PROCESS=`We identify and scope integrated communications solutions in line with client needs.
                            We build long-term, value-adding relationships with our clients based on the knowledge of their goals, business strategies, philosophies, imperatives and needs.
                            We equip and retaining a skilled, sustainable and effective team of qualified people who are committed to kodebottle’ vision.`;
            const VALUES=`<div id="tie--me">
                          <h4 class="h4">Integrity</h4> – We believe that whatever is what doing is worth doing well – if we say it, we do it! It’s our integrity. Our service delivery is well packaged to suit your social and business needs. You imagine it, we create it.<br/>
                          <h4 class="h4">Transparency</h4> – We boast in the transparency and openness of our system. Our terms of operations and practices are publicly visible, giving credibility and eliminating the possibility of irregularities in agreement.<br/>
                          <h4 class="h4">Reliability</h4> – Our words would always match our services, delivered with top notch quality and in good time. Our services can be relied upon.<br/>
                          <h4 class="h4">Innovation</h4> – We take two steps ahead of the crowd at every instance to provide outstanding and world class services to our esteemed clients.<br/>
                          <h4 class="h4">Leadership</h4> – As a leading venture in branding, we set the pace, and constantly remain relevant with our clients’ satisfaction in view
                    </div>
            `;
            const images=["img_1.jpg", "img_2.png", "img_3.png", "img_4.jpg", "img_5.jpg","img_6.png"];
            const link=["a","b","c","d","e","f"];
            const total=6;
            var $carousel = $('.carousel').flickity({
                                                                            prevNextButtons: false,
                                                                            pageDots: false,
                                                                            fullscreen: true,
                                                                            wrapAround: true,
                                                                            contain: true
                                                                          });
            var flkty=$carousel.data("flickity");
            $carousel.on( 'select.flickity', function() {
                  if(flkty.selectedIndex==0){
                      $("title").html("kodebottle Inc. - ...increasing value.");
                      $(".ladybird_home").show();
                      $(".ladybird_about2").hide();
                      $(".ladybird_about").hide();
                      $(".ladybird_contact").hide();
                  }else if(flkty.selectedIndex==1){
                      $("title").html("Our Company | kodebottle");
                      $(".ladybird_home").hide();
                      $(".ladybird_about2").hide();
                      $(".ladybird_about").show();
                      $(".ladybird_contact").hide();
                  }else if(flkty.selectedIndex==2){
                      $("title").html("Our Company | kodebottle");
                      $(".ladybird_home").hide();
                      $(".ladybird_about2").show();
                      $(".ladybird_about").hide();
                      $(".ladybird_contact").hide();
                  }else if(flkty.selectedIndex==3){
                      $("title").html("Our Contact | kodebottle");
                      $(".ladybird_home").hide();
                      $(".ladybird_about2").hide();
                      $(".ladybird_about").hide();
                      $(".ladybird_contact").show();
                  }
            });
            page("#home",0);
            page("#about",1);
            page("#turn",1);
            page("#next",2);
            page("#contact",3);
            page("#contact-button #msg",3);
            page("#msg",3);
            page(".contact-acc",0);
            function windowFunction(){
              if(/contact/.test(window.location)){
                $("#contact").trigger("click");
              }else if(/home/.test(window.location)){
                $("#home").trigger("click");
              }else if(/services/.test(window.location)){
                $("#about").trigger("click");
              }else if(/about/.test(window.location)){
                $("#next").trigger("click");
              }
            }
            windowFunction();
            $("body").delegate(".soo","click",function(event){
                event.preventDefault();
                window.location.href=$(this).attr("href");
                windowFunction();
            });
            keys("#vision",VISION).then(function(){
                changeActive("#process","#core-values","#vision");
                $('<style>#tie:before{background-image:  url("/image/vision.png")}</style>').appendTo("#tie");
            });
            keys("#process",PROCESS).then(function(){
                changeActive("#vision","#core-values","#process");
                $('<style>#tie:before{background-image:  url("/image/process.png")}</style>').appendTo("#tie");
            });
            keys("#core-values",VALUES).then(function(){
                changeActive("#process","#vision", "#core-values");
                $("#tie--me").css({
                              "font-size": "9.5px",
                              "font-weight": "lighter",
                              "overflow": "auto",
                              "text-align": "justify",
                              "line-height": "normal",
                              "spacing": "normal",
                              "font-stretch": "ultra-condensed",
                              "font-weight": "lighter"
                });
                $('<style>#tie:before{background-image:  url("/image/integrity.png")}</style>').appendTo("#tie");
            });
            function changeActive(x,y,z){
              $(z).addClass("active");
              if($(x).hasClass("active")) $(x).removeClass("active");
              if($(y).hasClass("active")) $(y).removeClass("active");
            }
            function page(id,index){
              $(id).on("click",function(event){
                event.preventDefault();
                $carousel.flickity("select", index);
                $("html, body").animate({ scrollTop: 0 }, "slow");
              })
            }
            function keys(id, text){
              return new Promise(function(resolve,reject){
                $(id).on("click",function(){
                  $("#mitch").animate({
                    opacity: "0"
                  }, 1200, "linear", function() {
                    $("#mitch").html(text);
                    $("#mitch").css("opacity",1);
                    resolve();
                  });
                });
              });
            }

            console.log("vicksemmanuuel58@gmail.com");
            function pixel(){
              setInterval(pix, 5000);
            }
            function pix(x){
              var x=Math.floor((Math.random() * total) + 1);
              for(var i=1; i<=4; i++){
                  if(++x>total){
                      x=1;
                  }
                  $("._xx"+i).animate({
                    opacity: "0.5"
                  }, 1200, "linear", function() {
                    $(this).css("opacity",1);
                  });
                  $("._xx"+i).attr("src", "image/"+images[x-1]);
                  $(".liniking").attr("href", link[x-1]);
                  $(".liniking").attr("title", link[x-1]);
                  $(".liniking .deep").html(link[x-1]);
              }
            }
            pixel();
            hover(".vim",".feedme",".vim","orange","#750000");
            hover(".mix-icon","#settings",".mix-icon", "#750000","orange");
            function hover(id, child, parent, color1, color2){
              $(id).on("mouseover",function(){
                $(this).css({
                  "background-color": color2,
                  "transition": "0.4s",
                });
                $(this).children(child).css({
                  "fill": color1,
                  "transition": "0.4s",
                });
              })
              $(id).on("mouseout",function(){
                $(this).css({
                  "background-color": color1,
                  "transition": "0.4s",
                });
                $(this).children(child).css({
                  "fill": color2,
                  "transition": "0.4s",
                });
              })
              $(child).on("mouseover",function(){
                $(this).parent(parent).css({
                  "background-color": color2,
                  "transition": "0.4s",
                });
                $(this).css({
                  "fill": color1,
                  "transition": "0.4s",
                });
              })
              $(child).on("mouseout",function(){
                $(this).parent(parent).css({
                  "background-color": color1,
                  "transition": "0.4s",
                });
                $(this).css({
                  "fill": color2,
                  "transition": "0.4s",
                });
              })
            }
      });
  </script>
</head>
<body>
      <div id="menu">
        <div id="kodebottle">
          <span id="icon">
              <svg version="1.1" id="iconify" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  width="437.953px" height="437.953px" viewBox="0 0 437.953 437.953" enable-background="new 0 0 437.953 437.953"
                  xml:space="preserve">
                <g>
                  <path d="M181.447,140.277c25.881,2.483,51.729,17.071,70.936,40.041l0.119,0.143c1.854,2.176,14.148,15.06,19.121,19.637
                    l0.561,0.497c11.563,9.828,24.365,16.979,39.146,21.861l6.566,2.169l-0.004-88.814c-0.063-22.089-13.672-37.238-25.682-50.604
                    c-9.736-10.837-18.15-20.202-18.207-31.158c2.408-1.581,4.004-4.308,4.004-7.399c0-3.158-1.67-5.928-4.168-7.492V10.642
                    C273.842,4.775,269.069,0,263.199,0h-42.451c-5.868,0-10.643,4.774-10.643,10.642v28.514c-2.498,1.563-4.167,4.334-4.167,7.492
                    c0,3.092,1.596,5.818,4.004,7.399c-0.058,10.956-8.47,20.321-18.203,31.159c-11.816,13.154-25.208,28.063-25.665,49.623
                    l-0.111,5.229l5.229-0.123C174.691,139.853,178.188,139.964,181.447,140.277z"/>
                  <path d="M314.494,359.32c-1.484-3.6-3.172-7.678-4.896-12.299c-12.924-34.649-5.34-56.393,1.352-75.569
                    c3.27-9.375,6.355-18.229,6.869-27.718l0.283-5.275l-5.441,0.008c-3.521,0-7.02-0.164-10.383-0.484
                    c-23.979-2.303-47.131-12.6-63.52-28.25c-3.762-3.594-7.357-7.67-11.168-11.983c-5.535-6.271-11.258-12.755-18.352-18.824
                    c-10.888-9.309-22.831-16.199-36.516-21.066l-6.675-2.375v85.553c0,10.512,3.373,20.182,6.944,30.418
                    c6.69,19.18,14.274,40.92,1.352,75.568c-1.725,4.625-3.409,8.701-4.895,12.302c-4.517,10.935-7.778,18.835-7.457,29.761h0.012
                    c0.159,2.602,1.98,24.531,15.314,38.15c6.961,7.109,15.735,10.717,26.08,10.717c6.025,0,13.596-2.021,18.874-10.479
                    c4.512,4.777,10.588,8.457,19.697,8.457s15.188-3.68,19.697-8.457c5.277,8.457,12.85,10.479,18.873,10.479
                    c10.346,0,19.119-3.604,26.082-10.717c13.334-13.619,15.154-35.553,15.313-38.15h0.012
                    C322.274,378.158,319.01,370.256,314.494,359.32z"/>
                  <rect x="165.963" y="140.058" stroke="#000000" stroke-miterlimit="10" width="151.856" height="103.676"/>
                  <polyline id="iconify-bank" points="185.477,140.059 209.477,322.059 236.477,313.059 202.477,343.059 	"/>
                  <g>
                    <path id="iconify-bank" d="M208.066,188.277h3.963v14.803h0.137c0.82-1.184,1.64-2.277,2.414-3.279l9.382-11.524h4.919
                      l-11.113,13.027l11.979,17.672h-4.691L214.944,203.9l-2.915,3.371v11.706h-3.963V188.277z"/>
                    <path id="iconify-bank" d="M252.568,207.772c0,8.153-5.648,11.706-10.978,11.706c-5.966,0-10.566-4.373-10.566-11.341
                      c0-7.378,4.828-11.706,10.932-11.706C248.286,196.431,252.568,201.031,252.568,207.772z M235.077,208
                      c0,4.828,2.778,8.472,6.695,8.472c3.826,0,6.695-3.599,6.695-8.563c0-3.735-1.867-8.472-6.604-8.472
                      C237.127,199.437,235.077,203.809,235.077,208z"/>
                    <path id="iconify-bank" d="M276.664,186.638v26.646c0,1.958,0.045,4.19,0.182,5.693h-3.598l-0.183-3.826h-0.091
                      c-1.23,2.46-3.917,4.327-7.516,4.327c-5.329,0-9.429-4.509-9.429-11.205c-0.045-7.333,4.51-11.842,9.884-11.842
                      c3.371,0,5.648,1.594,6.65,3.371h0.091v-13.164H276.664z M272.656,205.904c0-0.501-0.045-1.184-0.182-1.685
                      c-0.593-2.551-2.778-4.646-5.785-4.646c-4.145,0-6.604,3.644-6.604,8.518c0,4.463,2.187,8.153,6.514,8.153
                      c2.688,0,5.146-1.776,5.876-4.782c0.137-0.547,0.182-1.093,0.182-1.731V205.904z"/>
                    <path id="iconify-bank" d="M285.546,208.683c0.091,5.42,3.553,7.652,7.562,7.652c2.869,0,4.6-0.501,6.103-1.139l0.684,2.869
                      c-1.412,0.638-3.826,1.366-7.333,1.366c-6.787,0-10.841-4.463-10.841-11.113s3.917-11.888,10.34-11.888
                      c7.196,0,9.109,6.331,9.109,10.385c0,0.82-0.091,1.458-0.137,1.867H285.546z M297.297,205.813
                      c0.046-2.551-1.047-6.514-5.557-6.514c-4.054,0-5.83,3.735-6.148,6.514H297.297z"/>
                  </g>
                </g>
                </svg>

          </span>
        </div>
         <ul id="list">
                  <li class="nav-link button wax" id="peruz">
                    <svg version="1.1" id="scape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 53.011 53.011" style="enable-background:new 0 0 53.011 53.011;" xml:space="preserve">
                      <path d="M52.963,21.297c-0.068-0.329-0.297-0.603-0.609-0.727c-2.752-1.097-5.67-1.653-8.673-1.653
                        c-4.681,0-8.293,1.338-9.688,1.942L19.114,8.2c0.52-4.568-1.944-7.692-2.054-7.828C16.881,0.151,16.618,0.016,16.335,0
                        c-0.282-0.006-0.561,0.091-0.761,0.292L0.32,15.546c-0.202,0.201-0.308,0.479-0.291,0.765c0.016,0.284,0.153,0.549,0.376,0.726
                        c2.181,1.73,4.843,2.094,6.691,2.094c0.412,0,0.764-0.019,1.033-0.04l12.722,14.954c-0.868,2.23-3.52,10.27-0.307,18.337
                        c0.124,0.313,0.397,0.541,0.727,0.609c0.067,0.014,0.135,0.021,0.202,0.021c0.263,0,0.518-0.104,0.707-0.293l14.57-14.57
                        l13.57,13.57c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414l-13.57-13.57
                        l14.527-14.528C52.929,21.969,53.031,21.627,52.963,21.297z"/>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      <g>
                      </g>
                      </svg>

                  </li>
                  <li class="nav-link" id="contact">
                    <button class="wax button" id="contact_butt" title="Contact">Contact</button>
                  </li>
                  <li class="nav-link button" id="about">
                    <button class="wax" id="about_butt" title="About">About</button>
                  </li>
                  <li class="nav-link button"  id="home">
                      <button class="wax" id="home_butt" title="Home">Home</button>
                  </li>
         </ul>
        <ul class="den">
        <li class="den-link-cancel">x</li>
          <li class="den-link-ps">Services</li>
          <li class="den-link dodgerblue" id="goto-codingstudentproject">
          <a class="class dodgerblue" href="/codingstudentproject/"><svg version="1.1" id="roar" class="dodgerblue" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 47.94 47.94" style="transition: 0.4s;" xml:space="preserve">
                                          <path d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757
                                          c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042
                                          c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685
                                          c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528
                                          c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956
                                          C22.602,0.567,25.338,0.567,26.285,2.486z"></path>
                                          <g>
                                          </g>
                                          <g>
                                          </g>
                                          <g>
                                          </g>
                                          <g>
                                          </g>
                                          <g>
                                          </g>
                                          <g>
                                          </g>
                                          <g>
                                          </g>
                                          <g>
                                          </g>
                                          <g>
                                          </g>
                                          <g>
                                          </g>
                                          <g>
                                          </g>
                                          <g>
                                          </g>
                                          <g>
                                          </g>
                                          <g>
                                          </g>
                                          <g>
                                          </g>
                                          </svg>  
            Coding Student Project
                    </a> </li>
          <li class="den-link yellowey" id="goto-branding">
          <a class="class yellowey" href="/branding/"><svg version="1.1" id="roar" class="yellowey" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                                              <g>
                                              <path d="M40.693,17.777H36v-5c0-1.654-1.346-3-3-3H1c-0.552,0-1,0.447-1,1s0.448,1,1,1h32c0.551,0,1,0.448,1,1v5H3.307
                                                C1.483,17.777,0,19.261,0,21.084v25.387c0,1.823,1.483,3.307,3.307,3.307h37.386c1.824,0,3.307-1.483,3.307-3.307V21.084
                                                C44,19.261,42.517,17.777,40.693,17.777z"></path>
                                              <path d="M56.234,17.332c-0.545,0-1.077,0.117-1.58,0.35L46,22.138v23.279l8.654,4.456c0.503,0.232,1.035,0.35,1.58,0.35
                                                c2.076,0,3.766-1.69,3.766-3.77V21.102C60,19.022,58.311,17.332,56.234,17.332z"></path>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              </svg>
            Branding
          
                    </a></li>
          <li class="den-link white" id="goto-web">
          <a class="class white" href="/webapps/"><svg version="1.1" id="roar" class="white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="522.468px" height="522.469px" viewBox="0 0 522.468 522.469" style="enable-background:new 0 0 522.468 522.469;" xml:space="preserve">
                                              <g>
                                              <g>
                                                <path d="M325.762,70.513l-17.706-4.854c-2.279-0.76-4.524-0.521-6.707,0.715c-2.19,1.237-3.669,3.094-4.429,5.568L190.426,440.53
                                                  c-0.76,2.475-0.522,4.809,0.715,6.995c1.237,2.19,3.09,3.665,5.568,4.425l17.701,4.856c2.284,0.766,4.521,0.526,6.71-0.712
                                                  c2.19-1.243,3.666-3.094,4.425-5.564L332.042,81.936c0.759-2.474,0.523-4.808-0.716-6.999
                                                  C330.088,72.747,328.237,71.272,325.762,70.513z"></path>
                                                <path d="M166.167,142.465c0-2.474-0.953-4.665-2.856-6.567l-14.277-14.276c-1.903-1.903-4.093-2.857-6.567-2.857
                                                  s-4.665,0.955-6.567,2.857L2.856,254.666C0.95,256.569,0,258.759,0,261.233c0,2.474,0.953,4.664,2.856,6.566l133.043,133.044
                                                  c1.902,1.906,4.089,2.854,6.567,2.854s4.665-0.951,6.567-2.854l14.277-14.268c1.903-1.902,2.856-4.093,2.856-6.57
                                                  c0-2.471-0.953-4.661-2.856-6.563L51.107,261.233l112.204-112.201C165.217,147.13,166.167,144.939,166.167,142.465z"></path>
                                                <path d="M519.614,254.663L386.567,121.619c-1.902-1.902-4.093-2.857-6.563-2.857c-2.478,0-4.661,0.955-6.57,2.857l-14.271,14.275
                                                  c-1.902,1.903-2.851,4.09-2.851,6.567s0.948,4.665,2.851,6.567l112.206,112.204L359.163,373.442
                                                  c-1.902,1.902-2.851,4.093-2.851,6.563c0,2.478,0.948,4.668,2.851,6.57l14.271,14.268c1.909,1.906,4.093,2.854,6.57,2.854
                                                  c2.471,0,4.661-0.951,6.563-2.854L519.614,267.8c1.903-1.902,2.854-4.096,2.854-6.57
                                                  C522.468,258.755,521.517,256.565,519.614,254.663z"></path>
                                              </g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              </svg>
            Web Apps Development
            </a>
          </li>
          <li class="den-link shell" id="goto-software">
          <a class="class shell" href="/apps/">
          <svg version="1.1" id="roar" class="shell" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="550.8px" height="550.8px" viewBox="0 0 550.8 550.8" style="enable-background:new 0 0 550.8 550.8;" xml:space="preserve">
                                              <g>
                                              <g id="adb">
                                                <path d="M96.9,372.3c0,99.45,79.05,178.5,178.5,178.5s178.5-79.05,178.5-178.5v-102h-357V372.3z M379.95,76.5l53.55-53.55
                                                  L413.1,2.55L354.45,61.2c-22.95-12.75-51-20.4-79.05-20.4s-56.1,7.65-79.05,17.85L137.7,0l-20.4,22.95l53.55,53.55
                                                  c-45.9,30.6-73.95,84.15-73.95,142.8v25.5h357v-25.5C453.9,160.65,425.85,107.1,379.95,76.5z M198.9,193.8
                                                  c-15.3,0-25.5-10.2-25.5-25.5s10.2-25.5,25.5-25.5s25.5,10.2,25.5,25.5S214.2,193.8,198.9,193.8z M351.9,193.8
                                                  c-15.3,0-25.5-10.2-25.5-25.5s10.2-25.5,25.5-25.5s25.5,10.2,25.5,25.5S367.2,193.8,351.9,193.8z"></path>
                                              </g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              </svg>
            Software/ Apps Development
                    </a>
                </li>
        </ul>
        <script>
                      $("#kodebottle").click(function(event){
                        event.preventDefault();
                        window.location.href="/";
                      });
                      $('body,html').click(function(event){
                        event.stopPropagation();
                        $(".den").css({"display":"none"});
                      });
                      $("#peruz").on("click",function(event){
                        event.stopPropagation();
                        $(".den").show();
                      });
                      $(".den-link-cancel").on("click",function(event){
                        event.stopPropagation();
                        $(".den").hide();
                      });
                  </script>
      </div>
      <div class="carousel">
         <div class="carousel-cell">
           <div id="content">
                   <div id="xy">
                       <div id="incyd" class="rum">
                           <h1 id="title">
                                <img src="image/cropped-kodebottle-logo-full-png-3.png" class="logo"/>
                           </h1>
                           <div id="work">Student Project | Software | Branding | Web</div>
                       </div>
                       <div id="services-in-single-view" class="rum">
                           <div class="floating">
                                Check Out Our Previous Work
                           </div>
                           <a href="https://umesieshop.com" title="http://umesieshop.com" target="_blank" class="liniking"><span class="deep">http://umesieshop.com</span>
                                <span class="open">
                                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="438.536px" height="438.536px" viewBox="0 0 438.536 438.536" style="enable-background:new 0 0 438.536 438.536;"
                                                xml:space="preserve">
                                                <g>
                                                <path d="M414.41,24.123C398.333,8.042,378.963,0,356.315,0H82.228C59.58,0,40.21,8.042,24.126,24.123
                                                C8.045,40.207,0.003,59.576,0.003,82.225v274.084c0,22.647,8.042,42.018,24.123,58.102c16.084,16.084,35.454,24.126,58.102,24.126
                                                h274.084c22.648,0,42.018-8.042,58.095-24.126c16.084-16.084,24.126-35.454,24.126-58.102V82.225
                                                C438.532,59.576,430.49,40.204,414.41,24.123z M387.433,177.295L286.938,277.797c-3.62,3.614-7.898,5.421-12.847,5.428
                                                c-2.279,0-4.572-0.479-6.852-1.43c-7.617-3.238-11.423-8.851-11.423-16.845v-45.68c-26.645,0-47.967,2.233-63.953,6.708
                                                c-15.987,4.474-28.358,11.656-37.115,21.553c-20.177,22.655-26.078,67.663-17.703,135.046c0.572,4.565-1.237,7.707-5.426,9.418
                                                c-1.141,0.575-2.378,0.855-3.709,0.855c-2.858,0-5.236-1.144-7.139-3.429c-31.785-42.442-47.679-80.894-47.679-115.341
                                                c0-11.423,0.479-21.937,1.429-31.553c0.95-9.605,2.996-20.225,6.136-31.829c3.14-11.613,7.373-21.986,12.703-31.123
                                                c5.33-9.132,12.612-18.218,21.844-27.263c9.229-9.045,20.08-16.562,32.546-22.557c12.465-5.996,27.93-10.846,46.394-14.561
                                                c18.461-3.71,39.018-5.568,61.672-5.568V63.948c0-7.996,3.806-13.61,11.417-16.847c7.426-3.23,13.989-1.903,19.704,3.997
                                                l100.495,100.5c3.621,3.617,5.428,7.901,5.428,12.85C392.86,169.397,391.054,173.68,387.433,177.295z"/>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                </svg>
                                </span>
                           </a>
                           <div id="ddd">
                                <img class="_xx1" src="image/img_1.jpg"/>
                                <img class="_xx2"  src="image/img_2.png"/>
                                <img class="_xx3" src="image/img_3.png"/>
                                <img class="_xx4" src="image/img_6.png"/>
                           </div>
                       </div>
                   </div>
             </div>
         </div>
         <div class="carousel-cell">
              <div id="about_container">
                <div  id="about_content">
                  <div id="jayz">
                    <div class="ad">
                        <div class="mix">
                            <div class="mix-icon">
                              <svg version="1.1" id="settings" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                               width="550.8px" height="550.8px" viewBox="0 0 550.8 550.8" style="enable-background:new 0 0 550.8 550.8;" xml:space="preserve"
                                              >
                                              <g>
                                              <g id="adb">
                                                <path d="M96.9,372.3c0,99.45,79.05,178.5,178.5,178.5s178.5-79.05,178.5-178.5v-102h-357V372.3z M379.95,76.5l53.55-53.55
                                                  L413.1,2.55L354.45,61.2c-22.95-12.75-51-20.4-79.05-20.4s-56.1,7.65-79.05,17.85L137.7,0l-20.4,22.95l53.55,53.55
                                                  c-45.9,30.6-73.95,84.15-73.95,142.8v25.5h357v-25.5C453.9,160.65,425.85,107.1,379.95,76.5z M198.9,193.8
                                                  c-15.3,0-25.5-10.2-25.5-25.5s10.2-25.5,25.5-25.5s25.5,10.2,25.5,25.5S214.2,193.8,198.9,193.8z M351.9,193.8
                                                  c-15.3,0-25.5-10.2-25.5-25.5s10.2-25.5,25.5-25.5s25.5,10.2,25.5,25.5S367.2,193.8,351.9,193.8z"/>
                                              </g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              </svg>
                            </div>
                        </div>
                        <div class="on">
                          <h2>Software</h2>
                          The end.
                          When it comes, there will be blood. The blood of your family. And who will we blame then?  Who?
                          Perhaps, your mother. Found love in the man you would hate to call “father.”  You weren't there when your father did not yet have the inferno in him: the hellrage that consumes a man from the inside out
                        </div>
                    </div>
                    <div class="ad">
                        <div class="mix">
                            <div class="mix-icon">
                              <svg version="1.1" id="settings" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 47.94 47.94" style="enable-background:new 0 0 47.94 47.94;" xml:space="preserve">
                                        <path  d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757
                                        c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042
                                        c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685
                                        c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528
                                        c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956
                                        C22.602,0.567,25.338,0.567,26.285,2.486z"/>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        </svg>
                            </div>
                        </div>
                        <div class="on">
                          <h2>Coding Student Project</h2>
                          The end.
                          When it comes, there will be blood. The blood of your family. And who will we blame then?  Who?
                          Perhaps, your mother. She never said anything after all, did she? Nothing about how love can moor one to a path paved with lies and the promise of destruction.
                          But, what do you even know?
                          You weren't there when she found love in the man you would hate to call “father.”  You weren't there when your father did not yet have the inferno in him: the hellrage that consumes a man from the inside out
                        </div>
                    </div>
                    <div class="ad">
                        <div class="mix">
                            <div class="mix-icon">
                              <svg version="1.1" id="settings" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                               width="522.468px" height="522.469px" viewBox="0 0 522.468 522.469" style="enable-background:new 0 0 522.468 522.469;"
                                               xml:space="preserve">
                                              <g>
                                              <g>
                                                <path d="M325.762,70.513l-17.706-4.854c-2.279-0.76-4.524-0.521-6.707,0.715c-2.19,1.237-3.669,3.094-4.429,5.568L190.426,440.53
                                                  c-0.76,2.475-0.522,4.809,0.715,6.995c1.237,2.19,3.09,3.665,5.568,4.425l17.701,4.856c2.284,0.766,4.521,0.526,6.71-0.712
                                                  c2.19-1.243,3.666-3.094,4.425-5.564L332.042,81.936c0.759-2.474,0.523-4.808-0.716-6.999
                                                  C330.088,72.747,328.237,71.272,325.762,70.513z"/>
                                                <path d="M166.167,142.465c0-2.474-0.953-4.665-2.856-6.567l-14.277-14.276c-1.903-1.903-4.093-2.857-6.567-2.857
                                                  s-4.665,0.955-6.567,2.857L2.856,254.666C0.95,256.569,0,258.759,0,261.233c0,2.474,0.953,4.664,2.856,6.566l133.043,133.044
                                                  c1.902,1.906,4.089,2.854,6.567,2.854s4.665-0.951,6.567-2.854l14.277-14.268c1.903-1.902,2.856-4.093,2.856-6.57
                                                  c0-2.471-0.953-4.661-2.856-6.563L51.107,261.233l112.204-112.201C165.217,147.13,166.167,144.939,166.167,142.465z"/>
                                                <path d="M519.614,254.663L386.567,121.619c-1.902-1.902-4.093-2.857-6.563-2.857c-2.478,0-4.661,0.955-6.57,2.857l-14.271,14.275
                                                  c-1.902,1.903-2.851,4.09-2.851,6.567s0.948,4.665,2.851,6.567l112.206,112.204L359.163,373.442
                                                  c-1.902,1.902-2.851,4.093-2.851,6.563c0,2.478,0.948,4.668,2.851,6.57l14.271,14.268c1.909,1.906,4.093,2.854,6.57,2.854
                                                  c2.471,0,4.661-0.951,6.563-2.854L519.614,267.8c1.903-1.902,2.854-4.096,2.854-6.57
                                                  C522.468,258.755,521.517,256.565,519.614,254.663z"/>
                                              </g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              </svg>
                            </div>
                        </div>
                        <div class="on">
                          <h2>Web</h2>
                          The end.
                          When it comes, there will be blood. The blood of your family. And who will we blame then?  Who?
                          Perhaps, your mother. She never said anything after all, did she? Nothing about how love can moor one to a path paved with lies and the promise of destruction.
                          But, what do you even know?
                          You weren't there when she found love in the man you would hate to call “father.”  You weren't there when your father did not yet have the inferno in him: the hellrage that consumes a man from the inside out
                        </div>
                    </div>
                    <div class="ad">
                        <div class="mix">
                            <div class="mix-icon">
                              <svg version="1.1" id="settings" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                               viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                                              <g>
                                              <path d="M40.693,17.777H36v-5c0-1.654-1.346-3-3-3H1c-0.552,0-1,0.447-1,1s0.448,1,1,1h32c0.551,0,1,0.448,1,1v5H3.307
                                                C1.483,17.777,0,19.261,0,21.084v25.387c0,1.823,1.483,3.307,3.307,3.307h37.386c1.824,0,3.307-1.483,3.307-3.307V21.084
                                                C44,19.261,42.517,17.777,40.693,17.777z"/>
                                              <path d="M56.234,17.332c-0.545,0-1.077,0.117-1.58,0.35L46,22.138v23.279l8.654,4.456c0.503,0.232,1.035,0.35,1.58,0.35
                                                c2.076,0,3.766-1.69,3.766-3.77V21.102C60,19.022,58.311,17.332,56.234,17.332z"/>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              </svg>
                            </div>
                        </div>
                        <div class="on">
                          <h2>Branding</h2>
                          The end.
                          When it comes, there will be blood. The blood of your family. And who will we blame then?  Who?
                          Perhaps, your mother. She never said anything after all, did she? Nothing about how love can moor one to a path paved with lies and the promise of destruction.
                          But, what do you even know?
                          You weren't there when she found love in the man you would hate to call “father.”  You weren't there when your father did not yet have the inferno in him: the hellrage that consumes a man from the inside out
                        </div>
                    </div>
                  </div>
                  <div id="beyonce">
                        <div id="next">
                          <svg version="1.1" id="next-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                              viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
                              <g>
                              <path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                              c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z
                              "/>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              <g>
                              </g>
                              </svg>
                        </div>
                  </div>
                </div>
              </div>
         </div>
         <div class="carousel-cell">
            <div id="about_2_container">
                <div id="turn">
                  <svg version="1.1" id="next-turn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            	 viewBox="0 0 477.175 477.175" style="enable-background:new 0 0 477.175 477.175;" xml:space="preserve">
                            <g>
                            	<path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                            		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                  </svg>
                </div>
                <div id="about2_about">
                    <h2 class="about_us">
                      <span>ABOUT</span>
                        kodebottle
                    </h2>
                    <p class="cont">
                      The end.
                      When it comes, there will be blood. The blood of your family. And who will we blame then?  Who?
                      Perhaps, your mother. Found love in the man you would hate to call “father.”  You weren't there when your father did not yet have the inferno in him: the hellrage that consumes a man from the inside out
                    </p>
                </div>
                <div id="about2_value">
                  <div class="theheader">
                      <div id="tie">
                        <span id="mitch">
                          To be the company of choice for quality clients and the delivery of the best integrated communications solutions for maximum benefit and increase in value.
                        </span>
                      </div>
                      <div id="shoe">
                          <button class="ween active" title="Our Vision" id="vision">Our Vision</button>
                          <button class="ween" title="Our Process" id="process">Our Process</button>
                          <button class="ween" title="Our Core Values" id="core-values">Our Core Values</button>
                      </div>
                  </div>
                  <div class="thefooter">
                      <ul id="contact_list">
                          <li class="buck">
                              <a href="http://instagram.com/kodebottle" data-title="Instagram" target="_blank" class="nav_">
                                <svg version="1.1" id="iconified" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                      width="169.063px" height="169.063px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;"
                                      xml:space="preserve">
                                      <g>
                                      <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                      c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                      c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                      c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
                                      <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                      C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                      c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
                                      <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                      c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                      C135.661,29.421,132.821,28.251,129.921,28.251z"/>
                                      </g>
                                      <g>
                                      </g>
                                      <g>
                                      </g>
                                      <g>
                                      </g>
                                      <g>
                                      </g>
                                      <g>
                                      </g>
                                      <g>
                                      </g>
                                      <g>
                                      </g>
                                      <g>
                                      </g>
                                      <g>
                                      </g>
                                      <g>
                                      </g>
                                      <g>
                                      </g>
                                      <g>
                                      </g>
                                      <g>
                                      </g>
                                      <g>
                                      </g>
                                      <g>
                                      </g>
                                      </svg>
                              </a>
                          </li>
                          <li class="buck">
                              <a href="http://linkedin.com/kodebottle" data-title="Linkedin" target="_blank" class="nav_">
                                <svg version="1.1" id="iconified" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                                        <g>
                                        <g>
                                          <path d="M20.379,10.252c0,5.315-3.924,9.62-10.381,9.62C3.924,19.872,0,15.568,0,10.252
                                            c0-5.443,4.051-9.621,10.252-9.621C16.455,0.631,20.254,4.809,20.379,10.252z M0.506,89.368V27.468h19.242v61.901H0.506z"/>
                                          <path  d="M31.262,47.215c0-7.721-0.252-14.176-0.504-19.747h16.707l0.889,8.608h0.379
                                            c2.531-4.053,8.734-10.002,19.115-10.002C80.506,26.074,90,34.556,90,52.784v36.585H70.758V55.063
                                            c0-7.976-2.785-13.417-9.748-13.417c-5.316,0-8.479,3.67-9.871,7.215c-0.508,1.265-0.635,3.038-0.635,4.811v35.697H31.262V47.215z
                                            "/>
                                        </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        </svg>
                              </a>
                          </li>
                          <li class="buck">
                              <a href="http://twitter.com/kodebottle" data-title="Twitter" target="_blank" class="nav_">
                                <svg version="1.1" id="iconified" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <g>
                                                	<g>
                                                		<path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
                                                			c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
                                                			c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
                                                			c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
                                                			c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
                                                			c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
                                                			C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
                                                			C480.224,136.96,497.728,118.496,512,97.248z"/>
                                                	</g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                </svg>
                              </a>
                          </li>
                          <li class="buck">
                              <a href="http://facebook.com/kodebottle" data-title="Facebook" target="_blank" class="nav_">
                                <svg version="1.1" id="iconified" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                        <g>
                                                        	<g>
                                                        		<path d="M288,176v-64c0-17.664,14.336-32,32-32h32V0h-64c-53.024,0-96,42.976-96,96v80h-64v80h64v256h96V256h64l32-80H288z"/>
                                                        	</g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        </svg>
                              </a>
                          </li>
                      </ul>
                  </div>
                </div>
            </div>
         </div>
         <div class="carousel-cell">
           <div id="about_2_container">
             <div class="contact-left">
               <div class="peel">
                 <div class="window">
                   <div class="name-box">
                    <input type="text" class="name-txt" name="" placeholder="Type Your Name"/>
                    <a class="name-btn" href="#">
                        <span class="name-icon">
                          <svg version="1.1" id="iconifest" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                       viewBox="0 0 299.997 299.997" style="enable-background:new 0 0 299.997 299.997;" xml:space="preserve">
                                                      <g>
                                                      <g>
                                                        <path d="M149.996,0C67.157,0,0.001,67.158,0.001,149.997c0,82.837,67.156,150,149.995,150s150-67.163,150-150
                                                          C299.996,67.156,232.835,0,149.996,0z M150.453,220.763v-0.002h-0.916H85.465c0-46.856,41.152-46.845,50.284-59.097l1.045-5.587
                                                          c-12.83-6.502-21.887-22.178-21.887-40.512c0-24.154,15.712-43.738,35.089-43.738c19.377,0,35.089,19.584,35.089,43.738
                                                          c0,18.178-8.896,33.756-21.555,40.361l1.19,6.349c10.019,11.658,49.802,12.418,49.802,58.488H150.453z"/>
                                                      </g>
                                                      </g>
                                                      <g>
                                                      </g>
                                                      <g>
                                                      </g>
                                                      <g>
                                                      </g>
                                                      <g>
                                                      </g>
                                                      <g>
                                                      </g>
                                                      <g>
                                                      </g>
                                                      <g>
                                                      </g>
                                                      <g>
                                                      </g>
                                                      <g>
                                                      </g>
                                                      <g>
                                                      </g>
                                                      <g>
                                                      </g>
                                                      <g>
                                                      </g>
                                                      <g>
                                                      </g>
                                                      <g>
                                                      </g>
                                                      <g>
                                                      </g>
                                                      </svg>
                        </span>
                    </a>
                    </div>
                  </div>
                  <div class="window">
                   <div class="name-box">
                      <input type="email" class="name-txt" name="" placeholder="Type Your Email"/>
                      <a class="name-btn" href="#">
                          <span class="name-icon">
                            <svg version="1.1" id="iconifest" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <rect x="64" y="64" style="fill:#ECEFF1;" width="384" height="384"/>
                                <polygon style="fill:#CFD8DC;" points="256,296.384 448,448 448,148.672 "/>
                                <path style="fill:#F44336;" d="M464,64h-16L256,215.616L64,64H48C21.504,64,0,85.504,0,112v288c0,26.496,21.504,48,48,48h16V148.672
                                	l192,147.68L448,148.64V448h16c26.496,0,48-21.504,48-48V112C512,85.504,490.496,64,464,64z"/>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                </svg>
                          </span>
                      </a>
                   </div>
                  </div>
                  <div class="window">
                    <div class="name-box">
                     <input type="text" class="name-txt" name="" placeholder="Type Your Phone Number"/>
                     <a class="name-btn" href="#">
                         <span class="name-icon">
                           <svg version="1.1" id="iconifest" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 480.56 480.56" style="enable-background:new 0 0 480.56 480.56;" xml:space="preserve">
                                  <g>
                                   <g>
                                     <path d="M365.354,317.9c-15.7-15.5-35.3-15.5-50.9,0c-11.9,11.8-23.8,23.6-35.5,35.6c-3.2,3.3-5.9,4-9.8,1.8
                                       c-7.7-4.2-15.9-7.6-23.3-12.2c-34.5-21.7-63.4-49.6-89-81c-12.7-15.6-24-32.3-31.9-51.1c-1.6-3.8-1.3-6.3,1.8-9.4
                                       c11.9-11.5,23.5-23.3,35.2-35.1c16.3-16.4,16.3-35.6-0.1-52.1c-9.3-9.4-18.6-18.6-27.9-28c-9.6-9.6-19.1-19.3-28.8-28.8
                                       c-15.7-15.3-35.3-15.3-50.9,0.1c-12,11.8-23.5,23.9-35.7,35.5c-11.3,10.7-17,23.8-18.2,39.1c-1.9,24.9,4.2,48.4,12.8,71.3
                                       c17.6,47.4,44.4,89.5,76.9,128.1c43.9,52.2,96.3,93.5,157.6,123.3c27.6,13.4,56.2,23.7,87.3,25.4c21.4,1.2,40-4.2,54.9-20.9
                                       c10.2-11.4,21.7-21.8,32.5-32.7c16-16.2,16.1-35.8,0.2-51.8C403.554,355.9,384.454,336.9,365.354,317.9z"/>
                                     <path d="M346.254,238.2l36.9-6.3c-5.8-33.9-21.8-64.6-46.1-89c-25.7-25.7-58.2-41.9-94-46.9l-5.2,37.1
                                       c27.7,3.9,52.9,16.4,72.8,36.3C329.454,188.2,341.754,212,346.254,238.2z"/>
                                     <path d="M403.954,77.8c-42.6-42.6-96.5-69.5-156-77.8l-5.2,37.1c51.4,7.2,98,30.5,134.8,67.2c34.9,34.9,57.8,79,66.1,127.5
                                       l36.9-6.3C470.854,169.3,444.354,118.3,403.954,77.8z"/>
                                   </g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  </svg>
                         </span>
                       </a>
                    </div>
                  </div>
                  <div class="window">
                     <div class="name-box-area">
                        <textarea class="name-txt-area" name="" placeholder="Type Your Description"></textarea>
                        <a class="name-btn" href="#">
                            <span class="name-icon">
                              <svg height="512pt" viewBox="-45 0 512 512" width="512pt" id="iconifest" xmlns="http://www.w3.org/2000/svg"><path d="m323.921875 413.992188v89.222656l89.21875-89.222656zm0 0"/><path d="m293.921875 383.992188h128.007813v-383.992188h-421.929688v512h293.921875zm7.921875-323.945313v30h-181.757812v-30zm-241.808594 331.855469v-30h120.90625v30zm120.90625 30.050781v30h-120.90625v-30zm180.949219-211.808594h-301.855469v-30h301.855469zm0-60.046875h-301.855469v-30h301.855469zm0 0"/></svg>
                            </span>
                        </a>
                     </div>
                   </div>
                  <div class="window">
                      <div class="name-box">
                         <button class="send-btn">Send Request</button>
                      </div>
                    </div>
                  <div class="window">
                        <div class="name-box">
                           <button class="cancel-btn">Cancel</button>
                        </div>
                    </div>
               </div>
               <div class="contacted">
                  <div class="footer-contact">
                        <span class="es-container">Stay Connected, Increase Your Value</span>
                        <span class="ed-container">
                            <span class="social-icon">
                                <a href="http://facebook.com/kodebottle" data-title="Facebook" class="facebook vim" target="_blank">
                                  <svg version="1.1" class="feedme" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                               viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                              <g>
                                              <g>
                                                <path d="M288,176v-64c0-17.664,14.336-32,32-32h32V0h-64c-53.024,0-96,42.976-96,96v80h-64v80h64v256h96V256h64l32-80H288z"/>
                                              </g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              <g>
                                              </g>
                                              </svg>
                                </a>
                                <a href="http://twitter.com/kodebottle" data-title="Twitter" class="twitter vim" target="_blank">
                                  <svg version="1.1" class="feedme" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                        <g>
                                                        <g>
                                                          <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
                                                            c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
                                                            c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
                                                            c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
                                                            c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
                                                            c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
                                                            C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
                                                            C480.224,136.96,497.728,118.496,512,97.248z"/>
                                                        </g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        <g>
                                                        </g>
                                                        </svg>
                                </a>
                                <a href="http://linkedin.com/kodebottle" data-title="Linkedin" class="linkedin vim" target="_blank">
                                  <svg version="1.1" class="feedme" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                                                <g>
                                                <g>
                                                  <path d="M20.379,10.252c0,5.315-3.924,9.62-10.381,9.62C3.924,19.872,0,15.568,0,10.252
                                                    c0-5.443,4.051-9.621,10.252-9.621C16.455,0.631,20.254,4.809,20.379,10.252z M0.506,89.368V27.468h19.242v61.901H0.506z"/>
                                                  <path d="M31.262,47.215c0-7.721-0.252-14.176-0.504-19.747h16.707l0.889,8.608h0.379
                                                    c2.531-4.053,8.734-10.002,19.115-10.002C80.506,26.074,90,34.556,90,52.784v36.585H70.758V55.063
                                                    c0-7.976-2.785-13.417-9.748-13.417c-5.316,0-8.479,3.67-9.871,7.215c-0.508,1.265-0.635,3.038-0.635,4.811v35.697H31.262V47.215z
                                                    "/>
                                                </g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                </svg>
                                </a>
                                <a href="http://instagram.com/kodebottle" data-title="instagram" class="instagram vim" target="_blank">
                                  <svg version="1.1" class="feedme" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        	 width="169.063px" height="169.063px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;"
                                        	 xml:space="preserve">
                                        <g>
                                        	<path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                        		c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                        		c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                        		c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
                                        	<path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                        		C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                        		c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
                                        	<path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                        		c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                        		C135.661,29.421,132.821,28.251,129.921,28.251z"/>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        </svg>
                                </a>
                            </span>
                        </span>
                        <hr class="ruler"/>
                        <div class="footer-block-one footer-block">
                            <section class="text-6">
                              <h2 class="widget">CONTACT US</h2>
                              <p class="textwidget">
                                  <strong>Email:</strong>
                                  &nbsp;
                                  <a href="#" class="contact-acc">contact@kodebottle.com</a>
                              </p>
                              <p class="textwidget">
                                  <strong>Call:</strong>
                                  &nbsp;
                                   (+234) 08074434878;<br/>  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                     &nbsp;  &nbsp; 08074434878;
                              </p>
                              <p class="textwidget">
                                  <strong>Online:</strong>
                                  &nbsp;
                                  @kodebottle
                              </p>
                            </section>
                        </div>
                        <div class="footer-block-one footer-block">
                            <section class="text-6">
                              <h2 class="widget">OUR SERVICES</h2>
                              <p class="textwidget">
                                  <strong>></strong>
                                  &nbsp;Branding
                              </p>
                              <p class="textwidget">
                                  <strong>></strong>
                                  &nbsp; Web & Apps
                              </p>
                              <p class="textwidget">
                                  <strong>></strong>
                                  &nbsp;Social Media
                              </p>
                              <p class="textwidget">
                                  <strong>></strong>
                                  &nbsp;E-Marketing
                              </p>
                              <p class="textwidget">
                                  <strong>></strong>
                                  &nbsp;PR
                              </p>
                            </section>
                        </div>
                        <div class="footer-block-about footer-block">
                            <section class="text-6">
                              <h2 class="widget">ABOUT kodebottle Inc</h2>
                              <p class="textwidget">
                                  <strong>Vision</strong>
                              </p>
                              <p class="textwidget">
                                  To be the company of choice for quality clients and to deliver the best integrated communications solutions for maximum benefit and the increase of their value.
                              </p>
                            </section>
                        </div>
                  </div>
               </div>
             </div>
             <div class="contact-right">

             </div>
           </div>
         </div>
       </div>
      <div id="footer">
               <div id="footer-content">
                     <span id="contact-us">Get our Services</span>
                     <span id="contact-button">
                       <svg version="1.1" id="msg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
                            <g>
                            <g>
                            <path d="M306,612c-28.152,0-55.284-3.672-81.396-11.016c-26.112-7.347-50.49-17.646-73.134-30.906
                             s-43.248-29.172-61.812-47.736c-18.564-18.562-34.476-39.168-47.736-61.812c-13.26-22.646-23.562-47.022-30.906-73.135
                             C3.672,361.284,0,334.152,0,306s3.672-55.284,11.016-81.396s17.646-50.49,30.906-73.134s29.172-43.248,47.736-61.812
                             s39.168-34.476,61.812-47.736s47.022-23.562,73.134-30.906S277.848,0,306,0c42.024,0,81.702,8.058,119.034,24.174
                             s69.768,37.944,97.308,65.484s49.368,59.976,65.484,97.308S612,263.976,612,306c0,28.152-3.672,55.284-11.016,81.396
                             c-7.347,26.109-17.646,50.487-30.906,73.134c-13.26,22.644-29.172,43.248-47.736,61.812
                             c-18.562,18.564-39.168,34.479-61.812,47.736c-22.646,13.26-47.022,23.562-73.136,30.906C361.284,608.328,334.152,612,306,612z
                              M453.492,179.928H163.404c-2.856,0-5.304,0.918-7.344,2.754s-3.06,4.386-3.06,7.65v32.436c0,1.632,0.612,2.448,1.836,2.448
                             l152.388,86.904l1.227,0.612c0.813,0,1.428-0.204,1.836-0.612l147.492-86.904c0.813-0.408,1.428-0.612,1.836-0.612
                             c0.405,0,1.02-0.204,1.836-0.612c1.632,0,2.448-0.816,2.448-2.448v-31.212c0-3.264-1.021-5.814-3.063-7.65
                             S456.348,179.928,453.492,179.928z M245.412,310.284c0.408-0.408,0.612-1.021,0.612-1.836c0-1.227-0.408-1.836-1.224-1.836
                             l-87.516-50.185c-1.224-0.408-2.244-0.408-3.06,0c-0.816,0-1.224,0.612-1.224,1.836v131.58c0,1.227,0.612,2.04,1.836,2.448h1.224
                             c0.816,0,1.224-0.204,1.224-0.612L245.412,310.284z M351.9,320.076c-0.408-1.227-1.431-1.428-3.063-0.612l-33.66,19.584
                             c-4.08,2.448-8.361,2.448-12.852,0l-29.376-16.521c-1.224-0.816-2.244-0.816-3.06,0l-111.996,104.04
                             c-0.408,0.405-0.612,1.224-0.612,2.445c0,0.408,0.408,1.021,1.224,1.836c2.448,0.816,4.08,1.227,4.896,1.227H450.43
                             c0.816,0,1.635-0.408,2.448-1.227c0-1.632-0.204-2.649-0.612-3.06L351.9,320.076z M462.06,253.98h-2.445l-83.232,49.572
                             c-0.813,0-1.224,0.612-1.224,1.836c-0.408,0.408-0.204,1.02,0.609,1.833L459,397.188c0.816,0.816,1.428,1.227,1.836,1.227h1.224
                             c1.227-1.227,1.839-2.04,1.839-2.448V256.429C463.896,255.612,463.284,254.796,462.06,253.98z"/>
                            </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            </svg>
                     </span>
               </div>
         </div>
      <div class="ladybird_home">
        <div class="our_services">
            <h2 class="services_header">Our Services</h2>
        </div>
        <div class="our_services_block">
            <div class="huncho">
                  <div class="huncho_in">
                        <div class="lead_software">
                            <div class="design"><img src="image/thought-catalog-740761-unsplash.jpg" class="lead_software_image"/></div>
                        </div>
                        <div class="lead_software_title">
                            <h2 class="lead_panel">Software</h2>
                            <div class="lead_pane"> Android Apps | Desktop Apps | IOS Apps</div>
                        </div>
                  </div>
                  <div class="huncho_out">
                      <div class="pick">
                            <p class="pick_text">
                                  High class HTML coding for responsive email marketing templates, coming with integration into email marketing software.
                            </p>
                            <button class="software_read_more" title="Get All Details In other for you to let us code your next App" id="appsaddress">More Details</button>
                            <script>
                              $("#appsaddress").click(function(){
                                window.location.href="/apps/";
                              })
                            </script>
                      </div>
                  </div>
            </div>
            <div class="huncho_">
                  <div class="huncho_in_">
                        <div class="lead_software_">
                            <div class="design_"><img src="image/john-paul-henry-307807-unsplash.jpg" class="lead_software_image_"/></div>
                        </div>
                        <div class="lead_software_title_">
                            <h2 class="lead_panel_">Student Project</h2>
                            <div class="lead_pane_">Web Project | Mobile Project | Desktop Project</div>
                        </div>
                  </div>
                  <div class="huncho_out_">
                      <div class="pick_">
                            <p class="pick_text_">
                                  High class HTML coding for responsive email marketing templates, coming with integration into email marketing software.
                            </p>
                            <button class="software_read_more_" id="codingstudentprojectaddress" title="Get All Details About Coding Student Project">More Details</button>
                            <script>
                              $("#codingstudentprojectaddress").click(function(){
                                window.location.href="/codingstudentproject/";
                              })
                            </script>
                      </div>
                  </div>
            </div>
            <div class="huncho quavo">
                  <div class="huncho_in">
                        <div class="lead_software">
                            <div class="design"><img src="image/hal-gatewood-613602-unsplash.jpg" class="lead_software_image"/></div>
                        </div>
                        <div class="lead_software_title">
                            <h2 class="lead_panel">Web</h2>
                            <div class="lead_pane"> Responsive Web | Web Development | PWA's</div>
                        </div>
                  </div>
                  <div class="huncho_out">
                      <div class="pick">
                            <p class="pick_text">
                                  High class HTML coding for responsive email marketing templates, coming with integration into email marketing software.
                            </p>
                            <button class="software_read_more" title="Get All Details">More Details</button>
                      </div>
                  </div>
            </div>
            <div class="huncho_ quavo_">
                  <div class="huncho_in_">
                        <div class="lead_software_">
                            <div class="design_"><img src="image/elijah-o-donnell-378338-unsplash.jpg" class="lead_software_image_"/></div>
                        </div>
                        <div class="lead_software_title_">
                            <h2 class="lead_panel_">Branding</h2>
                            <div class="lead_pane_"> Logos | Advert Postals</div>
                        </div>
                  </div>
                  <div class="huncho_out_">
                      <div class="pick_">
                            <p class="pick_text_">
                                  High class HTML coding for responsive email marketing templates, coming with integration into email marketing software.
                            </p>
                            <button class="software_read_more_" title="Get All Details About Our Branding Service" id="brandingaddress">More Details</button>
                            <script>
                              $("#brandingaddress").click(function(){
                                window.location.href="/branding/";
                              })
                            </script>
                      </div>
                  </div>
            </div>
        </div>
        <div class="get_it_done">
            <div class="squeeze">
              <div class="toget">
                <div class="over">
                  <div class="over_">
                    <img src="image/samuel-zeller-699374-unsplash.jpg" class="live"/>
                  </div>
                </div>
                <div class="yea">
                      <div class="peep">We Are Number One</div>
                </div>
              </div>
              <div class="gang">
                  <button class="main">Just Do It</button>
                </div>
            </div>
        </div>
      </div>
      <div class="ladybird_about"></div>
      <div class="ladybird_about2"></div>
      <div class="ladybird_contact"></div>
      <div class="quick_block">
      <div class="last">
						<div class="last-content">
							<div class="weepit">
								<ul class="orange">
									<li class="forward">
										<h6 class="qubit">Quick Link</h6>
										<ul class="ye">
											<li class="soup"><a class="tv" href="/">Home</a></li>
											<li class="soup"><a class="tv soo" href="/#about">About</a></li>
											<li class="soup"><a class="tv soo" href="/#contact">Contact</a></li>
											<li class="soup"><a class="tv soo" href="/#services">Services</a></li>
											<li class="soup"><a class="tv" href="/blog/">Blog</a></li>
											<li class="soup"><a class="tv" href="/">Our Policies</a></li>
										</ul>
									</li>
									<li class="forward">
										<h6 class="qubit">Services</h6>
										<ul class="ye">
											<li class="soup"><a class="tv" href="/codingstudentproject/">Coding Student Project</a></li>
											<li class="soup"><a class="tv" href="/branding/">Branding</a></li>
											<li class="soup"><a class="tv" href="/apps/">Software/ Apps</a></li>
											<li class="soup"><a class="tv" href="/webapps/">Web Apps</a></li>
										</ul>
									</li>
									<li class="forward">
										<h6 class="qubit">Get To Us</h6>
										<ul class="ye">
											<li class="soup"><span class="tv">+2348074434878</span></li>
											<li class="soup"><span class="tv">kodebottle@gmail.com</span></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
			</div>
      </div>
</body>
</html>
