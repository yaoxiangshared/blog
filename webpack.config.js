var Webpack = require("webpack");
var Glob=require("glob");
var Path=require('path');
var ExtractTextPlugin = require("extract-text-webpack-plugin");
var CleanWebpackPlugin = require('clean-webpack-plugin');
let entries=getEntry("resources/assets/js/entries/*/*/*.js","resources/assets/js/entries/");
entries['vendor']=['vue',"jquery","bootstrap/dist/js/bootstrap.js"];
module.exports = {
    //devtool: 'cheap-source-map',
    // 入口文件，是模块构建的起点，同时每一个入口文件对应最后生成的一个 chunk
    entry: entries,
    output: {
        path: __dirname+"/public/js/page/",
        filename: "[name].js",
        chunkFilename: "[id].[name].chunk.js",
        publicPath: "/js/page/"
    },
    module: {
        rules: [
            {
                test: /\.vue$/,
                loader: 'vue-loader',
                options: {
                    modules:true
                }
            },
            {
                test: /\.js$/,
                use: ['babel-loader'],
                exclude: /node_modules/
            },
            {
                test: /\.css$/,
                use: ExtractTextPlugin.extract({
                    fallback: [{
                        loader: 'style-loader',
                    }],
                    use: [
                        {
                            loader: 'css-loader',
                        },
                    ],
                })
            },
            {
                test: /\.(png|jpg|jpeg|gif|eot|ttf|woff|woff2|svg|svgz)(\?.+)?$/,
                use: [{
                    loader: 'url-loader',
                    options: {
                        limit: 10000,
                        name:"assets/[name].[ext]"
                        // outputfile:"assets/[name].[ext]"
                    }
                }]
            }
        ]

    },
    plugins: [
        new Webpack.optimize.CommonsChunkPlugin({//提取公共代码块
            name:['common','vendor'],
            minChunks:2
        }),
        new ExtractTextPlugin({//单独提取css文件
            filename:"[name].css",
            allChunks: true
        }),
        new Webpack.ProvidePlugin({//自动加载
            jQuery:"jquery",
            $:"jquery"
        }),
        new CleanWebpackPlugin(
            ['js/page'],
            {
                root:__dirname+"/public/",
                verbose:true,
                dry:false

            }
        )
         //new Webpack.optimize.UglifyJsPlugin()
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.js',
            jquery: 'jquery/dist/jquery.min.js',
            //bootstrap:"bootstrap/dist/js/bootstrap.min.js"
        }
    }
};

function getEntry(globPath, pathDir) {
    let files = Glob.sync(globPath);
    let entries = {},
        entry, dirname, basename, pathname, extname;

    for (var i = 0; i < files.length; i++) {
        entry = files[i];
        dirname = Path.dirname(entry);
        extname =   Path.extname(entry);
        basename = Path.basename(entry, extname);
        pathname = Path.join(dirname, basename);
        pathname = pathDir ? pathname.replace(new RegExp('^' + pathDir), '') : pathname;
        entries[pathname] = ['./' + entry];
    }

    return entries;
}