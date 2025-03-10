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
                            <div class="col-12 my-4">
                                <div class="blog-details-socials d-flex justify-content-between">
                                    <h5 class="d-inline-block">Share on Social Media</h5>
                                    <div>
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


                            <div class="col-12">
                                <div class="blog-details-content">
                                    <h3>2 Comments</h3>
                                </div>
                                <div id="commentary-box"></div>
                            </div>
                            <div class="col-12">
                                <div class="blog-details-content">
                                    <h3>Post Comment</h3>
                                </div>
                                <div class="row">
                                    <div class="col-12">

                                        <div class="">
                                            <textarea class="form-control" name="comment" id="new_comment" rows="6" placeholder="Write here..."></textarea>
                                        </div>
                                        <div class="float-end my-3">
                                            <div class="d-inline mx-2 user">User Name</div>
                                            <button type="submit" class="btn btn-primary"
                                                onclick="postComment()">Comment</button>
                                        </div>
                                    </div>
                                </div>
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

@section('reply')
    <div class="row">
        <div class="col-12">
            <div class="">
                <textarea class="form-control" name="message" id="answer" rows="6" placeholder="Write here..."></textarea>
            </div>
            <div class="float-end mt-3">
                <button type="submit" class="btn btn-primary">Comment</button>
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
        // Comment box template
        function getCommentBox(username) {
            return `<div class="row">
                    <div class="col-12">
                        <div class="user">${username}</div>
                        <div class="">
                            <textarea class="form-control" name="message" rows="6" placeholder="Write here..."></textarea>
                        </div>
                        <div class="float-end mt-3">
                            <button type="submit" class="btn btn-primary">Comment</button>
                        </div>
                    </div>
                </div>`;
        }


        function getComment(comment, commentId, reply = "") {
            console.log(comment);
            const currentUserId = firebase.auth().currentUser?.uid;
            const isCommentOwner = comment.uid === currentUserId;

            // Create the base HTML for the comment
            let commentHTML = `
                        <div class="blog-details-comment ${reply}">
                            <div class="blog-details-comment-reply">
                                ${isCommentOwner ? `
                                                    <button class="btn btn-sm btn-warning" onclick="editComment('${comment.id}', '${comment.text}')">Edit</button>
                                                    <button class="btn btn-sm btn-danger" onclick="deleteComment('${commentId}')">Delete</button>` : ''}
                                <button class="btn btn-sm btn-primary" onclick="makeReply(${commentId})">Reply</button>
                                <button class="btn btn-sm btn-danger" onclick="deleteComment('${commentId}')">Delete</button>
                            </div>
                            <div class="blog-details-comment-thumb">
                                <img class="rounded" src="${comment.userPhoto}" alt="" />
                            </div>
                            <div class="blog-details-comment-content">
                                <h2>${comment.user}</h2>
                                <span>${new Date(comment.timestamp?.toDate()).toLocaleString()}</span>
                                <p>${comment.text}</p>
                                <div id="reply_${commentId}" class="replyhere"></div>
                            </div>
                    `;

            // Check if there are replies, and loop through them if they exist
            if (comment.replies && comment.replies.length > 0) {
                comment.replies.forEach(reply => {
                    commentHTML += getComment(reply, "sjaidfiasidf", "reply"); // Recursively call for each reply
                });
            }

            // Close the main comment div
            commentHTML += `</div>`;

            return commentHTML;
        }





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
                return;
            }).catch(error => console.error(error));
        }

        // Post Comment
        function postComment() {
            const user = auth.currentUser;

            if (!user) {
                googleLogin();
            }

            const commentText = document.getElementById("new_comment").value;

            if (commentText.trim() === "") {
                alert("Comment cannot be empty!");
                return;
            }

            db.collection("comments").add({
                article_id: {{ $article->id }},
                uid: user.uid,
                user: user.displayName,
                userPhoto: user.photoURL,
                text: commentText,
                timestamp: firebase.firestore.FieldValue.serverTimestamp(),
                reply: []
            }).then(() => {
                document.getElementById("new_comment").value = "";
                loadComments();
            });

        }


        function deleteComment(commentId) {
            console.log(commentId);
            if (confirm("Are you sure you want to delete this comment?")) {
                db.collection("comments").doc(commentId).delete()
                    .then((res) => {
                        console.log(res);
                        alert("Comment deleted successfully!");
                        loadComments(); // Reload comments to reflect changes
                    })
                    .catch(error => {
                        console.error("Error deleting comment: ", error);
                    });
            }
        }


        // Load Comments
        // function loadComments() {
        //     const commentsDiv = document.getElementsByClassName("blog-details-comment")[0];
        //     commentsDiv.innerHTML = "";

        //     db.collection("comments").orderBy("timestamp", "desc").onSnapshot((snapshot) => {
        //         commentsDiv.innerHTML = "";
        //         snapshot.forEach((doc) => {
        //             const data = doc.data();
        //             commentsDiv.innerHTML += `<p><strong>${data.user}:</strong> ${data.text}</p>`;
        //         });
        //     });
        // }

        function loadComments() {
            db.collection("comments")
                // .where("article_id", "==", 1)
                .orderBy("timestamp", "desc")
                .get()
                .then((querySnapshot) => {
                    let commentsHTML = "";
                    querySnapshot.forEach((doc) => {
                        let comment = doc.data();
                        let commentId = doc.id;
                        commentsHTML += getComment(comment, commentId);
                    });
                    document.getElementById("commentary-box").innerHTML = commentsHTML;
                });
        }






        // Auto-load comments
        loadComments();
    </script>
@endpush
