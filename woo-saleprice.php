add_filter( 'woocommerce_format_sale_price', 'invert_formatted_sale_price', 10, 3 );
function invert_formatted_sale_price( $price, $regular_price, $sale_price ) {
    return '<ins>' . ( is_numeric( $sale_price ) ? wc_price( $sale_price ) : $sale_price ) . '</ins> <del>' . ( is_numeric( $regular_price ) ? wc_price( $regular_price ) : $regular_price ) . '</del>';
}
