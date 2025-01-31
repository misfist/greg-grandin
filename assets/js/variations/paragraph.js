// prettier-ignore
import { registerBlockVariation } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

const NAMESPACE = `greg-grandin/paragraph`;

// 	SVG,
// 	{ xmlns: "http://www.w3.org/2000/svg", viewBox: "0 0 32 32", style: "fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2" },
// 	createElement(
// 		Path,
// 		{
// 			d: "M14.641 23.75c-3.788 0-6.891 3.101-6.891 6.889v4.681c0 .928.763 1.691 1.69 1.691.928 0 1.691-.763 1.691-1.691v-4.681c0-1.974 1.536-3.51 3.51-3.51h4.679l.05.001c.927 0 1.69-.763 1.69-1.691 0-.927-.763-1.69-1.69-1.69l-.05.001h-4.679Zm14.041 0-.05-.001c-.927 0-1.69.763-1.69 1.69 0 .928.763 1.691 1.69 1.691l.05-.001h4.679c1.974 0 3.51 1.536 3.51 3.51v4.681c0 .928.763 1.691 1.691 1.691.927 0 1.69-.763 1.69-1.691v-4.681c0-3.788-3.103-6.889-6.891-6.889h-4.679ZM9.414 42.967A1.698 1.698 0 0 0 7.75 44.68v4.681c0 3.788 3.103 6.889 6.891 6.889h4.679l.05.001c.927 0 1.69-.763 1.69-1.69 0-.928-.763-1.691-1.69-1.691l-.05.001h-4.679c-1.974 0-3.51-1.536-3.51-3.51v-4.704c0-.927-.763-1.69-1.69-1.69h-.027Zm29.121 0a1.698 1.698 0 0 0-1.664 1.713v4.681c0 1.974-1.536 3.51-3.51 3.51h-4.679l-.05-.001c-.927 0-1.69.763-1.69 1.691 0 .927.763 1.69 1.69 1.69l.05-.001h4.679c3.788 0 6.891-3.101 6.891-6.889v-4.704c0-.927-.763-1.69-1.69-1.69h-.027ZM28.748 31.867a1.698 1.698 0 0 0-1.664 1.713v12.84l-.001.051c0 .928.763 1.691 1.69 1.691.928 0 1.691-.763 1.691-1.691l-.001-.051V33.557c0-.927-.763-1.69-1.69-1.69h-.025ZM19.201 31.867a1.698 1.698 0 0 0-1.664 1.713v12.84c0 .927.763 1.69 1.691 1.69.927 0 1.69-.763 1.69-1.69V33.557c0-.927-.763-1.69-1.69-1.69h-.027Z",
// 		}
// 	)
// );

// const numberIcon = createElement(
// 	wp.primitives.SVG,
// 	{ xmlns: "http://www.w3.org/2000/svg", viewBox: "0 0 32 32", style: "fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2" },
// 	createElement(
// 		wp.primitives.Path,
// 		{
// 			d: "M80.996 59.066H63.773l4.859-18.137h12.211v.004a3.606 3.606 0 0 0 3.641-3.16 3.521 3.521 0 0 0-.895-2.699 3.503 3.503 0 0 0-2.593-1.149H70.508l3.433-12.801a3.602 3.602 0 0 0-2.109-4.324 3.495 3.495 0 0 0-2.84.148 3.512 3.512 0 0 0-1.793 2.207l-3.961 14.77H45.363l3.434-12.801a3.598 3.598 0 0 0-2.114-4.324 3.5 3.5 0 0 0-2.835.164 3.517 3.517 0 0 0-1.786 2.211l-3.953 14.75H19.156a3.598 3.598 0 0 0-3.64 3.16c-.094.981.23 1.961.894 2.696a3.527 3.527 0 0 0 2.594 1.152h17.223l-4.859 18.133H19.157a3.606 3.606 0 0 0-3.641 3.16c-.094.984.23 1.965.895 2.699a3.503 3.503 0 0 0 2.593 1.149h10.488l-3.433 12.801a3.602 3.602 0 0 0 2.109 4.332 3.505 3.505 0 0 0 4.633-2.364l3.961-14.77h17.887l-3.434 12.801a3.598 3.598 0 0 0 2.114 4.332c.925.348 1.957.29 2.835-.164a3.515 3.515 0 0 0 1.786-2.21l3.957-14.77H80.86h-.004a3.599 3.599 0 0 0 3.64-3.161 3.493 3.493 0 0 0-.902-2.691 3.509 3.509 0 0 0-2.598-1.145v.001Zm-42.371 0 4.859-18.137h17.891l-4.859 18.137H38.625Z",
// 		}
// 	)
// );

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
        isActive: ( { namespace } ) => {
            return (
                namespace === NAMESPACE
            );
        },
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
        isActive: ( { namespace } ) => {
            return (
                namespace === NAMESPACE
            );
        },
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
        isActive: ( { namespace } ) => {
            return (
                namespace === NAMESPACE
            );
        },
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
        isActive: ( { namespace } ) => {
            return (
                namespace === NAMESPACE
            );
        },
    },
    {
        name: 'book-title',
        title: __( 'Book Title', 'greg-grandin' ),
        description: __( 'Linked full title of book.', 'greg-grandin' ),
        category: 'theme',
        icon: 'editor-textcolor',
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
        isActive: ( { namespace } ) => {
            return (
                namespace === NAMESPACE
            );
        },
    }
];

variations.forEach( ( variation ) => {
    registerBlockVariation(
        'core/paragraph',
        variation
    );
} );
