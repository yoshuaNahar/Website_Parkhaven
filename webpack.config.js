const path = require('path');

const webpack = require('webpack');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');

module.exports = {
  mode: 'development',
  entry: [
    './src/index.html',
  ],
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'index.html',
    publicPath: "/dist"
  },
  module: {
    rules: [{
      test: /\.css$/,
      use: [
        'style-loader',
        'css-loader'
      ]
    }],
    rules: [{
      test: /\.html$/,
      use: ['html-loader?interpolate'],
    }]
  },
  plugins: [
    new webpack.optimize.UglifyJsPlugin({

    }),
    new CleanWebpackPlugin(['dist']),
    new HtmlWebpackPlugin({
      template: 'src/index.html'
    }),
  ]
};
