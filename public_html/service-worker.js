var app="KodeBottle --v1";
var appFiles=[
  "/",
  "/index.php",
  "/apps/",
  "/apps/index.php",
  "/branding/",
  "/branding/index.php",
  "/codingstudentproject/",
  "/codingstudentproject/index.php",
  "/codingstudentproject/js/codingstudentproject.js",
  "/codingstudentproject/js/kodebottle.php",
  "/css/about.css",
  "/css/apps.css",
  "/css/bootstrap.css",
  "/css/bootstrap.css.map",
  "/css/bootstrap.min.css",
  "/css/bootstrap.min.css.map",
  "/css/bootstrap-theme.css",
  "/css/bootstrap-theme.css.map",
  "/css/bootstrap-theme.min.css",
  "/css/bootstrap-theme.min.css.map",
  "/css/branding.css",
  "/css/codingstudentproject.css",
  "/css/contact.css",
  "/css/flickity.css",
  "/css/footloose.css",
  "/css/home.css",
  "/css/jquery-ui.css",
  "/css/webapps.css",
  "/js/bootstrap.js",
  "/js/bootstrap.min.js",
  "/js/flickity.pkgd.min.js",
  "/js/jquery.min.js",
  "/js/jquery-ui.js",
  "/js/kodebottle.js",
  "/webapps/",
  "/webapps/index.php",
  "/image/cropped-kodebottle-logo-full-png-3.png",
  "/image/elijah-o-donnell-378338-unsplash.jpg",
  "/image/fleetwood.jpg",
  "/image/hal-gatewood-613602-unsplash.jpg",
  "/image/icons8-angularjs-filled-100.png",
  "/image/icons8-angularjs-filled-100.png",
  "/image/icons8-jquery-filled-100.png",
  "/image/icons8-jquery-filled-100.png",
  "/image/icons8-nodejs-96.png",
  "/image/icons8-source-code-filled-100.png",
  "/image/icons8-swift-filled-100.png",
  "/image/img_1.jpg",
  "/image/img_2.png",
  "/image/img_3.png",
  "/image/img_4.jpg",
  "/image/img_5.jpg",
  "/image/img_6.png",
  "/image/integrity.png",
  "/image/john-paul-henry-307807-unsplash.jpg",
  "/image/process.png",
  "/image/refer.png",
  "/image/samuel-zeller-699374-unsplash.jpg",
  "/image/thought-catalog-740761-unsplash.jpg",
  "/image/vision.png",
  "/image/wave-charcoal.png"
];
self.addEventListener("install",function(e){
  console.log("Service Worker installed");
  e.waitUntil(
      caches.open(app).then(function(cache){
          console.log("Service worker caching files");
          return cache.addAll(appFiles);
      })
  )
});

self.addEventListener('activate',function(e){
  console.log("Service Worker Activated");
  e.waitUntil(
    caches.keys().then(function(cacheName){
        return Promise.all(cacheName.map(function(cachedName){
          if(cachedName!==app){
            console.log("[ServiceWorker] Removing Cache Files from cache");
            return caches.delete(cachedName);
          }
        }))
    })
  )
});


self.addEventListener('fetch', function(event) {
	event.respondWith(
          caches.open(app).then(function(cache) {
            return cache.match(event.request).then(function (response) {
              return response || fetch(event.request).then(function(response) {
                return response;
              });
            });
          })
        );
});
