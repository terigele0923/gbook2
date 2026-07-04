import './bootstrap';

import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'simple-module';
import 'simple-hotkeys';

import Simditor from 'simditor';
import 'simditor/styles/simditor.css';

document.addEventListener('DOMContentLoaded', function () {
    const textarea = $('#editor');

    if (textarea.length) {
        try {
            new Simditor({
                textarea: textarea[0],
            });
        } catch (error) {
            console.warn('Simditor initialization failed:', error);
            textarea.addClass('form-control');
        }
    }
});