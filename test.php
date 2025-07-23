<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .image-section {
      display: flex;
      justify-content: center;
      margin: 2rem 0;
      opacity: 0;
      animation: fadeInUp 0.6s ease-out 0.3s forwards;
    }

    .image-container {
      position: relative;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: var(--shadow-lg);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      max-width: 800px;
      /* Increased from 500px */
      width: 90%;
      /* Use 90% of available width */
      max-height: 85vh;
      /* Prevent overflow on smaller screens */
    }

    .image-container:hover {
      transform: translateY(-5px) scale(1.02);
      box-shadow: var(--shadow-xl);
    }

    .image-container img {
      width: 100%;
      height: 80vh;
      /* Increased from 70vh */
      object-fit: contain;
      /* Changed from 'cover' to 'contain' to show all image content */
      display: block;
      background-color: #f8f9fa;
      /* Optional: light background for letterboxing */
    }

    .image-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
      color: white;
      padding: 1rem;
      text-align: center;
      font-size: 0.875rem;
      font-weight: 500;
    }
    </style>
</head>
<body>
    <div class="image-section">
      <div class="image-container">
        <img src="bumi-putera-cidb.jpg" alt="Contoh Premis dan Dokumen STB CIDB">
        <div class="image-overlay">
          Contoh Premis Operasi Syarikat dan Dokumen Berkaitan
        </div>
      </div>
    </div>
    <h1>black</h1>
</body>
</html>