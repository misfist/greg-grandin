// prettier-ignore
import { registerBlockVariation } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

const variations = [
    {
        name: 'buy-buttons',
        title: __( 'Buy Buttons', 'greg-grandin' ),
        description: __( 'Buttons to buy.', 'greg-grandin' ),
        category: 'design',
        icon: 'cart',
        isDefault: false,
        keywords: [
            __( 'button', 'greg-grandin' ),
            __( 'link', 'greg-grandin' ),
            __( 'buy', 'greg-grandin' ),
        ],
        attributes: {
            className: 'buy-buttons',
            placeholder: __( 'Add Buy Buttons...', 'greg-grandin' ),
        },
        innerBlocks: [
            {
                name: 'core/button',
                attributes: {
                    className: 'buy-button',
                    placeholder: __( 'Add Buy Button Text and Link...', 'greg-grandin' ),
                }
            },
            {
                name: 'core/button',
                attributes: {
                    className: 'buy-button',
                    placeholder: __( 'Add Buy Button Text and Link...', 'greg-grandin' ),
                }
            },
        ],
        example: {
            innerBlocks: [
                {
                    name: 'core/button',
                    attributes: {
                        text: __( 'IndieBound', 'greg-grandin' ),
                        url: '#',
                        linkTarget: '_blank'
                    }
                },
                {
                    name: 'core/button',
                    attributes: {
                        text: __( 'Amazon', 'greg-grandin' ),
                        url: '#',
                        linkTarget: '_blank'
                    }
                }
            ]
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
        // isActive: ( { className } ) => {
        //     return className.includes( 'buy-buttons' );
        // },
    }
];

variations.forEach( ( variation ) => {
    registerBlockVariation(
        'core/buttons',
        variation
    );
} );
