// prettier-ignore
const { registerBlockVariation } = wp.blocks;
import { __ } from '@wordpress/i18n';

const NAMESPACE = `greg-grandin/paragraph`;

const variations = [
    {
        name: 'publication-date',
        title: __( 'Publication Date', 'greg-grandin' ),
        description: __( 'The date of book.', 'greg-grandin' ),
        category: 'text',
        icon: 'calendar-alt',
        keywords: [
            __( 'date', 'greg-grandin' ),
            __( 'book', 'greg-grandin' ),
        ],
        attributes: {
            className: 'is-style-postmeta publication-date',
            namespace: `${NAMESPACE}-publication-date`,
            metadata: {
                bindings: {
                    content: {
                        source: 'greg-grandin/publication-date',
                        args: {
                            key: 'publication_date'
                        }
                    }
                }
            },
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
        isActive: ( attributes ) => {
            if( attributes?.metadata?.bindings?.content?.args?.key === undefined ) {
                return false;
            }
            return attributes?.metadata?.bindings?.content?.args?.key === 'publication_date'
        }
    },
    {
        name: 'publisher',
        title: __( 'Publisher', 'greg-grandin' ),
        description: __( 'The publisher of book.', 'greg-grandin' ),
        category: 'text',
        icon: 'book-alt',
        keywords: [
            __( 'publisher', 'greg-grandin' ),
            __( 'book', 'greg-grandin' ),
        ],
        attributes: {
            className: 'is-style-postmeta publisher',
            namespace: `${NAMESPACE}-publisher`,
            metadata: {
                bindings: {
                    content: {
                        source: 'core/post-meta',
                        args: {
                            key: 'publisher'
                        }
                    }
                }
            },
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
        isActive: ( attributes ) => {
            if( attributes?.metadata?.bindings?.content?.args?.key === undefined ) {
                return false;
            }
            return attributes?.metadata?.bindings?.content?.args?.key === 'publisher'
        }
    },
    {
        name: 'isbn',
        title: __( 'ISBN', 'greg-grandin' ),
        description: __( 'The isbn of book.', 'greg-grandin' ),
        category: 'text',
        icon: 'editor-code',
        keywords: [
            __( 'isbn', 'greg-grandin' ),
            __( 'book', 'greg-grandin' ),
        ],
        attributes: {
            className: 'is-style-postmeta isbn',
            namespace: `${NAMESPACE}-isbn`,
            metadata: {
                bindings: {
                    content: {
                        source: 'core/post-meta',
                        args: {
                            key: 'isbn'
                        }
                    }
                }
            },
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
        isActive: ( attributes ) => {
            if( attributes?.metadata?.bindings?.content?.args?.key === undefined ) {
                return false;
            }
            return attributes?.metadata?.bindings?.content?.args?.key === 'isbn'
        }
    },
    {
        name: 'edition',
        title: __( 'Book Edition', 'greg-grandin' ),
        description: __( 'The edition of book.', 'greg-grandin' ),
        category: 'text',
        icon: 'editor-ol',
        keywords: [
            __( 'edition', 'greg-grandin' ),
            __( 'book', 'greg-grandin' ),
        ],
        attributes: {
            className: 'is-style-postmeta edition',
            namespace: `${NAMESPACE}-edition`,
            metadata: {
                bindings: {
                    content: {
                        source: 'core/post-meta',
                        args: {
                            key: 'edition'
                        }
                    }
                }
            },
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
        isActive: ( attributes ) => {
            if( attributes?.metadata?.bindings?.content?.args?.key === undefined ) {
                return false;
            }
            return attributes?.metadata?.bindings?.content?.args?.key === 'edition'
        }
    },
    {
        name: 'book-title',
        title: __( 'Book Title', 'greg-grandin' ),
        description: __( 'Linked full title of book.', 'greg-grandin' ),
        category: 'theme',
        icon: 'heading',
        keywords: [
            __( 'title', 'greg-grandin' ),
            __( 'subtitle', 'greg-grandin' ),
            __( 'book', 'greg-grandin' ),
        ],
        attributes: {
            className: 'wp-block-title',
            namespace: `${NAMESPACE}-full-title`,
            metadata: {
                bindings: {
                    content: {
                        source: 'greg-grandin/full-title',
                        args: {
                            key: 'subtitle'
                        }
                    }
                }
            }
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
        isActive: ( attributes ) => {
            if( attributes?.metadata?.bindings?.content?.args?.key === undefined ) {
                return false;
            }
            return attributes?.metadata?.bindings?.content?.args?.key === 'subtitle'
        }
    }
];


variations.forEach( ( variation ) => {
    registerBlockVariation(
        'core/paragraph',
        variation
    );
} );
