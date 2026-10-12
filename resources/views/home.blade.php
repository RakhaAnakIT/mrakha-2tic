<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .hero-section {
            background-color: #3187e9;
            color: white;
            padding: 50px 0;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3rem;
        }

        .card {
            margin-top: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .footer {
            margin-top: 50px;
            padding: 20px 0;
            background-color: #f8f9fa;
            text-align: center;
        }

        .footer p {
            margin: 0;
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">My Laravel App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1> {{ $username }} </h1>
            <p> {{ $last_login }} </p>
            <p class="lead mb-0">A simple and elegant app using Bootstrap 5 and Laravel Blade.</p>
        </div>
    </section>

    <!-- Content Section -->
    <section id="content" class="container ">
        <div class="row">
            <div class="col-md-6">
                {{-- About --}}
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">About Our Application</h5>
                        <p class="card-text">Our application provides a clean and intuitive interface, allowing users to
                            navigate easily and perform tasks efficiently. Built with Laravel and Bootstrap, it offers
                            flexibility and responsiveness.</p>
                        <a href="#" class="btn btn-primary">Explore More</a>
                    </div>
                </div>

                <!-- Accordion -->
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne">
                                About Us
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We are a tech company that specializes in web development solutions.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo">
                                Our Services
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We offer web development, SEO optimization, and digital marketing services.
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Badge, List & Card --}}
                <div class="card">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Badges, List, &amp; Card</h3>
                        <div class="mb-3">
                            <span class="badge text-bg-primary">Web Dev</span>
                            <span class="badge text-bg-success">Laravel</span>
                            <span class="badge text-bg-danger">Bootstrap</span>
                        </div>
                        <ul class="list-group mb-3">
                            <li class="list-group-item">Item Satu</li>
                            <li class="list-group-item">Item Dua</li>
                            <li class="list-group-item">Item Tiga</li>
                        </ul>
                        <div class="p-3 border rounded">
                            <strong>Div umum</strong> — ini hanya <em>container</em> untuk konten bebas.
                        </div>
                        <p class="text-muted small mt-3 mb-0">
                            Gunakan <code>.card</code> untuk konten yang butuh border & sedikit efek shadow.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                {{-- Alerts --}}
                <div class="card ">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Alerts</h3>
                        <div class="alert alert-primary mb-2">Informational alert</div>
                        <div class="alert alert-success mb-2">Success alert</div>
                        <div class="alert alert-warning mb-2">Warning alert</div>
                        <div class="alert alert-danger mb-0">Danger alert</div>
                    </div>
                </div>

                {{-- Buttons --}}
                <div class="card">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Buttons</h3>
                        <div class="d-flex flex-wrap gap-2">
                            <button class="btn btn-primary">Primary</button>
                            <button class="btn btn-secondary">Secondary</button>
                            <button class="btn btn-outline-primary">Outline</button>
                            <button class="btn btn-success">Success</button>
                            <button class="btn btn-danger">Danger</button>
                        </div>
                    </div>
                </div>

                {{-- Table --}}
                <div class="card">
                    <div class="card-body">
                        <h3 class="h5 mb-3">Table</h3>
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ani</td>
                                        <td>Admin</td>
                                        <td><span class="badge text-bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Budi</td>
                                        <td>User</td>
                                        <td><span class="badge text-bg-secondary">Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Cici</td>
                                        <td>Editor</td>
                                        <td><span class="badge text-bg-warning">Pending</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-muted small mb-0">Tambahkan <code>.table-striped</code> atau
                            <code>.table-bordered</code> sesuai kebutuhan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} My Laravel App. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
