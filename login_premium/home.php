<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pre~
        <?php echo $fetch_info['name'] ?> | Home
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styleslider.css">
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <!--Here starts landing Page -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <img src="./images/fp logo.png" alt="Logo" width="50" height="30"
                class="d-inline-block align-top">Fitness Playground</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2" alt="Profile"
                                class="rounded-circle" width="32" height="32">
                            <span id="userName">
                                <?php echo $fetch_info['name'] ?>
                            </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../shared/profile.html" data-bs-toggle="modal"
                                    data-bs-target="#profileModal">Profile</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../shared/chat.html">Ask Chat</a></li>
                    <li class="nav-item"><a class="nav-link" href="../before_login/about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="../index1.php">Shopping</a></li>
                    <li class="nav-item"><a class="nav-link" href="../shared/reminder.html">Reminder</a></li>
                    <li class="nav-item"><a class="nav-link" href="../shared/profile.html">Progress</a></li>
                    <li class="nav-item"><a class="nav-link" href="../shared/conactus.html">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="../before_login/homepage.html">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <section id="about" class="mb-5 text-center">
        <h1 style="color: rgb(32, 17, 100);">Welcome to Your Fitness Journey !</h1>
    </section>
    <main class="container my-5">
        <section id="yoga-section" class="mb-5">
            <!-- <h2 class="text-center mb-4">Yoga Postures & Principles</h2> -->
            <div id="yogaCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b" class="d-block w-100" alt="Warrior Pose">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Warrior Pose (वीरभद्रासन)</h5>
                            <p>Strengthens and stretches the legs and core.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773" class="d-block w-100" alt="Tree Pose"> -->
                        <img src="https://img.freepik.com/premium-vector/woman-yoga-pose-with-tree_1324013-2292.jpg?w=740" class="d-block w-100" alt="Tree Pose">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Tree Pose (वृक्षासन)</h5>
                            <p>Improves balance and concentration.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1599447421416-3414500d18a5" class="d-block w-100" alt="Downward Dog">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Downward Dog (अधोमुख श्वानासन )</h5>
                            <p>Stretches the entire body and calms the mind.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#yogaCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#yogaCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 yoga-principle">
                        <div class="card-body text-center">
                            <i class="bi bi-brightness-high fs-1"></i>
                            <h5 class="card-title mt-3">Mindfulness</h5>
                            <p class="card-text">Being present in the moment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 yoga-principle">
                        <div class="card-body text-center">
                            <i class="bi bi-lungs fs-1"></i>
                            <h5 class="card-title mt-3">Breath Control</h5>
                            <p class="card-text">Mastering the art of breathing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 yoga-principle">
                        <div class="card-body text-center">
                            <i class="bi bi-heart fs-1"></i>
                            <h5 class="card-title mt-3">Self-Compassion</h5>
                            <p class="card-text">Treating oneself with kindness.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

     <!-- community section -->
     <section id="medals" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Your Achievements</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Medals and Badges</h5>
                            <div class="d-flex flex-wrap justify-content-center gap-3 mt-3">
                                <span class="badge bg-gold" title="Gold Medal"><i class="fas fa-medal fa-2x"></i></span>
                                <span class="badge bg-silver" title="Silver Medal"><i class="fas fa-medal fa-2x"></i></span>
                                <span class="badge bg-bronze" title="Bronze Medal"><i class="fas fa-medal fa-2x"></i></span>
                                <span class="badge bg-info" title="100 Days Streak"><i class="fas fa-fire fa-2x"></i></span>
                                <span class="badge bg-success" title="Top Contributor"><i class="fas fa-award fa-2x"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blogs" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Latest Blog Posts</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Fitness Blog Post">
                        <div class="card-body">
                            <h5 class="card-title">10 Essential Workout Tips</h5>
                            <p class="card-text">Discover the top 10 workout tips to maximize your fitness routine and achieve your goals faster.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <small class="text-muted">Posted by John Doe | 2 days ago</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Nutrition Blog Post">
                        <div class="card-body">
                            <h5 class="card-title">Nutrition for Athletes</h5>
                            <p class="card-text">Learn about the best nutrition practices for athletes to enhance performance and recovery.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <small class="text-muted">Posted by Jane Smith | 4 days ago</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1520&q=80" class="card-img-top" alt="Mental Health Blog Post">
                        <div class="card-body">
                            <h5 class="card-title">Mental Health in Sports</h5>
                            <p class="card-text">Explore the importance of mental health in sports and strategies to maintain a healthy mindset.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <small class="text-muted">Posted by Mike Johnson | 1 week ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-primary btn-lg">View All Blogs</a>
            </div>
        </div>
    </section>

    <section id="leaderboard" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Community Leaderboard</h2>
            <div class="card shadow-sm">
                <div class="card-body">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="leaderboard-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="weekly-tab" data-bs-toggle="pill" data-bs-target="#weekly" type="button" role="tab" aria-controls="weekly" aria-selected="true">Weekly</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="monthly-tab" data-bs-toggle="pill" data-bs-target="#monthly" type="button" role="tab" aria-controls="monthly" aria-selected="false">Monthly</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="alltime-tab" data-bs-toggle="pill" data-bs-target="#alltime" type="button" role="tab" aria-controls="alltime" aria-selected="false">All Time</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="leaderboard-tabContent">
                        <div class="tab-pane fade show active" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Rank</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Points</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Piyush</td>
                                        <td>1250</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Nikhil</td>
                                        <td>1100</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Prakash</td>
                                        <td>950</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Rank</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Points</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Nikhil</td>
                                        <td>5200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>prakash</td>
                                        <td>4800</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Piyush</td>
                                        <td>4600</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="alltime" role="tabpanel" aria-labelledby="alltime-tab">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Rank</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Points</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Piyush</td>
                                        <td>25000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Prakash</td>
                                        <td>23500</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Nikhil</td>
                                        <td>22800</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="community" class="py-5 bg-light">
        <div class="container" >
            <h2 class="text-center mb-4">Community Highlights</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Featured Member</h5>
                            <div class="d-flex align-items-center mb-3">
                                <img src="./images/png-transparent-jarvis-logo-edwin-jarvis-iron-man-youtube-marvel-cinematic-universe-male-jarvis-ui-comics-superhero-computer-thumbnail.png" alt="Featured Member" class="rounded-circle me-3" width="64" height="64">
                                <div>
                                    <h6 class="mb-0">Jarvis</h6>
                                    <p class="text-muted mb-0">Fitness Enthusiast</p>
                                </div>
                            </div>
                            <p class="card-text">Jarvis has been an active member of our community for over 2 years. He's known for his inspiring workout routines and helpful nutrition tips.</p>
                            <a href="#" class="btn btn-outline-primary">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Upcoming Events</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Virtual 5K Run
                                    <span class="badge bg-primary rounded-pill">Jun 15</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Nutrition Workshop
                                    <span class="badge bg-primary rounded-pill">Jun 22</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Yoga for Beginners
                                    <span class="badge bg-primary rounded-pill">Jun 30</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary mt-3">View All Events</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sports section -->
        <section id="sportsNews" class="mb-5">
            <h2 class="mb-4 text-center">Sports News</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1566577134770-3d85bb3a9cc4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Sports News 1">
                        <div class="card-body">
                            <h5 class="card-title">Major League Updates</h5>
                            <p class="card-text">Stay updated with the latest scores and highlights from your favorite sports leagues.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1560272564-c83b66b1ad12?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Sports News 2">
                        <div class="card-body">
                            <h5 class="card-title">Athlete Spotlight</h5>
                            <p class="card-text">Discover inspiring stories and interviews with top athletes from around the world.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1599058945522-28d584b6f0ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80" class="card-img-top" alt="Sports News 3">
                        <div class="card-body">
                            <h5 class="card-title">Upcoming Events</h5>
                            <p class="card-text">Mark your calendar for exciting sports events and tournaments coming your way.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Edit Profile Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="John Doe">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" value="john@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="bio" class="form-label">Bio</label>
                            <textarea class="form-control" id="bio" rows="3">Fitness enthusiast and sports lover.</textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    
    
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>About Our Fitness Community</h5>
                    <p>Join our vibrant community of fitness enthusiasts, share your journey, and grow together.</p>
                </div>
                <div class="col-md-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a class="text-light" href="../shared/chat.html">Ask chat</a></li>
                        <li><a class="text-light" href="./about.php">About</a></li>
                        <li><a class="text-light" href="../shopping/index.php">Shopping</a></li>
                        <li><a class="text-light" href="#">Community</a></li>
                        <li><a class="text-light" href="#">Sports</a></li>
                        <li><a class="text-light" href="../shared/reminder.html">Reminder</a></li>
                        <li><a class="text-light" href="../shared/profile.html">Progress</a></li>
                        <li><a class="text-light" href="../shared/conactus.html">Contact</a></li>
                        <li><a class="text-light" href="../shared/faq.html">FAQ's</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Connect With Us</h5>
                    <p>piyushpurohit074@gmail.com
                        <p>6367483860</p>
                    </p>
                    <p>prakash18052006@gmail.com
                        <p>8209898022</p>
                    </p>
                    <p>nikhilbanth783@gmail.com
                        <p>7014581250</p>
                    </p>
                    
                    <p></p>
                    <p></p>
                    <div class="d-flex">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <hr class="mt-4 mb-3">
            <p class="text-center mb-0">&copy; 2024 HackHounds. All rights reserved.</p>
        </div>
    </footer>
    </div>
    <!-- Here Start Backend -->
    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="profileModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="profileForm">
                        <div class="mb-3">
                            <label for="profileName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="profileName" required>
                        </div>
                        <div class="mb-3">
                            <label for="profilePicture" class="form-label">Profile Picture</label>
                            <input type="file" class="form-control" id="profilePicture" accept="image/*">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="saveProfile()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Initialize charts
        const weightCtx = document.getElementById('weightChart').getContext('2d');
        new Chart(weightCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Weight (lbs)',
                    data: [180, 178, 176, 174, 172, 170],
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            }
        });

        const workoutCtx = document.getElementById('workoutChart').getContext('2d');
        new Chart(workoutCtx, {
            type: 'bar',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Workout Duration (minutes)',
                    data: [30, 45, 0, 60, 30, 90, 45],
                    backgroundColor: 'rgba(75, 192, 192, 0.6)'
                }]
            }
        });

        // Form validation
        const contactForm = document.getElementById('contactForm');
        contactForm.addEventListener('submit', function (event) {
            if (!contactForm.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            contactForm.classList.add('was-validated');
        });

        // Email validation
        const emailInput = document.getElementById('email');
        emailInput.addEventListener('input', function () {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailInput.value)) {
                emailInput.setCustomValidity('Please enter a valid email address.');
            } else {
                emailInput.setCustomValidity('');
            }
        });

        // Profile update
        function saveProfile() {
            const name = document.getElementById('profileName').value;
            const picture = document.getElementById('profilePicture').files[0];

            if (name) {
                document.getElementById('userName').textContent = name;
            }

            if (picture) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.querySelector('#navbarDropdown img').src = e.target.result;
                };
                reader.readAsDataURL(picture);
            }

            const modal = bootstrap.Modal.getInstance(document.getElementById('profileModal'));
            modal.hide();
        }

        // Chat functionality
        function sendMessage() {
            const input = document.getElementById('chatInput');
            const message = input.value.trim();
            if (message) {
                const chatMessages = document.getElementById('chatMessages');
                chatMessages.innerHTML += `<p><strong>You:</strong> ${message}</p>`;
                input.value = '';
                // Simulate a response (replace with actual chat functionality)
                setTimeout(() => {
                    chatMessages.innerHTML += `<p><strong>FitBot:</strong> Thank you for your question. Our fitness expert will respond shortly.</p>`;
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                }, 1000);
            }
        }
    </script>
</body>

</html>