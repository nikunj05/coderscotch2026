<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coderscotch
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Coder Scotch" />


  <!-- Structured Data (JSON-LD) -->
  <?php wp_head(); ?>
	
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6406DQY3HH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6406DQY3HH');
</script>
	 <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MPZG2SZ9');</script>
</head>
<body>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "@id": "https://coderscotch.com/#/schema/organization",
    "name": "Coder Scotch Technologies",
    "url": "https://coderscotch.com/",
    "description": "Coder Scotch is a custom web development company and custom mobile app development company helping businesses build scalable websites, web apps, mobile apps, and SaaS products worldwide.",
    "logo": "https://coderscotch.com/wp-content/uploads/2026/02/New-Coderscotch-Logo-Black.png",
    "sameAs": [
      "https://www.linkedin.com/company/coder-scotch-technologies/",
      "https://www.facebook.com/coderscotch/",
      "https://www.instagram.com/coderscotch/",
      "https://x.com/coderscotch",
      "https://www.upwork.com/freelancers/nikunjgoriya5",
      "https://clutch.co/profile/coder-scotch-technologies",
      "https://dribbble.com/coderscotch"
    ],
    "foundingDate": "2018",
    "numberOfEmployees": 25,
    "areaServed": [
        { "@type": "Country", "name": "United States" },
        { "@type": "Country", "name": "United Kingdom" },
        { "@type": "Place", "name": "Europe" },
        { "@type": "Place", "name": "Middle East" }
    ],  
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+1-832-814-0101",
      "contactType": "customer support",
      "email": "info@coderscotch.com"
    },
    "founder": {
      "@type": "Person",
      "name": "Nikunj Goriya",
      "url": "https://www.linkedin.com/in/nikunj-goriya-b7718b188/"
    },
    "address": [{
        "@type": "PostalAddress",
        "streetAddress": "1500 Broadway",
        "postalCode": "10036",
        "addressCountry": "NY"
      },
      {
        "@type": "PostalAddress",
        "streetAddress": "A-1217, Titanium Business Park, Makarba",
        "addressLocality": "Ahmedabad",
        "addressRegion": "Gujarat",
        "postalCode": "380015",
        "addressCountry": "IN"
      }]
  }
