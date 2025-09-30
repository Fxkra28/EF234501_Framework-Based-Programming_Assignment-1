// tailwind.config.js

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        // NOTE: There is no 'extend' object here in v4
        colors: {
            'transparent': 'transparent',
            'current': 'currentColor',
            'black': '#000',
            'white': '#fff',
            // Your custom colors:
            'navy': '#1e3a8a',
            'navy-dark': '#172554',
            'highlight-cyan': '#67e8f9',
            'highlight-violet': '#a78bfa',
            'btn-blue': '#3b82f6',
            'btn-blue-hover': '#2563eb',
            'btn-blue-active': '#1d4ed8',
            'card-bg': '#dbeafe',
            'muted': '#94a3b8',
            'muted-dark': '#475569',
        },
        fontFamily: {
            'mono': ['"VT323"', 'monospace'],
        },
    },
    // NOTE: The 'plugins' array is no longer needed for @tailwindcss/forms in v4
}