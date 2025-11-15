// Create a <script> element
const script = document.createElement('script');
script.type = 'application/ld+json';

// Add your JSON-LD data
script.text = JSON.stringify({
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "Marketer Yusuf - Brand Marketing and Consulting Services",
  "url": "https://marketeryusuf.com/contact",
  "image": "https://marketeryusuf.com/wp-content/themes/portfolio-for-all/assets/images/portfolio/md-yusuf-logo.png",
  "description": "Contact Md. Yusuf for expert Brand Marketing, Brand Consulting, Digital Marketing, and Brand Design services.",
  "telephone": "+8801672245447",
  "email": "mailto:yusuf.bdmail@gmail.com",
  "priceRange": "$$",
  "areaServed": "Dhaka, Bangladesh",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Lalbag",
    "addressLocality": "Dhaka",
    "addressRegion": "Dhaka",
    "postalCode": "1211",
    "addressCountry": "BD"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "contactType": "customer service",
    "telephone": "+8801672245447",
    "email": "mailto:yusuf.bdmail@gmail.com",
    "areaServed": "BD"
  },
  "sameAs": [
    "https://www.linkedin.com/in/marketeryusuf/",
    "https://www.facebook.com/marketeryusuf",
    "https://www.instagram.com/marketeryusuf",
    "https://x.com/marketeryusuf",
    "https://www.youtube.com/@marketeryusuf",
    "https://www.threads.net/@marketeryusuf"
  ]
});

// Append script to <head>
document.head.appendChild(script);