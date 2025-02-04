/**
 * WordPress dependencies
 */
const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );

/**
 * Local dependencies
 */
const path = require( 'path' );
// const MiniCSSExtractPlugin = require( 'mini-css-extract-plugin' );
// const FixStyleOnlyEntriesPlugin = require( 'webpack-fix-style-only-entries' );

module.exports = [
    {
        // Include WP's config.
        ...defaultConfig,
        mode: 'production',
        entry: {
            index: path.resolve( process.cwd(), 'assets/js', 'index.js' ),
            style: path.resolve( process.cwd(), 'assets/scss', 'index.scss' ),
            'editor-style': path.resolve( process.cwd(), 'assets/scss', 'index.scss' ),
        }
    }
];