/**
 * WordPress dependencies
 */
// import { __ } from '@wordpress/i18n';
// import { registerBlockVariation } from '@wordpress/blocks'
//
// const colorPalette = [
//     'foreground',
//     'background',
//     'primary',
//     'secondary',
//     'tertiary',
//     'quaternary'
// ];
//
//
// colorPalette.forEach( (colorName) => {
//     registerBlockVariation(
//         'core/group', {
//             name: `cormorant-shadow-solid-${colorName}`,
//             title: __( `Group - ${colorName} colored solid shadow`, 'cormorant' ),
//             description: __( `${colorName} solid shadow for Group block`, 'cormorant' ),
//             isDefault: false,
//             attributes: {
//                 className: `is-style-cormorant-shadow-solid-${colorName}`,
//                 style: {
//                     border: {
//                         width: "1px",
//                         color: `var( --wp--preset--color--${colorName})`
//                     },
//                     spacing: {
//                         padding: {
//                             top: "var:preset|spacing|x-small",
//                             right: "var:preset|spacing|x-small",
//                             bottom:"var:preset|spacing|x-small",
//                             left: "var:preset|spacing|x-small"
//                         }
//                     }
//                 }
//             },
//         }
//     )
// });
/**
 * For core/group styled solid shadow with foreground color
 */
// wp.blocks.registerBlockVariation( 'core/group', {
//     name: 'cormorant-shadow-solid-foreground',
//     title: 'Group - Solid shadow colored foreground',
//     description: __( 'Foreground solid shadow for Group block', 'cormorant' ),
//     isDefault: false,
//     attributes: {
//         className: 'is-style-cormorant-shadow-solid-foreground',
//         style: {
//             border: {
//                 width: "1px"
//             },
//             spacing: {
//                 padding: {
//                     top: "var:preset|spacing|x-small",
//                     right: "var:preset|spacing|x-small",
//                     bottom:"var:preset|spacing|x-small",
//                     left: "var:preset|spacing|x-small"
//                 }
//             }
//         },
//         borderColor: "contrast"
//     },
// } );