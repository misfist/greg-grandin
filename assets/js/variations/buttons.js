// prettier-ignore
import { registerBlockVariation } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

const NAMESPACE = `greg-grandin/buy-buttons`;

const variations = [
    {
        name: 'buy-buttons',
        title: __( 'Buy Buttons', 'greg-grandin' ),
        description: __( 'Buttons that link to places to buy.', 'greg-grandin' ),
        category: 'design',
        icon: 'cart',
        keywords: [
            __( 'button', 'greg-grandin' ),
            __( 'link', 'greg-grandin' ),
            __( 'buy', 'greg-grandin' ),
        ],
        attributes: {
            className: 'buy-buttons',
            namespace: NAMESPACE 
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
        isActive: ( { namespace } ) => {
            return (
                namespace === NAMESPACE
            );
        },
    }
];

variations.forEach( ( variation ) => {
    registerBlockVariation(
        'core/buttons',
        variation
    );
} );
