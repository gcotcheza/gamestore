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