<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medicine Stock Monitoring</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.3/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-[#12332b] text-white">

  <!-- Header -->
  <header class="flex justify-between items-center p-6 max-w-7xl mx-auto">
    <div class="flex items-center space-x-2">
      <img src="../public/img/logo.png" class="h-7">
      <span class="font-bold text-xl">Medicine Stock</span>
      <span class="text-sm text-gray-300">Monitoring System</span>
    </div>
    <div class="space-x-4">
      <a href="../public/login.php" class="text-white hover:underline">Login</a>
      <a href="../public/signup.php" class="bg-lime-500 text-black px-4 py-2 rounded hover:bg-lime-600">Sign Up</a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="text-center py-20 px-4">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Your Medicine Inventory Management</h1>
    <p class="text-gray-300 text-lg mb-6">Track, manage, and monitor your clinic's medicine stock</p>
   
  </section>

  <!-- Stats Cards -->
  <section class="bg-[#e3f0e5] text-black py-12">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
      <div class="bg-white p-6 rounded shadow">
        <div class="text-3xl font-bold">1,248</div>
        <div>Total Medicines</div>
      </div>
      <div class="bg-white p-6 rounded shadow">
        <div class="text-3xl font-bold">892</div>
        <div>Available Stock</div>
      </div>
      <div class="bg-white p-6 rounded shadow">
        <div class="text-3xl font-bold">123</div>
        <div>Low Stock</div>
      </div>
      <div class="bg-white p-6 rounded shadow">
        <div class="text-3xl font-bold">17</div>
        <div>Expiring Soon</div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="py-16 px-4 max-w-6xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">Everything You Need to Manage Your Medicine Stock</h2>
    <p class="text-gray-300 mb-12">Powerful features designed for healthcare professionals</p>

    <div class="grid md:grid-cols-3 gap-8 text-left">
      <div class="bg-[#0e2c21] p-6 rounded shadow">
        <div class="bg-lime-500 w-12 h-12 flex items-center justify-center rounded mb-4">
          <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L3 21h18L12 2z"/></svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">Real-Time Tracking</h3>
        <p>Monitor your medicine inventory updates and stock levels</p>
      </div>

      <div class="bg-[#0e2c21] p-6 rounded shadow">
        <div class="bg-orange-500 w-12 h-12 flex items-center justify-center rounded mb-4">
          <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 8v8m-4-4h8"/></svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">Expiration Monitoring</h3>
        <p>Records for medicines approaching their expiration dates to minimize waste and ensure patient safety.</p>
      </div>

      <div class="bg-[#0e2c21] p-6 rounded shadow">
        <div class="bg-purple-500 w-12 h-12 flex items-center justify-center rounded mb-4">
          <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M3 3h18v18H3z"/></svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">Generate Reports</h3>
        <p>Generate Reports for documentation of sumarize inventory.</p>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.3/flowbite.min.js"></script>
</body>
</html>