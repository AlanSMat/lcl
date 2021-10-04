const path = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const CssMinimizerWebpackPlugin = require( 'css-minimizer-webpack-plugin' );
const cssnano = require( 'cssnano' ); // https://cssnano.co/
const { CleanWebpackPlugin } = require( 'clean-webpack-plugin' );
const UglifyJsPlugin = require( 'uglifyjs-webpack-plugin' );

// JS Directory path.
const JS_DIR = path.resolve( __dirname, 'src/js' );
const IMG_DIR = path.resolve( __dirname, 'src/img' );
const LIB_DIR = path.resolve( __dirname, 'src/library' );
const BUILD_DIR = path.resolve( __dirname, 'build' );

const entry = {
    main: JS_DIR + '/main.js',
    single: JS_DIR + '/single.js',
};
const output = {
    path: BUILD_DIR, 
    filename: 'js/[name].js'
};

const plugins = ( argv ) => [
    new CleanWebpackPlugin({
        cleanStaleWebpackAssets: ( 'production' === argv.mode )
    }),

    new MiniCssExtractPlugin({
        filename: 'css/[name].css'
    })
];

const rules = [
    {
        test: /\.js$/,
        include: [ JS_DIR ],
        exclude: /node_modules/,
        use: 'babel-loader'
    },
    {
        test: /\.scss$/,
        exclude: /node_modules/,
        use: [
            MiniCssExtractPlugin.loader, 
            'css-loader',
            'sass-loader'
        ],
    },
	{
		test: /\.(png|jpg|svg|jpeg|gif|ico)$/,
		use: {
			loader: 'file-loader',
			options: {
				name: '[path][name].[ext]',
				publicPath: 'production' === process.env.NODE_ENV ? '../' : '../../'
			}
		}
	},
];

module.exports = ( env, argv ) => ({
    entry: entry,
    output: output,
    devtool: 'source-map',
    module: {
        rules: rules
    },
    optimization: {
        minimizer: [
            new CssMinimizerWebpackPlugin (),
            new UglifyJsPlugin({
                cache: false,
                parallel: true,
                sourceMap: false,
            })
        ],
    },
    plugins: plugins( argv ),
    externals: {
        jquery: 'jQuery'
    }
});