module.exports = function simpleUploader() {
    return {
        upload() {},
        cancel() {},
        on() { return this; },
        off() { return this; },
        trigger() { return this; },
    };
};

module.exports.default = module.exports;
