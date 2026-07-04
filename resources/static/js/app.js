import './bootstrap';

import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'simple-module';
import 'simple-hotkeys';
import 'simple-uploader';

import Simditor from 'simditor';
import 'simditor/styles/simditor.css';

document.addEventListener('DOMContentLoaded', function () {
    const textarea = $('#editor');

    if (textarea.length) {
        new Simditor({
            textarea: textarea
        });
    }
});