</script>
	<!-- Header Start -->
  <header class="header">
    <div class="container">
      <div class="header-inner">
      	<nav class="navbar navbar-expand-lg justify-content-between align-items-center py-0">
      		<a class="navbar-brand p-0 m-0" href="<?=site_url()?>">
      			<img src="<?= get_field('header_logo', 'option') ?>" alt="CoderScotch - Top Website and App Development Company"
              width="184" height="17" />
          </a>
      	
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <svg class="svgburg" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g class="burger-lines">
                <path d="M 5 12 L 35 12" stroke="#00BEC5" stroke-width="3" stroke-linecap="round"></path>
                <path d="M 5 20 L 35 20" stroke="#00BEC5" stroke-width="3" stroke-linecap="round"></path>
                <path d="M 5 28 L 35 28" stroke="#00BEC5" stroke-width="3" stroke-linecap="round"></path>
              </g>
              <g class="cross-lines" style="display: none;">
                <path d="M 10 10 L 30 30" stroke="#00BEC5" stroke-width="3" stroke-linecap="round"></path>
                <path d="M 10 30 L 30 10" stroke="#00BEC5" stroke-width="3" stroke-linecap="round"></path>
              </g>
            </svg>
          </button>
          <div class="collapse navbar-collapse navigation-barmenu" id="navbarSupportedContent">
          	<?php
							wp_nav_menu([
							  'theme_location' => 'header-menu',
							  'container'      => false,
							  'menu_class'     => 'navbar-nav',
							  'fallback_cb'    => false,
							  'depth'          => 3,
							  'walker'         => new CS_Header_Menu_Walker(),
							]);
							?>
            <div class="header-button-box d-flex align-items-center">
              <a class="button contactus-btn d-flex align-items-center" href="<?php echo get_permalink( get_page_by_path('contact-us') ); ?>">
                <?php echo get_the_title(263); ?>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M6.21251 1.97583C6.62417 2.10167 6.99251 2.34083 7.27501 2.66583C7.50167 2.9275 7.64751 3.25667 7.83417 3.67667L7.86751 3.75167L8.20251 4.50667L8.23917 4.58667C8.44167 5.0425 8.60084 5.39917 8.63584 5.775C8.67001 6.13167 8.62001 6.49167 8.49001 6.82583C8.35334 7.1775 8.10251 7.4775 7.78334 7.86L7.72667 7.9275C7.32667 8.4075 7.22834 8.53833 7.17501 8.68667C7.12167 8.83083 7.10001 9.04667 7.12251 9.19833C7.14584 9.3575 7.20084 9.47667 7.45084 9.94417C8.12584 11.2067 8.79251 11.8742 10.0558 12.5492C10.5233 12.7992 10.6425 12.8542 10.8017 12.8775C10.9533 12.9 11.1692 12.8783 11.3133 12.825C11.4617 12.7708 11.5925 12.6733 12.0725 12.2733L12.14 12.2167C12.5225 11.8975 12.8225 11.6467 13.1742 11.51C13.5083 11.38 13.8683 11.33 14.225 11.3642C14.6008 11.3992 14.9575 11.5583 15.4133 11.7608L15.4933 11.7967L16.2483 12.1325L16.3233 12.1658C16.7433 12.3525 17.0725 12.4983 17.3342 12.725C17.6592 13.0075 17.8983 13.3758 18.0242 13.7875C18.1258 14.1183 18.125 14.4783 18.125 14.9383V15.0433C18.125 15.4183 18.125 15.7358 18.1042 16C18.0817 16.2792 18.0342 16.54 17.9167 16.7975C17.6658 17.3433 17.1467 17.815 16.5792 18.0117C16.1025 18.1767 15.6175 18.1292 15.0083 18.07L14.9067 18.06C11.035 17.6867 7.96417 16.43 5.76751 14.2325C3.57001 12.0358 2.31334 8.965 1.94001 5.09333L1.93001 4.99167C1.87084 4.3825 1.82334 3.8975 1.98834 3.42083C2.18501 2.85333 2.65667 2.33417 3.20251 2.08333C3.46001 1.96583 3.72084 1.91833 4.00001 1.89583C4.26417 1.875 4.58167 1.875 4.95667 1.875H4.98001H5.06167C5.52167 1.875 5.88167 1.87417 6.21251 1.97583ZM4.98001 3.125C4.57501 3.125 4.30751 3.12583 4.09917 3.1425C3.90001 3.1575 3.79834 3.18583 3.72334 3.22C3.48751 3.32833 3.25417 3.585 3.16917 3.83C3.10501 4.0175 3.11084 4.21333 3.18417 4.97333C3.53834 8.64333 4.71334 11.4108 6.65084 13.3492C8.58917 15.2867 11.3567 16.4617 15.0267 16.8158C15.7867 16.8892 15.9825 16.895 16.17 16.8308C16.415 16.7458 16.6717 16.5125 16.78 16.2767C16.8142 16.2017 16.8425 16.1 16.8575 15.9008C16.8742 15.6925 16.875 15.425 16.875 15.02C16.875 14.4392 16.8683 14.2817 16.8292 14.1533C16.7717 13.965 16.6625 13.7975 16.5142 13.6692C16.4125 13.5808 16.2717 13.5108 15.7408 13.275L14.9858 12.9392C14.4108 12.6842 14.2533 12.6217 14.1067 12.6083C13.9442 12.5925 13.78 12.6158 13.6275 12.675C13.4908 12.7283 13.3558 12.8308 12.8725 13.2333L12.8075 13.2875C12.4242 13.6075 12.12 13.8617 11.7425 13.9992C11.4025 14.1233 10.9767 14.1667 10.6192 14.1142C10.2217 14.0558 9.91084 13.8892 9.52417 13.6825L9.46667 13.6517C7.98584 12.86 7.14001 12.0142 6.34834 10.5333L6.31751 10.4758C6.11084 10.0892 5.94417 9.77833 5.88584 9.38083C5.83251 9.0225 5.87667 8.5975 6.00084 8.2575C6.13834 7.88 6.39251 7.57583 6.71251 7.1925L6.76667 7.1275C7.16917 6.64417 7.27167 6.50917 7.32501 6.3725C7.38417 6.22 7.40751 6.05583 7.39167 5.89333C7.37834 5.7475 7.31584 5.58917 7.06084 5.01417L6.72501 4.25917C6.48917 3.72833 6.41917 3.5875 6.33084 3.48583C6.20251 3.3375 6.03417 3.22833 5.84667 3.17083C5.71834 3.13167 5.56084 3.125 4.98001 3.125ZM10.8333 1.875C14.8608 1.875 18.125 5.14 18.125 9.16667C18.125 9.51167 17.845 9.79167 17.5 9.79167C17.155 9.79167 16.875 9.51167 16.875 9.16667C16.875 5.83 14.17 3.125 10.8333 3.125C10.4883 3.125 10.2083 2.845 10.2083 2.5C10.2083 2.155 10.4883 1.875 10.8333 1.875ZM11.25 4.79167C13.4358 4.79167 15.2083 6.56417 15.2083 8.75C15.2083 9.095 14.9283 9.375 14.5833 9.375C14.2383 9.375 13.9583 9.095 13.9583 8.75C13.9583 7.25417 12.7458 6.04167 11.25 6.04167C10.905 6.04167 10.625 5.76167 10.625 5.41667C10.625 5.07167 10.905 4.79167 11.25 4.79167Z"
                    fill="white" />
                </svg>
              </a>
            </div>
          </div>
      </nav>
      </div>
    </div>
  </header>
  <!-- Header End -->
  
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPZG2SZ9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->