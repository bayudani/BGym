self.addEventListener("install", function (event) {
    event.waitUntil(
        caches.open("v1").then(function (cache) {
            return cache.addAll([
                
                "index.php",
                // ".htaccess",
                // "asset/image/404_benchpress.jpg",
                "asset/image/455_nutrisi1.jpg",
                "asset/image/561_gymcwe.jpeg",
                "asset/image/825_nutrisi1.jpg",
                "asset/image/977_aset2.jpg",
                "asset/image/fullbody.jpg",
                "asset/image/gym1.jpg",
                "asset/image/gym2.jpg",
                "asset/image/404_benchpress.jpg",
                "asset/image/push.jpg",
                "asset/image/upper.jpg",
                "asset/img/3.png",
                "asset/img/6.png",
                "asset/img/8.png",
                "asset/img/asset1.jpg",
                "asset/img/asset2.jpg",
                "asset/img/background.png",
                "asset/img/profile (1).png",
                "asset/swiper/swiper-bundle.min.css",
                "asset/swiper/swiper-bundle.min.js",
                "asset/tailwind.css",
                "asset/output.css",
                "asset/script.js",
                "model/transaksi.php",
            ]);
        })
    );
});

self.addEventListener("fetch", function (event) {
    event.respondWith(
        caches.match(event.request).then(function (response) {
            return response || fetch(event.request);
        })
    );
});
