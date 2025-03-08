@extends('layouts.app')
@section('content')
    <x-breadcrumb title="Article" />

    <div class="blog-detials-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-main">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-details-content py-0 my-0">
                                    <h2 class="mb-3">{{ $article->name }}</h2>
                                </div>
                                <div class="blog-details-meta text-dark p-0 m-0">
                                    <span class=""><i class="far fa-calendar-alt"></i>
                                        {{ $article->created_at->format('M d, Y') }}</span>
                                    <span><i class="far fa-comments"></i> 3 Comments</span>
                                </div>
                                <div class="blog-details-des">
                                    <img class="img-thumbnail" src="{{ asset("storage/{$article->image}") }}"
                                        alt="">
                                    {!! $article->description !!}
                                </div>
                            </div>

                            {{-- <div class="col-12">
                                <button class="btn btn-sm btn-info rounded">Read More</button>
                            </div> --}}
                            <div class="col-12 mt-4">

                                <div class="blog-details-socials float-end">
                                    <h5 class="d-inline-block  mx-5">Share on Social Media</h5>
                                    <a class="btn btn-primary text-light px-5"
                                        href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('article', $article)) }}"
                                        target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-primary text-light px-5 mx-1"
                                        href="https://twitter.com/intent/tweet?url={{ urlencode(route('article', $article)) }}"
                                        target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-primary text-light px-5"
                                        href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(route('article', $article)) }}"
                                        target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>

                            {{-- <div class="col-12">
                                <h2>Comment Section</h2>
                                <button onclick="googleLogin()">Login with Google</button>
                                <p id="user-info"></p>

                                <textarea id="comment-input" placeholder="Write a comment..."></textarea>
                                <button onclick="postComment()">Post Comment</button>

                                <h3>Comments:</h3>
                                <div id="comments"></div>
                            </div> --}}


                            <div class="col-lg-12">
                                <div class="blog-details-content">
                                    <h3>2 Comments</h3>
                                </div>
                                <div class="blog-details-comment">
                                    <div class="blog-details-comment-reply">
                                        <a href="blog-details.html#">Reply</a>
                                    </div>
                                    <div class="blog-details-comment-thumb">
                                        <img src="assets/images/resource/comment1.png" alt="">
                                    </div>
                                    <div class="blog-details-comment-content">
                                        <h2>Michael jordan</h2>
                                        <span>11 September, 2023</span>
                                        <p>Nulla vitae orci luctus risus tristique sollicitudin sed at quam. Nulla sem
                                            dui, faucibus sit amet justo sed, laoreet ornare leo. </p>
                                    </div>
                                </div>
                                <div class="blog-details-comment reply">
                                    <div class="blog-details-comment-reply">
                                        <a href="blog-details.html#">Reply</a>
                                    </div>
                                    <div class="blog-details-comment-thumb">
                                        <img src="assets/images/resource/comment2.png" alt="">
                                    </div>
                                    <div class="blog-details-comment-content">
                                        <h2>Angel Jara</h2>
                                        <span>15 September, 2023</span>
                                        <p>Hello vitae orci luctus risus tristique sollicitudin sed at quam. Karet sem
                                            dui, faucibus sit amet justo sed, ornare deo </p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-details-contact">
                                <div class="blog-details-content">
                                    <h3>Post Comment</h3>
                                </div>
                                <form action="https://formspree.io/f/myyleorq" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box">
                                                <input type="text" name="Name" placeholder="Full Name"
                                                    autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box">
                                                <input type="text" name="Your Email" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="input-box">
                                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message..."></textarea>
                                            </div>
                                            <div class="input-button">
                                                <button type="submit">Submit Now <i class="fas fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div id="status"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <x-article-sidebar :article="$article" />
                </div>
            </div>
        </div>
    </div>
@endsection


@push('styles')
    <style>
        .blog-details-des {
            text-align: justify;
        }

        .blog-details-des img {
            float: left;
            max-width: 320px;
            height: auto;
        }

        @media (max-width: 992px) {
            .blog-details-des img {
                float: none;
                display: block;
                margin: 0 auto;
            }
        }
    </style>
@endpush


@push('scripts')
    <script src="https://www.gstatic.com/firebasejs/10.3.1/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.3.1/firebase-auth-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.3.1/firebase-firestore-compat.js"></script>

    <script>
        // Your Firebase Configuration
        const firebaseConfig = {
            apiKey: "AIzaSyAIx0D1BFoUD3CSYieapKhtNKy7S_E8YGo",
            authDomain: "sb-lab-bangladesh.firebaseapp.com",
            projectId: "sb-lab-bangladesh",
            storageBucket: "sb-lab-bangladesh.firebasestorage.app",
            messagingSenderId: "791173001264",
            appId: "1:791173001264:web:e408b8ecbf067817e2fdf5"
        };

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        const auth = firebase.auth();
        const db = firebase.firestore();

        // Google Login
        function googleLogin() {
            const provider = new firebase.auth.GoogleAuthProvider();
            auth.signInWithPopup(provider).then((result) => {
                const user = result.user;
                document.getElementById("user-info").innerText = `Logged in as: ${user.displayName}`;
            }).catch(error => console.error(error));
        }

        // Post Comment
        function postComment() {
            const user = auth.currentUser;
            if (!user) {
                alert("Please log in to comment.");
                return;
            }

            const commentText = document.getElementById("comment-input").value;
            if (commentText.trim() === "") {
                alert("Comment cannot be empty!");
                return;
            }

            db.collection("comments").add({
                user: user.displayName,
                text: commentText,
                timestamp: firebase.firestore.FieldValue.serverTimestamp()
            }).then(() => {
                document.getElementById("comment-input").value = "";
                loadComments();
            });
        }

        // Load Comments
        function loadComments() {
            const commentsDiv = document.getElementById("comments");
            commentsDiv.innerHTML = "";

            db.collection("comments").orderBy("timestamp", "desc").onSnapshot((snapshot) => {
                commentsDiv.innerHTML = "";
                snapshot.forEach((doc) => {
                    const data = doc.data();
                    commentsDiv.innerHTML += `<p><strong>${data.user}:</strong> ${data.text}</p>`;
                });
            });
        }

        // Auto-load comments
        loadComments();
    </script>
@endpush
