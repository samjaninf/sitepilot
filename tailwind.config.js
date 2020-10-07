module.exports = {
  important: '.sp-mod-v1',
  future: {
    purgeLayersByDefault: true,
    removeDeprecatedGapUtilities: true
  },
  purge: {
    content: [
      './classes/Support/BeaverBuilder/*.php',
      './classes/Support/BeaverBuilder/Modules/V1/**/*.php',
      './classes/Support/BeaverBuilder/Modules/V1/**/includes/*.php'
    ]
  },
  theme: {
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1140px',
    },
  },
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
