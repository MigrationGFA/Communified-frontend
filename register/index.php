<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GetfundedAfrica</title>

  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Simple styling -->
  <style>
    body {
      text-align: center;
      padding-top: 100px;
      font-family: Arial, sans-serif;
    }
    .loading-btn {
      padding: 15px 30px;
      font-size: 16px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: not-allowed;
      position: relative;
    }
    .spinner {
      border: 4px solid #f3f3f3;
      border-top: 4px solid #fff;
      border-radius: 50%;
      width: 18px;
      height: 18px;
      animation: spin 1s linear infinite;
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
    }
    @keyframes spin {
      0% { transform: translateY(-50%) rotate(0deg); }
      100% { transform: translateY(-50%) rotate(360deg); }
    }
  </style>

</head>
<body>


  <button class="loading-btn" disabled>
    Loading
    <div class="spinner"></div>
  </button>

  <script>
    // Optional: You can delay for a few seconds if needed
    $(document).ready(function() {
      setTimeout(function() {
        window.location.href = "https://getfundedafrica.com/portal/gfa/register";
      }, 2000); // Redirect after 2 seconds
    });
  </script>

</body>
</html>
