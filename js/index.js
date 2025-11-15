// Create a <script> element
const script = document.createElement('script');
script.type = 'application/ld+json';

// Add your JSON-LD data
script.text = JSON.stringify({
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Person",
      "@id": "https://marketeryusuf.com/#person",
      "name": "Md. Yusuf",
      "alternateName": "Marketer Yusuf",
      "jobTitle": [
        "Brand Strategist",
        "Brand Marketer",
        "Brand Consultant",
        "Brand Designer"
      ],
      "url": "https://marketeryusuf.com/",
      "image": "https://marketeryusuf.com/wp-content/themes/portfolio-for-all/assets/images/portfolio/md-yusuf.png",
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
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Lalbag",
        "addressLocality": "Dhaka",
        "addressRegion": "Dhaka",
        "postalCode": "1211",
        "addressCountry": "BD"
      },
      "worksFor": {
        "@type": "LocalBusiness",
        "@id": "https://marketeryusuf.com/#business"
      }
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://marketeryusuf.com/#business",
      "name": "Md. Yusuf (Marketer Yusuf)",
      "image": "https://marketeryusuf.com/wp-content/uploads/2024/01/yusuf.jpg",
      "url": "https://marketeryusuf.com/",
      "email": "mailto:yusuf.bdmail@gmail.com",
      "telephone": "+8801672245447",
      "priceRange": "$$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Lalbag",
        "addressLocality": "Dhaka",
        "addressRegion": "Dhaka",
        "postalCode": "1211",
        "addressCountry": "BD"
      },
      "provider": { "@id": "https://marketeryusuf.com/#person" },
      "sameAs": [
        "https://www.linkedin.com/in/marketeryusuf/",
        "https://www.facebook.com/marketeryusuf",
        "https://www.facebook.com/marketeryusufprofile",
        "https://www.instagram.com/marketeryusuf",
        "https://x.com/marketeryusuf",
        "https://www.youtube.com/@marketeryusuf",
        "https://www.threads.net/@marketeryusuf"
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "reviewCount": "3"
      },
      "review": [
        {
          "@type": "Review",
          "author": { "@type": "Person", "name": "Fahim Siddiqui", "jobTitle": "Vice President, Organic Products Ltd" },
          "reviewBody": "Branding planners help business knowledge about to how to invest and save money in the most efficient way ever. Many people across the country use them for help and guidance.",
          "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" }
        },
        {
          "@type": "Review",
          "author": { "@type": "Person", "name": "Shafayet Mansoor", "jobTitle": "CEO, Apon Jewelers" },
          "reviewBody": "He understood my vision immediately and brought it to life even better than I’d imagined. Professional, creative, and always on time – I couldn’t be happier with the results!",
          "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" }
        },
        {
          "@type": "Review",
          "author": { "@type": "Person", "name": "Forhad Chowdhury", "jobTitle": "Chairman, Mir Cement Ltd" },
          "reviewBody": "He was communicative, attentive, and exceeded all project goals. The quality and attention to detail were top-notch. Five stars aren’t enough!",
          "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" }
        }
      ],
      "serviceProvided": [
        { "@type": "Service", "@id": "https://marketeryusuf.com/#service1", "name": "Brand Strategy" },
        { "@type": "Service", "@id": "https://marketeryusuf.com/#service2", "name": "Brand Marketing" },
        { "@type": "Service", "@id": "https://marketeryusuf.com/#service3", "name": "Brand Consulting" },
        { "@type": "Service", "@id": "https://marketeryusuf.com/#service4", "name": "Brand Design" }
      ]
    },
    { "@type": "Service", "@id": "https://marketeryusuf.com/#service1", "name": "Brand Strategy", "provider": { "@id": "https://marketeryusuf.com/#business" } },
    { "@type": "Service", "@id": "https://marketeryusuf.com/#service2", "name": "Brand Marketing", "provider": { "@id": "https://marketeryusuf.com/#business" } },
    { "@type": "Service", "@id": "https://marketeryusuf.com/#service3", "name": "Brand Consulting", "provider": { "@id": "https://marketeryusuf.com/#business" } },
    { "@type": "Service", "@id": "https://marketeryusuf.com/#service4", "name": "Brand Design", "provider": { "@id": "https://marketeryusuf.com/#business" } }
  ]
});

// Append to head
document.head.appendChild(script);