(function( $ ) {
    const colorVars = [
        'custom_bgcolor',
        'color_primary',
        'color_body',
        'color_heading',
        'color_gray',
        'footer_background'
    ];

    colorVars.forEach( colorKey => {
        wp.customize( colorKey, function( value ) {
            value.bind( function( newval ) {
                // Convert 'color_primary' to CSS variable '--color-primary'
                const cssVarName = '--' + colorKey.replace(/_/g, '-');
                document.documentElement.style.setProperty( cssVarName, newval );
            });
        });
    });
})( jQuery );