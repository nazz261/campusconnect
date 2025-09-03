<html><head>
<meta charset="utf-8"/>
<link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
<link as="style" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Spline+Sans%3Awght%40400%3B500%3B700" onload="this.rel='stylesheet'" rel="stylesheet"/>
<title>Stitch Design</title>
<link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<style type="text/tailwindcss">
      :root {
        --primary-color: #ea2a33;
        --secondary-color: #b82129;
        --background-color: #1a1a1a;
        --text-primary: #f0f0f0;
        --text-secondary: #a0a0a0;
        --accent-color: #ff4d57;
      }
      body {
        font-family: "Spline Sans", sans-serif;
        background-color: var(--background-color);
        color: var(--text-primary);
      }
    </style>
</head>
<body class="font-sans">
<div class="relative flex size-full min-h-screen flex-col bg-[var(--background-color)] overflow-x-hidden">
<div class="flex h-full grow flex-col">
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[var(--secondary-color)] px-10 py-4 shadow-md">
<div class="flex items-center gap-4 text-[var(--text-primary)]">
<div class="size-6 text-[var(--primary-color)]">
<svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"></path>
</svg>
</div>
<h1 class="text-xl font-bold tracking-tight">CampusConnect Admin</h1>
</div>
</header>
<main class="flex flex-1 items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
<div class="w-full max-w-md space-y-8">
<div class="text-center">
<h2 class="text-3xl font-extrabold text-[var(--text-primary)]">Admin Portal Login</h2>
<p class="mt-2 text-sm text-[var(--text-secondary)]">Secure access for authorized personnel only.</p>
</div>
<form action="<?= site_url('auth/attemptLogin') ?>" method="post"
      class="mt-8 space-y-6 rounded-xl bg-black/20 p-8 shadow-2xl backdrop-blur-sm">
<input name="remember" type="hidden" value="true"/>
<div class="space-y-4 rounded-md">
<div>
<label class="sr-only" for="username">Username</label>
<input class="relative block w-full appearance-none rounded-md border border-[var(--text-secondary)] bg-[var(--background-color)] px-3 py-3 text-lg text-[var(--text-primary)] placeholder-[var(--text-secondary)] transition-colors duration-200 focus:z-10 focus:border-[var(--primary-color)] focus:outline-none focus:ring-[var(--primary-color)] sm:text-sm" id="username" name="username" placeholder="Username" required="" type="text"/>
</div>
<div>
<label class="sr-only" for="password">Password</label>
<input autocomplete="current-password" class="relative block w-full appearance-none rounded-md border border-[var(--text-secondary)] bg-[var(--background-color)] px-3 py-3 text-lg text-[var(--text-primary)] placeholder-[var(--text-secondary)] transition-colors duration-200 focus:z-10 focus:border-[var(--primary-color)] focus:outline-none focus:ring-[var(--primary-color)] sm:text-sm" id="password" name="password" placeholder="Password" required="" type="password"/>
</div>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center">
<input class="h-4 w-4 rounded border-gray-300 bg-gray-700 text-[var(--primary-color)] focus:ring-[var(--primary-color)]" id="remember-me" name="remember-me" type="checkbox"/>
<label class="ml-2 block text-sm text-[var(--text-secondary)]" for="remember-me"> Remember me </label>
</div>
<div class="text-sm">
<a class="font-medium text-[var(--primary-color)] hover:text-[var(--accent-color)]" href="#"> Forgot your password? </a>
</div>
</div>
<div>
<button class="group relative flex w-full justify-center rounded-md border border-transparent bg-[var(--primary-color)] py-3 px-4 text-sm font-bold text-white transition-colors duration-200 hover:bg-[var(--accent-color)] focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)] focus:ring-offset-2 focus:ring-offset-gray-900" type="submit">
<span class="absolute inset-y-0 left-0 flex items-center pl-3">
<svg aria-hidden="true" class="h-5 w-5 text-[var(--secondary-color)] group-hover:text-[var(--primary-color)]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" fill-rule="evenodd"></path>
</svg>
</span>
                  Sign in
                </button>
</div>
</form>
</div>
</main>
</div>
</div>

</body></html>