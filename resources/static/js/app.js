import './bootstrap';

import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'simple-module';
import 'simple-hotkeys';

// いったん simple-uploader は読み込まない
// import 'simple-uploader';

import Simditor from 'simditor';
import 'simditor/styles/simditor.css';

document.addEventListener('DOMContentLoaded', function () {
    console.log('app.js loaded');

    const textarea = $('#editor');
    console.log('editor count:', textarea.length);

    if (textarea.length) {
        new Simditor({
            textarea: textarea,
            toolbar: [
                'title',
                'bold',
                'italic',
                'underline',
                'strikethrough',
                'fontScale',
                'color',
                'ol',
                'ul',
                'blockquote',
                'code',
                'table',
                'link',
                'hr',
                'indent',
                'outdent',
                'alignment'
            ],
            upload: false,
            pasteImage: false
        });

        console.log('Simditor initialized');
    }
});