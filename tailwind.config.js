// tailwind.config.js

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],

  theme: {
    extend: {
      fontFamily: {
        // We'll call the VT323 font 'pixel'
        'pixel': ['VT323', 'monospace'],
      },
      boxShadow: {
        // Your custom hard shadows
        'hard': '4px 4px 0px 0px rgba(0,0,0,1)',
        'hard-sm': '2px 2px 0px 0px rgba(0,0,0,1)',
      },
      keyframes: {
        // Animation for page load
        'fade-in': {
          '0%': { opacity: '0', transform: 'translateY(10px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        // A subtle jiggle animation for hovers
        'jiggle': {
            '0%, 100%': { transform: 'rotate(-1deg)' },
            '50%': { transform: 'rotate(1deg)' },
        }
      },
      animation: {
        // Add the animations to Tailwind's utilities
        'fade-in': 'fade-in 0.5s ease-out forwards',
        'jiggle': 'jiggle 0.2s infinite',
      },
    },
  },

  plugins: [],
}