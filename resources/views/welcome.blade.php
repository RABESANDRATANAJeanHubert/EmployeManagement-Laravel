<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Employee Showcase</title>
    <style>
        .hero {
            background-image: url('https://source.unsplash.com/1600x900/?business');
            background-size: cover;
            background-position: center;
            height: 60vh;
        }
        .carousel {
        position: relative;
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .carousel-item {
        min-width: 100%;
        transition: opacity 0.5s ease-in-out;
    }

    .carousel img {
        height: 60vh; /* Adjust the height as needed */
    }
    </style>
</head>
<body class="font-sans">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <a href="#" class="text-xl font-bold text-gray-800">Your Company</a>
                    </div>
                    <div class="hidden md:ml-6 md:flex">
                        <a href="#employee" class="text-gray-600 hover:text-gray-800 px-3 py-2 rounded-md text-sm font-medium">Employees</a>
                        <a href="#contact" class="text-gray-600 hover:text-gray-800 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                    </div>
                </div>

                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
<!-- Hero Section -->
<section class="relative">
    <div class="overflow-hidden">
        <div class="carousel">
            <div class="carousel-item">
                <img src="/team.png" alt="Team 1" class="w-full h-60 object-cover">
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                    <div class="text-white text-center">
                        <h1 class="text-4xl md:text-6xl font-bold">Meet Our Team</h1>
                        <p class="mt-4 text-lg md:text-xl">Professional, Passionate, and Driven</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/userEmployee.jpg" alt="Team 2" class="w-full h-60 object-cover">
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                    <div class="text-white text-center">
                        <h1 class="text-4xl md:text-6xl font-bold">Our Dedicated Team</h1>
                        <p class="mt-4 text-lg md:text-xl">Committed to Excellence</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="customerEmployee.png" alt="Team 3" class="w-full h-60 object-cover">
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                    <div class="text-white text-center">
                        <h1 class="text-4xl md:text-6xl font-bold">Collaboration at Its Best</h1>
                        <p class="mt-4 text-lg md:text-xl">Innovative Solutions for You</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute top-1/2 left-5 transform -translate-y-1/2">
        <button id="prev" class="bg-white text-gray-800 px-3 py-1 rounded-full">Prev</button>
    </div>
    <div class="absolute top-1/2 right-5 transform -translate-y-1/2">
        <button id="next" class="bg-white text-gray-800 px-3 py-1 rounded-full">Next</button>
    </div>
</section>


    <!-- Employee Profiles -->
    <section id="employee" class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Our Employees</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Employee Card -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="/gerome.jpg" alt="Employee" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">John Doe</h3>
                        <p class="mt-2 text-gray-600">Frontend Developer</p>
                        <p class="mt-4">John is a skilled frontend developer with a passion for creating user-friendly applications.</p>
                        <div class="mt-4">
                            <span class="text-gray-700">Skills:</span>
                            <ul class="list-disc ml-5 mt-2 text-gray-600">
                                <li>HTML/CSS</li>
                                <li>JavaScript</li>
                                <li>Vue.js</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Add more employee cards here -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="/john.jpg" alt="Employee" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Jane Smith</h3>
                        <p class="mt-2 text-gray-600">Backend Developer</p>
                        <p class="mt-4">Jane specializes in backend development and loves working with databases and APIs.</p>
                        <div class="mt-4">
                            <span class="text-gray-700">Skills:</span>
                            <ul class="list-disc ml-5 mt-2 text-gray-600">
                                <li>Node.js</li>
                                <li>Express.js</li>
                                <li>MongoDB</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="/christiant.jpg" alt="Employee" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Alice Johnson</h3>
                        <p class="mt-2 text-gray-600">UX/UI Designer</p>
                        <p class="mt-4">Alice is a creative designer who focuses on enhancing user experience through innovative design.</p>
                        <div class="mt-4">
                            <span class="text-gray-700">Skills:</span>
                            <ul class="list-disc ml-5 mt-2 text-gray-600">
                                <li>Adobe XD</li>
                                <li>Figma</li>
                                <li>Sketch</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="offers" class="py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Our Offers</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Offer 1 -->
            <div class="text-center">
                <img src="/career.jpeg" alt="Offer 1" class="rounded-full w-24 h-24 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Career Opportunity</h3>
                <p class="mb-4">Join our team and grow your career with us. We are always looking for talented professionals!</p>
                <a href="/careers" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Learn More</a>
            </div>

            <!-- Offer 2 -->
            <div class="text-center">
                <img src="/internship.jpg" alt="Offer 2" class="rounded-full w-24 h-24 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Internship Program</h3>
                <p class="mb-4">Gain hands-on experience by joining our internship program and start your professional journey.</p>
                <a href="/internships" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Learn More</a>
            </div>

            <!-- Offer 3 -->
            <div class="text-center">
                <img src="/freelance.jpeg" alt="Offer 3" class="rounded-full w-24 h-24 mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Freelance Opportunities</h3>
                <p class="mb-4">Work with us on exciting freelance projects and expand your portfolio.</p>
                <a href="/freelance" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Learn More</a>
            </div>
        </div>
    </div>
</section>


    <!-- Footer -->
    <footer class="sticky-footer bg-gray-800 text-white w-full">
    <div class="container my-auto">
        <div class="flex flex-col md:flex-row justify-between items-start py-6">
            <!-- Company Description -->
            <div class="w-full md:w-1/3 mb-6">
                <h4 class="text-lg font-semibold mb-2">About Us</h4>
                <p class="text-gray-300">We are dedicated to providing high-quality products and services that enhance the lives of our customers. Our mission is to lead the industry with innovative solutions and unparalleled customer support.</p>
            </div>

            <!-- Contact Information -->
            <div class="w-full md:w-1/3 mb-6">
                <h4 class="text-lg font-semibold mb-2">Contact Us</h4>
                <p class="text-gray-300">Email: <a href="mailto:contact@yourcompany.com" class="text-blue-400 hover:underline">contact@yourcompany.com</a></p>
                <p class="text-gray-300">Phone: <a href="tel:+1234567890" class="text-blue-400 hover:underline">+1 234 567 8900</a></p>
            </div>

        </div>

    </div>
</footer>

<!-- Font Awesome for Social Media Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
    const carousel = document.querySelector('.carousel');
    const items = document.querySelectorAll('.carousel-item');
    const nextButton = document.getElementById('next');
    const prevButton = document.getElementById('prev');
    let currentIndex = 0;
    const totalItems = items.length;

    function showCurrent() {
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalItems;
        showCurrent();
    }

    const prevSlide = () => {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        showCurrent();
    }

    nextButton.addEventListener('click', nextSlide);
    prevButton.addEventListener('click', prevSlide);

    // Automatic transition every 5 seconds
    setInterval(nextSlide, 5000);
</script>

</body>
</html>
