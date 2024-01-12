const path = require('path');

const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    entry:  './src/js/index.js',
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'bundle.js',
    },
    module: {
        rules: [
            {
                test: /\.(sc|c)ss$/,
                use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader']
            },
            {
                test: /\.hbs$/,
                loader: "handlebars-loader",
                options: {
                    inlineRequires: /\.(png|jpg|pdf)$/
                }
            },
            {
                test: /\.(png|jpg)$/,
                type: 'asset/resource',
                generator: {
                    filename: 'assets/img/[hash].[ext]'
                }
            },
            {
                test: /\.pdf$/,
                type: 'asset/resource',
                generator: {
                    filename: 'assets/pdf/[name].[ext]'
                }
            },
        ]
    },
    plugins: [
        new MiniCssExtractPlugin(),
        htmlWebPackPluginPage('index'),
        htmlWebPackPluginPage('index.en'),
        htmlWebPackPluginPage('contact'),
        htmlWebPackPluginPage('contact.en'),
        htmlWebPackPluginPage('faciliteiten'),
        htmlWebPackPluginPage('faciliteiten.en'),
        htmlWebPackPluginPage('faqs'),
        htmlWebPackPluginPage('faqs.en'),
        htmlWebPackPluginPage('vuilafvoer'),
        htmlWebPackPluginPage('vuilafvoer.en'),
        htmlWebPackPluginPage('wooncommissie'),
        htmlWebPackPluginPage('wooncommissie.en'),
    ]
};

function htmlWebPackPluginPage(page) {
    return new HtmlWebpackPlugin({
        filename: `${page}.html`,
        template: `src/${page}.hbs`,
        favicon: 'src/img/favicon.ico',
    });
}
