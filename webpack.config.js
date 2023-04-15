const path = require('path'),
    NodePolyfillPlugin = require('node-polyfill-webpack-plugin');

module.exports = {
    plugins: [
        new NodePolyfillPlugin()
    ],
    stats: {
        children: true,
    },
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
            'v@': path.resolve('resources/js/vue'),
        },
    },
};
