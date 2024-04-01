// Instalando o Service Worker
self.addEventListener('install', event => {
    event.waitUntil(
      caches.open('minha-pwa-cache').then(cache => {
        return cache.addAll([
          '/',
          '/Inicio/index.html',
          '/Inicio/product.css',
          '/icons/icon-192x192.png',
          '/icons/icon-512x512.png'
        ]);
      })
    );
  });
   
  // Ativando o Service Worker
  self.addEventListener('activate', event => {
    console.log('Service Worker ativado');
  });
   
  // Interceptando requisições e fornecendo conteúdo da cache
  self.addEventListener('fetch', event => {
    event.respondWith(
      caches.match(event.request).then(response => {
        return response || fetch(event.request);
      })
    );
  });