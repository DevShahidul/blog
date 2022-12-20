const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: [
        'class', 
        '[data-mode="dark"]'
    ],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'light': '#edf2f9',
                'dark': '#152e4d',
                'darker': '#12263f',
                'primary':  {
                    DEFAULT: 'var(--color-primary)',
                    50: 'var(--color-primary-100)',
                    100: 'var(--color-primary-100)',
                    'light': 'var(--color-primary-light)',
                    'lighter': 'var(--color-primary-lighter)',
                    'dark': 'var(--color-primary-dark)',
                    'darker': 'var(--color-primary-darker)',
                },
                'green': {
                    DEFAULT: '#16a34a',
                    50: '#f0fdf4',
                    100: '#dcfce7',
                    'light': '#22c55e',
                    'lighter': '#4ade80',
                    'dark': '#15803d',
                    'darker': '#166534',
                },
                'blue': {
                    DEFAULT: '#2563eb',
                    50: '#eff6ff',
                    100: '#dbeafe',
                    'light': '#3b82f6',
                    'lighter': '#60a5fa',
                    'dark': '#1d4ed8',
                    'darker': '#1e40af',
                },
                'cyan': {
                    DEFAULT: '#0891b2',
                    50: '#ecfeff',
                    100: '#cffafe',
                    'light': '#06b6d4',
                    'lighter': '#22d3ee',
                    'dark': '#0e7490',
                    'darker': '#155e75',
                },
                'teal': {
                    DEFAULT: '#0d9488',
                    50: '#f0fdfa',
                    100: '#ccfbf1',
                    'light': '#14b8a6',
                    'lighter': '#2dd4bf',
                    'dark': '#0f766e',
                    'darker': '#115e59',
                },
                'fuchsia' : {
                    DEFAULT: '#c026d3',
                    50: '#fdf4ff',
                    100: '#fae8ff',
                    'light': '#d946ef',
                    'lighter': '#e879f9',
                    'dark': '#a21caf',
                    'darker': '#86198f',
                },
                'violet': {
                    DEFAULT: '#7c3aed',
                    50: '#f5f3ff',
                    100: '#ede9fe',
                    'light': '#8b5cf6',
                    'lighter': '#a78bfa',
                    'dark': '#6d28d9',
                    'darker': '#5b21b6',
                },
    
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
