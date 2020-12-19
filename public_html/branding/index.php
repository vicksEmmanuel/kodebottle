<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Kode Bottle</title>
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      background: #eef442;
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
        color: #eef442;
      }
    .ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited {
      color: #eef442;
      text-decoration: none;
    }
    #tabs{
      border-bottom:0px;
    }
    .ui-tabs .ui-tabs-panel{
      padding:0px;
    }
  </style>
  <link rel="stylesheet" href="../css/branding.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/flickity@2.2.1/dist/flickity.pkgd.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.5.8/firebase.js"></script>
  <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css"/>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
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
				<span id="header_text">Branding</span>
				<img src="../image/elijah-o-donnell-378338-unsplash.jpg" id="header_img">
			</div>
			<div id="tabs">
				<ul>
					<li><a href="#fragment-1"><span>Description</span></a></li>
                    <li><a href="#fragment-2"><span>Samples</span></a></li>
					<li><a href="#fragment-2"><span>Order</span></a></li>
				</ul>
				<div id="fragment-1">
				</div>
				<div id="fragment-2">
				</div>
                <div id="fragment-3">
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
     <script>
	  	$("#tabs").tabs();
	 </script>
     <style>
        .tv{
		  position: relative;
		  text-decoration: none;
		  color: #003DFF;
		  font-family:'Poppins', Lato, Selawik, sans-serif;
			font-size: 13px;
			text-align:center;
			width: 100%;
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
				font-weight: lighter;
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
     </style>
</body></html>