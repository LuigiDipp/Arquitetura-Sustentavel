let deferredPrompt;
 
window.addEventListener('beforeinstallprompt', event => {
  event.preventDefault();
  deferredPrompt = event;
  showInstallPrompt();
});
 
function showInstallPrompt() {
  // Exibir um botão ou mensagem para instalar a PWA
}