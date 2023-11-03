import './bootstrap';

import { createApp } from 'vue';

import GameDetail from './components/GameDetail.vue';

const app = createApp({});

const files = require.context('./', true, /\.vue$/i);

files.keys().forEach(key => {
  const componentConfig = files(key);
  const componentName = key
    .split('/')
    .pop()
    .split('.')[0];
  app.component(componentName, componentConfig.default);
});

app.mount('#app');

if (document.getElementById('menu-toggler')) {
    document.getElementById('menu-toggler').addEventListener('click', function (e) {
        e.preventDefault();
        const wrapper = document.querySelector('#wrapper');
        if (wrapper.classList.contains('toggled')) {
            wrapper.classList.remove('toggled');
        } else {
            wrapper.classList.add('toggled');
        }
    });
}

function userScroll() {
  const navbar = document.querySelector('.navbar');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.classList.add('navbar-sticky');
    } else {
      navbar.classList.remove('navbar-sticky');
    }
  });
}

document.addEventListener('DOMContentLoaded', userScroll);

function runTypingEffect() {
  const text = 'Welcome to GameStore!'
  const typingElement = document.getElementById('typing-text');
  const typingDelay = 120;

  typeText(text, typingElement, typingDelay);
}

function typeText(text, typingElement, delay) {
  for (let i = 0; i < text.length; i++) {
    setTimeout(() => {
      typingElement.textContent += text.charAt(i);
    }, delay * i);
  }
}

// document.addEventListener('DOMContentLoaded', runTypingEffect());

import 'bootstrap';

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.MIX_PUSHER_APP_KEY,
//     wsHost: import.meta.env.MIX_PUSHER_HOST ?? `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
