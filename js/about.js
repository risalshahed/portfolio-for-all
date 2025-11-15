// Create a <script> element
const script = document.createElement('script');
script.type = 'application/ld+json';

// Add your JSON-LD data
script.text = JSON.stringify({
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://marketeryusuf.com/about/#webpage",
      "url": "https://marketeryusuf.com/about/",
      "name": "About Md. Yusuf (Marketer Yusuf) - Brand Marketing Service Provider in Dhaka",
      "image": "https://marketeryusuf.com/wp-content/themes/portfolio-for-all/assets/images/portfolio/md-yusuf-logo.png",
      "description": "Md. Yusuf is a Brand Marketer, Consultant, Digital Marketer, and Brand Designer with 12 years of experience.",
      "about": { "@id": "https://marketeryusuf.com/#person" },
      "mainEntity": { "@id": "https://marketeryusuf.com/#business" }
    },
    {
      "@type": "ProfessionalService",
      "@id": "https://marketeryusuf.com/#business",
      "name": "Marketer Yusuf - Brand Marketing and Consulting Services",
      "url": "https://marketeryusuf.com/",
      "priceRange": "$$",
      "areaServed": "Dhaka, BD",
      "description": "Providing expert Brand Marketing, Brand Consulting, Digital Marketing, and Brand Design services.",
      "founder": { "@id": "https://marketeryusuf.com/#person" },
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
        "contactType": "customer support",
        "telephone": "+8801672245447",
        "email": "mailto:yusuf.bdmail@gmail.com",
        "areaServed": "BD"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Professional Services Catalog",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Brand Marketing" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Brand Consulting" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Digital Marketing" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Brand Design" } }
        ]
      }
    },
    {
      "@type": "Person",
      "@id": "https://marketeryusuf.com/#person",
      "name": "Md. Yusuf",
      "alternateName": "Marketer Yusuf",
      "url": "https://marketeryusuf.com/",
      "image": "https://marketeryusuf.com/wp-content/uploads/2023/11/yusuf-profile-picture.jpg",
      "jobTitle": ["Brand Marketer","Brand Consultant","Digital Marketer","Brand Designer"],
      "description": "Brand Marketer, Consultant, Digital Marketer, and Brand Designer with 12 years of experience.",
      "email": "mailto:yusuf.bdmail@gmail.com",
      "telephone": "+8801672245447",
      "sameAs": [
        "https://www.linkedin.com/in/marketeryusuf/",
        "https://www.facebook.com/marketeryusuf",
        "https://www.facebook.com/marketeryusufprofile",
        "https://www.instagram.com/marketeryusuf",
        "https://x.com/marketeryusuf",
        "https://www.youtube.com/@marketeryusuf",
        "https://www.threads.net/@marketeryusuf"
      ],
      "worksFor": { "@id": "https://marketeryusuf.com/#business" },
      "knowsAbout": ["ATL","BTL","TTL","Brand Strategy","Brand Planning & Positioning","Brand Communication","Brand Management","PR Communication","Digital Marketing","Brand Design","Team Management"],
      "hasOccupation": [
        { "@type": "Occupation","name":"Brand Marketer","description":"Completed 120 brand marketing projects" },
        { "@type": "Occupation","name":"Brand Consultant","description":"Handled 241 brand consulting projects" },
        { "@type": "Occupation","name":"Digital Marketer","description":"Delivered 240 digital marketing projects" },
        { "@type": "Occupation","name":"Brand Designer","description":"Completed 331 brand design projects" }
      ],
      "workExample": [
        { "@type": "CreativeWork","name":"Brand Marketing Projects","description":"120 brand marketing projects completed." },
        { "@type": "CreativeWork","name":"Brand Consulting Projects","description":"241 consulting projects completed." },
        { "@type": "CreativeWork","name":"Digital Marketing Projects","description":"240 digital marketing projects completed." },
        { "@type": "CreativeWork","name":"Brand Design Projects","description":"331 brand design projects completed." }
      ],
      "yearsExperience":"12"
    }
  ]
});

// Append to head
document.head.appendChild(script);