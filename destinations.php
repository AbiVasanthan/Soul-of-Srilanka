<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Soul of Sri Lanka | Destinations</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary: #0f4c5c;
      --secondary: #e8f1f2;
      --accent: #d9a441;
      --dark: #1f2933;
      --light: #ffffff;
      --soft: #f8fafb;
    }

    * {
      font-family: 'Poppins', sans-serif;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      background-color: var(--light);
      color: var(--dark);
    }

    .navbar {
      background: rgba(15, 76, 92, 0.92);
      backdrop-filter: blur(6px);
    }

    .navbar-brand,
    .nav-link {
      color: white !important;
    }

    .nav-link:hover,
    .nav-link.active {
      color: #ffd166 !important;
    }

    .hero {
  background: url('images/banner.jpg') center/cover no-repeat;
  min-height: 70vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: white;
}


    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }

    .hero p {
      font-size: 1.1rem;
      max-width: 700px;
    }

    .btn-custom {
      background: linear-gradient(135deg, #d9a441, #c38b2f);
      color: white;
      border: none;
      border-radius: 40px;
      padding: 10px 22px;
      font-weight: 500;
      transition: all 0.3s ease;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    }

    .btn-custom:hover {
      transform: translateY(-3px) scale(1.03);
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      background: linear-gradient(135deg, #c38b2f, #a87420);
      color: white;
    }

    .btn-dark, .btn-secondary {
      border-radius: 40px;
      transition: all 0.3s ease;
    }

    .btn-dark:hover, .btn-secondary:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    .section-title {
      font-weight: 700;
      color: var(--primary);
    }

    .section-subtitle {
      color: #5b6870;
      max-width: 760px;
      margin: 0 auto;
    }

    .category-chip {
      border-radius: 30px;
      padding: 10px 18px;
      border: 1px solid #d6dfe3;
      background: white;
      color: var(--primary);
      font-weight: 500;
      margin: 6px;
      display: inline-block;
      text-decoration: none;
    }

    .category-chip:hover {
      background: var(--primary);
      color: white;
    }

    .feature-card,
    .place-card,
    .story-card {
      border: none;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      transition: 0.3s ease;
      background: white;
    }

    .feature-card:hover,
    .story-card:hover {
      transform: translateY(-6px);
    }

    .place-card:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }

    .feature-card img,
    .place-card img {
      width: 100%;
      object-fit: cover;
    }

    .feature-card img {
      height: 380px;
    }

    .place-card img {
      height: 240px;
    }

    .soft-section {
      background: var(--soft);
    }

    .info-box {
      background: var(--secondary);
      border-radius: 20px;
      padding: 30px;
      height: 100%;
    }

    .mini-tag {
      display: inline-block;
      background: #eef5f6;
      color: var(--primary);
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 0.85rem;
      margin-right: 8px;
      margin-bottom: 8px;
    }

    .story-card {
      padding: 28px;
      height: 100%;
    }

    .story-card h5 {
      color: var(--primary);
      font-weight: 600;
    }

    .modal-content {
      border-radius: 22px;
      border: none;
      overflow: hidden;
    }

    .modal-header {
      background: var(--primary);
      color: white;
    }

    .modal-title {
      font-weight: 600;
    }
.review-section {
  width: 100%;
  padding: 20px 0;
  background: #f8f9fa;
}

.review-box {
  width: 100vw;   /* 👈 FULL SCREEN WIDTH */
  max-width: 100%;

  display: flex;
  align-items: center;
  gap: 20px;

  padding: 20px 40px;
  background: white;

  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.review-box img {
  width: 90px;
  height: 90px;
  border-radius: 50%;
  object-fit: cover;
}

.review-text {
  flex: 1;
}.review-banner {
  display: flex;
  gap: 15px;
  align-items: center;
  flex-wrap: wrap;

  background: white;
  padding: 20px;
  border-radius: 50px;

  box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.review-banner input,
.review-banner select {
  border: none;
  padding: 10px 15px;
  border-radius: 30px;
  background: #f1f5f9;
  outline: none;
}

.review-banner input {
  flex: 1;
  min-width: 150px;
}

.review-banner select {
  width: 130px;
}

.review-banner button {
  background: linear-gradient(135deg, #d9a441, #c38b2f);
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 30px;
  cursor: pointer;
}

.review-banner button:hover {
  opacity: 0.9;
}

    footer {
      background: var(--primary);
      color: white;
      padding: 28px 0;
      text-align: center;
      margin-top: 60px;
    }

    .section-space {
      padding: 80px 0;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2.2rem;
      }

      .feature-card img {
        height: 260px;
      }
    }
    #output {
  max-height: 500px;
  overflow-y: auto;
  padding-right: 10px;
}

  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg fixed-top shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="index.html">SOUL OF SRI LANKA</a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="destination/destinastions.php">Destinations</a></li>
          <li class="nav-item"><a class="nav-link" href="gallery/gallery.php">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="travel/travel.php">Travel Guide</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="hero">
    <div class="container text-center">
      <h1>Find Your Perfect Place in Sri Lanka</h1>
      <p class="mx-auto mt-3 mb-4">
        Explore golden beaches, peaceful waterfalls, beautiful iconic places, and green mountain landscapes through a destination page designed to feel calm, modern, and beautiful.
      </p>
      <a href="#discover" class="btn btn-custom">Start Exploring</a>
    </div>
  </section>

  <section class="section-space text-center" id="discover">
    <div class="container">
      <h2 class="section-title mb-3">Destination Collections</h2>
      <p class="section-subtitle mb-4">
        Sri Lanka is not just one kind of trip. It is beaches for sunset lovers, hills for dreamers, waterfalls for adventurers, and beautiful places for unforgettable memories.
      </p>

      <div>
        <a href="#beaches" class="category-chip">Beaches</a>
        <a href="#waterfalls" class="category-chip">Waterfalls</a>
        <a href="#beautiful-places" class="category-chip">Beautiful Places</a>
        <a href="#hills" class="category-chip">Hills & Mountains</a>
      </div>
    </div>
  </section>

  <section id="beaches" class="section-space soft-section">
    <div class="container">
      <div class="row align-items-center g-4 mb-5">
        <div class="col-lg-7">
          <div class="feature-card">
            <img src="images/beach.jpg" alt="Sri Lanka Beach" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-5">
          <div class="info-box">
            <h2 class="section-title">Beautiful Beaches</h2>
            <p>
              From calm turquoise bays to surfing hotspots, Sri Lanka’s beaches offer relaxation, adventure, and unforgettable sunsets.
            </p>
            <span class="mini-tag">Sunsets</span>
            <span class="mini-tag">Surfing</span>
            <span class="mini-tag">Whale Watching</span>
            <span class="mini-tag">Sea Food</span>
          </div>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="place-card h-100">
            <img src="images/mirissa.webp" alt="Mirissa Beach">
            <div class="p-4">
              <h5>Mirissa</h5>
              <p>Known for whale watching, relaxing beach vibes, and beautiful evening skies.</p>
              <button class="btn btn-custom rounded-pill" data-bs-toggle="modal" data-bs-target="#mirissaModal">Read More</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="place-card h-100">
            <img src="images/unawatuna.webp" alt="Unawatuna Beach">
            <div class="p-4">
              <h5>Unawatuna</h5>
              <p>A calm and friendly beach ideal for swimming, relaxing, and enjoying the coastal town atmosphere.</p>
              <button class="btn btn-dark rounded-pill" data-bs-toggle="modal" data-bs-target="#unawatunaModal">Read More</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="place-card h-100">
            <img src="images/arugam bay.jpg" alt="Arugam Bay">
            <div class="p-4">
              <h5>Arugam Bay</h5>
              <p>One of Sri Lanka’s most famous surf destinations, loved by local and international travelers.</p>
              <button class="btn btn-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#arugamModal">Read More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="waterfalls" class="section-space">
    <div class="container">
      <div class="row align-items-center g-4 mb-5">
        <div class="col-lg-5 order-2 order-lg-1">
          <div class="info-box">
            <h2 class="section-title">Amazing Waterfalls</h2>
            <p>
              Waterfalls in Sri Lanka bring cool air, green surroundings, and a peaceful natural feeling. They are perfect for scenic visits and photography.
            </p>
            <span class="mini-tag">Nature Trails</span>
            <span class="mini-tag">Cool Climate</span>
            <span class="mini-tag">Photography</span>
          </div>
        </div>
        <div class="col-lg-7 order-1 order-lg-2">
          <div class="feature-card">
            <img src="images/waterfalls.jpg" alt="Sri Lanka Waterfall" class="img-fluid">
          </div>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="place-card h-100">
            <img src="images/diyaluma.jpg" alt="Diyaluma Falls">
            <div class="p-4">
              <h5>Diyaluma Falls</h5>
              <p>Famous for its height, natural pools, and scenic surroundings in the hill country.</p>
              <button class="btn btn-custom rounded-pill" data-bs-toggle="modal" data-bs-target="#diyalumaModal">Read More</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="place-card h-100">
            <img src="images/ravana.jpg" alt="Ravana Falls">
            <div class="p-4">
              <h5>Ravana Falls</h5>
              <p>A beautiful waterfall near Ella, well known for its natural beauty and legend-filled history.</p>
              <button class="btn btn-dark rounded-pill" data-bs-toggle="modal" data-bs-target="#ravanaModal">Read More</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="place-card h-100">
            <img src="images/bambarakanda.jpg" alt="Bambarakanda Falls">
            <div class="p-4">
              <h5>Bambarakanda</h5>
              <p>The tallest waterfall in Sri Lanka, surrounded by forests and refreshing mountain air.</p>
              <button class="btn btn-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#bambarakandaModal">Read More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="beautiful-places" class="section-space soft-section">
    <div class="container">
      <div class="row align-items-center g-4 mb-5">
        <div class="col-lg-7">
          <div class="feature-card"> 
            <img src="images/place.jpg" alt="Beautiful Places in Sri Lanka" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-5">
          <div class="info-box">
            <h2 class="section-title">Beautiful Places</h2>
            <p>
              Sri Lanka is full of beautiful and iconic places that combine nature, history, and breathtaking views, making every journey unforgettable.
            </p>
            <span class="mini-tag">Heritage</span>
            <span class="mini-tag">Culture</span>
            <span class="mini-tag">Photography</span>
          </div>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="place-card h-100">
            <img src="images/sigiriya.jpg" alt="Sigiriya Rock Fortress">
            <div class="p-4">
              <h5>Sigiriya Rock Fortress</h5>
              <p>Sigiriya is an ancient rock fortress and one of the most famous landmarks in Sri Lanka.</p>
              <button class="btn btn-custom rounded-pill" data-bs-toggle="modal" data-bs-target="#sigiriyaModal">Read More</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="place-card h-100">
            <img src="images/nine arch.jpg" alt="Nine Arches Bridge">
            <div class="p-4">
              <h5>Nine Arches Bridge</h5>
              <p>Nine Arches Bridge in Ella is a beautiful railway bridge surrounded by green hills.</p>
              <button class="btn btn-dark rounded-pill" data-bs-toggle="modal" data-bs-target="#ninearchesModal">Read More</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="place-card h-100">
            <img src="images/kandy templeof tooth.jpg" alt="Temple of the Tooth">
            <div class="p-4">
              <h5>Temple of the Tooth</h5>
              <p>The Temple of the Tooth in Kandy is a sacred and culturally important place in Sri Lanka.</p>
              <button class="btn btn-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#toothModal">Read More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="hills" class="section-space">
    <div class="container">
      <div class="row align-items-center g-4 mb-5">
        <div class="col-lg-5 order-2 order-lg-1">
          <div class="info-box">
            <h2 class="section-title">Hills & Mountains</h2>
            <p>
              Misty mornings, tea-covered slopes, and beautiful viewpoints make the hill country one of the most magical parts of Sri Lanka.
            </p>
            <span class="mini-tag">Hiking</span>
            <span class="mini-tag">Tea Country</span>
            <span class="mini-tag">View Points</span>
          </div>
        </div>
        <div class="col-lg-7 order-1 order-lg-2">
          <div class="feature-card">
            <img src="images/hill-main.jpg" alt="Sri Lanka Hills" class="img-fluid">
          </div>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="place-card h-100">
            <img src="images/ella rock.webp" alt="Ella Rock">
            <div class="p-4">
              <h5>Ella Rock</h5>
              <p>A famous hiking place with panoramic views, fresh breeze, and unforgettable scenery.</p>
              <button class="btn btn-custom rounded-pill" data-bs-toggle="modal" data-bs-target="#ellarockModal">Read More</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="place-card h-100">
            <img src="images/little adam's peak.jpg" alt="Little Adam's Peak">
            <div class="p-4">
              <h5>Little Adam’s Peak</h5>
              <p>An easy and beautiful walking trail in Ella with green views all around.</p>
              <button class="btn btn-dark rounded-pill" data-bs-toggle="modal" data-bs-target="#littleadamsModal">Read More</button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="place-card h-100">
            <img src="images/knuckles.jpg" alt="Knuckles Mountain Range">
            <div class="p-4">
              <h5>Knuckles Range</h5>
              <p>A stunning mountain range filled with forests, trekking routes, and natural beauty.</p>
              <button class="btn btn-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#knucklesModal">Read More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-space soft-section">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-title">Travel Feelings</h2>
        <p class="section-subtitle">Make your page feel warm and personal with small story-style sections.</p>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="story-card">
            <h5>Sunrise in the Hills</h5>
            <p>When the morning mist slowly moves away from the mountains, the hill country feels calm, fresh, and magical.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="story-card">
            <h5>Evening by the Sea</h5>
            <p>The sound of soft waves, orange skies, and warm sand make Sri Lanka’s southern beaches unforgettable.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="story-card">
            <h5>Nature All Around</h5>
            <p>From waterfalls to mountains and iconic places, every destination brings a peaceful connection to nature and culture.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modals -->
  <div class="modal fade" id="mirissaModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header"><h5 class="modal-title">Mirissa Beach</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div>
        <div class="modal-body">
          <img src="images/mirissa.webp" class="img-fluid rounded mb-3" alt="Mirissa">
          <p>Mirissa is one of the most popular beach destinations in Sri Lanka, known for whale watching, surfing, and peaceful sunsets.</p>
          <p><strong>Best Time:</strong> November to April</p>
          <p><strong>Things to Do:</strong> Surfing, whale watching, boat rides, beach relaxation</p>
          <p><strong>Location:</strong> Southern Province</p>
          <p class="rating-stars">⭐ 4.8 / 5</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="unawatunaModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Unawatuna Beach</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body"><img src="images/unawatuna.webp" class="img-fluid rounded mb-3" alt="Unawatuna"><p>Unawatuna is a calm beach with soft sand and clear water, making it perfect for swimming and relaxing.</p><p><strong>Best Time:</strong> November to April</p><p><strong>Things to Do:</strong> Swimming, snorkeling, relaxing, photography</p><p><strong>Location:</strong> Galle</p><p class="rating-stars">⭐ 4.7 / 5</p></div></div></div>
  </div>

  <div class="modal fade" id="arugamModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Arugam Bay</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body"><img src="images/arugam bay.jpg" class="img-fluid rounded mb-3" alt="Arugam Bay"><p>Arugam Bay is famous worldwide for surfing and offers a lively beach atmosphere with beautiful scenery.</p><p><strong>Best Time:</strong> May to September</p><p><strong>Things to Do:</strong> Surfing, beach walks, local food, photography</p><p><strong>Location:</strong> Eastern Province</p><p class="rating-stars">⭐ 4.8 / 5</p></div></div></div>
  </div>

  <div class="modal fade" id="diyalumaModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Diyaluma Falls</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body"><img src="images/diyaluma.jpg" class="img-fluid rounded mb-3" alt="Diyaluma"><p>Diyaluma Falls is one of the tallest waterfalls in Sri Lanka and is known for its natural pools and scenic hill-country surroundings.</p><p><strong>Best Time:</strong> Year-round</p><p><strong>Things to Do:</strong> Sightseeing, photography, nature walks</p><p><strong>Location:</strong> Badulla</p><p class="rating-stars">⭐ 4.9 / 5</p></div></div></div>
  </div>

  <div class="modal fade" id="ravanaModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Ravana Falls</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body"><img src="images/ravana.jpg" class="img-fluid rounded mb-3" alt="Ravana Falls"><p>Ravana Falls is a beautiful waterfall near Ella and is connected with well-known legends in Sri Lankan history.</p><p><strong>Best Time:</strong> October to January</p><p><strong>Things to Do:</strong> Nature visits, sightseeing, photography</p><p><strong>Location:</strong> Ella</p><p class="rating-stars">⭐ 4.6 / 5</p></div></div></div>
  </div>

  <div class="modal fade" id="bambarakandaModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Bambarakanda Falls</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body"><img src="images/bambarakanda.jpg" class="img-fluid rounded mb-3" alt="Bambarakanda"><p>Bambarakanda is the tallest waterfall in Sri Lanka, surrounded by forests and refreshing mountain air.</p><p><strong>Best Time:</strong> December to March</p><p><strong>Things to Do:</strong> Hiking, photography, sightseeing</p><p><strong>Location:</strong> Badulla District</p><p class="rating-stars">⭐ 4.7 / 5</p></div></div></div>
  </div>

  <div class="modal fade" id="sigiriyaModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Sigiriya Rock Fortress</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body"><img src="images/sigiriya.jpg" class="img-fluid rounded mb-3" alt="Sigiriya"><p>Sigiriya is an ancient rock fortress with historical importance, beautiful frescoes, and stunning views from the top.</p><p><strong>Best Time:</strong> January to April</p><p><strong>Things to Do:</strong> Climbing, history tours, photography</p><p><strong>Location:</strong> Matale District</p><p class="rating-stars">⭐ 4.9 / 5</p></div></div></div>
  </div>

  <div class="modal fade" id="ninearchesModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Nine Arches Bridge</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body"><img src="images/nine arch.jpg" class="img-fluid rounded mb-3" alt="Nine Arches"><p>Nine Arches Bridge is one of Ella’s most iconic places, surrounded by tea estates and lush green hills.</p><p><strong>Best Time:</strong> January to May</p><p><strong>Things to Do:</strong> Photography, train watching, walking</p><p><strong>Location:</strong> Ella</p><p class="rating-stars">⭐ 4.8 / 5</p></div></div></div>
  </div>

  <div class="modal fade" id="toothModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Temple of the Tooth</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body"><img src="images/kandy templeof tooth.jpg" class="img-fluid rounded mb-3" alt="Temple of the Tooth"><p>The Temple of the Tooth is one of the most sacred Buddhist sites in Sri Lanka and an important cultural landmark.</p><p><strong>Best Time:</strong> Year-round</p><p><strong>Things to Do:</strong> Cultural visits, photography, observing traditions</p><p><strong>Location:</strong> Kandy</p><p class="rating-stars">⭐ 4.8 / 5</p></div></div></div>
  </div>

  <div class="modal fade" id="ellarockModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Ella Rock</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body"><img src="images/ella rock.webp" class="img-fluid rounded mb-3" alt="Ella Rock"><p>Ella Rock is a popular hiking destination offering panoramic mountain views and fresh hill-country air.</p><p><strong>Best Time:</strong> January to April</p><p><strong>Things to Do:</strong> Hiking, photography, nature walks</p><p><strong>Location:</strong> Ella</p><p class="rating-stars">⭐ 4.7 / 5</p></div></div></div>
  </div>

  <div class="modal fade" id="littleadamsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Little Adam’s Peak</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body"><img src="images/little adam's peak.jpg" class="img-fluid rounded mb-3" alt="Little Adam's Peak"><p>Little Adam’s Peak is an easy and scenic hiking trail in Ella, loved for its peaceful green landscapes.</p><p><strong>Best Time:</strong> January to April</p><p><strong>Things to Do:</strong> Hiking, sunrise views, photography</p><p><strong>Location:</strong> Ella</p><p class="rating-stars">⭐ 4.8 / 5</p></div></div></div>
  </div>

  <div class="modal fade" id="knucklesModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Knuckles Mountain Range</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button></div><div class="modal-body"><img src="images/knuckles.jpg" class="img-fluid rounded mb-3" alt="Knuckles"><p>The Knuckles Mountain Range is rich with forests, hiking paths, biodiversity, and breathtaking views.</p><p><strong>Best Time:</strong> February to September</p><p><strong>Things to Do:</strong> Trekking, camping, photography</p><p><strong>Location:</strong> Central Province</p><p class="rating-stars">⭐ 4.9 / 5</p></div></div></div>
  </div>
    </div>
   <section class="section-space soft-section">
  <div class="container">

    <div class="text-center mb-4">
      <h2 class="section-title">Traveler Reviews</h2>
      <p class="section-subtitle">Share your experience with others</p>
    </div>

    <!-- REVIEW BANNER -->
    <div class="review-banner">
      <input type="text" id="name" placeholder="Your Name">
      <input type="text" id="place" placeholder="Place">

      <select id="rating">
        <option value="">Rating</option>
        <option value="5">⭐⭐⭐⭐⭐</option>
        <option value="4">⭐⭐⭐⭐</option>
        <option value="3">⭐⭐⭐</option>
        <option value="2">⭐⭐</option>
        <option value="1">⭐</option>
      </select>
       <select id="category">
    <option value="">Category</option>
    <option value="Beach">Beach</option>
    <option value="Waterfall">Waterfall</option>
    <option value="Hill">Hill</option>
    <option value="Cultural">Cultural</option>
     </select>
      <input type="text" id="comment" placeholder="Your experience...">

      <button id="addBtn">Submit</button>
    </div>

    <!-- OUTPUT -->
    <div id="output" class="mt-4"></div>

  </div>
</section>

<footer>
  <p>© 2026 Soul of Sri Lanka. All Rights Reserved.</p>
</footer>
<script>
const output = document.getElementById("output");
const btn = document.getElementById("addBtn");

// Load reviews
function loadReviews() {
  fetch("reviews.php")
    .then(res => res.json())
    .then(data => {
      output.innerHTML = "";

      data.reverse().forEach(r => {
        output.innerHTML += `
          <div class="review-card">
            <div class="review-name">${r.name}</div>
            <div class="review-place">${r.place}</div>
            <div class="review-stars">${"⭐".repeat(r.rating)}</div>
            <p>${r.comment}</p>
            <div class="review-date">
  ${r.date} • ${r.category}
</div>
          </div>
        `;
      });
    });
}

// Add review
btn.addEventListener("click", () => {
  const formData = new FormData();
  formData.append("name", document.getElementById("name").value);
  formData.append("place", document.getElementById("place").value);
  formData.append("rating", document.getElementById("rating").value);
  formData.append("comment", document.getElementById("comment").value);
  formData.append("category", document.getElementById("category").value);
  formData.append("date", new Date().toISOString().split('T')[0]);
  fetch("reviews.php", {
    method: "POST",
    body: formData
  })
  .then(() => {
    loadReviews();
  });
});

// Load on start
loadReviews();
</script>

</body>
</html>


