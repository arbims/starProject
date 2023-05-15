import { createApp } from 'vue'
import App from './App.vue'

const app = createApp(App)
app.mount('#app')

const profileBtn = document.querySelector('#user-menu-button');
const profileEl = document.querySelector('#user-menu-el')
if (profileBtn) {
  profileBtn.addEventListener('click', () => {
    if (profileEl.classList.contains('hidden')) {
      profileEl.classList.remove('hidden');
    } else {
      profileEl.classList.add('hidden')
    }
  });
}
