module.exports = {
    purge: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        screen: {
            'tablet': '640px',

            'laptop': '1024px',

            'desktop': '1280px'
        },
        extend: {

        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
