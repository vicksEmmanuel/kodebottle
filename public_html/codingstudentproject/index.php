<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Kode Bottle</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="Kodebottle, Project, Student Project, Code, Coding Student Project, HTML, CSS, JavaScript, PHP, MYSQL, NodeJS, Computer Science, University Project, Undergraduates">
  <meta name="description" content="Kodebottle provides Coding Services For Undergraduate, Postgraduate or any other student whose projects involves codes should check out our services">
  <meta name="google-site-verification" content="Rb4VL2Xm8g6sMUW4I0CIzVacC_yeqSe9ZcFBHmEblVM" />
  
  <meta property="og:title" content="Kodebottle : CodingStudentProject Codes Student Project | Code Fixers"/>
  <meta property="og:description" content="Kodebottle provides Coding Services For Undergraduate, Postgraduate or any other student whose projects involves codes should check out our services"/>
  <meta property="og:image" content="../image/codingstudentproject.png"/>
  <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Days+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Marvel" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bellefair|Chathura|Codystar|Faster+One|Life+Savers|Tulpen+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
  <link rel="stylesheet" href="../css/flickity.css">
  <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="../css/about.css">
  <link rel="stylesheet" href="../css/contact.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <style>
	.thankyou{
		position:fixed;
		top:0px;
		display:none;
		width:100%;
		height:100%;
		background-color: rgba(0,0,0,.8);
		z-index: 1000;
	}
	.thankyou-content{
		position:relative;
		padding:10px;
		width:100%;
		height:100%;
	}
	.cancel-float{
		position:relative;
		font-size:100px;
		text-align:right;
		color:dodgerblue;
		font-weight:lighter;
		cursor:pointer;
	}
	.thankyou-header{
		position: relative;
		width:100%;
		font-size:30px;
		text-align:center;
		color:white;
	}
	.thankyou-body{
		position: relative;
		width:100%;
		font-size:14px;
		text-align:center;
		color:white;
	}
	.thankyou-image{
		position: relative;
		width:200px;
		height:100px;
		left:25%;
	}
	#loader{
		position:fixed;
		width:0%;
		display:none;
		height:5px;
		top:0px;
		margin:0px;
		border:0px;
		z-index:300;
		background-image: linear-gradient(to bottom left,#f08,#00004d);
	}
  	.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active {
		border: 1px solid #c5c5c5;
		background: dodgerblue;
		font-weight: normal;
		color: #ffffff;
	}
	.ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited, a.ui-button, a:link.ui-button, a:visited.ui-button, .ui-button {
		color: #ffffff;
		text-decoration: none;
	}
	.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
			border: 1px solid #003eff;
			background: #ffffff;
			font-weight: normal;
			color: dodgerblue;
		}
	.ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited {
		color: dodgerblue;
		text-decoration: none;
	}
	#tabs{
		border-bottom:0px;
	}
	.ui-tabs .ui-tabs-panel{
		padding:0px;
	}
  </style>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/flickity@2.2.1/dist/flickity.pkgd.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.5.8/firebase.js"></script>
  <link rel="stylesheet" href="../css/codingstudentproject.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css"/>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script src="js/codingstudentproject.js"></script>
  <script>
	$(document).ready(function(){
		$(".cancel-float").click(function(){
			$(".thankyou").fadeOut(1000);
		})
		$("#home").click(function(event){
			event.preventDefault();
			window.location.href="/";
		});
		$("#about").click(function(event){
			event.preventDefault();
			window.location.href="/#about";
		});
		$("#contact").click(function(event){
			event.preventDefault();
			window.location.href="/#contact";
		});
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
	  <div id="loader"></div>
	  <div class="thankyou">
			<div class="thankyou-content">
					<div class="cancel-float">x</div>
					<h4 class="thankyou-header">Thanks. We'll get back to you shortly</h4>
					<h6 class="thankyou-body">You could click on the refer button to invite other students through your link and get paid</h6>
					<img class="thankyou-image" src="../image/refer.png"/>
			</div>
	  </div>
	 <div id="content_wrapper">
		<div id="pick">
			<div id="header_content">
				<span id="header_text">Coding Student Project</span>
				<img src="../image/john-paul-henry-307807-unsplash.jpg" id="header_img">
			</div>
			<div id="tabs">
				<ul>
					<li><a href="#fragment-1"><span>Description</span></a></li>
					<li><a href="#fragment-2"><span>Order</span></a></li>
				</ul>
				<div id="fragment-1">
					<div id="why">
						<div class="why_content">
							<div class="weepit">
								<h4 class="why_content_header">Why We Code Student Project</h4>
								<div class="why_explained">Simply because we care for students without coding abilities. Here are some of the benefits you get by choosing us as your partner</div>
								<ul class="leap">
									<li class="foo">
										<div class="trick">
											<div class="team-two">
												<svg version="1.1" id="technical_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
																																																		<path style="fill:#0853A4;" d="M480.56,207.657c-9.44-53.092-37.437-102.011-78.831-137.743
																																																			c-44.138-38.1-100.828-59.083-159.63-59.083C108.605,10.831,0,117.615,0,248.867c0,67.831,29.506,132.474,80.992,177.643
																																																			c-5.22-11.108-8.152-23.505-8.152-36.592c0-47.567,38.55-86.129,86.106-86.129c25.873,0,49.063,11.431,64.846,29.5l-9.615-51.29
																																																			c-1.203-6.419,0.234-12.87,4.048-18.162c3.815-5.291,9.527-8.764,16.085-9.775l239.345-36.914c2.205-0.34,4.179-1.536,5.477-3.322
																																																			C480.429,212.041,480.945,209.821,480.56,207.657z"></path>
																																																		<path style="fill:#5BA6DD;" d="M72.84,389.918c0-47.567,38.55-86.129,86.106-86.129c25.873,0,49.063,11.431,64.846,29.5
																																																			l-9.615-51.29c-1.203-6.419,0.234-12.87,4.048-18.162c3.815-5.291,9.527-8.764,16.085-9.775l21.093-3.254
																																																			c-31.078-62.71-95.717-105.828-170.432-105.828c-23.254,0-45.529,4.183-66.125,11.825C6.715,185.141,0,216.246,0,248.867
																																																			c0,67.831,29.506,132.474,80.992,177.643C75.772,415.402,72.84,403.006,72.84,389.918z"></path>
																																																		<path style="opacity:0.1;enable-background:new    ;" d="M72.84,389.918c0-3.393,0.217-6.732,0.599-10.023
																																																			c-25.837-38.531-40.005-84.016-40.005-131.028c0-125.747,99.69-229.019,225.443-237.461c-5.568-0.379-11.164-0.575-16.779-0.575
																																																			C108.605,10.831,0,117.615,0,248.867c0,67.831,29.506,132.474,80.992,177.643C75.772,415.402,72.84,403.006,72.84,389.918z"></path>
																																																		<ellipse style="fill:#E02424;" cx="158.95" cy="389.914" rx="92.379" ry="92.4"></ellipse>
																																																		<g>
																																																			<ellipse style="fill:#FFFFFF;" cx="144.447" cy="233.158" rx="18.494" ry="18.183"></ellipse>
																																																			<ellipse style="fill:#FFFFFF;" cx="158.95" cy="389.914" rx="61.231" ry="61.252"></ellipse>
																																																		</g>
																																																		<path style="fill:#0853A4;" d="M195.564,389.916c0,20.231-16.393,36.632-36.618,36.632c-20.224,0-36.617-16.4-36.617-36.632
																																																			c0-20.227,16.393-36.628,36.617-36.628C179.171,353.288,195.564,369.689,195.564,389.916z"></path>
																																																		<path style="opacity:0.1;enable-background:new    ;" d="M143.82,389.916c0-16.486,10.893-30.427,25.873-35.022
																																																			c-3.399-1.042-7.007-1.606-10.747-1.606c-20.224,0-36.617,16.4-36.617,36.628c0,20.231,16.393,36.632,36.617,36.632
																																																			c3.74,0,7.348-0.564,10.747-1.606C154.712,420.348,143.82,406.407,143.82,389.916z"></path>
																																																		<path style="fill:#FFFFFF;" d="M71.55,309.322c-0.186-0.126-0.342-0.296-0.452-0.502l-11.863-22.066l-24.9-2.742
																																																			c-0.232-0.022-0.449-0.106-0.633-0.228c-0.242-0.164-0.432-0.4-0.537-0.687c-0.183-0.504-0.065-1.067,0.307-1.456l17.316-18.105
																																																			l-5.091-24.533c-0.11-0.522,0.089-1.067,0.511-1.394c0.421-0.329,0.994-0.392,1.476-0.161l22.567,10.882l21.753-12.427
																																																			c0.465-0.265,1.04-0.24,1.485,0.057c0.444,0.299,0.679,0.823,0.608,1.355l-3.373,24.829l18.539,16.856
																																																			c0.396,0.361,0.553,0.912,0.405,1.43c-0.148,0.51-0.576,0.898-1.101,0.995l-24.651,4.465l-10.296,22.841
																																																			c-0.219,0.49-0.698,0.811-1.233,0.83C72.083,309.574,71.792,309.487,71.55,309.322z"></path>
																																																		<path style="fill:#E02424;" d="M480.56,207.657c-3.925-22.072-11.068-43.423-21.038-63.405l-247.694,38.201
																																																			c-3.37,0.52-6.552,1.583-9.451,3.12c22.177,17.445,40.38,39.718,53.025,65.235l218.252-33.66c2.205-0.34,4.179-1.536,5.477-3.322
																																																			C480.429,212.041,480.945,209.821,480.56,207.657z"></path>
																																																		<path style="fill:#AAB0B5;" d="M487.524,357.979h-128.99l-21.239-112.814l153.242-25.056c4.272-0.698,7.168-4.726,6.47-8.998
																																																			c-0.699-4.273-4.731-7.174-8.999-6.469l-254.894,41.676c-8.65,1.333-16.195,5.928-21.249,12.938
																																																			c-5.078,7.048-6.993,15.638-5.392,24.187l5.818,31.033c7.336,5.2,13.88,11.442,19.417,18.513l-9.83-52.434
																																																			c-0.805-4.292,0.156-8.603,2.702-12.136c2.577-3.576,6.456-5.924,10.992-6.624l86.25-14.102l20.762,110.285H211.198
																																																			c2.953,4.823,5.246,10.091,6.78,15.673h127.559l5.161,27.413H219.147c-1.015,5.518-2.757,10.779-5.144,15.673h139.645l12.728,67.609
																																																			c1.776,9.431,10.684,16.821,20.279,16.821h106.893c10.173,0,18.451-8.279,18.451-18.454v-90.172v-9.596v-0.771
																																																			C512,368.833,501.02,357.979,487.524,357.979z M425.358,401.065h-7.698c-4.328,0-7.837,3.509-7.837,7.837
																																																			c0,4.329,3.509,7.837,7.837,7.837h7.698v68.756h-38.701c-2.076,0-4.492-2.005-4.877-4.047l-12.182-64.709h15.158
																																																			c4.328,0,7.837-3.508,7.837-7.837c0-4.328-3.509-7.837-7.837-7.837h-18.109l-5.161-27.413h63.871V401.065z M496.327,482.715
																																																			c0,1.507-1.272,2.78-2.777,2.78h-52.519v-68.756h46.493c3.102,0,6.069-0.58,8.802-1.625v67.601H496.327z M496.327,382.947v9.596
																																																			c0,4.699-3.949,8.522-8.802,8.522h-46.493v-27.413h46.493c4.854,0,8.802,3.823,8.802,8.523V382.947z"></path>
																																																		<g>
																																																		</g>
																																																		<g>
																																																		</g>
																																																		<g>
																																																		</g>
																																																		<g>
																																																		</g>
																																																		<g>
																																																		</g>
																																																		<g>
																																																		</g>
																																																		<g>
																																																		</g>
																																																		<g>
																																																		</g>
																																																		<g>
																																																		</g>
																																																		<g>
																																																		</g>
																																																		<g>
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
											<div class="team-report">
												<h4 class="tips">Technically Skilled Project Manager</h4>
												<div class="soup">
													We have skilled managers with coding experience, so they perfectly understand the specifications of any coding part of Student Project
												</div>
											</div>
										</div>
									</li>
									<li class="foo">
										<div class="trick">
											<div class="team-two">
												<svg version="1.1" id="technical_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
													<path style="fill:#FBB071;" d="M100.174,291.585V500.87h33.391V386.783c48.001,0,89.924-26.008,112.459-63.952
														c0,0,0.136-30.741,0.136-31.245C213.359,291.585,128.078,291.585,100.174,291.585z"></path>
													<path style="fill:#FF835D;" d="M432.029,314.798v95.154v24.135v66.783h33.391v-66.783v-24.135V313.31
														C454.568,313.31,444.98,314.798,432.029,314.798z"></path>
													<path style="fill:#FAE8AC;" d="M406.629,74.597l-0.504,168.613c0,23.274-3.533,49.888-7.487,70.19V347
														c11.945-1.08,23.174-4.036,33.391-8.647c12.952-5.846,24.28-14.349,33.391-25.043c15.273-17.927,24.319-42.014,24.319-70.098V74.203
														L406.629,74.597z"></path>
													<path style="fill:#FDF3D3;" d="M365.246,345.263l12.114-16.84l-0.504-55.003c-0.001,0-191.251-0.504-191.251-0.504
														c-1.01,12.615-0.331,26.24-0.331,38.487C185.275,311.401,365.245,345.264,365.246,345.263z"></path>
													<path style="fill:#F6D76F;" d="M196.841,188.969l-130.035,5.754c-20.192-14.079-33.415-37.459-33.415-63.941
														c0-43.03,34.883-77.913,77.913-77.913l14.934-16.315l-14.934-17.076C49.832,19.478,0,69.31,0,130.783
														c0,45.64,27.474,84.857,66.783,102.034v82.885l16.889,16.758l-16.889,16.633v1.516H33.391V500.87h33.391V386.783
														c11.544,0,22.735-1.512,33.391-4.324c37.976-10.023,69.139-36.656,85.101-71.058c4.69-10.109,8.062-20.888,9.914-32.111
														c9.088-10.411,25.235-29.587,32.805-39.679L196.841,188.969z"></path>
													<path style="fill:#FBB071;" d="M489.739,30.211v-3.975l-0.002,3.97L478.609,11.13h-66.783c-10.345,0-18.731,8.387-18.731,18.731
														c0,7.013,3.86,13.116,9.565,16.327l-35.356,135.237l-170.464,7.543v70.258c0,6.81-0.57,13.511-1.652,20.063l170.056,31.998v-0.313
														c0.001,0,0.001,78.592,0.001,78.592h-0.024l10.736,17.438l-10.736,15.952h0.024v77.913h33.391v-77.793l-9.974-15.881l9.974-17.786
														V313.4c12.836-1.668,24.41-6.486,33.847-14.315c15.393-12.755,23.864-32.601,23.864-55.875v-91.095v-33.391V85.333l33.391-11.13
														l1.142-0.381C502.497,69.95,512,56.765,512,44.522v-11.13L489.739,30.211z"></path>
													<path style="fill:#325763;" d="M140.782,52.87c9.22,0,16.696-7.475,16.696-16.696s-7.475-16.696-16.696-16.696h-29.478V52.87
														H140.782z"></path>
													<g>
														<rect x="241.363" y="211.233" style="fill:#05232E;" width="33.391" height="33.391"></rect>
														<rect x="308.87" y="244.625" style="fill:#05232E;" width="33.391" height="33.391"></rect>
														<rect x="364.522" y="211.233" style="fill:#05232E;" width="33.391" height="33.391"></rect>
														<rect x="365.223" y="389.565" style="fill:#05232E;" width="33.391" height="33.391"></rect>
														<rect x="432.028" y="434.087" style="fill:#05232E;" width="33.391" height="33.391"></rect>
														<rect x="422.957" y="118.728" style="fill:#05232E;" width="33.391" height="33.391"></rect>
													</g>
													<g>
														<rect x="115.111" y="248.921" style="fill:#325763;" width="33.391" height="33.391"></rect>
														<rect x="66.783" y="315.704" style="fill:#325763;" width="33.391" height="33.391"></rect>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
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
											<div class="team-report">
												<h4 class="tips">Speedy and Smooth WorkFlow</h4>
												<div class="soup">
													Coding Student Project are done in little time and with expertise handling your code, an efficient and smooth result workflow is gained
												</div>
											</div>
										</div>
									</li>
									<li class="foo">
										<div class="trick">
											<div class="team-two">
												<svg version="1.1" id="technical_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
																			<path style="fill:#368DCF;" d="M437,362h-60c-41.4,0-75,33.6-75,75v60c0,8.401,6.599,15,15,15h180c8.401,0,15-6.599,15-15v-60
																				C512,395.6,478.4,362,437,362z"></path>
																			<path style="fill:#2B75AD;" d="M512,437v60c0,8.401-6.599,15-15,15h-90V362h30C478.4,362,512,395.6,512,437z"></path>
																			<path style="fill:#CF0404;" d="M135,362H75c-41.4,0-75,33.6-75,75v60c0,8.401,6.599,15,15,15h180c8.401,0,15-6.599,15-15v-60
																				C210,395.6,176.4,362,135,362z"></path>
																			<path style="fill:#B80000;" d="M210,437v60c0,8.401-6.599,15-15,15h-90V362h30C176.4,362,210,395.6,210,437z"></path>
																			<path style="fill:#FF3F2E;" d="M105,272c-32.999,0-60,27.001-60,60s27.001,60,60,60s60-27.001,60-60S137.999,272,105,272z"></path>
																			<path style="fill:#4AB8F7;" d="M407,272c-32.999,0-60,27.001-60,60s27.001,60,60,60s60-27.001,60-60S439.999,272,407,272z"></path>
																			<path style="fill:#1EA1E3;" d="M467,332c0,32.999-27.001,60-60,60V272C439.999,272,467,299.001,467,332z"></path>
																			<path style="fill:#CF0404;" d="M165,332c0,32.999-27.001,60-60,60V272C137.999,272,165,299.001,165,332z"></path>
																			<path style="fill:#355382;" d="M406,36.301C396.7,32.1,386.499,30,376,30h-98.101c-7.5,0-13.799,5.7-14.7,13.2l-22.2,180
																				c-0.901,9,6,16.8,15,16.8h53.699l55.801,55.499C374.801,305.099,391,298.5,391,285v-46.5c5.099-0.901,10.201-2.701,15-4.801
																				c26.4-11.4,45-37.798,45-68.699v-60C451,74.099,432.4,47.701,406,36.301z"></path>
																			<path style="fill:#FFDA45;" d="M256,0H136c-10.499,0-20.7,2.1-30,6.301C79.6,17.701,61,44.099,61,75v90
																				c0,30.901,18.6,57.299,45,68.699c4.799,2.1,9.901,3.9,15,4.801V285c0,13.5,16.199,20.099,25.499,10.499L196,246.301l6.301-6.301H256
																				c41.4,0,75-33.6,75-75V75C331,33.6,297.4,0,256,0z"></path>
																			<path style="fill:#3F6199;" d="M251.499,85.499L196,141c-8.01,8.006-16.594,13.874-25.499,4.499l-30-30c-6-5.7-6-15.298,0-20.999
																				c5.7-6,15.298-6,20.999,0l19.5,19.199l15-15L230.501,64.5c5.7-6,15.298-6,20.999,0C257.5,70.201,257.5,79.799,251.499,85.499z"></path>
																			<g>
																			</g>
																			<g>
																			</g>
																			<g>
																			</g>
																			<g>
																			</g>
																			<g>
																			</g>
																			<g>
																			</g>
																			<g>
																			</g>
																			<g>
																			</g>
																			<g>
																			</g>
																			<g>
																			</g>
																			<g>
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
											<div class="team-report">
												<h4 class="tips">Support</h4>
												<div class="soup">
													Reliability is of utmost importance to us. If any bugs emerge in the future, just get in touch to get them fixed.
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="language">
						<div id="language-content">
							<div class="weepit">
								<h4 class="why_content_header">Supported Coding Languages</h4>
								<div class="why_explained">Coding language supported. Here are all the languages and development Student Project could be coded with</div>
								<ul class="prom">
									<li class="king">
										<img src="../image/icons8-source-code-filled-100.png" class="app_project">
										<h4 class="app_title">Web Apps Project</h4>
									</li>
									<li class="king">
										<svg version="1.1" class="app_project" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="548.172px" height="548.172px" viewBox="0 0 548.172 548.172" style="enable-background:new 0 0 548.172 548.172;" xml:space="preserve">
										<g>
											<path d="M534.75,49.965c-8.945-8.945-19.694-13.422-32.261-13.422H45.681c-12.562,0-23.313,4.477-32.264,13.422
												C4.471,58.913,0,69.663,0,82.226v310.633c0,12.566,4.471,23.315,13.417,32.265c8.951,8.945,19.702,13.414,32.264,13.414h155.318
												c0,7.231-1.524,14.661-4.57,22.269c-3.044,7.614-6.09,14.273-9.136,19.981c-3.042,5.715-4.565,9.897-4.565,12.56
												c0,4.948,1.807,9.24,5.424,12.847c3.615,3.621,7.898,5.435,12.847,5.435h146.179c4.949,0,9.233-1.813,12.848-5.435
												c3.62-3.606,5.427-7.898,5.427-12.847c0-2.468-1.526-6.611-4.571-12.415c-3.046-5.801-6.092-12.566-9.134-20.267
												c-3.046-7.71-4.569-15.085-4.569-22.128h155.318c12.56,0,23.309-4.469,32.254-13.414c8.949-8.949,13.422-19.698,13.422-32.265
												V82.226C548.176,69.663,543.699,58.913,534.75,49.965z M511.627,319.768c0,2.475-0.903,4.613-2.711,6.424
												c-1.81,1.804-3.952,2.707-6.427,2.707H45.681c-2.473,0-4.615-0.903-6.423-2.707c-1.807-1.817-2.712-3.949-2.712-6.424V82.226
												c0-2.475,0.902-4.615,2.712-6.423c1.809-1.805,3.951-2.712,6.423-2.712h456.815c2.471,0,4.617,0.904,6.42,2.712
												c1.808,1.809,2.711,3.949,2.711,6.423V319.768L511.627,319.768z"></path>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
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

										<h4 class="app_title">Desktop Apps Project</h4>
									</li>
									<li class="king">
										<svg version="1.1" class="app_project" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="611.363px" height="611.363px" viewBox="0 0 611.363 611.363" style="enable-background:new 0 0 611.363 611.363;" xml:space="preserve">
											<g>
												<g id="android">
													<path d="M152.682,458.363c0,15.3,10.2,25.5,25.5,25.5h25.5v89.25c0,20.4,17.85,38.25,38.25,38.25s38.25-17.85,38.25-38.25v-89.25
														h51v89.25c0,20.4,17.85,38.25,38.25,38.25s38.25-17.85,38.25-38.25v-89.25h25.5c15.3,0,25.5-10.2,25.5-25.5v-255h-306V458.363z
														 M88.932,203.363c-20.4,0-38.25,17.851-38.25,38.25v178.5c0,20.4,17.85,38.25,38.25,38.25s38.25-17.85,38.25-38.25v-178.5
														C127.182,221.213,109.332,203.363,88.932,203.363z M522.432,203.363c-20.4,0-38.25,17.851-38.25,38.25v178.5
														c0,20.4,17.85,38.25,38.25,38.25s38.25-17.85,38.25-38.25v-178.5C560.682,221.213,542.832,203.363,522.432,203.363z
														 M394.932,55.463l33.15-33.15c5.1-5.1,5.1-12.75,0-17.85c-5.101-5.101-12.75-5.101-17.851,0l-38.25,38.25
														c-17.85-12.75-40.8-17.851-66.3-17.851s-48.45,5.101-68.85,15.3l-35.7-38.25c-5.1-2.55-15.3-2.55-20.4,0
														c-2.55,5.101-2.55,15.301,0,20.4l33.15,33.15c-35.7,28.05-61.2,71.399-61.2,122.399h306
														C458.682,126.863,433.182,80.963,394.932,55.463z M254.682,126.863h-25.5v-25.5h25.5V126.863z M382.182,126.863h-25.5v-25.5h25.5
														V126.863z"></path>
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

										<svg xmlns="http://www.w3.org/2000/svg" class="app_project" viewBox="0 0 24 24">
											<path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;-inkscape-font-specification:Sans" d="M 7 2 C 4.2507637 2 2 4.2507637 2 7 L 2 16.96875 C 2 19.717986 4.2507637 21.96875 7 21.96875 L 16.96875 21.96875 C 19.717986 21.96875 21.96875 19.717986 21.96875 16.96875 L 21.96875 7 C 21.96875 4.2507637 19.717986 2 16.96875 2 L 7 2 z M 7 4 L 16.96875 4 C 18.649514 4 19.96875 5.3192363 19.96875 7 L 19.96875 16.96875 C 19.96875 18.649514 18.649514 19.96875 16.96875 19.96875 L 7 19.96875 C 5.3192363 19.96875 4 18.649514 4 16.96875 L 4 7 C 4 5.3192363 5.3192363 4 7 4 z M 6.46875 9 C 6.1848756 9 5.96875 9.2321418 5.96875 9.5 C 5.96875 9.7678581 6.1848756 9.96875 6.46875 9.96875 C 6.7526243 9.96875 7 9.7678581 7 9.5 C 7 9.2321418 6.7526243 9 6.46875 9 z M 10.625 9.15625 C 9.113 9.15625 8.15625 10.21725 8.15625 11.90625 C 8.15625 13.59125 9.095 14.65625 10.625 14.65625 C 12.151 14.65625 13.0625 13.58825 13.0625 11.90625 C 13.0625 10.22125 12.144 9.15625 10.625 9.15625 z M 15.5625 9.15625 C 14.655713 9.2859277 14.09375 9.872875 14.09375 10.6875 C 14.09375 11.4555 14.52275 11.93525 15.46875 12.15625 L 16.125 12.3125 C 16.817 12.4755 17.125 12.726 17.125 13.125 C 17.125 13.588 16.653 13.90625 16 13.90625 C 15.301 13.90625 14.819 13.58975 14.75 13.09375 L 13.96875 13.09375 C 14.02675 14.02875 14.7775 14.625 15.9375 14.625 C 17.1765 14.625 17.96875 14.001 17.96875 13 C 17.96875 12.213 17.5095 11.77925 16.4375 11.53125 L 15.875 11.40625 C 15.193 11.24625 14.90625 10.998 14.90625 10.625 C 14.90625 10.153 15.32775 9.84375 15.96875 9.84375 C 16.57875 9.84375 16.9865 10.17425 17.0625 10.65625 L 17.875 10.65625 C 17.827 9.77425 17.03075 9.15625 15.96875 9.15625 C 15.826125 9.15625 15.692041 9.1377246 15.5625 9.15625 z M 10.625 9.9375 C 11.626 9.9375 12.25 10.69225 12.25 11.90625 C 12.25 13.11225 11.626 13.90625 10.625 13.90625 C 9.613 13.90625 9.03125 13.11325 9.03125 11.90625 C 9.03125 10.69225 9.632 9.9375 10.625 9.9375 z M 6.03125 10.96875 L 6.03125 14.625 L 6.9375 14.625 L 6.9375 10.96875 L 6.03125 10.96875 z" overflow="visible" font-family="Sans"></path>
										</svg>
										<h4 class="app_title">Android and IOS Apps Project</h4>
									</li>
								</ul>
								<div style="width:100%;float:left"></div>
								<ul class="leap">
									<li class="foo-project">
										<svg version="1.1" class="dripit" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 299.215 299.215" style="enable-background:new 0 0 299.215 299.215;" xml:space="preserve">
											<g id="XMLID_106_">
												<path id="XMLID_107_" d="M22.347,0c-2.75,0-4.799,2.241-4.555,4.98l23.184,260.047c0.244,2.739,2.611,5.582,5.262,6.318
													l98.381,27.316c2.65,0.736,6.986,0.736,9.637,0.002l98.68-27.361c2.65-0.735,5.02-3.578,5.264-6.316L281.422,4.98
													c0.246-2.739-1.805-4.98-4.555-4.98H22.347z M232.049,59.641c-0.219,2.443-0.598,6.684-0.842,9.423l-0.611,6.823
													c-0.246,2.738-0.596,6.654-0.781,8.701c-0.184,2.048-0.359,3.723-0.391,3.723c-0.031,0-2.307,0-5.057,0h-69.76
													c-2.75,0-5.023,0-5.053,0s-2.305,0-5.055,0h-36.74c-2.75,0-4.799,2.241-4.555,4.98l2.143,23.955c0.244,2.738,2.695,4.98,5.445,4.98
													H144.5c2.75,0,5.025,0,5.055,0s2.303,0,5.053,0h57.939c2.75,0,7.006,0,9.457,0c2.449,0,4.273,1.999,4.051,4.442
													c-0.223,2.443-0.604,6.685-0.848,9.423l-6.891,77.228c-0.246,2.739-0.557,6.238-0.691,7.776c-0.137,1.537-2.416,3.396-5.066,4.131
													l-58.133,16.119c-2.65,0.734-4.852,1.342-4.893,1.351c-0.041,0.009-2.242-0.586-4.893-1.321l-58.195-16.148
													c-2.65-0.735-5.018-3.578-5.262-6.317l-3.746-42.045c-0.244-2.739,1.807-4.98,4.557-4.98h5.311c2.75,0,7.25,0,10,0h7.92
													c2.75,0,5.199,2.241,5.445,4.98l1.469,16.459c0.244,2.739,2.615,5.566,5.271,6.283l27.221,7.351
													c2.654,0.717,4.836,1.304,4.848,1.304s2.193-0.588,4.848-1.305l27.27-7.369c2.654-0.717,5.027-3.545,5.273-6.283l2.957-32.976
													c0.246-2.739-1.803-4.98-4.553-4.98h-30.666c-2.75,0-5.023,0-5.053,0s-2.305,0-5.055,0H80.511c-2.75,0-5.199-2.242-5.443-4.98
													l-7.256-81.306c-0.244-2.739-0.623-6.979-0.842-9.423c-0.217-2.443,1.854-4.442,4.604-4.442H144.5c2.75,0,5.025,0,5.055,0
													s2.303,0,5.053,0h72.838C230.195,55.198,232.267,57.197,232.049,59.641z"></path>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
											</g>
											<g>
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

										<h6 class="drip">HTML</h6>
									</li>
									<li class="foo-project">
										<svg version="1.1" class="dripit" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 470.699 470.699" style="enable-background:new 0 0 470.699 470.699;" xml:space="preserve">
										<path d="M426.981,0H43.701C34.52,0,27.632,7.769,28.442,16.949L63.45,409.254c0.811,9.173,8.745,18.774,17.644,21.253
											l138.006,38.335c8.887,2.463,23.413,2.479,32.313,0.032l138.177-38.281c8.901-2.472,16.835-11.986,17.645-21.175l35.023-392.469
											C443.068,7.769,436.209,0,426.981,0z M360.51,141.611c-0.006,0.06-0.053,0.107-0.112,0.117c-0.06,0.01-0.118-0.021-0.144-0.077
											L252.13,185.96c-1.54,0.631-2.418,2.264-2.098,3.897c0.322,1.633,1.754,2.811,3.419,2.811h84.103c4.474,0,8.736,1.9,11.728,5.227
											c2.991,3.327,4.429,7.768,3.954,12.216l-13.141,123.273c-0.645,6.048-4.709,11.186-10.447,13.205l-89.269,31.41
											c-3.362,1.184-7.027,1.193-10.397,0.025l-88.852-30.778c-5.773-2-9.871-7.153-10.52-13.228l-5.957-55.828
											c-0.313-2.931,0.634-5.857,2.604-8.048c1.971-2.192,4.779-3.444,7.727-3.444h24.725c5.313,0,9.769,4.007,10.331,9.289l3.655,34.316
											l61.521,21.385l61.803-21.58l7.559-71.17H129.835c-5.297,0-9.746-3.985-10.327-9.25l-3.327-30.164
											c-0.508-4.601,2.088-8.982,6.366-10.745l111.837-46.109c1.269-0.523,1.99-1.868,1.724-3.214c-0.267-1.345-1.446-2.314-2.817-2.314
											H115.542c-3.545,0-6.518-2.677-6.888-6.201l-3.406-32.421c-0.205-1.951,0.428-3.898,1.741-5.357
											c1.313-1.458,3.184-2.291,5.146-2.291h246.379c1.973,0,3.852,0.842,5.166,2.313c1.314,1.472,1.938,3.434,1.715,5.394L360.51,141.611
											z"></path>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
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

										<h6 class="drip">CSS</h6>
									</li>
									<li class="foo-project">
										<svg version="1.1" class="dripit" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
											<g>
												<g>
													<path d="M488.534,4.267C486.4,2.133,484.267,0,480.001,0H32c-2.133,0-6.399,2.133-8.533,4.267
														c-2.134,2.134-2.133,4.267-2.133,8.533l42.667,426.667c0,4.267,4.267,8.533,6.399,8.533l192,64c2.133,0,2.133,0,4.267,0
														c2.133,0,2.133,0,4.267,0L441.6,448c4.267-2.133,6.399-4.267,6.399-8.533L490.666,12.8C490.668,10.668,490.668,6.4,488.534,4.267z
														 M256.001,386.134c0,2.133-2.134,6.4-4.267,8.533s-4.393,2.416-6.525,2.416l-2.007-0.283l-74.667-21.333
														c-4.267-2.133-6.399-4.267-8.533-8.533L149.335,313.6c-2.133-6.399,2.133-10.667,8.533-12.8
														c6.399-2.133,10.667,2.133,12.801,8.533l8.533,46.933l55.467,14.934V130.134H117.334c-6.399,0-10.667-4.267-10.667-10.667
														c0-6.399,4.267-10.667,10.667-10.667h128c6.399,0,10.667,4.267,10.667,10.667V386.134z M405.334,121.6l-10.667,42.667
														c-2.133,6.399-6.482,9.559-12.8,8.533c-6.658-1.08-9.208-6.435-8.533-12.801c0.804-7.594,6.399-29.866,6.399-29.866h-83.2V236.8
														H371.2c2.133,0,6.399,2.133,8.533,4.267c2.133,2.133,2.133,6.399,2.133,8.533l-21.333,117.333c0,4.267-4.267,6.399-6.399,8.533
														l-64,21.333c-2.133,0-9.884,2.95-14.934-6.399c-2.133-6.399,2.133-10.667,6.399-12.801l57.6-19.2l17.067-98.134h-72.534
														c-6.399,0-10.667-4.267-10.667-10.667v-128c0-6.399,4.267-10.667,10.667-10.667h106.667c4.267,0,7.187,0.912,9.975,2.067
														C406.289,115.449,405.334,119.467,405.334,121.6z"></path>
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

										<h6 class="drip">JavaScript</h6></li>
									
									<li class="foo-project">
										<svg version="1.1" class="dripit" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.998 511.998" style="enable-background:new 0 0 511.998 511.998;" xml:space="preserve">
																					<g>
																						<path style="fill:#DB380E;" d="M253.464,94.869c-23.658,16.639-50.471,35.498-64.838,66.699
																							c-24.954,54.435,51.062,113.812,54.311,116.313c0.755,0.581,1.659,0.871,2.56,0.871c0.957,0,1.915-0.327,2.693-0.979
																							c1.509-1.262,1.937-3.406,1.031-5.152c-0.275-0.53-27.561-53.53-26.547-91.552c0.359-13.243,18.892-28.266,38.512-44.171
																							c17.97-14.568,38.34-31.079,50.258-50.394c26.164-42.516-2.916-84.322-3.213-84.74c-1.155-1.622-3.287-2.209-5.11-1.41
																							c-1.821,0.804-2.83,2.773-2.414,4.72c0.059,0.277,5.714,27.923-10.022,56.406C284.203,73.25,269.959,83.268,253.464,94.869z"></path>
																						<path style="fill:#DB380E;" d="M353.137,113.617c1.669-1.257,2.159-3.55,1.15-5.38c-1.011-1.83-3.211-2.637-5.165-1.895
																							c-4.019,1.528-98.416,37.915-98.416,81.88c0,30.307,12.946,46.317,22.399,58.009c3.708,4.586,6.909,8.546,7.964,11.927
																							c2.97,9.743-4.066,27.353-7.025,33.317c-0.853,1.714-0.435,3.792,1.016,5.044c0.784,0.677,1.763,1.021,2.743,1.021
																							c0.834,0,1.672-0.248,2.396-0.752c1.623-1.128,39.667-28.026,32.844-60.433c-2.542-12.318-8.595-21.318-13.936-29.26
																							c-8.274-12.305-14.25-21.193-5.184-37.609C304.545,150.338,352.65,113.981,353.137,113.617z"></path>
																					</g>
																					<g>
																						<path style="fill:#73A1FB;" d="M107.418,298.236c-1.618,4.845-0.854,9.651,2.207,13.903c10.233,14.207,46.48,22.029,102.068,22.029
																							c0.003,0,0.005,0,0.007,0c7.532,0,15.484-0.148,23.629-0.44c88.875-3.181,121.839-30.869,123.199-32.046
																							c1.482-1.283,1.878-3.419,0.957-5.147c-0.922-1.727-2.909-2.595-4.808-2.072c-31.301,8.546-89.748,11.58-130.288,11.58
																							c-45.363,0-68.465-3.268-74.121-5.681c2.902-3.985,20.802-11.101,42.983-15.464c2.12-0.416,3.577-2.374,3.367-4.524
																							s-2.016-3.79-4.177-3.79C179.439,276.584,114.234,277.628,107.418,298.236z"></path>
																						<path style="fill:#73A1FB;" d="M404.812,269.718c-18.331,0-35.714,9.188-36.446,9.577c-1.695,0.908-2.555,2.852-2.09,4.72
																							c0.467,1.865,2.144,3.176,4.067,3.178c0.389,0,39.102,0.317,42.608,22.436c3.106,19.082-36.629,50-52.202,60.304
																							c-1.682,1.113-2.335,3.263-1.554,5.123c0.665,1.583,2.206,2.573,3.868,2.573c0.29,0,0.584-0.03,0.876-0.092
																							c3.696-0.791,90.406-19.899,81.238-70.384C439.584,276.213,420.138,269.718,404.812,269.718z"></path>
																						<path style="fill:#73A1FB;" d="M345.347,363.755c0.302-1.617-0.371-3.262-1.717-4.207l-20.791-14.563
																							c-1.014-0.71-2.295-0.933-3.485-0.618c-0.217,0.055-21.959,5.771-53.525,9.276c-12.528,1.405-26.56,2.147-40.582,2.147
																							c-31.558,0-52.192-3.708-55.197-6.428c-0.398-0.764-0.272-1.111-0.201-1.304c0.546-1.518,3.472-3.322,5.358-4.036
																							c2.083-0.771,3.206-3.033,2.558-5.157c-0.646-2.127-2.837-3.378-4.999-2.859c-20.856,5.033-31.054,12.071-30.312,20.918
																							c1.318,15.686,37.65,23.737,68.365,25.865c4.417,0.302,9.194,0.455,14.195,0.455c0.003,0,0.005,0,0.008,0
																							c51.074,0,116.55-16.025,117.204-16.188C343.825,366.666,345.044,365.375,345.347,363.755z"></path>
																						<path style="fill:#73A1FB;" d="M188.602,397.419c1.575-1.024,2.273-2.971,1.714-4.764c-0.557-1.793-2.234-2.971-4.118-2.946
																							c-2.795,0.074-27.349,1.182-29.068,16.815c-0.52,4.672,0.818,8.941,3.979,12.686c8.816,10.448,32.614,16.658,72.741,18.984
																							c4.747,0.285,9.569,0.428,14.334,0.428c51.015,0,85.373-15.973,86.812-16.653c1.395-0.66,2.315-2.031,2.397-3.571
																							s-0.687-3.001-2.003-3.806l-26.275-16.04c-0.912-0.556-2.003-0.74-3.043-0.527c-0.166,0.035-16.849,3.495-42.026,6.913
																							c-4.764,0.648-10.73,0.977-17.73,0.977c-25.15,0-53.124-4.109-58.489-6.8C187.749,398.613,187.848,397.975,188.602,397.419z"></path>
																						<path style="fill:#73A1FB;" d="M224.408,486.85c116.854-0.099,179.571-20.88,191.653-33.957c4.277-4.626,4.739-9.006,4.376-11.867
																							c-0.898-7.04-7.311-11.35-8.038-11.818c-1.754-1.128-4.108-0.833-5.476,0.745c-1.365,1.578-1.397,3.884-0.027,5.461
																							c0.737,0.948,1.163,2.535-0.992,4.692c-4.83,4.511-53.545,18.204-134.656,22.318c-11.111,0.577-22.765,0.871-34.636,0.873
																							c-72.623,0-125.772-9.948-132.749-15.744c2.689-3.864,21.489-10.037,41.482-13.529c2.253-0.393,3.775-2.516,3.426-4.776
																							c-0.349-2.259-2.432-3.814-4.709-3.519c-0.564,0.077-2.478,0.191-4.694,0.327c-32.988,2.014-71.109,6.503-73.098,23.5
																							c-0.604,5.179,0.935,9.881,4.576,13.973c8.909,10.01,34.516,23.319,153.558,23.319C224.406,486.85,224.406,486.85,224.408,486.85z"></path>
																						<path style="fill:#73A1FB;" d="M439.013,456.578c-1.652-0.764-3.604-0.378-4.836,0.952c-0.171,0.185-17.74,18.556-70.564,29.344
																							c-20.223,4.052-58.183,6.107-112.826,6.107c-54.745,0-106.838-2.154-107.357-2.176c-2.176-0.106-4.037,1.476-4.333,3.618
																							c-0.297,2.14,1.083,4.158,3.184,4.658c0.542,0.128,55.135,12.918,129.779,12.918c35.801,0,70.639-2.907,103.548-8.645
																							c61.361-10.757,65.657-41.183,65.81-42.473C441.632,459.078,440.662,457.342,439.013,456.578z"></path>
																					</g>
																					<g>
																					</g>
																					<g>
																					</g>
																					<g>
																					</g>
																					<g>
																					</g>
																					<g>
																					</g>
																					<g>
																					</g>
																					<g>
																					</g>
																					<g>
																					</g>
																					<g>
																					</g>
																					<g>
																					</g>
																					<g>
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

										<h6 class="drip">Java</h6></li>
									
									<li class="foo-project">
										<svg version="1.1" class="dripit" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
																		<path style="fill:#8F9ED1;" d="M512,256c0,15.485-1.379,30.647-4.012,45.369C486.578,421.115,381.9,512,256,512
																			c-94.856,0-177.664-51.587-221.884-128.24c-10.794-18.693-19.278-38.87-25.088-60.155C3.135,302.07,0,279.395,0,256
																			C0,114.615,114.615,0,256,0c116.694,0,215.144,78.075,245.979,184.842C508.5,207.433,512,231.309,512,256z"></path>
																		<g>
																			<path style="fill:#F2F2F2;" d="M130.173,178.239H35.892L9.028,323.605c5.81,21.285,14.294,41.462,25.088,60.155h8.746
																				l10.407-56.299h51.806c63.08,0,80.039-56.633,84.104-84.449C193.254,215.207,172.91,178.239,130.173,178.239z M143.851,247.703
																				c-2.309,15.768-13.96,47.877-49.716,47.877H59.162l15.632-84.605h35.6C145.095,210.975,146.16,231.936,143.851,247.703z"></path>
																			<path style="fill:#F2F2F2;" d="M501.979,184.842c-8.014-4.138-17.565-6.604-28.599-6.604h-94.281L341.117,383.76h44.951
																				l10.407-56.299h51.806c28.056,0,46.989-11.201,59.705-26.091C510.621,286.647,512,271.485,512,256
																				C512,231.309,508.5,207.433,501.979,184.842z M487.058,247.703c-2.309,15.768-13.96,47.877-49.727,47.877h-34.962l15.632-84.605
																				h35.6C488.302,210.975,489.367,231.936,487.058,247.703z"></path>
																			<path style="fill:#F2F2F2;" d="M309.238,178.919c-18.295,0-42.704,0-54.597,0l10.248-55.451h-44.766L182.14,328.984h44.766
																				l21.843-118.186c8.07,0,18.79,0,28.61,0c18.991,0,31.879,4.07,29.165,21.705c-2.713,17.635-18.313,95.636-18.313,95.636h45.444
																				c0,0,17.635-86.818,20.348-111.237C356.717,192.484,334.334,178.919,309.238,178.919z"></path>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
																		</g>
																		<g>
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

										<h6 class="drip">PHP</h6></li>
									
									<li class="foo-project">
										<svg version="1.1" class="dripit" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
															<g>
																<g>
																	<path d="M99.281,362.953c-4.294-2.147-8.971-0.357-12.881,4.294l-23.616,32.203l-23.616-32.203
																		c-3.074-4.4-8.703-5.28-12.882-4.294c-4.672,1.103-6.44,6.44-6.44,10.735v85.874c0,6.44,4.294,10.735,10.735,10.735
																		s10.735-4.294,10.735-10.735v-53.672l12.88,17.175c4.294,6.44,12.882,6.44,17.175,0l12.881-17.175v53.672
																		c-0.001,6.441,4.293,10.735,10.734,10.735c6.44,0,10.735-4.294,10.735-10.735v-85.874
																		C105.72,369.393,103.574,365.1,99.281,362.953z"></path>
																</g>
															</g>
															<g>
																<g>
																	<path d="M258.148,382.274c12.881,0,19.132,7.13,21.468,10.735c5.357,8.267,8.827,9.906,14.54,7.764
																		c7.044-2.642,7.422-6.038,6.929-9.91c-2.146-17.175-19.322-30.055-42.937-30.055c-23.616,0-42.937,15.029-42.937,32.203
																		c0,17.174,12.931,27.371,38.693,31.664l4.244,0.538c17.175,2.146,21.418,6.129,21.355,11.538
																		c-0.08,6.788-10.622,12.077-23.502,12.077c-12.882,0-19.079-6.92-21.468-10.735c-3.933-6.278-6.44-10.735-10.734-10.735
																		c-6.44,0-11.909,5.617-10.735,10.735c3.605,16.394,19.322,30.055,42.937,30.055c23.616,0,42.937-15.029,42.937-32.203
																		c0-17.175-12.605-27.609-38.369-31.902l-2.421-0.3c-19.322-2.146-21.479-8.002-21.468-10.735
																		C236.697,388.715,245.267,382.274,258.148,382.274z"></path>
																</g>
															</g>
															<g>
																<g>
																	<path d="M481.419,448.827h-32.203v-75.14c0-6.44-4.294-10.735-10.735-10.735c-6.44,0-10.735,4.294-10.735,10.735v85.874
																		c0,6.44,4.294,10.735,10.735,10.735h42.937c6.44,0,10.735-4.294,10.735-10.735C492.153,453.12,487.86,448.827,481.419,448.827z"></path>
																</g>
															</g>
															<g>
																<g>
																	<path d="M404.134,450.973c2.146-4.294,2.281-8.587,2.281-12.881l-0.135-42.936h-0.001c0-17.175-15.029-32.203-32.203-32.203
																		h-21.468c-17.175,0-32.203,15.029-32.203,32.203v42.937c0,17.175,15.029,32.203,32.203,32.203c5.367,0,16.101,0,21.468,0
																		c4.294,0,8.587-2.147,12.882-4.294c2.146,2.147,4.797,4.294,9.09,4.294c2.147,0,5.937-2.148,8.085-4.294
																		C408.428,461.706,408.428,455.267,404.134,450.973z M384.81,433.799v-0.001l-2.146-2.146c-4.294-4.294-10.735-4.294-15.029,0
																		c-4.294,4.294-4.294,10.735,0,15.029l2.146,2.147h-17.175c-6.44,0-10.735-4.294-10.735-10.735v-42.937
																		c0-6.44,4.294-10.735,10.735-10.735h21.468c6.44,0,10.735,4.294,10.735,10.735v38.642l0.001,0.001H384.81z"></path>
																</g>
															</g>
															<g>
																<g>
																	<path d="M185.154,405.891c-3.895-2.807-11.884-1.029-15.029,4.294l-12.882,23.616l-12.882-23.616
																		c-2.146-4.294-8.756-6.891-15.029-4.294c-4.436,1.837-7.073,8.72-4.294,15.029l19.322,38.643l-19.322,38.643
																		c-2.368,4.554,0.864,10.626,7.349,12.636c4.466,1.384,9.953,2.841,14.123-4.049l42.937-85.874
																		C191.594,416.625,190.081,409.442,185.154,405.891z"></path>
																</g>
															</g>
															<g>
																<g>
																	<path d="M406.781,125.457c-4.047-2.916-10.379-2.779-12.609-0.548c-33.457,20.074-82.529,31.227-138.292,31.227
																		s-107.064-11.152-138.292-31.227c-6.503-4.483-11.659-1.966-14.219-0.122c-4.047,2.916-6.709,5.367-4.697,13.334
																		c10.94,43.306,85.829,62.625,159.435,62.625s149.68-19.102,154.544-60.53C413.388,133.952,409.34,127.301,406.781,125.457z"></path>
																</g>
															</g>
															<g>
																<g>
																	<path d="M406.781,192.545c-4.047-2.916-10.379-2.779-12.609-0.548c-33.457,20.074-82.529,31.227-138.292,31.227
																		s-107.064-11.152-138.292-31.227c-6.503-4.483-11.659-1.966-14.219-0.122c-4.047,2.916-6.709,5.367-4.697,13.334
																		c10.94,43.306,85.829,62.625,159.435,62.625s149.68-19.101,154.544-60.529C413.388,201.041,409.34,194.39,406.781,192.545z"></path>
																</g>
															</g>
															<g>
																<g>
																	<path d="M406.781,260.306c-4.047-2.916-10.379-2.779-12.609-0.548c-33.457,20.074-82.529,31.227-138.292,31.227
																		s-107.064-11.152-138.292-31.227c-6.503-4.483-11.659-1.966-14.219-0.122c-4.047,2.916-6.709,5.367-4.697,13.334
																		c10.94,43.306,85.829,62.625,159.435,62.625s149.68-19.102,154.544-60.53C413.388,268.802,409.34,262.15,406.781,260.306z"></path>
																</g>
															</g>
															<g>
																<g>
																	<path d="M255.664,0C179.827,0,99.529,24.536,99.529,66.915c0,42.38,80.298,66.914,156.135,66.914s156.134-24.536,156.134-66.915
																		C411.798,24.534,331.5,0,255.664,0z"></path>
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

										<h6 class="drip">MySQL</h6></li>
									
									<li class="foo-project">
										<svg version="1.1" class="dripit" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
														<g>
															<g>
																<polygon points="311.216,253.989 308.544,265.616 315.722,265.616 318.394,253.989 		"></polygon>
															</g>
														</g>
														<g>
															<g>
																<path d="M256,0C114.84,0,0,114.84,0,256s114.84,256,256,256s256-114.84,256-256S397.16,0,256,0z M248.065,291.852
																	c-1.793,4.367-4.541,8.334-8.167,11.794c-3.588,3.422-7.73,6.333-12.312,8.652c-4.566,2.309-9.522,4.091-14.731,5.297
																	c-5.212,1.206-10.36,1.818-15.299,1.818c-8.701,0-16.776-1.762-23.999-5.236c-7.204-3.464-13.504-8.12-18.725-13.839
																	c-5.221-5.713-9.316-12.287-12.172-19.541c-2.858-7.25-4.307-14.724-4.307-22.212c0-7.163,1.366-14.307,4.061-21.232
																	c2.697-6.934,6.687-13.242,11.862-18.747c5.172-5.502,11.529-10.02,18.893-13.428c7.385-3.415,15.918-5.147,25.363-5.147
																	c11.309,0,21.264,2.375,29.59,7.059c8.346,4.699,14.656,11.014,18.755,18.768l0.512,0.967L220.998,245.6l-0.578-1.502
																	c-1.018-2.642-2.374-4.849-4.032-6.56c-1.68-1.728-3.56-3.121-5.588-4.137c-2.055-1.025-4.212-1.752-6.407-2.162
																	c-6.951-1.287-13.1-0.581-17.683,1.899c-3.121,1.687-5.712,3.915-7.706,6.622c-2.014,2.737-3.533,5.879-4.513,9.341
																	c-0.992,3.498-1.495,7.014-1.495,10.456c-0.001,3.862,0.579,7.61,1.725,11.142c1.136,3.517,2.811,6.659,4.979,9.341
																	c2.149,2.664,4.825,4.82,7.953,6.409c4.752,2.418,10.671,3.025,16.95,1.678c2.148-0.46,4.248-1.239,6.244-2.314
																	c1.977-1.064,3.781-2.456,5.364-4.138c1.556-1.657,2.808-3.73,3.719-6.158l0.526-1.401l28.02,16.741L248.065,291.852z
																	 M371.377,253.989h-0.001h-26.068l-2.672,11.626h20.46v25.225h-26.564l-6.656,27.598h-27.092l6.818-27.598h-7.162l-6.656,27.598
																	h-27.092l6.818-27.598h-17.836v-25.225h23.957l2.672-11.626h-18.35v-23.602h24.135l7.305-29.708h27.095l-7.468,29.708h7.159
																	l7.307-29.708h27.094l-7.468,29.708h20.265V253.989z"></path>
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

										<h6 class="drip">C#</h6></li>
									
									<li class="foo-project">
										<svg version="1.1" class="dripit" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 17.056 17.056" style="enable-background:new 0 0 17.056 17.056;" xml:space="preserve">
																	<g>
																		<g>
																			<path style="fill:#030104;" d="M11.298,8.02c1.295-0.587,1.488-5.055,0.724-6.371c-0.998-1.718-5.742-1.373-7.24-0.145
																				C4.61,2.114,4.628,3.221,4.636,4.101h4.702v0.412H4.637c0,0.006-2.093,0.013-2.093,0.013c-3.609,0-3.534,7.838,1.228,7.838
																				c0,0,0.175-1.736,0.481-2.606C5.198,7.073,9.168,8.986,11.298,8.02z M6.375,3.465c-0.542,0-0.981-0.439-0.981-0.982
																				c0-0.542,0.439-0.982,0.981-0.982c0.543,0,0.982,0.44,0.982,0.982C7.358,3.025,6.918,3.465,6.375,3.465z"></path>
																			<path style="fill:#030104;" d="M13.12,4.691c0,0-0.125,1.737-0.431,2.606c-0.945,2.684-4.914,0.772-7.045,1.738
																				C4.35,9.622,4.155,14.09,4.92,15.406c0.997,1.719,5.741,1.374,7.24,0.145c0.172-0.609,0.154-1.716,0.146-2.596H7.603v-0.412h4.701
																				c0-0.006,2.317-0.013,2.317-0.013C17.947,12.53,18.245,4.691,13.12,4.691z M10.398,13.42c0.542,0,0.982,0.439,0.982,0.982
																				c0,0.542-0.44,0.981-0.982,0.981s-0.981-0.439-0.981-0.981C9.417,13.859,9.856,13.42,10.398,13.42z"></path>
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

										<h6 class="drip">Python</h6></li>
									
									<li class="foo-project">
										<img src="../image/icons8-matlab-96.png" class="dripit">
										<h6 class="drip">Matlab</h6></li>
									
									<li class="foo-project">
										<img src="../image/icons8-nodejs-96.png" class="dripit">
										<h6 class="drip">Node JS</h6></li>
									
									<li class="foo-project">
										<img src="../image/icons8-angularjs-filled-100.png" class="dripit">
										<h6 class="drip">Angular JS</h6></li>
									
									<li class="foo-project">
										<img src="../image/icons8-c-programming-96.png" class="dripit">
										<h6 class="drip">C</h6></li>
									
									<li class="foo-project">
										<img src="../image/icons8-jquery-filled-100.png" class="dripit">
										<h6 class="drip">Jquery</h6></li>
									
									<li class="foo-project">
										<img src="../image/icons8-swift-filled-100.png" class="dripit">
										<h6 class="drip">Swift</h6></li>
									
									<li class="foo-project">
										<svg version="1.1" class="dripit" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 398.414 398.414" style="enable-background:new 0 0 398.414 398.414;" xml:space="preserve">
														<g>
															<g>
																<path style="fill:#010002;" d="M58.274,140.937C26.142,140.937,0,167.079,0,199.211c0,32.124,26.141,58.266,58.274,58.266
																	s58.274-26.141,58.274-58.266C116.548,167.079,90.406,140.937,58.274,140.937z M58.274,233.099
																	c-18.688,0-33.888-15.2-33.888-33.88c0-18.688,15.2-33.888,33.888-33.888s33.888,15.209,33.888,33.888
																	C92.162,217.891,76.961,233.099,58.274,233.099z"></path>
																<path style="fill:#010002;" d="M197.85,140.937c-32.132,0-58.274,26.141-58.274,58.274c0,32.124,26.141,58.266,58.274,58.266
																	s58.274-26.141,58.274-58.266C256.123,167.079,229.982,140.937,197.85,140.937z M197.85,233.099
																	c-18.688,0-33.888-15.2-33.888-33.88c0-18.688,15.2-33.888,33.888-33.888s33.888,15.209,33.888,33.888
																	C231.738,217.891,216.537,233.099,197.85,233.099z"></path>
																<path style="fill:#010002;" d="M340.14,140.937c-32.132,0-58.274,26.141-58.274,58.274c0,32.124,26.142,58.266,58.274,58.266
																	s58.274-26.141,58.274-58.266C398.414,167.079,372.272,140.937,340.14,140.937z M340.14,233.099
																	c-18.688,0-33.888-15.2-33.888-33.88c0-18.688,15.2-33.888,33.888-33.888s33.888,15.209,33.888,33.888
																	C374.028,217.891,358.828,233.099,340.14,233.099z"></path>
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

										<h6 class="drip">More Progamming Languages</h6></li>
									
								</ul>
							</div>	
						</div>
					</div>					
					<div id="feature">
						<div id="feature-content">
							<div class="weepit">
								<h4 class="why_content_header">Coding Student Project Features</h4>
								<div class="why_explained">Quality simply matters. Here are all the extras you get with Coding Student Project</div>
								<ul class="leap">
									<li class="foo">
										<div class="trick">
											<div class="team-two">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="technical_icon_2" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512">
																<g>
																	<path style="fill:#D8D5ED;" d="M508,398.68H4c-2.209,0-4-1.791-4-4V4c0-2.209,1.791-4,4-4h504c2.209,0,4,1.791,4,4v390.68   C512,396.889,510.209,398.68,508,398.68z"></path>
																	<path style="fill:#4FC6F5;" d="M256,398.68H4c-2.209,0-4-1.791-4-4V82.414h256V398.68z"></path>
																	<path style="fill:#50536E;" d="M512,82.414H0V4c0-2.209,1.791-4,4-4h504c2.209,0,4,1.791,4,4V82.414z"></path>
																	<g>
																		<circle style="fill:#FF2C5C;" cx="47.388" cy="40.692" r="15.453"></circle>
																		<circle style="fill:#FFD659;" cx="109.199" cy="40.692" r="15.453"></circle>
																		<circle style="fill:#4FC6F5;" cx="171.01" cy="40.692" r="15.453"></circle>
																	</g>
																	<g>
																		<path style="fill:#50536E;" d="M295.058,239.729h177.191c4.143,0,7.5-3.357,7.5-7.5s-3.357-7.5-7.5-7.5H295.058    c-4.143,0-7.5,3.357-7.5,7.5S290.915,239.729,295.058,239.729z"></path>
																		<path style="fill:#50536E;" d="M295.058,196.109h88.596c4.143,0,7.5-3.357,7.5-7.5s-3.357-7.5-7.5-7.5h-88.596    c-4.143,0-7.5,3.357-7.5,7.5S290.915,196.109,295.058,196.109z"></path>
																		<path style="fill:#50536E;" d="M472.249,261.64H295.058c-4.143,0-7.5,3.357-7.5,7.5s3.357,7.5,7.5,7.5h177.191    c4.143,0,7.5-3.357,7.5-7.5S476.392,261.64,472.249,261.64z"></path>
																		<path style="fill:#50536E;" d="M472.249,298.55H295.058c-4.143,0-7.5,3.357-7.5,7.5s3.357,7.5,7.5,7.5h177.191    c4.143,0,7.5-3.357,7.5-7.5S476.392,298.55,472.249,298.55z"></path>
																	</g>
																	<path style="fill:#E89776;" d="M76.748,433.12L76.748,433.12c0,4.191,3.375,7.588,7.538,7.588H211.94   c18.503,0,36.703,4.733,52.891,13.755h0c16.188,9.022,34.388,13.755,52.891,13.755h117.529v-17.697   c0-30.053-24.201-54.416-54.055-54.416H113.518C93.211,396.105,76.748,412.677,76.748,433.12z"></path>
																	<g>
																		<circle style="fill:#FF2C5C;" cx="128.007" cy="182.282" r="48.566"></circle>
																		<path style="fill:#E62753;" d="M128.007,133.716c-5.405,0-10.597,0.896-15.453,2.526c19.243,6.457,33.113,24.623,33.113,46.04    s-13.87,39.584-33.113,46.04c4.856,1.629,10.048,2.525,15.453,2.525c26.822,0,48.565-21.743,48.565-48.565    C176.573,155.46,154.829,133.716,128.007,133.716z"></path>
																		<path style="fill:#FFD659;" d="M175.798,331.511H80.217c-14.571,0-26.383-11.812-26.383-26.383v-0.108    c0-40.965,33.208-74.173,74.173-74.173h0c40.965,0,74.173,33.208,74.173,74.173v0.108    C202.18,319.699,190.368,331.511,175.798,331.511z"></path>
																		<path style="fill:#FFBD54;" d="M128.007,230.848L128.007,230.848c-5.301,0-10.467,0.566-15.453,1.623    c33.546,7.111,58.72,36.886,58.72,72.55v0.108c0,14.571-11.812,26.383-26.383,26.383h30.905c14.571,0,26.383-11.812,26.383-26.383    v-0.108C202.181,264.056,168.972,230.848,128.007,230.848z"></path>
																		<g>
																			<circle style="fill:#50536E;" cx="115.365" cy="169.012" r="6.623"></circle>
																			<circle style="fill:#50536E;" cx="140.649" cy="169.012" r="6.623"></circle>
																		</g>
																	</g>
																	<path style="fill:#EBAD88;" d="M342.045,378.561H228.633c-16.337,0-29.58,13.243-29.58,29.58l0,0c0,3.047,2.42,5.538,5.466,5.621   c17.741,0.483,73.445,2.724,88.539,12.007c18.03,11.089,47.96,42.448,69.052,42.448c21.092,0,73.143,0,73.143,0   S455.34,378.561,342.045,378.561z"></path>
																	<path style="fill:#E89776;" d="M342.045,378.561H311.14c113.295,0,93.206,89.656,93.206,89.656c16.628,0,30.905,0,30.905,0   S455.34,378.561,342.045,378.561z"></path>
																	<path style="fill:#FF2C5C;" d="M482.532,512H349.513c-1.465,0-2.813-0.801-3.513-2.087l-20.072-36.867   c-1.298-2.385,0.106-5.342,2.774-5.844l117.884-22.163c1.648-0.31,3.315,0.442,4.174,1.882l35.207,59.03   C487.558,508.617,485.637,512,482.532,512z"></path>
																	<path style="fill:#E62753;" d="M446.587,445.039l-25.045,4.708L458.67,512h23.862c3.104,0,5.026-3.383,3.435-6.049l-35.207-59.03   C449.902,445.481,448.235,444.729,446.587,445.039z"></path>
																</g>















																</svg>

											</div>
											<div class="team-report">
												<h4 class="tips">Attractive User Interface</h4>
												<div class="soup">
													We've our own design standards which guarantees that Student Project would have an attractive user interface and interraction.
												</div>
											</div>
										</div>
									</li>
									<li class="foo">
										<div class="trick">
											<div class="team-two">
												<svg height="512pt" id="technical_icon_2" viewBox="0 -8 512 511" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m504.5 124.292969c0-64.226563-66.511719-116.292969-148.5625-116.292969-82.046875 0-148.5625 52.066406-148.5625 116.292969 0 64.230469 66.515625 116.296875 148.5625 116.296875 0 15.109375-15.351562 43.203125-15.351562 43.203125 43.023437 0 55.421874-47.488281 55.421874-47.488281 62.582032-13.691407 108.492188-58.652344 108.492188-112.011719zm0 0" fill="#f9db69"></path><path d="m227.378906 134.292969c0-64.226563 66.511719-116.292969 148.558594-116.292969 25.160156 0 48.851562 4.902344 69.621094 13.539062-24.914063-14.769531-55.957032-23.539062-89.621094-23.539062-82.046875 0-148.558594 52.066406-148.558594 116.292969 0 44.535156 31.980469 83.214843 78.941406 102.753906-35.808593-21.234375-58.941406-54.875-58.941406-92.753906zm0 0" fill="#e5ca61"></path><path d="m164.890625 236.492188c0-15.207032 12.332031-27.539063 27.546875-27.539063 15.207031 0 27.539062 12.332031 27.539062 27.539063v31.671874l-27.542968 15.628907-27.542969-15.628907zm0 0" fill="#e2b09a"></path><path d="m62.957031 268.164062h-55.457031v220.320313h55.457031l26.722657-110.160156zm0 0" fill="#5bb68d"></path><path d="m281.828125 350.785156c0-15.214844-12.332031-27.546875-27.539063-27.546875 15.207032 0 27.539063-12.320312 27.539063-27.539062 0-15.203125-12.332031-27.535157-27.539063-27.535157h-137.890624l-26.71875 110.160157 26.71875 110.160156h137.890624c15.207032 0 27.539063-12.332031 27.539063-27.539063 0-15.214843-12.332031-27.535156-27.539063-27.535156 15.207032 0 27.539063-12.332031 27.539063-27.550781 0-15.203125-12.332031-27.535156-27.539063-27.535156 15.207032 0 27.539063-12.332031 27.539063-27.539063zm0 0" fill="#fac4ae"></path><path d="m62.957031 268.164062h53.441407v220.320313h-53.441407zm0 0" fill="#efedee"></path><path d="m97.492188 458.992188c0 4.3125-3.496094 7.8125-7.8125 7.8125-4.316407 0-7.8125-3.5-7.8125-7.8125 0-4.316407 3.496093-7.816407 7.8125-7.816407 4.316406 0 7.8125 3.5 7.8125 7.816407zm0 0"></path><path d="m275.292969 111.117188v13.238281c0 4.140625 3.355469 7.5 7.5 7.5 4.140625 0 7.5-3.359375 7.5-7.5v-13.238281c0-4.140626-3.359375-7.5-7.5-7.5-4.144531 0-7.5 3.355468-7.5 7.5zm0 0"></path><path d="m421.585938 111.117188v13.238281c0 4.140625 3.359374 7.5 7.5 7.5 4.140624 0 7.5-3.359375 7.5-7.5v-13.238281c0-4.140626-3.359376-7.5-7.5-7.5-4.140626 0-7.5 3.355468-7.5 7.5zm0 0"></path><path d="m368.34375 118.496094c-3.011719 3.449218-7.535156 5.425781-12.40625 5.425781s-9.394531-1.976563-12.40625-5.425781c-2.726562-3.117188-7.464844-3.433594-10.582031-.710938-3.121094 2.726563-3.4375 7.464844-.710938 10.585938 5.859375 6.703125 14.5 10.550781 23.699219 10.550781 9.203125 0 17.839844-3.847656 23.703125-10.550781 2.722656-3.117188 2.40625-7.855469-.710937-10.582032-3.121094-2.726562-7.859376-2.410156-10.585938.707032zm0 0"></path><path d="m246.265625 36.15625c-29.914063 23.417969-46.386719 54.71875-46.386719 88.136719 0 33.421875 16.472656 64.722656 46.386719 88.140625 27.339844 21.398437 62.972656 33.851562 101.117187 35.472656-2.75 11.285156-10.140624 26.363281-13.375 32.289062-2.695312 4.9375.984376 11.097657 6.582032 11.097657 20.113281 0 37.386718-9.296875 49.945312-26.882813 5.671875-7.941406 9.371094-16.199218 11.316406-21.757812 30.328126-7.394532 57.617188-22.289063 77.21875-42.214844 21.542969-21.902344 32.929688-48.234375 32.929688-76.140625 0-30.480469-14.046875-59.75-39.550781-82.421875-3.09375-2.753906-7.835938-2.476562-10.585938.621094-2.753906 3.097656-2.472656 7.835937.621094 10.589844 22.257813 19.78125 34.515625 45.074218 34.515625 71.207031 0 48.421875-42.1875 91.46875-102.59375 104.683593-2.753906.605469-4.941406 2.703126-5.652344 5.433594-.027344.105469-2.839844 10.65625-10.425781 21.28125-6.847656 9.585938-15.136719 15.859375-24.746094 18.75 4.574219-10.085937 9.855469-23.898437 9.855469-33.851562 0-4.144532-3.355469-7.5-7.5-7.5-77.78125 0-141.058594-48.808594-141.058594-108.796875s63.277344-108.792969 141.058594-108.792969c30.457031 0 59.46875 7.394531 83.902344 21.390625 3.59375 2.058594 8.175781.816406 10.234375-2.777344 2.058593-3.59375.8125-8.179687-2.78125-10.234375-26.699219-15.292968-58.289063-23.378906-91.355469-23.378906-41.347656 0-80.296875 12.660156-109.671875 35.65625zm0 0"></path><path d="m7.5 495.984375h246.789062c19.320313 0 35.039063-15.71875 35.039063-35.039063 0-11.160156-5.242187-21.117187-13.398437-27.539062 8.15625-6.421875 13.398437-16.382812 13.398437-27.546875 0-11.15625-5.242187-21.117187-13.394531-27.535156 8.152344-6.421875 13.394531-16.378907 13.394531-27.539063 0-11.164062-5.242187-21.125-13.398437-27.546875 8.15625-6.421875 13.398437-16.378906 13.398437-27.539062 0-19.320313-15.71875-35.039063-35.039063-35.039063h-26.8125v-24.167968c0-19.320313-15.714843-35.039063-35.035156-35.039063-19.328125 0-35.046875 15.71875-35.046875 35.039063v24.171874h-149.894531c-4.140625 0-7.5 3.359376-7.5 7.5v220.320313c0 4.144531 3.359375 7.5 7.5 7.5zm266.828125-200.285156c0 11.050781-8.988281 20.039062-20.039063 20.039062-4.140624 0-7.5 3.359375-7.5 7.5 0 4.144531 3.359376 7.5 7.5 7.5 11.050782 0 20.039063 8.992188 20.039063 20.046875 0 11.050782-8.988281 20.039063-20.039063 20.039063-4.140624 0-7.5 3.359375-7.5 7.5 0 4.144531 3.359376 7.5 7.5 7.5 11.050782 0 20.039063 8.988281 20.039063 20.039062 0 11.054688-8.988281 20.046875-20.039063 20.046875-4.140624 0-7.5 3.359375-7.5 7.5 0 4.144532 3.359376 7.5 7.5 7.5 11.050782 0 20.039063 8.988282 20.039063 20.039063 0 11.046875-8.988281 20.039062-20.039063 20.039062h-130.390624v-205.324219h130.390624c11.050782 0 20.039063 8.988282 20.039063 20.035157zm-101.9375-59.207031c0-11.050782 8.996094-20.039063 20.046875-20.039063s20.039062 8.988281 20.039062 20.039063v24.171874h-40.085937zm-157.390625 39.171874h40.457031v40.625c0 4.144532 3.359375 7.5 7.5 7.5 4.144531 0 7.5-3.355468 7.5-7.5v-40.625h38.441407v205.320313h-38.441407v-134.816406c0-4.140625-3.355469-7.5-7.5-7.5-4.140625 0-7.5 3.359375-7.5 7.5v134.816406h-40.457031zm0 0"></path></svg>
											</div>
											<div class="team-report">
												<h4 class="tips">Coding Standards</h4>
												<div class="soup">
													While Coding Student Project we use standard naming conventions, include comments to ambigious codes and add proper indentations
												</div>
											</div>
										</div>
									</li>
									<li class="foo">
										<div class="trick">
											<div class="team-two">
												<svg height="512pt" id="technical_icon_2" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m512 256c0 141.386719-114.613281 256-256 256s-256-114.613281-256-256 114.613281-256 256-256 256 114.613281 256 256zm0 0" fill="#525468"></path><g fill="#3e4151"><path d="m90.246094 255.945312c0-99.792968 78.085937-181.339843 176.488281-186.90625-107.972656-6.097656-197.953125 79.71875-197.953125 186.90625 0 107.25 90.042969 193.007813 197.953125 186.90625-98.402344-5.5625-176.488281-87.109374-176.488281-186.90625zm0 0"></path><path d="m20.605469 256c0-137.933594 109.089843-250.367188 245.699219-255.777344-145.945313-5.785156-266.304688 110.871094-266.304688 255.777344 0 144.871094 120.316406 261.554688 266.304688 255.777344-136.609376-5.410156-245.699219-117.84375-245.699219-255.777344zm0 0"></path><path d="m370.210938 331.648438c-3.683594-2.15625-4.921876-6.886719-2.765626-10.574219 23.5625-40.261719 23.703126-88.589844.371094-129.277344-49.574218-86.453125-174.046875-86.507813-223.628906-.046875-23.339844 40.707031-23.203125 89.054688.367188 129.324219 2.15625 3.683593.917968 8.417969-2.765626 10.574219-3.683593 2.15625-8.417968.917968-10.570312-2.765626-26.402344-45.113281-26.566406-99.25-.4375-144.820312 55.480469-96.75 194.878906-96.851562 250.441406.042969 26.117188 45.554687 25.953125 99.675781-.441406 144.777343-2.152344 3.683594-6.886719 4.921876-10.570312 2.765626zm0 0"></path></g><path d="m267.78125 283.777344c2.632812 0 5.066406-1.40625 6.382812-3.6875l11.78125-20.40625c1.316407-2.28125 1.316407-5.089844 0-7.367188l-3.253906-5.636718 72.972656 65.402343c1.230469 1.101563.003907 3.226563-1.566406 2.714844l-94.726562-31.019531zm0 0" fill="#e4e3e1"></path><path d="m282.691406 246.679688 3.253906 5.636718c1.316407 2.277344 1.316407 5.085938 0 7.367188l-11.78125 20.40625c-1.316406 2.28125-3.75 3.6875-6.382812 3.6875h-8.410156l30.894531 10.117187c.796875-1.023437 1.53125-2.105469 2.1875-3.242187l11.78125-20.40625c.554687-.957032 1.035156-1.941406 1.46875-2.945313zm0 0" fill="#d1d0cf"></path><path d="m256 69.910156v-26.605468c-38.25 0-74.632812 10.113281-106.359375 28.472656l13.304687 23.042968c27.753907-16.058593 59.585938-24.910156 93.054688-24.910156zm0 0" fill="#9ad14b"></path><path d="m94.820312 162.941406-23.042968-13.304687c-18.105469 31.289062-28.472656 67.617187-28.472656 106.363281h26.605468c0-33.902344 9.070313-65.683594 24.910156-93.058594zm0 0" fill="#b4e1f9"></path><path d="m417.179688 162.941406 23.042968-13.304687c-18.671875-32.273438-45.585937-59.1875-77.859375-77.859375l-13.304687 23.042968c28.238281 16.339844 51.78125 39.882813 68.121094 68.121094zm0 0" fill="#ffc964"></path><path d="m417.179688 349.058594 23.042968 13.304687c18.105469-31.289062 28.472656-67.613281 28.472656-106.363281h-26.605468c0 33.902344-9.070313 65.683594-24.910156 93.058594zm0 0" fill="#ed5454"></path><path d="m94.820312 349.058594c-15.839843-27.375-24.910156-59.15625-24.910156-93.058594h-26.605468c0 38.746094 10.367187 75.074219 28.472656 106.363281zm0 0" fill="#72bdf6"></path><path d="m94.820312 349.058594-23.042968 13.304687c81.945312 141.628907 286.472656 141.671875 368.445312 0l-23.042968-13.304687c-71.695313 123.910156-250.640626 123.949218-322.359376 0zm0 0" fill="#e4e3e1"></path><path d="m442.089844 256h26.605468c0-38.746094-10.367187-75.074219-28.472656-106.363281l-23.042968 13.304687c15.839843 27.375 24.910156 59.15625 24.910156 93.058594zm0 0" fill="#f3a334"></path><path d="m349.058594 94.820312 13.304687-23.042968c-31.289062-18.101563-67.613281-28.46875-106.363281-28.46875v26.605468c33.902344-.003906 65.683594 9.066407 93.058594 24.90625zm0 0" fill="#ffe183"></path><path d="m162.941406 94.820312-13.304687-23.042968c-32.273438 18.675781-59.1875 45.585937-77.859375 77.863281l23.042968 13.304687c16.339844-28.242187 39.882813-51.785156 68.121094-68.125zm0 0" fill="#76ab29"></path><path d="m172.351562 68.125c18.265626-10.570312 38.222657-18.546875 59.355469-23.441406-29.628906 3.371094-57.414062 12.828125-82.066406 27.09375l4.640625 8.039062c5.816406-4.183594 11.84375-8.085937 18.070312-11.691406zm0 0" fill="#76ab29"></path><path d="m92.945312 147.53125c15.441407-26.691406 36.410157-49.777344 61.335938-67.714844l-4.640625-8.039062c-32.277344 18.671875-59.1875 45.585937-77.863281 77.859375l15.269531 8.816406c1.863281-3.699219 3.828125-7.347656 5.898437-10.921875zm0 0" fill="#6b9b18"></path><path d="m71.777344 149.640625c-18.105469 31.285156-28.472656 67.613281-28.472656 106.359375h20.605468c0-35.085938 8.34375-68.222656 23.132813-97.546875zm0 0" fill="#72bdf6"></path><path d="m63.910156 256h-20.605468c0 38.746094 10.367187 75.074219 28.472656 106.363281l15.265625-8.816406c-14.789063-29.324219-23.132813-62.460937-23.132813-97.546875zm0 0" fill="#4b98d4"></path><path d="m92.945312 364.46875c-2.066406-3.574219-4.035156-7.222656-5.898437-10.921875l-15.269531 8.816406c32.9375 56.925781 91.5 97.164063 159.917968 104.949219-59.214843-13.710938-109.136718-51.664062-138.75-102.84375zm0 0" fill="#d1d0cf"></path><path d="m286.390625 252.058594-11.78125-20.40625c-1.402344-2.433594-4.019531-3.941406-6.828125-3.941406h-23.5625c-2.808594 0-5.421875 1.511718-6.828125 3.941406l-11.78125 20.40625c-1.40625 2.429687-1.40625 5.453125 0 7.882812l11.78125 20.40625c1.40625 2.433594 4.019531 3.945313 6.828125 3.945313h23.5625c2.808594 0 5.425781-1.511719 6.828125-3.945313l11.78125-20.40625c1.40625-2.429687 1.40625-5.453125 0-7.882812zm0 0" fill="#ed5454"></path><path d="m257.996094 280.347656-11.78125-20.40625c-1.40625-2.429687-1.40625-5.453125 0-7.882812l11.78125-20.40625c1.402344-2.433594 4.019531-3.941406 6.828125-3.941406h-20.605469c-2.808594 0-5.421875 1.511718-6.828125 3.941406l-11.78125 20.40625c-1.40625 2.429687-1.40625 5.453125 0 7.882812l11.78125 20.40625c1.40625 2.433594 4.019531 3.945313 6.828125 3.945313h20.605469c-2.808594 0-5.425781-1.511719-6.828125-3.945313zm0 0" fill="#ea3f3f"></path></svg>
											</div>
											<div class="team-report">
												<h4 class="tips">Easy Set Up</h4>
												<div class="soup">
													We provide the same set-up applications used in Coding Student Project and add documentation for users to easy install anytime.
												</div>
											</div>
										</div>
									</li>
									<li class="foo">
										<div class="trick">
											<div class="team-two">
												<svg height="512pt" id="technical_icon_2" viewBox="0 -61 512.00001 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m355.898438 382.695312c-13.398438 0-24.261719-10.859374-24.261719-24.257812v-22.921875l48.519531-32.699219v55.621094c0 13.398438-10.859375 24.257812-24.257812 24.257812zm0 0" fill="#afacb3"></path><path d="m149.996094 382.695312c-13.398438 0-24.257813-10.859374-24.257813-24.257812v-22.921875l48.519531-33.375v56.296875c0 13.398438-10.863281 24.257812-24.261718 24.257812zm0 0" fill="#afacb3"></path><path d="m435.527344 149.78125-3.4375 11.515625-50.21875 168.457031-1.710938 5.757813h-48.523437v22.925781c0 3.839844-.894531 7.480469-2.496094 10.703125-1.175781 2.40625-2.746094 4.585937-4.613281 6.449219-4.390625 4.390625-10.453125 7.109375-17.144532 7.109375-13.402343 0-24.261718-10.871094-24.261718-24.261719v-22.925781h-157.382813v22.925781c0 2.027344-.253906 4.003906-.71875 5.890625-2.636719 10.550781-12.179687 18.371094-23.542969 18.371094-13.394531 0-24.253906-10.871094-24.253906-24.261719v-22.925781h-46.414062l11.578125-53.664063h-34.785157c0-29.535156 36.003907-69.621094 36.003907-69.621094h-36.003907c0-40.078124 52.882813-73.78125 52.882813-73.78125l-33.894531-8.484374c18.917968-40.152344 78.25-57.023438 78.25-57.023438l-36.0625-12.589844c14.773437-37.980468 100.292968-19.953125 100.292968-19.953125l-26.453124-26.464843c37.972656-20.507813 90.703124 20.511718 90.703124 20.511718v-26.835937c56.957032 0 83.269532 40.351562 83.269532 40.351562v-30.792969c47.398437 9.550782 67.503906 67.503907 67.503906 67.503907l22.214844-22.210938c27.421875 27.414063 29.21875 87.324219 29.21875 87.324219zm0 0" fill="#7c4242"></path><path d="m432.484375 167.390625-48.402344 162.363281h-305.410156l10.121094-46.921875h-30.40625c0-25.8125 31.46875-60.855469 31.46875-60.855469h-31.46875c0-35.039062 46.222656-64.5 46.222656-64.5l-29.625-7.421874c16.546875-35.101563 68.40625-49.851563 68.40625-49.851563l-31.523437-11.011719c12.90625-33.195312 87.679687-17.4375 87.679687-17.4375l-23.125-23.128906c33.195313-17.933594 79.292969 17.925781 79.292969 17.925781v-23.460937c49.792968 0 72.789062 35.273437 72.789062 35.273437v-26.917969c41.433594 8.355469 59.015625 59.015626 59.015625 59.015626l19.414063-19.425782c18.980468 18.980469 23.917968 55.753906 25.15625 70.261719.324218 3.824219.394531 6.09375.394531 6.09375zm0 0" fill="#936a60"></path><path d="m504.394531 218.652344c-38.03125 0-68.863281-30.832032-68.863281-68.867188l-59.546875.921875c-23.386719.261719-43.992187 9.199219-59.398437 23.730469-5.152344-3.445312-11.34375-5.453125-18.003907-5.453125-17.917969 0-32.445312 14.523437-32.445312 32.441406 0 14.339844 9.308593 26.5 22.207031 30.785157-.390625 3.574218-.59375 7.210937-.59375 10.898437 0 51.035156 41.371094 92.40625 92.40625 92.40625h7.375c64.542969 0 116.863281-52.320313 116.863281-116.863281zm0 0" fill="#e6e6e6"></path><path d="m393.957031 289.214844-13.796875 46.296875h-48.523437v22.921875c0 6.691406-2.71875 12.765625-7.109375 17.15625-4.390625 4.386718-10.453125 7.105468-17.144532 7.105468-13.402343 0-24.261718-10.867187-24.261718-24.261718v-22.921875h-157.382813v22.921875c0 13.394531-10.859375 24.261718-24.261719 24.261718-13.394531 0-24.253906-10.867187-24.253906-24.261718v-22.921875c9.796875-91.667969 222.839844-46.296875 222.839844-46.296875zm0 0" fill="#c4becc"></path><path d="m501.9375 242.644531c-1.289062 6.15625-3.050781 12.136719-5.261719 17.894531h-.011719c-16.839843 43.851563-59.351562 74.976563-109.132812 74.976563h-7.371094c-25.519531 0-48.625-10.339844-65.34375-27.058594-16.71875-16.730469-27.058594-39.828125-27.058594-65.34375v-.152343c.039063 12.996093 10.371094 24.765624 27.058594 33.285156 16.71875 8.535156 39.824219 13.816406 65.34375 13.816406h7.371094c49.78125 0 92.292969-15.886719 109.132812-38.28125h.011719c2.210938-2.941406 3.972657-5.992188 5.261719-9.136719zm0 0" fill="#c4becc"></path><path d="m504.398438 218.652344c0 14.761718-2.738282 28.886718-7.726563 41.882812h-.007813c-19.832031-3.640625-34.847656-21.007812-34.847656-41.882812 0-4.59375.730469-9.011719 2.078125-13.160156 11.367188 8.285156 25.367188 13.160156 40.503907 13.160156zm0 0" fill="#4f5263"></path><path d="m405.039062 237.925781c0 7.28125-5.902343 13.183594-13.179687 13.183594-7.28125 0-13.179687-5.902344-13.179687-13.183594 0-7.277343 5.898437-13.179687 13.179687-13.179687 7.277344 0 13.179687 5.902344 13.179687 13.179687zm0 0" fill="#4f5263"></path><path d="m512 218.652344c0-4.199219-3.402344-7.605469-7.605469-7.605469-33.777343 0-61.261719-27.480469-61.261719-61.261719 0-.035156-.003906-.074218-.003906-.109375 0-.039062.003906-.078125 0-.121093-.078125-2.566407-2.226562-63.261719-31.445312-92.480469-2.972656-2.96875-7.785156-2.96875-10.753906 0l-14.261719 14.261719c-3.234375-6.769532-8.238281-15.917969-15.195313-25.15625-2.527344-3.355469-7.296875-4.023438-10.652344-1.496094-3.351562 2.527344-4.023437 7.292968-1.496093 10.648437 11.902343 15.792969 17.527343 31.675781 17.582031 31.828125.859375 2.472656 2.929688 4.332032 5.480469 4.917969 2.558593.585937 5.226562-.183594 7.078125-2.035156l16.445312-16.441407c15.40625 20.507813 20.105469 53.753907 21.480469 68.703126l-51.492187.796874c-22.339844.25-43.546876 8.042969-60.316407 22.058594-5.289062-2.484375-11.070312-3.78125-17-3.78125-22.082031 0-40.046875 17.964844-40.046875 40.046875 0 15.21875 8.542969 28.878907 21.78125 35.644531-.113281 2.019532-.171875 4.035157-.171875 6.039063 0 12.636719 2.363281 24.734375 6.660157 35.875-28.96875-5.007813-94.390626-14.03125-145.757813-4.300781-4.125.78125-6.835937 4.757812-6.058594 8.886718.785157 4.125 4.769531 6.835938 8.886719 6.054688 56.839844-10.769531 134.945312 3.195312 151.457031 6.402344 8.316407 13.28125 19.65625 24.484375 33.054688 32.621094-2.570313 1.222656-4.351563 3.832031-4.351563 6.867187v22.921875c0 9.183594-7.472656 16.652344-16.65625 16.652344-9.1875 0-16.65625-7.46875-16.65625-16.652344v-22.921875c0-4.199219-3.402344-7.605469-7.605468-7.605469h-157.378907c-4.199219 0-7.605469 3.40625-7.605469 7.605469v22.921875c0 9.183594-7.46875 16.652344-16.652343 16.652344-9.1875 0-16.65625-7.46875-16.65625-16.652344v-22.457031c2.042969-17.972657 13.230469-30.839844 34.199219-39.320313 3.890624-1.574218 5.769531-6.007812 4.195312-9.902344-1.570312-3.890624-6.003906-5.773437-9.898438-4.195312-23.847656 9.644531-38.132812 24.882812-42.570312 45.347656h-30.523438l9.59375-44.464844c.484376-2.246093-.074218-4.589843-1.515624-6.378906-1.445313-1.785156-3.621094-2.828125-5.917969-2.828125h-26.320313c4.417969-21.066406 24.777344-47.542969 33.191406-56.929687 2.007813-2.230469 2.511719-5.433594 1.289063-8.175782-1.222656-2.742187-3.945313-4.507812-6.945313-4.507812h-27.664062c6.082031-32.203125 48.175781-59.472656 48.628906-59.761719 2.5625-1.632812 3.90625-4.632812 3.417969-7.632812-.484375-2.996094-2.710937-5.417969-5.65625-6.15625l-24.171875-6.058594c20.871094-30.753906 68.25-44.617187 68.761719-44.761719 3.191406-.910156 5.425781-3.777344 5.523437-7.089844.09375-3.316406-1.964844-6.3125-5.09375-7.40625l-27.113281-9.46875c9.40625-9.878906 28.441406-12.371093 44.085937-12.554687 22.171876-.253906 42.980469 4.054687 43.1875 4.097656 3.289063.695313 6.648438-.859375 8.253907-3.816406 1.601562-2.957031 1.070312-6.621094-1.308594-9l-18.140625-18.136719c32.113281-7.210937 71.90625 23.230469 72.34375 23.566406 2.292969 1.785157 5.402344 2.105469 8.007812.828126 2.609376-1.273438 4.265626-3.925782 4.265626-6.832032v-18.976562c46.636718 3.210937 68.351562 35.230468 69.285156 36.644531 1.839844 2.820313 5.3125 4.09375 8.535156 3.136719 3.226562-.960938 5.4375-3.921875 5.4375-7.289063v-20.722656c6.335938 2.382813 12.4375 5.886719 18.21875 10.46875 3.292969 2.609375 8.074219 2.054687 10.683594-1.238281 2.605468-3.289063 2.054687-8.074219-1.238282-10.683594-10.40625-8.246094-21.765624-13.652344-33.765624-16.074219-2.230469-.449219-4.550782.125-6.316407 1.570313-1.765625 1.445312-2.789062 3.605468-2.789062 5.886718v11.0625c-14.019531-12.601562-38.832031-28.226562-75.65625-28.226562-4.199219 0-7.605469 3.40625-7.605469 7.605469v12.523437c-18.964844-11.589844-56.273438-29.332031-86.71875-12.886718-2.113281 1.140624-3.5625 3.214843-3.910156 5.589843-.347656 2.378907.449218 4.777344 2.148437 6.476563l10.285157 10.285156c-6.9375-.671875-14.898438-1.152344-23.136719-1.070312-34.238281.355468-55.332031 10.132812-62.691407 29.0625-.75 1.921874-.683593 4.066406.179688 5.941406.863281 1.871094 2.453125 3.3125 4.398438 3.996094l16.210937 5.660156c-20.140625 8.878906-49.785156 25.976562-62.773437 53.53125-.96875 2.058594-.964844 4.441406.007812 6.496094.972656 2.058593 2.816406 3.570312 5.023438 4.121093l18.25 4.574219c-16.707032 13.589844-42.992188 39.824219-42.992188 70.320312 0 4.199219 3.402344 7.605469 7.605469 7.605469h20.0625c-2.617188 3.476563-5.515625 7.523438-8.421875 11.957031-12.769532 19.457032-19.246094 36.296876-19.246094 50.054688 0 4.199219 3.402344 7.601562 7.605469 7.601562h25.363281l-9.59375 44.46875c-.484375 2.246094.074219 4.589844 1.519531 6.378907 1.441407 1.785156 3.617188 2.824219 5.914063 2.824219h38.804687v15.316406c0 17.570312 14.296875 31.863281 31.867188 31.863281 9.84375 0 18.660156-4.488281 24.511719-11.53125 5.851562 7.042969 14.664062 11.53125 24.511718 11.53125 17.570313 0 31.867188-14.292969 31.867188-31.863281v-15.316406h93.144531v15.316406c0 17.570312 14.296875 31.863281 31.863281 31.863281 9.847656 0 18.664063-4.488281 24.515625-11.53125 5.847657 7.042969 14.664063 11.53125 24.511719 11.53125 17.570312 0 31.863281-14.292969 31.863281-31.863281v-15.324219c68.292969-.398437 123.730469-56.070313 123.730469-124.457031zm-344.839844 139.785156c0 9.183594-7.472656 16.652344-16.65625 16.652344s-16.65625-7.46875-16.65625-16.652344v-15.316406h33.3125zm324.648438-107.136719c-13.28125-5.097656-22.386719-17.949219-22.386719-32.648437 0-.292969.023437-.582032.03125-.875 8.277344 4.269531 17.421875 7.089844 27.105469 8.078125-.578125 8.804687-2.203125 17.328125-4.75 25.445312zm-118.746094 107.136719c0 9.183594-7.472656 16.652344-16.65625 16.652344-9.1875 0-16.65625-7.46875-16.65625-16.652344v-15.316406h33.308594v15.316406zm14.46875-30.527344h-7.371094c-46.761718 0-84.804687-38.039062-84.804687-84.800781 0-3.335937.183593-6.726563.546875-10.074219.390625-3.558594-1.761719-6.90625-5.160156-8.039062-10.167969-3.378906-17-12.851563-17-23.570313 0-13.695312 11.140624-24.839843 24.839843-24.839843 4.929688 0 9.695313 1.445312 13.777344 4.171874 2.949219 1.96875 6.867187 1.640626 9.441406-.789062 14.777344-13.9375 33.542969-21.425781 54.300781-21.660156l52.210938-.808594c2.046875 20.351562 12.109375 38.367188 26.972656 50.847656-.707031 3.378906-1.070312 6.824219-1.070312 10.304688 0 21.046875 13.023437 39.457031 32.035156 46.804687-17.5625 36.894531-55.210938 62.453125-98.71875 62.453125zm0 0"></path><path d="m391.859375 217.144531c-11.460937 0-20.785156 9.324219-20.785156 20.78125 0 11.460938 9.324219 20.785157 20.785156 20.785157s20.785156-9.324219 20.785156-20.785157c0-11.457031-9.324219-20.78125-20.785156-20.78125zm0 26.359375c-3.074219 0-5.578125-2.5-5.578125-5.578125 0-3.074219 2.503906-5.574219 5.578125-5.574219s5.574219 2.5 5.574219 5.574219c0 3.078125-2.5 5.578125-5.574219 5.578125zm0 0"></path></svg>
											</div>
											<div class="team-report">
												<h4 class="tips">Custom Features</h4>
												<div class="soup">
													We include custom forms, custom animations and custom fonts, video or audio intro while Coding Student Projects if need be.
												</div>
											</div>
										</div>
									</li>
									<li class="foo">
										<div class="trick">
											<div class="team-two">
												<svg version="1.1" id="technical_icon_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
															<path style="fill:#FCD2BE;" d="M177.641,310.486v96.983c0,44.446-36.046,80.491-80.504,80.491c-11.908,0-23.203-2.587-33.369-7.222
																v-0.013c-24.598-11.217-42.563-34.458-46.366-62.219c-3.573-1.255-6.927-3.303-9.795-6.171c-10.141-10.128-10.141-26.57,0-36.699
																c10.128-10.155,26.582-10.155,36.724,0l6.761-38.76l4.61-26.391h121.939V310.486z"></path>
															<path style="fill:#FAB998;" d="M63.767,480.726c-24.598-11.217-42.563-34.458-46.366-62.219c-3.573-1.255-6.927-3.303-9.795-6.171
																c-10.141-10.128-10.141-26.57,0-36.699c10.128-10.155,26.582-10.155,36.724,0l6.761-38.76l21.192,4.302
																C63.371,356.584,25.737,412.81,63.767,480.726z"></path>
															<path style="fill:#F9CE55;" d="M215.275,271.239c0,38.632-31.32,69.94-69.94,69.94H72.283v6.492
																c0,15.442-12.523,27.953-27.966,27.953c-7.478-7.478-18.4-9.437-27.671-5.878v-28.568c0-38.62,31.32-69.94,69.94-69.94H215.275z"></path>
															<path style="fill:#E2A11E;" d="M143.669,271.239H86.586c-38.62,0-69.94,31.32-69.94,69.94v28.568
																c9.271-3.559,20.193-1.6,27.671,5.878c15.442,0,27.966-12.51,27.966-27.953v-6.492h1.445
																C73.729,302.56,105.049,271.239,143.669,271.239z"></path>
															<g>
																<path style="fill:#50515B;" d="M108.939,396.588c-4.379,0-7.928-3.55-7.928-7.928v-13.314c0-4.379,3.55-7.928,7.928-7.928
																	s7.928,3.55,7.928,7.928v13.314C116.867,393.038,113.318,396.588,108.939,396.588z"></path>
																<path style="fill:#50515B;" d="M143.554,396.588c-4.379,0-7.928-3.55-7.928-7.928v-13.314c0-4.379,3.55-7.928,7.928-7.928
																	s7.928,3.55,7.928,7.928v13.314C151.483,393.038,147.933,396.588,143.554,396.588z"></path>
															</g>
															<path style="fill:#FFFFFF;" d="M112.605,456.727c-0.143,0-0.285-0.003-0.429-0.012c-17.848-0.952-31.477-8.797-39.412-22.684
																c-2.172-3.802-0.852-8.645,2.95-10.818c3.801-2.173,8.645-0.852,10.818,2.95c5.202,9.105,14.116,14.057,26.49,14.717
																c4.372,0.234,7.729,3.967,7.494,8.34C120.29,453.45,116.79,456.727,112.605,456.727z"></path>
															<path style="fill:#3FACC9;" d="M262.202,58.331H63.618c-12.591,0-22.799,10.208-22.799,22.799v100.277
																c0,12.591,10.208,22.799,22.799,22.799h111.976v41.226l36.769-41.226h49.839c12.591,0,22.799-10.208,22.799-22.799V81.13
																C285.001,68.539,274.794,58.331,262.202,58.331z"></path>
															<path style="fill:#00C7A9;" d="M265.063,7.591h198.584c12.591,0,22.799,10.208,22.799,22.799v100.277
																c0,12.591-10.208,22.799-22.799,22.799H351.67v41.226l-36.769-41.226h-49.839c-12.591,0-22.799-10.208-22.799-22.799V30.391
																C242.264,17.799,252.472,7.591,265.063,7.591z"></path>
															<g>
																<path style="fill:#393A42;" d="M445.22,55.688h-89.393c-4.38,0-7.928-3.55-7.928-7.928s3.549-7.928,7.928-7.928h89.393
																	c4.38,0,7.928,3.55,7.928,7.928S449.6,55.688,445.22,55.688z"></path>
																<path style="fill:#393A42;" d="M329.398,55.688H283.49c-4.38,0-7.928-3.55-7.928-7.928s3.549-7.928,7.928-7.928h45.909
																	c4.38,0,7.928,3.55,7.928,7.928S333.777,55.688,329.398,55.688z"></path>
																<path style="fill:#393A42;" d="M445.22,88.194h-27.554c-4.38,0-7.928-3.55-7.928-7.928s3.549-7.928,7.928-7.928h27.554
																	c4.38,0,7.928,3.55,7.928,7.928S449.6,88.194,445.22,88.194z"></path>
																<path style="fill:#393A42;" d="M391.237,88.194H283.49c-4.38,0-7.928-3.55-7.928-7.928s3.549-7.928,7.928-7.928h107.747
																	c4.38,0,7.928,3.55,7.928,7.928S395.615,88.194,391.237,88.194z"></path>
																<path style="fill:#393A42;" d="M395.994,120.698H283.49c-4.38,0-7.928-3.55-7.928-7.928c0-4.379,3.549-7.928,7.928-7.928h112.504
																	c4.38,0,7.928,3.55,7.928,7.928C403.922,117.148,400.372,120.698,395.994,120.698z"></path>
															</g>
															<g>
																<path style="fill:#50515B;" d="M125.384,103.257h-45.91c-4.379,0-7.928-3.55-7.928-7.928s3.55-7.928,7.928-7.928h45.909
																	c4.379,0,7.928,3.55,7.928,7.928S129.762,103.257,125.384,103.257z"></path>
																<path style="fill:#50515B;" d="M203.078,103.257h-45.909c-4.379,0-7.928-3.55-7.928-7.928s3.55-7.928,7.928-7.928h45.909
																	c4.379,0,7.928,3.55,7.928,7.928S207.456,103.257,203.078,103.257z"></path>
																<path style="fill:#50515B;" d="M218.406,135.761H79.474c-4.379,0-7.928-3.55-7.928-7.928c0-4.379,3.55-7.928,7.928-7.928h138.932
																	c4.379,0,7.928,3.55,7.928,7.928C226.334,132.211,222.785,135.761,218.406,135.761z"></path>
																<path style="fill:#50515B;" d="M191.978,168.266h-63.422c-4.379,0-7.928-3.55-7.928-7.928s3.55-7.928,7.928-7.928h63.422
																	c4.379,0,7.928,3.55,7.928,7.928S196.357,168.266,191.978,168.266z"></path>
																<path style="fill:#50515B;" d="M102.127,168.266H79.474c-4.379,0-7.928-3.55-7.928-7.928s3.55-7.928,7.928-7.928h22.652
																	c4.379,0,7.928,3.55,7.928,7.928S106.506,168.266,102.127,168.266z"></path>
															</g>
															<path style="fill:#6B4B3D;" d="M477.638,504.408c0,0-0.137-0.053-0.402-0.169c-4.25-1.913-41.217-19.842-41.217-66.662
																L314.186,317.224c-5.708-21.121-3.954-58.226,48.49-62.497c3.266-0.275,6.734-0.412,10.402-0.412
																c62.592,0,124.011,5.032,137.003,97.16C518.771,413.115,496.18,473.001,477.638,504.408z"></path>
															<path style="fill:#5B3D2D;" d="M477.638,504.408c0,0-0.137-0.053-0.402-0.169c0.011-0.021,0.011-0.042,0.011-0.063
																c21.142-179.71-60.256-249.449-114.571-249.449c3.266-0.275,6.734-0.412,10.402-0.412c62.592,0,124.011,5.032,137.003,97.16
																C518.771,413.115,496.18,473.001,477.638,504.408z"></path>
															<path style="fill:#B37854;" d="M471.011,384.389c-2.646,2.646-5.74,4.535-9.035,5.693c-4.158,30.353-26.656,54.848-55.958,61.958
																c-5.633,1.382-11.527,2.103-17.586,2.103c-41.006,0-74.252-33.246-74.252-74.24v-62.678c0,0,32.916,1.181,45.908-11.81
																c18.861,24.483,43.368,27.896,59.619,26.833c0-0.012,0-0.012,0-0.012c10.405-0.685,17.432-3.201,17.432-3.201v21.507l0.012-0.012
																c6.898-6.898,16.972-8.704,25.522-5.421c3.035,1.158,5.882,2.976,8.339,5.433C480.365,359.883,480.365,375.047,471.011,384.389z"></path>
															<path style="fill:#946032;" d="M471.011,384.389c-2.646,2.646-5.74,4.535-9.035,5.693c-4.158,30.353-26.656,54.848-55.958,61.958
																c38.561-21.153,14.02-118.482,13.689-119.794c0-0.012,0-0.012,0-0.012c10.405-0.685,17.432-3.201,17.432-3.201v21.507l0.012-0.012
																c6.898-6.898,16.972-8.704,25.522-5.421c3.035,1.158,5.882,2.976,8.339,5.433C480.365,359.883,480.365,375.047,471.011,384.389z"></path>
															<g>
																<path style="fill:#50515B;" d="M377.553,370.48c-4.38,0-7.928-3.55-7.928-7.928v-12.281c0-4.379,3.549-7.928,7.928-7.928
																	s7.928,3.55,7.928,7.928v12.281C385.482,366.931,381.932,370.48,377.553,370.48z"></path>
																<path style="fill:#50515B;" d="M345.625,370.48c-4.38,0-7.928-3.55-7.928-7.928v-12.281c0-4.379,3.549-7.928,7.928-7.928
																	c4.38,0,7.928,3.55,7.928,7.928v12.281C353.553,366.931,350.005,370.48,345.625,370.48z"></path>
															</g>
															<path style="fill:#FFFFFF;" d="M374.17,425.95c-4.185,0-7.684-3.277-7.909-7.506c-0.234-4.372,3.122-8.106,7.494-8.34
																c11.192-0.597,19.243-5.06,23.931-13.265c2.172-3.801,7.016-5.122,10.816-2.95c3.802,2.172,5.123,7.015,2.95,10.818
																c-7.427,12.998-20.171,20.341-36.851,21.231C374.457,425.945,374.313,425.95,374.17,425.95z"></path>
															<g>
															</g>
															<g>
															</g>
															<g>
															</g>
															<g>
															</g>
															<g>
															</g>
															<g>
															</g>
															<g>
															</g>
															<g>
															</g>
															<g>
															</g>
															<g>
															</g>
															<g>
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
											<div class="team-report">
												<h4 class="tips">Project Explanation</h4>
												<div class="soup">
													We can use a video or audio or document to explain pros and cons involved in the Student Project. We also keep in touch to make sure student graps the whole knowledge.
												</div>
											</div>
										</div>
									</li>
									<li class="foo">
										<div class="trick">
											<div class="team-two">
												<svg version="1.1" id="technical_icon_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612.001 612.001" style="enable-background:new 0 0 612.001 612.001;" xml:space="preserve">
																<path d="M609.247,314.664l-148.93-148.928c-3.672-3.671-9.627-3.672-13.299,0.001L306.001,306.753L164.984,165.737
																	c-3.673-3.672-9.627-3.673-13.299-0.001L2.755,314.664C0.991,316.429,0,318.821,0,321.315c0,2.494,0.991,4.886,2.755,6.651
																	l118.298,118.298c1.764,1.765,4.155,2.755,6.65,2.755c2.494,0,4.886-0.991,6.649-2.755l142.279-142.279l16.07,16.07l-96.84,96.84
																	c-3.673,3.673-3.673,9.627,0,13.3c1.836,1.836,4.243,2.753,6.649,2.753c2.406,0,4.814-0.919,6.65-2.753l96.842-96.842l96.842,96.842
																	c1.836,1.836,4.244,2.753,6.65,2.753s4.814-0.919,6.65-2.753c3.673-3.673,3.673-9.627,0-13.3l-96.84-96.84l16.07-16.07
																	L477.65,446.264c1.764,1.765,4.155,2.755,6.65,2.755c2.494,0,4.886-0.991,6.65-2.755l118.298-118.298
																	c1.764-1.765,2.755-4.157,2.755-6.651C612.001,318.821,611.009,316.429,609.247,314.664z M233.542,320.475l-32.785-32.783
																	l-37.497,37.495l32.785,32.785l-37.495,37.497l-32.785-32.785L94.919,393.53L55.491,354.1l30.842-30.842l39.427,39.427
																	l37.496-37.496l-39.429-39.429l-37.493,37.493l-32.783-32.783l37.497-37.495l32.785,32.785l37.497-37.497l-32.785-32.785
																	l29.79-29.79l32.785,32.785l-29.79,29.79l39.43,39.43l29.79-29.791l32.785,32.785L233.542,320.475z M556.514,354.1l-39.428,39.43
																	l-30.846-30.846l-32.785,32.785l-37.495-37.497l32.785-32.785l-37.497-37.495l-32.785,32.783l-29.79-29.79l32.782-32.785
																	l29.79,29.791l39.43-39.43l-29.79-29.79l32.785-32.785l29.79,29.79l-32.785,32.785l37.496,37.496l-39.424,39.424l37.495,37.495
																	l39.429-39.429l-37.495-37.495l32.78-32.78l37.497,37.495l-32.785,32.785L556.514,354.1z"></path>
																<g>
																</g>
																<g>
																</g>
																<g>
																</g>
																<g>
																</g>
																<g>
																</g>
																<g>
																</g>
																<g>
																</g>
																<g>
																</g>
																<g>
																</g>
																<g>
																</g>
																<g>
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
											<div class="team-report">
												<h4 class="tips">Final Touch</h4>
												<div class="soup">
													We love to give more than requested. This is why, If any bugs emerge in the future, just get in touch to get them fixed.
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>	
						</div>
					</div>
					<div id="success-story">
						<div id="success-story-content">
							<div class="weepit">
								<div class="toe">
									<h4 class="why_content_header color">Our Success Story</h4>
								</div>
								<div class="succ">
									<iframe id="peep" src="cid:frame-7FCA6C8573AFB3AC6E520A334F9E700F@mhtml.blink" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
								</div>
							</div>
						</div>
					</div>
					<div id="process">
						<div id="process-content">
							<div class="weepit">
								<h4 class="why_content_header ">Coding Student Project Processes</h4>
								<div class="why_explained">Transparency is a top priority. Here is how the actual process for Coding Student Project</div>
								<h4 class="why_content_header" style="text-align:left">Steps</h4>
								<ul class="keepitcool">
									<li class="shxt">
										<svg class="number cleared" number="1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 496.158 496.158" style="enable-background:new 0 0 496.158 496.158;" xml:space="preserve" width="512px" height="512px" class=""><g><path d="M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07  c137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z" data-original="#56B48C" class="active-path" data-old_color="#4c4c4c" style="fill:#4C4C4C"/><path d="M278.767,145.419c-3.126-4.003-7.276-6.006-12.451-6.006c-4.591,0-7.716,0.879-9.375,2.637  c-1.662,1.758-5.226,6.445-10.693,14.063c-5.47,7.617-11.744,14.502-18.823,20.654c-7.082,6.152-16.53,12.012-28.345,17.578  c-7.91,3.712-13.429,6.738-16.553,9.082c-3.126,2.344-4.688,6.006-4.688,10.986c0,4.298,1.586,8.082,4.761,11.353  c3.172,3.273,6.812,4.907,10.913,4.907c8.592,0,25.292-9.521,50.098-28.564V335.41c0,7.814,1.806,13.722,5.42,17.725  c3.612,4.003,8.397,6.006,14.355,6.006c13.378,0,20.068-9.814,20.068-29.443V161.972  C283.455,154.941,281.892,149.425,278.767,145.419z" data-original="#FFFFFF" style="fill:#FFFFFF"/></g> </svg>
									</li>
									<li class="shxt">
										<svg class="number" number="2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 496.158 496.158" style="enable-background:new 0 0 496.158 496.158;" xml:space="preserve" width="512px" height="512px" class=""><g><path d="M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07  c137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z" data-original="#56B48C" class="active-path" data-old_color="#4c4c4c" style="fill:#4C4C4C"/><path style="fill:#FFFFFF;" d="M319.783,325.595c-4.005-3.124-9.814-4.688-17.432-4.688h-76.465c2.44-3.71,4.834-6.885,7.178-9.521  c5.468-6.64,15.55-15.967,30.249-27.979c14.696-12.012,25.17-20.824,31.421-26.44c6.249-5.614,12.378-13.378,18.384-23.291  c6.006-9.911,9.009-20.922,9.009-33.032c0-7.713-1.442-15.161-4.321-22.339c-2.882-7.178-6.91-13.5-12.085-18.97  c-5.177-5.468-11.183-9.764-18.018-12.891c-10.547-4.688-23.291-7.031-38.232-7.031c-12.403,0-23.218,1.831-32.446,5.493  s-16.846,8.473-22.852,14.429c-6.006,5.958-10.524,12.598-13.55,19.922c-3.028,7.324-4.541,14.355-4.541,21.094  c0,5.566,1.611,9.961,4.834,13.184s7.274,4.834,12.158,4.834c5.566,0,9.789-1.758,12.671-5.273  c2.879-3.516,5.468-8.544,7.764-15.088c2.293-6.542,3.93-10.547,4.907-12.012c7.324-11.229,17.381-16.846,30.176-16.846  c6.054,0,11.646,1.369,16.772,4.102c5.127,2.735,9.178,6.569,12.158,11.499c2.978,4.933,4.468,10.524,4.468,16.772  c0,5.763-1.392,11.646-4.175,17.651s-6.837,11.865-12.158,17.578c-5.324,5.713-11.989,11.403-19.995,17.065  c-4.493,3.028-11.964,9.352-22.412,18.97c-10.451,9.62-22.169,21.167-35.156,34.644c-3.126,3.321-6.006,7.887-8.643,13.696  c-2.637,5.812-3.955,10.474-3.955,13.989c0,5.47,2.051,10.231,6.152,14.282c4.102,4.054,9.814,6.079,17.139,6.079H306.6  c6.445,0,11.254-1.659,14.429-4.98c3.172-3.319,4.761-7.372,4.761-12.158C325.789,332.97,323.786,328.722,319.783,325.595z" data-original="#FFFFFF"/></g> </svg>
									</li>
									<li class="shxt">
										<svg class="number" number="3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 496.158 496.158" style="enable-background:new 0 0 496.158 496.158;" xml:space="preserve" width="512px" height="512px" class=""><g><path d="M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07  c137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z" data-original="#56B48C" class="active-path" data-old_color="#4c4c4c" style="fill:#4C4C4C"/><path d="M319.637,269.711c-2.637-6.395-6.569-12.231-11.792-17.505c-5.226-5.273-11.646-9.961-19.263-14.063  c7.91-6.64,13.989-13.451,18.237-20.435c4.248-6.981,6.372-15.355,6.372-25.122c0-7.42-1.465-14.355-4.395-20.801  s-7.276-12.108-13.037-16.992c-5.763-4.882-12.55-8.617-20.361-11.206c-7.814-2.586-16.457-3.882-25.928-3.882  c-10.84,0-20.654,1.538-29.443,4.614s-16.139,7.155-22.046,12.231c-5.91,5.079-10.4,10.426-13.477,16.04  c-3.076,5.617-4.614,10.963-4.614,16.04c0,5.273,1.634,9.499,4.907,12.671c3.271,3.175,6.859,4.761,10.767,4.761  c3.319,0,6.249-0.586,8.789-1.758c2.538-1.172,4.296-2.783,5.273-4.834c1.659-3.809,3.49-7.86,5.493-12.158  c2-4.296,4.125-7.812,6.372-10.547c2.245-2.733,5.296-4.93,9.155-6.592c3.856-1.659,8.764-2.49,14.722-2.49  c8.789,0,15.77,2.71,20.947,8.13c5.175,5.42,7.764,11.891,7.764,19.409c0,9.865-3.248,17.432-9.741,22.705  c-6.496,5.273-14.234,7.91-23.218,7.91h-6.006c-6.935,0-12.158,1.442-15.674,4.321c-3.516,2.882-5.273,6.665-5.273,11.353  c0,4.786,1.465,8.521,4.395,11.206c2.93,2.687,7.079,4.028,12.451,4.028c1.172,0,3.809-0.194,7.91-0.586  c4.102-0.389,7.127-0.586,9.082-0.586c11.133,0,19.823,3.248,26.074,9.741c6.249,6.496,9.375,15.454,9.375,26.88  c0,7.716-1.831,14.502-5.493,20.361s-8.302,10.279-13.916,13.257c-5.617,2.98-11.451,4.468-17.505,4.468  c-10.547,0-18.727-3.296-24.536-9.888c-5.812-6.592-11.256-16.674-16.333-30.249c-0.783-2.245-2.442-4.175-4.98-5.786  c-2.541-1.611-5.177-2.417-7.91-2.417c-5.47,0-10.034,1.735-13.696,5.2c-3.662,3.468-5.493,8.034-5.493,13.696  c0,4.395,1.538,9.961,4.614,16.699s7.617,13.257,13.623,19.556s13.646,11.549,22.925,15.747c9.276,4.198,19.775,6.299,31.494,6.299  c11.522,0,22.046-1.831,31.567-5.493s17.748-8.739,24.683-15.234c6.933-6.493,12.181-13.891,15.747-22.192  c3.563-8.299,5.347-16.894,5.347-25.781C323.592,283.018,322.273,276.109,319.637,269.711z" data-original="#FFFFFF" style="fill:#FFFFFF"/></g> </svg>
									</li>
									<li class="shxt">
										<svg class="number" number="4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 496.158 496.158" style="enable-background:new 0 0 496.158 496.158;" xml:space="preserve" width="512px" height="512px" class=""><g><path d="M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07  c137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z" data-original="#56B48C" class="active-path" data-old_color="#4c4c4c" style="fill:#4C4C4C"/><path style="fill:#FFFFFF;" d="M324.983,279.892c-4.541-2.051-10.572-3.076-18.091-3.076h-6.299V163.437  c0-16.992-7.423-25.488-22.266-25.488c-4.591,0-8.521,1.538-11.792,4.614c-3.273,3.076-7.448,8.034-12.524,14.868l-77.637,103.857  c-2.149,2.833-3.955,5.226-5.42,7.178c-1.465,1.955-2.882,3.98-4.248,6.079c-1.369,2.101-2.394,4.102-3.076,6.006  c-0.685,1.904-1.025,3.786-1.025,5.64c0,7.228,2.318,12.941,6.958,17.139c4.637,4.2,11.595,6.299,20.874,6.299h73.535v27.246  c0,7.324,1.685,12.868,5.054,16.626s7.787,5.64,13.257,5.64c5.566,0,10.009-1.831,13.33-5.493c3.319-3.662,4.98-9.251,4.98-16.772  V309.63h8.936c7.42,0,12.987-1.293,16.699-3.882c3.71-2.586,5.566-6.713,5.566-12.378  C331.795,286.436,329.524,281.943,324.983,279.892z M263.973,276.816h-62.988l62.988-85.107V276.816z" data-original="#FFFFFF"/></g> </svg>
									</li>
									<li class="shxt">
										<svg class="number" number="5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 496.158 496.158" style="enable-background:new 0 0 496.158 496.158;" xml:space="preserve" width="512px" height="512px" class=""><g><path d="M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07  c137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z" data-original="#56B48C" class="active-path" data-old_color="#4c4c4c" style="fill:#4C4C4C"/><path style="fill:#FFFFFF;" d="M320.516,255.136c-3.516-8.496-8.35-15.843-14.502-22.046c-6.152-6.2-13.307-11.06-21.46-14.575  c-8.155-3.516-16.919-5.273-26.294-5.273c-11.719,0-24.513,3.712-38.379,11.133l8.35-47.461h69.58  c7.226,0,12.694-1.561,16.406-4.688c3.71-3.124,5.566-7.226,5.566-12.305c0-11.62-7.617-17.432-22.852-17.432h-77.344  c-8.4,0-14.454,1.904-18.164,5.713c-3.712,3.809-6.251,9.913-7.617,18.311l-12.304,70.166c-1.076,6.152-1.611,9.474-1.611,9.961  c0,4.395,1.854,8.327,5.566,11.792c3.71,3.468,7.958,5.2,12.744,5.2c4.395,0,9.984-2.563,16.772-7.69  c6.786-5.127,11.986-8.716,15.601-10.767c3.612-2.051,9.618-3.076,18.018-3.076c6.834,0,13.037,1.637,18.604,4.907  c5.566,3.273,10.009,8.229,13.33,14.868c3.319,6.642,4.98,14.648,4.98,24.023c0,8.693-1.538,16.457-4.614,23.291  c-3.076,6.837-7.448,12.208-13.11,16.113c-5.665,3.907-12.257,5.859-19.775,5.859c-8.203,0-15.626-2.417-22.266-7.251  c-6.642-4.834-11.916-11.595-15.82-20.288c-4.005-9.471-10.107-14.209-18.311-14.209c-4.786,0-8.766,1.71-11.938,5.127  c-3.175,3.419-4.761,7.031-4.761,10.84c0,6.251,2.271,13.55,6.812,21.899s12.254,15.747,23.145,22.192  c10.888,6.445,25.072,9.668,42.554,9.668c15.624,0,29.418-3.419,41.382-10.254c11.961-6.834,21.117-16.063,27.466-27.686  c6.347-11.62,9.521-24.511,9.521-38.672C325.789,272.765,324.031,263.632,320.516,255.136z" data-original="#FFFFFF"/></g> </svg>
									</li>
									<li class="shxt">
										<svg class="number" number="6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 496.158 496.158" style="enable-background:new 0 0 496.158 496.158;" xml:space="preserve" width="512px" height="512px" class=""><g><path d="M248.082,0.003C111.07,0.003,0,111.061,0,248.085c0,137,111.07,248.07,248.082,248.07  c137.006,0,248.076-111.07,248.076-248.07C496.158,111.061,385.088,0.003,248.082,0.003z" data-original="#56B48C" class="active-path" data-old_color="#4c4c4c" style="fill:#4C4C4C"/><path style="fill:#FFFFFF;" d="M321.248,258.652c-3.223-8.69-7.789-16.234-13.696-22.632c-5.91-6.395-12.794-11.327-20.654-14.795  c-7.862-3.465-16.432-5.2-25.708-5.2c-9.668,0-18.409,1.904-26.221,5.713c-7.814,3.809-15.04,9.668-21.68,17.578  c1.268-26.562,5.468-45.019,12.598-55.371c3.516-5.077,7.837-9.105,12.964-12.085c5.127-2.978,10.277-4.468,15.454-4.468  c6.445,0,12.108,1.783,16.992,5.347c4.882,3.566,8.446,8.276,10.693,14.136c1.659,4.591,4.248,8.18,7.764,10.767  c3.516,2.589,7.324,3.882,11.426,3.882c4.688,0,8.544-1.634,11.572-4.907c3.026-3.271,4.541-6.908,4.541-10.913  c0-6.64-2.417-13.573-7.251-20.801c-4.834-7.226-12.012-13.28-21.533-18.164c-9.521-4.882-20.533-7.324-33.032-7.324  c-12.989,0-24.562,2.442-34.717,7.324c-10.158,4.884-18.8,12.11-25.928,21.68c-7.13,9.572-12.598,21.632-16.406,36.182  c-3.809,14.552-5.713,31.055-5.713,49.512c0,22.657,3.149,41.821,9.448,57.495s15.404,27.516,27.319,35.522  c11.913,8.009,26.074,12.012,42.48,12.012c14.257,0,27.026-3.149,38.306-9.448s20.068-15.063,26.367-26.294  c6.299-11.229,9.448-23.73,9.448-37.5C326.082,276.427,324.471,267.345,321.248,258.652z M277.303,318.198  c-6.445,8.057-14.601,12.085-24.463,12.085c-10.353,0-18.947-4.395-25.781-13.184c-6.837-8.789-10.254-19.775-10.254-32.959  c0-8.203,1.685-15.355,5.054-21.46c3.369-6.102,7.812-10.767,13.33-13.989c5.516-3.223,11.302-4.834,17.358-4.834  c6.347,0,12.158,1.685,17.432,5.054c5.274,3.369,9.423,8.253,12.451,14.648c3.026,6.397,4.541,14.04,4.541,22.925  C286.971,299.571,283.748,310.141,277.303,318.198z" data-original="#FFFFFF"/></g> </svg>
									</li>
								</ul>
								<div class="literature">
									<h5 class="point_me why_content_header">Place your Order</h5>
									<div class="review">The first step would be to submit your order, including your project requirements along with the corresponding materials or files involved. We accept all common file formats.</div>
								</div>
							</div>
						</div>
					</div>
					<div id="pricing">
						<div id="pricing-content">
							<div class="weepit">
								<h4 class="why_content_header color">Coding Student Project Pricing</h4>
								<div class="why_explained color">Since every project is different in complexity and volume, the pricing may vary. Here is how we charge for Coding Student Project</div>
								<h4 class="why_content_header " style="color:white">Price Starts from ...</h4>
								<div class="tb">
									<div class="tablex">
										<div class="modern">Standard Delivery</div>
										<div class="dirty">
											<div class="thirty">Desktop Project</div>
											<div class="perisic">&#8358;15,000</div>
										</div>
										<div class="dirty">
											<div class="thirty">Web Project</div>
											<div class="perisic">&#8358;18,000</div>
										</div>
										<div class="dirty">
											<div class="thirty">Mobile Project</div>
											<div class="perisic">&#8358;20,000</div>
										</div>
									</div>
									<div class="tablex">
										<div class="modern">Quick Delivery</div>
										<div class="dirty">
											<div class="thirty">Desktop Project</div>
											<div class="perisic">&#8358;17,000</div>
										</div>
										<div class="dirty">
											<div class="thirty">Web Project</div>
											<div class="perisic">&#8358;20,000</div>
										</div>
										<div class="dirty">
											<div class="thirty">Mobile Project</div>
											<div class="perisic">&#8358;25,000</div>
										</div>
									</div>
								</div>
								<br/><br/><br/><br/>
							</div>
						</div>
					</div>
					<div id="wywg">
						<div id="wywg-content">
							<div class="weepit">
								<h4 class="why_content_header">What you'll Get</h4>
								<div class="why_explained">Here are what you'll get when you let us code your Project</div>
								<div class="two">
									<svg xmlns="http://www.w3.org/2000/svg" height="512px" viewBox="0 -43 512.00056 512" width="512px" class="triple"><g><path d="m162.695312 29.84375c-40.96875 29.226562-67.734374 77.140625-67.734374 131.195312v63.703126c0 12.796874 10.375 23.179687 23.179687 23.179687s23.179687-10.382813 23.179687-23.179687v-63.703126c0-36.59375 17.226563-69.230468 43.980469-90.234374l3.738281-30.289063zm0 0" fill="#f05e71" data-original="#F05E71" class="" data-old_color="#FF7500" style="fill:#65FF00"/><path d="m349.304688 29.84375-26.34375 10.671875 3.742187 30.289063c26.753906 21.003906 43.976563 53.640624 43.976563 90.234374v63.707032c0 12.792968 10.375 23.175781 23.179687 23.175781s23.179687-10.382813 23.179687-23.175781v-63.707032c0-54.054687-26.765624-101.96875-67.734374-131.195312zm0 0" fill="#f05e71" data-original="#F05E71" class="" data-old_color="#FF7500" style="fill:#65FF00"/><path d="m124.25 121.230469c-8.347656 0-16.667969.769531-24.851562 2.261719-2.890626 12.050781-4.433594 24.621093-4.433594 37.546874v63.703126c0 12.796874 10.371094 23.179687 23.175781 23.179687 12.808594 0 23.179687-10.382813 23.179687-23.179687v-63.703126c0-13.992187 2.527344-27.402343 7.132813-39.808593zm0 0" fill="#e85066" data-original="#E85066" class="" data-old_color="#E85066" style="fill:#5EFF00"/><path d="m387.75 121.230469c8.347656 0 16.667969.769531 24.851562 2.261719 2.890626 12.050781 4.4375 24.621093 4.4375 37.546874v63.703126c0 12.796874-10.375 23.179687-23.179687 23.179687s-23.179687-10.382813-23.179687-23.179687v-63.703126c0-13.992187-2.527344-27.402343-7.132813-39.808593zm0 0" fill="#e85066" data-original="#E85066" class="" data-old_color="#E85066" style="fill:#5EFF00"/><path d="m149.203125 330.6875 20.605469-76.238281-20.605469-102.3125h-24.953125c-9.375 0-18.511719 1.214843-27.238281 3.503906l-23.351563 76 23.351563 99.046875-23.351563 50.816406 23.351563 44.96875h52.191406l24.039063-47.894531zm0 0" fill="#514e5b" data-original="#514E5B" class="active-path" data-old_color="#E85066" style="fill:#F7F3F4"/><path d="m438.339844 231.640625-23.351563-76c-8.726562-2.289063-17.863281-3.503906-27.238281-3.503906h-24.953125l-20.605469 102.3125 20.605469 76.238281-24.039063 47.890625 24.039063 47.894531h52.191406l23.351563-44.96875-23.351563-50.816406zm0 0" fill="#514e5b" data-original="#514E5B" class="active-path" data-old_color="#E85066" style="fill:#F7F3F4"/><path d="m256 311.453125-106.796875 19.234375v95.785156h213.59375v-95.785156zm0 0" fill="#5c5766" data-original="#5C5766" class="" data-old_color="#FF7500" style="fill:#15C9EB"/><path d="m49.226562 299.777344-47.78125 30.910156c-9.449218 49.726562 28.667969 95.785156 79.292969 95.785156h16.273438v-95.785156zm0 0" fill="#5c5766" data-original="#5C5766" class="" data-old_color="#FF7500" style="fill:#15C9EB"/><path d="m510.558594 330.6875-47.785156-19.234375-47.785157 19.234375v95.785156h16.277344c50.621094 0 88.738281-46.058594 79.292969-95.785156zm0 0" fill="#5c5766" data-original="#5C5766" class="" data-old_color="#FF7500" style="fill:#15C9EB"/><path d="m97.011719 155.640625v175.046875h-95.566407l17.347657-91.253906c7.878906-41.433594 38.949219-73.503906 78.21875-83.792969zm0 0" fill="#f05e71" data-original="#F05E71" class="" data-old_color="#FF7500" style="fill:#65FF00"/><path d="m414.988281 155.640625v175.046875h95.570313l-17.351563-91.253906c-7.878906-41.433594-38.949219-73.503906-78.21875-83.792969zm0 0" fill="#f05e71" data-original="#F05E71" class="" data-old_color="#FF7500" style="fill:#65FF00"/><path d="m149.203125 152.136719h213.597656v178.550781h-213.597656zm0 0" fill="#f05e71" data-original="#F05E71" class="" data-old_color="#FF7500" style="fill:#65FF00"/><g fill="#514e5b"><path d="m185.675781 252.09375c-4.265625 0-7.726562-3.457031-7.726562-7.726562v-12.726563c0-4.265625 3.460937-7.726563 7.726562-7.726563 4.269531 0 7.726563 3.460938 7.726563 7.726563v12.726563c0 4.269531-3.457032 7.726562-7.726563 7.726562zm0 0" data-original="#000000" class="" data-old_color="#00D6FF" style="fill:#15C9EB"/><path d="m326.324219 252.09375c-4.269531 0-7.726563-3.457031-7.726563-7.726562v-12.726563c0-4.265625 3.457032-7.726563 7.726563-7.726563 4.265625 0 7.726562 3.460938 7.726562 7.726563v12.726563c0 4.269531-3.460937 7.726562-7.726562 7.726562zm0 0" data-original="#000000" class="" data-old_color="#00D6FF" style="fill:#15C9EB"/><path d="m256 258.886719c-8.992188 0-17.441406-3.761719-23.171875-10.320313-2.808594-3.210937-2.484375-8.09375.730469-10.902344 3.214844-2.808593 8.09375-2.480468 10.902344.734376 2.796874 3.199218 7.003906 5.035156 11.539062 5.035156s8.742188-1.835938 11.539062-5.035156c2.808594-3.214844 7.691407-3.539063 10.902344-.734376 3.214844 2.808594 3.542969 7.691407.734375 10.902344-5.734375 6.558594-14.183593 10.320313-23.175781 10.320313zm0 0" data-original="#000000" class="" data-old_color="#00D6FF" style="fill:#15C9EB"/><path d="m349.304688 29.84375c-4.101563 15.535156-11.980469 29.535156-22.601563 40.960938-19.503906-15.308594-44.050781-24.445313-70.703125-24.445313s-51.199219 9.136719-70.699219 24.445313c-10.621093-11.425782-18.503906-25.425782-22.605469-40.960938 26.34375-18.78125 58.558594-29.84375 93.304688-29.84375 34.75 0 66.960938 11.0625 93.304688 29.84375zm0 0" data-original="#000000" class="" data-old_color="#00D6FF" style="fill:#15C9EB"/></g></g> </svg>

								</div>
								<div class="three">
									<ul class="leap">
										<li class="woosh">
											<svg version="1.1" id="checky" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
													<path style="fill:#6AC259;" d="M213.333,0C95.518,0,0,95.514,0,213.333s95.518,213.333,213.333,213.333
														c117.828,0,213.333-95.514,213.333-213.333S331.157,0,213.333,0z M174.199,322.918l-93.935-93.931l31.309-31.309l62.626,62.622
														l140.894-140.898l31.309,31.309L174.199,322.918z"/>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
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
											<span class="whiplash">ScreenShots of the Project Implementation</span>
										</li>
										<li class="woosh">
											<svg version="1.1" id="checky" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
													<path style="fill:#6AC259;" d="M213.333,0C95.518,0,0,95.514,0,213.333s95.518,213.333,213.333,213.333
														c117.828,0,213.333-95.514,213.333-213.333S331.157,0,213.333,0z M174.199,322.918l-93.935-93.931l31.309-31.309l62.626,62.622
														l140.894-140.898l31.309,31.309L174.199,322.918z"/>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
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
											<span class="whiplash">Project Codes</span>
										</li>
										<li class="woosh">
											<svg version="1.1" id="checky" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
													<path style="fill:#6AC259;" d="M213.333,0C95.518,0,0,95.514,0,213.333s95.518,213.333,213.333,213.333
														c117.828,0,213.333-95.514,213.333-213.333S331.157,0,213.333,0z M174.199,322.918l-93.935-93.931l31.309-31.309l62.626,62.622
														l140.894-140.898l31.309,31.309L174.199,322.918z"/>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
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
											<span class="whiplash">Set-Up Applications of the Project</span>
										</li>
										<li class="woosh">
											<svg version="1.1" id="checky" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
													<path style="fill:#6AC259;" d="M213.333,0C95.518,0,0,95.514,0,213.333s95.518,213.333,213.333,213.333
														c117.828,0,213.333-95.514,213.333-213.333S331.157,0,213.333,0z M174.199,322.918l-93.935-93.931l31.309-31.309l62.626,62.622
														l140.894-140.898l31.309,31.309L174.199,322.918z"/>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
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
											<span class="whiplash">Video Explanation of the Project</span>
										</li>
										<li class="woosh">
											<svg version="1.1" id="checky" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
													<path style="fill:#6AC259;" d="M213.333,0C95.518,0,0,95.514,0,213.333s95.518,213.333,213.333,213.333
														c117.828,0,213.333-95.514,213.333-213.333S331.157,0,213.333,0z M174.199,322.918l-93.935-93.931l31.309-31.309l62.626,62.622
														l140.894-140.898l31.309,31.309L174.199,322.918z"/>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
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
											<span class="whiplash">Extra Materials Involved in the code of the Project</span>
										</li>
									</ul>
								</div>
								<div class="four">
									<button class="software_read_more" title="GetSamples"><a style="text-decoration:none" href="../downloads/sample.zip">View Sample</a></button>
								</div>
							</div>
						</div>
					</div>
					<div id="order">
						<div id="order-content">
							<div class="weepit">
								<button class="main main_dram" title="Order Now">Order Now</button>
							</div>
						</div>
					</div>
				</div>
				<div id="fragment-2">
					<div class="wrap-it">
						<div class="fig">
							<div class="void">
								<div class="void-left"><div class="glow">
									<div class="flower">
										<div class="sun">
											<div id="opps"></div>
											<div class="moon">
												<svg version="1.1" class="see" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
																														viewBox="0 0 350 350" style="enable-background:new 0 0 350 350;" xml:space="preserve">
																													<g>
																														<path d="M175,171.173c38.914,0,70.463-38.318,70.463-85.586C245.463,38.318,235.105,0,175,0s-70.465,38.318-70.465,85.587
																															C104.535,132.855,136.084,171.173,175,171.173z"/>
																														<path d="M41.909,301.853C41.897,298.971,41.885,301.041,41.909,301.853L41.909,301.853z"/>
																														<path d="M308.085,304.104C308.123,303.315,308.098,298.63,308.085,304.104L308.085,304.104z"/>
																														<path d="M307.935,298.397c-1.305-82.342-12.059-105.805-94.352-120.657c0,0-11.584,14.761-38.584,14.761
																															s-38.586-14.761-38.586-14.761c-81.395,14.69-92.803,37.805-94.303,117.982c-0.123,6.547-0.18,6.891-0.202,6.131
																															c0.005,1.424,0.011,4.058,0.011,8.651c0,0,19.592,39.496,133.08,39.496c113.486,0,133.08-39.496,133.08-39.496
																															c0-2.951,0.002-5.003,0.005-6.399C308.062,304.575,308.018,303.664,307.935,298.397z"/>
																													</g>
																													<g>
																													</g>
																													<g>
																													</g>
																													<g>
																													</g>
																													<g>
																													</g>
																													<g>
																													</g>
																													<g>
																													</g>
																													<g>
																													</g>
																													<g>
																													</g>
																													<g>
																													</g>
																													<g>
																													</g>
																													<g>
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
										<div class="half-left">
											<div class="brrgh">
											<svg version="1.1" id="piper" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
												<path style="fill:#FBBB00;" d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
													c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
													C103.821,274.792,107.225,292.797,113.47,309.408z"/>
												<path style="fill:#518EF8;" d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
													c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
													c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z"/>
												<path style="fill:#28B446;" d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
													c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
													c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"/>
												<path style="fill:#F14336;" d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
													c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
													C318.115,0,375.068,22.126,419.404,58.936z"/>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
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

												<span class="dim">Connect With Google</span>
											</div>
											<div class="drrgh">
											<svg version="1.1" id="piper" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
												<path style="fill:#FBBB00;" d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
													c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
													C103.821,274.792,107.225,292.797,113.47,309.408z"/>
												<path style="fill:#518EF8;" d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
													c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
													c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z"/>
												<path style="fill:#28B446;" d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
													c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
													c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"/>
												<path style="fill:#F14336;" d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
													c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
													C318.115,0,375.068,22.126,419.404,58.936z"/>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
												</g>
												<g>
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

												<span class="dim">Disconnect</span>
											</div>
										</div>
									</div>
								</div></div>
								<div class="void-right">
									<div class="womb stop-process">
										<div class="stan">
											<div class="form">
												<span class="Text">Project Title</span>
												<input type="text" id="projecttitle" class="form-field"/>
											</div>
											<div class="form">
												<span class="Text">Phone Number </span>
												<input type="text" id="phonenumber" class="form-field"/>
											</div>
											<div class="form">
												<span class="Text">Description </span>	
												<textarea type="text" id="descript" class="form-field-d"></textarea>
											</div>
											<div class="form">
												<input type="file" multiple class="hide" id="fila"/>
												<div class="widehat">
													<button class="frontier">Add Project Files</button>
												</div>
												<div class="mimi-x">
													
												</div>
											</div>
											<div class="formidable">
												<div class="mimi">
													<button class="thee" id="gain">Submit Order
													<svg class="lds-gooeyring" width="200px"  height="200px"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" style="background: none;"><defs>
																											<filter id="gooey" x="-100%" y="-100%" width="300%" height="300%" color-interpolation-filters="sRGB">
																											<feGaussianBlur in="SourceGraphic" stdDeviation="2.4000000000000004"></feGaussianBlur>
																										<feComponentTransfer result="cutoff">
																										<feFuncA type="linear" slope="10" intercept="-5"></feFuncA>
																										</feComponentTransfer>
																											</filter>
																										</defs><g filter="url(#gooey)"><g transform="translate(50 50)">
																										<g transform="rotate(55.5)">
																										<circle cx="17" cy="0" r="5.08" fill="#fdfdfd">
																											<animate attributeName="r" keyTimes="0;0.5;1" values="3.5999999999999996;8.399999999999999;3.5999999999999996" dur="4s" repeatCount="indefinite" begin="-4s"></animate>
																										</circle>
																										<animateTransform attributeName="transform" type="rotate" keyTimes="0;1" values="0;360" dur="4s" repeatCount="indefinite" begin="0s"></animateTransform>
																										</g>
																										</g><g transform="translate(50 50)">
																										<g transform="rotate(183)">
																										<circle cx="17" cy="0" r="4.64" fill="#85a2b6">
																											<animate attributeName="r" keyTimes="0;0.5;1" values="3.5999999999999996;8.399999999999999;3.5999999999999996" dur="2s" repeatCount="indefinite" begin="-3.6s"></animate>
																										</circle>
																										<animateTransform attributeName="transform" type="rotate" keyTimes="0;1" values="0;360" dur="2s" repeatCount="indefinite" begin="-0.4s"></animateTransform>
																										</g>
																										</g><g transform="translate(50 50)">
																										<g transform="rotate(22.5)">
																										<circle cx="17" cy="0" r="4.92" fill="#bbcedd">
																											<animate attributeName="r" keyTimes="0;0.5;1" values="3.5999999999999996;8.399999999999999;3.5999999999999996" dur="1.3333333333333333s" repeatCount="indefinite" begin="-3.2s"></animate>
																										</circle>
																										<animateTransform attributeName="transform" type="rotate" keyTimes="0;1" values="0;360" dur="1.3333333333333333s" repeatCount="indefinite" begin="-0.8s"></animateTransform>
																										</g>
																										</g><g transform="translate(50 50)">
																										<g transform="rotate(294)">
																										<circle cx="17" cy="0" r="7.6" fill="#dce4eb">
																											<animate attributeName="r" keyTimes="0;0.5;1" values="3.5999999999999996;8.399999999999999;3.5999999999999996" dur="1s" repeatCount="indefinite" begin="-2.8s"></animate>
																										</circle>
																										<animateTransform attributeName="transform" type="rotate" keyTimes="0;1" values="0;360" dur="1s" repeatCount="indefinite" begin="-1.2s"></animateTransform>
																										</g>
																										</g><g transform="translate(50 50)">
																										<g transform="rotate(277.5)">
																										<circle cx="17" cy="0" r="5.8" fill="#a00d1e">
																											<animate attributeName="r" keyTimes="0;0.5;1" values="3.5999999999999996;8.399999999999999;3.5999999999999996" dur="0.8s" repeatCount="indefinite" begin="-2.4s"></animate>
																										</circle>
																										<animateTransform attributeName="transform" type="rotate" keyTimes="0;1" values="0;360" dur="0.8s" repeatCount="indefinite" begin="-1.6s"></animateTransform>
																										</g>
																										</g><g transform="translate(50 50)">
																										<g transform="rotate(333)">
																										<circle cx="17" cy="0" r="4.32" fill="#be5960">
																											<animate attributeName="r" keyTimes="0;0.5;1" values="3.5999999999999996;8.399999999999999;3.5999999999999996" dur="0.6666666666666666s" repeatCount="indefinite" begin="-2s"></animate>
																										</circle>
																										<animateTransform attributeName="transform" type="rotate" keyTimes="0;1" values="0;360" dur="0.6666666666666666s" repeatCount="indefinite" begin="-2s"></animateTransform>
																										</g>
																										</g><g transform="translate(50 50)">
																										<g transform="rotate(100.5)">
																										<circle cx="17" cy="0" r="4.76" fill="#d69293">
																											<animate attributeName="r" keyTimes="0;0.5;1" values="3.5999999999999996;8.399999999999999;3.5999999999999996" dur="0.5714285714285714s" repeatCount="indefinite" begin="-1.6s"></animate>
																										</circle>
																										<animateTransform attributeName="transform" type="rotate" keyTimes="0;1" values="0;360" dur="0.5714285714285714s" repeatCount="indefinite" begin="-2.4s"></animateTransform>
																										</g>
																										</g><g transform="translate(50 50)">
																										<g transform="rotate(300)">
																										<circle cx="17" cy="0" r="7.12" fill="#fdfdfd">
																											<animate attributeName="r" keyTimes="0;0.5;1" values="3.5999999999999996;8.399999999999999;3.5999999999999996" dur="0.5s" repeatCount="indefinite" begin="-1.2s"></animate>
																										</circle>
																										<animateTransform attributeName="transform" type="rotate" keyTimes="0;1" values="0;360" dur="0.5s" repeatCount="indefinite" begin="-2.8s"></animateTransform>
																										</g>
																										</g><g transform="translate(50 50)">
																										<g transform="rotate(211.5)">
																										<circle cx="17" cy="0" r="5.4" fill="#85a2b6">
																											<animate attributeName="r" keyTimes="0;0.5;1" values="3.5999999999999996;8.399999999999999;3.5999999999999996" dur="0.4444444444444444s" repeatCount="indefinite" begin="-0.8s"></animate>
																										</circle>
																										<animateTransform attributeName="transform" type="rotate" keyTimes="0;1" values="0;360" dur="0.4444444444444444s" repeatCount="indefinite" begin="-3.2s"></animateTransform>
																										</g>
																										</g><g transform="translate(50 50)">
																										<g transform="rotate(195)">
																										<circle cx="17" cy="0" r="8" fill="#bbcedd">
																											<animate attributeName="r" keyTimes="0;0.5;1" values="3.5999999999999996;8.399999999999999;3.5999999999999996" dur="0.4s" repeatCount="indefinite" begin="-0.4s"></animate>
																										</circle>
																										<animateTransform attributeName="transform" type="rotate" keyTimes="0;1" values="0;360" dur="0.4s" repeatCount="indefinite" begin="-3.6s"></animateTransform>
																										</g>
																										</g></g></svg>
													</button>
													<button class="thee" id="refer">Refer Students and Earn</button>
													<div class="whosethat">
															
													</div>
												</div>
												<div class="error-message flush">
													<div class='alert alert-warning'>
														<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Something Broke!</b>
													</div>													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>						
		</div>
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
											<li class="soup"><a class="tv" href="/webapp/">Web Apps</a></li>
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

	  <script>
	  	$("#tabs").tabs();
		$(".main_dram").click(function(event){
			$("#tabs a[href='#fragment-2']")[0].click();
			$("html, body").animate({ scrollTop: 0 }, 4000);
		});
		var init=1;
		var title= ["Place your Order","Get Project Details", "Code your Project","First Preview","Adjustment if Needed", "Get your Project"];
		var express=["The first step would be to submit your order, including your project requirements along with the corresponding materials or files involved. We accept all common file formats.",
					 "Here relevant details concerning your project will be discussed. Note, it is important to discuss every details concerning your project.You'll also be confirmed as a student of a respective Instituition. After the review, an affordable price would be fixed due to your project complexity. Through a payment link we'll send to you, you'll make 30% of the payment .After we've received your payment, your project would be handed to a skilled manager",
					 "We are ready to proceed with the actual coding. At this step the manager codes your project and see that every necessary design is meet. What you get is a well-structured, hand-written, semantic and commented code",
					 "After the manager has double-checked that all bugs are cleared up, we are ready to provide you with a preview. Then, we wait for your feedback to proceed or fix anything amiss.",
					 "At this step of we add the finishing touches after carefully listening to your feedback. This is the time to make any tweaks and adjustments needed until the end result meets your expectations.",
					 "Once you are completely satisfied with the outcome, we provide you with a payment link through which you'll make 70% of the payment. After we receive your payment, we grant you access to all source files and provide our life-time support in case any bugs appear in the future."	
					];
		
		var myVar=setInterval(lamb, 10000);

		function checkAnime(number){
			var tt=$(".shxt")
				.first();
			if(number==0){
				tt.next().children("svg").css({"opacity":"0.4","transition":"0.4s"});
				tt.next().next().children("svg").css({"opacity":"0.4","transition":"0.4s"});
				tt.next().next().next().children("svg").css({"opacity":"0.4","transition":"0.4s"});
				tt.next().next().next().next().children("svg").css({"opacity":"0.4","transition":"0.4s"});
				tt.next().next().next().next().next().children("svg").css({"opacity":"0.4","transition":"0.4s"});
			}
			if(number==1){
				tt.next().children("svg").css({"opacity":"1","transition":"0.4s"});
				tt.next().next().children("svg").css({"opacity":"0.4","transition":"0.4s"});
				tt.next().next().next().children("svg").css({"opacity":"0.4","transition":"0.4s"});
				tt.next().next().next().next().children("svg").css({"opacity":"0.4","transition":"0.4s"});
				tt.next().next().next().next().next().children("svg").css({"opacity":"0.4","transition":"0.4s"});
			}
			if(number==2){
				tt.next().children("svg").css({"opacity":"1","transition":"0.4s"});
				tt.next().next().children("svg").css({"opacity":"1","transition":"0.4s"});
				tt.next().next().next().children("svg").css({"opacity":"0.4","transition":"0.4s"});
				tt.next().next().next().next().children("svg").css({"opacity":"0.4","transition":"0.4s"});
				tt.next().next().next().next().next().children("svg").css({"opacity":"0.4","transition":"0.4s"});
			}
			if(number==3){
				tt.next().children("svg").css({"opacity":"1","transition":"0.4s"});
				tt.next().next().children("svg").css({"opacity":"1","transition":"0.4s"});
				tt.next().next().next().children("svg").css({"opacity":"1","transition":"0.4s"});
				tt.next().next().next().next().children("svg").css({"opacity":"0.4","transition":"0.4s"});
				tt.next().next().next().next().next().children("svg").css({"opacity":"0.4","transition":"0.4s"});
			}
			if(number==4){
				tt.next().children("svg").css({"opacity":"1","transition":"0.4s"});
				tt.next().next().children("svg").css({"opacity":"1","transition":"0.4s"});
				tt.next().next().next().children("svg").css({"opacity":"1","transition":"0.4s"});
				tt.next().next().next().next().children("svg").css({"opacity":"1","transition":"0.4s"});
				tt.next().next().next().next().next().children("svg").css({"opacity":"0.4","transition":"0.4s"});
			}
			if(number==5){
				tt.next().children("svg").css({"opacity":"1","transition":"0.4s"});
				tt.next().next().children("svg").css({"opacity":"1","transition":"0.4s"});
				tt.next().next().next().children("svg").css({"opacity":"1","transition":"0.4s"});
				tt.next().next().next().next().children("svg").css({"opacity":"1","transition":"0.4s"});
				tt.next().next().next().next().next().children("svg").css({"opacity":"1","transition":"0.4s"});
			}
		}
		
		function lamb(){
			init++;
			if(init>6){
				init=0;
			}else if(init<0){
				init=6;
			}
			$(".point_me").html(title[init-1]);
			$(".review").html(express[init-1]);
			checkAnime(init-1);
		}
		$(".shxt .number").bind("mouseover", function(){
			init=$(this).attr("number")-1;
			clearInterval(myVar);
			$(".point_me").html(title[init]);
			$(".review").html(express[init]);
			checkAnime(init);
			myVar=setInterval(lamb,10000);
		});
		
	  </script>
	  <style>
		.lds-gooeyring{
			width:25px;
			height:25px;
			position:relative;
			top:5px;
			display:none;
		}
		.whosethat{
			position:relative;
			width:100%;
		}
		.fixme{
			position:relative;
			font-size: 14px;
			color:#4c4c4c;
		}
		.glass{
			position: relative;
			width:25px;
			height:25px;
		}
		.twine{
			position:relative;
			display:inline;
			margin:5px;
			border:1px solid gray;
		}
		.mimi{
			position:relative;
			padding:5%;
			width:100%;
		}
		.flush{
			display:none;
		}
		.thee{
			position:relative;
			outline:none;
			border:1px solid cornflowerblue;
			cursor:pointer;
			margin-bottom:10px;
			color: dodgerblue;
			background-color: darkblue;
			padding:10px;
			border-radius:5px;
			height:8%;
		}
		.mimi{
			position:relative;
			padding-left:25%;
			width:100%;
		}
		.formidable{
			position:relative;
			width:100%;
		}
		.frontier{
			float:right;
			cursor:pointer;
			position:relative;
			margin:0px;
			height:100%;
			border:0px;
			outline:0px;
			background:none;
			border-left:2px solid darkblue;
			color:#4c4c4c;
		}
		.widehat{
			position:relative;
			width:100%;
			cursor:pointer;
			height: 30px;
			border: 1px solid darkblue;
			padding:0px;
			border-radius: 5px;
		}
		.hide{
			opacity:0;
		}
		.form-field-d{
				position:relative;
				width:100%;
				outline:none;
				border:0px;
				border-bottom:1px solid darkblue;
				background:none;
				transition: .6s;
				height:50px;
				color:rgba(0,0,5,.8);
			}
			.form-field-d:focus{
				position:relative;
				width:100%;
				outline:none;
				border:0px;
				border-bottom:1px solid darkblue;
				background:none;
				transition: .6s;
				height:100px;
				color: White;
			}
			.form-field:focus{
				position:relative;
				width:100%;
				outline:none;
				border:0px;
				border-bottom:1px solid darkblue;
				background:none;
				transition: .4s;
				height:50px;
				color: White;
			}
			.Text{
				position:relative;
				color:#4c4c4c;
				transition:0.4s;
				font-size:14px;
			}
			.form-field{
				position:relative;
				width:100%;
				outline:none;
				border:0px;
				border-bottom:1px solid darkblue;
				background:none;
				transition: .4s;
				height:20px;
				color:rgba(0,0,5,.8);
			}
			.form{
				position: relative;
				width:100%;
				margin-bottom:20px;
			}
		.stan{
			position:relative;
			width:100%;
			height:100%;
			padding:10px;
		}
		.womb{
			position: relative;
			width:70%;
			-webkit-box-shadow: 3px 3px 5px 0px #4c4c4c;
				-moz-box-shadow:    3px 3px 5px 0px #4c4c4c;
				box-shadow:         3px 3px 5px 0px #4c4c4c;
				background-color: dodgerblue;
				padding-top:20px;
				border-radius:10px;
				margin:20px;
		}
		.stop-process{
			opacity:0.5;
			cursor:not-allowed;
			pointer-events: none;
		}
		@media screen and (max-width: 800px){
			.womb{
			position: relative;
			width:90%;
			-webkit-box-shadow: 3px 3px 5px 0px #4c4c4c;
				-moz-box-shadow:    3px 3px 5px 0px #4c4c4c;
				box-shadow:         3px 3px 5px 0px #4c4c4c;
				background-color: dodgerblue;
				padding-top:20px;
				border-radius:10px;
				margin:20px;
			}
		}
		.void-right{
				position:relative;
				width:70%;
				float: left;
			}
		#piper{
			position:relative;
			width:30px;
			height:30px;
			top:10px;
			padding-left:5px;
		}
		.see{
			position:relative;
			width:100px;
			height:100px;
			fill: orange;
			left:15%;
			top: 10px;
		}
		.brrgh,.drrgh{
			position:relative;
			//width:100%;
			outline:none;
			border-radius:5px;
			border:0px;
			background-color:#003DFF;
			font-family:'Teko', 'Poppins', Lato, Selawik, sans-serif;
			font-size: 17px;
			cursor:pointer;
				color: #ffffff;
				text-align:center;
				line-height: 40px;
				font-stretch: ultra-condensed;
		}
		.half-left{
			position: relative;
			width:100%;
			height:30%;
			padding:10px;
		}
		.moon{
			position: relative;
			width:150px;
			height:150px;
			border-radius: 50%;
			background-color: #ffe88c;
			left:10%;
		}
		.sun{
			position: relative;
			width:100%;
			height:70%;
			padding:20px;
		}
		.flower{
			position: relative;
			width: 50%;
			height: 40%;
			background-color:dodgerblue;
			border-radius: 5px;
			-webkit-box-shadow: 3px 3px 5px 0px #4c4c4c;
				-moz-box-shadow:    3px 3px 5px 0px #4c4c4c;
				box-shadow:         3px 3px 5px 0px #4c4c4c;
			
		}
		.glow{
			position:relative;
			width:100%;
			margin:20px;
		}
		
			.void-left{
				position:relative;
				width:30%;
				float: left;
			}
			.void{
				position:relative;
				width:100%;
			}
			.drrgh{
				display:none;
			}
			@media screen and (max-width: 1200px){
				#piper{
					position:relative;
					width:25px;
					height:25px;
					top:10px;
					padding-left:1px;
				}
				.brrgh,.drrgh{
						position:relative;
						//width:100%;
						outline:none;
						border-radius:5px;
						border:0px;
						background-color:#003DFF;
						cursor: pointer;
						font-family:'Teko', 'Poppins', Lato, Selawik, sans-serif;
						font-size: 9px;
						cursor:pointer;
							color: #ffffff;
							text-align:center;
							line-height: 40px;
							font-stretch: ultra-condensed;
					}
					.drrgh{
				display:none;
			}
				.see{
					position:relative;
					width:50px;
					height:50px;
					fill: orange;
					left:15%;
					top: 10px;
				}
				.moon{
					position: relative;
					width:75px;
					height:75px;
					border-radius: 50%;
					left:10%;
					background-color: #ffe88c;
				}
		
				.void-left{
					position:relative;
					width:30%;
					float: left;
					padding:20px;
				}
				.void-right{
					position:relative;
					width:70%;
					float: left;
					padding:20px;
				}
				.flower{
					position: relative;
					width: 50%;
					margin-left:10%;
					height: 40%;
					background-color:dodgerblue;
					border-radius: 5px;
					-webkit-box-shadow: 3px 3px 5px 0px #4c4c4c;
						-moz-box-shadow:    3px 3px 5px 0px #4c4c4c;
						box-shadow:         3px 3px 5px 0px #4c4c4c;
					
				}
			}
			@media screen and (max-width: 800px){
				.flower{
					position: relative;
					width: 70%;
					margin-left:10%;
					height: 40%;
					background-color:dodgerblue;
					border-radius: 5px;
					-webkit-box-shadow: 3px 3px 5px 0px #4c4c4c;
						-moz-box-shadow:    3px 3px 5px 0px #4c4c4c;
						box-shadow:         3px 3px 5px 0px #4c4c4c;
					
				}
				.void-right{
					position:relative;
					width:100%;
					float: left;
				}
				.void-left{
					position:relative;
					width:100%;
					float: left;
					padding:20px;
				}
				.moon{
					position: relative;
					width:75px;
					height:75px;
					border-radius: 50%;
					background-color: #ffe88c;
					left:25%;
				}
				.void{
					position:relative;
					width:100%;
				}
			}
			
			.fig{
				position:relative;
				width:100%;
			}
			.wrap-it{
				position:relative;
				width:100%;
				background-color: #ffffff;
				float:left;
				///background-image: linear-gradient(to bottom left,#f08,#00004d);
			}
		.tv{
			position: relative;
			text-decoration: none;
			color: #003DFF;
			font-family:'Poppins', Lato, Selawik, sans-serif;
				font-size: 13px;
				text-align:center;
				width: 100%;
				font-weight: lighter;
		}
		.soup{
			position: relative;
			font-family:'Poppins', 'Lato', 'Selawik', sans-serif;
				font-size: 13px;
				color: #003DFF;
				text-align:center;
				line-height: 40px;
				font-stretch: ultra-condensed;
				font-weight: lighter;
				margin: 0px;
				margin-bottom:10px;
		}
		.ye{
			position: relative;
			width: 100%;
			list-style: none;
		}
		.qubit{
			position: relative;
				font-family:'Poppins', Lato, Selawik, sans-serif;
				font-size: 17px;
				color: #003DFF;
				text-align:center;
				line-height: 40px;
				font-stretch: ultra-condensed;
				font-weight: bold;
				margin: 0px;
				margin-bottom:10px;
		}
		.orange{
			position: relative;
			width: 100%;
			padding:10px;
			list-style: none;
		}
		.forward{
			text-decoration: center;
			position: relative;
			float: left;
			width: 30%;
			height: auto;
		}
		.last{
			position:relative;
			width: 100%;
			float: left;
			padding:0px;
			margin:0px;
			background-color: #CCE4FF;
		}
		.last-content{
			position:relative;
			width: 100%;
		}
		@media screen and (max-width: 800px){
			.void-right{
				position:relative;
				width:100%;
				float: left;
			}
			.void-left{
				position:relative;
				width:100%;
				float: left;
				padding:20px;
			}
			.void{
				position:relative;
				width:100%;
			}
			.forward{
				text-decoration: center;
				position: relative;
				float: left;
				width: 100%;
				height: auto;
			}
			.soup{
				position: relative;
				font-family:'Poppins', 'Lato', 'Selawik', sans-serif;
					font-size: 9px;
					color: #003DFF;
					text-align:center;
					line-height: 40px;
					font-stretch: ultra-condensed;
					font-weight: bold;
					margin: 0px;
					margin-bottom:10px;
			}
			.ye{
				position: relative;
				width: 100%;
				list-style: none;
				padding:0px;
			}
		}
		.review{
			position: relative;
				font-family:'Poppins', Lato, Selawik, sans-serif;
				font-size: 14px;
				color: #4c4c4c;
				text-align:center;
				line-height: 40px;
				font-stretch: ultra-condensed;
				font-weight: lighter;
				margin: 0px;
				margin-bottom:10px;
		}
		.literature{
			position: relative;
			width:100%;
		}
		.keepitcool{
			position: relative;
			list-style: none;
			padding:0px;
			width: 100%;
			height: 10%;
		}
		.keepitcool .shxt{
			position: relative;
			float:left;
			margin-left:10px;
		}
		.number{
			position: relative;
			width: 30px;
			height:30px;
			opacity: 0.4;
		}
		.cleared{
			opacity: 1;
			transition: .4s;
		}
		.share{
			position:relative;
			width:50%;
		}
		.pablo{
			position: relative;
			width:100%;
			border: 1px solid #4c4c4c;
		}
		.tablo{
			position:relative;
			width:100%;
		}
			.main_dram{
				left: 45%;
				width: 200px;
				height: 70px;
				font-size: 30px;
			}
			.whiplash{
				position: relative;
				font-family:'Teko','Poppins', Lato, Selawik, sans-serif;
				font-size: 20px;
				color: #4c4c4c;
				text-align:center;
				line-height: 40px;
				font-stretch: ultra-condensed;
				font-weight: lighter;
				margin: 0px;
				margin-bottom:10px;
			}
			#checky{
				position:relative;
				width:25px;
				height:25px;
				top: 5px;
			}
		.four{
			position: relative;
			width: 100%;
		}
		.two, .three{
			float: left;
			width:50%;
		}
		.triple{
			position: relative;
			width: 300px;
			height: 300px;
			left: 0%;
		}
		.succ{
			position:relative;
			width:50%;
			float:left;
		}
		.toe{
			position:relative;
			width: 50%;
			float:left;
			text-align:center;
		}
		.dripit{
			fill: #4c4c4c;
			width:20px;
			height:20px;
		}
		.drip{
			position: relative;
			display:inline;
				font-family:'Poppins', Lato, Selawik, sans-serif;
				font-size: 14px;
				color: #4c4c4c;
				text-align:center;
				line-height: 40px;
				font-stretch: ultra-condensed;
				font-weight: lighter;
				margin: 0px;
				margin-bottom:10px;
		}
		.leap .foo-project{
			position:relative;
			float: left;
			margin:10px;
		}
		.app_title{
			position: relative;
			display:inline;
				font-family: 'Teko', 'Poppins', Lato, Selawik, sans-serif;
				font-size: 30px;
				color: #4c4c4c;
				text-align:center;
				line-height: 40px;
				font-stretch: ultra-condensed;
				font-weight: lighter;
				margin: 0px;
				margin-bottom:10px;
		}
		.app_project{
			position:relative;
			width:50px;
			top:15px;
			height:50px;
		}
		.prom .king{
			position:relative;
			float: left;
			margin:10px;
		}
		.prom{
			position:relative;
			width:100%;
			list-style:none;
			margin-top:20px;
			padding:0px;
		}
		body{
				position:relative;
				padding:0px;
				margin:0px;
			}
			#process{
			position:relative;
			background-color: #ffffff;
			width:100%;
			float:left;
			margin:0px;
		}
		#process-content{
			position:relative;
			width:100%;
		}
		#wywg{
			position:relative;
			background-color: yellow;
			width:100%;
			float:left;
			margin:0px;
		}
		#wywg-content{
			position:relative;
			width:100%;
		}
		#order{
			position:relative;
			background-color: #e8061d;
			width:100%;
			float:left;
			margin:0px;
		}
		#order-content{
			position:relative;
			width:100%;
		}
		#pricing{
			position:relative;
			background-color: #00a0d2;
			width:100%;
			float:left;
			margin:0px;
		}
		#pricing-content{
			position:relative;
			width:100%;
		}
		#language{
			position:relative;
			background-color: #ffe88c;
			width:100%;
			float:left;
			margin:0px;
		}
		#language-content{
			position:relative;
			width:100%;
		}
		#success-story{
			position:relative;
			width:100%;
		}
		#success-story{
			position:relative;
			background-color: #000000;
			width:100%;
			float:left;
			padding:5px;
			margin:0px;
		}
		#feature{
			position:relative;
			background-color: #68f27c;
			width:100%;
			float:left;
			margin:0px;
		}
		#feature-content{
			position:relative;
			width:100%;
		}
		.soup{
			position: relative;
				font-family: 'Poppins', Lato, Selawik, sans-serif;
				font-size: 14px;
				color: #4c4c4c;
				text-align:justify;
				line-height: 40px;
				font-stretch: ultra-condensed;
				font-weight: lighter;
				margin: 0px;
				margin-bottom:10px;
		}
		.tips{
			position: relative;
				font-family: 'Teko', 'Poppins', Lato, Selawik, sans-serif;
				font-size: 30px;
				color: #4c4c4c;
				text-align:center;
				line-height: 40px;
				font-stretch: ultra-condensed;
				font-weight: lighter;
				margin: 0px;
				margin-bottom:10px;
			
		}
		.team-report{
			position:relative;
			height:80%;
			width:100%;
		}
		#technical_icon{
			position:relative;
			width: 50px;
			height: 50px;
			left:35%;
			margin:20px;
		}
		#technical_icon_2{
			position:relative;
			width: 70px;
			height: 70px;
			left:35%;
			margin:20px;
		}
		.team-two{
			position:relative;
			width:100%;
			height:20%;
			margin-bottom:10px;
			float:left;
		}
		.trick{
			position:relative;
			width:100%;
			height:100%;
		}
		.leap .foo{
			position:relative;
			float: left;
			width:30%;
			height:50%;
			margin:10px;
		}
		.leap{
			position:relative;
			width:100%;
			list-style:none;
			margin-top:20px;
			padding:0px;
		}
			#why{
				position:relative;
				width:100%;
				background-color: #ffffff;
				float:left;
			}
			.why_content{
				position:relative;
				width:100%;
			}
			.weepit{
				position:relative;
				width:100%;
				padding:20px;
			}
			.why_content_header{
				position: relative;
				font-family: 'Teko', 'Poppins', Lato, Selawik, sans-serif;
				font-size: 40px;
				color: #4c4c4c;
				text-align:center;
				text-shadow: 5px 9px 0 rgba(117, 0, 0,.15);
				line-height: 40px;
				font-stretch: ultra-condensed;
				font-weight: lighter;
				margin: 0px;
				margin-bottom:10px;
			}
			.why_explained{
				position:relative;
				color:#4c4c4c;
				text-align:center;
				font-weight:200px;
				font-family:'Poppins', Lato, Selawik, sans-serif;
				font-size: 14px;
			}
			#peep{
				width:560px;
				height:315px;
			}
			
			@media screen and (max-width: 800px){
				.main_dram{
					left: 20%;
					width: 200px;
					height: 50px;
					font-size: 30px;
				}
				.two, .three{
					width:100%;
				}
				.triple{
					position: relative;
					width: 100px;
					height: 100px;
					left: 35%;
				}
				#peep{
					width:100%;
					height:200px;
				}
			.leap .foo{
				position:relative;
				float: left;
				margin:10px;
				width:100%;
				display: inline-block;
				padding-left:0px;
				height: 50%;
				padding:5px;
				margin-left:0px;
			}
			.weepit{
					position:relative;
					width:100%;
					padding:5px;
				}
				.team-report{
					position:relative;
					height:80%;
					width:100%;
				}
				#technical_icon_2{
					position:relative;
					width: 40px;
					height: 40px;
					left:35%;
					margin:20px;
				}
				.team-two{
					position:relative;
					width:100%;
					height:20%;
					margin-bottom:10px;
					float:left;
				}
				.succ{
					position:relative;
					width:100%;
					float:left;
				}
				.toe{
					position:relative;
					width: 100%;
					float:left;
					text-align:center;
				}
				.ye .soup{
					position: relative;
					font-family:'Poppins', 'Lato', 'Selawik', sans-serif;
						font-size: 9px;
						color: #003DFF;
						text-align:center;
						line-height: 40px;
						font-stretch: ultra-condensed;
						font-weight: bold;
						margin: 0px;
						margin-bottom:10px;
						width:100%;
				}
				}
				.color{
					color: #fff;
				}
	  </style>


</body></html>