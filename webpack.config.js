const path = require('path');

const HtmlWebpackPlugin = require('html-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');

const extractPlugin = new ExtractTextPlugin({
  filename: 'main.css'
});

module.exports = {
  mode: 'development',
  entry: {
    app: './src/js/app.js'
  },
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.js',
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: extractPlugin.extract({
          use: ['css-loader', 'sass-loader']
        })
      },
      {
        test: /\.pdf$/,
        use: {
          loader: 'file-loader',
          options: {
            name: '[name].[ext]',
            outputPath: 'assets/pdf/'
          }
        }
      },
      {
        test: /\.(jpg|png)$/,
        use: {
          loader: 'file-loader',
          options: {
            name: '[name].[ext]',
            outputPath: 'assets/img/'
          }
        }
      },
      {
        test: /\.html$/,
        use: {
          loader: 'html-loader',
          options: {
            interpolate: true
          }
        }
      }
    ]
  },
  plugins: [
    extractPlugin,
    htmlWebPackPluginOtherPages('index'),
    htmlWebPackPluginOtherPages('index.en'),
    htmlWebPackPluginOtherPages('contact'),
    htmlWebPackPluginOtherPages('contact.en'),
    htmlWebPackPluginOtherPages('faciliteiten'),
    htmlWebPackPluginOtherPages('faciliteiten.en'),
    htmlWebPackPluginOtherPages('faqs'),
    htmlWebPackPluginOtherPages('faqs.en'),
    htmlWebPackPluginOtherPages('vuilafvoer'),
    htmlWebPackPluginOtherPages('vuilafvoer.en'),
    htmlWebPackPluginOtherPages('wooncommissie'),
    htmlWebPackPluginOtherPages('wooncommissie.en'),
    new CleanWebpackPlugin(['dist'])
  ],
  optimization: {
    minimize: true
  }
};

function htmlWebPackPluginOtherPages(page) {
  return new HtmlWebpackPlugin({
    filename: `${page}.html`,
    template: `src/${page}.html`,
    favicon: 'src/img/favicon.ico',
  });
}
