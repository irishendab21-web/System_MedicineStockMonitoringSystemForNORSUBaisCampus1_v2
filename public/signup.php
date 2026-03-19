<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - Medicine Stock Monitoring</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.3/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-[#1a4d42] via-[#12332b] to-[#0d2620] min-h-screen flex flex-col text-white">

  <!-- Header -->
  <header class="flex justify-between items-center p-6 max-w-7xl mx-auto w-full">
    <a href="index.php" class="flex items-center space-x-2 hover:opacity-80 transition-opacity">
      <div class="w-8 h-8 bg-white rounded flex items-center justify-center">
        <img src="../public/img/logo.png" class="h-7">
      </div>
      <div class="flex flex-col">
        <span class="font-bold text-xl leading-tight">Medicine Stock</span>
        <span class="text-xs text-gray-300 leading-tight">Monitoring System</span>
      </div>
    </a>
  </header>

  <!-- Main Content -->
  <main class="flex-grow flex items-center justify-center px-4 py-8">
    
    <!-- Auth Card -->
    <div class="bg-[#d4e4d4] rounded-2xl shadow-2xl w-full max-w-md overflow-hidden">
      
      <!-- Tabs -->
      <div class="flex border-b border-gray-300">
        <a href="login.php" class="flex-1 py-4 text-center font-semibold text-sm bg-[#d4e4d4] text-gray-800 border-b-2 border-transparent hover:bg-[#c5d9c5] transition-all">
          Login
        </a>
        <button class="flex-1 py-4 text-center font-semibold text-sm bg-[#d4e4d4] text-[#2d5a27] border-b-2 border-[#2d5a27]">
          Signup
        </button>
      </div>

      <!-- Signup Form -->
      <div class="p-8">
        <h2 class="text-lg font-bold text-gray-800 text-center mb-6">Create Your Account</h2>
        
        <form class="space-y-4" onsubmit="handleSignup(event)">
          <!-- Full Name -->
          <div>
            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Full Name</label>
            <input type="text" required placeholder="Enter your full name"
                   class="w-full px-4 py-2.5 bg-[#e8f0e8] border border-gray-300 rounded-full text-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#2d5a27] focus:border-transparent transition-all placeholder-gray-400">
          </div>

          <!-- Email -->
          <div>
            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Email Address</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="far fa-envelope text-gray-400 text-xs"></i>
              </div>
              <input type="email" required placeholder="Enter your email"
                     class="w-full pl-10 pr-4 py-2.5 bg-[#e8f0e8] border border-gray-300 rounded-full text-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#2d5a27] focus:border-transparent transition-all placeholder-gray-400">
            </div>
          </div>

          <!-- Password -->
          <div>
            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Password</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-lock text-gray-400 text-xs"></i>
              </div>
              <input type="password" id="signup-password" required placeholder="Enter your password"
                     class="w-full pl-10 pr-10 py-2.5 bg-[#e8f0e8] border border-gray-300 rounded-full text-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#2d5a27] focus:border-transparent transition-all placeholder-gray-400">
              <button type="button" onclick="togglePassword('signup-password', this)" 
                      class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fas fa-eye-slash text-xs"></i>
              </button>
            </div>
          </div>

          <!-- Confirm Password -->
          <div>
            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Confirm Password</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-lock text-gray-400 text-xs"></i>
              </div>
              <input type="password" id="signup-confirm" required placeholder="Enter your password"
                     class="w-full pl-10 pr-10 py-2.5 bg-[#e8f0e8] border border-gray-300 rounded-full text-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#2d5a27] focus:border-transparent transition-all placeholder-gray-400">
              <button type="button" onclick="togglePassword('signup-confirm', this)" 
                      class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fas fa-eye-slash text-xs"></i>
              </button>
            </div>
          </div>

          <!-- Submit Button -->
          <button type="submit" 
                  class="w-full bg-[#1a472a] hover:bg-[#143620] text-white font-semibold py-3 px-6 rounded-full transition-all duration-300 transform hover:scale-[1.02] shadow-lg mt-6 uppercase tracking-wider text-sm">
            Sign Up
          </button>
        </form>

            <div class="text-center mt-4">
                <p class="text-sm text-gray-600">
                    Already have an account? 
                    <a href="login.php" class="font-semibold text-blue-800 hover:underline">
                        Login here
                    </a>
                </p>
            </div>
             <!-- ================= BACK TO HOME ================= -->
            <div class="text-center mt-3">
                <a href="../src/home.php" class="inline-flex items-center text-sm text-gray-600 hover:text-blue-800 transition-colors">
                    <i class="fas fa-arrow-left mr-1 text-xs"></i>
                    Back to Home
                </a>
            </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="p-6 text-center">
    <p class="text-xs text-gray-400">NORSU BaIs Campus I Clinic</p>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.3/flowbite.min.js"></script>
  <script>
    function togglePassword(inputId, btn) {
      const input = document.getElementById(inputId);
      const icon = btn.querySelector('i');
      if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      } else {
        input.type = 'password';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      }
    }

    function handleSignup(e) {
      e.preventDefault();
      const password = document.getElementById('signup-password').value;
      const confirm = document.getElementById('signup-confirm').value;
      
      if (password !== confirm) {
        alert('Passwords do not match!');
        return;
      }
      
      // Add your signup logic here
      alert('Signup functionality to be implemented');
    }
  </script>
</body>
</html>