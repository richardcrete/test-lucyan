// Generated using webpack-cli https://github.com/webpack/webpack-cli

const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

const isProduction = process.env.NODE_ENV === 'production';

const stylesHandler = isProduction ? MiniCssExtractPlugin.loader : 'style-loader';

/** @type {import("webpack").Configuration} */
const config = {
    entry: {
        app: [path.resolve(process.cwd(), 'src/styles/', 'index.scss'), path.resolve(process.cwd(), 'src/', 'app.js')],
        admin: [path.resolve(process.cwd(), 'src/styles/', 'admin.scss')],
    },
    output: {
        asyncChunks: false,
        path: path.resolve(__dirname, 'dist'),
    },
    plugins: [
        // Add your plugins here
        // Learn more about plugins from https://webpack.js.org/configuration/plugins/
    ],
    module: {
        rules: [
            {
                test: /\.(ts|tsx)$/i,
                loader: 'ts-loader',
                exclude: ['/node_modules/'],
            },
            {
                test: /\.css$/i,
                use: [stylesHandler, 'css-loader'],
            },
            {
                test: /\.s[ac]ss$/i,
                use: [stylesHandler, 'css-loader', 'sass-loader'],
            },

            // Add your rules for custom modules here
            // Learn more about loaders from https://webpack.js.org/loaders/
        ],
    },
    resolve: {
        extensions: ['.tsx', '.ts', '.jsx', '.js', '...'],
    },
};

module.exports = () => {
    if (isProduction) {
        config.mode = 'production';
        config.plugins.push(new MiniCssExtractPlugin());
    } else {
        config.mode = 'development';
    }
    return config;
};
