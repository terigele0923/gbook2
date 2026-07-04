import './bootstrap';

import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'simple-module';
import 'simple-hotkeys';

document.addEventListener('DOMContentLoaded', function () {
    const textarea = $('#editor');

    if (textarea.length) {
        textarea.addClass('form-control');
    }
});